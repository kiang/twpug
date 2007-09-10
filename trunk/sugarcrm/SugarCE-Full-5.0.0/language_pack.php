<?php
$target = 'C:/sugar';
$lang = 'zh-tw';
//Source files list
$spec_files = array('adodb/lang/adodb-' . $lang . '.inc.php', 'install/language/' . $lang . '.lang.php', 'include/language/' . $lang . '.lang.php', 'include/language/' . $lang . '.notify_template.html', 'include/FCKeditor/editor/lang/' . $lang . '.js', 'include/FCKeditor/editor/plugins/placeholder/lang/' . $lang . '.js', 'jscalendar/lang/calendar-' . $lang . '.js',);
foreach($spec_files as $pfile) if (file_exists($pfile)) $source[] = $pfile;
$dir = "modules";
if ($dh = opendir($dir)) {
    while (($folder = readdir($dh)) !== false) {
        if (is_dir($dir . '/' . $folder) && $folder != '..' && $folder != '.') {
            $lang_file = $dir . '/' . $folder . '/language/' . $lang . '.lang.php';
            if (file_exists($lang_file)) $source[] = $lang_file;
        }
    }
    closedir($dh);
}
if (!file_exists($target)) mkdir($target);
foreach($source as $tfile) {
    $pathinfo = pathinfo($tfile);
    $path_array = explode('/', $pathinfo['dirname']);
    $cpath = $target;
    foreach($path_array as $path_item) {
        $cpath.= '/' . $path_item;
        if (!file_exists($cpath)) mkdir($cpath);
    }
    copy($tfile, $target . '/' . $tfile);
}
?>