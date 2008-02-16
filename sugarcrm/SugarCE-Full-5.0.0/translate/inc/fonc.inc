<?php

function set_headers($charset) {
    header("Content-Type:  text/html; charset=".$charset);
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}

function msg($msg) {
    print "<CENTER><SPAN class=msg>".$msg."</SPAN></CENTER>";
}

function msg_err($msg) {
    print "<CENTER><SPAN class=err-msg>".$msg."</SPAN></CENTER>";
}

function connect_db($db = "", $user = "",$pass = "") {
        global $projet_config;
        if ($db == "") $db = $projet_config['db_name'];
        if ($user == "") {
            $user = $projet_config['db_user'];
            $pass = $projet_config['db_pass'];
        }
        $link = @mysql_connect($projet_config['db_server'], $user, $pass)
        or die("Could not connect to MySQL database. Please check that you have run the <A href='install.php'>installation</A>");
        mysql_select_db($db) or die("Could not connect to MySQL database instance :".$db);
        return($link);
}

function query_db($query_string,$first = false) {
        $array = Array();
        $result = mysql_query($query_string) or die("SQL ERROR : " .    mysql_error());
        while($obj = mysql_fetch_object($result)) {
            $array[] = $obj;
        }
        mysql_free_result($result);
        return ($first ? $array[0] : $array);
}

function query_db_prop($table,$where = "", $col_name = "name",$col_value = "value") {
    $query_string = "SELECT ".$col_name.",".$col_value." FROM ".$table." ".$where;
    $results = query_db($query_string);
    $local_prop = array();
    for ($i = 0 ; $i < count($results); $i++) {
        $key = $results[$i]->$col_name;
        $value = $results[$i]->$col_value;
        $local_prop[$key]=$value;
    }
    return $local_prop;
}

function var_export_ret($mixed = null) {
  ob_start();
  var_export($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

function var_export_min($var) {
   if (is_array($var)) {
       $toImplode = array();
       foreach ($var as $key => $value) {
           $toImplode[] = var_export($key, true).'=>'.var_export_min($value, true);
       }
       $code = 'array('.implode(',', $toImplode).')';
       return $code;
   } else {
           return var_export($var, true);
   }
}

  function parse_mysql_dump($file_content){
   $query = "";
   foreach($file_content as $sql_line){
     if(trim($sql_line) != "" && strpos($sql_line, "--") === false){
       $query .= $sql_line;
       if(preg_match("/;[\040\015\012]*\$/", $sql_line)){
         if(!@mysql_query($query)) {
             $errno = mysql_errno();
             $error = mysql_error();
             print '<DIV align="center"><SPAN class="err-msg">Error: '.$errno.': '.$error.'</SPAN></DIV>';
             return false;
         } else {
            $query = "";
         }
       }
     }
   }
   return true;
  }

function afficher_menu($array = null) {
    include_once('menu.inc');
}

function start($html_charset,$db_charset) { 
    set_headers($html_charset); 
    connect_db();
    mysql_query("SET CHARACTER SET ".$db_charset);
    mysql_query("SET character_set_client=".$db_charset);
    mysql_query("SET character_set_connection=".$db_charset);
    mysql_query("SET character_set_results=".$db_charset);
}

function my_header($title,$html_charset) {
    global $projet_config,$menu_array;
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <HTML><HEAD><meta http-equiv="Content-Type" content="text/html; charset=<?=$html_charset?>" />
    <META HTTP-EQUIV="Expires" CONTENT="0">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <TITLE><? print $title; ?></TITLE>
    <link href="<?php print $projet_config['html_inc_path']; ?>/style.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="<?php print $projet_config['html_inc_path']; ?>/transmenuC.js"></script>
    </HEAD>
    <BODY bgcolor="#E6EBF6" onload="init();">
    <?
    afficher_menu($menu_array);   
}
?>