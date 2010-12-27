<?php

include 'header.php';
include 'include/zip.lib.php';

if (isset($_SESSION['lang_tool'])) {
    $dir = $_SESSION['lang_tool']['base_dir'];
    getlist($dir . $_SESSION['lang_tool']['to'], $var);
    $data = array();
    $zipfile = new Compress_zip;
    $i = 0;

    foreach ($var as $file) {
        $data[$i]['name'] = str_replace($dir, '', $file);
        $data[$i]['data'] = file_get_contents($file);
        $i++;
    }

    $zipfilename = date('Ymd') . '_' . $_SESSION['lang_tool']['module'] . '_' . $_SESSION['lang_tool']['to'] . '.zip';
    header("Content-type: application/octet-stream");
    header("Content-disposition: attachment; filename=" . $zipfilename);
    echo $zipfile->compress($data);
} else {
    header('Location: /');
    exit();
}