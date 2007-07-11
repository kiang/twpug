<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// ex. /apps/*/lang/
// 2. Please put this script to the root path of your eyeOS installation

$bk = chr(10);     // The sign of line break
$qo = '  ';        // The sign for quote
$lang = 'zh-tw';   // Your language code in ISO-XXX
$encode = 'UTF-8'; // The encode you want to use

// Configuration area end
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="<?php echo $lang; ?>">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $encode; ?>" />
	<style type="text/css">
	body{
		font-size: 10pt;
	}
	input{
		height: 17pt;
		border: 1px solid black;
		background-color: #A5A5A5;
		color: #FFFFFF;
	}
	div{
	  line-height: 20pt;
	}
	</style>
	</head>
	<body>
<form method="get">
Modules :<select name="kfolder">
<?php
$dir = "apps"; 
if ($dh = opendir($dir)) {
    while (($folder = readdir($dh)) !== false) { 
      if(is_dir($dir.'/'.$folder)&&$folder!='..'&&$folder!='.'&&file_exists($dir.'/'.$folder.'/lang/'.$lang.'.eyecode')) {
        echo '<option';
        if($folder == $_GET['kfolder'])
          echo ' selected';
        echo '>'.$folder.'</option>';
      }
    } 
    closedir($dh); 
} 
?>
</select><input type="submit"></form>
<br>
<?php
if($_GET['kfolder']){
  echo '<form method="post">';
  if($_POST['go']){
    $string = '';
    @unlink('apps/'.$_GET['kfolder'].'/lang/'.$lang.'.eyecode_old');
    @copy('apps/'.$_GET['kfolder'].'/lang/'.$lang.'.eyecode', 'apps/'.$_GET['kfolder'].'/lang/'.$lang.'.eyecode_old');
    $fd = fopen('apps/'.$_GET['kfolder'].'/lang/'.$lang.'.eyecode', 'w');
    fwrite($fd, '<?php'.$bk.'global $language;'.$bk);
    //$string .= 'app_list_strings = array ('.$bk;
    foreach($_POST['lang'] as $key => $arr){
      $string .= '$language[\''.$key.'\'] = \''.$arr.'\';'.$bk;
    }
    $string .= '?>';
    fwrite($fd, $string);
  }

  include 'apps/'.$_GET['kfolder'].'/lang/'.$lang.'.eyecode';

  $cidx = 0;
  function div_color($idx){
    if($idx % 2 == 0) return '#C0C0C0';
    else return '#848484';
  }
  foreach($language as $key => $arr){
      $string = htmlentities($arr, ENT_QUOTES, $encode);
      echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="lang['.$key.']" value="'.$string.'" size="80">';
      echo $key;
      echo '</div>';
      $cidx++;
  }
  echo '<input type="submit" name="go" value="go">';
  echo '</form>';
}
?>
</body>
</html>