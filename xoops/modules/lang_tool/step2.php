<?php

if (!defined('XOOPS_ROOT_PATH'))
    exit();
if ($_POST['module'] || $_SESSION['lang_tool']['module']) {
    $sql = 'SELECT * FROM `' . $xoopsDB->prefix('lt_languages') . '`';
    if (!$result = $xoopsDB->query($sql)) {
        redirect_header(XOOPS_URL . '/', 1, _MD_ERROROCCURED);
        exit();
    }

    $content .= '<input type="hidden" name="step" value="3">';
    $content .= _MD_LANG_TOOL_SESELECTLANG . '<p>';
    $content .= _MD_LANG_TOOL_FROM . '<p><select name="from">';
    while ($row = $xoopsDB->fetchArray($result)) {
        $content .= '<option value="' . $row['dirname'] . '">' . $row['lang_title'] . '</option>';
    }
    $content .= '</select><p>' . _MD_LANG_TOOL_TO . '<p><select name="to">';
    @mysql_data_seek($result, 0);
    while ($row = $xoopsDB->fetchArray($result)) {
        $content .= '<option value="' . $row['dirname'] . '">' . $row['lang_title'] . '</option>';
    }
    $content .= '</select>';
    $content .= '<input type="submit">';
}