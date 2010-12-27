<?php
if(!defined('XOOPS_ROOT_PATH')) exit();
if($_POST["the_file"]&&!is_dir($file_to)&&!is_dir($file_from)){
    $pass_step4 = 1;
    $path_parts = pathinfo($_POST["the_file"]);
    $content .= '<input type="hidden" name="ext" value="'.$path_parts['extension'].'"><input type="hidden" name="step" value="5">';
    switch($path_parts['extension'])
    {
        case 'php':
            $str1 = file_get_contents($file_from);
            $str1 = preg_replace($skip_patterns, '', $str1);
            preg_match_all(LANG_TOOL_PATTERN, $str1, $match1);
            for($i=0;$i<sizeof($match1[1]);$i++){
              $lang_source[$match1[1][$i]] = $match1[2][$i];
            }
            if(file_exists($file_to))
            {
                $str2 = file_get_contents($file_to);
                $str2 = preg_replace($skip_patterns, '', $str2);
                preg_match_all(LANG_TOOL_PATTERN, $str2, $match2);
                for($i=0;$i<sizeof($match2[1]);$i++){
                  $lang_target[$match2[1][$i]] = $match2[2][$i];
                }
            } else $lang_target = array();
          
            $content .= _MD_LANG_TOOL_INFILE.$_SESSION['lang_tool']['file'].'<br><table><tr><td>'.$_SESSION['lang_tool']['from'].'</td><td>'.$_SESSION['lang_tool']['to'].'</td></tr>';
            $bgnum = 1;
            while(list($key, $val) = each($lang_source)){
              if($bgnum%2==1)
                $bgcolor = '#CCCCFF';
              else
                $bgcolor = '#FFCCCC';
              $bgnum ++;
              $content .= '<tr bgcolor="'.$bgcolor.'"><td>'.nl2br(htmlentities($val, ENT_QUOTES, _CHARSET)).'</td><td>';
              $rows = (strlen($val) / 100) + 2;
              if(substr_count($val, chr(13).chr(10))||strlen($val)>100)
              {
                if(isset($lang_target[$key]))
                    $content .= '<textarea name="'.$key.'" rows="'.$rows.'" cols="40" style="border:1px solid #999999;font-size:10pt">'.htmlentities($lang_target[$key], ENT_QUOTES,_CHARSET).'</textarea>';
                else
                    $content .= '<textarea name="'.$key.'" rows="'.$rows.'" cols="40" style="border:1px solid #999999;font-size:10pt">'.htmlentities($lang_source[$key]).'</textarea>';
              }
              else if(isset($lang_target[$key]))
                $content .= '<input size="40" type="text" name="'.$key.'" value="'.stripslashes(htmlentities($lang_target[$key], ENT_QUOTES,_CHARSET)).'" style="border:1px solid #999999">';
              else
                $content .= '<input size="40" type="text" name="'.$key.'" value="'.htmlentities($lang_source[$key]).'" style="border:1px solid #999999">';
              $content .= '</td></tr>' . chr(10);
            }
            $content .= '<tr><td colspan="2" align="center"><input type="submit"></td></tr></table>';
        break;
        case 'tpl':
        default:
            $content .= '<textarea name="source" rows="10" cols="60" readonly>'.file_get_contents($file_from).'</textarea>';
            $content .= '<p><input type="button" value="==" onclick="this.form.target.value=this.form.source.value"> <input type="reset"></p>';
            $content .= '<textarea name="target" rows="10" cols="60">'.file_get_contents($file_to).'</textarea>';
            $content .= '<br><input type="submit">';
    }
}
?>