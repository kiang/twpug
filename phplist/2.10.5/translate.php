<?php
// Configuration area start
// Please config the following settings before translation besides Traditional Chinese :)
// Notice :
// 1. Give rights to web server for writing all language files if you are not use M$ OS
// 2. Please put this script to the root path of your PHPList installation
$bk = chr(10); // The sign of line break
$qo = '  '; // The sign for quote
$lang = 'zh-tw'; // Your language code in ISO-XXX
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
<select name="lang_file">	
<?php
$dir = "admin/lan/en";
if ($dh = opendir($dir)) {
    while (($folder = readdir($dh)) !== false) {
        if (!is_dir($dir . '/' . $folder) && $folder != '..' && $folder != '.' && $folder != 'pagetitles.php') {
            echo '<option';
            if ($folder == $_GET['lang_file']) echo ' selected';
            echo '>' . $folder . '</option>';
        }
    }
    closedir($dh);
}
?>
</select><input type="submit">
</form>

<?php
if ($_GET['lang_file']) {
    echo '<form method="post">';
    if ($_POST['go']) {
        $string = '';
        @unlink('admin/lan/' . $lang . '/' . $_GET['lang_file'] . '.old');
        @copy('admin/lan/' . $lang . '/' . $_GET['lang_file'], 'admin/lan/' . $lang . '/' . $_GET['lang_file'] . '.old');
        $fd = fopen('admin/lan/' . $lang . '/' . $_GET['lang_file'], 'w');
        fwrite($fd, '<?php' . $bk . '$lan = array (' . $bk);
        foreach($_POST['lan'] as $key1 => $arr) {
            //preg_replace(array('/\[/', '/\]/'), array('(((', ')))'),
            $string.= $qo . '\'' . preg_replace(array('/\'/', '/\(\(\(/', '/\)\)\)/'), array('\\\'', '[', ']'), $key1) . '\' => \'' . preg_replace('/\'/', '\\\'', $arr) . '\',' . $bk;
        }
        fwrite($fd, $string);
        fwrite($fd, $bk . ');' . $bk . '?>');
    }
    include $dir . '/' . $_GET['lang_file'];
    $en_lan = $lan;
    if (file_exists('admin/lan/' . $lang . '/' . $_GET['lang_file'])) include 'admin/lan/' . $lang . '/' . $_GET['lang_file'];
    $result1 = array_merge($en_lan, $lan);
    $cidx = 0;
    function div_color($idx) {
        if ($idx%2 == 0) return '#C0C0C0';
        else return '#848484';
    }
    foreach($result1 as $key => $arr) {
        if (array_key_exists($key, $en_lan)) {
            echo '<div style="background-color:' . div_color($cidx) . '">&nbsp;&nbsp;';
            if (preg_match('/' . chr(10) . '/', $en_lan[$key])) echo '<textarea rows="5" cols="68" name="lan[' . preg_replace(array('/\[/', '/\]/'), array('(((', ')))'), htmlentities($key)) . ']">' . stripslashes(htmlentities($arr, ENT_QUOTES, $encode)) . '</textarea><br>';
            else echo '<input type="text" name="lan[' . preg_replace(array('/\[/', '/\]/'), array('(((', ')))'), htmlentities($key)) . ']" value="' . stripslashes(htmlentities($arr, ENT_QUOTES, $encode)) . '" size="80">';
            echo htmlentities($en_lan[$key], ENT_QUOTES, $encode);
            echo '</div>';
            $cidx++;
        }
    }
    echo '<input type="submit" name="go" value="go">';
    echo '</form>';
}
?>
</body>
</html>