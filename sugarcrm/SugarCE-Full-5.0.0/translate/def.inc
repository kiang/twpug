<?php

if(is_readable("config.php")) {
    include("config.php");
    $projet_config['html_inc_path'] = 'style';
    $html_charset = $projet_config['html_charset'];
    $db_charset = $projet_config['db_charset'];
} else {
    die("Can't find configuration file: config.php<BR>Please run the <a href='install.php'>installation</a>");
}

include_once('inc/dico_fonc.php');
include_once('inc/fonc.inc');

//To enfore no magic quotes
set_magic_quotes_runtime(0);

$title ="Sugar Translation Suite";
$default_dump_file_path = './dumppack';

$requiredProps = array ("lang_file_suffix");
$manifestProps = array ("name", "description","type","is_uninstallable","version","acceptable_sugar_flavors","published_date","author","acceptable_sugar_versions","icon" );
  $default_props = array(
  "name" => "", "published_date" => "","author" => "","icon" => "","description" => "","version" => "",
  "type" => "langpack","is_uninstallable" => "Yes","acceptable_sugar_flavors" =>"array ()","acceptable_sugar_versions" =>"array ()"
  );


?>