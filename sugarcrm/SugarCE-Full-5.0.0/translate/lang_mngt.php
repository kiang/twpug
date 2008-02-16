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

// *************************
define("DEFAULT_SUGAR_PATH", "");
define("TMP_LANG_DIR", "tmp_lang");
define("ARRAY_NAMES", serialize(array('app_strings','app_list_strings','mod_strings','mod_list_strings')));
define("INFO_LABELS", serialize(array("tp" => "Type: ", "ver" => "Version: ", "sv" => "SugarCRM versions supported: ", "lg" => "Language: ", "nbl" => "Number of termes: ", "nbf" => "Number of files: ", 
                                      "dico_count" => "Imported Dictionary Size","trx_match" => "Matched Entry Count", "empty_trx" => "Empty Translation")));
define('sugarEntry',true);
//**************************

$path_to_file = "";
$sugarEntry = true;

function rmdirr($dir) {
    
   if($objs = glob($dir."/*")){
       foreach($objs as $obj) {
           is_dir($obj)? rmdirr($obj) : unlink($obj);
       }
   }
   if(!@rmdir($dir)) {
    die('<span class="err-msg">Error : can\'t remove '.$dir.'</span>');
   }
}

function simple_scandir($dir) { 
   $dir_open = @opendir($dir);
   if (!$dir_open) {
       return false;
   }   
   while (($dir_content = readdir($dir_open)) !== false) {
           $files[] = $dir_content;
   }
   return $files;
}

function find_base_dir($path_to_file) {
    $file_list = array();
    $file_list = simple_scandir($path_to_file);
    if(in_array("modules", $file_list) && in_array("include", $file_list)) {
        return  $path_to_file;
    } else {
        for($i=0;$i<count($file_list);$i++) {
            if($file_list[$i] != "." && $file_list[$i] != ".." && is_dir($path_to_file."/".$file_list[$i])) {
                return  find_base_dir($path_to_file."/".$file_list[$i]);  
            }
        }
    } 
}

function get_uploaded($ext) {
    
	require_once('inc/sugar_inc/zip_utils.php');
	require_once('inc/sugar_inc/file_utils.php');
	require_once('inc/sugar_inc/dir_inc.php');
	
	global $info_lang;
	global $pack_files;
	global $path_to_file;
	
    $pack_files  = array();
    
	if(is_dir(TMP_LANG_DIR."/langpack".$ext)) { 
        	rmdirr(TMP_LANG_DIR."/langpack".$ext);
    	}
    
	$msg = "";
	
        if(empty($_FILES['file_name'.$ext]['tmp_name']) || $_FILES['file_name'.$ext]['size'] == 0){
            $msg =  '<span class="err-msg">File not found</span><br>';
        } else {
            $dir_name =  "langpack".$ext;
 
            $base_filename = urldecode($_REQUEST['file_name_escaped'.$ext]);
            $base_filename = preg_replace( "#\\\\#", "/", $base_filename );
            $base_filename = basename($base_filename);

            mkdir_recursive( TMP_LANG_DIR."/".$dir_name );
            $target_path = TMP_LANG_DIR."/".$dir_name."/".$base_filename;

            if( move_uploaded_file( $_FILES['file_name'.$ext]['tmp_name'], $target_path) ){
                $msg =   '<span class="msg">The file '.$base_filename.' has been uploaded.</span><br>';
                unzip( $target_path, TMP_LANG_DIR."/".$dir_name);

                $path_to_file = find_base_dir(TMP_LANG_DIR."/".$dir_name);
                $pack_files  = findAllFilesRelative( $path_to_file, array() );
                
            }
            else{
                $msg =  '<span class="err-msg">There was an error uploading the file, please try again!</span><br>';
            }
        }
        return $msg;
}

function display_menu() {
    
    if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
       $source = $_POST['srctype'];
       $source_cp = $_POST['srctype_cp'];
       $action =  $_POST['action'];
    } else {
        $source = 'upload';
        $source_cp = 'upload';
        $action = 'show_info';    
    }    
        
?><FORM name="the_form" method="post" action="<?basename(__FILE__); ?>" onsubmit="javascript:return Validate();" enctype="multipart/form-data">
<SCRIPT language="javascript" src="style/lang_mngt_js.js"></SCRIPT>
<TABLE class="tabform" border="0" width="800" cellpadding="2" cellspacing="0" align="center">
<TR class="title"><TD colspan=2>LangPack #1</TD></TR>
    <TR><TD><STRONG>Source:</STRONG></TD><TD><TABLE width=100% class=shell >
    <TR class=packed><TD width=10%><INPUT class="radio" NAME="srctype" id="srctype" TYPE="radio" VALUE="upload" onclick="displaySrc('')" <?print($source=='upload')?'CHECKED':'';?> /></TD>
        <TD class=left>Uploaded Pack</TD></TR>
    <TR class=packed><TD width=10%>    
        <INPUT class="radio" NAME="srctype" id="srctype" TYPE="radio" VALUE="sug_inst" onclick="displaySrc('')" <?print($source=='sug_inst')?'CHECKED':'';?> />
        <TD class=left>Existing SugarCRM instance</TD></TR>
    </TABLE>
    </TD></TR> 
