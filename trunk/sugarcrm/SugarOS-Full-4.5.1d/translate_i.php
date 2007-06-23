<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// ex. /language/  and  /modules/*/language/
// 2. Please put this script to the root path of your vtigerCRM installation
define ('sugarEntry', 'test');
class sugarEntry
{
    function sugarEntry()
    {
        return 1;
    }
}
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
	<form method="post">
<?php
$string = '';
if($_POST['go']){
  copy('install/language/'.$lang.'.lang.php', 'install/language/'.$lang.'.lang.php.bk');
  $fd = fopen('install/language/'.$lang.'.lang.php', 'w');
  fwrite($fd, '<?php'.$bk);
  fwrite($fd, 'if(!defined(\'sugarEntry\') || !sugarEntry) die(\'Not A Valid Entry Point\');'.$bk);
  fwrite($fd, '$mod_strings = array ('.$bk);
  //$string .= 'mod_strings = array ('.$bk;
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
  fwrite($fd, $bk.');'.$bk.'?>');
}
?> </pre><?php

include 'install/language/en_us.lang.php';
$en_mod_strings = $mod_strings;

//@copy('../vtiger423/install/language/zh_tw.lang.php', 'install/language/'.$lang.'.lang.php');
include 'install/language/'.$lang.'.lang.php';

$result1 = array_merge($en_mod_strings, $mod_strings);

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

/*
echo '<pre>';
print_r($result2);
echo '</pre>';
exit();
*/
  function div_color($idx){
    if($idx % 2 == 0) return '#C0C0C0';
    else return '#848484';
  }
$cidx = 0;
foreach($result1 as $key => $arr){
  if(array_key_exists($key, $en_mod_strings))
  {
    if(is_array($arr)){
      //echo $key.'<p>';
      foreach($arr as $key2 => $string){
        if(array_key_exists($key2, $en_mod_strings[$key])) {
            $string = htmlentities($string, ENT_QUOTES, $encode);
            echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_strings['.$key.']['.$key2.']" value="'.$string.'" size="80">';
            echo $en_mod_strings[$key][$key2];
            echo '</div>';
            $cidx++;
        }
      }
    } else {
      $arr = htmlentities($arr, ENT_QUOTES, $encode);
      echo '<div style="background-color:'.div_color($cidx).'">&nbsp;&nbsp;<input type="text" name="mod_strings['.$key.']" value="'.$arr.'" size="80">';
      echo $en_mod_strings[$key];
      echo '</div>';
      $cidx++;
    }
  }
}

?>
<input type="submit" name="go" value="go">
</form>
</body>
</html>