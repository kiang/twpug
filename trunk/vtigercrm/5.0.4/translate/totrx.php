<?php
/* =================================================================================================
 * Vtiger Translation Suite
 * January, 2006
 * Web Based Translation tool for VtigerCRM application
 * Copyright (c) http://www.grupa-atlantis.pl
 * Authors : Romain Girardot, David Konig ( Modified by kiang )
 * =================================================================================================
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation at 
 * http://www.gnu.org/copyleft/gpl.html#SEC3.
 * 
 */
 
include('def.inc');
start($html_charset,$db_charset);
                                              
function showTrxEntryForm($query) {
     global $ref_text,$ref_sel,$from_row,$to_row,$rem_blank;
    $results = query_db($query);

    msg("Displaying ".count($results)." entry");
    
    $count_entry = showDicoEntry($query,true);
    if ($count_entry > 0 ) {
        ?>
        <BR>
        <TABLE width=300px align=center><TR>
            <TD align=center><INPUT TYPE=submit value='Commit Changes' name='commit' class='btn' /></TD><TD align=center><INPUT TYPE=submit value='Update' name='update' class='btn'/></TD>
        </TR><TABLE>
        <?php
    }

}

my_header($title,$html_charset);
$isPost = isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST";

function runSearch() {
        global $ref_text,$ref_sel,$from_row,$to_row, $rem_blank;
        $query = "SELECT * FROM vtiger_lang_trx ";
        $next = "WHERE ";
        if ($ref_text != "") {
            $query .= $next . " ref like ".getLikeClause($ref_text,$ref_sel)." ";
            $next = "AND ";
        }
        if ($rem_blank == "on") {
            $query .= $next . " trx = '' ";
        }
        $query .= " LIMIT ". $from_row .", ".$to_row;
        showTrxEntryForm($query);
}

function showSearchForm() {
    global $ref_text,$ref_sel,$from_row,$to_row, $rem_blank; 
    $done = query_db("SELECT count(*) result FROM vtiger_lang_trx where trx != ''",true);
    $total = query_db("SELECT count(*) result FROM vtiger_lang_trx",true);
   $done = $done->result;
   $total = $total->result;
    $percent = ($total == 0 ? 100 : round(($done/$total) * 100,1));
    print "<BR>";
    msg("Translation status : $done/$total ( $percent %)");
    ?>
    <form name="search" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
        <TABLE align=center cellspacing=0 width="600px" class='tabform'>
        <TR class='title'><TD colspan=3>Search for entry to translate</TD></TR>
        <TR><TD width=15%><STRONG>English :</STRONG></TD><TD width=15%><?php printSelect("ref_sel",$ref_sel); ?></TD><TD><INPUT TYPE=text size=70 name='ref_text' value='<?php echo $ref_text?>' /></TD></TR>
        <TR><TD width=15% colspan=2><STRONG>From Row :</STRONG></TD><TD><INPUT TYPE=text size=70 name='from_row' value='<?php echo $from_row?>' /></TD></TR>
        <TR><TD width=15% colspan=2><STRONG>Row Count :</STRONG></TD><TD><INPUT TYPE=text size=70 name='to_row' value='<?php echo $to_row?>' /></TD></TR>
        <TR><TD width=15% colspan=2><STRONG>Only Blanks :</STRONG></TD><TD><INPUT TYPE=CHECKBOX class=checkbox name='rem_blank' <?php echo (isset($rem_blank) && $rem_blank == "on" ? "CHECKED" : "")?> /></TD></TR>
        </TABLE>
        <BR>
        <CENTER><INPUT TYPE=submit value='Search' class='btn' name='search' /></CENTER>
        <BR>
    <?php
}

if($isPost) {
    $ref_text = $_POST['ref_text'];
    $ref_sel = $_POST['ref_sel'];
    $from_row = $_POST['from_row'];
    $to_row = $_POST['to_row'];
    $rem_blank = isset($_POST['rem_blank']);
    if (isset($_POST['search'])) {
        $action = "search";
    } else if (isset($_POST['update'])) { 
        $action = "update";
    } else if (isset($_POST['next'])) {
        $action = "update";
        $from_row += $to_row;
    } else if (isset($_POST['back'])) {
        $action = "update";
        if ($from_row - $to_row >= 0) $from_row -= $to_row;
    } else if (isset($_POST['commit'])) {
        $action = "commit";
    }
    
} else {
    $ref_text = "";$ref_sel = "";$from_row=0;$to_row=30;$rem_blank="";$action = "";
}
if (!isset($from_row) || ! is_numeric($from_row)) $from_row= 0;
if (!isset($to_row) || ! is_numeric($to_row)) $to_row= 30;


if($isPost) {
    if ($action == "search") {
        showSearchForm();
        runSearch();
    } else if ($action == "update") {
        $updated = Array();
        foreach($_POST as $name => $value) {
            if (ereg("entry", $name)) {
                $id = substr($name, 5);
                $dico_entry = query_db("SELECT trx FROM vtiger_lang_trx WHERE id = ".$id);
                if ($dico_entry[0]->trx != $value) {$updated[$id] = $value;}
            }
        }

        foreach ($updated as $id => $value) {
            mysql_query("update vtiger_lang_trx set trx = '". mysql_real_escape_string($value) ."' WHERE id = ".$id);
        }
        
        showSearchForm();
        msg(count($updated) . " value(s) updated");
        runSearch();
    } else if ($action == "commit") {
        $counts = query_db("SELECT COUNT(*) cnt FROM vtiger_lang_trx WHERE trx != '' and ref NOT IN (SELECT ref FROM vtiger_lang_dico)");
        $count = $counts[0]->cnt;
        mysql_query("INSERT INTO vtiger_lang_dico (ref,trx) SELECT ref,trx FROM vtiger_lang_trx where trx != ''");
        mysql_query("DELETE FROM vtiger_lang_trx where trx != ''");
        showSearchForm();
        msg("Commited ".$count." translation(s) to dictionary");
        runSearch();
    }
} else { 
    showSearchForm();
}
?>

</FORM>
<BR>
</BODY>
</HTML>