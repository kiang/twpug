<?php

/* Copyright (C) 2007 Alexander Feigl

Redistribution and use in source and binary forms, with or without 
modification, are permitted provided that the following conditions 
are met:

   1. Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
   2. Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.
   3. The name of the author may not be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED 
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF 
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO 
EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT
OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY 
OF SUCH DAMAGE.
*/

require "langtool/langfile.php";
require 'langtool/isofile.php';
require 'langtool/emailfile.php';

$lfiles=array('common','groups','install','mcp','memberlist','posting',
	'search','ucp','viewforum','viewtopic','help_bbcode','help_faq',
	'acp/attachments','acp/ban','acp/board','acp/bots','acp/common',
	'acp/database','acp/email','acp/forums','acp/groups','acp/language',
	'acp/modules','acp/permissions','acp/permissions_phpbb',
	'acp/posting','acp/profile','acp/prune','acp/search',
	'acp/styles','acp/users'
);

$efiles=array(
	'admin_activate','admin_send_email','admin_welcome_activated',
	'admin_welcome_inactive','coppa_resend_inactive','coppa_welcome_inactive','email_notify',
	'forum_notify','group_added','group_approved','group_request','installed','newtopic_notify',
	'post_approved','post_disapproved','privmsg_notify','profile_send_email',
	'profile_send_im','report_closed','report_deleted','topic_approved','topic_disapproved','topic_notify',
	'user_activate_inactive','user_activate_passwd','user_activate','user_remind_inactive','user_resend_inactive',
	'user_welcome_inactive','user_welcome');

if (preg_match("/^[a-zA-Z_]+$/",$_REQUEST["language"])!=0) {
	$language=$_REQUEST["language"];
	if (!file_exists('language/'.$language.'/iso.txt')) $language=NULL;
} else $language=NULL;

if ( ($_REQUEST["langfile"]!="") && (array_search($_REQUEST["langfile"],$lfiles)!==FALSE) ) {
	$lfbase=$_REQUEST["langfile"];
} else $lfbase=NULL;

if ( ($_REQUEST["emailfile"]!="") && (array_search($_REQUEST["emailfile"],$efiles)!==FALSE) ) {
        $efbase=$_REQUEST["emailfile"];
} else $efbase=NULL;

$showall='no';
if ($_REQUEST["showall"]=="yes") $showall='yes';

