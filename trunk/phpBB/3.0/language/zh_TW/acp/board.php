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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> '這裡您可以進行討論區的基本操作.',
	'CUSTOM_DATEFORMAT'				=> '自訂…',
	'DEFAULT_DATE_FORMAT'			=> '日期格式',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> '日期格式和PHP定義相同 <code>date</code> 函數.',
	'DEFAULT_LANGUAGE'				=> '預設語言',
	'DEFAULT_STYLE'					=> '預設風格',
	'DISABLE_BOARD'					=> '關閉討論區',
	'DISABLE_BOARD_EXPLAIN'			=> '這將讓會員無法使用討論區. 您可以輸入一段簡單的文字描述原因(255個字元以內).',
	'OVERRIDE_STYLE'				=> '覆蓋會員介面',
	'OVERRIDE_STYLE_EXPLAIN'		=> '使用預設的風格覆蓋會員所選風格.',
	'SITE_DESC'						=> '站點描述',
	'SITE_NAME'						=> '站點名稱',
	'SYSTEM_DST'					=> '啟用夏令時',
	'SYSTEM_TIMEZONE'				=> '系統時區',
	'WARNINGS_EXPIRE'				=> '警告失效時間',
	'WARNINGS_EXPIRE_EXPLAIN'		=> '會員警告自動消失所需要的天數',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> '這裡您可以啟用/停用幾個討論區功能',

	'ALLOW_ATTACHMENTS'			=> '允許附加檔案',
	'ALLOW_BOOKMARKS'			=> '允許主題收藏',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '會員可以儲存個人收藏夾',
	'ALLOW_BBCODE'				=> '允許BBCode',
	'ALLOW_FORUM_NOTIFY'		=> '允許訂閱版面',
	'ALLOW_NAME_CHANGE'			=> '允許更改帳號',
	'ALLOW_NO_CENSORS'			=> '允許停用敏感詞過濾',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '會員可以選擇是否停用文章和簡訊中的敏感詞自動過濾.',
	'ALLOW_PM_ATTACHMENTS'		=> '在簡訊中允許附加檔案',
	'ALLOW_SIG'					=> '允許簽名檔',
	'ALLOW_SIG_BBCODE'			=> '在簽名檔中允許使用BBCode',
	'ALLOW_SIG_FLASH'			=> '在會員簽名檔中允許使用<code>[FLASH]</code> 標籤',
	'ALLOW_SIG_IMG'				=> '在會員簽名檔中允許使用<code>[IMG]</code> 標籤',
	'ALLOW_SIG_LINKS'			=> '在會員簽名檔中允許使用連結',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '如果停用 <code>[URL]</code> 標籤和自動連結解析都會失效.',
	'ALLOW_SIG_SMILIES'			=> '在會員簽名檔中使用表情圖示',
	'ALLOW_SMILIES'				=> '允許表情圖示',
	'ALLOW_TOPIC_NOTIFY'		=> '允許訂閱主題',
	'BOARD_PM'					=> '私人簡訊',
	'BOARD_PM_EXPLAIN'			=> '啟用或停用所有會員的私人簡訊.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> '圖示是會員用於展示自己的一幅小圖片. 根據介面有所不同, 不過它們通常顯示在會員發佈的文章旁邊. 這裡您可以決定會員是否能和如何定義他們的圖示. 請注意如果允許會員上傳圖示, 您必須建立下面的目錄並保證這個目錄對於web伺服器是可寫的. 同時也要注意這個檔案大小只對圖示上傳有效, 對於連結的圖示是沒有限制的.',

	'ALLOW_LOCAL'					=> '運行使用圖示冊',
	'ALLOW_REMOTE'					=> '允許使用外部圖示',
	'ALLOW_REMOTE_EXPLAIN'			=> '從其他網站連結的圖示',
	'ALLOW_UPLOAD'					=> '允許圖示上傳',
	'AVATAR_GALLERY_PATH'			=> '圖示冊路徑',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> '在您的phpBB討論區根目錄下的預先設定的圖示畫冊, 例如 <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> '圖示儲存路徑',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> '在您的phpBB討論區根目錄下的路徑, 例如 <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> '最大圖示尺寸',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的高 x 寬)',
	'MAX_FILESIZE'					=> '最大的圖示檔案大小',
	'MAX_FILESIZE_EXPLAIN'			=> '針對上傳的圖示檔案',
	'MIN_AVATAR_SIZE'				=> '最小的圖示檔案大小',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的高 x 寬)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> '這裡您可以設定私人簡訊的所有預設設定',

	'ALLOW_BBCODE_PM'			=> '在私人簡訊中允許BBCode',
	'ALLOW_FLASH_PM'			=> '允許使用<code>[FLASH]</code>',
	'ALLOW_FORWARD_PM'			=> '允許轉發私人簡訊',
	'ALLOW_IMG_PM'				=> '允許使用<code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> '允許對多個會員和群組發送私人簡訊',
	'ALLOW_PRINT_PM'			=> '允許打印格式檢視私人簡訊',
	'ALLOW_QUOTE_PM'			=> '允許在私人簡訊中引用',
	'ALLOW_SIG_PM'				=> '允許在私人簡訊中使用簽名檔',
	'ALLOW_SMILIES_PM'			=> '允許在私人簡訊中使用表情圖示',
	'BOXES_LIMIT'				=> '每個資料夾中的最大信件數量',
	'BOXES_LIMIT_EXPLAIN'		=> '會員每個資料夾中的簡訊將不能超過這數量量. 設定為0將不作限制.',
	'BOXES_MAX'					=> '每個會員的最大資料夾數量',
	'BOXES_MAX_EXPLAIN'			=> '預設情況下會員可以建立資料夾來儲存自己的信件.',
	'ENABLE_PM_ICONS'			=> '在私人簡訊中允許使用主題圖示',
	'FULL_FOLDER_ACTION'		=> '資料夾滿時的預設動作',
	'FULL_FOLDER_ACTION_EXPLAIN'=> '如果會員的資料夾滿了, 預設進行的操作. 已發送資料夾的預設操作固定為刪除舊信件.',
	'HOLD_NEW_MESSAGES'			=> '掛起新信件',
	'PM_EDIT_TIME'				=> '編輯時限',
	'PM_EDIT_TIME_EXPLAIN'		=> '對於沒有發送完成的信件的編輯時限. 設定為0將不作限制.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> '這裡您可以設定發表文章的所有預設設定',
	'ALLOW_POST_LINKS'					=> '在文章/簡訊中允許連結',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '如果停用了<code>[URL]</code> 標籤將停止連結解析.',

	'BUMP_INTERVAL'					=> '頂帖間隔',
	'BUMP_INTERVAL_EXPLAIN'			=> '主題中最後一個文章發表後的天數/小時數/分鐘數.',
	'CHAR_LIMIT'					=> '每個文章的最大字數',
	'CHAR_LIMIT_EXPLAIN'			=> '設定為0則不作限制.',
	'DISPLAY_LAST_EDITED'			=> '顯示最後編輯資訊',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '選擇是否在文章上顯示最後被誰修改的資訊',
	'EDIT_TIME'						=> '編輯時限',
	'EDIT_TIME_EXPLAIN'				=> '新文章子在多長時間內可編輯. 設定為0則不作限制.',
	'FLOOD_INTERVAL'				=> '灌水間隔',
	'FLOOD_INTERVAL_EXPLAIN'		=> '新文章子發表之間的秒數. 要讓會員不受此限制, 請修改其權限.',
	'HOT_THRESHOLD'					=> '熱門文章的帖數標準',
	'HOT_THRESHOLD_EXPLAIN'			=> '成為熱門文章需要的最小文章數, 設定為0則取消熱帖功能.',
	'MAX_POLL_OPTIONS'				=> '投票的最大選項數',
	'MAX_POST_FONT_SIZE'			=> '文章中可以使用的最大字體',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '設定為0則不作限制.',
	'MAX_POST_IMG_HEIGHT'			=> '文章中允許的最大圖片高度',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '作用於圖片和flash, 設定為0則不作限制.',
	'MAX_POST_IMG_WIDTH'			=> '文章中允許的最大圖片寬度',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '作用於圖片和flash, 設定為0則不作限制.',
	'MAX_POST_URLS'					=> '文章中允許的最大連結數量',
	'MAX_POST_URLS_EXPLAIN'			=> '設定為0則不作限制.',
	'POSTING'						=> '發表文章',
	'POSTS_PER_PAGE'				=> '每頁文章數',
	'QUOTE_DEPTH_LIMIT'				=> '每個文章中的最大引用深度',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '設定為0則不作限制.',
	'SMILIES_LIMIT'					=> '每個文章中的最大表情數量',
	'SMILIES_LIMIT_EXPLAIN'			=> '設定為0則不作限制.',
	'TOPICS_PER_PAGE'				=> '每頁主題數',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> '這裡您可以設定會員簽名檔的預設參數',

	'MAX_SIG_FONT_SIZE'				=> '簽名檔最大可用字體',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> '會員簽名檔中允許的最大字體, 設定為0則無限制.',
	'MAX_SIG_IMG_HEIGHT'			=> '簽名檔最大圖片高度',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> '作用於圖片和flash, 設定為0則無限制.',
	'MAX_SIG_IMG_WIDTH'				=> '簽名檔最大圖片寬度',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> '作用於圖片和flash, 設定為0則無限制.',
	'MAX_SIG_LENGTH'				=> '最大簽名檔長度',
	'MAX_SIG_LENGTH_EXPLAIN'		=> '會員簽名檔的最大字元長度.',
	'MAX_SIG_SMILIES'				=> '簽名檔中的最大表情圖示數量',
	'MAX_SIG_SMILIES_EXPLAIN'		=> '設定為0則無限制.',
	'MAX_SIG_URLS'					=> '簽名檔中的最大連結數量',
	'MAX_SIG_URLS_EXPLAIN'			=> '設定為0則無限制.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> '這裡您可以進行會員註冊和資料修改相關的設定',

	'ACC_ACTIVATION'			=> '帳號啟用',
	'ACC_ACTIVATION_EXPLAIN'	=> '這決定了會員是否可以在註冊後立刻瀏覽討論區, 還是必須進行確認. 您也可以禁止新會員註冊.',
	'ACC_ADMIN'					=> '管理員',
	'ACC_DISABLE'				=> '禁止',
	'ACC_NONE'					=> '無',
	'ACC_USER'					=> '會員',
