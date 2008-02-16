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
$isPost = isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST";


$version_id = -1;

if (!$isPost) {
    $action = "status";
    $file_path = $default_dump_file_path;
    $perform_approx = true;
    $inc_sugar_entry = "DEFINE";
    if (isset($_GET["version"])) $version_id = $_GET["version"];
} else {
    $action = $_POST["action"];
    $file_path = $_POST['file_path'];
    $perform_approx = isset($_POST['perform_approx']);
    $inc_sugar_entry = $_POST['inc_sugar_entry'];
    $version_id = $_POST["versionDD"];
}



function stickyRadio($value) {
    global $action;
    if (isset($action) && $action == $value) print "VALUE=$value CHECKED";
    else print "VALUE=$value";
}

?><CENTER><BR>
<form name="search" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
<TABLE width="600px" class='tabform'><TR><TD width=30%>Select Version : </TD><TD>
<? print getVersionDropDown("versionDD",$version_id," onchange='{document.location.href=\"".basename($_SERVER['PHP_SELF'])."?version=\"+this.value;}' STYLE='{width:170px}'","(Choose Version)"); ?> 
</TD></TR></TABLE><? 
if ($version_id > -1) {
    $mnf = new Manifest($version_id);
    if (! $mnf->check()) {
        msg("The selected version requires to define specific manifest properties.");
        msg($mnf->checkText());
        msg("Click <A href=mnf_adm.php?version=$version_id>here</A> to set the manifest properties");
    } else {
        ?>
        <BR>
        <TABLE cellspacing=0 width='700px' class='tabform' border=1  >
        <TR class='title'><TD colspan=3>Selection</TD></TR>
        <TR >
            <TD width=2%><INPUT NAME=action TYPE=radio class='radio' <? stickyRadio("status")?> /></TD><TD STYLE='text-align:left' colspan=2 width=45% ><STRONG>View translation status of language pack definition</STRONG></TD>
        </TR>
        <TR>
            <TD width=2%><INPUT NAME=action TYPE=radio class='radio' <? stickyRadio("merge")?> /></TD><TD STYLE='text-align:left'><STRONG>Create language pack definition from dictionary</STRONG></TD>
            <TD><TABLE class='shell' width=100%><TR>
                <TD width=50%>Perform Approximation</TD><TD><INPUT class="checkbox" TYPE=checkbox NAME=perform_approx <?= ($perform_approx ? "CHECKED" : "") ?> /></TD>
            </TR></TABLE></TD>
        </TR>
        <TR>
            <TD  width=2%><INPUT NAME=action TYPE=radio class='radio' <? stickyRadio("dump")?> /></TD><TD STYLE='text-align:left'><STRONG>Dump translated package to file</STRONG></TD>
            <TD><TABLE class='shell' width=100%><TR>
                <TD width=40%>Destination Directory</TD><TD><INPUT TYPE=TEXT NAME=file_path size=20 value='<?=$file_path?>' /></TD></TR><TR>
                <TD width=40%>Sugar Entry Validation</TD><TD ><TABLE>
                   <TR><TD>By Define, version &gt; 4.2.0.c&nbsp;<INPUT class="radio" TYPE=radio NAME=inc_sugar_entry VALUE="DEFINE" <?= ( empty($inc_sugar_entry) || $inc_sugar_entry == "DEFINE"  ? "CHECKED" : "") ?> /></TD></TR>
                   <TR><TD>By Global, version &lt; 4.2.0.c&nbsp;<INPUT class="radio" TYPE=radio NAME=inc_sugar_entry VALUE="GLOBALS" <?= ( ! empty($inc_sugar_entry) && $inc_sugar_entry == "GLOBALS"  ? "CHECKED" : "") ?> /></TD></TR>
                   <TR><TD>None, version &lt; 3.5&nbsp;<INPUT class="radio" TYPE=radio NAME=inc_sugar_entry VALUE="NONE" <?= ( ! empty($inc_sugar_entry) && $inc_sugar_entry == "NONE"  ? "CHECKED" : "") ?> /></TD></TR>
                </TABLE></TD>
            </TR></TABLE></TD>
        </TR>
        </TABLE>
        <BR>
        <INPUT TYPE=submit value='Submit' name='Submit' CLASS='btn'>

    <? } 
}   ?>
        <BR>
        <BR>                
</FORM>  </CENTER>
<?

if ($isPost) {

    $trxMnf = new Manifest($version_id,false);
    $translationKey = $trxMnf->getFileSuffix();
    
    print "<CENTER>";

    if ($action == "merge") {
            include("inc/merge_dico.inc");
    } else if ($action == "dump") {
        if (!isset($file_path) || ! $file_path)  msg("You must specify a directory");
        else if (! (is_readable($file_path) && is_dir($file_path))) msg("Directory $file_path not valid");
        else {
            $pack_path_prefix = dirname($file_path) ."/" . basename($file_path) . "/";
            include("inc/dump_pack.inc");
        }
    } else if ($action == "status") {
        include("inc/dico_status.inc");
    }
    print "</CENTER>";


}

?>

<BR>
</BODY>
</HTML>