header("Content-Type: text/html; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'."\n";
echo '<html xmlns="http://www.w3.org/1999/xhtml">'."\n<head>\n";
echo '<link href="langtool/langtool.css" rel="stylesheet" type="text/css" title="Langtool Stylesheet" media="screen" />',"\n";
echo '<title>phpBB3 language tool</title>'."\n";
echo '<meta http-equiv="Content-Script-Type" content="text/javascript" />'."\n";
echo "</head>\n<body>\n";


function commitEMailChanges($emailFile) {
	$nval=$_POST['new_email'];
	if (get_magic_quotes_gpc()) {
		$nval=stripslashes($nval);
        }
	$emailFile->writeValue($nval);
	$emailFile->writeFiles();
}

function outputEMailFile($emailFile) {
	$orig=$emailFile->readOriginal();
	$trans=$emailFile->readTranslated();
	$status=$emailFile->readStatus();

	echo "<h3>Legend</h3>";
	echo "<table>\n";
	echo "<tr><td class=\"translated\">&nbsp;</td>";
	echo "<td>The email is translated and not changed</td></tr>\n";
	echo "<tr><td class=\"changed\">&nbsp;</td>";
	echo "<td>The email is translated but changed since the last translation</td></tr>\n";
	echo "<tr><td class=\"badformat\">&nbsp;</td>";
	echo "<td>The email is translated but it does not use the same placeholders as the original email</td></tr>\n";
	echo "</table>\n";
	echo "<h3>Email content</h3>";

	$cl='class="translated"';

	if ($status==ESTATUS_CHANGED) {
		$cl='class="changed"';
	} else if ($status==ESTATUS_BAD_FORMAT) {
		$cl='class="badformat"';
	}


	echo '<form id="TransForm" action="'.
		htmlspecialchars($_SERVER["REQUEST_URI"],ENT_QUOTES,'UTF-8').
			'" method="post">',"\n";
	echo "<table>\n";
	echo "<tr>\n<td ".$cl.">Original Email:</td>\n<td>";
	echo '<pre>'.htmlspecialchars($orig,ENT_QUOTES,'UTF-8');
	echo "</pre></td>\n</tr>\n<tr>\n<td ".$cl.">Translated Text:</td>\n<td>";
	echo '<textarea name="new_email" cols="80" rows="20">'.
                                htmlspecialchars($trans,ENT_QUOTES,'UTF-8').'</textarea>'."\n";
	echo "</td>\n</tr>\n</table>\n";
	echo '<p><input type="hidden" name="emailChanged" value="commit" />',"\n";
	echo '<input class="button" type="submit" id="submitemail" value="Apply changes" />'."\n";
	echo '<input class="button" type="reset" id="resetemail" value="Reset changes" /></p>'."\n";
	echo '</form>'."\n";
}

function commitChanges($langFile) {
	$keys=$langFile->readKeyList();
	foreach ($keys as $key) {
		$kname="";
		foreach ($key as $ke) {
			if (get_magic_quotes_gpc()) {
				$ke=addslashes($ke);
			}
			$ke=str_replace(" ","_",$ke);
			if($kname!="") $kname.="::";
			$kname.=$ke;
		}
		if (array_key_exists('c_'.$kname,$_POST)) {
			$nval=$_POST['t_'.$kname];
			if (get_magic_quotes_gpc()) {
				$nval=stripslashes($nval);
			}
			$nval=str_replace("\r","",$nval);
			$nval=str_replace("\n"," ",$nval);
			$langFile->writeValue($key,$nval);
		}
	}
	$langFile->updateStatus();
	$langFile->writeFiles();
}

function outputLangFile($langFile,$showall) {
	echo "<h3>Legend</h3>";
	echo "<table>\n";
	echo "<tr><td class=\"translated\">&nbsp;</td>";
	echo "<td>The language string is translated and unchanged</td></tr>\n";
	echo "<tr><td class=\"changed\">&nbsp;</td>";
	echo "<td>The language string is translated but changed since the last translation</td></tr>\n";
	echo "<tr><td class=\"untranslated\">&nbsp;</td>";
	echo "<td>The language string is not translated yet</td></tr>\n";
	echo "<tr><td class=\"badformat\">&nbsp;</td>";
	echo "<td>The language string is translated but it does not use the same placeholders as the original string</td></tr>\n";
	echo "<tr><td class=\"badtail\">&nbsp;</td>";
	echo "<td>The language string is translated but it contains a space at the end where the original doesn't (or vice versa)</td></tr>\n";
 
	echo "</table>\n";
	echo "<h3>Language strings</h3>";
	echo '<form id="TransForm" action="'.
		htmlspecialchars($_SERVER["REQUEST_URI"],ENT_QUOTES,'UTF-8').'" method="post">'."\n";
	echo "<table>\n";
	echo "<tr>\n".'<th id="key">KEY NAME</th>'."\n".'<th id="original">Original text</th>'."\n";
	echo '<th id="translated">Translated text</th>'."\n".'<th id="set">Set</th>'."\n</tr>\n";

	$keys=$langFile->readKeyList();
	foreach ($keys as $key) {
		$kname="";
		foreach ($key as $ke) {
			if ($kname!="") $kname.="::";
			$ke=str_replace(" ","_",$ke);
			$kname.=$ke;
		}
		$orig=$langFile->readValue($key,LTYPE_ORIGINAL);
		$trans=$langFile->readValue($key,LTYPE_TRANSLATED);
		$status=$langFile->readValue($key,LTYPE_STATUS);
		switch ($status) {
			case LSTATUS_CHANGED:
				$cl='class="changed"';
				break;
			case LSTATUS_NEW:
				$cl='class="untranslated"';
				break;
			case LSTATUS_BAD_TAIL:
				$cl='class="badtail"';
				break;
			case LSTATUS_BAD_FORMAT:
				$cl='class="badformat"';
				break;
			default:
				$cl='class="translated"';
				break;
		}
		if (!$showall && ($status==LSTATUS_UNCHANGED)) continue;

		echo "<tr>\n<td $cl>".htmlspecialchars($kname,ENT_QUOTES,'UTF-8').
			"</td>\n<td $cl>".htmlspecialchars($orig,ENT_QUOTES,'UTF-8').
			"</td>\n<td $cl>";

		if (strlen($orig)>=40) {
			echo '<div><textarea name="t_'.$kname.'" cols="55" rows="'.ceil(strlen($orig)/30).
				'" onchange="document.forms[0].elements[\'c_'.$kname.'\'].checked=true;">'.
				htmlspecialchars($trans,ENT_QUOTES,'UTF-8')."</textarea>\n</div>\n";
		} else {
			echo '<div><input name="t_'.$kname.'" type="text" size="40" value="'.htmlspecialchars($trans,ENT_QUOTES,'UTF-8').
				'" onchange="document.forms[0].elements[\'c_'.$kname.'\'].checked=true;" />'."\n</div>\n";
		}
		echo "</td>\n<td $cl>".'<div><input name="c_'.$kname.'" type="checkbox" value="true" /></div>'."\n";

		echo "</td>\n</tr>\n";
	}
	
	echo "</table>\n";
	
	echo '<p><input type="hidden" name="languageChanged" value="commit" />'."\n";
	echo '<input class="button" type="submit" id="submitlang" value="Apply changes" />'."\n";
        echo '<input class="button" type="reset" id="resetlang" value="Reset changes" /></p>'."\n";

	echo "</form>\n";
}

echo '<div id="Header"><h1>A phpBB3 language pack translation tool</h1>'."\n";

if ($language!=NULL) {
	if ($efbase!=NULL) {
		echo "<h2>Editing ".htmlspecialchars($efbase,ENT_QUOTES,'UTF-8').".txt</h2>";
		echo '<p><a href="'.$_SERVER["PHP_SELF"].'?language='.$language.'">Back to language file selection</a></p></div>'."\n";
		$emailFile=new EmailFile($language,$efbase);
		if ($_POST["emailChanged"]=="commit") {
			commitEMailChanges($emailFile);
		}
		outputEMailFile($emailFile);
	} else if ($lfbase!=NULL) {
		echo "<h2>Editing ".htmlspecialchars($lfbase,ENT_QUOTES,'UTF-8').".php</h2>";
		echo '<p><a href="'.$_SERVER["PHP_SELF"].'?language='.$language.'">Back to language file selection</a>'."\n";
		if ($showall!='yes') {
			echo '<a href="'.$_SERVER["PHP_SELF"].'?language='.$language.'&amp;langfile='.$lfbase.
				'&amp;showall=yes">Show all strings</a></p></div>'."\n";
		} else {
			echo '<a href="'.$_SERVER["PHP_SELF"].'?language='.$language.'&amp;langfile='.$lfbase.
				'&amp;showall=no">Show untranslated strings only</a></p></div>'."\n";
		}
		$langFile=new LangFile($language,$lfbase);
		if ($_POST["languageChanged"]=="commit") {
			commitChanges($langFile);
		}
		outputLangFile($langFile,$showall=="yes");
	} else {
		echo '<p><a href="'.$_SERVER["PHP_SELF"].'">Back to language selection</a></p></div>'."\n";
		echo "<h2>Legend</h2>";
        	echo "<table>\n";
        	echo "<tr><td class=\"donefile\">&nbsp;</td>";
        	echo "<td>The file is translated and everything is okay</td></tr>\n";
  		echo "<tr><td class=\"partialfile\">&nbsp;</td>";
		echo "<td>The file exists but not everything is translated</td></tr>\n";
		echo "<tr><td class=\"missingfile\">&nbsp;</td>";
		echo "<td>The file does not exists / is not translated</td></tr>\n";
		echo "<tr><td class=\"warningfile\">&nbsp;</td>";
		echo "<td>The file contains translations with warnings (format problems etc.) or removed strings</td></tr>\n";
		echo "</table>\n";

		echo "<h2>Select a language file to edit</h2>\n";
		echo "<table>\n<tr>\n<th>File</th>\n<th>Changed</th>\n<th>Total strings</th>\n<th>Untranslated</th>\n<th>Removed</th>\n".
			"<th>Format error</th>\n<th>Tail error</th>\n</tr>\n";
		foreach ($lfiles as $lf) {
			$langFile=new LangFile($language,$lf);
			$nc=$langFile->fileChanged()?'yes':'no';
			$tot=$langFile->getTotalStrings();
			$chgs=$langFile->getUntranslated();
			$remv=$langFile->getRemovedStrings();
			$form=$langFile->getFormatErrors();
			$tail=$langFile->getTailErrors();
			$cl='class="donefile"';
			if (($tail>0) || ($form>0) || ($remv>0) ) $cl='class="warningfile"';
			if ($chgs>0) $cl='class="partialfile"';
			if ($chgs==$tot) $cl='class="missingfile"';
			
			echo "<tr>\n<td $cl><a href=\"";
			echo $_SERVER["PHP_SELF"].'?language='.$language.'&amp;langfile=';
			echo $lf;
			echo "\">$lf</a></td>\n<td $cl>$nc</td>\n<td $cl>$tot</td>\n<td $cl>$chgs</td>\n";
			echo "<td $cl>$remv</td>\n<td $cl>$form</td>\n<td $cl>$tail</td>\n</tr>\n";
			
		}
		echo "</table>\n";
		echo "<h2>Select an email to edit</h2>\n";
		echo "<table>\n<tr>\n<th>File</th>\n<th>Changed</th>\n</tr>\n";
		foreach ($efiles as $lf) {
			$eFile=new EMailFile($language,$lf);
			$nc=$eFile->fileChanged()?'yes':'no';
			$cl='class="donefile"';
			if ($nc=='yes') $cl='class="missingfile"';

			echo "<tr>\n<td $cl><a href=\"";
			echo $_SERVER["PHP_SELF"].'?language='.$language.'&amp;emailfile=';
			echo $lf;
			echo "\">$lf</a></td>\n<td $cl>$nc</td>\n</tr>\n";
		}
		echo "</table>\n";

	}
} else {
	if (is_dir('language')) {
		if ( ($_POST["new_language"]!='')  && (preg_match("/^[a-z]+$/",$_REQUEST["new_language"])!=0) && 
			(!file_exists('language/'.$file.'/iso.txt')) ) {
			$new_lang=$_POST["new_language"];
			$language_trans=$_POST["language_trans"];
			$language_en=$_POST["language_en"];
			$author=$_POST["author"];
			if (get_magic_quotes_gpc()) {
				$language_trans=stripslashes($language_trans);
				$language_en=stripslashes($language_en);
				$author=stripslashes($author);
			}			
			$if=new IsoFile($new_lang,$language_trans,$language_en,$author);
			$if->writeFile();
		}

		if ($dh = opendir('language')) {
			echo "</div>\n<h2>Edit an existing language</h2>\n";
			echo '<form id="LangSelect" action="'.$_SERVER["PHP_SELF"].
				'" method="get">'."\n";

			echo "<p>Select a language: \n".'<select name="language" size="1">'."\n";
			while (($file = readdir($dh)) !== false) {
				$ft=filetype('language/'.$file);
				if ( ($file==".") || ($file=="..") || ($file=="CVS" ||
					($file=="en") )) continue;
				if ($ft!="dir") continue;
				if (!file_exists('language/'.$file.'/iso.txt')) continue;
				echo '<option>'.$file.'</option>'."\n";
       			}
			echo "</select>\n";
			echo '<input class="button" type="submit" id="selectlang" value="Select" /></p>'."\n";
			echo "</form>\n";
			closedir($dh);	

			echo "<h2>Create new language</h2>\n";
			echo '<form id="LangCreate" action="'.$_SERVER["PHP_SELF"].
				'" method="post">'."\n";
			echo "<table>\n";
			echo "<tr>\n<td>Language id (2 letter code):</td>\n<td>";
			echo '<input type="text" size="4" name="new_language" />'."\n";
			echo "</td>\n</tr>\n<tr>\n<td>Language name (translated):</td>\n<td>";
			echo '<input type="text" size="20" name="language_trans" />'."\n";
			echo "</td>\n</tr>\n<tr>\n<td>Language name (in English):</td>\n<td>";
			echo '<input type="text" size="20" name="language_en" />'."\n";
			echo "</td>\n</tr>\n<tr>\n<td>Author:</td>\n<td>";
			echo '<input type="text" size="20" name="author" /></td></tr>'."\n";
			echo '<tr><td></td><td><input class="button" type="submit" id="addlang" value="Create language" /></td></tr></table>'."\n";
			echo "</form>";
		}
		
	}

}

echo "</body>\n</html>\n";

?>
