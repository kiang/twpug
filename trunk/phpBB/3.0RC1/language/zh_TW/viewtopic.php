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
	'ATTACHMENT'						=> '附件',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '附件功能已經停用',

	'BOOKMARK_ADDED'		=> '主題收藏完成。',
	'BOOKMARK_REMOVED'		=> '主題取消收藏完成。',
	'BOOKMARK_TOPIC'		=> '收藏主題',
	'BOOKMARK_TOPIC_REMOVE'	=> '取消收藏',
	'BUMPED_BY'				=> '最後由 %1$s 於 %2$s 頂起',
	'BUMP_TOPIC'			=> '頂起主題',

	'CODE'					=> '程式碼',

	'DELETE_TOPIC'			=> '刪除主題',
	'DOWNLOAD_NOTICE'		=> '您沒有權限檢視這個主題的附件。',

	'EDITED_TIMES_TOTAL'	=> '最後由 %1$s 編輯於 %2$s，總共編輯了 %3$d 次',
	'EDITED_TIME_TOTAL'		=> '最後由 %1$s 編輯於 %2$s，總共編輯了 %3$d 次',
	'EMAIL_TOPIC'			=> 'Email 給朋友',
	'ERROR_NO_ATTACHMENT'	=> '選擇的附件已經不存在',

	'FILE_NOT_FOUND_404'	=> '檔案 <strong>%s</strong> 不存在。',
	'FORK_TOPIC'			=> '複製主題',

	'LINKAGE_FORBIDDEN'		=> '您未被授權檢視、下載或連結這個網站。',
	'LOGIN_NOTIFY_TOPIC'	=> '您有關於這個主題的通知，請登入檢視。',
	'LOGIN_VIEWTOPIC'		=> '請註冊並登入後檢視這個主題。',

	'MAKE_ANNOUNCE'				=> '變更為 「公告」',
	'MAKE_GLOBAL'				=> '變更為 「全局公告」',
	'MAKE_NORMAL'				=> '變更為 「普通主題」',
	'MAKE_STICKY'				=> '變更為 「置頂」',
	'MAX_OPTIONS_SELECT'		=> '您最多可以選擇 <strong>%d</strong> 個選項',
	'MAX_OPTION_SELECT'			=> '您只可以選擇 <strong>1</strong> 個選項',
	'MISSING_INLINE_ATTACHMENT'	=> '附件 <strong>%s</strong> 已經無效',
	'MOVE_TOPIC'				=> '移動主題',

	'NO_ATTACHMENT_SELECTED'=> '您沒有選擇下載或檢視的附件。',
	'NO_NEWER_TOPICS'		=> '這個版面沒有更新的主題了',
	'NO_OLDER_TOPICS'		=> '這個版面沒有更舊的主題了',
	'NO_UNREAD_POSTS'		=> '這個主題沒有未讀的新文章子。',
	'NO_VOTE_OPTION'		=> '您必須選擇一個選項才能投票。',
	'NO_VOTES'				=> '沒有投票',

	'POLL_ENDED_AT'			=> '投票結束於 %s',
	'POLL_RUN_TILL'			=> '投票將結束於 %s',
	'POLL_VOTED_OPTION'		=> '您投了這個選項',
	'PRINT_TOPIC'			=> '打印預覽',

	'QUICK_MOD'				=> '快速管理工具',
	'QUOTE'					=> '引用',

	'REPLY_TO_TOPIC'		=> '回覆這個主題',
	'RETURN_POST'			=> '%s回到文章%s',

	'SUBMIT_VOTE'			=> '提供投票',

	'TOTAL_VOTES'			=> '總計票數',

	'UNLOCK_TOPIC'			=> '主題解鎖',

	'VIEW_INFO'				=> '文章資訊',
	'VIEW_NEXT_TOPIC'		=> '下一個主題',
	'VIEW_PREVIOUS_TOPIC'	=> '上一個主題',
	'VIEW_RESULTS'			=> '檢視結果',
	'VIEW_TOPIC_POST'		=> '1 篇文章',
	'VIEW_TOPIC_POSTS'		=> '%d 篇文章',
	'VIEW_UNREAD_POST'		=> '第一個未讀文章',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> '您的票已經投出',

	'WROTE'					=> '寫道',
));

?>