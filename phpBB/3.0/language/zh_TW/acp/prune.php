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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '這裡您可以將討論區中的會員刪除（或者停用）。 您可以有多種形式搜尋，然後刪除。如：發表文章數量和最後一次的時間等等... 這些方式可以自由組合， 如：您可以選用2001年1月1日之前發表文章量少於10篇的會員來刪除。 您也可以選擇批量刪除，只需要將會員名單放進刪除欄目中即可。 此功能須小心使用！ 一旦會員被刪除後將無法再恢復。',

	'DEACTIVATE_DELETE'			=> '停用或者刪除',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '選擇停用會員或者刪除會員，註：此操作無法回覆！',
	'DELETE_USERS'				=> '刪除',
	'DELETE_USER_POSTS'			=> '被刪除會員所發表的文章也刪除',
	'DELETE_USER_POSTS_EXPLAIN' => '移動被刪除會員發表的文章。若會員被停用將不會被移動。',

	'JOINED_EXPLAIN'			=> '輸入日期，使用 <kbd>YYYY-MM-DD</kbd> 格式。',

	'LAST_ACTIVE_EXPLAIN'		=> '輸入日起，使用<kbd>YYYY-MM-DD</kbd> 格式。',

	'PRUNE_USERS_LIST'				=> '將被裁減的會員',
	'PRUNE_USERS_LIST_DELETE'		=> '使用勾選的條件, 以下的會員帳號將被刪除.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '使用勾選的條件, 以下的會員帳號將被停用.',

	'SELECT_USERS_EXPLAIN'		=> '在這裡輸入特定會員，他們將會用於上述的設定標準。',

	'USER_DEACTIVATE_SUCCESS'	=> '被選擇的會員已經成功停用',
	'USER_DELETE_SUCCESS'		=> '被選擇的會員已經成功刪除',
	'USER_PRUNE_FAILURE'		=> '沒有適合條件的會員.',

	'WRONG_ACTIVE_JOINED_DATE'	=> '輸入的日期錯誤. 正確的格式是 <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '這將刪除所有在規定的時間內沒有新回覆的主題. 若您不輸入數字, 那麼所有的文章將會被刪除. 預設情況下, 這不會刪除投票依然在進行的主題, 置頂的主題和公告.',

	'FORUM_PRUNE'		=> '裁減版面',

	'NO_PRUNE'			=> '沒有版面被裁減',

	'SELECTED_FORUM'	=> '已選版面',
	'SELECTED_FORUMS'	=> '已選版面',

	'POSTS_PRUNED'					=> '文章已裁減',
	'PRUNE_ANNOUNCEMENTS'			=> '裁減公告',
	'PRUNE_FINISHED_POLLS'			=> '裁減已關閉的投票',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '移除已經結束的投票主題',
	'PRUNE_FORUM_CONFIRM'			=> '您確認要以指定的設定裁減勾選的版面嗎? 一旦開始裁減, 滿足條件的文章和主題將被永遠刪除.',
	'PRUNE_NOT_POSTED'				=> '從最後發表的天數算起',
	'PRUNE_NOT_VIEWED'				=> '從最後檢視的天數算起',
	'PRUNE_OLD_POLLS'				=> '裁減較舊的投票',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '裁減在規定的時間內沒有新投票的主題',
	'PRUNE_STICKY'					=> '裁減置頂主題',
	'PRUNE_SUCCESS'					=> '版面裁減成功',

	'TOPICS_PRUNED'		=> '主題已裁減',
));

?>