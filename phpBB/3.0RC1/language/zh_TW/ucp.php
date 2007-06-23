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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '對 「%1$s」 (下文中指代 「我們」，「我們的」，「%1$s」，「%2$s」)的瀏覽，表明您同意並遵守以下具有法律效力之條款。如果您不同意以下條款，請停止瀏覽和使用 「%1$s」。我們可能在我們認為合適的時候，在並未通知您的情況下改變這些條款，您在條款改變後繼續使用 「%1$s」 將被認為認同並遵守這些條款.<br />
	<br />
	我們的討論區運行使用 phpBB (下文中指代 「他們」，「他們的」，「phpBB 軟體」，「www.phpbb.com」，「phpBB 組」，「phpBB 團隊」)系統，這是一個使用 「<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>」 (下文指代 「GPL」) 軟體協議的公告欄系統解決方案，可以從 <a href="http://www.phpbb.com/">www.phpbb.com</a> 免費獲得。phpBB 軟體僅用於推動基於 Internet 的討論， 我們所運行的內容遵守 GPL 協議的嚴格限制。如果希望得到更多關於phpBB的資訊，請瀏覽: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	您同意不張貼任何帶有辱罵，淫穢，粗俗，誹謗，仇恨，威脅，色情的內容，不張貼任何帶有侵犯您所在國家的法律， 「%1$s」 所在國家的法律，國際公法的內容。以上的行為可能會使您在未得到通知的情況下被永遠禁止瀏覽這個討論區。所有文章發表所使用的 IP 位址將被記錄，以協助調查違反條款的事件。您同意 「%1$s」 具有在任何我們認為合適的時候刪除，修改，移動，或關閉任何話題的權力。作為一個會員，您同意您所輸入的任何資訊將被記錄至資料庫。在沒有得到您同意的前提下我們不會向任何第三方發佈這些資訊，但是 「%1$s」 和 phpBB 不能為任何因為黑客行為導致的資料洩漏承擔法律責任.
	',

	'PRIVACY_POLICY'		=> '這個策略用於細節化地解釋 「%1$s」 和其附屬的公司 (下文中指代 「我們」, 「我方」, 「我們的」, 「%1$s」, 「%2$s」) 和 phpBB (下文指代 「他們」, 「他方」, 「他們的」, 「phpBB software」, 「www.phpbb.com」, 「phpBB Group」, 「phpBB 開發團隊」) 如何使用在與您的對話中得到的與您有關的資訊 (下文中指代 「您的資訊」).<br />
	<br />
	您的資訊通過兩種方式產生. 首先, 通過瀏覽 「%1$s」 將使 phpBB 軟體在您的電腦中產生一定數量的 cookie 檔案, 這些 cookie 是瀏覽器用於快取資訊的臨時檔案. 其中有兩個 cookie 包含會員的ID資訊 (下文指代 「會員ID」) 和一個匿名的會員對話ID (下文中指代 「對話ID」), 將被 phpBB 軟體指派自動產生. 第三個cookie 將在您瀏覽 「%1$s」 中的主題後自動產生, 用於儲存您的瀏覽歷史資訊, 用於提高會員體驗.<br />
	<br />
	phpBB軟體在瀏覽 「%1$s」 的同時建立外部cookie, 雖然這已經超出了本文件的範圍, 其目的只是在覆蓋一個 phpBB 軟體建立的頁面. 第二種是我們通過您在軟體中提供的內容收集到的您的資訊. 這種情況是但是不局限於: 以匿名會員發表文章 (下文中指代 「匿名文章」), 在 「%1$s」 上註冊帳號 (下文中指代 「您的帳號」) 登入動作和您在註冊後發表的文章 (下文中指代 「您的文章」).<br />
	<br />
	您的帳號將至少包含一個唯一的帳號 (下文中指代 「您的帳號」), 一個用於登入您的帳號的個人密碼 (下文中指代 「您的密碼」) 和一個個人的, 有效的 email 位址 (下文中指代 「您的 email」). 您在 「%1$s」 上的帳號所包含的資訊將受到我們的主機所在國家的資料保護法律的保護. 除了您的帳號和您的密碼以及在註冊過程中 「%1$s」 要求的email位址以外, 您的其他任何資訊都是可用的(除了軟體使用者的特殊要求). 在任何情況下, 您可以選擇您的資訊是否被公開. 此外, 在您的帳號中, 您可以選擇定向收發 phpBB 軟體自動產生的email.<br />
	<br />
	您的密碼在軟體中以加密形式存在 (無法逆算法), 所以它是安全的. 但是, 我們希望您不要在不同的網站上使用相同的帳號和密碼. 您的密碼是您在  「%1$s」 上瀏覽您的帳號的唯一途徑, 所以請謹慎保管您的密碼並且在任何情況下不會有任何與 「%1$s」 相關的個人或單位, 或者 phpBB,  或者任何第三方組織需要您提供您的密碼. 如果您不慎遺失您的密碼, 您可以使用 phpBB 軟體提供的 「我忘記了我的密碼」 功能. 在找回密碼的過程中您將要回答您的帳號和您的email, 而後 phpBB 軟體將會提供一個新的密碼讓您取回帳號.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> '您的帳號已經啟用，感謝您的註冊。',
	'ACCOUNT_ACTIVE_ADMIN'			=> '這個帳號現在被啟用了',
	'ACCOUNT_ACTIVE_PROFILE'		=> '您的帳號已經重新啟用.',
	'ACCOUNT_ADDED'					=> '感謝註冊，您的帳號已經建立，請使用您的帳號和密碼登入。',
	'ACCOUNT_COPPA'					=> '您的帳號已經建立但是需要核准。更多資訊請查收您的 Email。',
	'ACCOUNT_EMAIL_CHANGED'			=> '您的帳號已經更新. 但是, 討論區需要您重新驗證email的更改. 包含啟用程式碼的email已經發送到您的新郵箱, 請檢查郵箱以啟用帳號.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> '您的帳號已經更新. 但是, 討論區需要由管理員驗證您的email更改. 您會收到一封包含此資訊的email, 在帳號啟用後, 我們會再次email通知您.',
	'ACCOUNT_INACTIVE'				=> '您的帳號已經建立，啟用碼已經發往您的 Email，請查收以獲得更多資訊。',
	'ACCOUNT_INACTIVE_ADMIN'		=> '您的帳號已經建立，但是您必須等待管理員核准帳號後才能登入。您將收到一封 Email，在帳號獲得核准後我們將再次通知您。',
	'ACTIVATION_EMAIL_SENT'			=> '啟用 Email 已經發往您的郵箱',
	'ADD'							=> '新增',
	'ADD_BCC'						=> '新增【BCC】',
	'ADD_FOES'						=> '新增新壞蛋',
	'ADD_FOES_EXPLAIN'				=> '您可以在不同的行上分別輸入幾個帳號',
	'ADD_FOLDER'					=> '新增資料夾',
	'ADD_FRIENDS'					=> '新增新好友',
	'ADD_FRIENDS_EXPLAIN'			=> '您可以在不同的行上分別輸入幾個帳號',
	'ADD_NEW_RULE'					=> '新增新規則',
	'ADD_RULE'						=> '新增規則',
	'ADD_TO'						=> '新增【收件人】',
	'ADMIN_EMAIL'					=> '管理員可以給我發送 Email',
	'AGREE'							=> '我同意這些條款',
	'ALLOW_PM'						=> '允許會員給我發私人簡訊',
	'ALLOW_PM_EXPLAIN'				=> '注意：管理員和版主有給您發私人簡訊的特權。',
	'ALREADY_ACTIVATED'				=> '您已經啟用了您的帳號',
	'ATTACHMENTS_EXPLAIN'			=> '這是您在討論區中發表的附加檔案列表。',
	'ATTACHMENTS_DELETED'			=> '成功刪除數個附加檔案。',
	'ATTACHMENT_DELETED'			=> '成功刪除附加檔案。',
	'AVATAR_CATEGORY'				=> '分類',
	'AVATAR_EXPLAIN'				=> '最大尺寸：寬 %1$d 像素，高 %2$d 像素，檔案大小 %3$dkB。',
	'AVATAR_FEATURES_DISABLED'		=> '圖示功能暫時關閉.',
	'AVATAR_GALLERY'				=> '本地圖庫',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> '無法上傳圖示到 %s',
	'AVATAR_PAGE'					=> '頁',

	'BACK_TO_DRAFTS'			=> '回到已經儲存的草稿',
	'BACK_TO_LOGIN'				=> '回到登入視窗',
	'BIRTHDAY'					=> '生日',
	'BIRTHDAY_EXPLAIN'			=> '如果設定年份，在您生日時，生日列表中將顯示您的年齡。',
	'BOARD_DATE_FORMAT'			=> '我的時間格式',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> '時間格式設定使用 PHP <a href="http://www.php.net/date">date()</a> 函數',
	'BOARD_DST'					=> '夏令時生效',
	'BOARD_LANGUAGE'			=> '我的語言',
	'BOARD_STYLE'				=> '我的討論區風格',
	'BOARD_TIMEZONE'			=> '我的時區',
	'BOOKMARKS'					=> '收藏夾',
	'BOOKMARKS_EXPLAIN'			=> '您可以收藏主題以方便將來搜尋。如果需要刪除其中的項目請勾選勾選框，然後點選 <em>刪除勾選項目</em> 按鈕。',
	'BOOKMARKS_DISABLED'		=> '討論區已經停用收藏夾',
	'BOOKMARKS_REMOVED'			=> '成功移除了項目',

	'CANNOT_EDIT_MESSAGE_TIME'	=> '您將不能再編輯或刪除這個簡訊',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '您不能將簡訊移往將被刪除的資料夾。',
	'CANNOT_RENAME_FOLDER'		=> '這個資料夾不能被重命名。',
	'CANNOT_REMOVE_FOLDER'		=> '這個資料夾不能刪除。',
	'CHANGE_DEFAULT_GROUP'		=> '更改預設組',
	'CHANGE_PASSWORD'			=> '更改密碼',
	'CLICK_RETURN_FOLDER'		=> '%1$s回到您的 「%3$s」 資料夾%2$s',
	'CONFIRMATION'				=> '註冊確認',
	'CONFIRM_CHANGES'			=> '確認修改',
	'CONFIRM_EMAIL'				=> '確認 email 位址',
	'CONFIRM_EMAIL_EXPLAIN'		=> '如果您在修改email位址，您需要填入這項內容。',
	'CONFIRM_EXPLAIN'			=> '為了防止機器自動註冊行為，請輸入一組確認碼，確認碼顯示在下面的圖片中。如果您對閱讀這組確認碼存在困難，請聯繫 %s討論區管理員%s。',
	'CONFIRM_PASSWORD'			=> '確認新密碼',
	'CONFIRM_PASSWORD_EXPLAIN'	=> '只有在改變密碼時您才需要再重複輸入一次',
	'COPPA_BIRTHDAY'			=> '為了繼續註冊過程，請輸入您的生日。',
	'COPPA_COMPLIANCE'			=> 'COPPA 守則',
	'COPPA_EXPLAIN'				=> '請注意點選提供將建立您的帳號，但是帳號將需要父母或監護人的批復才能啟用。您將收到一份包含資料表複製的 email 指導您後續的操作。',
	'CREATE_FOLDER'				=> '新增資料夾',
	'CURRENT_IMAGE'				=> '目前圖片',
	'CURRENT_PASSWORD'			=> '目前密碼',
	'CURRENT_PASSWORD_EXPLAIN'	=> '如果您希望修改密碼，email位址或者帳號，您必須確認您目前的密碼。',
	'CUR_PASSWORD_ERROR'		=> '您輸入的目前密碼不正確。',
	'CUSTOM_DATEFORMAT'			=> '自訂',

	'DEFAULT_ACTION'			=> '預設操作',
	'DEFAULT_ACTION_EXPLAIN'	=> '如果以上都無法使用，這個操作將被觸發',
	'DEFAULT_ADD_SIG'			=> '預設新增我的簽名',
	'DEFAULT_BBCODE'			=> '預設允許 BBCode',
	'DEFAULT_NOTIFY'			=> '預設在有回覆時通知',
	'DEFAULT_SMILIES'			=> '預設允許表情',
	'DEFINED_RULES'				=> '已設定的規則',
	'DELETED_TOPIC'				=> '已經刪除的話題',
	'DELETE_ATTACHMENT'			=> '刪除附加檔案',
	'DELETE_ATTACHMENTS'		=> '刪除附加檔案',
	'DELETE_ATTACHMENT_CONFIRM'	=> '您確認刪除這個附加檔案嗎？',
	'DELETE_ATTACHMENTS_CONFIRM'=> '您確認刪除這些附加檔案嗎？',
	'DELETE_AVATAR'				=> '刪除圖片',
	'DELETE_COOKIES_CONFIRM'	=> '您確認刪除本討論區的所有cookie嗎？',
	'DELETE_MARKED_PM'			=> '刪除勾選的簡訊',
	'DELETE_MARKED_PM_CONFIRM'	=> '您確認刪除所有勾選的簡訊嗎？',
	'DELETE_OLDEST_MESSAGES'	=> '刪除最早的簡訊',
	'DELETE_MESSAGE'			=> '刪除簡訊',
	'DELETE_MESSAGE_CONFIRM'	=> '您確認刪除這些簡訊嗎？',
	'DELETE_MESSAGES_IN_FOLDER'	=> '清空回收站中的簡訊',
	'DELETE_RULE'				=> '刪除規則',
	'DELETE_RULE_CONFIRM'		=> '您確認刪除這條規則嗎？',
	'DEMOTE_SELECTED'			=> '降級所選',
	'DISABLE_CENSORS'			=> '開啟用詞過濾',
	'DISPLAY_GALLERY'			=> '顯示類別',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> '輸入的 email 域名沒有有效的 MX 記錄。',
	'DOWNLOADS'					=> '下載',
	'DRAFTS_DELETED'			=> '所有勾選的草稿已經被刪除。',
	'DRAFTS_EXPLAIN'			=> '這裡可以檢視，編輯和刪除您儲存的草稿。',
	'DRAFT_UPDATED'				=> '草稿已經更新。',

	'EDIT_DRAFT_EXPLAIN'		=> '這裡您可以編輯您的草稿。草稿不能包含附加檔案和投票。',
	'EMAIL_BANNED_EMAIL'		=> '您輸入的 email 位址不允許使用。',
	'EMAIL_INVALID_EMAIL'		=> '您輸入的 email 位址無效。',
	'EMAIL_REMIND'				=> '這必須是您在註冊時提供的 email 位址。',
	'EMAIL_TAKEN_EMAIL'			=> '您輸入的 email 位址已經被使用',
	'EMPTY_DRAFT'				=> '您必須填入適當的內容才能提供更改',
	'EMPTY_DRAFT_TITLE'			=> '您必須輸入一個草稿標題',
	'EXPORT_AS_XML'				=> '匯出為 XML',
	'EXPORT_AS_CSV'				=> '匯出為 CSV',
	'EXPORT_AS_CSV_EXCEL'		=> '匯出為 CSV (Excel)',
	'EXPORT_AS_TXT'				=> '匯出為 TXT',
	'EXPORT_AS_MSG'				=> '匯出為 MSG',
	'EXPORT_FOLDER'				=> '匯出目錄',

	'FIELD_REQUIRED'					=> '資料表 「%s」 沒有完成。',
	'FIELD_TOO_SHORT'					=> '資料表 「%1$s」 內容太短，至少需要 %2$d 個字元。',
	'FIELD_TOO_LONG'					=> '資料表 「%1$s」 內容太長，最多允許 %2$d 個字元。',
	'FIELD_TOO_SMALL'					=> '「%1$s」 的值太小，必須大於 %2$d。',
	'FIELD_TOO_LARGE'					=> '「%1$s」 的值太大，必須小於 %2$d。',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '資料表 「%s」 包含無效字元，只允許填入數字。',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '資料表 「%s」 包含無效字元，只允許英文字母。',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> '資料表 「%s」 包含無效字元，只允許英文字元，空格，和 -+_[] 這些符號。',
	'FIELD_INVALID_DATE'				=> '資料表 「%s」 包含無效日期。',

	'FOE_MESSAGE'				=> '從黑名單來的簡訊',
	'FOES_EXPLAIN'				=> '黑名單上的會員預設被忽略。這些會員的文章將不會全部顯示並且不允許對您發送私人簡訊。請注意這不能阻止版主和管理員的簡訊。',
	'FOES_UPDATED'				=> '您的黑名單已經更新',
	'FOLDER_ADDED'				=> '資料夾已經新增',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d / %2$d 已儲存的簡訊',
	'FOLDER_NAME_EXIST'			=> '資料夾 <strong>%s</strong> 已經存在',
	'FOLDER_OPTIONS'			=> '資料夾選項',
	'FOLDER_RENAMED'			=> '資料夾已經重命名',
	'FOLDER_REMOVED'			=> '資料夾已經刪除',
	'FOLDER_STATUS_MSG'			=> '資料夾空間使用率 %1$d%% (%2$d / %3$d 已儲存的簡訊)',
	'FORWARD_PM'				=> '轉發簡訊',
	'FORCE_PASSWORD_EXPLAIN'	=> '為了繼續瀏覽討論區，您需要更改您的密碼',
	'FRIEND_MESSAGE'			=> '好友的簡訊',
	'FRIENDS'					=> '好友',
	'FRIENDS_EXPLAIN'			=> '好友名單能讓您迅速找到您經常聯繫的其他會員。如果模板支援，好友發表的文章將被醒目方式顯示。',
	'FRIENDS_OFFLINE'			=> '離線好友',
	'FRIENDS_ONLINE'			=> '線上好友',
	'FRIENDS_UPDATED'			=> '您的好友名單已經更新',
	'FULL_FOLDER_OPTION_CHANGED'=> '在資料夾滿時的操作已經更改',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- 原簡訊 --------',
	'FWD_SUBJECT'				=> '標題: %s',
	'FWD_DATE'					=> '日期: %s',
	'FWD_FROM'					=> '發信人: %s',
	'FWD_TO'					=> '收信人: %s',

	'GLOBAL_ANNOUNCEMENT'		=> '全站公告',

	'HIDE_ONLINE'				=> '隱藏您的線上狀態',
	'HOLD_NEW_MESSAGES'			=> '不接收新簡訊 (新簡訊將被掛起直到有足夠的可用空間)',
	'HOLD_NEW_MESSAGES_SHORT'	=> '新簡訊將被掛起',

	'IF_FOLDER_FULL'			=> '如果資料夾已經裝滿',
	'IMPORTANT_NEWS'			=> '重要公告',
	'INVALID_CHARS_USERNAME'	=> '帳號包含停用字元。',
	'INVALID_CHARS_NEW_PASSWORD'=> '密碼沒有包含要求的字元。',
	'ITEMS_REQUIRED'			=> '標記 * 號的資料表是必填項目',

	'JOIN_SELECTED'				=> '加入勾選',

	'LANGUAGE'					=> '語系',
	'LINK_REMOTE_AVATAR'		=> '遠端圖示連結',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> '輸入包含您的圖示的遠端連結位址。',
	'LINK_REMOTE_SIZE'			=> '圖示尺寸',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> '指定圖示的長和寬，如果保留空白將自動檢測。',
	'LOGIN_EXPLAIN_UCP'			=> '請登入後使用會員控制面板',
	'LOGIN_REDIRECT'			=> '您已經成功登入',
	'LOGOUT_FAILED'				=> '您沒有退出登入, 因為請求並不符合您這次對話資訊. 請聯繫討論區管理員反映這個問題.',
	'LOGOUT_REDIRECT'			=> '您已經順利退出',

	'MARK_IMPORTANT'				=> '標記為重要',
	'MARKED_MESSAGE'				=> '標記的簡訊',
	'MAX_FOLDER_REACHED'			=> '達到最大會員允許自訂資料夾數目',
	'MESSAGE_BY_AUTHOR'				=> '由',
	'MESSAGE_COLOURS'				=> '簡訊顏色',
	'MESSAGE_DELETED'				=> '簡訊已經刪除',
	'MESSAGE_HISTORY'				=> '簡訊歷史',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> '這條簡訊已經在發送前被它的作者刪除',
	'MESSAGE_SENT_ON'				=> '時間',
	'MESSAGE_STORED'				=> '簡訊發送成功',
	'MESSAGE_TO'					=> '收件人',
	'MESSAGES_DELETED'				=> '簡訊已經刪除',
	'MOVE_DELETED_MESSAGES_TO'		=> '移動已刪除的簡訊到',
	'MOVE_DOWN'						=> '下移',
	'MOVE_MARKED_TO_FOLDER'			=> '移動標記的到 %s',
	'MOVE_PM_ERROR'					=> '當移動簡訊到新資料夾時發生錯誤，只有 %1d / %2d 的簡訊被移動。',
	'MOVE_TO_FOLDER'				=> '移動到資料夾',
	'MOVE_UP'						=> '上移',

	'NEW_EMAIL_ERROR'				=> '您輸入的 email 位址不符合。',
	'NEW_FOLDER_NAME'				=> '新資料夾名',
	'NEW_PASSWORD'					=> '新密碼',
	'NEW_PASSWORD_ERROR'			=> '您輸入的密碼不符合。',
	'NOTIFY_METHOD'					=> '通知方式',
	'NOTIFY_METHOD_BOTH'			=> '全部',
	'NOTIFY_METHOD_EMAIL'			=> '只用 email',
	'NOTIFY_METHOD_EXPLAIN'			=> '通過這個討論區發送簡訊的方法。',
	'NOTIFY_METHOD_IM'				=> '只用 Jabber',
	'NOTIFY_ON_PM'					=> '當有新簡訊時通知我',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> '您不能新增匿名會員到您的好友列表。',
	'NOT_ADDED_FRIENDS_FOES'		=> '您不能新增正在黑名單上的會員到您的好友列表',
	'NOT_ADDED_FRIENDS_SELF'		=> '您不能將自己新增為好友',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> '您不能新增管理員和版主到黑名單。',
	'NOT_ADDED_FOES_ANONYMOUS'		=> '您不能新增匿名會員到黑名單。',
	'NOT_ADDED_FOES_FRIENDS'		=> '您不能新增正在好友列表上的會員到黑名單。',
	'NOT_ADDED_FOES_SELF'			=> '您不能將自己新增到黑名單。',
	'NOT_AGREE'						=> '我不同意這些條款',
	'NOT_ENOUGH_SPACE_FOLDER'		=> '目標資料夾 「%s」 已經裝滿。請求的操作沒有完成。',
	'NOT_MOVED_MESSAGE'				=> '您有一條新的簡訊被掛起，因為您的收件夾已滿。',
	'NOT_MOVED_MESSAGES'			=> '您有 %d 條掛起的簡訊，因為您的收件夾已滿。',
	'NO_ACTION_MODE'				=> '沒有指定操作。',
	'NO_AUTHOR'						=> '這條簡訊沒有設定作者',
	'NO_AVATAR_CATEGORY'			=> '無',

	'NO_AUTH_DELETE_MESSAGE'		=> '您不能刪除私人簡訊。',
	'NO_AUTH_EDIT_MESSAGE'			=> '您不能編輯私人簡訊。',
	'NO_AUTH_FORWARD_MESSAGE'		=> '您不能轉發私人簡訊。',
	'NO_AUTH_GROUP_MESSAGE'			=> '您不能群發私人簡訊。',
	'NO_AUTH_READ_MESSAGE'			=> '您不能閱讀私人簡訊。',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> '您不能閱讀這條簡訊，因為已經被作者刪除。',
	'NO_AUTH_SEND_MESSAGE'			=> '您不能發送私人簡訊。',
	'NO_AUTH_SIGNATURE'				=> '您不能設定個人簽名',

	'NO_BCC_RECIPIENT'			=> '無',
	'NO_BOOKMARKS'				=> '您沒有收藏',
	'NO_BOOKMARKS_SELECTED'		=> '您沒有勾選收藏',
	'NO_EMAIL_USER'				=> '提供的 email/帳號資訊無法找到',
	'NO_FOES'					=> '沒有定義壞蛋',
	'NO_FRIENDS'				=> '沒有定義好友',
	'NO_FRIENDS_OFFLINE'		=> '沒有離線好友',
	'NO_FRIENDS_ONLINE'			=> '沒有線上好友',
	'NO_GROUP_SELECTED'			=> '沒有指定群組',
	'NO_IMPORTANT_NEWS'			=> '沒有重要公告',
	'NO_MESSAGE'				=> '無法找到私人簡訊',
	'NO_NEW_FOLDER_NAME'		=> '您必須指定一個新資料夾名',
	'NO_NEWER_PM'				=> '沒有更新的簡訊',
	'NO_OLDER_PM'				=> '沒有更早的簡訊',
	'NO_PASSWORD_SUPPLIED'		=> '您不能使用空白密碼登入.',
	'NO_RECIPIENT'				=> '沒有定義收信人',
	'NO_RULES_DEFINED'			=> '沒有定義的規則',
	'NO_SAVED_DRAFTS'			=> '沒有儲存的草稿',
	'NO_TO_RECIPIENT'			=> '無',
	'NO_WATCHED_FORUMS'			=> '您沒有訂閱任何討論區。',
	'NO_WATCHED_TOPICS'			=> '您沒有訂閱任何話題。',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> '密碼長度必須介於 %1$d 和 %2$d 個字元之間並且包含英文字元',
	'PASS_TYPE_ANY_EXPLAIN'		=> '密碼長度必須介於 %1$d 和 %2$d 個字元之間',
	'PASS_TYPE_CASE_EXPLAIN'	=> '密碼長度必須介於 %1$d 和 %2$d 個字元之間並且包含大寫字母',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> '密碼長度必須介於 %1$d 和 %2$d 個字元之間並且包含符號',
	'PASSWORD'					=> '密碼',
	'PASSWORD_ACTIVATED'		=> '您的新密碼已經啟用',
	'PASSWORD_UPDATED'			=> '您的密碼已經發送到您的原始email位址。',
	'PERMISSIONS_RESTORED'		=> '成功回覆原權限。',
	'PERMISSIONS_TRANSFERRED'	=> '成功轉換權限自 <strong>%s</strong>，您現在可以使用會員權限瀏覽討論區.<br />請注意管理員權限不會被轉換。您可以在任何時候恢復回原權限。',
	'PM_DISABLED'				=> '這個討論區的私人簡訊功能已經關閉',
	'PM_FROM'					=> '發件人',
	'PM_FROM_REMOVED_AUTHOR'	=> '這條簡訊的發送者已經不再是註冊會員。',
	'PM_ICON'					=> '簡訊圖示',
	'PM_INBOX'					=> '收件箱',
	'PM_NO_USERS'				=> '請求新增的會員不存在.',
	'PM_OUTBOX'					=> '發件箱',
	'PM_SENTBOX'				=> '已發送',
	'PM_SUBJECT'				=> '簡訊標題',
	'PM_TO'						=> '發送給',
	'PM_USERS_REMOVED_NO_PM'	=> '一些會員無法新增, 因為他們停用了站內簡訊接收.',
	'POPUP_ON_PM'				=> '在有新簡訊時彈出視窗',
	'POST_EDIT_PM'				=> '編輯簡訊',
	'POST_FORWARD_PM'			=> '轉發簡訊',
	'POST_NEW_PM'				=> '發送簡訊',
	'POST_PM_LOCKED'			=> '私人簡訊已鎖定',
	'POST_PM_POST'				=> '引用文章',
	'POST_QUOTE_PM'				=> '引用簡訊',
	'POST_REPLY_PM'				=> '回覆簡訊',
	'PRINT_PM'					=> '打印預覽',
	'PREFERENCES_UPDATED'		=> '您的參數已經更新。',
	'PROFILE_INFO_NOTICE'		=> '請注意這些資訊將對其他成員可見。請謹慎包含個人資料。標記 * 的資料表是必填欄目。',
	'PROFILE_UPDATED'			=> '您的資料已經更新。',

	'RECIPIENT'							=> '收件人',
	'RECIPIENTS'						=> '收件人',
	'REGISTRATION'						=> '註冊',
	'RELEASE_MESSAGES'					=> '%s釋放所有掛起的簡訊%s… 如果有足夠的可用空間它們將被派送到合適的資料夾。',
	'REMOVE_ADDRESS'					=> '刪除位址',
	'REMOVE_SELECTED_BOOKMARKS'			=> '刪除勾選的書籤',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '您確認要刪除所有勾選的書籤嗎？',
	'REMOVE_BOOKMARK_MARKED'			=> '刪除書籤',
	'REMOVE_FOLDER'						=> '刪除資料夾',
	'REMOVE_FOLDER_CONFIRM'				=> '您確定要刪除這個資料夾嗎？',
	'RENAME'							=> '重命名',
	'RENAME_FOLDER'						=> '重命名資料夾',
	'REPLIED_MESSAGE'					=> '回覆簡訊',
	'RESIGN_SELECTED'					=> '辭去勾選',
	'RETURN_FOLDER'						=> '%1$s回到前一個資料夾%2$s',
	'RETURN_UCP'						=> '%s回到會員控制面板%s',
	'RULE_ADDED'						=> '規則已經新增',
	'RULE_ALREADY_DEFINED'				=> '這個規則已經存在',
	'RULE_DELETED'						=> '規則已經移除',
	'RULE_NOT_DEFINED'					=> '沒有正確指定規則',
	'RULE_REMOVED_MESSAGE'				=> '一條私人簡訊被過濾刪除。',
	'RULE_REMOVED_MESSAGES'				=> '%d 私人簡訊被過濾刪除。',

	'SAME_PASSWORD_ERROR'		=> '您輸入的新密碼和現在使用的密碼相同',
	'SEARCH_YOUR_POSTS'			=> '顯示您的文章',
	'SEND_PASSWORD'				=> '發送密碼',
	'SENT_AT'					=> '發送於',
	'SHOW_EMAIL'				=> '會員可以透過email聯繫我',
	'SIGNATURE_EXPLAIN'			=> '這是一個可以顯示在您的文章中的文字方塊。字數限制為 %d ',
	'SIGNATURE_PREVIEW'			=> '您的簽名將會這樣出現在文章中',
	'SIGNATURE_TOO_LONG'		=> '您的簽名太長了。',
	'SORT'						=> '排列',
	'SORT_COMMENT'				=> '檔案註釋',
	'SORT_DOWNLOADS'			=> '下載次數',
	'SORT_EXTENSION'			=> '副檔名',
	'SORT_FILENAME'				=> '檔案名稱',
	'SORT_POST_TIME'			=> '發佈時間',
	'SORT_SIZE'					=> '檔案大小',

	'TIMEZONE'					=> '時區',
	'TO'						=> '收件人',
	'TOO_MANY_RECIPIENTS'		=> '收件人過多',
	'TOO_MANY_REGISTERS'		=> '在這次對話中您已經超過註冊的最大嘗試次數。請稍後再嘗試。',

	'UCP'						=> '會員控制面板',
	'UCP_ACTIVATE'				=> '啟用帳號',
	'UCP_ADMIN_ACTIVATE'		=> '請注意在帳號啟用前您必須輸入一個有效的 Email 位址，管理員將審核您的帳號，如果審核通過將會發送通知郵件到您提供的 Email 位址。',
	'UCP_AIM'					=> 'AIM 帳戶',
	'UCP_ATTACHMENTS'			=> '附加檔案',
	'UCP_COPPA_BEFORE'			=> '早於 %s',
	'UCP_COPPA_ON_AFTER'		=> '晚於 %s',
	'UCP_EMAIL_ACTIVATE'		=> '請注意在帳號啟用前您必須輸入一個有效的 Email 位址。通過這個 Email 位址您將收到包含帳號啟用連結的郵件。',
	'UCP_ICQ'					=> 'ICQ 號碼',
	'UCP_JABBER'				=> 'Jabber 位址',

	'UCP_MAIN'					=> '主要資訊',
	'UCP_MAIN_ATTACHMENTS'		=> '管理附加檔案',
	'UCP_MAIN_BOOKMARKS'		=> '管理收藏夾',
	'UCP_MAIN_DRAFTS'			=> '管理草稿',
	'UCP_MAIN_FRONT'			=> '首頁',
	'UCP_MAIN_SUBSCRIBED'		=> '管理訂閱',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> '您沒有發表的附加檔案',

	'UCP_PREFS'					=> '討論區相關參數',
	'UCP_PREFS_PERSONAL'		=> '編輯全局設定',
	'UCP_PREFS_POST'			=> '編輯發表文章設定',
	'UCP_PREFS_VIEW'			=> '編輯顯示設定',
	
	'UCP_PM'					=> '管理私人簡訊',
	'UCP_PM_COMPOSE'			=> '編寫簡訊',
	'UCP_PM_DRAFTS'				=> '管理簡訊草稿',
	'UCP_PM_OPTIONS'			=> '編輯選項',
	'UCP_PM_POPUP'				=> '私人簡訊',
	'UCP_PM_POPUP_TITLE'		=> '彈出簡訊',
	'UCP_PM_UNREAD'				=> '未讀簡訊',
	'UCP_PM_VIEW'				=> '檢視簡訊',

	'UCP_PROFILE'				=> '個人資料',
	'UCP_PROFILE_AVATAR'		=> '編輯個人圖示',
	'UCP_PROFILE_PROFILE_INFO'	=> '編輯個人資訊',
	'UCP_PROFILE_REG_DETAILS'	=> '編輯帳號設定',
	'UCP_PROFILE_SIGNATURE'		=> '編輯發文簽名',

	'UCP_USERGROUPS'			=> '群組',
	'UCP_USERGROUPS_MEMBER'		=> '管理成員',
	'UCP_USERGROUPS_MANAGE'		=> '管理群組',

	'UCP_REGISTER_DISABLE'			=> '暫時停止註冊新會員。',
	'UCP_REMIND'					=> '發送密碼',
	'UCP_RESEND'					=> '發送啟用郵件',
	'UCP_WELCOME'					=> '歡迎來到會員控制面板。這裡您可以監視，檢視和更新您的資料，參數，訂閱討論區和主題。您還可以給其他會員發送簡訊 (如果允許)。在繼續下一步操作前請確認您已經仔細閱讀了所有的公告。',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> '好友與黑名單',
	'UCP_ZEBRA_FOES'				=> '管理黑名單',
	'UCP_ZEBRA_FRIENDS'				=> '管理好友列表',
	'UNKNOWN_FOLDER'				=> '未知資料夾',
	'UNWATCH_MARKED'				=> '取消訂閱勾選',
	'UPLOAD_AVATAR_FILE'			=> '從您的機器上傳',
	'UPLOAD_AVATAR_URL'				=> '從連結上傳',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> '填入包含圖片的連結，它將被複製到這個討論區。',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> '帳號長度必須介於 %1$d 和 %2$d 之間，並且只能使用英文字元',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> '帳號長度必須介於 %1$d 和 %2$d 之間，並且只能使用英文字元，空格和 -+_[] 這些字元。',
	'USERNAME_ASCII_EXPLAIN'		=> '帳號長度必須介於 %1$d 和 %2$d 之間，並且只能使用 ASCII 字元，不能使用特殊字元',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> '帳號長度必須介於 %1$d 和 %2$d 之間，並且只能使用英文和數字',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> '帳號必須介於 %1$d 和 %2$d 之間，並且只能使用英文，數字，空格和 -+_[] 這些字元。',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> '長度必須介於 %1$d 和 %2$d 個字元之間。',
	'USERNAME_TAKEN_USERNAME'		=> '您輸入的帳號已經被使用，請選擇另一個帳號。',
	'USERNAME_DISALLOWED_USERNAME'	=> '您輸入的帳號是禁止的。',
	'USER_NOT_FOUND_OR_INACTIVE'	=> '您指定的帳號無法找到或者未被啟用。',

	'VIEW_AVATARS'				=> '顯示圖示',
	'VIEW_EDIT'					=> '檢視/編輯',
	'VIEW_FLASH'				=> '顯示 Flash 動畫',
	'VIEW_IMAGES'				=> '顯示主題中的圖片',
	'VIEW_NEXT_HISTORY'			=> '歷史中的下一條簡訊',
	'VIEW_NEXT_PM'				=> '下一條簡訊',
	'VIEW_PM'					=> '檢視簡訊',
	'VIEW_PM_INFO'				=> '簡訊資訊',
	'VIEW_PM_MESSAGE'			=> '1 條簡訊',
	'VIEW_PM_MESSAGES'			=> '%d 條簡訊',
	'VIEW_PREVIOUS_HISTORY'		=> '歷史中的前一條簡訊',
	'VIEW_PREVIOUS_PM'			=> '前一條簡訊',
	'VIEW_SIGS'					=> '顯示簽名',
	'VIEW_SMILIES'				=> '顯示笑臉',
	'VIEW_TOPICS_DAYS'			=> '顯示幾天前的主題',
	'VIEW_TOPICS_DIR'			=> '顯示主題排列方向',
	'VIEW_TOPICS_KEY'			=> '顯示主題排列依據',
	'VIEW_POSTS_DAYS'			=> '顯示幾天前的文章',
	'VIEW_POSTS_DIR'			=> '顯示文章排列方向',
	'VIEW_POSTS_KEY'			=> '顯示文章排列依據',

	'WATCHED_EXPLAIN'			=> '以下是您訂閱的討論區和主題列表。您將收到它們的更新資訊。取消訂閱: 勾選討論區或主題後點選 <em>取消訂閱勾選</em> 按鈕。',
	'WATCHED_FORUMS'			=> '觀察的討論區',
	'WATCHED_TOPICS'			=> '觀察的主題',
	'WRONG_ACTIVATION'			=> '您提供的啟用碼在資料庫中找不到符合的記錄',

	'YOUR_DETAILS'				=> '您的資訊',
	'YOUR_FOES'					=> '您的黑名單',
	'YOUR_FOES_EXPLAIN'			=> '刪除帳號: 勾選並點選提供',
	'YOUR_FRIENDS'				=> '您的好友',
	'YOUR_FRIENDS_EXPLAIN'		=> '刪除帳號: 勾選並點選提供',
	'YOUR_WARNINGS'				=> '您的警告級別',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> '放入資料夾',
		'MARK_AS_READ'		=> '標記成已閱讀',
		'MARK_AS_IMPORTANT'	=> '標記簡訊',
		'DELETE_MESSAGE'	=> '刪除簡訊'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> '標題',
		'SENDER'	=> '發送人',
		'MESSAGE'	=> '簡訊',
		'STATUS'	=> '簡訊狀態',
		'TO'		=> '發送往'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> '符合',
		'IS_NOT_LIKE'	=> '不符合',
		'IS'			=> '是',
		'IS_NOT'		=> '不是',
		'BEGINS_WITH'	=> '以...開頭',
		'ENDS_WITH'		=> '以...結束',
		'IS_FRIEND'		=> '是好友',
		'IS_FOE'		=> '是壞蛋',
		'IS_USER'		=> '是會員',
		'IS_GROUP'		=> '在群組中',
		'ANSWERED'		=> '已回覆的',
		'FORWARDED'		=> '已轉發的',
		'TO_GROUP'		=> '發往我的預設群組',
		'TO_ME'			=> '發給我'
	),


	'GROUPS_EXPLAIN'	=> '群組設定使管理員更好的管理會員。您會處於一個預設的組中。組定義將決定您對於其他會員的顯示資訊，例如您的帳號顏色，圖示，級別等等。您可以改變您的預設組，但是這取決於管理員的設定。您也可以被放入或加入其他組。一些群組將會具有額外的權限瀏覽更多的區域。',
	'GROUP_LEADER'		=> '組領導',
	'GROUP_MEMBER'		=> '組成員',
	'GROUP_PENDING'		=> '待核准的成員',
	'GROUP_NONMEMBER'	=> '非組成員',
	'GROUP_DETAILS'		=> '組資訊',

	'NO_LEADER'		=> '沒有組領導',
	'NO_MEMBER'		=> '沒有組成員',
	'NO_PENDING'	=> '沒有待核准的成員',
	'NO_NONMEMBER'	=> '沒有非組成員',
));

?>