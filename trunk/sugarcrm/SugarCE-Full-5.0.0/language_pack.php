<?php
$target = 'C:/sugar';
$lang = 'zh-tw';
//Source files list
$spec_files = array(
    'adodb/lang/adodb-' . $lang . '.inc.php',
    'include/FCKeditor/editor/lang/' . $lang . '.js',
    'include/FCKeditor/editor/plugins/placeholder/lang/' . $lang . '.js',
    'jscalendar/lang/calendar-' . $lang . '.js',
    'include/SugarFields/Fields/Address/' . $lang . '.DetailView.tpl',
    'include/SugarFields/Fields/Address/' . $lang . '.EditView.tpl',
    'modules/Charts/Dashlets/OutcomeByMonthDashlet/OutcomeByMonthDashlet.' . $lang . '.lang.php',
    'modules/Charts/Dashlets/OpportunitiesByLeadSourceByOutcomeDashlet/OpportunitiesByLeadSourceByOutcomeDashlet.' . $lang . '.lang.php',
    'modules/Charts/Dashlets/MyPipelineBySalesStageDashlet/MyPipelineBySalesStageDashlet.' . $lang . '.lang.php',
    'modules/Charts/Dashlets/OpportunitiesByLeadSourceDashlet/OpportunitiesByLeadSourceDashlet.' . $lang . '.lang.php',
    'modules/Home/Dashlets/InvadersDashlet/InvadersDashlet.' . $lang . '.lang.php',
    'modules/Home/Dashlets/JotPadDashlet/JotPadDashlet.' . $lang . '.lang.php',
    );

$source = array();
function extract_lang($dir) {
    global $source, $lang;
    if ($dh = opendir($dir)) {
        while (($folder = readdir($dh)) !== false) {
            if (is_dir($dir . '/' . $folder) && is_dir($dir . '/' . $folder . '/language') && $folder != '..' && $folder != '.') {
                if($dh2 = opendir($dir . '/' . $folder . '/language')) {
                    while (($file = readdir($dh2)) !== false) {
                        if (preg_match('/' . $lang . '/', $file)) {
                            $source[] = $dir . '/' . $folder . '/language/' . $file;
                        }
                    }
                    closedir($dh2);
                }
            }
        }
        closedir($dh);
    }
}


foreach($spec_files as $pfile) if (file_exists($pfile)) $source[] = $pfile;
@ extract_lang("modules");
@ extract_lang(".");


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