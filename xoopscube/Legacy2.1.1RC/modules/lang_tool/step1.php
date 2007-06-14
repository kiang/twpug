<?php
if(!defined('XOOPS_ROOT_PATH')) exit();
$base = XOOPS_ROOT_PATH.'/modules';
if(is_dir($base)){
  if ($dh = opendir($base)) {
    while (($file = readdir($dh)) !== false) {
      if($file!='.'&&$file!='..'&&is_dir($base.'/'.$file))
        $mo_dir[] = $file;
      }
    closedir($dh);
  }
} else {
  echo printf(_MD_LANG_TOOL_DIRERROR, $base);
}
$mo_dir[] = 'xoops_core_lang_files';
$content .= '<input type="hidden" name="step" value="2">';
$content .= _MD_LANG_TOOL_SESELECTMOD.'<p>';
$content .= '<select name="module">';
$num = sizeof($mo_dir);
for($i=0;$i<$num;$i++){
  $content .= '<option>'.$mo_dir[$i].'</option>';
}
$content .= '</select>';
$content .= '<input type="submit">';
?>