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

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	=> '所選群組是您的預設群組',
	'ALREADY_IN_GROUP'		=> '您已經是這個群組的成員了',
	'ALREADY_IN_GROUP_PENDING'	=> '您已經申請加入指定的組了.',

	'CHANGED_DEFAULT_GROUP'	=> '成功更改預設群組',
	
	'GROUP_AVATAR'						=> '群組標誌', 
	'GROUP_CHANGE_DEFAULT'				=> '您確定您要將自己的預設群組設成 「%s」 嗎？',
	'GROUP_CLOSED'						=> '封閉的',
	'GROUP_DESC'						=> '群組描述',
	'GROUP_HIDDEN'						=> '隱藏',
	'GROUP_INFORMATION'					=> '群組資訊', 
	'GROUP_IS_CLOSED'					=> '這是一個封閉的群組，新成員不能自由加入，只能由組領導者邀請加入。',
	'GROUP_IS_FREE'						=> '這是一個自由開放的群組，歡迎任何新成員。', 
	'GROUP_IS_HIDDEN'					=> '這是一個隱藏的群組，只允許組內成員檢視。',
	'GROUP_IS_OPEN'						=> '這是一個開放的群組，會員可以申請加入。',
	'GROUP_IS_SPECIAL'					=> '這是一個特殊的群組，特殊組由討論區管理員維護。', 
	'GROUP_JOIN'						=> '加入群組',
	'GROUP_JOIN_CONFIRM'				=> '您確定要加入選中的群組嗎？',
	'GROUP_JOIN_PENDING'				=> '申請加入群組',
	'GROUP_JOIN_PENDING_CONFIRM'		=> '您確定要申請加入選中的群組嗎？',
	'GROUP_JOINED'						=> '您已成功加入此群組',
	'GROUP_JOINED_PENDING'				=> '申請已經提供。請等待群組領導者批復。',
	'GROUP_LIST'						=> '管理會員',
	'GROUP_MEMBERS'						=> '群組成員',
	'GROUP_NAME'						=> '群組名稱',
	'GROUP_OPEN'						=> '開放的',
	'GROUP_RANK'						=> '群組等級',
	'GROUP_RESIGN_MEMBERSHIP'			=> '退出群組',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '您確定要退出此群組嗎？',
	'GROUP_RESIGN_PENDING'				=> '撤銷對此群組的申請',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> '您確定要撤銷對此群組的申請嗎？',
	'GROUP_RESIGNED_MEMBERSHIP'			=> '您已經成功退出此群組',
	'GROUP_RESIGNED_PENDING'			=> '您已成功撤銷對此群組的申請',
	'GROUP_TYPE'						=> '群組類型',
	'GROUP_UNDISCLOSED'					=> '隱藏的群組',
	'FORUM_UNDISCLOSED'					=> '管理隱藏的版面',

	'LOGIN_EXPLAIN_GROUP'	=> '您需要登入後才能檢視組資料',

	'NO_LEADERS'					=> '您不是任何群組的領導者',
	'NOT_LEADER_OF_GROUP'			=> '您不是此群組的領導人，無法執行此操作。',
	'NOT_MEMBER_OF_GROUP'			=> '您不是此群組的成員，無法執行此操作。',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> '您不能退出您的預設群組。',
	
	'PRIMARY_GROUP'		=> '主要群組',

	'REMOVE_SELECTED'		=> '刪除選中',

	'USER_GROUP_CHANGE'			=> '從群組 「%1$s」 到群組 「%2$s」',
	'USER_GROUP_DEMOTE'			=> '辭去領導職務',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '您確定要辭去此群組的領導職務嗎？',
	'USER_GROUP_DEMOTED'		=> '您已成功辭去領導職務。',
));

?>