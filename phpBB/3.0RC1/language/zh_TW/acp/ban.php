<?php
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1小時',
	'30_MINS'		=> '30分鐘',
	'6_HOURS'		=> '6小時',

	'ACP_BAN_EXPLAIN'	=> '在這裡您可以進行對帳號、IP地址或信箱地址的停用操作。這些操作可以阻止特定會員瀏覽整個討論區。如果願意，您可以提供一個簡短（至多255位元）的停用理由，它將顯示在管理記錄中。您也可以控制停用期限，如果您希望設定一個停用解除日期，請將停用期限設定為 <u>直到</u> ，並在下面以 yyyy-mm-dd（年-月-日）的格式填入日期。',

	'BAN_EXCLUDE'			=> '排除於停用列表',
	'BAN_LENGTH'			=> '停用期限',
	'BAN_REASON'			=> '停用原因',
	'BAN_GIVE_REASON'		=> '顯示給被封者的停用原因',
	'BAN_UPDATE_SUCCESSFUL'	=> '停用列表更新成功',

	'EMAIL_BAN'					=> '停用信箱地址',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> '被排除的Email地址將不受任何停用影響。',
	'EMAIL_BAN_EXPLAIN'			=> '要指定多個Email地址，請在每行輸入一個。可以使用 * 作為萬用字元，例如：<samp>*@hotmail.com</samp>，<samp>*@*.domain.tld</samp>，等。',
	'EMAIL_NO_BANNED'			=> '沒有被停用的信箱地址',
	'EMAIL_UNBAN'				=> '解除停用或解除排除Email地址',
	'EMAIL_UNBAN_EXPLAIN'		=> '您可以選擇多個Email地址並對其執行解除停用或解除排除的操作。被指定為排除的Email地址有特別背景標記。',

	'IP_BAN'					=> '停用IP地址',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> '被排除的IP地址將不受任何停用影響。',
	'IP_BAN_EXPLAIN'			=> '要指定多個IP地址或域名，請在每行輸入一個。要指定IP段，在兩個IP地址間使用連字元（-）連接。萬用字元是 *。',
	'IP_HOSTNAME'				=> 'IP地址 或 域名',
	'IP_NO_BANNED'				=> '沒有被停用的IP地址',
	'IP_UNBAN'					=> '解除停用或解除排除IP地址',
	'IP_UNBAN_EXPLAIN'			=> '您可以選擇多個IP地址並對其執行解除停用或解除排除的操作。被指定為排除的IP地址有特別背景標記。',

	'LENGTH_BAN_INVALID'		=> '日期格式必須為 <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> '永久',
	
	'UNTIL'						=> '直到',
	'USER_BAN'					=> '停用帳號',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> '被排除的帳號將不受任何停用影響。',
	'USER_BAN_EXPLAIN'			=> '要指定多個帳號，請在每行輸入一個。您可以使用【搜尋會員】來搜尋和新增帳號。',
	'USER_NO_BANNED'			=> '沒有被停用的帳號',
	'USER_UNBAN'				=> '解除停用或解除排除帳號',
	'USER_UNBAN_EXPLAIN'		=> '您可以選擇多個帳號並對其執行解除停用或解除排除的操作。被指定為排除的帳號有特別背景標記。',
	

));

?>