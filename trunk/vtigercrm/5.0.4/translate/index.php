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
my_header($title,$html_charset);
?>

<BR><BR>

<TABLE align="center" cellspacing=0 width="800px" class='tabform'>
<TR class='title'><TD colspan=2>Sugar Translation Suite Index</TD></TR>
<TR><TD STYLE="{text-align:right}" width=25%><A href='lang_mngt.php'>Language Pack Manager&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Include features for : 
<LI>Displaying and Comparing SugarCRM Language Packs content (from an uploaded zip file or a sugarCRM installation) 
<LI>Importing a reference language pack in order to translate it
<LI>Importing a dictionary based on a reference and a translated language packs
</TD></TR>
<TR><TD STYLE="{text-align:right}"><A href='mnf_adm.php'>Edit Manifest&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Allow to edit the properties of the manifest of a translated pack.</TD></TR>
<TR><TD STYLE="{text-align:right}"><A href='exp_pack.php'>Translation Management&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Include functionality for : 
<LI>Viewing the status of the current translation.
<LI>Create a language pack definition based on the current dictionary, necessary step before starting the real translation.
<LI>Dump to file the current translated package definition.
</TD></TR>
<TR><TD STYLE="{text-align:right}"><A href='totrx.php'>To Translate&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Contains the definitions that should be translated.</TD></TR>
<TR><TD STYLE="{text-align:right}" ><A href='dico_adm.php'>Dictionary Administration&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Allow to display and update the content of the dictionary.</TD></TR>
<TR><TD STYLE="{text-align:right}"><A href='doc.html'>Documentation&nbsp;<IMG src="style/bullet_htm.gif" /></A></TD><TD CLASS=left>Sugar Translation Suite Documentation.</TD></TR>
</TABLE>

</BODY>
</HTML>