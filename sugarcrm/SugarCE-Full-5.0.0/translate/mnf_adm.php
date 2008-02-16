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
include('inc/manifest.class.inc');
start($html_charset,$db_charset);

my_header($title,$html_charset);

function writeMnfTable($mnf) {
    $content="";
    if ($mnf->isEmpty()) {
        $content = "<TR><TD colspan=2>Empty Manifest</TD></TR>";
    } else {
        $i = 0;
        foreach($mnf->props as $key => $value) {
            $class = (++$i % 2 ? "odd" : "even");
            $input_class = (ereg("lang_file_suffix|name",$key) ? "class='mark'" : "");
            $content .= "<TR class=$class ><TD width=15%>$key</TD><TD width=85%>";
            if ($mnf->isRef) $content .= $value;
            else {
                if (ereg("array",$value) || ereg("'",$value) || strlen($value) > 50)  $content .= "<TEXTAREA NAME=$key width=100% rows=2 cols=67>" . stripslashes($value) . "</TEXTAREA>";
                else $content .= "<INPUT $input_class NAME=$key VALUE='$value' size=70 />";
            }
            $content .= "</TD></TR>";
        }
    } 
    
    return $content;
}

$isPost = isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST";


$version_id = checkVersions();

if($isPost) {
    $isClear = isset($_POST["clear"]);
    $isUpdate = isset($_POST["update"]);
    $version_id = $_POST["versionDD"];
} else {
    $isClear = false;
    $isUpdate = false;
    if (isset($_GET["version"])) $version_id = $_GET["version"];
}

$refMnf = new Manifest($version_id,true);
$trxMnf = new Manifest($version_id,false);
    
if ($isClear) {
    if ($refMnf->isEmpty()) $trxMnf->refresh();
    else $trxMnf->refresh($refMnf);
}
if ($isUpdate) {
    $trxMnf->updateFrom($_POST);
}

?>
<CENTER>
<?  ?>
<form name="search" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
<BR>
<TABLE width="600px" class='tabform'><TR><TD width=30%>Select Version : </TD><TD>
<? print getVersionDropDown("versionDD",$version_id," onchange='{document.location.href=\"".basename($_SERVER['PHP_SELF'])."?version=\"+this.value;}' STYLE='{width:170px}'"); ?> 
</TD></TR></TABLE>
<BR>
    <TABLE align=center cellspacing=0 width="600px" class='tabform-list'>
    <TR class='title'><TD colspan=2>Reference Manifest</TD></TR>
    <? print writeMnfTable($refMnf);?>
    </TABLE>
<BR>    
    <TABLE align=center cellspacing=0 width="600px" class='tabform-list'>
    <TR class='title'><TD colspan=2>Translation Manifest</TD></TR>
    <? print writeMnfTable($trxMnf); ?>
    </TABLE>
    <BR>
    <TABLE width=300px align=center>
        <TR><TD align=center><INPUT TYPE=submit value='Refresh' class='btn' name='clear' /></TD><TD align=center><INPUT TYPE=submit class='btn' value='Save' name='update' /></TD></TR>
    </TABLE>

    
<BR>
    
</FORM>
</CENTER>

<BR>

</BODY>
</HTML>