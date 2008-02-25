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
include("inc/fonc.inc");

header("Content-Type:  text/html;");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML><HEAD>
<META HTTP-EQUIV="Expires" CONTENT="0">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<TITLE>Sugar Translation suite Instalation</TITLE>
<link href="style/style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY bgcolor="#E6EBF6">
<BR>
<?php
 
if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $form_errors = '';    
    if(isset($_REQUEST['host_name']) && $_REQUEST['host_name'] != '') {
            $host_name = $_REQUEST['host_name'];
    } else {
            $form_errors .= 'Missing field: Host Name<BR>';
            $host_name = '';    
    }
    if(isset($_REQUEST['db_name']) && $_REQUEST['db_name'] != '') {
            $db_name = $_REQUEST['db_name'];
    } else {
            $form_errors .= 'Missing field: Database Name<BR>'; 
            $db_name = '';   
    }
    if(isset($_REQUEST['user_name']) && $_REQUEST['user_name'] != '') {
            $user_name = $_REQUEST['user_name'];
    } else {
            $form_errors .= 'Missing field: User Name<BR>';
            $user_name = '';    
    }
    if(isset($_REQUEST['user_pass'])) {
            $user_pass = $_REQUEST['user_pass'];
    } else {
            $form_errors .= 'Missing field: User Password<BR>';
            $user_pass = '';    
    }
    if(isset($_REQUEST['charset_db']) && !isset($_REQUEST['chkchar'])) {
            if ($_REQUEST['charset_db'] != '') {
                $charset_db = $_REQUEST['charset_db'];
                $chkchar = false;
            } else {
                $form_errors .= 'Missing field: Database charset<BR>';
                $charset_db = '';
                $chkchar = false;
            }
    } else {
                $charset_db = "";
                $chkchar = true;  
    }
    
    if(isset($_REQUEST['charset_html']) && $_REQUEST['charset_html'] != '') {
            $charset_html = $_REQUEST['charset_html'];
    } else {
            $form_errors .= 'Missing field: HTML charset<BR>';
            $charset_html = '';    
    }    

    $chkdb = isset($_REQUEST['chkdb'])?true:false;
    

    if(!isset($_REQUEST['chkpu'])) {
        $chkpu = false;
                $db_pu_name = $_REQUEST['db_pu_name'];
                $priv_user = $_REQUEST['db_pu_name'];
    } else {
        $chkpu = true;
        $priv_user = $user_name;
        $priv_pass = $user_pass;
        $db_pu_name = '';
        $db_pu_pass = '';
    }
    
    if($form_errors != '') {
        msg_err('Error(s) found:<BR>'.$form_errors);
        $install_ok = false;
    } else {
        $install_ok = true;
        if($link = @mysql_connect($host_name, $priv_user, $priv_pass)) {
            msg('Connexion to DB: OK');    
        } else {
            $errno = mysql_errno();
            $error = mysql_error();
            msg_err('Error: '.$errno.': '.$error);
            $install_ok = false;
        }

        //Enforcing the check of the defautl charset (can be latin) and the default html charset (UTF8)
        if ($charset_db == "" && eregi("UTF-8",$charset_html)) {
            if (! eregi( "utf8", mysql_client_encoding())) {
                msg_err('Warning : The database default charset is '.mysql_client_encoding().' which may not be compatible with a UTF-8 html charset');
                msg_err('Set the database charset field (utf8 for example) or set a compatible HTML charset');
                $install_ok = false;
            }
        }
        
        if($install_ok && $chkdb) { 
            // database creation query 
            $query = 'create database `'.$db_name.'`';            
            if(@mysql_query($query, $link)) {
                msg('DB creation: OK');
                if(!isset($_REQUEST['charset_db'])) {
                   $encoding =  mysql_client_encoding();
                }
                
                
            } else {
                $errno = mysql_errno();
                $error = mysql_error();
                msg_err('Error: '.$errno.': '.$error);
                $install_ok = false;
            }       
        }
        if($install_ok && $chkuser) {           
            // user creation query
            $query = 'GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, DROP, INDEX';
            $query .= ' ON `'.$db_name.'`.*';
            $query .= ' TO "'.$user_name.'"@"'.$host_name.'"';
            $query .= ' IDENTIFIED BY \''.$user_pass.'\'';
            if(@mysql_query($query, $link)) {
                msg('User creation: OK');
            } else {
                $errno = mysql_errno();
                $error = mysql_error();
                msg_err('Error: '.$errno.': '.$error);
                $install_ok = false;               
            }
        }
        
        if($install_ok && $chkdb) {           
            // database structure creation
            if(@mysql_select_db($db_name)) {
                
                if(!isset($_REQUEST['chkchar']) && $charset_db != "") {
                     if(is_readable('inc/sugar_lang_replace.sql')) {
                        $file_content = array();
                        $file_content_replace = file('inc/sugar_lang_replace.sql');
                         
                         foreach($file_content_replace as $sql_line){ 
                            $file_content[] = str_replace("@@CHARSET@@", $charset_db, $sql_line);   
                         }
                     } else {
                         msg_err('Error: can\'t access database creation script (inc/sugar_lang_replace.sql)');
                         $install_ok = false; 
                     }
                } else {
                    
                    if(is_readable('inc/sugar_lang.sql')) { 
                        $file_content = file('inc/sugar_lang.sql');
                    } else {
                        msg_err('Error: can\'t access database creation script (inc/sugar_lang.sql)');
                        $install_ok = false; 
                    }
                }
                
                if(parse_mysql_dump($file_content)) {
                    $install_ok = true;
                    msg('Database structure creation: OK');
                } else {
                    msg_err('Error: can\'t create database');
                    $install_ok = false;
                } 
                
            } else {
                $errno = mysql_errno();
                $error = mysql_error();
                msg_err('Error: '.$errno.': '.$error);
                $install_ok = false;
            }
        }
        
        if($install_ok) { 
            // config.php file creation
            if(is_readable('config.php') || is_readable('.')){
                $projet_config = array();
                $projet_config['db_user'] = $user_name;
                $projet_config['db_pass'] = $user_pass;
                $projet_config['db_server'] = $host_name;
                $projet_config['db_name'] = $db_name;
                $projet_config['html_charset'] = $charset_html;
                $projet_config['db_charset'] = ($charset_db=="")?mysql_client_encoding():$charset_db; 
   
                $fd = fopen('config.php', 'w+');
                $config_string = "<?php\n".'// created: '.date('Y-m-d H:i:s')."\n".'$projet_config = '.var_export_min($projet_config).";\n?>\n";
                fwrite($fd, $config_string);
                fclose($fd);
                msg('Configuration file creation: OK');                
            } else {
                msg_err('Can\'t create configuration file');
                $install_ok = false;
            }
        }        
        
    }    
} else {
    $host_name = "localhost";
    $db_name = "sugar_lang";
    $user_name = "sugar_lang";
    $user_pass = "";
    $user_pass_conf = "";
    $charset_db = "";
    $charset_html = "UTF-8";
    $db_pu_name = "";
    $db_pu_pass = "";
    $chkpu = true;
    $chkdb = true;
    $chkuser = false;
    $chkchar = true;
    $install_ok = false;
}


