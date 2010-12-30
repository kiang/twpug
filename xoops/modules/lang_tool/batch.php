<?php

if (!defined('XOOPS_ROOT_PATH'))
    exit();

if ($_SESSION['lang_tool']['module'] && $_SESSION['lang_tool']['from'] && $_SESSION['lang_tool']['to']) {
    $dir = $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['from'] . $_SESSION['lang_tool']['path'];
    $files = array();
    getlist($dir, $files);
    foreach ($files AS $file) {
        $translated_str = '';
        if (substr($file, -3) === 'php') {
            $match1 = parseLangFile($file);
            $fileFromContent = file_get_contents($file);
            $target = array();
            $targetFile = str_replace($_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['from'],
                            $_SESSION['lang_tool']['base_dir'] . $_SESSION['lang_tool']['to'], $file);
            if(file_exists($targetFile)) {
                $target = parseLangFile($targetFile);
            }
            $currentPosition = 0;
            foreach ($match1 AS $key => $val) {
                $betweenLength = $val['start'] - $currentPosition;
                if ($betweenLength > 0) {
                    $translated_str .= substr($fileFromContent, $currentPosition, $betweenLength);
                }
                if (!empty($target[$key]['content'])) {
                    $val['content'] = $target[$key]['content'];
                }
                $translated_str .= sprintf('define(\'%s\', %s);', $key, $val['content']);
                $currentPosition = $val['end'];
            }
            $translated_str .= substr($fileFromContent, $currentPosition);
            file_put_contents($targetFile, $translated_str);
        }
    }
    fclose($fh);
}