<?PHP // $Id: enrol_flatfile.php,v 1.1 2007/02/18 22:10:45 koenr Exp $ 
      // enrol_flatfile.php - created with Moodle 1。4。1+ (2004083101)


$string['description'] = '這個方法可重複檢查一個您所指定的特定格式文字檔，它看起來可能像這樣
<pre>
add， student， 5， CF101
add， teacher， 6， CF101
add， teacheredit， 7， CF101
del， student， 8， CF101
del， student， 17， CF101
add， student， 21， CF101， 1091115000， 1091215000
</pre>
';
$string['enrolname'] = '文字檔';
$string['filelockedmail'] = '您所使用登錄課程的文字檔($a) 無法被cron 程序刪除，  這通常是權限上的錯誤，請修正權限，讓moodle可以刪除這個檔案，否則它會被一直重複處理';
$string['filelockedmailsubject'] = '重大錯誤: 登檔檔';
$string['location'] = '檔案位置';
$string['mailadmin'] = '用郵件通知管理者';
$string['mailusers'] = '用郵件通知使用者';
$string['parentlanguage'] = '上層語系';
$string['thischarset'] = '預設字元編碼';
$string['thisdirection'] = '預設文字走向';
$string['thislanguage'] = '預設語系';

?>
