<?php


//function for translating each term from reference to traduction
//The function make a look up in the loaded dictionary (some useful approximation and automatic translation can be performed (30% of the text) )
//The records that can not be translated will be added to the to translate content.
function handle_lang_rec($lang_rec) {
    global $idx_dico,$dico,$totrx,$perform_approx,$old_totrx,$empty;
    global $found,$notfound,$auto,$approx_count,$default_key;
    //text to translate
    $text = $lang_rec->text;

    //logic for default keys ...
    if (ereg('include/language',$lang_rec->file)){
        if (ereg('default_key$',$lang_rec->label_id) || ereg('^default_.+_key$',$lang_rec->label_id) || ereg('_default$',$lang_rec->label_id) ) {
            insert_in_vtiger_terms($lang_rec,$text);
            $default_key++;$found++;
            return;
        }
    }
    //if empty, prepare an empty record to be inserted
    if (strlen($text) == 0) {
        insert_in_vtiger_terms($lang_rec,"");$empty++;$found++;
        return;
    }
    
    //Text index that will be use to lookup in the indexed dico
    //provide some performance enhancement for large dictionaries
    $ind = strtoupper(strlen($text) > 1 ? $text{0}.$text{1} : $text{0});
    //if the text is already in the translation dictionary 
    //insert the translated context as a new term
    if (isset($idx_dico[$ind]) && array_key_exists($text, $idx_dico[$ind]) ) {
        insert_in_vtiger_terms($lang_rec,$dico[$text]);
        $found++;
    //if we are performing approximation, verify if the text can be automatically translated 
    //it must be a unique word composed of uppercase character or symbols
    } else if ($perform_approx && strtoupper($text) == $text && (ereg("^([0-9A-Z()._*:%])*$",$text)) ) {
        insert_in_vtiger_terms($lang_rec,$text);
        $auto++;$found++;
    //otherwise 
    } else {
        $approx = trim(str_replace(":","",$text ));
        //if the text can be approximated we will insert the approximated text
        //approximated text are the one that ends with ':' and spaces at the start or the end
        //other approximation rules could be added below
        if ($perform_approx && $text != $approx && (trim($text) == $approx .":" || trim($text) == $approx )) {
            //verify if the approximation can be found in the dictionary
            if (array_key_exists($approx, $dico)) {
                $pref = "";
                if (ereg(":$",$text)) $add = ":";
                else if (ereg(": $",$text)) $add = ": ";
                else if (ereg(" $",$text)) $add = " ";
                else if (ereg("^ ",$text)) { $add = ""; $pref = " "; }
                insert_in_vtiger_terms($lang_rec,$pref. $dico[$approx] . $add);
                $approx_count++;
                $found++;
            } else {
                //otherwise insert the approximation in the To translate content
                if (! in_array($approx,$totrx) && ! in_array($approx,$old_totrx)) $totrx[] = $approx;
                $notfound++;
            }
        } else {
            //text that can not be approximated inserted 
            if (! in_array($text,$totrx) && ! in_array($text,$old_totrx)) {$totrx[] = $text;}
            $notfound++;
        }
    }
}

//this function is used to prepare the vtiger_terms record corresponding at the translated package
//values will be inserted in bulk into the vtiger_terms table 
function insert_in_vtiger_terms($vtiger_lang_rec,$text) {
        global $translationKey,$version_id,$sql_values;
        //Escape the test to be inserted
        $text_insert = mysql_real_escape_string($text);
        //replace the file name by the translation file name
        $file_name = ereg_replace("[^\\./]+.lang.php$", $translationKey.".lang.php", $vtiger_lang_rec->file);
        //values are the same key 
        $query = "'" .$version_id . "','".$file_name ."','".$vtiger_lang_rec->array_id."','" .
        $vtiger_lang_rec->sub_array_id."','".$vtiger_lang_rec->third_array_id."','" . 
        $vtiger_lang_rec->label_id . "','" . $vtiger_lang_rec->level . "','TRX','".
        $text_insert."'";
        //Add the values to be inserted to the queries array
        $sql_values[] = $query;
}

//default is to perform approximation
if (!isset($perform_approx)) $perform_approx= true;

//error_log("VERSION : $version_id, PERFORM APPROX ".($perform_approx ? "Y" : "N"));

//Step 0:Initialization
//Delete all existing translated terms for the given version
//As well as terms that where left for translation
mysql_query("DELETE FROM vtiger_terms WHERE lang = 'TRX' and version_id='$version_id' ");
mysql_query("DELETE FROM vtiger_lang_trx where trx = ''");

//Step 1: Load Dictionay 
//Retrieve the content of the dictionaty
$vtiger_lang_dico = query_db("SELECT * FROM vtiger_lang_dico");

//two dictionaries are used one already indexed for faster search
$idx_dico = array();
$dico = array();
for ($i = 0 ; $i < count($vtiger_lang_dico) ; $i++) {
    $key = $vtiger_lang_dico[$i]->ref;
    $value = $vtiger_lang_dico[$i]->trx;
    //indexing is based on the two first letter of the term
    if (strlen($key) > 0) { 
        $ind = strtoupper(strlen($key) > 1 ? $key{0}.$key{1} : $key{0});    
        if (! isset($idx_dico[$ind])) $idx_dico[$ind] = array();
        $idx_dico[$ind][$vtiger_lang_dico[$i]->ref] = $vtiger_lang_dico[$i]->trx;
        $dico[$vtiger_lang_dico[$i]->ref] = $vtiger_lang_dico[$i]->trx;
    }
}

