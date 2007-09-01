<?php

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS' => '熱門話題',
	'ANNOUNCEMENTS' => '公告',
	'FORUM_PERMISSIONS' => '討論區權限',
	'ICON_ANNOUNCEMENT' => '公告',
	'ICON_STICKY' => '置頂',
	'LOGIN_NOTIFY_FORUM' => '您在本討論區有通知，請登入檢視。',
	'MARK_TOPICS_READ' => '標記話題為已閱讀',
	'NEW_POSTS_HOT' => '有新文章【熱門】',
	'NEW_POSTS_LOCKED' => '有新文章【鎖定】',
	'NO_NEW_POSTS_HOT' => '無新文章【熱門】',
	'NO_NEW_POSTS_LOCKED' => '無新文章【鎖定】',
	'NO_READ_ACCESS' => '您沒有閱讀本討論區文章的權限。',
	'POST_FORUM_LOCKED' => '討論區被鎖定',
	'TOPICS_MARKED' => '這個討論區的文章現在被標記為已閱讀。',
	'VIEW_FORUM' => '檢視討論區',
	'VIEW_FORUM_TOPIC' => '1 個主題',
	'VIEW_FORUM_TOPICS' => '%d 個主題'
));
?>