<TR id="upload_row" style="display:"><TD width=40% align="right"><STRONG>File:</STRONG></TD><TD width=60% align="left"><input type="file" name="file_name" size="40" value="" /></TD></TR>
<TR id="sugar_path" style="display:none"><TD width=40% align="right"><STRONG>Sugar installation path:</STRONG></TD><TD width=60% align="left"><input type="text" name="sugar_path" size="40" value="<?
print(isset($_POST['sugar_path']) && $_POST['sugar_path'] != "")?$_POST['sugar_path']:DEFAULT_SUGAR_PATH; 
?>" /></TD></TR>
<TR id="lang_row" style="display:none"><TD width=40% align="right"><STRONG>Lang:</STRONG></TD><TD width=60% align="left"><?     
      if (isset($_POST['srctype']) && $_POST['srctype'] == "sug_inst") {
            if(isset($_POST['sugar_path'])) {
                if(is_readable($_POST['sugar_path']."/config.php")) {
                    include($_POST['sugar_path']."/config.php");
                    $lang_list = (isset($sugar_config) && array_key_exists('languages', $sugar_config))?$sugar_config['languages']:array();
                    unset($sugar_config);
                    if(count($lang_list)>0) {
                        print "<SELECT name='drop_lang'>";
                        while (list($key, $val) = each($lang_list)) {
                            if(isset($_POST['drop_lang']) && $_POST['drop_lang'] == $key) {
                                $selected = ' SELECTED ';
                            } else {
                                $selected = '';
                            }
                            print '<OPTION value="'.$key.'" '.$selected.'>'.$val.'</OPTION>';
                        }
                        print "</SELECT>";
                    } else {
                        print 'No language informations found in "'.$_POST['sugar_path'].'/config.php"<BR>';
                        print 'Using default language <strong>en_us</strong>';
                        print '<INPUT type="hidden" name="drop_lang" value="en_us" />';
                    } 
                } else {
                    print 'Can\'t find "config.php" in "'.$_POST['sugar_path'].'"';
                    print '&nbsp;<INPUT type="submit" value="Search again" class="btnform">';
                }   
            }
        } else {
            print '<INPUT type="submit" value="Find available languages" class="btnform">';   
        }
?></TD></TR>
<TR><TD width=40% align="right"><STRONG>Action:</STRONG></TD><TD width=60% align="left"><SELECT name="action" id="action" onchange="displayAction()">
    <OPTION value="show_info" <?$action=='show_info'?print'SELECTED':print'';?>>Show language pack info</OPTION>
    <OPTION value='compare_info' <?$action=='compare_info'?print'SELECTED':print'';?>>Compare to language pack</OPTION>
    <OPTION value='import_info' <?$action=='import_info'?print'SELECTED':print'';?>>Import to database</OPTION>
    <OPTION value='import_dico' <?$action=='import_dico'?print'SELECTED':print'';?>>Import dictionary from translated pack</OPTION>
</SELECT></TD></TR>
<TR id="db_options" style="display:none"><TD width=40% align="right"><STRONG>DB Import Options:</STRONG></TD><TD width=60% align="left"><?
    print getVersionDropDown('drop_version', 0, "", 'New Version: ');     
    print '&nbsp;<input type="text" name="new_version" size="20" value="';
    print(isset($_POST['new_version']) && $_POST['new_version'] != "")?$_POST['new_version']:""; 
    print '" />';    

?></TD></TR>
</TABLE><BR><DIV align="center">
<DIV id="compared" style="display:<?print(isset($_POST['action']) && $_POST['action'] == "compare_info")?'inline':'none';?>">
<TABLE class="tabform" border="0" width="800" cellpadding="2" cellspacing="0" align="center">
<TR class="title"><TD colspan=2>LangPack #2</TD></TR>
    <TR><TD><STRONG>Source:</STRONG></TD><TD><TABLE width=100% class=shell >
    <TR class=packed><TD width=10%><INPUT class="radio" NAME="srctype_cp" id="srctype_cp" TYPE="radio" VALUE="upload" onclick="displaySrc('_cp')" <?print($source_cp=='upload')?'CHECKED':'';?> /></TD>
        <TD class=left>Uploaded Pack</TD></TR>
    <TR class=packed><TD width=10%>    
        <INPUT class="radio" NAME="srctype_cp" id="srctype_cp" TYPE="radio" VALUE="sug_inst" onclick="displaySrc('_cp')" <?print($source_cp=='sug_inst')?'CHECKED':'';?> />
        <TD class=left>Existing SugarCRM instance</TD></TR>
    </TABLE>
    </TD></TR> 
