<?php
/* =================================================================================================
 * Sugar Translation Suite
 * January, 2006
 * Web Based Translation tool for SugarCRM application
 * Copyright (c) http://www.grupa-atlantis.pl
 * Authors : Romain Girardot, David Konig
 * =================================================================================================
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation at 
 * http://www.gnu.org/copyleft/gpl.html#SEC3.
 * 
 */
include('def.inc');
start($html_charset,$db_charset);

function runSearch() {
        global $ref_text,$trx_text,$ref_sel,$trx_sel,$from_row,$to_row;
        $query = "SELECT * FROM sugar_lang_dico ";
        $next = "WHERE ";
        if ($ref_text != "") {
            $query .= $next . " ref like ".getLikeClause($ref_text,$ref_sel)." ";
            $next = "AND ";
        }
        if ($trx_text != "") {
            $query .= $next . " trx like ".getLikeClause($trx_text,$trx_sel)." "; 
        }
        $query .= " LIMIT ". $from_row .", ".$to_row;
        //error_log("query " . $query);
        showDicoEntryForm($query);
}

function showDicoEntryForm($query) {
     global $ref_text,$trx_text,$ref_sel,$trx_sel,$lim_text;    
    $results = query_db($query);
    msg("Displaying ".count($results)." entry");
    print "<BR>";
    $count_entry = showDicoEntry($query,false,true);
    if ($count_entry > 0 ) { ?>
        <BR><CENTER><INPUT TYPE=submit value='Update' name='update' class=btn /></CENTER>
        <?php
    }

}

my_header($title,$html_charset);
$isPost = isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST";

if($isPost) {
    $ref_text = $_POST['ref_text'];
    $trx_text = $_POST['trx_text'];
    $ref_sel = $_POST['ref_sel'];
    $trx_sel = $_POST['trx_sel'];
    $from_row = $_POST['from_row'];
    $to_row = $_POST['to_row'];
    if (isset($_POST['update'])) {
        $action = 'update';
    } else if (isset($_POST['next'])) {
        $action = "search";
        $from_row += $to_row;
    } else if (isset($_POST['back'])) {
        $action = "search";
        if ($from_row - $to_row >= 0) $from_row -= $to_row;
    } else $action = 'search';
} else {
    $ref_text = "";$trx_text = "";$ref_sel = "";$trx_sel = "";$from_row=0;$to_row=30;
}

if (!isset($from_row) || ! is_numeric($from_row)) $from_row= 0;
if (!isset($to_row) || ! is_numeric($to_row)) $to_row= 30;


?>
<BR>
<form name="search" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>?action=search">
    <TABLE align=center cellspacing=0 width="600px" class='tabform'>
    <TR class='title'><TD colspan=3>Look for dictionary entry</TD></TR>
    <TR><TD width=15%><STRONG>Reference :</STRONG></TD><TD width=15%><?php printSelect("ref_sel",$ref_sel); ?></TD><TD><INPUT TYPE=text size=70 name='ref_text' value='<?php echo $ref_text?>' /></TD></TR>
    <TR><TD width=15%><STRONG>Translation :</STRONG></TD><TD width=15%><?php printSelect("trx_sel",$trx_sel); ?></TD><TD><INPUT TYPE=text size=70 name='trx_text' value='<?php echo $trx_text?>' /></TD></TR>
    <TR><TD width=15% colspan=2><STRONG>From Row :</STRONG></TD><TD><INPUT TYPE=text size=70 name='from_row' value='<?php echo $from_row?>' /></TD></TR>
    <TR><TD width=15% colspan=2><STRONG>Row Count :</STRONG></TD><TD><INPUT TYPE=text size=70 name='to_row' value='<?php echo $to_row?>' /></TD></TR>
    </TABLE><BR>
    <CENTER><INPUT TYPE=submit value='search' name='search' class=btn /></CENTER><BR>
    
<?php
if($isPost) {
    if ($action == "search") {
        runSearch();
    } else if ($action == "update") {
        $updated = Array();
        $deleted = Array();
        foreach($_POST as $name => $value) {
            if (ereg("del",$name)) {
                $id = substr($name, 3);
                $deleted[] = $id;
            }
        }
        
        foreach($_POST as $name => $value) {
            if (ereg("entry", $name)) {
                $id = substr($name, 5);
                $dico_entry = query_db("SELECT trx FROM sugar_lang_dico WHERE id = ".$id);
                if ($dico_entry[0]->trx != $value && ! in_array($id,$deleted)) {
                        $updated[$id] = $value;
                }
            }
        }
        
        foreach ($updated as $id => $value) {
            mysql_query("update sugar_lang_dico set trx = '". mysql_real_escape_string($value) ."' WHERE id = ".$id);
        }
        for($i = 0 ; $i < count($deleted) ; $i++){
            $id = $deleted[$i];
            mysql_query("delete from sugar_lang_dico WHERE id = ".$id);
        }
        msg(count($updated) . " value(s) updated");
        runSearch();
    }
}
?>

</FORM>
</BODY>
</HTML>