//	'ACC_USER_ADMIN'			=> '會員 + 管理員',
	'ALLOW_EMAIL_REUSE'			=> '允許重複使用email位址',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '不同的會員可以使用相同的email註冊.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA傳真號',
	'COPPA_MAIL'				=> 'COPPA郵件位址',
	'COPPA_MAIL_EXPLAIN'		=> '這是父母用於發送COPPA註冊資料表的郵件位址',
	'ENABLE_COPPA'				=> '啟用COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> '這需要會員說明自己是否大於13週歲以遵守美國COPPA法規. 如果禁止, COPPA群組將不再顯示.',
	'MAX_CHARS'					=> '最大',
	'MIN_CHARS'					=> '最小',
	'NO_AUTH_PLUGIN'			=> '沒有發現合適的認證外掛.',
	'PASSWORD_LENGTH'			=> '密碼長度',
	'PASSWORD_LENGTH_EXPLAIN'	=> '密碼的最大和最小長度.',
	'REG_LIMIT'					=> '註冊嘗試次數',
	'REG_LIMIT_EXPLAIN'			=> '會員在鎖定會話前的嘗試確認次數.',
	'USERNAME_ALPHA_ONLY'		=> '只允許英文字母',
	'USERNAME_ALPHA_SPACERS'	=> '英文字母和空格',
	'USERNAME_ASCII'			=> 'ASCII (沒有國際化unicode)',
	'USERNAME_LETTER_NUM'		=> '任何字母和數字',
	'USERNAME_LETTER_NUM_SPACERS'	=> '任何字母, 數字和空格',
	'USERNAME_CHARS'			=> '限制帳號字元',
	'USERNAME_CHARS_ANY'		=> '任何字元',
	'USERNAME_CHARS_EXPLAIN'	=> '限制用於帳號的字元類型, 包括; 空格, -, +, _, [ 和 ]',
	'USERNAME_LENGTH'			=> '帳號長度',
	'USERNAME_LENGTH_EXPLAIN'	=> '帳號字元的最大和最小長度.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> '這裡您可以對討論區的驗證機制進行設定.',

	'CAPTCHA_GD'					=> 'GD驗證圖片',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD 驗證圖片背景噪點',
	'CAPTCHA_GD_EXPLAIN'					=> '使用 GD 產生更進階的驗證圖片.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> '使用基於GD的前景噪點.',
	'CAPTCHA_GD_X_GRID'						=> 'GD 驗證圖片X軸背景噪點',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> '使用這種方式的較低設定產生基於GD的驗證圖片. 0 將停用X軸的背景噪點.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD 驗證圖片Y軸背景噪點',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> '使用這種方式的較低設定產生基於GD的驗證圖片. 0 將停用Y軸的背景噪點.',

	'CAPTCHA_PREVIEW_MSG'					=> '您更改的可視化驗證設定還未儲存, 這只是一個預覽.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '使用目前設定的驗證圖片將如現在所示. 使用預覽按鈕更新. 注意驗證圖片是隨機產生的, 每次出現都可能不一樣.',
	'VISUAL_CONFIRM_POST'					=> '啟用訪客發表文章驗證',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '當匿名會員發表文章時需要輸入一個隨機產生的驗證碼.',
	'VISUAL_CONFIRM_REG'					=> '啟用註冊圖片驗證',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '當會員註冊時需要輸入一個隨機產生的驗證碼.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> '以下設定了送往會員瀏覽器的資料. 在大多數情況下使用預設設定就已足夠. 如果您自行調整, 不正確的設定將會使會員無法登入討論區.',

	'COOKIE_DOMAIN'				=> 'Cookie作用域',
	'COOKIE_NAME'				=> 'Cookie名稱',
	'COOKIE_PATH'				=> 'Cookie路徑',
	'COOKIE_SECURE'				=> 'Cookie安全',
	'COOKIE_SECURE_EXPLAIN'		=> '如果您的伺服器使用SSL協議, 則啟用這個選項, 否則請停用. 如果沒有使用SSL而啟用這個選項, 將會使討論區轉向錯誤.',
	'ONLINE_LENGTH'				=> '檢視在線上時間跨度',
	'ONLINE_LENGTH_EXPLAIN'		=> '非活動的會員在多少分鐘後不再顯示於在線上會員列表. 值越高將需要越多的資源產生列表.',
	'SESSION_LENGTH'			=> '會話長度',
	'SESSION_LENGTH_EXPLAIN'	=> '會話多少秒後逾時.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> '這裡您可以啟用或停用部分討論區功能以減輕伺服器負載. 對於大多數伺服器並不需要停用任何功能. 不過有些系統和合租環境下停用某些不需要的功能能提高性能. 您也可以指定系統的負載限制, 超出限制的瀏覽將被拒絕.',

	'CUSTOM_PROFILE_FIELDS'			=> '自訂會員資料',
	'LIMIT_LOAD'					=> '系統負載限制',
	'LIMIT_LOAD_EXPLAIN'			=> '如果系統一分鐘內的平均負載超過這個值討論區將自動關閉. 值1.0 等於單顆處理器的100%使用率. 這只工作於基於UNIX/Linux的系統.',
	'LIMIT_SESSIONS'				=> '會話數限制',
	'LIMIT_SESSIONS_EXPLAIN'		=> '如果一分鐘內的會話數超過這個值討論區將自動關閉. 設定為0將不作限制.',
	'LOAD_CPF_MEMBERLIST'			=> '允許介面在會員列表中顯示自訂資料',
	'LOAD_CPF_VIEWPROFILE'			=> '在會員資料中顯示自訂資料',
	'LOAD_CPF_VIEWTOPIC'			=> '在文章檢視中顯示自訂會員資料',
	'LOAD_USER_ACTIVITY'			=> '顯示會員熱門統計',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '在會員資料和會員控制面板中顯示熱門版面和主題. 在文章數超過百萬的討論區上建議關閉此功能.',
	'RECOMPILE_STYLES'				=> '重新編譯舊的風格組件',
	'RECOMPILE_STYLES_EXPLAIN'		=> '檢查檔案系統中更新風格組件並重新編譯.',
	'YES_ANON_READ_MARKING'			=> '允許訪客標記主題',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> '為訪客儲存已閱讀/未讀狀態. 如果停用, 對於訪客所有文章將顯示為已閱讀.',
	'YES_BIRTHDAYS'					=> '啟用生日列表',
	'YES_JUMPBOX'					=> '顯示跳轉列表',
	'YES_MODERATORS'				=> '顯示討論區版主',
	'YES_ONLINE'					=> '顯示在線上會員',
	'YES_ONLINE_EXPLAIN'			=> '在首頁, 版面和文章中顯示在線上會員資訊.',
	'YES_ONLINE_GUESTS'				=> '檢視在線上會員時顯示訪客在線上資訊',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> '在檢視在線上會員時, 顯示訪客在線上資訊.',
	'YES_ONLINE_TRACK'				=> '顯示會員在線上/離線資訊',
	'YES_ONLINE_TRACK_EXPLAIN'		=> '在會員資料和檢視文章頁面中顯示會員在線上資訊.',
	'YES_POST_MARKING'				=> '顯示帶點主題',
	'YES_POST_MARKING_EXPLAIN'		=> '帶點的主題表示會員參與過這個主題.',
	'YES_READ_MARKING'				=> '允許伺服器端標記',
	'YES_READ_MARKING_EXPLAIN'		=> '在資料庫中儲存已閱讀/未讀資訊而不是存在cookie上.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB 支援認證外掛和模組. 這允許您決定如何驗證會員是否登入. 預設的三個外掛時DB, LDAP和Apache. 並不是所有方式都需要額外資訊, 所以您只需要填寫勾選的方式需要的資訊即可.',

	'AUTH_METHOD'				=> '選擇認證方式',

	'APACHE_SETUP_BEFORE_USE'	=> '您必須在轉換到這種認證模式前建立apache認證功能. 記住您用於apache認證的帳號必須和phpBB的帳號相同.',

	'LDAP_DN'						=> 'LDAP基礎<var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> '這是唯一的名字, 用於定位會員資訊, 例如 <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'LDAP email屬性',
	'LDAP_EMAIL_EXPLAIN'			=> '將這個設定為會員的email屬性名稱(如果存在的話), 以便於為新會員自動設定email位址, 保留空白的話將使第一次登入的會員email位址為空.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '使用指定的帳號密碼綁定LDAP伺服器失敗.',
	'LDAP_NO_EMAIL'					=> '指定的email屬性不存在.',
	'LDAP_NO_IDENTITY'				=> '無法為 %s 找到登入身份',
	'LDAP_PASSWORD'					=> 'LDAP 密碼',
	'LDAP_PASSWORD_EXPLAIN'			=> '保留空白以便於匿名瀏覽. 否則為以上會員填入密碼. <strong>警告:</strong> 這個密碼將用明文儲存在資料庫中, 對於可瀏覽資料庫的會員都是可用的.',
	'LDAP_SERVER'					=> 'LDAP 伺服器名稱',
	'LDAP_SERVER_EXPLAIN'			=> '如果使用LDAP, 這是伺服器的主機名或IP位址.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> '這是用於搜尋給定登入身份的關鍵字, 例如 <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP 會員',
	'LDAP_USER_EXPLAIN'				=> '保留空白以便於匿名瀏覽. 如果填入, phpBB將以這個會員連接到LDAP伺服器.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '這裡設定伺服器和域名相關的設定. 請確保輸入的資料是正確可靠的, 錯誤將導致email包含錯誤資訊. 檔輸入域名時記住不包含http:// 和其他協定前綴. 只有當您的伺服器使用一個特別的連接埠時才需要更改連接埠號, 一般使用的都是80.',

	'ENABLE_GZIP'				=> '啟用GZip壓縮', 
	'ENABLE_GZIP_EXPLAIN'		=> '產生的頁面將在發送到瀏覽器前被壓縮. 這將減少網路流量但是會增加伺服器和客戶端的CPU負載.',
	'FORCE_SERVER_VARS'			=> '強制設定伺服器URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> '如果設定為是, 以下的設定將啟用',
	'ICONS_PATH'				=> '主題圖示儲存路徑',
	'ICONS_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如<samp>images/icons</samp>',
	'PATH_SETTINGS'				=> '路徑設定',
	'RANKS_PATH'				=> '等級圖示儲存路徑',
	'RANKS_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如<samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> '指令路徑',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB相對於域名的路徑, 例如<samp>/phpBB3</samp>',
	'SERVER_NAME'				=> '域名',
	'SERVER_NAME_EXPLAIN'		=> '討論區所在域名 (例如: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> '伺服器連接埠',
	'SERVER_PORT_EXPLAIN'		=> '伺服器運行的連接埠, 通常是 80, 如果不清楚請不要更改',
	'SERVER_PROTOCOL'			=> '服務協議',
	'SERVER_PROTOCOL_EXPLAIN'	=> '如果強制設定, 這將用於伺服器協議. 如果保留空白或未強制設定, 協議由cookie安全設定決定 (<samp>http://</samp> or <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> '伺服器URL設定',
	'SMILIES_PATH'				=> '表情圖示儲存路徑',
	'SMILIES_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如 <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> '副檔名組圖示儲存路徑',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> '相對於phpBB根目錄的路徑, 例如 <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> '這裡您可以進行對話和登入相關的設定',

	'ALL'							=> '所有',
	'ALLOW_AUTOLOGIN'				=> '允許自動登入', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '決定會員是否可以在瀏覽討論區時自動登入.', 
	'AUTOLOGIN_LENGTH'				=> '自動登入失效時間 (天數)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '設定為0將取消限制.', 
	'BROWSER_VALID'					=> '瀏覽器驗證',
	'BROWSER_VALID_EXPLAIN'			=> '啟用瀏覽器驗證以增加安全性.',
	'CHECK_DNSBL'					=> '檢查 IP 以防禦 DNS 黑洞',
	'CHECK_DNSBL_EXPLAIN'			=> '如果啟用, 會員的IP位址將被檢查以防禦以下在註冊和發表文章時的 DNSBL 服務: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://spamhaus.org">spamhaus.org</a>. 這個檢查將耗費一些時間, 取決於伺服器的設定. 如果讓討論區變得很漫或產生很多錯誤報告, 請停用這個功能.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '檢查email域名以得到有效 MX 記錄',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '如果啟用, 在註冊時提供的email的域名將被檢查是否有有效的MX記錄.',
	'FORCE_PASS_CHANGE'				=> '強制密碼變更',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> '強制會員在一段時間(天數)後更改密碼. 設定為0則取消限制.',
	'FORWARDED_FOR_VALID'			=> '經過驗證的 <var>X_FORWARDED_FOR</var> 字段頭',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> '只有在發送的<var>X_FORWARDED_FOR</var> 字段頭等於前一次請求中的字段頭才繼續會話. 停用也將檢查 <var>X_FORWARDED_FOR</var> 中的IP.',
	'IP_VALID'						=> '對話IP驗證',
	'IP_VALID_EXPLAIN'				=> '決定會員的IP如何用於會話驗證; <samp>所有</samp> 表示完整位址, <samp>A.B.C</samp> 表示開頭的 x.x.x, <samp>A.B</samp> 表示開頭的 x.x, <samp>None</samp> 取消驗證.',
	'MAX_LOGIN_ATTEMPTS'			=> '最大登入嘗試次數',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> '在超過嘗試次數後會員必須進行可視化登入驗證',
	'NO_IP_VALIDATION'				=> '無',
	'PASSWORD_TYPE'					=> '密碼複雜度',
	'PASSWORD_TYPE_EXPLAIN'			=> '決定設定或更改時密碼的複雜度, 多個選項則往前疊加.',
	'PASS_TYPE_ALPHA'				=> '必須包含數字字母',
	'PASS_TYPE_ANY'					=> '沒有要求',
	'PASS_TYPE_CASE'				=> '必須混用大寫字元',
	'PASS_TYPE_SYMBOL'				=> '必須包含符號',
	'TPL_ALLOW_PHP'					=> '在模板中允許PHP',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '如果啟用這個選項, <code>PHP</code> 和 <code>INCLUDEPHP</code> 聲明將在模板中被解析.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '這個資訊將用於討論區向會員發送email. 請確保email位址是正確的, 任何被退回和無法投遞的消息都將被發送至這個位址. 如果您的主機不提供本地(基於PHP的) email服務, 您可以使用SMTP發送消息. 這需要伺服器的位址 (必要的話詢問提供者). 如果伺服器需要驗證 (並且只有在需要時) 輸入必要的帳號和密碼. 請注意只提供基本的驗證, 暫時不提供其他的驗證支援.',

	'ADMIN_EMAIL'					=> '返回email位址',
	'ADMIN_EMAIL_EXPLAIN'			=> '這將是所有email的返回位址, 技術聯繫email. 將顯示於<samp>Return-Path</samp> 和 <samp>Sender</samp>.',
	'BOARD_EMAIL_FORM'				=> '會員通過討論區發送email',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '可以使用討論區發送email而不顯示會員的email位址.',
	'BOARD_HIDE_EMAILS'				=> '隱藏email位址',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '這個功能使email位址完全隱蔽.',
	'CONTACT_EMAIL'					=> 'email聯繫位址',
	'CONTACT_EMAIL_EXPLAIN'			=> '這將使用在任何需要指定聯繫方式的場合, 例如 垃圾資訊, 錯誤輸出, 等等. 這將總是顯示在 <samp>From</samp> 和 <samp>Reply-To</samp>.',
	'EMAIL_FUNCTION_NAME'			=> 'Email函數名稱',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> '在PHP中用於發送email的函數.',
	'EMAIL_PACKAGE_SIZE'			=> 'Email資料包大小',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '這是在一個資料包中包含的email數量.',
	'EMAIL_SIG'						=> 'Email簽名',
	'EMAIL_SIG_EXPLAIN'				=> '將在討論區發送的email後附加這段文字.',
	'ENABLE_EMAIL'					=> '允許討論區發送email',
	'ENABLE_EMAIL_EXPLAIN'			=> '如果停用, 討論區將不會發送任何email.',
	'SMTP_AUTH_METHOD'				=> 'SMTP驗證方式',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '只有在設定過帳號/密碼的場合, 詢問提供者如果您不能確定使用何種方式.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP 密碼',
	'SMTP_PASSWORD_EXPLAIN'			=> '只有當您的SMTP伺服器需要時才要輸入.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP伺服器連接埠',
	'SMTP_PORT_EXPLAIN'				=> '只有當您清楚您的SMTP伺服器運行在一個不同的連接埠上時才需要設定.',
	'SMTP_SERVER'					=> 'SMTP伺服器位址',
	'SMTP_SETTINGS'					=> 'SMTP設定',
	'SMTP_USERNAME'					=> 'SMTP帳號',
	'SMTP_USERNAME_EXPLAIN'			=> '只有當您的SMTP伺服器需要時才要輸入.',
	'USE_SMTP'						=> '使用SMTP伺服器發送email',
	'USE_SMTP_EXPLAIN'				=> '選擇「是」, 如果您向通過其他伺服器而不是本地mail函數發送email.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> '這裡您可以啟用並控制會員使用Jabber發送及時消息和討論區通知. Jabber是任何人都可以使用的開源協議. 一些Jabber伺服器提供允許您聯繫其他網路會員的通道. 並非所有的伺服器都提供這樣的通道, 協議上的變化將使得操作失效. 更新Jabber帳號資訊需要等待一段時間, 在指令完成前請不要停止!',

	'ERR_JAB_AUTH'			=> '沒有得到Jabber伺服器認證.',
	'ERR_JAB_CONNECT'		=> '無法連接Jabber伺服器.',
	'ERR_JAB_PASSCHG'		=> '無法修改密碼.',
	'ERR_JAB_PASSFAIL'		=> '密碼修改失敗, %s.',
	'ERR_JAB_REGISTER'		=> '註冊帳號時發生錯誤, %s.',
	'ERR_JAB_USERNAME'		=> '指定的帳號已存在, 請使用其他的名字.',

	'JAB_CHANGED'				=> 'Jabber帳號更改完成.',
	'JAB_ENABLE'				=> '啟用Jabber',
	'JAB_ENABLE_EXPLAIN'		=> '允許使用jabber消息和通知',
	'JAB_PACKAGE_SIZE'			=> 'Jabber資料包大小',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> '這是單個資料包中發送的消息數量. 設定為0將不作延遲而直接發送.',
	'JAB_PASSWORD'				=> 'Jabber密碼',
	'JAB_PASS_CHANGED'			=> 'Jabber密碼修改完成.',
	'JAB_PORT'					=> 'Jabber連接埠',
	'JAB_PORT_EXPLAIN'			=> '保留空白, 除非您清楚這個連接埠不是5222',
	'JAB_REGISTERED'			=> '新帳號註冊成功.',
	'JAB_RESOURCE'				=> 'Jabber資源',
	'JAB_RESOURCE_EXPLAIN'		=> '資源位於特定的連接, 例如 討論區, 首頁等.',
	'JAB_SERVER'				=> 'Jabber伺服器',
	'JAB_SERVER_EXPLAIN'		=> '檢視%sjabber.org%s上的伺服器列表',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber設定修改完成.',
	'JAB_USERNAME'				=> 'Jabber帳號',
	'JAB_USERNAME_EXPLAIN'		=> '如果這個會員還未註冊, 它將自動建立.',
));

?>