//error_log("Cardinality dictionary ".count($idx_dico));


//Step 2: Loading translation that have not been commited to the dictionary
//Before performing the translation we load the on-going work  
$count = query_db("SELECT count(*) num FROM vtiger_lang_trx where trx != ''",true);
$old_totrx = array();
if ($count->num > 0) {
    msg("($count) translated values have been found in the 'To Translate' (vtiger_lang_trx) table.");
    msg("You should commit or clear the existing values in the <A href=totrx.php>To Translate module</A>.");
    $arr_old_to_trx = query_db("SELECT ref FROM vtiger_lang_trx where trx != ''");
    for ($i = 0; $i < count($arr_old_to_trx);$i++) $old_totrx[] = $arr_old_to_trx[$i]->ref;
}

//Step 3: Translation
//Retrieve the terms to be translated 
$vtiger_terms = query_db("SELECT * FROM vtiger_terms WHERE lang = 'REF' and version_id='$version_id' order by id");
//Array containing the terms that will be left for translation 
$totrx = array();
//counters initialization
$found = 0;$approx_count = 0;$notfound = 0;$auto = 0;$empty = 0; $default_key = 0;
//Array for containing the set of values to insert
$sql_values = array();

//Loop through the terms to translate each vtiger_terms record
for ($i = 0 ; $i < count($vtiger_terms) ; $i++) {
    /*if ($i % 300 == 0) {
        error_log (round((microtime(true) - $now) * 1000) . " : 300 Terms done " . $approx_count . " " . $notfound);
        $now = microtime(true);
    }*/
    handle_lang_rec($vtiger_terms[$i],true);
}

//Perform the real insert
//The insert statement is actually enormous but ensure good performance for the mysql database
//It is the concatenation of all values in a form prefered by mysql
//eg : insert into tabl (col,col,...) VALUES(val,val,...),(val,val,...) ...
if (count($sql_values) > 0) {
    $query = "INSERT INTO vtiger_terms (version_id,file,array_id,sub_array_id,third_array_id,label_id,level,lang,text) VALUES("; 
    $query .= implode("),(", $sql_values).")"; 
    mysql_query($query) or die("<SPAN class=msg-err>A mysql error occured : ".mysql_error()."</SPAN>"); 
}

//Updates for the charset and the language pack name based on the manifest and the current application charset
$lang_pack_name = $trxMnf->get("name");
mysql_query("UPDATE vtiger_terms SET text = '$html_charset' where version_id = $version_id and lang = 'TRX' and array_id = 'app_strings' and label_id = 'LBL_CHARSET'");
mysql_query("UPDATE vtiger_terms SET text = '$lang_pack_name' where version_id = $version_id and lang = 'TRX' and array_id = 'app_list_strings' and label_id = 'language_pack_name'");
           



//Step 4:Load the terms that should be translated
//flush the query array
$sql_values = array();
for ($i = 0; $i < count($totrx); $i++) {
    //fills it with the values that will have to be translated
    $sql_values[] = "'" .mysql_real_escape_string($totrx[$i])."',''";
}
//same mysql bulking here
if (count($sql_values) > 0) {
    $query = "INSERT INTO vtiger_lang_trx (ref,trx) VALUES(";
    $query .= implode("),(", $sql_values).")";
    mysql_query($query) or die("<SPAN class=msg-err>A mysql error occured : ".mysql_error()."</SPAN>");
}

$pct_total =  (count($vtiger_terms) == 0 ? 0 : round(($found/count($vtiger_terms))* 100));
$pct_approx = ($found == 0 ? 0 : round((($approx_count + $auto) / $found) * 100));
$pct_totrx = ($notfound == 0 ? 0 : round(($notfound - count($totrx)) / $notfound * 100));
//Step 5: Print the results;
print "<TABLE align=center cellspacing=0 width='500px' class='tabform' border=1>";
print "<TR class=title><TD colspan=2>Results</TD></TR>";
print "<TR><TD>".count($vtiger_terms)."</TD><TD>Count of referenced terms to translate</TD></TR>";
print "<TR><TD>$found</TD><TD class=green>Translated term found</TD></TR>";
print "<TR><TD>$notfound</TD><TD class=red>Referenced term not found</TD></TR>";
print "<TR><TD>$pct_total %</TD><TD class=red>Progression</TD></TR>";
print "</TABLE><BR>";

print "<TABLE align=center cellspacing=0 width='500px' class='tabform' border=1>";
print "<TR class=title><TD colspan=2>Details</TD></TR>";
print "<TR><TD>".count($dico)."</TD><TD>Dictionary size</TD></TR>";
print "<TR><TD>$empty</TD><TD>Empty terms</TD></TR>";
print "<TR><TD>$auto</TD><TD>Terms automatically translated</TD></TR>";
print "<TR><TD>$default_key</TD><TD>Default Keys found (automatically translated)</TD></TR>";
print "<TR><TD>$approx_count</TD><TD>Approximated terms</TD></TR>";
print "<TR><TD>$pct_approx %</TD><TD>Approximation Gain (Percentage of terms approximated)</TD></TR>";
print "<TR><TD>".count($totrx)."</TD><TD>Terms left to translate</TD></TR>";
print "<TR><TD>$pct_totrx %</TD><TD>Translation Gain (Percentage of term that will not have to be translated)</TD></TR>";

print "</TABLE>";


?>