<TR id="upload_row_cp" style="display:"><TD width=40% align="right"><STRONG>File:</STRONG></TD><TD width=60% align="left"><input type="file" name="file_name_cp" size="40" value="" /></TD></TR>
<TR id="sugar_path_cp" style="display:none"><TD width=40% align="right"><STRONG>Sugar installation path:</STRONG></TD><TD width=60% align="left"><input type="text" name="sugar_path_cp" size="40" value="<?
print(isset($_POST['sugar_path_cp']) && $_POST['sugar_path_cp'] != "")?$_POST['sugar_path_cp']:DEFAULT_SUGAR_PATH;
?>" /></TD></TR>
<TR id="lang_row_cp" style="display:none"><TD width=40% align="right"><STRONG>Lang:</STRONG></TD><TD width=60% align="left"><?
      if (isset($_POST['srctype_cp']) && $_POST['srctype_cp'] == "sug_inst") {
            if(isset($_POST['sugar_path_cp'])) {
                if(is_readable($_POST['sugar_path_cp']."/config.php")) {
                    include($_POST['sugar_path_cp']."/config.php");
                    $lang_list = (isset($sugar_config) && array_key_exists('languages', $sugar_config))?$sugar_config['languages']:array();
                    unset($sugar_config);
                    if(count($lang_list) >0) {
                        print "<SELECT name='drop_lang_cp'>";
                        while (list($key, $val) = each($lang_list)) {
                            if(isset($_POST['drop_lang_cp']) && $_POST['drop_lang'] == $key) {
                                $selected = ' SELECTED ';
                            } else {
                                $selected = '';
                            }                            
                            print '<OPTION value="'.$key.'" '.$selected.'>'.$val.'</OPTION>';
                        }
                        print "</SELECT>";
                    } else {
                        print 'No language informations found in "'.$_POST['sugar_path_cp'].'/config.php"<BR>';
                        print 'Using default language <strong>en_us</strong>';
                        print '<INPUT type="hidden" name="drop_lang_cp" value="en_us" />';   
                    }  
                } else {
                    print 'Can\'t find "config.php" in "'.$_POST['sugar_path_cp'].'"';
                    print '&nbsp;<INPUT type="submit" value="Search again" class="btnform">';
                }   
            }
        } else {
            print '<INPUT type="submit" value="Find available languages" class="btnform">';   
        }
?></TD></TR>
</TABLE><BR>
</DIV>
<INPUT type="button" value="Reset" onclick="javascript:location.href='lang_mngt.php';" class="btn">&nbsp;&nbsp;
<INPUT type="submit" value="go" class="btn"></DIV>
<INPUT type="hidden" name="file_name_escaped" value="" />
<INPUT type="hidden" name="file_name_escaped_cp" value="" />
<SCRIPT TYPE="text/javascript">
displaySrc("");
displaySrc("_cp");
displayAction();
</SCRIPT>
</FORM>	<?
}
function getPackInfo($path, $ext, $lang = null) {
    
    $info_lang = array();
    $info_lang["nbl"] = 0;
	$info_lang["nbf"] = 0;
    
    if($_POST['srctype'.$ext] == "upload") { // uploaded pack
       if(is_readable(TMP_LANG_DIR."/langpack".$ext."/manifest.php")) {
            include(TMP_LANG_DIR."/langpack".$ext."/manifest.php");
            if(isset($manifest)) {
                $tmp_manifest = $manifest;
                unset($manifest);
                if (array_key_exists('type', $tmp_manifest)) 
                    $info_lang["tp"] = $tmp_manifest['type'];
                if (array_key_exists('version', $tmp_manifest))
                    $info_lang["ver"] = $tmp_manifest['version'];
                $tmp = "";
                if(array_key_exists('acceptable_sugar_flavors', $tmp_manifest)) {
                    $version_list = $tmp_manifest['acceptable_sugar_flavors'];
                    while (list($key, $val) = each($version_list)) {
            	        $tmp .= " ".$key."=>".$val." ";
                    }
                }
                $info_lang["sv"] = $tmp;
            } else {
                // manifest array not found    
            }                  
        } else {
            // manifest file not found
        }
    } else {  // installed pack
        $info_lang["tp"] = "Installed sugar lang pack"; 
        if(is_readable($path."/config.php")) {
            include($path."/config.php");
            if(isset($sugar_config)) {
                if(array_key_exists('sugar_version', $sugar_config)) {
                    $info_lang["ver"] = $sugar_config['sugar_version'];    
                }
            }      
        }
    }
    
    return $info_lang;
}

