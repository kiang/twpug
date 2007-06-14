<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// ex. /language/  and  /modules/*/language/
// 2. Please put this script to the root path of your vtigerCRM installation

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
$dir = "modules"; 
if ($dh = opendir($dir)) {
    while (($folder = readdir($dh)) !== false) { 
      if(is_dir($dir.'/'.$folder)&&$folder!='..'&&$folder!='.'&&file_exists($dir.'/'.$folder.'/language/en_us.lang.php')) {
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
    @unlink('modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php_old');
    @copy('modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php', 'modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php_old');
    $fd = fopen('modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php', 'w');
    fwrite($fd, '<?php'.$bk.'$mod_strings = array ('.$bk);
    //$string .= 'app_list_strings = array ('.$bk;
    foreach($_POST['mod_strings'] as $key1 => $arr){
      if(is_array($arr)){
        $string .= $qo.'\''.$key1.'\' =>'.$bk.$qo.'array ('.$bk;
        foreach($arr as $key2 => $string1){
          $string .= $qo.$qo.'\''.$key2.'\' => \''.$string1.'\','.$bk;
        }
        $string .= $qo.'),'.$bk;
      } else {
        $string .= $qo.'\''.$key1.'\' => \''.$arr.'\','.$bk;
      }
    }
    fwrite($fd, $string);
    $string = '';
    if(sizeof($_POST['mod_list_strings']) > 0){
    	fwrite($fd, $bk.');'.$bk.'$mod_list_strings = array ('.$bk);
      foreach($_POST['mod_list_strings'] as $key1 => $arr){
        if(is_array($arr)){
          $string .= $qo.'\''.$key1.'\' =>'.$bk.$qo.'array ('.$bk;
          foreach($arr as $key2 => $string1){
            $string .= $qo.$qo.'\''.$key2.'\' => \''.$string1.'\','.$bk;
          }
          $string .= $qo.'),'.$bk;
        } else {
          $string .= $qo.'\''.$key1.'\' => \''.$arr.'\','.$bk;
        }
      }
      fwrite($fd, $string);
    }
    fwrite($fd, $bk.');'.$bk.'?>');
  }

  include 'modules/'.$_GET['kfolder'].'/language/en_us.lang.php';
  $en_mod_strings = $mod_strings;
  $en_mod_strings2 = $en_mod_strings;
  $en_mod_list_strings = $mod_list_strings;
  $en_mod_list_strings2 = $en_mod_list_strings;

  if(file_exists('modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php'))
    include 'modules/'.$_GET['kfolder'].'/language/'.$lang.'.lang.php';
  $result1 = array_merge($en_mod_strings, $mod_strings);
  $result2 = array_merge($en_mod_list_strings, $mod_list_strings);
  
foreach($en_mod_strings AS $key => $arr) {
    if(array_key_exists($key, $result1)) {
        if(is_array($arr)) {
            foreach($arr as $key2 => $string){
                if(!array_key_exists($key2, $result1[$key])) {
                    $result1[$key][$key2] = $en_mod_strings[$key][$key2];
                }
            }
        }
    } else {
        $result1[$key] = $en_mod_strings[$key];
    }
}

foreach($en_mod_list_strings AS $key => $arr) {
    if(array_key_exists($key, $result2)) {
        if(is_array($arr)) {
            foreach($arr as $key2 => $string){
                if(!array_key_exists($key2, $result2[$key])) {
                    $result2[$key][$key2] = $en_mod_list_strings[$key][$key2];
                }
            }
        }
    } else {
        $result2[$key] = $en_mod_list_strings[$key];
    }
}
  
  $cidx = 0;
  function div_color($idx){
    if($idx % 2 == 0) return '#C0C0C0';
    else return '#848484';
  }
  foreach($result1 as $key => $arr){
    if(array_key_exists($key, $en_mod_strings))
    {
      if(is_array($arr)){
        foreach($arr as $key2 => $string){
          if(array_key_exists($key2, $en_mod_strings[$key])) {
              $string = htmlentities($string, ENT_QUOTES, $encode);
              echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_strings['.$key.']['.$key2.']" value="'.$string.'" size="80">';
              echo $en_mod_strings2[$key][$key2];
              echo '</div>';
              $cidx++;
          }
        }
      } else {
        $arr = htmlentities($arr, ENT_QUOTES, $encode);
        echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_strings['.$key.']" value="'.$arr.'" size="80">';
        echo $en_mod_strings2[$key];
        echo '</div>';
        $cidx++;
      }
    }
  }
  if($result2){
    foreach($result2 as $key => $arr){
      if(array_key_exists($key, $en_mod_list_strings))
      {
        if(is_array($arr)){
          foreach($arr as $key2 => $string){
            if(array_key_exists($key2, $en_mod_list_strings[$key])) {
                $string = htmlentities($string, ENT_QUOTES, $encode);
                echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_list_strings['.$key.']['.$key2.']" value="'.$string.'" size="80">';
                echo $en_mod_list_strings2[$key][$key2];
                echo '</div>';
            }
          }
        } else {
          $arr = htmlentities($arr, ENT_QUOTES, $encode);
          echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_list_strings['.$key.']" value="'.$arr.'" size="80"><br>';
          echo $en_mod_list_strings2[$key];
          echo '</div>';
        }
      }
    }
  }
  echo '<input type="submit" name="go" value="go">';
  echo '</form>';
} else if($_GET['mfile'])
{
	if($_POST['mgo'])
	{
		
	}
	echo '<form method="post">';
  echo '<input type="submit" name="mgo" value="go">';
  echo '</form>';
}
?>
</body>
</html>