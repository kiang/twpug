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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> '管理機器人',
	'BOTS_EXPLAIN'		=> '機器人(爬蟲)一般是搜尋引擎用於更新其資料庫的自動工具. 因為這些小東西會貪婪地使用對話數量, 導致奇怪的訪客數量, 增加討論區負載, 甚至會導致討論區短時間內瀏覽受阻. 這裡您可以定義一系列特殊會員來預防這些問題.',
	'BOT_ACTIVATE'		=> '活動',
	'BOT_ACTIVE'		=> '活動的機器人',
	'BOT_ADD'			=> '新增機器人',
	'BOT_ADDED'			=> '新機器人新增完成.',
	'BOT_AGENT'			=> '機構符合',
	'BOT_AGENT_EXPLAIN'	=> '符合機器人瀏覽器的字元串, 允許部分符合.',
	'BOT_DEACTIVATE'	=> '凍結',
	'BOT_DELETED'		=> '機器人刪除完成.',
	'BOT_EDIT'			=> '編輯機器人',
	'BOT_EDIT_EXPLAIN'	=> '這裡您可以增加或修改目前的機器人項目. 您可以設定一個機構字元串和/或多個IP地址(或者地址範圍)來符合. 當設定符合字元串時要小心. 您也可以指定機器人瀏覽時看到的界面和語言. 設定一個簡單的界面可以減少機器人使用的帶寬. 記住給機器人群組設定合適的權限.',
	'BOT_LANG'			=> '機器人語言',
	'BOT_LANG_EXPLAIN'	=> '當機器人瀏覽時顯示的語言.',
	'BOT_LAST_VISIT'	=> '最後瀏覽',
	'BOT_IP'			=> '機器人IP地址',
	'BOT_IP_EXPLAIN'	=> '允許局部符合, 用英文逗號區分多個地址.',
	'BOT_NAME'			=> '機器人名稱',
	'BOT_NAME_EXPLAIN'	=> '僅用於您對機器人的稱呼.',
	'BOT_NEVER'			=> '從未',
	'BOT_STYLE'			=> '機器人界面',
	'BOT_STYLE_EXPLAIN'	=> '當機器人瀏覽時顯示的界面.',
	'BOT_UPDATED'		=> '機器人更新完成.',
	'BOT_VIS'			=> '機器人可見',
	'BOT_VIS_EXPLAIN'	=> '允許在會員在線上列表中顯示機器人.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> '您提供的機器人機構和您現在使用的很相似. 請調整這個機器人的機構.',
	'ERR_BOT_NO_IP'				=> '您提供的IP地址或主機名是無效的.',
	'ERR_BOT_NO_MATCHES'		=> '您必須為這個機器人提供至少一個符合的機構或IP地址.',

	'NO_BOT'		=> '沒有找到指定ID的機器人.',
	'NO_BOT_GROUP'	=> '無法找到機器人群組.',
));

?>