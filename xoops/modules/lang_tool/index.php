<?php

require('header.php');


// We must always set our main template before including the header
$xoopsOption['template_main'] = 'lang_tool_greet.html';

// Include the page header
require(XOOPS_ROOT_PATH . '/header.php');

$content = navbar() . '<br>';
if (isset($_SESSION['lang_tool']['module']))
//  $content .= _MD_LANG_TOOL_INMODULE . $_SESSION['lang_tool']['module'] . '/language/*';
    $content .= _MD_LANG_TOOL_INMODULE . $_SESSION['lang_tool']['base_dir'];
if (isset($_SESSION['lang_tool']['path']))
    $content .= $_SESSION['lang_tool']['path'];
$content .= '<hr><form method="post">';
switch ($_SESSION['lang_tool']['step']) {
    case 5:
        include 'step5.php';
        break;
    case 4:
        include 'step4.php';
    case 3:
        include 'step3.php';
        break;
    case 2:
        include 'step2.php';
        break;
    case 1:
    default:
        include 'step1.php';
}
$content .= '</form>';

$xoopsTpl->assign('content', $content);

// Include the page footer
require(XOOPS_ROOT_PATH . '/footer.php');