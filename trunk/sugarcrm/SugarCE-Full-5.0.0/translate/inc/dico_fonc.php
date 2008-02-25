<?php

function getVersions() {
    return query_db("SELECT id,descr from sugar_versions"); 
}

function checkVersions() {
    $versions = getVersions();
    if (count($versions) == 0) {  
        ?><BR><CENTER><?
        msg("No version have yet been imported, you need to import a reference language pack for this functionality");
        msg("Click <A href='lang_mngt.php'>here</A> to import a new language pack and use it as a reference for your translation");
        ?></BODY></HTML><?
        die();
    }
    return $versions[0]->id;
}

function getVersionDropDown($name = "versionDD", $val = 0, $add = "", $default_label = null) {
    $versions = query_db("SELECT id,descr from sugar_versions");
    $content = "\n<SELECT name=$name $add>";
    if ($val == 0 && isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST[$name])) $val = $_POST[$name];
    //if ($val == '' && isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET" && $isset($_GET[$name])) $val = $_GET[$name];
    if ($val == 0 && is_null($default_label) && count($versions) > 0) $val = $versions[0]->id;
    $content .= is_null($default_label)?"":"<OPTION value='$val' " . ( $val == 0 ? 'SELECTED' : '') . " >".$default_label."</OPTION>" ;
    for($i = 0 ; $i < count($versions); $i++) {
        $content .= "\n<OPTION value='".$versions[$i]->id."' " . ( $val == $versions[$i]->id ? 'SELECTED' : '') . " >".$versions[$i]->descr."</OPTION>" ; 
    }
    $content .= "\n</SELECT>\n";
    return $content;
}



function printSelect($name,$var) {

    print "\n<SELECT class='mini' name='".$name."' ><OPTION value=1 ". ($var==1 ? 'SELECTED' : '') .">Starts With</OPTION>";
    print "<OPTION value=2 ". ($var==2 ? 'SELECTED' : '') .">Contains</OPTION>";
    print "<OPTION value=3 ". ($var==3 ? 'SELECTED' : '') .">Ends With</OPTION></SELECT>\n";
}

function getLikeClause($text,$option) {
    if ($option == 1) return "'".mysql_escape_string($text)."%'";
    if ($option == 2) return "'%".mysql_escape_string($text)."%'";
    if ($option == 3) return "'%".mysql_escape_string($text)."'";
    error_log("Warning : Unexpected like clause");
    return "'%'";
}


function showDicoEntry($query,$force_area ,$checkboxes = false,$show_next = false, $show_previous = false) {
    $results = query_db($query);
    $colspan = ($checkboxes ? "4" : "3");
    $checkbox_hdr = ($checkboxes ? "<TD width=5%>Delete</TD>" : "");
    /*<TR><TD colspan=<?php echo $colspan?>><TABLE width=100%><TR><TD align=left><INPUT TYPE=submit name='back' value='Back'  class=btnform /></TD><TD align=right><INPUT TYPE=submit name='next' value='Next' class=btnform /></TD></TR>*/
    /*<TR><TD colspan=<?php echo $colspan?>><INPUT TYPE=submit name='back' value='Back' STYLE='{float:left}' class=btnform /><INPUT TYPE=submit STYLE='{float:right}' name='next' value='Next' class=btnform /></TD></TR>*/
    ?>
    <TABLE align=center cellspacing=0 width="900px" class='tabform-list' border=1>
    <TR class='title'><TD colspan=<?php echo $colspan?>>Text Entry</TD></TR>
    <TR><TD colspan=<?php echo $colspan?>><TABLE class=shell width=100%><TR><TD class=left witdh=50%><INPUT TYPE=submit name='back' value='Back' align=left class=btnform /></TD><TD class=right class=right witdh=50%><INPUT TYPE=submit name='next' value='Next' align=right class=btnform /></TD></TR></TABLE></TD></TR>
    <TR><?php echo $checkbox_hdr?><TD width=6%>Id</TD><TD width=47%>Reference</TD><TD width=47%>Translation</TD></TR>
    <?
    for ($i = 0; $i < count($results) ; $i++) {
        $class = ($i % 2 ? "odd" : "even");
        print "\n<TR class=$class>";
        if ($checkboxes) print "<TD><INPUT TYPE=checkbox NAME=del".$results[$i]->id." class=checkbox /></TD>";
        print "<TD width=6%>".$results[$i]->id."</TD><TD width=47%><div id='data".$results[$i]->id."'>".$results[$i]->ref."</div></TD><TD width=47%>";
        if ($force_area) $rows = intval(strlen($results[$i]->ref)/70) + 1;
        else $rows = intval(strlen($results[$i]->trx)/70) + 1;
        $bool = ($rows>1 || ereg("'",$results[$i]->trx));
        print "<a href='#' onClick='document.getElementById(\"entry" .
        $results[$i]->id . "\").value = document.getElementById(\"data" . 
        $results[$i]->id . "\").innerHTML; return false;'>=</a>";
        if ($bool)
        print "<TEXTAREA cols=63 rows=".$rows." name='entry".$results[$i]->id."' id='entry".$results[$i]->id."' >". $results[$i]->trx."</TEXTAREA></TD></TR>";
        else
        print "<INPUT type=text size=67 name='entry".$results[$i]->id."' id='entry".$results[$i]->id."' value='".$results[$i]->trx."' /></TD></TR>";
        
    }
    if (count($results) >=20) {
        ?><TR><TD colspan=<?php echo $colspan?>><TABLE class=shell width=100%><TR><TD class=left witdh=50%><INPUT TYPE=submit name='back' value='Back' align=left class=btnform /></TD><TD class=right class=right witdh=50%><INPUT TYPE=submit name='next' value='Next' align=right class=btnform /></TD></TR></TABLE></TD></TR><?
    }
    print "</TABLE>";
    return count($results);

}


?>