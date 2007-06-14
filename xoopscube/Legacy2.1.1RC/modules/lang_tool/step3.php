<?php
if(!defined('XOOPS_ROOT_PATH')) exit();
if(!isset($pass_step4)){
  if($_SESSION['lang_tool']['module']&&$_SESSION['lang_tool']['from']&&$_SESSION['lang_tool']['to']){
    $dir = $_SESSION['lang_tool']['base_dir'].$_SESSION['lang_tool']['from'].$_SESSION['lang_tool']['path'];
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        if($_SESSION['lang_tool']['path'] != '')
            $lang_file[] = '..';
        while (($file = readdir($dh)) !== false) {
          if($file!='.'&&$file!='..')
            $lang_file[] = $file;
          }
        closedir($dh);
      }
    }
    $num=sizeof($lang_file);
    $content .= '<input type="hidden" name="step" value="4">';
    $content .= _MD_LANG_TOOL_SESELECTFILE.'<hr><table cellpadding="0" cellspacing="0">';
    $k = 0;
    for($i=0;$i<$num;$i++){
      if(preg_match('/(gif)|(jpg)|(jpeg)|(png)|(htaccess)|(html)|(htm)/i', $lang_file[$i])){
        if($k==0) $k =1;
        else $k=0;
        continue;
      }
      ($i%2==$k) ? $bgcolor = '#FFFFFF' : $bgcolor = '#CCCCCC';
      $the_file1 = $_SESSION['lang_tool']['base_dir'].$_SESSION['lang_tool']['from'].$_SESSION['lang_tool']['path'].'/'.$lang_file[$i];
      $the_file2 = $_SESSION['lang_tool']['base_dir'].$_SESSION['lang_tool']['to'].$_SESSION['lang_tool']['path'].'/'.$lang_file[$i];
      $content .= '<tr bgcolor="'.$bgcolor.'"><td>';
      $content .= '<input type="radio" name="the_file" value="'.$lang_file[$i].'">';
      $content .= '</td><td>'.$lang_file[$i].'</td>';
      $content .= '<td>';
      if($lang_file[$i] == '..')
      {
        $content .= '&nbsp;</td>';
        continue;
      }
      if(is_dir($the_file1))
        $content .= _MD_LANG_TOOL_ISFOLDER;
      if(file_exists($the_file2)){
        $content .= _MD_LANG_TOOL_FILEEXIST;
      }
      $content .= '</td>';
    }
    $content .= '</table><hr><input type="submit">';
  }
}
?>