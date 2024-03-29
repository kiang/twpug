<?php

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'TRANSLATION_INFO' => '正體中文語系由 <a href="http://twpug.net/" target="_blank">台灣PHP聯盟</a> 提供',
	'DIRECTION' => 'ltr',
	'DATE_FORMAT' => '|M Y d|',
	'USER_LANG' => 'zh-tw',
	'1_DAY' => '1天',
	'1_MONTH' => '1個月',
	'1_YEAR' => '1年',
	'2_WEEKS' => '2週',
	'3_MONTHS' => '3個月',
	'6_MONTHS' => '6個月',
	'7_DAYS' => '7天',
	'ACCOUNT_ALREADY_ACTIVATED' => '您的帳號已經被啟用',
	'ACCOUNT_DEACTIVATED' => '您的帳號已經被停用，而且只有管理員才能重新啟用。',
	'ACCOUNT_NOT_ACTIVATED' => '您的帳號尚未被啟用',
	'ACP' => '管理介面',
	'ACTIVE' => '啟用',
	'ACTIVE_ERROR' => '您指定了一個未被啟用的帳號，如果您在啟用帳號的過程中遇到任何問題，請聯絡討論區管理員。',
	'ADMINISTRATOR' => '管理員',
	'ADMINISTRATORS' => '管理員',
	'AGE' => '年齡',
	'AIM' => 'AIM',
	'ALLOWED' => '允許',
	'ALL_FILES' => '全部檔案',
	'ALL_FORUMS' => '全部討論區',
	'ALL_MESSAGES' => '全部訊息',
	'ALL_POSTS' => '全部文章',
	'ALL_TIMES' => '所有顯示的時間為 %1$s %2$s',
	'ALL_TOPICS' => '全部主題',
	'AND' => '和',
	'ARE_WATCHING_FORUM' => '您訂閱了這個討論區，討論區有新文章時會通知您。',
	'ARE_WATCHING_TOPIC' => '您訂閱了這個主題，討論區有新回應時會通知您。',
	'ASCENDING' => '升冪',
	'ATTACHMENTS' => '附加檔案',
	'ATTACHED_IMAGE_NOT_IMAGE' => '您附加的圖片檔案有問題。',
	'AUTHOR' => '作者',
	'AUTH_NO_PROFILE_CREATED' => '建立會員資料失敗。',
	'AVATAR_DISALLOWED_EXTENSION' => '無法顯示檔案，因為不允許使用副檔名 %s 。',
	'AVATAR_EMPTY_REMOTE_DATA' => '指定的圖示無法上傳，遠端的資料無效或損壞。',
	'AVATAR_EMPTY_FILEUPLOAD' => '上傳的圖示檔案是空的。',
	'AVATAR_INVALID_FILENAME' => '%s 是無效的檔案名稱。',
	'AVATAR_NOT_UPLOADED' => '圖示無法上傳。',
	'AVATAR_NO_SIZE' => '無法取得圖示的長和寬，請手動輸入合適的數值。',
	'AVATAR_PARTIAL_UPLOAD' => '上傳的檔案只上傳了一部分。',
	'AVATAR_PHP_SIZE_NA' => '圖示檔案太大。<br />無法判斷伺服器PHP允許的最大檔案大小。',
	'AVATAR_PHP_SIZE_OVERRUN' => '圖示檔案太大，伺服器允許的最大檔案大小是 %d MB。<br />請注意，這個是由 php.ini 設定所以無法更改。',
	'AVATAR_URL_INVALID' => '指定的連結無效。',
	'AVATAR_URL_NOT_FOUND' => '無法找到指定的檔案。',
	'AVATAR_WRONG_FILESIZE' => '圖示檔案大小必須在 0 和 %1d %2s 之間。',
	'AVATAR_WRONG_SIZE' => '圖示的寬度要大於 %1$d 像素，高度要大於 %2$d 像素 並且寬度不能超過 %3$d 像素，高度不能超過 %4$d 像素。您提供的圖示寬為 %5$d 像素，高為 %6$d 像素。',
	'BACK_TO_TOP' => '頁首',
	'BACK_TO_PREV' => '回到前一頁',
	'BAN_TRIGGERED_BY_EMAIL' => '您的信箱在禁用名單中。',
	'BAN_TRIGGERED_BY_IP' => '您的IP在禁用名單中。',
	'BAN_TRIGGERED_BY_USER' => '您的帳號在禁用名單中。',
	'BBCODE_GUIDE' => 'BBCode使用手冊',
	'BCC' => 'BCC',
	'BIRTHDAYS' => '生日',
	'BOARD_BAN_PERM' => '您被這個討論區<strong>永遠</strong>禁用。<br /><br />請聯繫 %2$s討論區管理員3$s 以取得更多資訊。',
	'BOARD_BAN_REASON' => '被禁用的原因： <strong>%s</strong>',
	'BOARD_BAN_TIME' => '您在 <strong>%1$s</strong> 之前將被禁止瀏覽討論區。<br /><br />請聯繫 %2$s討論區管理員 %3$s 以取得更多資訊。',
	'BOARD_DISABLE' => '很抱歉本討論區暫時關閉',
	'BOARD_DISABLED' => '這個討論區目前停用中。',
	'BOARD_UNAVAILABLE' => '抱歉，本討論區暫時無法使用，請過幾分鐘再登入試試。',
	'BROWSING_FORUM_GUEST' => '正在瀏覽此討論區的會員：%1$s 和 %2$d 位訪客',
	'BROWSING_FORUM_GUESTS' => '正在瀏覽此討論區的會員：%1$s 和 %2$d 位訪客',
	'BYTES' => 'Bytes',
	'CANCEL' => '取消',
	'CHANGE' => '修改',
	'CHANGE_FONT_SIZE' => '修改字體大小',
	'CHANGING_PREFERENCES' => '修改討論區設定',
	'CHANGING_PROFILE' => '修改討論區資料設定',
	'CLICK_VIEW_PRIVMSG' => '%s 前往您的收件夾 %s',
	'COLLAPSE_VIEW' => '樹狀檢視',
	'CLOSE_WINDOW' => '關閉視窗',
	'COLOUR_SWATCH' => '調色盤',
	'COMMA_SEPARATOR' => ', ',
	'CONFIRM' => '確定要',
	'CONFIRM_CODE' => '確定要碼',
	'CONFIRM_CODE_EXPLAIN' => '輸入您在圖片中看到的字元，不需要區分大小寫；請注意，沒有數字的零。',
	'CONFIRM_CODE_WRONG' => '您輸入的確定要碼有誤。',
	'CONFIRM_OPERATION' => '您確定要要執行這個操作嗎？',
	'CONGRATULATIONS' => '恭喜',
	'CONNECTION_FAILED' => '連接失敗。',
	'CONNECTION_SUCCESS' => '連接成功！',
	'COOKIES_DELETED' => '所有的cookie都已經被清除。',
	'CURRENT_TIME' => '現在的時間是 %s',
	'DAY' => '天',
	'DAYS' => '天',
	'DELETE' => '刪除',
	'DELETE_ALL' => '刪除全部',
	'DELETE_COOKIES' => '刪除全部討論區cookie',
	'DELETE_MARKED' => '刪除選擇的',
	'DELETE_POST' => '刪除文章',
	'DELIMITER' => '分隔字元',
	'DESCENDING' => '降冪',
	'DISABLED' => '停用',
	'DISPLAY' => '顯示',
	'DISPLAY_GUESTS' => '顯示訪客',
	'DISPLAY_MESSAGES' => '從較早的訊息開始顯示',
	'DISPLAY_POSTS' => '從較早的文章開始顯示',
	'DISPLAY_TOPICS' => '從較早的主題開始顯示',
	'DOWNLOADED' => '已下載',
	'DOWNLOADING_FILE' => '正在下載檔案',
	'DOWNLOAD_COUNT' => '被下載 %d 次',
	'DOWNLOAD_COUNTS' => '被下載 %d 次',
	'DOWNLOAD_COUNT_NONE' => '還未被下載',
	'VIEWED_COUNT' => '被瀏覽 %d 次',
	'VIEWED_COUNTS' => '被瀏覽 %d 次',
	'VIEWED_COUNT_NONE' => '還未被瀏覽',
	'EDIT_POST' => '編輯這篇文章',
	'EMAIL' => '信箱',
	'EMAIL_ADDRESS' => '信箱',
	'EMAIL_SMTP_ERROR_RESPONSE' => '發送信件時遇到問題， <strong>第 %1$s 行</strong>，回應： %2$s 。',
	'EMPTY_SUBJECT' => '您必須為新主題指定一個標題。',
	'EMPTY_MESSAGE_SUBJECT' => '您必須為新訊息指定一個標題。',
	'ENABLED' => '啟用',
	'ENCLOSURE' => '包圍',
	'ERR_CHANGING_DIRECTORY' => '無法改變目錄。',
	'ERR_CONNECTING_SERVER' => '連接伺服器時發生錯誤。',
	'ERR_UNABLE_TO_LOGIN' => '提供的帳號或密碼有誤。',
	'ERR_WRONG_PATH_TO_PHPBB' => '輸入的 phpBB 路徑無效。',
	'EXPAND_VIEW' => '展開檢視',
	'EXTENSION' => '副檔名',
	'EXTENSION_DISABLED_AFTER_POSTING' => '副檔名 <strong>%s</strong> 已經被停用並不再顯示。',
	'FAQ' => '常見問答',
	'FAQ_EXPLAIN' => '常見問答',
	'FILENAME' => '檔案名稱',
	'FILESIZE' => '檔案大小',
	'FILEDATE' => '檔案日期',
	'FILE_COMMENT' => '檔案說明',
	'FILE_NOT_FOUND' => '無法找到請求的檔案。',
	'FIND_USERNAME' => '搜尋會員',
	'FOLDER' => '資料夾',
	'FORGOT_PASS' => '我忘記了自己的密碼',
	'FORUM' => '討論區',
	'FORUMS' => '討論區',
	'FORUMS_MARKED' => '所有討論區已經被標記為已閱讀。',
	'FORUM_CAT' => '討論區類別',
	'FORUM_INDEX' => '討論區首頁',
	'FORUM_LINK' => '討論區連結',
	'FORUM_LOCATION' => '討論區位置',
	'FORUM_LOCKED' => '討論區鎖定',
	'FORUM_RULES' => '討論區規則',
	'FORUM_RULES_LINK' => '請點選這裡來瀏覽討論區規則',
	'FROM' => '自',
	'FSOCK_DISABLED' => '操作無法完成，因為<var>fsockopen</var>函數被停用或者無法找到目標伺服器。',
	'FTP_FSOCK_HOST' => 'FTP 主機',
	'FTP_FSOCK_HOST_EXPLAIN' => '用於連接您的網站的FTP 伺服器。',
	'FTP_FSOCK_PASSWORD' => 'FTP 密碼',
	'FTP_FSOCK_PASSWORD_EXPLAIN' => 'FTP帳號所使用的密碼',
	'FTP_FSOCK_PORT' => 'FTP 連接埠',
	'FTP_FSOCK_PORT_EXPLAIN' => 'FTP伺服器的連接埠',
	'FTP_FSOCK_ROOT_PATH' => 'phpBB 路徑',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN' => '從根目錄到您的 phpBB 討論區安裝路徑',
	'FTP_FSOCK_TIMEOUT' => 'FTP 逾時',
	'FTP_FSOCK_TIMEOUT_EXPLAIN' => '以秒為單位表示的時間，系統將在這個時間內等待伺服器的回應。',
	'FTP_FSOCK_USERNAME' => 'FTP 帳號',
	'FTP_FSOCK_USERNAME_EXPLAIN' => '連接您的FTP伺服器所用的帳號',
	'FTP_HOST' => 'FTP 主機',
	'FTP_HOST_EXPLAIN' => '用於連接您的網站的FTP 伺服器',
	'FTP_PASSWORD' => 'FTP 密碼',
	'FTP_PASSWORD_EXPLAIN' => '對應您的FTP帳號的密碼',
	'FTP_PORT' => 'FTP 連接埠',
	'FTP_PORT_EXPLAIN' => '您的FTP伺服器的連接埠',
	'FTP_ROOT_PATH' => 'phpBB 路徑',
	'FTP_ROOT_PATH_EXPLAIN' => '從根目錄到您的 phpBB 討論區的路徑',
	'FTP_TIMEOUT' => 'FTP 逾時',
	'FTP_TIMEOUT_EXPLAIN' => '以秒為單位表示的時間，系統將在這個時間內等待伺服器的回應',
	'FTP_USERNAME' => 'FTP 帳號',
	'FTP_USERNAME_EXPLAIN' => '連接您的FTP伺服器所用的帳號',
	'GENERAL_ERROR' => '一般錯誤',
	'GO' => '衝',
	'GOTO_PAGE' => '前往頁數',
	'GROUP' => '群組',
	'GROUPS' => '群組',
	'GROUP_ERR_TYPE' => '指定了不恰當的群組類型。',
	'GROUP_ERR_USERNAME' => '沒有指定群組名稱。',
	'GROUP_ERR_USER_LONG' => '群組名稱不能夠超過 60 個字元，指定的群組名稱過長。',
	'GUEST' => '訪客',
	'GUEST_USERS_ONLINE' => '共有 %d 位訪客在線上',
	'GUEST_USERS_TOTAL' => '%d 位訪客',
	'GUEST_USERS_ZERO_ONLINE' => '共有 0 位訪客在線上',
	'GUEST_USERS_ZERO_TOTAL' => '0 位訪客',
	'GUEST_USER_ONLINE' => '共有 %d 位訪客在線上',
	'GUEST_USER_TOTAL' => '%d 位訪客',
	'G_ADMINISTRATORS' => '管理員',
	'G_BOTS' => '機器人',
	'G_GUESTS' => '訪客',
	'G_REGISTERED' => '註冊的會員',
	'G_REGISTERED_COPPA' => '註冊的COPPA會員',
	'G_GLOBAL_MODERATORS' => '全站管理者',
	'HIDDEN_USERS_ONLINE' => '%d 位隱藏會員在線上',
	'HIDDEN_USERS_TOTAL' => '%d 位隱藏會員和 ',
	'HIDDEN_USERS_ZERO_ONLINE' => '0 位隱藏會員在線上',
	'HIDDEN_USERS_ZERO_TOTAL' => '0 位隱藏會員和 ',
	'HIDDEN_USER_ONLINE' => '%d 位隱藏會員在線上',
	'HIDDEN_USER_TOTAL' => '%d 位隱藏會員和 ',
	'HIDE_GUESTS' => '隱藏訪客',
	'HIDE_ME' => '在這次登入中隱藏我的在線上狀態',
	'HOURS' => '小時',
	'HOME' => '首頁',
	'ICQ' => 'ICQ',
	'ICQ_STATUS' => 'ICQ 狀態',
	'IF' => '如果',
	'IMAGE' => '圖片',
	'IMAGE_FILETYPE_INVALID' => '不支援圖片檔案類型 %d ， mime類型 %s 。',
	'IMAGE_FILETYPE_MISMATCH' => '圖片檔案類型不符合：預期的副檔名是 %1$s ，但提供的是 %2$s。',
	'IN' => '位於',
	'INDEX' => '首頁',
	'INFORMATION' => '資訊',
	'INTERESTS' => '興趣',
	'INVALID_DIGEST_CHALLENGE' => '無效的 digest challenge',
	'INVALID_EMAIL_LOG' => '<strong>%s</strong> 是無效的信箱位址？',
	'IP' => 'IP',
	'IP_BLACKLISTED' => '您的 IP %1$s 已經被封鎖，要得到更多的資訊請參考<a href="%2$s">%2$s</a>。',
	'JABBER' => 'Jabber',
	'JOINED' => '加入時間',
	'JUMP_PAGE' => '輸入您想前往的頁數。',
	'JUMP_TO' => '前往',
	'JUMP_TO_PAGE' => '點選前往頁面…',
	'KB' => 'KB',
	'LAST_POST' => '最新文章',
	'LAST_UPDATED' => '最近更新',
	'LAST_VISIT' => '最後瀏覽',
	'LDAP_NO_LDAP_EXTENSION' => 'LDAP 外掛無法使用。',
	'LDAP_NO_SERVER_CONNECTION' => '無法連接 LDAP 伺服器。',
	'LEGEND' => '團隊',
	'LOCATION' => '位址',
	'LOCK_POST' => '鎖定文章',
	'LOCK_POST_EXPLAIN' => '避免編輯',
	'LOCK_TOPIC' => '鎖定主題',
	'LOGIN' => '登入',
	'LOGIN_CHECK_PM' => '登入並檢查網站訊息。',
	'LOGIN_CONFIRMATION' => '登入確定要',
	'LOGIN_CONFIRM_EXPLAIN' => '為了防止暴力破解會員密碼，討論區管理員要求您在超過最大嘗試次數後輸入一組確定要碼，確定要碼顯示在以下所示的圖片中；如果您有視力缺陷無法閱讀請聯繫 %s討論區管理員%s。',
	'LOGIN_ERROR_ATTEMPTS' => '您超出了討論區規定的最大嘗試次數，除了您的帳號和密碼外您還需要輸入下圖所示的確定要碼。',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE' => '您的瀏覽未被Apache伺服器授權。',
	'LOGIN_ERROR_PASSWORD' => '您輸入了一個無效的密碼，請查證後重新輸入；如果一直存在問題請聯繫 %s討論區管理員%s。',
	'LOGIN_ERROR_PASSWORD_CONVERT' => '在討論區升級中無法轉換您的密碼，請 %s申請一個新密碼%s；如果您還遇到其他的問題，請聯繫 %s討論區管理員%s。',
	'LOGIN_ERROR_USERNAME' => '您輸入了一個無效的帳號，請查證後重新輸入；如果一直存在問題請聯繫 %s討論區管理員%s。',
	'LOGIN_FORUM' => '您需要輸入正確密碼才能瀏覽這個討論區。',
	'LOGIN_INFO' => '您必須註冊後才能登入，註冊僅需要幾秒鐘的時間但是會給您更多的權限；在登入前請確定要您已經明白我們的使用條款和政策，當瀏覽討論區時請確定要您已經閱讀過討論區規則。',
	'LOGIN_VIEWFORUM' => '您必須註冊並登入才能瀏覽這個討論區。',
	'LOGIN_EXPLAIN_EDIT' => '您必須註冊並登入才能編輯討論區文章。',
	'LOGIN_EXPLAIN_VIEWONLINE' => '註冊且登入後才可以檢視線上會員名單。',
	'LOGOUT' => '登出',
	'LOGOUT_USER' => '登出 [ %s ]',
	'LOG_ME_IN' => '每次瀏覽時自動登入',
	'MARK' => '標記',
	'MARK_ALL' => '標記全部',
	'MARK_FORUMS_READ' => '將討論區標記為已閱讀',
	'MB' => 'MB',
	'MCP' => '版主控制台',
	'MEMBERLIST' => '會員',
	'MEMBERLIST_EXPLAIN' => '檢視本站會員的完整列表',
	'MERGE' => '合併',
	'MERGE_POSTS' => '合併文章',
	'MERGE_TOPIC' => '合併主題',
	'MESSAGE' => '內容',
	'MESSAGES' => '內容',
	'MESSAGE_BODY' => '文章內容',
	'MINUTES' => '分鐘',
	'MODERATE' => '管理',
	'MODERATOR' => '版主',
	'MODERATORS' => '版主',
	'MONTH' => '月',
	'MOVE' => '移動',
	'MSNM' => 'MSNM/WLM',
	'NA' => '無',
	'NEWEST_USER' => '最新註冊的會員：<strong>%s%s%s</strong>',
	'NEW_MESSAGE' => '新簡訊',
	'NEW_MESSAGES' => '新簡訊',
	'NEW_PM' => '<strong>%d</strong> 條新簡訊',
	'NEW_PMS' => '<strong>%d</strong> 條新簡訊',
	'NEW_POST' => '有新文章',
	'NEW_POSTS' => '有新文章',
	'NEXT' => '下一個',
	'NEXT_STEP' => '下一步',
	'NEVER' => '從未',
	'NO' => '否',
	'NOT_ALLOWED_MANAGE_GROUP' => '您沒有權限管理這個群組。',
	'NOT_AUTHORISED' => '您沒有權限瀏覽這塊區域。',
	'NOT_WATCHING_FORUM' => '您已經取消訂閱這個討論區。',
	'NOT_WATCHING_TOPIC' => '您已經取消這個主題的訂閱。',
	'NOTIFY_ADMIN' => '請通知討論區管理員或網站管理者。',
	'NOTIFY_ADMIN_EMAIL' => '請通知討論區管理員或網站管理者：<a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT' => '您沒有權限瀏覽這個檔案。',
	'NO_ACTION' => '沒有指定操作。',
	'NO_ADMINISTRATORS' => '這個討論區沒有設定管理員。',
	'NO_AUTH_ADMIN' => '您沒有管理權限，因此不能瀏覽管理員控制台。',
	'NO_AUTH_ADMIN_USER_DIFFER' => '您不能被重新登入為另一個會員。',
	'NO_AUTH_OPERATION' => '您沒有完成這個操作所需要的權限。',
	'NO_CONNECT_TO_SMTP_HOST' => '無法連接 smtp 伺服器： %s : %s',
	'NO_BIRTHDAYS' => '今天沒人過生日',
	'NO_EMAIL_MESSAGE' => '沒有輸入信件內容。',
	'NO_EMAIL_RESPONSE_CODE' => '無法得到郵件伺服器回應碼。',
	'NO_EMAIL_SUBJECT' => '沒有輸入信件標題。',
	'NO_FORUM' => '您選擇的討論區不存在。',
	'NO_FORUMS' => '這個版面沒有討論區。',
	'NO_GROUP' => '請求的群組不存在。',
	'NO_GROUP_MEMBERS' => '這個群組沒有成員。',
	'NO_IPS_DEFINED' => '沒有設定 IP 位址或主機名稱',
	'NO_MEMBERS' => '這個搜尋條件找不到任何會員。',
	'NO_MESSAGES' => '沒有簡訊',
	'NO_MODE' => '沒有指定模式。',
	'NO_MODERATORS' => '這個討論區沒有設定版主。',
	'NO_NEW_MESSAGES' => '沒有新的簡訊',
	'NO_NEW_PM' => '<strong>0</strong> 封新簡訊',
	'NO_NEW_POSTS' => '無新文章',
	'NO_ONLINE_USERS' => '沒有註冊會員',
	'NO_POSTS' => '沒有文章',
	'NO_POSTS_TIME_FRAME' => '在指定的時段中沒有這個主題的文章。',
	'NO_SUBJECT' => '沒有輸入標題',
	'NO_SUCH_SEARCH_MODULE' => '指定的搜尋模組不存在。',
	'NO_SUPPORTED_AUTH_METHODS' => '沒有可支援的認證方法。',
	'NO_TOPIC' => '瀏覽的主題不存在。',
	'NO_TOPICS' => '這個討論區還沒有主題或文章。',
	'NO_TOPICS_TIME_FRAME' => '在指定的時段中這個討論區沒有主題發表。',
	'NO_UNREAD_PM' => '<strong>0</strong> 封未讀簡訊',
	'NO_UPLOAD_FORM_FOUND' => '上傳已經完成初始化，但是沒有上傳有效的檔案。',
	'NO_USER' => '瀏覽的會員不存在。',
	'NO_USERS' => '瀏覽的會員不存在。',
	'NO_USER_SPECIFIED' => '沒有指定帳號。',
	'OCCUPATION' => '職業',
	'OFFLINE' => '離線',
	'ONLINE' => '線上',
	'ONLINE_BUDDIES' => '線上好友',
	'ONLINE_USERS_TOTAL' => '線上共有 <strong>%d</strong> 位會員： ',
	'ONLINE_USERS_ZERO_TOTAL' => '線上共有 <strong>0</strong> 位會員： ',
	'ONLINE_USER_TOTAL' => '線上共有 <strong>%d</strong> 位會員： ',
	'OPTIONS' => '選項',
	'PAGE_OF' => '第<strong>%1$d</strong>頁 / 共<strong>%2$d</strong> 頁',
	'PASSWORD' => '密碼',
	'PLAY_QUICKTIME_FILE' => '播放 Quicktime 檔案',
	'PM' => '簡訊',
	'POSTING_MESSAGE' => '發表簡訊在 %s',
	'POSTING_PRIVATE_MESSAGE' => '編寫簡訊',
	'POST' => '文章',
	'POST_ANNOUNCEMENT' => '公告',
	'POST_STICKY' => '置頂',
	'POSTED' => '發表於',
	'POSTED_IN_FORUM' => '於',
	'POSTED_ON_DATE' => '於',
	'POSTS' => '文章',
	'POSTS_UNAPPROVED' => '這個主題裡至少有一篇文章未被核准。',
	'POST_BY_AUTHOR' => '由',
	'POST_BY_FOE' => '這篇文章由 <strong>%1$s</strong> 發表，他在您的忽略列表中，%2$s顯示這篇文章%3$s。',
	'POST_DAY' => '每天 %.2f 篇文章',
	'POST_DETAILS' => '文章細節',
	'POST_NEW_TOPIC' => '發表新文章',
	'POST_PCT' => '所有文章的 %.2f%%',
	'POST_PCT_ACTIVE' => '會員文章的 %.2f%%',
	'POST_PCT_ACTIVE_OWN' => '您的文章的 %.2f%%',
	'POST_REPLY' => '發表回覆',
	'POST_REPORTED' => '檢視舉報內容',
	'POST_SUBJECT' => '文章標題',
	'POST_TIME' => '發表時間',
	'POST_TOPIC' => '發表新主題',
	'POST_UNAPPROVED' => '這篇文章正在等待審核',
	'PREVIEW' => '預覽',
	'PREVIOUS' => '上一個',
	'PREVIOUS_STEP' => '上一步',
	'PRIVACY' => '隱私政策',
	'PRIVATE_MESSAGE' => '簡訊',
	'PRIVATE_MESSAGES' => '簡訊',
	'PRIVATE_MESSAGING' => '簡訊',
	'PROFILE' => '會員控制台',
	'READING_FORUM' => '檢視 %s 討論區的主題',
	'READING_GLOBAL_ANNOUNCE' => '檢視全站公告',
	'READING_LINK' => '轉向討論區連結 %s',
	'READING_TOPIC' => '檢視 %s 的主題',
	'READ_PROFILE' => '會員資料',
	'REASON' => '原因',
	'RECORD_ONLINE_USERS' => '最高線上記錄：<strong>%1$s</strong>，發生於 %2$s',
	'REDIRECT' => '轉向',
	'REDIRECTS' => '轉向總數',
	'REGISTER' => '註冊',
	'REGISTERED_USERS' => '註冊會員：',
	'REG_USERS_ONLINE' => '共有 %d 位註冊會員和 ',
	'REG_USERS_TOTAL' => '%d 位註冊會員， ',
	'REG_USERS_ZERO_ONLINE' => '共有 0 位註冊會員和 ',
	'REG_USERS_ZERO_TOTAL' => '0 位註冊會員， ',
	'REG_USER_ONLINE' => '共有 %d 位註冊會員和 ',
	'REG_USER_TOTAL' => '%d 位註冊會員， ',
	'REMOVE' => '刪除',
	'REMOVE_INSTALL' => '在開始使用討論區前請刪除、移除或重命名 install 資料夾，如果這個資料夾存在，您只能瀏覽管理員控制介面(ACP)。',
	'REPLIES' => '回覆總數',
	'REPLY_WITH_QUOTE' => '引用回覆',
	'REPLYING_GLOBAL_ANNOUNCE' => '回覆全站公告',
	'REPLYING_MESSAGE' => '回覆簡訊在 %s',
	'REPORT_BY' => '舉報人',
	'REPORT_POST' => '舉報此文章',
	'REPORTING_POST' => '舉報文章',
	'RESEND_ACTIVATION' => '重新發送啟用郵件',
	'RESET' => '重置',
	'RESTORE_PERMISSIONS' => '恢復權限',
	'RETURN_INDEX' => '%s回到首頁%s',
	'RETURN_FORUM' => '%s回到最近瀏覽的討論區%s',
	'RETURN_PAGE' => '%s回到先前的頁面%s',
	'RETURN_TOPIC' => '%s回到最近瀏覽的主題%s',
	'RETURN_TO' => '回到',
	'RULES_ATTACH_CAN' => '您 <strong>可以</strong> 在這個討論區提供附加檔案',
	'RULES_ATTACH_CANNOT' => '您 <strong>不能</strong> 在這個討論區提供附加檔案',
	'RULES_DELETE_CAN' => '您 <strong>可以</strong> 在這個討論區刪除文章',
	'RULES_DELETE_CANNOT' => '您 <strong>不能</strong> 在這個討論區刪除文章',
	'RULES_DOWNLOAD_CAN' => '您 <strong>可以</strong> 在這個討論區下載附加檔案',
	'RULES_DOWNLOAD_CANNOT' => '您 <strong>不能</strong> 在這個討論區下載附加檔案',
	'RULES_EDIT_CAN' => '您 <strong>可以</strong> 在這個討論區編輯文章',
	'RULES_EDIT_CANNOT' => '您 <strong>不能</strong> 在這個討論區編輯文章',
	'RULES_LOCK_CAN' => '您 <strong>可以</strong> 在這個討論區鎖定文章',
	'RULES_LOCK_CANNOT' => '您 <strong>不能</strong> 在這個討論區鎖定文章',
	'RULES_POST_CAN' => '您 <strong>可以</strong> 在這個討論區發表主題',
	'RULES_POST_CANNOT' => '您 <strong>不能</strong> 在這個討論區發表主題',
	'RULES_REPLY_CAN' => '您 <strong>可以</strong> 在這個討論區回覆主題',
	'RULES_REPLY_CANNOT' => '您 <strong>不能</strong> 在這個討論區回覆主題',
	'RULES_VOTE_CAN' => '您 <strong>可以</strong> 在這個討論區發起投票',
	'RULES_VOTE_CANNOT' => '您 <strong>不能</strong> 在這個討論區發起投票',
	'SEARCH' => '搜尋',
	'SEARCH_MINI' => '搜尋…',
	'SEARCH_ADV' => '進階搜尋',
	'SEARCH_ADV_EXPLAIN' => '檢視進階搜尋選項',
	'SEARCH_KEYWORDS' => '按關鍵詞搜尋',
	'SEARCHING_FORUMS' => '搜尋討論區',
	'SEARCH_ACTIVE_TOPICS' => '檢視熱門的主題',
	'SEARCH_FOR' => '搜尋',
	'SEARCH_FORUM' => '搜尋這個討論區…',
	'SEARCH_NEW' => '檢視新文章',
	'SEARCH_POSTS_BY' => '搜尋文章，按',
	'SEARCH_SELF' => '檢視您的文章',
	'SEARCH_TOPIC' => '搜尋這個主題…',
	'SEARCH_UNANSWERED' => '檢視沒有回覆的主題',
	'SECONDS' => '秒',
	'SELECT' => '選擇',
	'SELECT_ALL_CODE' => '全選',
	'SELECT_DESTINATION_FORUM' => '請選擇一個目的討論區',
	'SELECT_FORUM' => '選擇一個討論區',
	'SEND_EMAIL' => '發送Email',
	'SEND_EMAIL_USER' => '發送Email',
	'SEND_PRIVATE_MESSAGE' => '發送簡訊',
	'SETTINGS' => '設定',
	'SIGNATURE' => '簽名',
	'SKIP' => '跳到內容',
	'SMTP_NO_AUTH_SUPPORT' => 'SMTP伺服器不支援驗證',
	'SORRY_AUTH_READ' => '您沒有閱讀這個討論區的權限',
	'SORRY_AUTH_VIEW_ATTACH' => '您沒有下載這個附加檔案的權限',
	'SORT_BY' => '排序',
	'SORT_JOINED' => '加入時間',
	'SORT_LOCATION' => '位址',
	'SORT_RANK' => '級別',
	'SORT_TOPIC_TITLE' => '主題',
	'SORT_USERNAME' => '帳號',
	'SPLIT_TOPIC' => '分割主題',
	'SQL_ERROR_OCCURRED' => '當讀取頁面的時候發生SQL錯誤。如果錯誤一直存在，請聯繫 %s討論區管理員%s 。',
	'STATISTICS' => '統計資訊',
	'START_WATCHING_FORUM' => '訂閱討論區',
	'START_WATCHING_TOPIC' => '訂閱主題',
	'STOP_WATCHING_FORUM' => '取消訂閱討論區',
	'STOP_WATCHING_TOPIC' => '取消訂閱主題',
	'SUBFORUM' => '子討論區',
	'SUBFORUMS' => '子討論區',
	'SUBJECT' => '文章標題',
	'SUBMIT' => '提供',
	'TERMS_USE' => '使用條款',
	'TEST_CONNECTION' => '連線測試',
	'THE_TEAM' => '團隊',
	'TIME' => '時間',
	'TOO_LONG_AIM' => '您輸入的AIM名字太長了。',
	'TOO_LONG_CONFIRM_CODE' => '您輸入的確定要碼太長了。',
	'TOO_LONG_ICQ' => '您輸入的ICQ號碼太長了。',
	'TOO_LONG_INTERESTS' => '您輸入的興趣內容太長了。',
	'TOO_LONG_JABBER' => '您輸入的 Jabber 帳號名稱太長了。',
	'TOO_LONG_LOCATION' => '您輸入的位址太長了。',
	'TOO_LONG_MSN' => '您輸入的 MSNM/WLM 名稱太長了。',
	'TOO_LONG_NEW_PASSWORD' => '您輸入的密碼太長了。',
	'TOO_LONG_OCCUPATION' => '您輸入的職業太長了。',
	'TOO_LONG_PASSWORD_CONFIRM' => '您輸入的驗證密碼太長了。',
	'TOO_LONG_USER_PASSWORD' => '您輸入的密碼太長了。',
	'TOO_LONG_USERNAME' => '您輸入的帳號太長了。',
	'TOO_LONG_EMAIL' => '您輸入的信箱太長了。',
	'TOO_LONG_EMAIL_CONFIRM' => '您輸入的信箱確定要太長了。',
	'TOO_LONG_WEBSITE' => '您輸入的網址太長了。',
	'TOO_LONG_YIM' => '您輸入的 Yahoo! Messenger 帳號太長了。',
	'TOO_MANY_VOTE_OPTIONS' => '您在投票中選擇了過多的選項。',
	'TOO_SHORT_AIM' => '您輸入的AIM名字太短了。',
	'TOO_SHORT_CONFIRM_CODE' => '您輸入的確定要碼太短了。',
	'TOO_SHORT_ICQ' => '您輸入的ICQ號碼太短了。',
	'TOO_SHORT_INTERESTS' => '您輸入的興趣內容太短了。',
	'TOO_SHORT_JABBER' => '您輸入的 Jabber 帳號名稱太短了。',
	'TOO_SHORT_LOCATION' => '您輸入的位址太短了。',
	'TOO_SHORT_MSN' => '您輸入的 MSNM/WLM 名稱太短了。',
	'TOO_SHORT_NEW_PASSWORD' => '您輸入的密碼太短了。',
	'TOO_SHORT_OCCUPATION' => '您輸入的職業太短了。',
	'TOO_SHORT_PASSWORD_CONFIRM' => '您輸入的驗證密碼太短了。',
	'TOO_SHORT_USER_PASSWORD' => '您輸入的密碼太短了。',
	'TOO_SHORT_USERNAME' => '您輸入的帳號太短了。',
	'TOO_SHORT_EMAIL' => '您輸入的信箱太短了。',
	'TOO_SHORT_EMAIL_CONFIRM' => '您輸入的信箱確定要太短了。',
	'TOO_SHORT_WEBSITE' => '您輸入的網址太短了。',
	'TOO_SHORT_YIM' => '您輸入的 Yahoo! Messenger 帳號太短了。',
	'TOPIC' => '主題',
	'TOPICS' => '主題',
	'TOPIC_ICON' => '主題圖示',
	'TOPIC_LOCKED' => '這個主題已被鎖定，您不能編輯或回覆這個主題',
	'TOPIC_MOVED' => '移動主題',
	'TOPIC_REVIEW' => '主題瀏覽',
	'TOPIC_TITLE' => '標題',
	'TOPIC_UNAPPROVED' => '這個主題已經被核准',
	'TOTAL_ATTACHMENTS' => '附加檔案',
	'TOTAL_LOG' => '1 個記錄',
	'TOTAL_LOGS' => '%d 個記錄',
	'TOTAL_NO_PM' => '總計 0 封簡訊',
	'TOTAL_PM' => '總計 1 封簡訊',
	'TOTAL_PMS' => '總計 %d 封簡訊',
	'TOTAL_POSTS' => '發表文章總數',
	'TOTAL_POSTS_OTHER' => '文章總數：<strong>%d</strong>',
	'TOTAL_POSTS_ZERO' => '文章總數：<strong>0</strong>',
	'TOPIC_REPORTED' => '這篇主題已經被舉報了',
	'TOTAL_TOPICS_OTHER' => '主題總數：<strong>%d</strong>',
	'TOTAL_TOPICS_ZERO' => '主題總數：<strong>0</strong>',
	'TOTAL_USERS_OTHER' => '註冊會員總數：<strong>%d</strong>',
	'TOTAL_USERS_ZERO' => '註冊會員總數：<strong>0</strong>',
	'TRACKED_PHP_ERROR' => '追蹤的 PHP 錯誤: %s',
	'UNABLE_GET_IMAGE_SIZE' => '無法瀏覽圖片，或者此檔案不是一個有效的圖片檔案。',
	'UNABLE_TO_DELIVER_FILE' => '無法傳送檔案。',
	'UNKNOWN_BROWSER' => '無法瀏覽',
	'UNMARK_ALL' => '取消全部',
	'UNREAD_MESSAGES' => '未讀簡訊',
	'UNREAD_PM' => '<strong>%d</strong> 封未讀簡訊',
	'UNREAD_PMS' => '<strong>%d</strong> 封未讀簡訊',
	'UNWATCHED_FORUMS' => '您將不再關注這些勾選的討論區。',
	'UNWATCHED_TOPICS' => '您將不再關注這些勾選的主題。',
	'UPDATE' => '更新',
	'UPLOAD_IN_PROGRESS' => '正在上傳>',
	'URL_REDIRECT' => '如果您的瀏覽器不支援 meta 重定向。請點選 %s這裡%s 連接。',
	'USERGROUPS' => '群組',
	'USERNAME' => '帳號',
	'USERNAMES' => '帳號',
	'USER_AVATAR' => '圖示',
	'USER_CANNOT_READ' => '您不能閱讀這個討論區的文章',
	'USER_POST' => '%d 篇文章',
	'USER_POSTS' => '%d 篇文章',
	'USERS' => '會員',
	'USE_PERMISSIONS' => '檢查會員的權限',
	'VARIANT_DATE_SEPARATOR' => ' / ',
	'VIEWED' => '已閱讀',
	'VIEWING_FAQ' => '檢視常見問題',
	'VIEWING_MEMBERS' => '檢視成員細節',
	'VIEWING_ONLINE' => '檢視有誰在線上',
	'VIEWING_MCP' => '檢視版主控制台',
	'VIEWING_MEMBER_PROFILE' => '檢視會員資料',
	'VIEWING_PRIVATE_MESSAGES' => '檢視簡訊',
	'VIEWING_REGISTER' => '註冊帳號',
	'VIEWING_UCP' => '檢視會員控制台',
	'VIEWS' => '閱讀次數',
	'VIEW_BOOKMARKS' => '檢視書籤',
	'VIEW_FORUM_LOGS' => '檢視日誌',
	'VIEW_LATEST_POST' => '檢視最新文章',
	'VIEW_NEWEST_POST' => '檢視最新未讀文章',
	'VIEW_NOTES' => '檢視會員記錄',
	'VIEW_ONLINE_TIME' => '資料基於過去 %d 分鐘內的會員活動記錄',
	'VIEW_ONLINE_TIMES' => '資料基於過去 %d 分鐘內的會員活動記錄',
	'VIEW_TOPIC' => '檢視主題',
	'VIEW_TOPIC_ANNOUNCEMENT' => '公告： ',
	'VIEW_TOPIC_GLOBAL' => '全站公告： ',
	'VIEW_TOPIC_LOCKED' => '鎖定： ',
	'VIEW_TOPIC_LOGS' => '檢視記錄',
	'VIEW_TOPIC_MOVED' => '移除： ',
	'VIEW_TOPIC_POLL' => '投票： ',
	'VIEW_TOPIC_STICKY' => '置頂： ',
	'VISIT_WEBSITE' => '參觀網站',
	'WARNINGS' => '警告次數',
	'WARN_USER' => '警告會員',
	'WELCOME_SUBJECT' => '歡迎來到 %s 討論區',
	'WEBSITE' => '網站',
	'WHOIS' => 'Whois',
	'WHO_IS_ONLINE' => '在線上會員',
	'WRONG_PASSWORD' => '您輸入了錯誤的密碼。',
	'WRONG_DATA_ICQ' => '您輸入的數字不是一個有效的 ICQ 號碼。',
	'WRONG_DATA_JABBER' => '您輸入的名字不是一個有效的 Jabber 帳號。',
	'WRONG_DATA_LANG' => '您指定了一個無效的語言。',
	'WRONG_DATA_WEBSITE' => '網站的位址無效，請包含協定前綴。例如 http://twpug.net/。',
	'WROTE' => '寫道',
	'YEAR' => '年',
	'YEAR_MONTH_DAY' => '(YYYY-MM-DD)',
	'YES' => '是',
	'YIM' => 'YIM',
	'YOU_LAST_VISIT' => '您的上次瀏覽時間是 %s',
	'YOU_NEW_PM' => '您的收件夾中有一封新簡訊',
	'YOU_NEW_PMS' => '您的收件夾中有數封新簡訊',
	'YOU_NO_NEW_PM' => '您的收件夾中沒有新簡訊',
	'datetime' => array(
		'TODAY' => '今天',
		'TOMORROW' => '明天',
		'YESTERDAY' => '昨天',
		'Sunday' => '星期天',
		'Monday' => '星期一',
		'Tuesday' => '星期二',
		'Wednesday' => '星期三',
		'Thursday' => '星期四',
		'Friday' => '星期五',
		'Saturday' => '星期六',
		'Sun' => '週日',
		'Mon' => '週一',
		'Tue' => '週二',
		'Wed' => '週三',
		'Thu' => '週四',
		'Fri' => '週五',
		'Sat' => '週六',
		'January' => '1月',
		'February' => '2月',
		'March' => '3月',
		'April' => '4月',
		'May' => '5月',
		'June' => '6月',
		'July' => '7月',
		'August' => '8月',
		'September' => '9月',
		'October' => '10月',
		'November' => '11月',
		'December' => '12月',
		'Jan' => '1月',
		'Feb' => '2月',
		'Mar' => '3月',
		'Apr' => '4月',
		'May_short' => '5月',
		'Jun' => '6月',
		'Jul' => '7月',
		'Aug' => '8月',
		'Sep' => '9月',
		'Oct' => '10月',
		'Nov' => '11月',
		'Dec' => '12月'
	),
	'tz' => array(
		'-12' => 'UTC - 12 小時',
		'-11' => 'UTC - 11 小時',
		'-10' => 'UTC - 10 小時',
		'-9.5' => 'UTC - 9:30 小時',
		'-9' => 'UTC - 9 小時',
		'-8' => 'UTC - 8 小時',
		'-7' => 'UTC - 7 小時',
		'-6' => 'UTC - 6 小時',
		'-5' => 'UTC - 5 小時',
		'-4' => 'UTC - 4 小時',
		'-3.5' => 'UTC - 3:30 小時',
		'-3' => 'UTC - 3 小時',
		'-2' => 'UTC - 2 小時',
		'-1' => 'UTC - 1 小時',
		'0' => 'UTC',
		'1' => 'UTC + 1 小時',
		'2' => 'UTC + 2 小時',
		'3' => 'UTC + 3 小時',
		'3.5' => 'UTC + 3:30 小時',
		'4' => 'UTC + 4 小時',
		'4.5' => 'UTC + 4:30 小時',
		'5' => 'UTC + 5 小時',
		'5.5' => 'UTC + 5:30 小時',
		'5.75' => 'UTC + 5:45 小時',
		'6' => 'UTC + 6 小時',
		'6.5' => 'UTC + 6:30 小時',
		'7' => 'UTC + 7 小時',
		'8' => 'UTC + 8 小時',
		'8.75' => 'UTC + 8:45 小時',
		'9' => 'UTC + 9 小時',
		'9.5' => 'UTC + 9:30 小時',
		'10' => 'UTC + 10 小時',
		'10.5' => 'UTC + 10:30 小時',
		'11' => 'UTC + 11 小時',
		'11.5' => 'UTC + 11:30 小時',
		'12' => 'UTC + 12 小時',
		'12.75' => 'UTC + 12:45 小時',
		'13' => 'UTC + 13 小時',
		'14' => 'UTC + 14 小時',
		'dst' => '[ <abbr title="日光節約時間">DST</abbr> ]'
	),
	'tz_zones' => array(
		'-12' => '[UTC - 12] 貝克島時間',
		'-11' => '[UTC - 11] 紐埃島[南太平洋中部]時間、薩摩亞群島[南太平洋]標準時間',
		'-10' => '[UTC - 10] 夏威夷-阿留申標準時、庫克島的時間',
		'-9.5' => '[UTC - 9:30] 馬克薩斯群島[南太平洋]時間',
		'-9' => '[UTC - 9] 阿拉斯加時間、甘島時間',
		'-8' => '[UTC - 8] 太平洋標準時間',
		'-7' => '[UTC - 7] 美國高山州標準時間',
		'-6' => '[UTC - 6] 美國中部標準時間',
		'-5' => '[UTC - 5] 美國東部標準時間',
		'-4' => '[UTC - 4] 大西洋標準時間',
		'-3.5' => '[UTC - 3:30] 紐芬蘭標準時間',
		'-3' => '[UTC - 3] 亞馬遜標準時間、中部格陵蘭時間',
		'-2' => '[UTC - 2] 費爾南多迪諾羅尼亞時間、南喬治亞島和南桑威奇島的時間',
		'-1' => '[UTC - 1] 亞述爾群島標準時間、佛得角時間、格陵蘭東部時間',
		'0' => '[UTC] 西歐時間、格林威治標準時間',
		'1' => '[UTC + 1] 中歐時間、西非時間',
		'2' => '[UTC + 2] 東歐時間、中非時間',
		'3' => '[UTC + 3] 莫斯科標準時間、東非時間',
		'3.5' => '[UTC + 3:30] 伊朗標準時間',
		'4' => '[UTC + 4] 波斯灣標準時間、薩馬拉標準時間',
		'4.5' => '[UTC + 4:30] 阿富汗時間',
		'5' => '[UTC + 5] 巴基斯坦標準時間、葉卡捷琳堡標準時間',
		'5.5' => '[UTC + 5:30] 印度標準時間, 斯里蘭卡時間',
		'5.75' => '[UTC + 5:45] 尼泊爾時間',
		'6' => '[UTC + 6] 孟加拉時間、不丹時間、諾沃西比爾斯克標準時間',
		'6.5' => '[UTC + 6:30] 可可斯群島時間, 緬甸時間',
		'7' => '[UTC + 7] 印度支那時間、克拉斯諾亞爾斯克標準時間',
		'8' => '[UTC + 8] 台灣標準時間、澳洲西部標準時間、伊爾庫次克標準時間',
		'8.75' => '[UTC + 8:45] 澳洲西部東南標準時間',
		'9' => '[UTC + 9] 日本標準時間、韓國標準時間、赤塔標準時間',
		'9.5' => '[UTC + 9:30] 澳洲中部標準時間',
		'10' => '[UTC + 10] 澳洲東部標準時間、海參崴標準時間',
		'10.5' => '[UTC + 10:30] 賀維標準時間',
		'11' => '[UTC + 11] 所羅門群島時間、馬加丹標準時間',
		'11.5' => '[UTC + 11:30] 諾福克群島時間',
		'12' => '[UTC + 12] 新西蘭時間、斐濟時間、堪察加半島標準時間',
		'12.75' => '[UTC + 12:45] 查塔姆群島[新西蘭東部]時間',
		'13' => '[UTC + 13] 湯加時間、菲尼克斯群島時間',
		'14' => '[UTC + 14] 路線島時間'
	),
	'dateformats' => array(
		'd M Y, H:i' => '01 Jan 2007, 13:37',
		'd M Y H:i' => '01 Jan 2007 13:37',
		'M jS, \'y, H:i' => 'Jan 1st, \'07, 13:37',
		'D M d, Y g:i a' => 'Mon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a' => 'January 1st, 2007, 1:37 pm',
		'|d M Y|, H:i' => 'Today, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a' => 'Today, 1:37 pm / January 1st, 2007, 1:37 pm'
	),
	'default_dateformat' => 'Y年 M月 j日 H:i'
));
?>
