<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// 2. Please put this script to the root path of your mydms installation
$bk = chr(10); // The sign of line break
$lang = 'Chinese_ZH_TW'; // Your language code in ISO-XXX
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
if ($_POST['go']) {
    copy("languages/$lang/lang.inc", "languages/$lang/lang.inc.old");
    $fd = fopen("languages/$lang/lang.inc", 'w');
    $string = '<?php' . $bk . '$text = array();' . $bk;
    foreach($_POST['lang'] as $key => $arr) {
        $string .= "\$text[\"$key\"] = \"$arr\";" . $bk;
    }
    $string = str_replace(array('\\\\"', '\\\'', '\\\\\''), array('\\"', '\'', '\''), $string);
    fwrite($fd, $string);
}
?> </pre><?php
include 'languages/English/lang.inc';
$en_textArr = $text;
unset($text);
include "languages/$lang/lang.inc";
$textArr = $text;
$result = array_merge($en_textArr, $textArr);

foreach($en_textArr AS $key => $arr) {
    if (!array_key_exists($key, $result)) {
        $result[$key] = $en_textArr[$key];
    }
}

function div_color($idx) {
    if ($idx%2 == 0) return '#C0C0C0';
    else return '#848484';
}
$cidx = 0;

foreach($result as $key => $arr) {
    if (array_key_exists($key, $en_textArr)) {
        $arr = htmlentities($arr, ENT_QUOTES, $encode);
        $nkey = htmlentities($key, ENT_QUOTES, $encode);
        echo '<div style="background-color:' . div_color($cidx) . '">&nbsp;&nbsp;<input type="text" name="lang[' . $nkey . ']" value="' . $arr . '" size="80">';
        echo $en_textArr[$key];
        echo '</div>'. chr(10);
        $cidx++;
    }
}
?>
<input type="submit" name="go" value="go">
</form>
</body>
</html>