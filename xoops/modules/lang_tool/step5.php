<?php

if (!defined('XOOPS_ROOT_PATH'))
    exit();
$dir2 = $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['to'] . $_SESSION['lang_tool']['path'];
$file1 = $dir2 . '/' . $_SESSION['lang_tool']['file'];
$file2 = XOOPS_ROOT_PATH . '/cache/' . $_SESSION['lang_tool']['file'];

$path_array = explode('/', $_SESSION['lang_tool']['path']);
$mk_path = $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['to'];
if (!file_exists($mk_path) && is_writeable($_SESSION['lang_tool']['base_dir']))
    mkdir($mk_path);

for ($i = 1; $i < (sizeof($path_array) - 1); $i++) {
    if (!file_exists($mk_path))
        mkdir($mk_path);
    $mk_path .= '/' . $path_array[$i];
}

if (is_writeable($_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['to'] . $_SESSION['lang_tool']['path'])) {
    $target_file = $file1;
} else {
    $target_file = $file2;
}

$translated_str = '';
switch ($_POST['ext']) {
    case 'php':
        $file_from = $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['from'] . $_SESSION['lang_tool']['path'] . '/' . $_SESSION['lang_tool']['file'];
        $match1 = parseLangFile($file_from);
        $fileFromContent = file_get_contents($file_from);
        $currentPosition = 0;
        foreach($match1 AS $key => $val) {
            $betweenLength = $val['start'] - $currentPosition;
            if($betweenLength > 0) {
                $translated_str .= substr($fileFromContent, $currentPosition, $betweenLength);
                $currentPosition = $val['start'];
            }
            if(!empty($_POST['lang'][$key])) {
                $val['content'] = $_POST['lang'][$key];
            }
            $translated_str .= sprintf('define(\'%s\', %s);', $key, $val['content']);
            $currentPosition = $val['end'];
        }
        $translated_str .= substr($fileFromContent, $currentPosition);
        break;
    case 'tpl':
        $translated_str = $_POST['target'];
    default:
}

$fh = fopen($target_file, 'wb');
if (isset($translated_str))
    fwrite($fh, $translated_str);
fclose($fh);
$content .= _MD_LANG_TOOL_YOUCANFIND . $target_file;
$content .= '<p><a href="download.php">' . _MD_LANG_TOOL_DOWNLOAD . '</a></p>' . _MD_LANG_TOOL_SHARE;