$first_check = true;
 if(!$install_ok) { ?>
<FORM name="the_form" method="post" action="<?php basename(__FILE__); ?>" onsubmit="javascript:return Validate();">
<SCRIPT TYPE="text/javascript">
 
function returnObjById( id )
{
    if (document.getElementById)
        var returnVar = document.getElementById(id);
    else if (document.all)
        var returnVar = document.all[id];
    else if (document.layers)
        var returnVar = document.layers[id];
    return returnVar;
}

function toggle_pu() {
    chk = returnObjById("chkpu");
    if(chk.checked) {
        returnObjById('db_pu_name').style.display= 'none';
        returnObjById('db_pu_pass').style.display= 'none';
    } else {
        returnObjById('db_pu_name').style.display= '';
        returnObjById('db_pu_pass').style.display= '';
    }
}

function toggle_charset() {
    chkchar = returnObjById("chkchar");
    if(chkchar.checked) {
        returnObjById('charset_db').disabled = true;
    } else {
        returnObjById('charset_db').disabled = false;
    }
}

function toggle_user() {
    chkuser = returnObjById("chkuser");
    chkpu = returnObjById("chkpu");
    if(chkuser.checked) {
        returnObjById('db_pu_name').style.display= '';
        returnObjById('db_pu_pass').style.display= '';
        returnObjById('user_pass_conf').style.display= '';
        chkpu.checked = '';
        chkpu.disabled = true;
    } else {
        returnObjById('db_pu_name').style.display= 'none';
        returnObjById('db_pu_pass').style.display= 'none';
        returnObjById('user_pass_conf').style.display= 'none';
        chkpu.disabled = false;
        toggle_pu();
    }
}

function Validate() {
    return true;
}

</SCRIPT><BR><DIV align="center"><TABLE class="tabform" border="0" width="800" cellpadding="2" cellspacing="0" align="center">
<TR class="title"><TD colspan="3">Sugar Translation Suite Installation</TD></TR>
<TR><TD width="50%"><STRONG>Mysql Database:</STRONG></TD><TD colspan="2" width="50%"><?php
if(function_exists("mysql_connect")) {
    print '<span class="msg">OK</span>';
     //(default charset: '.mysql_client_encoding().')
} else {
    print '<span class="err-msg">Not Available<BR>Can\'t continue installation</span>';
    $first_check = false;
}

?></TD></TR>
<TR><TD width="50%"><STRONG>Writable directorys for temp files:</STRONG></TD><TD colspan="2" width="50%"><?php
if(is_writable("./dumppack") && is_writable("./tmp_lang")) {
    print '<span class="msg">OK</span>';
} else {
    print '<span class="err-msg">./dumppack or ./tmp_lang not writable<BR>Can\'t continue installation</span>';
    $first_check = false;     
}
?></TD></TR>
<?php if($first_check) {

?> 
<TR class="title"><TD colspan="3" align="left"><STRONG>Database configuration:</STRONG></TD></TR>
<TR><TD width="50%"><STRONG>Host Name:</STRONG></TD><TD width="30%"><input name="host_name" type="text" value="<?php echo $host_name?>" size="40"/ ></TD><TD width="20%">&nbsp;</TD></TR>
<TR><TD width="50%"><STRONG>Database Name:</STRONG></TD><TD width="30%"><input name="db_name" type="text" value="<?php echo  $db_name?>" size="40"/ ></TD><TD width="20%">Create: <input name="chkdb" class="checkbox" type="checkbox" <?php print $chkdb?'CHECKED':''?> value="1" /></TD></TR>
<TR><TD width="50%"><STRONG>User Name:</STRONG></TD><TD width="30%"><input name="user_name" type="text" value="<?php $user_name?>" size="40"/ ></TD><TD width="20%">Create: <input id="chkuser" name="chkuser" class="checkbox" type="checkbox" <? php print $chkuser?'CHECKED':''?> value="1" onclick="toggle_user()" /></TD></TR>
<TR><TD width="50%"><STRONG>Password:</STRONG></TD><TD width="30%"><input name="user_pass" type="password" value="<?php echo $user_pass?>" size="40"/ ></TD><TD width="20%">&nbsp;</TD></TR>
<TR id="user_pass_conf" style="display:<?php  print $chkuser?'':'none'?>"><TD width="50%"><STRONG>Password confirmation:</STRONG></TD><TD width="30%"><input name="user_pass_conf" type="password" value="<?php echo $user_pass_conf?>" size="40" /></TD><TD width="20%">&nbsp;</TD></TR>
<TR><TD width="50%"><STRONG>Charset to use to create tables in Database:</STRONG></TD><TD width="30%"><input id="charset_db" <?php print $chkchar?'disabled="true"':'' ?>" name="charset_db" type="text" value="<?php echo $charset_db?>" size="40"/ ></TD><TD width="20%">Use default: <input id="chkchar" name="chkchar" class="checkbox" type="checkbox" <?php print $chkchar?'CHECKED':''?> value="1" onclick="toggle_charset()" /></TD></TR>
<TR><TD width="50%"><STRONG>Charset to use for HTML:</STRONG></TD><TD width="30%"><input name="charset_html" type="text" value="<?php echo $charset_html?>" size="40"/ ></TD><TD width="20%">&nbsp;</TD></TR>
<TR><TD width="50%"><STRONG>Database account above is a privileged user?</STRONG></TD><TD colspan="2" width="50%"><input name="chkpu" id="chkpu" class="checkbox" type="checkbox" <?php print $chkpu?'CHECKED':''?> <?php print $chkuser?'disabled="true"':'';?> value="1" onclick="toggle_pu()" /></TD></TR>
<TR id="db_pu_name" style="display:<?php print $chkpu?'none':''?>"><TD width="50%"><STRONG>Privileged user Name:</STRONG></TD><TD width="30%"><input name="db_pu_name" type="text" value="<?php echo $db_pu_name?>" size="40"/ ></TD><TD width="20%">&nbsp;</TD></TR>
<TR id="db_pu_pass" style="display:<?php print $chkpu?'none':''?>"><TD width="50%"><STRONG>Privileged user password:</STRONG></TD><TD width="30%"><input name="db_pu_pass" type="password" value="<?php echo $db_pu_pass?>" size="40" /></TD><TD width="20%">&nbsp;</TD></TR>
<?php
}
?>
</TABLE>
<?php if($first_check) {
    print  '<BR><INPUT type="submit" value="Process" class="btn">';
} else {
    print  '<BR><INPUT type="button" value="Re-check" onclick="javascript:location.href=\'install.php\';" class="btn">';
}
?></DIV>
</FORM>
<?php } else {
    print '<BR><BR><TABLE align="center" cellspacing="0" width="400px" class="tabform"><TR class="title"><TD colspan="2">Installation successfull!</TD></TR>';
    print '<TR><TD colspan="2" align="center">&nbsp;<BR>You can now access the <a href="index.php">index</a> page';
    print ' to start using Sugar Translation suite<BR>&nbsp;</TD></TR></TABLE>';  
}?>
</BODY>
</HTML>