function compare($tab_files, $tab_files2, $lang, $lang2, $path, $path2, $info_lang) {
    
    global $display_cmp;
    $array_name = unserialize(ARRAY_NAMES);

    $display_cmp[0] = ''; // missing keys
    $display_cmp[1] = ''; // missing arrays
    $k=1;
    foreach( $tab_files as $the_file ){ 
        if(preg_match("/(.*)".$lang."\.lang\.php\$/", $the_file, $match) && !preg_match("/cache/", $the_file, $match2)) {
            $info_lang["nbf"]++;
            $the_file = substr($the_file,1);
            include($path.$the_file);

            unset($defined);
            $defined = array();
            
            for($i=0;$i<count($array_name);$i++) {
                if(isset(${$array_name[$i]})) {
                    $defined[$array_name[$i]] =  ${$array_name[$i]};
                    unset(${$array_name[$i]});
                }
            }            

            $pathToCp = substr($match[1],1);
            
            if(is_readable($path2.$pathToCp.$lang2.".lang.php")) {
                include($path2.$pathToCp.$lang2.".lang.php");
                while (list($key_defined, $val_defined) = each($defined)) {
                    if(isset(${$key_defined})) {
                        $current = ${$key_defined};
                        unset(${$key_defined});
                        if($key_defined == "app_list_strings") {
                            $info_lang["lg"] = $val_defined['language_pack_name'];
                        }               
                        $log_key = '';
                        $log_array = '';
                        $i=1;
                        $j=1;
                        
                        while (list($key, $val) = each($val_defined)) {
                	        if(gettype($val) == "array") { 
                                if(array_key_exists($key, $current)) {
                                    while (list($sub_key, $sub_val) = each($val)) {
                                        $info_lang["nbl"]++;
                                        if(!array_key_exists($sub_key, $current[$key])) { // sub array key doesn't exist
                                            $tr_type = $i%2?'odd':'even';
                                            $log_key .= '<TR class="'.$tr_type.'"><TD width=5%><STRONG>'.$i.'</STRONG></TD><TD width=35%>'.$path.$pathToCp.$lang.'.lang.php</TD><TD width=30%>'.$key.'</TD><TD width=30%>'.$sub_key.'</TD></TR>';    
                                            $i++;
                                        }
                                    }
                                } else { // sub array doen't exist
                                    $tr_type = $j%2?'odd':'even';
                                    $log_array .= '<TR class="'.$tr_type.'"><TD width=5%><STRONG>'.$j.'</STRONG></TD><TD width=50%>'.$path.$pathToCp.$lang.'.lang.php</TD><TD width=45%>'.$key.'</TD></TR>';
                                    $j++;
                                    // we finish the sub-array #1 walkthrough to have a correct term count
                                    while (list($sub_key, $sub_val) = each($val)) {
                                        $info_lang["nbl"]++;
                                    }                                       
                                }
                            } else {
                                $info_lang["nbl"]++;
                                if(!array_key_exists($key, $current)) { // key doesn't exist
                                    $tr_type = $i%2?'odd':'even';
                                    $log_key .= '<TR class="'.$tr_type.'"><TD width=5%><STRONG>'.$i.'</STRONG></TD><TD width=35%>'.$path.$pathToCp.$lang.'.lang.php</TD><TD width=30%>'.$key_defined.'</TD><TD width=30%>'.$key.'</TD></TR>';
                	                $i++;
                                }
                            }
                        }
                        
                        if ($log_key != '') {
                            $display_cmp[0] .= '<table class="tabform-list" border="0" width="800" cellpadding="2" cellspacing="0" align="center" class="tabform-list">'; 
                            $display_cmp[0] .= '<TR class="title"><TD colspan="4">Key(s) not found in '.$path2.$pathToCp.$lang2.'.lang.php:</TD></TR>';
                            $display_cmp[0] .= $log_key;
                            $display_cmp[0] .= '</table><BR>';
                            $log_key = '';  
                        }
                    } else { // main array doesn't exist
                        $tr_type = $j%2?'odd':'even';
                        $log_array .= '<TR class="'.$tr_type.'"><TD width=5%><STRONG>'.$j.'</STRONG></TD><TD width=50%>'.$path.$pathToCp.$lang.'.lang.php</TD><TD width=45%>'.$key_defined.'</TD></TR>';
                        $j++;
                        // we finish the array #1 walkthrough to have a correct term count
                         while (list($key, $val) = each($val_defined)) {
                             if(gettype($val) == "array") { 
                                 while (list($sub_key, $sub_val) = each($val)) { 
                                    $info_lang["nbl"]++;
                                 }
                             } else {
                                 $info_lang["nbl"]++;
                             }
                         }                        
                    } 
                }
                if ($log_array != '') {
                    $display_cmp[1] .= '<table class="tabform-list" border="0" width="800" cellpadding="2" cellspacing="0" align="center" class="tabform-list">'; 
                    $display_cmp[1] .= '<TR class="title"><TD colspan="3">Array(s) not found in '.$path2.$pathToCp.$lang2.'.lang.php:</TD></TR>';
                    $display_cmp[1] .= $log_array;
                    $display_cmp[1] .= '</table><BR>';
                    $log_array = '';  
               }
            }  else { // file doesn't exist
                 $tr_type = $k%2?'odd':'even';
                 $display_cmp[2] .= '<TR class="'.$tr_type.'"><TD>Can\'t find '.$path2.$pathToCp.$lang2.'.lang.php</TD></TR>';
                 $k++;
                 // we finish the file #1 walkthrough to have a correct term count
                 while (list($key_defined, $val_defined) = each($defined)) {
                     while (list($key, $val) = each($val_defined)) {
                         if(gettype($val) == "array") { 
                             while (list($sub_key, $sub_val) = each($val)) { 
                                $info_lang["nbl"]++;
                             }
                         } else {
                             $info_lang["nbl"]++;
                         }
                     }
                 }                 
                 
            }
            for($i=0;$i<count($array_name);$i++) {
                unset(${$array_name[$i]});
            } 
        }
    }
    return $info_lang;
}

  function prepareDico($tab_files, $tab_files2, $lang, $lang2, $path, $path2, $info_lang) {
    $dico = array();$dico_counters = array();$trx_counters = array();$empty_trx = 0;
    $array_name = unserialize(ARRAY_NAMES);
    foreach( $tab_files as $the_file ){ 
        if(preg_match("/(.*)".$lang."\.lang\.php\$/", $the_file, $match) && !preg_match("/cache/", $the_file, $match2)) {
            $dico_entry = 0;$translated_entry = 0; $info_lang["nbf"]++;
            $the_file = substr($the_file,1);
            include($path.$the_file);
            unset($defined);
            $defined = array();
            //Search for all the array defined by the included file corresponding to the defined constant
            for($i=0;$i<count($array_name);$i++) {
                if(isset(${$array_name[$i]})) {
                    $defined[$array_name[$i]] =  ${$array_name[$i]};
                    unset(${$array_name[$i]});
                }
            }            
            $pathToCp = substr($match[1],1);
            //Check if the second file is readable
            if(is_readable($path2.$pathToCp.$lang2.".lang.php")) {
                include($path2.$pathToCp.$lang2.".lang.php");
                while (list($key_defined, $val_defined) = each($defined)) {
                    if(isset(${$key_defined})) {
                        $current = ${$key_defined};
                        unset(${$key_defined});
                        if($key_defined == "app_list_strings") {$info_lang["lg"] = $val_defined['language_pack_name'];}
                        while (list($key, $val) = each($val_defined)) {
                	        if(gettype($val) == "array") { 
                                if(array_key_exists($key, $current)) {
                                    while (list($sub_key, $sub_val) = each($val)) {
                                        $info_lang["nbl"]++;
                                        if(array_key_exists($sub_key, $current[$key])) { 
                                            if (! ($sub_val != "" && $current[$key][$sub_key] == "")) {
                                                // sub array key exist we add to the dictionary if not defined yet
                                                if (! array_key_exists($sub_val,$dico)) {
                                                    $dico[$sub_val] = $current[$key][$sub_key]; $dico_entry++;
                                                }
                                                $translated_entry++;
                                            } else {
                                                $empty_trx++;
                                            }
                                        } 
                                    }
                                } 
                            } else {
                                $info_lang["nbl"]++;
                                if(array_key_exists($key, $current)) { 
                                    // key exist we add to the dictionary if not defined yet
                                    if (! ($val != "" && $current[$key] == "")) {
                                        if (! array_key_exists($val,$dico)) {
                                            $dico[$val] = $current[$key];$dico_entry++;
                                        }
                                        $translated_entry++;
                                    } else { 
                                        $empty_trx++;
                                    }
                                } 
                            }
                        }
                    } 
                }
            }  
            for($i=0;$i<count($array_name);$i++) {unset(${$array_name[$i]});}
            $dico_counters[$the_file] = $dico_entry;
            $trx_counters[$the_file] = $translated_entry;
        }
    }
    $info_lang['dico_counter'] = $dico_counters;
    $info_lang['trx_counter'] = $trx_counters;
    $info_lang['dico'] = $dico;
    $info_lang['empty_trx'] = $empty_trx;
    return $info_lang;
}

