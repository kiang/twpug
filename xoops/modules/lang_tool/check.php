<?php

if (!defined('XOOPS_ROOT_PATH'))
    exit();

if ($_SESSION['lang_tool']['module'] && $_SESSION['lang_tool']['from'] && $_SESSION['lang_tool']['to']) {
    $dir = $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['from'] . $_SESSION['lang_tool']['path'];
    $files = array();
    getlist($dir, $files);
    foreach($files AS $file) {
        if(substr($file, -3) === 'php') {
            $source = parseLangFile($file);
            $sourceCount = count($source);
            $targetFile = str_replace($_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['from'],
                    $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['to'], $file);
            $completedCount = 0;
            if(file_exists($targetFile)) {
                $target = parseLangFile($targetFile);
                foreach($source AS $key => $val) {
                    if(!empty($target[$key]['content']) && $target[$key]['content'] != $val['content']) {
                        ++$completedCount;
                    }
                }
            }
            $content .= "{$file} ( {$completedCount} / {$sourceCount})<br />";
        }
    }
}