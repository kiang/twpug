<?php

function showitem($str, $key) {
    if (!$_SESSION['lang_tool']['step'] || ($_SESSION['lang_tool']['step'] == $key && $key == 1))
        return '<font color="red">' . $str . '</font>';
    else if ($_SESSION['lang_tool']['step'] == $key)
        return ' => <font color="red">' . $str . '</font>';
    else if ($key == 1)
        return '<a href="?step=1">' . $str . '</a>';
    else if ($key == 2 && isset($_SESSION['lang_tool']['module']))
        return ' => <a href="?step=2">' . $str . '</a>';
    else if ($key == 3 && isset($_SESSION['lang_tool']['from']))
        return ' => <a href="?step=3">' . $str . '</a>';
    else
        return ' => ' . $str;
}

function navbar() {
    $str = _MD_LANG_TOOL_STEPS;
    $str .= showitem(_MD_LANG_TOOL_STEPS_MODULE, 1);
    $str .= showitem(_MD_LANG_TOOL_STEPS_LANGUAGE, 2);
    $str .= showitem(_MD_LANG_TOOL_STEPS_FILE, 3);
    $str .= showitem(_MD_LANG_TOOL_STEPS_TRANSLATE, 4);
    $str .= showitem(_MD_LANG_TOOL_STEPS_FINISH, 5);
    return $str;
}

function getlist($dir, &$var) {
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..')
                    getlist($dir . '/' . $file, $var);
            }
        }
    } else {
        $var[] = $dir;
    }
}

function parseLangFile($file) {
    $fileContent = file_get_contents($file);
    $fileContentLower = strtolower($fileContent);
    $currentPosition = 0;
    $fileLength = strlen($fileContent);
    $commentBlocks = $languages = array();
    /*
     * Find all comment blocks
     * @todo there's another kind of comment start with // ......
     */
    while (FALSE !== ($commentPosition = strpos($fileContent, '/*', $currentPosition))) {
        $commentEndPosition = strpos($fileContent, '*/', $commentPosition) + 2;
        $commentBlocks[] = array(
            $commentPosition,
            $commentEndPosition + 2,
        );
        $currentPosition = $commentEndPosition + 2;
    }
    $currentPosition = 0;
    $inComment = false;
    while (FALSE !== ($definePosition = strpos($fileContentLower, 'define', $currentPosition))) {
        $currentPosition = $definePosition + 6;
        if(!empty($commentBlocks)) {
            foreach($commentBlocks AS $commentBlock) {
                if(!$inComment && ($currentPosition > $commentBlock[0]) && ($currentPosition < $commentBlock[1])) {
                    $inComment = true;
                }
            }
        }
        if($inComment) {
            $inComment = false;
            continue;
        }
        $commaPosition = strpos($fileContent, ',', $currentPosition);
        $part1 = substr($fileContent, $currentPosition, ($commaPosition - $currentPosition));
        $part1 = trim($part1, " ('\"\n\r");
        $currentPosition = $findQuotePosition = $commaPosition + 1;
        $semicolonPosition = $inText = false;
        $currentQuote = '';
        while((false === $semicolonPosition)) {
            $c = substr($fileContent, $findQuotePosition, 1);
            switch($c) {
                case '\'':
                case '"':
                    if(false === $inText) {
                        $inText = true;
                        $currentQuote = $c;
                    } elseif($currentQuote === $c && (substr($fileContent, $findQuotePosition - 1, 1) != '\\')) {
                        $inText = false;
                        $currentQuote = '';
                    }
                    break;
                case ';':
                    if(false === $inText) {
                        $semicolonPosition = $findQuotePosition;
                    }
                    break;
            }
            if(false === $semicolonPosition) {
                ++$findQuotePosition;
            }
            if($findQuotePosition >= $fileLength) {
                $semicolonPosition = $fileLength;
            }
        }
        if($semicolonPosition === $fileLength) {
            if(substr($fileContent, -2) == '?>') {
                $semicolonPosition -= 2;
            }
        }
        $part2 = substr($fileContent, $currentPosition, ($semicolonPosition - $currentPosition));
        $part2 = trim($part2, " )\n\r");
        
        $languages[$part1] = array(
            'content' => $part2,
            'start' => $definePosition,
            'end' => $semicolonPosition + 1,
        );
        $currentPosition = $semicolonPosition + 1;
    }
    unset($fileContent);
    unset($fileContentLower);
    return $languages;
}