function report($info, $info2 = null) {

	$labels = unserialize(INFO_LABELS);
	print '<table class="tabform" border="0" width="800" cellpadding="2" cellspacing="0" align="center">';
    print(is_null($info2))?'<TR class="title"><TD colspan=2>Info</TD></TR>':'<TR class="title"><TD>&nbsp;</TD><TD>LangPack #1</TD><TD>LangPack #2</TD></TR>';
		while (list($key, $val) = each($labels)) {
            if (isset($info[$key])) {
			    if(is_null($info2)) {
                    print '<TR><TD width=50% align="right"><strong>'.$val.'</strong></TD>';
			        print '<TD width=50% align="right">';
			        print(isset($info[$key]))?$info[$key]:"N/A";
			        print '</TD></TR>';
                } else {
                    print '<TR><TD width=36% align="right"><strong>'.$val.'</strong></TD>';
			        print '<TD width=32% align="right">';
			        print(isset($info[$key]))?$info[$key]:"N/A";
                    print '</TD><TD width=32% align="right">'; 
                    print(isset($info2[$key]))?$info2[$key]:"N/A";
                    print '</TD></TR>';            
                }
            }
		}
	print '</TABLE>';	
}

function parse($new_files, $langue, $info_lang) {
		global $path_to_file;
		global $display;
        $array_name = unserialize(ARRAY_NAMES);
        
        if($_POST['action'] == "import_info") {
            if($_POST['drop_version'] == 0) {
                $query = "INSERT INTO sugar_versions(descr) VALUES ('".$_POST['new_version']."')";
                mysql_query($query);
                $version_id = mysql_insert_id();        
            } else {
                $version_id = $_POST['drop_version'];
                $query = "DELETE FROM sugar_terms WHERE version_id = ".$version_id;
                mysql_query($query);
                $query = "DELETE FROM sugar_mnf WHERE version_id = ".$version_id;
                mysql_query($query); 
            }
            
            // manifest import in db            
            if($_POST['srctype'] == "upload") {
                include('inc/manifest.class.inc');
                $refMnf = new Manifest($version_id,true);
                $trxMnf = new Manifest($version_id,false);
                if(is_readable(TMP_LANG_DIR."/langpack/manifest.php")) {
                    $refMnf->loadManifest(TMP_LANG_DIR."/langpack/manifest.php");
                    $trxMnf->refresh($refMnf);
                } else {
                    $trxMnf->refresh();
                }   
            } else {
                include('inc/manifest.class.inc');
                $trxMnf = new Manifest($version_id,false);
                $trxMnf->refresh();
            }

        } else {
            $version_id = 0;    
        }
        
        foreach( $new_files as $the_file ){
            if(preg_match("/(.*)".$langue."\.lang\.php\$/", $the_file, $match) && !preg_match("/cache/", $the_file, $match)) {
                $info_lang["nbf"]++;
                $the_file = substr($the_file,1);
                if($_POST['srctype'] == "upload") {
                	include($path_to_file.$the_file);	
                }
                if($_POST['srctype'] == "sug_inst") {
                	include($_POST['sugar_path'].$the_file);	
                }
                
                unset($defined);
                $defined = array();

                for($i=0;$i<count($array_name);$i++) {
                    if(isset(${$array_name[$i]})) {
                        $defined[$array_name[$i]] =  ${$array_name[$i]};
                        unset(${$array_name[$i]});
                    }
                } 
                
                while (list($key_defined, $val_defined) = each($defined)) {
                    $display .= '<TABLE class="tabform-list" border="0" width="800" cellpadding="3" cellspacing="0" align="center">';
                	$display .= '<TR class="title"><TD colspan="3">'.$the_file.': '.$key_defined.'</TD></TR>';
                    $lvl=0;
                    if($key_defined == "app_list_strings") {
                        $info_lang["lg"] = $val_defined['language_pack_name'];
                    }
                	$info_lang = expl($val_defined, $lvl, $the_file, "", $key_defined, $info_lang, $version_id);
                    $display .= "</TABLE><BR>";
                    $display .=  "<BR>";	                        
                } 
                  
                if(count($defined) == 0) { //empty file
                    if($_POST['action'] == "import_info") {
                       $tmp_file = substr($the_file,1); 
                       $query = "INSERT INTO sugar_terms(version_id, file, array_id, sub_array_id, label_id, lang, text) VALUES (".$version_id.",
                       '".$the_file."', '', '', '', 'REF', '')";
                        mysql_query($query);                            
                    }
                }
            }
        }
        return $info_lang;
}

