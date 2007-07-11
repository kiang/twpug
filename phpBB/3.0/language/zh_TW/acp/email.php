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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> '這裡您可以給所有的會員或者某個群組的會員發送email. 發送時, 將會先往管理員的郵箱中發送一份複製, 同時也發送到其他收信人的郵箱中. 如果您要給很多人發送email, 當提供後請耐心等待而不要動這個頁面. 一般群發需要很長一段時間, 當結束的時候會提示您',
	'ALL_USERS'						=> '所有會員',

	'COMPOSE'				=> '撰寫',

	'EMAIL_SEND_ERROR'		=> '當發送email的時候出現一個或多個錯誤. 請檢查 %s錯誤日誌%s 以得到更多資訊.',
	'EMAIL_SENT'			=> '這個郵件已經被發送.',
	'EMAIL_SENT_QUEUE'		=> '這個郵件已經在隊列中等待發送.',

	'LOG_SESSION'			=> '記錄email對話到關鍵日誌',

	'SEND_IMMEDIATELY'		=> '立即發送',
	'SEND_TO_GROUP'			=> '發送到組',
	'SEND_TO_USERS'			=> '發送到會員',
	'SEND_TO_USERS_EXPLAIN'	=> '這裡輸入帳號將覆蓋上面選擇的組. 用多行輸入多個帳號.',
	
	'MAIL_HIGH_PRIORITY'	=> '高',
	'MAIL_LOW_PRIORITY'		=> '低',
	'MAIL_NORMAL_PRIORITY'	=> '中',
	'MAIL_PRIORITY'			=> '郵件優先級',
	'MASS_MESSAGE'			=> '信件內容',
	'MASS_MESSAGE_EXPLAIN'	=> '請注意您只能輸入普通文本. 所有超文本標記將在發送時被清除.',
	
	'NO_EMAIL_MESSAGE'		=> '您還沒有輸入內容?',
	'NO_EMAIL_SUBJECT'		=> '您還沒有輸入標題.',
));

?>