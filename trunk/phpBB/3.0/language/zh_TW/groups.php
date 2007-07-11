<?php

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP' => '選擇的群組已經是您的預設群組。',
	'ALREADY_IN_GROUP' => '您已經是指定群組的成員了。',
	'ALREADY_IN_GROUP_PENDING' => '您已經申請加入指定的群組了。',
	'CHANGED_DEFAULT_GROUP' => '成功更改預設群組。',
	'GROUP_AVATAR' => '群組圖示',
	'GROUP_CHANGE_DEFAULT' => '您確定您要將自己的預設群組設成 「%s」 嗎？',
	'GROUP_CLOSED' => '封閉的',
	'GROUP_DESC' => '群組介紹',
	'GROUP_HIDDEN' => '隱藏',
	'GROUP_INFORMATION' => '群組資訊',
	'GROUP_IS_CLOSED' => '這是一個封閉的群組，新成員不能自由加入，只能由群組管理者邀請加入。',
	'GROUP_IS_FREE' => '這是一個自由開放的群組，歡迎任何新成員。',
	'GROUP_IS_HIDDEN' => '這是一個隱藏的群組，只允許群組內成員檢視。',
	'GROUP_IS_OPEN' => '這是一個開放的群組，會員可以申請加入。',
	'GROUP_IS_SPECIAL' => '這是一個特殊的群組，由討論區管理員維護。',
	'GROUP_JOIN' => '加入群組',
	'GROUP_JOIN_CONFIRM' => '您確定要加入選擇的群組嗎？',
	'GROUP_JOIN_PENDING' => '申請加入群組',
	'GROUP_JOIN_PENDING_CONFIRM' => '您確定要申請加入選擇的群組嗎？',
	'GROUP_JOINED' => '您已成功加入此群組',
	'GROUP_JOINED_PENDING' => '已經提出申請，請等待群組管理者審核。',
	'GROUP_LIST' => '管理會員',
	'GROUP_MEMBERS' => '群組成員',
	'GROUP_NAME' => '群組名稱',
	'GROUP_OPEN' => '開放的',
	'GROUP_RANK' => '群組等級',
	'GROUP_RESIGN_MEMBERSHIP' => '退出群組',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM' => '您確定要退出此群組嗎？',
	'GROUP_RESIGN_PENDING' => '取消已經送出的群組申請',
	'GROUP_RESIGN_PENDING_CONFIRM' => '您確定要取消對此群組的申請嗎？',
	'GROUP_RESIGNED_MEMBERSHIP' => '您已經成功退出此群組',
	'GROUP_RESIGNED_PENDING' => '您已成功取消對此群組的申請',
	'GROUP_TYPE' => '群組類型',
	'GROUP_UNDISCLOSED' => '隱藏的群組',
	'FORUM_UNDISCLOSED' => '管理隱藏的討論區',
	'LOGIN_EXPLAIN_GROUP' => '您需要登入後才能檢視群組資料。',
	'NO_LEADERS' => '您不是任何群組的管理者',
	'NOT_LEADER_OF_GROUP' => '您不是此群組的管理者，無法執行此操作。',
	'NOT_MEMBER_OF_GROUP' => '無法執行這個操作，因為您不是指定群組的成員，或是您加入群組的申請還沒通過審核。',
	'NOT_RESIGN_FROM_DEFAULT_GROUP' => '您不能退出自己的預設群組。',
	'PRIMARY_GROUP' => '主要群組',
	'REMOVE_SELECTED' => '刪除勾選',
	'USER_GROUP_CHANGE' => '從群組 「%1$s」 到群組 「%2$s」',
	'USER_GROUP_DEMOTE' => '辭去管理職務',
	'USER_GROUP_DEMOTE_CONFIRM' => '您確定要辭去此群組的管理職務嗎？',
	'USER_GROUP_DEMOTED' => '您已成功辭去管理職務。'
));
?>