function expl($tab, $lvl, $the_file, $array_name, $type, $info_lang, $version_id) {
	global $display;
	global $global_query;    
		
	$i=0;
    $tr_type = 'odd';
	$lvl++;
	while (list($key, $val) = each($tab)) {
       $tr_type = $i%2?'odd':'even';	
	   if(gettype($val) == "array") {
	   	$display .=  '<TR class="title"><TD colspan=3>Sub Array: '.$key.'</TD></TR>';
	   	$info_lang = expl($val, $lvl, $the_file, $key, $type, $info_lang, $version_id);
	   } else {   
	   	$i++;
	   	$info_lang["nbl"]++;
        $tmp_file = substr($the_file,1);
        if($_POST['action'] == "import_info") {
           $query_line = $version_id.", '".$tmp_file."', '".$type."', '".$array_name."', '".mysql_real_escape_string($key)."', 'REF', '".mysql_real_escape_string($val)."'";
           $global_query[] = $query_line;
           /*    
           $query = "INSERT INTO sugar_terms(version_id, file, array_id, sub_array_id, label_id, lang, text) VALUES (".$version_id.",
           '".$tmp_file."', '".$type."', '".$array_name."', '".mysql_real_escape_string($key)."', 'REF', '".mysql_real_escape_string($val)."')";
            mysql_query($query);
            */
        }
        $display .= '<TR class="'.$tr_type.'" ><TD width=10%><STRONG>'.$lvl.'.'.$i.'</STRONG></TD><TD width=45%>'.$key.'</TD><TD width=45%>'.$val.'</TD></TR>';
	   } 
	}
    return $info_lang;
}

