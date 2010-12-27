<?php
$modversion['name'] = _MI_LANG_TOOL_NAME;
$modversion['version'] = 0.0761;
$modversion['description'] = _MI_LANG_TOOL_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Finjon Kiang | http://twpug.net/';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'lang_tool_slogo.png';
$modversion['dirname'] = 'lang_tool';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Db
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Table
$modversion['tables'][0] = "lt_languages";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'lang_tool_greet.html';
$modversion['templates'][1]['description'] = 'lang_tool Form';
?>
