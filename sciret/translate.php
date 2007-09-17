<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// ex. /language/  and  /modules/*/language/
// 2. Please put this script to the root path of your sciret installation
$bk = chr(10); // The sign of line break
$lang = 'zh-tw'; // Your language code in ISO-XXX
$encode = 'UTF-8'; // The encode you want to use
// Configuration area end

function readLang($file) {
    $langArr = array();
    $fp = @fopen($file, 'r');
    while ($fp && !feof($fp)) {
        $key = trim(fgets($fp));
        if ($key == '' || substr($key, 0, 2) == '//' || substr($key, 0, 1) == '#') {
            continue;
        }
        if($file != 'languages/English.txt') {
            $value = trim(fgets($fp));
            if ($value == '') {
                continue;
            }
        } else {
            $value = $key;
        }
        $key    = str_replace(array('\n', '\r'), array("\n", "\r"), $key);
        $value  = str_replace(array('\n', '\r'), array("\n", "\r"), $value);
        $langArr[$key] = $value;
    }
    return $langArr;
}


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
    copy("languages/$lang.txt", "languages/$lang.txt.old");
    $fd = fopen("languages/$lang.txt", 'w');
    $string = '';
    foreach($_POST['lang'] as $key => $arr) {
        $string .= $key . $bk . $arr . $bk;
    }
    $string = str_replace(array('\\"', '\\\''), array('"', '\''), $string);
    fwrite($fd, $string);
}
?> </pre><?php
$en_langArr = readLang('languages/English.txt');
$langArr = readLang("languages/$lang.txt");
$result = array_merge($en_langArr, $langArr);

foreach($en_langArr AS $key => $arr) {
    if (!array_key_exists($key, $result)) {
        $result[$key] = $en_langArr[$key];
    }
}

function div_color($idx) {
    if ($idx%2 == 0) return '#C0C0C0';
    else return '#848484';
}
$cidx = 0;

foreach($result as $key => $arr) {
    if (array_key_exists($key, $en_langArr)) {
        $arr = htmlentities($arr, ENT_QUOTES, $encode);
        $nkey = htmlentities($key, ENT_QUOTES, $encode);
        echo '<div style="background-color:' . div_color($cidx) . '">&nbsp;&nbsp;<input type="text" name="lang[' . $nkey . ']" value="' . $arr . '" size="80">';
        echo $en_langArr[$key];
        echo '</div>'. chr(10);
        $cidx++;
    }
}
?>
<input type="submit" name="go" value="go">
</form>
</body>
</html>