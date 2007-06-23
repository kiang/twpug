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
	'ADD_ATTACHMENT'			=> '上傳附加檔案',
	'ADD_ATTACHMENT_EXPLAIN'	=> '如果您要上傳附加檔案，請在下面填寫詳細資訊',
	'ADD_FILE'					=> '新增檔案',
	'ADD_POLL'					=> '建立投票',
	'ADD_POLL_EXPLAIN'			=> '如果您不想在話題中新增投票，請不要填寫以下內容',
	'ALREADY_DELETED'			=> '對不起，此內容已經被刪除。',
	'ATTACH_QUOTA_REACHED'		=> '對不起，您的附加檔案限額已經用完了。',
	'ATTACH_SIG'				=> '新增簽名（簽名可以在會員控制面板修改）',

	'BBCODE_A_HELP'				=> '行內顯示附加檔案: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> '粗體：[b]text[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> '顯示程式碼：[code]code[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> '列表：新增項目',
	'BBCODE_F_HELP'				=> '文字大小：[size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>禁止</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>允許</em>',
	'BBCODE_I_HELP'				=> '斜體：[i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> '列表：[list]text[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'			=> '列表項目: [*]text[/*]',
	'BBCODE_O_HELP'				=> '順序列表：[list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> '插入圖像：[img]http://image_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> '引用文字：[quote]text[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> '字體顏色：[color=red]text[/color]  提示：您也可以使用 color=#FF0000',
	'BBCODE_U_HELP'				=> '底線：[u]text[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> '插入連結：[url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash動畫：[flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> '您不能在發表後這麼快就推舉文章。',

	'CANNOT_DELETE_REPLIED'		=> '對不起，您只能刪除尚無回覆的話題。',
	'CANNOT_EDIT_POST_LOCKED'	=> '這篇文章已經被鎖定，您不能編輯它。',
	'CANNOT_EDIT_TIME'			=> '您不能再編輯或刪除這篇文章',
	'CANNOT_POST_ANNOUNCE'		=> '對不起，您不能發佈公告。',
	'CANNOT_POST_STICKY'		=> '對不起，您不能發佈置頂帖。',
	'CHANGE_TOPIC_TO'			=> '將主題類型轉換成',
	'CLOSE_TAGS'				=> '關閉標籤',
	'CURRENT_TOPIC'				=> '目前主題',

	'DELETE_FILE'				=> '刪除檔案',
	'DELETE_MESSAGE'			=> '刪除文章',
	'DELETE_MESSAGE_CONFIRM'	=> '您確認要刪除這篇文章嗎？',
	'DELETE_OWN_POSTS'			=> '對不起，您只能刪除自己的文章。',
	'DELETE_POST_CONFIRM'		=> '您確認要刪除這篇文章嗎？',
	'DELETE_POST_WARN'			=> '刪除的文章將不能恢復',
	'DISABLE_BBCODE'			=> '禁止解析BBCode',
	'DISABLE_MAGIC_URL'			=> '禁止自動產生超連結',
	'DISABLE_SMILIES'			=> '禁止產生表情',
	'DISALLOWED_EXTENSION'		=> '副檔名 %s 是禁止的',
	'DRAFT_LOADED'				=> '草稿已經匯入編輯區，您可以結束編輯您的文章。<br />您的草稿將在文章提供後刪除。',
	'DRAFT_LOADED_PM'			=> '草稿已經匯入編輯區域, 您可以現在完成您的私人簡訊.<br />您的草稿將在提供後刪除.',
	'DRAFT_SAVED'				=> '草稿儲存成功',
	'DRAFT_TITLE'				=> '草稿標題',

	'EDIT_REASON'				=> '編輯這篇文章的原因',
	'EMPTY_FILEUPLOAD'			=> '上傳的是空檔案',
	'EMPTY_MESSAGE'				=> '發表文章時，您必須輸入正文。',
	'EMPTY_REMOTE_DATA'			=> '檔案上傳失敗，請嘗試手動上傳此檔案。',

	'FLASH_IS_OFF'				=> '[flash] <em>禁止</em>',
	'FLASH_IS_ON'				=> '[flash] <em>允許</em>',
	'FLOOD_ERROR'				=> '您不能在這麼短的時間內再次發表文章。',
	'FONT_COLOR'				=> '文字顏色',
	'FONT_COLOR_HIDE'			=> '隱藏字體顏色',
	'FONT_HUGE'					=> '最大',
	'FONT_LARGE'				=> '大',
	'FONT_NORMAL'				=> '普通',
	'FONT_SIZE'					=> '文字大小',
	'FONT_SMALL'				=> '小',
	'FONT_TINY'					=> '最小',

	'GENERAL_UPLOAD_ERROR'		=> '無法上傳附加檔案到 %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>禁止</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>允許</em>',
	'INVALID_FILENAME'			=> '%s 是無效的檔案名稱',

	'LOAD'						=> '匯入',
	'LOAD_DRAFT'				=> '匯入草稿',
	'LOAD_DRAFT_EXPLAIN'		=> '在這裡，您可以選擇草稿繼續編輯。您現在編寫的文章將被取消，所有的目前內容將會失去。您可以在會員控制面板內檢視、編輯和刪除草稿。',
	'LOGIN_EXPLAIN_BUMP'		=> '您需要登入後才能在這個討論區推舉話題。',
	'LOGIN_EXPLAIN_DELETE'		=> '您需要登入後才能在這個討論區刪除文章。',
	'LOGIN_EXPLAIN_POST'		=> '您需要登入後才能在這個討論區發表文章。',
	'LOGIN_EXPLAIN_QUOTE'		=> '您需要登入後才能在這個討論區引用文章。',
	'LOGIN_EXPLAIN_REPLY'		=> '您需要登入後才能在這個討論區回覆文章。',

	'MAX_FONT_SIZE_EXCEEDED'	=> '您可以使用的最大字體是 %1$d。',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Flash檔案的高度不允許超過 %1$d 像素。',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Flash檔案的寬度不允許超過 %1$d 像素。',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> '圖片的高度不允許超過 %1$d 像素。',
	'MAX_IMG_WIDTH_EXCEEDED'	=> '圖片的寬度不允許超過 %1$d 像素。',

	'MESSAGE_BODY_EXPLAIN'		=> '請在這裡輸入正文，注意不允許超過 <strong>%d</strong> 個字元。',
	'MESSAGE_DELETED'			=> '文章已被成功刪除',
	'MORE_SMILIES'				=> '檢視更多表情',

	'NOTIFY_REPLY'				=> '有人回覆時，給我發送一封Email',
	'NOT_UPLOADED'				=> '檔案上傳失敗。',
	'NO_DELETE_POLL_OPTIONS'	=> '您無法刪除現有的投票選項',
	'NO_PM_ICON'				=> '沒有 PM 圖示',
	'NO_POLL_TITLE'				=> '您必須設定投票標題',
	'NO_POST'					=> '指定的文章不存在',
	'NO_POST_MODE'				=> '沒有指定文章類型',

	'PARTIAL_UPLOAD'			=> '要上傳的檔案只上傳了一部分',
	'PHP_SIZE_NA'				=> '要上傳的附加檔案太大了。<br />無法獲知 php.ini 中設定的最大允許上傳檔案大小。',
	'PHP_SIZE_OVERRUN'			=> '要上傳的附加檔案太大了，php.ini 中設定的最大允許上傳檔案大小為 %d MB。<br />請注意這數量值是在 php.ini 內設定的，無法被覆蓋。',
	'PLACE_INLINE'				=> '置入文中',
	'POLL_DELETE'				=> '刪除投票',
	'POLL_FOR'					=> '投票持續時間',
	'POLL_FOR_EXPLAIN'			=> '需要永久投票請輸入 0 或者保留空白',
	'POLL_MAX_OPTIONS'			=> '每個會員的可選數',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '這是每個會員在投票時可以選擇的選項數目。',
	'POLL_OPTIONS'				=> '投票選項',
	'POLL_OPTIONS_EXPLAIN'		=> '請分別在每行輸入一個選項，您最多可以設定 <strong>%d</strong> 個選項',
	'POLL_QUESTION'				=> '投票問題',
	'POLL_TITLE_TOO_LONG'		=> '投票的標題不能大於100字元.',
	'POLL_TITLE_COMP_TOO_LONG'	=> '解析後的投票標題過長, 請刪除一些BBCode或表情圖示.',
	'POLL_VOTE_CHANGE'			=> '允許重新投票',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '如果允許，會員將可以更改他們的選擇。',
	'POSTED_ATTACHMENTS'		=> '發佈的附加檔案',
	'POST_CONFIRMATION'			=> '文章確認',
	'POST_CONFIRM_EXPLAIN'		=> '為防止惡意灌水，本討論區要求您輸入一組確認碼。確認碼顯示在下面的圖片中，如果您無法正常瀏覽這個圖片請聯繫 %s討論區管理員%s。',
	'POST_DELETED'				=> '這篇文章已被成功刪除',
	'POST_EDITED'				=> '這篇文章已被成功修改',
	'POST_EDITED_MOD'			=> '這篇文章已經被修改但是需要等待核准',
	'POST_GLOBAL'				=> '全局公告',
	'POST_ICON'					=> '文章圖示',
	'POST_NORMAL'				=> '普通',
	'POST_REVIEW'				=> '文章預覽',
	'POST_REVIEW_EXPLAIN'		=> '已有至少一篇新回覆在這個主題下發表了，您或許希望重新審視您的回貼。',
	'POST_STORED'				=> '文章已經成功發表',
	'POST_STORED_MOD'			=> '文章已經儲存但是需要等待核准發佈',
	'POST_TOPIC_AS'				=> '發表新主題為',
	'PROGRESS_BAR'				=> '進度條',

	'QUOTE_DEPTH_EXCEEDED'		=> '最多允許嵌套使用 %1$d 層引用',

	'SAVE'						=> '儲存',
	'SAVE_DATE'					=> '另存為',
	'SAVE_DRAFT'				=> '儲存草稿',
	'SAVE_DRAFT_CONFIRM'		=> '請注意儲存的草稿僅包含標題和正文，任何其他內容都將被忽略。您希望現在儲存草稿嗎?',
	'SMILIES'					=> '表情',
	'SMILIES_ARE_OFF'			=> '表情 <em>禁止</em>',
	'SMILIES_ARE_ON'			=> '表情 <em>允許</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '置頂/公告時間限制',
	'STICK_TOPIC_FOR'			=> '主題置頂時間',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '輸入 0 或保留空白將使主題成為永久公告或置頂',
	'STYLES_TIP'				=> '提示：點選格式選項可以將格式直接應用到勾選的文字上',

	'TOO_FEW_CHARS'				=> '您輸入的正文過短',
	'TOO_FEW_POLL_OPTIONS'		=> '您必須輸入至少兩個投票選項',
	'TOO_MANY_ATTACHMENTS'		=> '不能再新增更多的附加檔案了，允許的數量是 %d 個。',
	'TOO_MANY_CHARS'			=> '您輸入的正文過長',
	'TOO_MANY_POLL_OPTIONS'		=> '您輸入了過多的投票選項',
	'TOO_MANY_SMILIES'			=> '您的內容包含了過多的表情，允許的最大表情數量是 %d。',
	'TOO_MANY_URLS'				=> '您的內容包含了過多的連結，允許的最大連結數量是 %d。',
	'TOO_MANY_USER_OPTIONS'		=> '您不能指定比目前選項數還多的每個會員可選數',
	'TOPIC_BUMPED'				=> '主題推舉成功',

	'UNAUTHORISED_BBCODE'		=> '您不能使用特定的 BBCodes：%s',
	'UNGLOBALISE_EXPLAIN'		=> '要將這個主題從全局公告轉換為普通主題，您需要選擇一個討論區放置它。',
	'UPDATE_COMMENT'			=> '更新評論',
	'URL_INVALID'				=> '您指定的連結無效。',
	'URL_NOT_FOUND'				=> '指定的檔案無法找到。',
	'URL_IS_OFF'				=> '[url] <em>禁止</em>',
	'URL_IS_ON'					=> '[url] <em>允許</em>',
	'USER_CANNOT_BUMP'			=> '您不能在這個討論區推舉文章',
	'USER_CANNOT_DELETE'		=> '您不能在這個討論區刪除文章',
	'USER_CANNOT_EDIT'			=> '您不能在這個討論區編輯文章',
	'USER_CANNOT_REPLY'			=> '您不能在這個討論區回覆文章',
	'USER_CANNOT_FORUM_POST'	=> '您不能在這個討論區進行發表文章操作，因為這個討論區類型不支援。',

	'VIEW_MESSAGE'				=> '%s檢視您提供的內容%s',

	'WRONG_FILESIZE'			=> '檔案太大了, 最大允許檔案尺寸為 %1d %2s',
	'WRONG_SIZE'				=> '圖片必須最小寬 %1$d 像素，高 %2$d 像素；最大寬 %3$d 像素，高 %4$d 像素。您提供的圖片為：寬 %5$d 像素，高 %6$d 像素。',
));

?>