my_header($title,$html_charset);
?><BR><BR><DIV align="center"><?
if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") { 
  
  if(($_POST['srctype'] == "sug_inst" && !isset($_POST['drop_lang'])) || ($_POST['srctype_cp'] == "sug_inst" && !isset($_POST['drop_lang_cp']))) {                
      display_menu();
  } else {
      if(isset($_POST['action']) && $_POST['action'] == "compare_info") { 
		    $info_lang = array();
            $info_lang2 = array();
            $display_cmp = array();
             
            if(isset($_POST['srctype']) && $_POST['srctype'] == "sug_inst") {
                require_once('inc/sugar_inc/dir_inc.php');
                $tab_files  = findAllFilesRelative($_POST['sugar_path'], array());
                $lang = $_POST['drop_lang'];
                $path = $_POST['sugar_path'];
                $info_lang = array();
                $info_lang =  getPackInfo($path, "", $lang); 
            } else {
                print get_uploaded('');
                $tab_files = $pack_files;
                foreach( $tab_files as $the_file ){
                    if(preg_match('/([\w]*)\.lang\.php$/', $the_file, $match)) {
                        $lang = $match[1]; 
                    }                  
                }
                $path = $path_to_file;
                $info_lang = getPackInfo($path, "");  
            }  
            
            if(isset($_POST['srctype_cp']) && $_POST['srctype_cp'] == "sug_inst") {
                require_once('inc/sugar_inc/dir_inc.php');
                $tab_files2  = findAllFilesRelative($_POST['sugar_path_cp'], array());
                $lang2 = $_POST['drop_lang_cp'];
                $path2 = $_POST['sugar_path_cp'];
                $info_lang2 = getPackInfo($path2, "_cp",$lang2);                
            } else {
                print get_uploaded('_cp');
                $tab_files2 = $pack_files;
                foreach( $tab_files2 as $the_file ){
                    if(preg_match('/([\w]*)\.lang\.php$/', $the_file, $match)) {
                        $lang2 = $match[1]; 
                    }
                }
                $path2 = $path_to_file;
                $info_lang2 = getPackInfo($path2, "_cp");
            }  

            $buff = '';            
            $display_cmp[2] = '';                   
            $info_lang = compare($tab_files, $tab_files2, $lang, $lang2, $path, $path2, $info_lang);
               if($display_cmp[0] != '' || $display_cmp[1] != '' || $display_cmp[2] != '')
                    $buff .= '<span class="err-msg">File(s), array(s) or term(s) found in LangPack #1 but not in LangPack #2</span><br><br>'; 
            $buff .= $display_cmp[0];
            $buff .= $display_cmp[1];
            if($display_cmp[2] != '') {
                $buff .= '<table class="tabform-list" border="0" width="800" cellpadding="2" cellspacing="0" align="center" class="tabform-list">'; 
                $buff .= '<TR class="title"><TD colspan="3">File(s) not found</TD></TR>';
                $buff .= $display_cmp[2];
                $buff .= '</table><BR>';
            }
                       
            $display_cmp[2] = '';
            $info_lang2 = compare($tab_files2, $tab_files, $lang2, $lang, $path2, $path, $info_lang2);
            if($display_cmp[0] != '' || $display_cmp[1] != '' || $display_cmp[2] != '')
                  $buff .= '<span class="err-msg">File(s), array(s) or term(s) found in LangPack #2 but not in LangPack #1</span><br><br>'; 
            $buff .= $display_cmp[0];
            $buff .= $display_cmp[1];
            if($display_cmp[2] != '') {
                $buff .= '<table class="tabform-list" border="0" width="800" cellpadding="2" cellspacing="0" align="center" class="tabform-list">'; 
                $buff .= '<TR class="title"><TD colspan="3">File(s) not found</TD></TR>';
                $buff .= $display_cmp[2];
                $buff .= '</table><BR>';
            }
            print '<BR>';
            report($info_lang, $info_lang2);
            print '<BR>';
            print $buff;             
	    } 
		if(isset($_POST['action']) && $_POST['action'] == "import_dico") { 
            $info_lang = array();
            $info_lang2 = array();
            if(isset($_POST['srctype']) && $_POST['srctype'] == "sug_inst") {
                require_once('inc/sugar_inc/dir_inc.php');
                $tab_files  = findAllFilesRelative($_POST['sugar_path'], array());
                $lang = $_POST['drop_lang'];
                $path = $_POST['sugar_path'];
                $info_lang = array();
                $info_lang =  getPackInfo($path, "", $lang); 
            } else {
                print get_uploaded('');
                $tab_files = $pack_files;
                foreach( $tab_files as $the_file ){
                    if(preg_match('/([\w]*)\.lang\.php$/', $the_file, $match)) {
                        $lang = $match[1]; 
                    }
                }
                $path = $path_to_file;
                $info_lang = getPackInfo($path, "");  
            }  
            
            if(isset($_POST['srctype_cp']) && $_POST['srctype_cp'] == "sug_inst") {
                require_once('inc/sugar_inc/dir_inc.php');
                $tab_files2  = findAllFilesRelative($_POST['sugar_path_cp'], array());
                $lang2 = $_POST['drop_lang_cp'];
                $path2 = $_POST['sugar_path_cp'];
                $info_lang2 = getPackInfo($path2, "_cp",$lang2);
            } else {
                print get_uploaded('_cp');
                $tab_files2 = $pack_files;
                $suffix = "";
                foreach( $tab_files2 as $the_file ){
                    if(preg_match('/([\w]*)\.lang\.php$/', $the_file, $match)) {
                        $lang2 = $match[1]; 
                    }
                }
                $path2 = $path_to_file . $suffix;
                $info_lang2 = getPackInfo($path2, "_cp");
            }
            $info_lang = prepareDico($tab_files, $tab_files2, $lang, $lang2, $path, $path2, $info_lang);
            $dico = $info_lang['dico'];
            $sql_values = array();
            foreach($dico as $ref => $trx) {
                $sql_values[] = "'".mysql_real_escape_string($ref)."','".mysql_real_escape_string($trx)."'";
            }
            
            mysql_query("DELETE FROM sugar_lang_dico") or die("<SPAN class=msg-err>A mysql error occured : ".mysql_error()."</SPAN>"); 
            if (count($sql_values) > 0) { 
                $query = "INSERT INTO sugar_lang_dico (ref,trx) VALUES(";
                $query .= implode("),(", $sql_values).")";

                mysql_query($query) or die("<SPAN class=msg-err>A mysql error occured : ".mysql_error()."</SPAN>"); 
            } else {
                msg_err("No translated terms have been found, the dictionary is empty");
            }
            
            $dico_counters = $info_lang['dico_counter']; 
            $trx_counters = $info_lang['trx_counter']; 
            $mtc_size = 0;
            foreach($trx_counters as $key => $value) $mtc_size += $value;
            $info_lang['trx_match'] = $mtc_size;
            unset($info_lang['dico']); unset($info_lang['dico_counter']);unset($info_lang['trx_counter']);unset($info_lang['nbl']);
            $info_lang['trx_entry'] = count($dico);
            $info_lang['dico_count'] = count($dico);
            
            print '<BR>';
            report($info_lang);
            print '<BR>'; 
            ?> 
            <table class="tabform-list" border="0" width="800" cellpadding="2" cellspacing="0" align="center" class='tabform-list'>
            <TR class=title><TD colspan=3>Dictionary import results</TD></TR>
            <TR><TD width=70%>Files</TD><TD width=15%>Matching Entry</TD><TD width=15%>Imported Entry</TD></TR>
            <?
            $i =0;;
            foreach($dico_counters as $key => $value) {
                print "<TR class=".(++$i % 2 ? "odd" : "even" )." ><TD>$key</TD><TD>".$trx_counters[$key]."</TD><TD>$value</TD></TD>\n";
            }
            ?></TABLE><?
             
        }	    
	    if(isset($_POST['action']) && ($_POST['action'] == "show_info" || $_POST['action'] == "import_info")) {
            global $global_query;
            $global_query = array();
			$display = "";                       
            if(isset($_POST['srctype']) && $_POST['srctype'] == "upload") {
			    print get_uploaded('');
                $info_lang =  getPackInfo($path_to_file, "");
			    $info_lang = parse($pack_files, "", $info_lang);
		    } else {
                require_once('inc/sugar_inc/dir_inc.php');
                $info_lang =  getPackInfo($_POST['sugar_path'], "", $_POST['drop_lang']);
                
			    $tab_files  = findAllFilesRelative($_POST['sugar_path'], array());
			    $info_lang = parse($tab_files, $_POST['drop_lang'], $info_lang);
		    }
            if($_POST['action'] == "import_info") {
                  $query = "INSERT INTO sugar_terms(version_id, file, array_id, sub_array_id, label_id, lang, text) VALUES(";
                  $query .= implode("),(", $global_query).")";
                 mysql_query($query) or die("<SPAN class=msg-err>A mysql error occured : ".mysql_error()."</SPAN>"); 
            }            
			report($info_lang); 
            print "<BR>".$display."<BR>";       
	    }   		
    }    
} else {
display_menu();
}
?></DIV>
</BODY>
</HTML>