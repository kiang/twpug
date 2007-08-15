<?php

if (empty($lang) || !is_array($lang))
{
        $lang = array();
}

$lang = array_merge($lang, array(
	'ADMIN_CONFIG' => '管理員設定',
	'ADMIN_PASSWORD' => '管理員密碼',
	'ADMIN_PASSWORD_CONFIRM' => '確認管理員密碼',
	'ADMIN_PASSWORD_EXPLAIN' => '（請輸入一個6到30位的密碼）',
	'ADMIN_TEST' => '檢測管理員設定',
	'ADMIN_USERNAME' => '管理員帳號',
	'ADMIN_USERNAME_EXPLAIN' => '（請輸入一個3到20位的帳號）',
	'APP_MAGICK' => 'Imagemagick 支援【附加檔案】',
	'AUTHOR_NOTES' => '作者提示<br />» %s',
	'AVAILABLE' => '可用',
	'AVAILABLE_CONVERTORS' => '可用的轉換程序',
	'BEGIN_CONVERT' => '開始轉換',
	'BLANK_PREFIX_FOUND' => '對資料庫的掃瞄顯示存在可用的無前綴資料表。',
	'BOARD_NOT_INSTALLED' => '沒有發現已安裝的phpBB',
	'BOARD_NOT_INSTALLED_EXPLAIN' => '為了進行轉換您必須預先安裝一個全新的 phpBB3。請注意新的安裝資料要和舊的資料存在同一個資料庫裡，您是否要進行【<a href="%s">全新安裝</a>】？',
	'CATEGORY' => '類別',
	'CACHE_STORE' => '快取類型',
	'CACHE_STORE_EXPLAIN' => '資料快取的實體位址，建議使用檔案系統。',
	'CAT_CONVERT' => '轉換操作',
	'CAT_INSTALL' => '全新安裝',
	'CAT_OVERVIEW' => '摘要',
	'CAT_UPDATE' => '升級',
	'CHANGE' => '改變',
	'CHECK_TABLE_PREFIX' => '請檢查您的資料表前綴後重試',
	'CLEAN_VERIFY' => '正在清理並檢驗最終結構',
	'CLEANING_USERNAMES' => '清除使用者帳號',
	'COLLIDING_CLEAN_USERNAME' => '<strong>%s</strong> 是乾淨的帳號：',
	'COLLIDING_USERNAMES_FOUND' => '在舊的討論區中發現帳號衝突，為了完成討論區轉換，請刪除或重命名這些會員，讓舊有討論區的使用者成為唯一乾淨的帳號。',
	'COLLIDING_USER' => '» 會員編號： <strong>%d</strong> 帳號： <strong>%s</strong> （發表文章數量： %d）',
	'CONFIG_CONVERT' => '正在轉換設定內容',
	'CONFIG_FILE_UNABLE_WRITE' => '寫入設定檔案失敗，建立這個檔案的其他方式如下：',
	'CONFIG_FILE_WRITTEN' => '寫入設定檔案成功，您現在可以繼續進行下一步。',
	'CONFIG_PHPBB_EMPTY' => '缺少 phpBB3 的設定參數「%s」。',
	'CONFIG_RETRY' => '重試',
	'CONTACT_EMAIL_CONFIRM' => '確認聯絡信箱',
	'CONTINUE_CONVERT' => '繼續轉換',
	'CONTINUE_CONVERT_BODY' => '檢測到曾經進行過轉換，您可以選擇進行重新轉換還是繼續上一次的轉換。',
	'CONTINUE_LAST' => '繼續上一次的狀態',
	'CONTINUE_OLD_CONVERSION' => '繼續上一次的轉換',
	'CONVERT' => '轉換',
	'CONVERT_COMPLETE' => '轉換完成',
	'CONVERT_COMPLETE_EXPLAIN' => '您已經將討論區成功轉換為 phpBB 3.0，您現在可以 <a href="../">瀏覽您的討論區</a>。在刪除安裝目錄啟用討論區之前，請先檢查設定檔案是否正確轉換。phpBB 的線上支援包括 <a href="http://www.phpbb.com/support/documentation/3.0/">各種文件</a> 和 <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">支援討論區</a>。<p>如果您需要中文的支援，不妨前往<a href="http://phpbb-tw.net/phpbb/index.php" target="_blank">竹貓星球</a>或<a href="http://twpug.net/modules/newbb/viewforum.php?forum=31" target="_blank">台灣PHP聯盟</a>！</p>',
	'CONVERT_INTRO' => '歡迎使用 phpBB 轉換系統',
	'CONVERT_INTRO_BODY' => '在這裡您可以從其它（已安裝）的討論區匯入資料，下面列出所有可用的轉換模組。如果其中沒有您想要的轉換模組，請瀏覽我們的網站，那裡可能會提供更多的轉換模組下載。',
	'CONVERT_NEW_CONVERSION' => '重新轉換',
	'CONVERT_NOT_EXIST' => '指定的轉換程式不存在。',
	'CONVERT_SETTINGS_VERIFIED' => '您輸入的資訊已經確認，要開始轉換請點選下面的按鈕。',
	'CONV_ERR_FATAL' => '嚴重轉換錯誤',
	'CONV_ERROR_ATTACH_FTP_DIR' => '原討論區允許附加檔案使用FTP上傳，請停用FTP上傳選項並確認指定了正確的上傳目錄，接著複製所有附加檔案到網站伺服器可以存取的目錄中，最後重新執行轉換程式。',
	'CONV_ERROR_CONFIG_EMPTY' => '沒有轉換所需要的設定資訊。',
	'CONV_ERROR_FORUM_ACCESS' => '無法取得討論區權限資訊。',
	'CONV_ERROR_GET_CATEGORIES' => '無法取得類別。',
	'CONV_ERROR_GET_CONFIG' => '無法取得您的討論區設定。',
	'CONV_ERROR_COULD_NOT_READ' => '無法讀寫 "%s"。',
	'CONV_ERROR_GROUP_ACCESS' => '無法取得群組權限資訊。',
	'CONV_ERROR_INCONSISTENT_GROUPS' => '在add_bots()中發現群組資料表有不一致的情形 - 如果您要手動執行，您需要新增所有指定群組。',
	'CONV_ERROR_INSERT_BOT' => '無法將機器人加入使用者資料表。',
	'CONV_ERROR_INSERT_BOTGROUP' => '無法將機器人加入機器人資料表。',
	'CONV_ERROR_INSERT_USER_GROUP' => '無法將使用者加入使用者群組資料表。',
	'CONV_ERROR_MESSAGE_PARSER' => '內容解析錯誤',
	'CONV_ERROR_NO_AVATAR_PATH' => '開發者注意：您必須指定 $convertor[\'avatar_path\'] 來使用 %s。',
	'CONV_ERROR_NO_FORUM_PATH' => '未指定相對於原始討論區的路徑。',
	'CONV_ERROR_NO_GALLERY_PATH' => '開發者注意：您必須指定 $convertor[\'avatar_gallery_path\'] 來使用 %s。',
	'CONV_ERROR_NO_GROUP' => '在 %2$s 中找不到群組 "%1$s"。',
	'CONV_ERROR_NO_RANKS_PATH' => '開發者注意：您必須指定 $convertor[\'ranks_path\'] 來使用 %s。',
	'CONV_ERROR_NO_SMILIES_PATH' => '開發者注意：您必須指定 $convertor[\'smilies_path\'] 來使用 %s。',
	'CONV_ERROR_NO_UPLOAD_DIR' => '開發者注意：您必須指定 $convertor[\'upload_path\'] 來使用 %s。',
	'CONV_ERROR_PERM_SETTING' => '無法新增/更改權限設定。',
	'CONV_ERROR_PM_COUNT' => '無法選擇站內簡訊數量。',
	'CONV_ERROR_REPLACE_CATEGORY' => '無法加入新討論區來替換舊的類別。',
	'CONV_ERROR_REPLACE_FORUM' => '無法加入新討論區來替換舊的討論區。',
	'CONV_ERROR_USER_ACCESS' => '無法取得會員權限資訊。',
	'CONV_ERROR_WRONG_GROUP' => '錯誤的群組 "%1$s" 定義於 %2$s。',
	'CONV_OPTIONS_BODY' => '這個頁面是為了設定存取來源討論區的必要資料，輸入舊有討論區的資料庫設定，轉換程式不會對下面指定的資料庫進行任何異動，只是來源討論區應該要暫時關閉來讓轉換過程順利進行。',
	'CONV_SAVED_MESSAGES' => '儲存資訊',
	'COULD_NOT_COPY' => '無法複製檔案 <strong>%1$s</strong> 到 <strong>%2$s</strong><br /><br />請檢查目標資料夾是否存在並是否可以被網頁伺服器寫入。',
	'COULD_NOT_FIND_PATH' => '無法找到您原有討論區的路徑，請檢查您的設定後再試一次。<br />» 指定的路徑是 %s。',
	'DBMS' => '資料庫類型',
	'DB_CONFIG' => '資料庫設定',
	'DB_CONNECTION' => '資料庫連接',
	'DB_ERR_INSERT' => '執行 <code>INSERT</code> 查詢時發生錯誤。',
	'DB_ERR_LAST' => '執行 <var>query_last</var>時發生錯誤。',
	'DB_ERR_QUERY_FIRST' => '執行 <var>query_first</var>時發生錯誤。',
	'DB_ERR_QUERY_FIRST_TABLE' => '執行 <var>query_first</var>時發生錯誤， %s （"%s"）。',
	'DB_ERR_SELECT' => '執行 <code>SELECT</code> 查詢時發生錯誤。',
	'DB_HOST' => '資料庫伺服器位址，或 DSN',
	'DB_HOST_EXPLAIN' => 'DSN 代表 資料來源名稱，它只適用於使用 ODBC 的環境。',
	'DB_NAME' => '資料庫名稱',
	'DB_PASSWORD' => '資料庫密碼',
	'DB_PORT' => '資料庫伺服器連接埠',
	'DB_PORT_EXPLAIN' => '除非您確定伺服器使用一個非標準連接埠，否則請保留空白。',
	'DB_USERNAME' => '資料庫帳號',
	'DB_TEST' => '測試連線',
	'DEFAULT_LANG' => '預設討論區語言',
	'DEFAULT_PREFIX_IS' => '轉換程式以指定的前綴找不到資料表，請確認您輸入待轉換討論區的正確資訊，預設的資料表前綴於 %1$s 是 <strong>%2$s</strong>。',
	'DEV_NO_TEST_FILE' => '在轉換程式中沒有指定test_file變數的值，如果您是轉換程式的使用者，您不應該看到這個錯誤， 請聯繫轉換程式的作者並回報這個錯誤。如果您是轉換程式的作者，您必須指定一個原始討論區中存在的檔案名稱稱來進行路徑的檢驗。',
	'DIRECTORIES_AND_FILES' => '設定目錄與檔案',
	'DISABLE_KEYS' => '停用關鍵字...',
	'DLL_FIREBIRD' => 'Firebird',
	'DLL_FTP' => 'FTP 支援【 安裝 】',
	'DLL_GD' => 'GD 圖形支援【 圖形確認碼 】',
	'DLL_MBSTRING' => '多位元字元支援',
	'DLL_MSSQL' => 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC' => 'MSSQL Server 2000+ 透過 ODBC',
	'DLL_MYSQL' => 'MySQL',
	'DLL_MYSQLI' => 'MySQL（使用MySQLi 外掛）',
	'DLL_ORACLE' => 'Oracle',
	'DLL_POSTGRES' => 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE' => 'SQLite',
	'DLL_XML' => 'XML 支援【 Jabber 】',
	'DLL_ZLIB' => 'zlib 壓縮支援【格式：.gz、.tar.gz、.zip 】',
	'DL_CONFIG' => '下載設定檔案',
	'DL_CONFIG_EXPLAIN' => '您應該將完整的 config.php 下載到您的個人電腦中，然後手動上傳它，覆蓋 phpBB 3.0 根目錄中已經存在的檔案。請注意以 ASCII 格式上傳（如果您不確定如何辦到，請閱讀您的FTP軟體文件）。上傳完成之後，請點選 「完成」 以進行下一步。',
	'DL_DOWNLOAD' => '下載',
	'DONE' => '完成',
	'ENABLE_KEYS' => '重新啟用關鍵字，這需要一點時間。',
	'FILES_OPTIONAL' => '選擇性的檔案與目錄',
	'FILES_OPTIONAL_EXPLAIN' => '<strong>選擇性的</strong> - 這些檔案、目錄及權限不是必需的。如果它們不存在或無法寫入，安裝程序將會嘗試使用一些技術手法來建立它們；但如果存在，將會使程式執行速度快一些。',
	'FILES_REQUIRED' => '檔案與目錄',
	'FILES_REQUIRED_EXPLAIN' => '<strong>必需的</strong> - 為了正常運行，phpBB需要針對特定檔案或目錄的寫入權限。如果下面出現「不存在」，您就需要建立正確的檔案或目錄；如果出現「無法寫入」，您就需要改變正確的檔案或目錄的權限來允許phpBB對其進行寫入操作。',
	'FILLING_TABLE' => '正在填寫資料表：<strong>%s</strong>',
	'FILLING_TABLES' => '正在填寫資料表',
	'FINAL_STEP' => '正在執行最後一步',
	'FORUM_ADDRESS' => '討論區位址',
	'FORUM_ADDRESS_EXPLAIN' => '這是指向您的討論區根目錄的超連結位址，例如：<samp>http://www.example.com/phpBB2/</samp>。如果您填入了一個位址，所有在信件、簡訊及簽名檔中與前面範例相同的位址都將被替換為新的討論區位址。',
	'FORUM_PATH' => '討論區路徑',
	'FORUM_PATH_EXPLAIN' => '這是在硬碟上對應與您<strong>現在的phpBB根目錄</strong>的原討論區 <strong>相對</strong> 路徑',
	'FOUND' => '找到',
	'FTP_CONFIG' => '通過 FTP 傳輸設定',
	'FTP_CONFIG_EXPLAIN' => 'phpBB已經在伺服器上檢測到 FTP 模組，您可以嘗試通過它安裝您的 config.php。您將需要提供以下資訊，請注意帳號和密碼是用來登入伺服器的（如果您不確定是什麼，聯繫您的服務供應商）！',
	'FTP_PATH' => 'FTP 路徑',
	'FTP_PATH_EXPLAIN' => '這是從FTP根目錄至phpBB目錄的相對路徑，例如：htdocs/phpBB3/',
	'FTP_UPLOAD' => '上傳',
	'GPL' => 'General Public License(GPL協議)',
	'INITIAL_CONFIG' => '基本設定',
	'INITIAL_CONFIG_EXPLAIN' => '安裝程序認為您的伺服器可以運行phpBB，您需要提供一些具體資訊。如果您不知道如何連接您的資料庫，請首先考慮聯繫您的服務供應商，或是瀏覽phpBB支援討論區。在繼續下一步之前，請仔細檢查您輸入的資訊。',
	'INSTALL_CONGRATS' => '恭喜！',
	'INSTALL_CONGRATS_EXPLAIN' => '		<p>您已經成功安裝 phpBB %1$s，從這裡，您有兩個選項可以設定您新安裝的 phpBB3：</p> 		<h2>轉換一個已經存在的討論區到 phpBB3</h2> 		<p>phpBB 轉換程式支援從 phpBB 2.0.x 和其他討論區軟體到 phpBB3 的轉換，如果您有一個舊的討論區需要轉換，請 <a href="%2$s">執行轉換程序</a>。</p> 		<h2>開始使用您的 phpBB3！</h2> 		<p>點選下面的連結將引導您到管理介面（ACP），花一些時間檢查設定選項是否可用，可以參考線上說明文件， 包括 <a href="http://www.phpbb.com/support/documentation/3.0/" target="_blank">官方說明文件</a> 和 <a href="http://www.phpbb.com/community/viewforum.php?f=46" target="_blank">官方技術支援討論區</a>，使用中文的朋友可以前往<a href="http://phpbb-tw.net/" target="_blank">竹貓星球</a>或<a href="http://twpug.net/" target="_blank">台灣PHP聯盟</a>討論相關問題，檢視 <a href="%3$s" target="_blank">README</a> 以得到更多的資訊。</p><p><strong>請在使用討論區前刪除、移動或重命名install資料夾，如果這個資料夾存在，只能夠進入管理介面</strong></p>',
	'INSTALL_INTRO' => '歡迎安裝',
	'INSTALL_INTRO_BODY' => '使用這個選項，應該可以在您的伺服器上安裝 phpBB。</p><p>繼續安裝之前，您需要知道您的資料庫設定；如果您不清楚這些，請聯繫您的網頁空間供應商，沒有這些資訊安裝將不能繼續。您需要：</p>  	<ul> 		<li>資料庫類型 - 您將使用的資料庫</li> 		<li>資料庫伺服器主機名稱或 DSN - 資料庫伺服器位址</li> 		<li>資料庫伺服器連接埠 - 資料庫伺服器連接埠 (一般情況下不需要輸入).</li> 		<li>資料庫名稱 - 資料庫伺服器上的資料庫名稱</li> 		<li>帳號和密碼 - 用於登入並瀏覽上述資料庫的會員資料</li> 	</ul>  	<p><strong>注意：</strong> 如果您使用 SQLite，您應該在DSN框中輸入資料庫的完整路徑並保持帳號和密碼空白；為了安全的原因，您應該確保資料庫檔案不會存放在一個可以被公開存取的資料夾下。</p>  	<p>phpBB3 支援以下的資料庫：</p> 	<ul> 		<li>MySQL 3.23 或更高 (支援MySQLi)</li> 		<li>PostgreSQL 7.3+</li> 		<li>SQLite 2.8.2+</li> 		<li>Firebird 2.0+</li> 		<li>MS SQL Server 2000 或更高 (直接瀏覽或通過 ODBC)</li> 		<li>Oracle</li> 	</ul> 	 	<p>只有您的伺服器支援的資料庫才會被顯示。',
	'INSTALL_INTRO_NEXT' => '要開始安裝，點選下面的按鈕。',
	'INSTALL_LOGIN' => '登入討論區',
	'INSTALL_NEXT' => '下一步',
	'INSTALL_NEXT_FAIL' => '某些檢測未能通過，您應該在進行下一步之前修正這些問題，不然可能會導致安裝無法完成。',
	'INSTALL_NEXT_PASS' => '全部的基礎檢測都已經通過，您可以進行下一步了。如果您改變了一些設定比如權限、模組等等，您可以選擇重新檢測。',
	'INSTALL_PANEL' => '安裝程式',
	'INSTALL_SEND_CONFIG' => '很不幸，phpBB沒能將設定資訊直接寫入您的 config.php 檔案。這可能是由於此檔案不存在或無法寫入。下面將提供一些選項幫助您完成設定 config.php。',
	'INSTALL_START' => '開始安裝',
	'INSTALL_TEST' => '重新檢測',
	'INST_ERR' => '安裝過程出錯',
	'INST_ERR_DB_CONNECT' => '連接資料庫失敗，錯誤資訊以下。',
	'INST_ERR_DB_FORUM_PATH' => '指定的資料庫檔案位於討論區目錄內，您應該把它放在一個無法通過網路瀏覽的位置。',
	'INST_ERR_DB_NO_ERROR' => '沒有得到正確的錯誤資訊。',
	'INST_ERR_DB_NO_MYSQLI' => '伺服器內安裝的 MySQL 版本與您選擇的 「MySQL with MySQLi Extension」 選項不相容，請嘗試 「MySQL」 選項。',
	'INST_ERR_DB_NO_SQLITE' => '您安裝的 SQLite 版本太古老，請至少升級到 2.8.2 版。',
	'INST_ERR_DB_NO_ORACLE' => '伺服器內安裝的 Oracle 版本需要您將參數 <var>NLS_CHARACTERSET</var> 設定為 <var>UTF8</var>。請設定此參數，或將 Oracle 至少升級到 9.2 版。',
	'INST_ERR_DB_NO_FIREBIRD' => '您安裝的 Firebird 版本太古老，請至少升級到 2.0 版。',
	'INST_ERR_DB_NO_FIREBIRD_PS' => '您選擇的 Firebird 資料庫頁面容量小於 8192，它至少必須為 8192。',
	'INST_ERR_DB_NO_POSTGRES' => '您選擇的資料庫不是 <var>UNICODE</var> 或 <var>UTF8</var> 編碼，請使用 <var>UNICODE</var> 或 <var>UTF8</var> 編碼的資料庫。',
	'INST_ERR_DB_NO_NAME' => '沒有指定資料庫名稱。',
	'INST_ERR_EMAIL_INVALID' => '您輸入的信箱有誤。',
	'INST_ERR_EMAIL_MISMATCH' => '您輸入的兩個信箱比對有問題。',
	'INST_ERR_FATAL' => '安裝過程出現嚴重錯誤',
	'INST_ERR_FATAL_DB' => '資料庫出現了一個嚴重且無法恢復的錯誤。這可能是由於您指定的會員沒有 <code>CREATE TABLES</code> 或 <code>INSERT</code> 的權限等等，下面可能會提供進一步的資訊。請首先考慮聯繫您的服務供應商，或是瀏覽phpBB支援討論區，以得到進一步幫助。',
	'INST_ERR_FTP_PATH' => '無法轉換到指定目錄，請檢查路徑資訊。',
	'INST_ERR_FTP_LOGIN' => '無法登入 FTP 伺服器，請檢查帳號和密碼。',
	'INST_ERR_MISSING_DATA' => '您必須完成此表單的全部欄位。',
	'INST_ERR_NO_DB' => '無法找到指定資料庫類型的 PHP 模組',
	'INST_ERR_PASSWORD_MISMATCH' => '您輸入的兩個密碼不同。',
	'INST_ERR_PASSWORD_TOO_LONG' => '您輸入的密碼過長，請輸入最多30個字元。',
	'INST_ERR_PASSWORD_TOO_SHORT' => '您輸入的密碼太短，請輸入最少6個字元。',
	'INST_ERR_PREFIX' => '已經存在使用指定前綴的資料表，請指定另一個。',
	'INST_ERR_PREFIX_INVALID' => '您指定的資料表前綴無效，請嘗試另一個，去掉像是連字號之類的字元。',
	'INST_ERR_PREFIX_TOO_LONG' => '您指定的資料表前綴過長，上限為 %d 個字元。',
	'INST_ERR_USER_TOO_LONG' => '您輸入的帳號過長，請輸入最多20個字元。',
	'INST_ERR_USER_TOO_SHORT' => '您輸入的帳號太短，請輸入最少3個字元。',
	'INVALID_PRIMARY_KEY' => '無效的主鍵：%s',
	'LONG_SCRIPT_EXECUTION' => '這個操作可能需要一點時間，請不要中止程式執行。',
	'MBSTRING_CHECK' => '<samp>mbstring</samp> 外掛檢測',
	'MBSTRING_CHECK_EXPLAIN' => '<samp>mbstring</samp> 是一個 PHP 外掛，它提供多位元字串處理功能。某些 mbstring 的功能與phpBB不相容，因此必須被停用。',
	'MBSTRING_FUNC_OVERLOAD' => '函式覆載',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN' => '<var>mbstring.func_overload</var> 必須被設定為 0 或 4。',
	'MBSTRING_ENCODING_TRANSLATION' => '字元編碼',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var> 必須被設定為 0。',
	'MBSTRING_HTTP_INPUT' => 'HTTP 輸入字元轉換',
	'MBSTRING_HTTP_INPUT_EXPLAIN' => '<var>mbstring.http_input</var> 必須被設定為 <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT' => 'HTTP 輸出字元轉換',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN' => '<var>mbstring.http_output</var> 必須被設定為 <samp>pass</samp>',
	'MAKE_FOLDER_WRITABLE' => '請首先確保此資料夾存在並且可以被網路伺服器寫入，然後重試：<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE' => '請首先確保這些資料夾存在並且可以被網路伺服器寫入，然後重試：<br />»<strong>%s</strong>',
	'NAMING_CONFLICT' => '命名衝突：%s 與 %s 都是別名<br /><br />%s',
	'NEXT_STEP' => '繼續進行下一步',
	'NOT_FOUND' => '不存在',
	'NOT_UNDERSTAND' => '無法理解 %s #%d，資料表 %s ("%s")',
	'NO_CONVERTORS' => '沒有可用的轉換程序',
	'NO_CONVERT_SPECIFIED' => '沒有指定轉換程序',
	'NO_LOCATION' => '無法確定位置。如果您確定 Imagemagick 已經安裝，請於討論區安裝完成之後，在管理員控制面板中指定它的位置。',
	'NO_TABLES_FOUND' => '沒有找到任何資料表。',
	'OVERVIEW_BODY' => '歡迎使用繼 2.0.x 後下一代的 phpBB 候選版本，也就是 phpBB 3.0！這個版本的發佈是為了得到更廣泛的使用，藉此協助我們找出最新的問題與可能產生問題的地方。</p><p>請參考 <a href="../docs/INSTALL.html">安裝手冊</a> 來取得更多的安裝資訊。</p><p><strong style="text-transform: uppercase;">注意：</strong> 這個版本<strong style="text-transform: uppercase;">還不是正式版本</strong>，您也許想要等最新正式版本的推出才來運用在正式網站。</p><p>這個安裝系統將引導您完成安裝phpBB、升級 phpBB 或者轉換其他程式資料到 phpBB 的過程，每個選項進一步資訊，可以參考上面選單。',
	'PCRE_UTF_SUPPORT' => 'PCRE UTF-8 支援',
	'PCRE_UTF_SUPPORT_EXPLAIN' => '如果PHP的PCRE外掛不支援UTF-8，phpBB 將 <strong>無法</strong> 運行。',
	'PHP_GETIMAGESIZE_SUPPORT' => 'PHP 函數 getimagesize() 可用',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN' => '<strong>必須的</strong> - 為了讓phpBB正常工作，需要啟用 getimagesize 函數。',
	'PHP_OPTIONAL_MODULE' => '選擇性模組',
	'PHP_OPTIONAL_MODULE_EXPLAIN' => '<strong>選擇性</strong> - 這些模組或程序不是必需的。但如果它們可用，您將可以使用附加功能。',
	'PHP_SUPPORTED_DB' => '支援的資料庫',
	'PHP_SUPPORTED_DB_EXPLAIN' => '<strong>必需的</strong> - 您必須為PHP提供至少一個相容的資料庫。如果下面沒有可用的資料庫模組，您應該聯繫服務供應商，或者查閱相關的PHP安裝文件。',
	'PHP_REGISTER_GLOBALS' => 'PHP 設定 <var>register_globals</var> 已停用',
	'PHP_REGISTER_GLOBALS_EXPLAIN' => '如果此設定被允許，phpBB仍然會運行。但出於安全考慮，如果條件允許，建議您將 register_globals 停用。',
	'PHP_SAFE_MODE' => '安全模式',
	'PHP_SETTINGS' => 'PHP 版本和設定',
	'PHP_SETTINGS_EXPLAIN' => '<strong>必需的</strong> - 要安裝phpBB，您必需正在運行最低 4.3.3 版本的PHP。如果下面出現 <var>safe mode</var>，您的PHP正在運行於安全模式，這將給遠端管理及類似功能帶來限制。',
	'PHP_URL_FOPEN_SUPPORT' => 'PHP 設定 <var>allow_url_fopen</var> 為啟用狀態',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN' => '<strong>選擇性</strong> - 這個設定是選擇性的，不過某些phpBB的功能，例如外部圖示可能會因為沒有這個功能而無法正常運作。 ',
	'PHP_VERSION_REQD' => 'PHP 版本 >= 4.3.3',
	'POST_ID' => '文章 ID',
	'PREFIX_FOUND' => '對資料表的掃瞄找到一組資料表正在使用 <strong>%s</strong> 作為前綴。',
	'PREPROCESS_STEP' => '正在執行轉換準備操作',
	'PRE_CONVERT_COMPLETE' => '全部的轉換準備步驟都已被成功完成，您現在可以開始進行實際的轉換操作。請注意，您也許需要手動調整部份項目，在轉換過後，特別要檢查設定的權限、必要時重建搜尋索引以及確認檔案確實複製，像是人物與表情圖示。',
	'PROCESS_LAST' => '正在執行最後的指令',
	'REFRESH_PAGE' => '更新頁面以繼續轉換',
	'REFRESH_PAGE_EXPLAIN' => '如果設定為「是」，轉換程序將會在完成每一步之後更新頁面，然後繼續。如果這是您為了測試目的而進行的第一次轉換，我們建議您將此設定為「否」。',
	'REQUIREMENTS_TITLE' => '伺服器相容性',
	'REQUIREMENTS_EXPLAIN' => '在完整安裝之前，phpBB 需要對您的伺服器設定及所需檔案進行檢測，以確定您是否可以安裝和運行phpBB。請仔細瀏覽以下結果，並在繼續進行之前確保所有必需的檢測都已通過。如果您希望使用任何基於非必需檢測的功能，請同時確保相關檢測已通過。',
	'RETRY_WRITE' => '重新嘗試寫入設定',
	'RETRY_WRITE_EXPLAIN' => '如果您想允許phpBB寫入config.php，您可以改變它的權限，然後點選下面的【重試】按鈕。請記得在安裝完成之後恢復 config.php 的正確權限。',
	'SCRIPT_PATH' => '程式路徑',
	'SCRIPT_PATH_EXPLAIN' => 'phpBB 根目錄與域名指向目錄的相對路徑，例如：<samp>/phpBB3</samp>',
	'SELECT_LANG' => '選擇語言',
	'SERVER_CONFIG' => '伺服器設定',
	'SEARCH_INDEX_UNCONVERTED' => '搜尋索引沒有轉換',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN' => '您的舊搜尋索引沒有轉換，搜尋將一直傳回空白的結果；要建立一個新索引，請到管理介面選擇維護，然後從子選單中選擇搜尋索引。',
	'SOFTWARE' => '討論區軟體',
	'SPECIFY_OPTIONS' => '設定轉換選項',
	'STAGE_ADMINISTRATOR' => '管理員資訊',
	'STAGE_ADVANCED' => '進階設定',
	'STAGE_ADVANCED_EXPLAIN' => '只有您確定需要一些非預設設定時，您才有必要更改此頁的內容。如果您不確定，請繼續至下一頁，因為這些設定可以隨時在管理介面中更改。',
	'STAGE_CONFIG_FILE' => '設定檔案',
	'STAGE_CREATE_TABLE' => '建立資料表',
	'STAGE_CREATE_TABLE_EXPLAIN' => 'phpBB 3.0 所使用的資料表已經被建立並被填入一些初始資料，請繼續至下一步以完成安裝。',
	'STAGE_DATABASE' => '資料庫設定',
	'STAGE_FINAL' => '最後一步',
	'STAGE_INTRO' => '簡介',
	'STAGE_IN_PROGRESS' => '進行轉換中',
	'STAGE_REQUIREMENTS' => '需求',
	'STAGE_SETTINGS' => '設定',
	'STARTING_CONVERT' => '開始轉換操作',
	'STEP_PERCENT_COMPLETED' => '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'SUB_INTRO' => '簡介',
	'SUB_LICENSE' => '授權方式',
	'SUB_SUPPORT' => '支援',
	'SUCCESSFUL_CONNECT' => '連接成功',
	'SUPPORT_BODY' => '在測試階段，<a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB 3.0 測試支援討論區</a> 提供有限的技術支援，我們將回答一般的安裝設定問題，以及和程式錯誤相關的一般問題，不提供外掛、自訂程式碼/風格和任何實際應用的支援。</p><p>需要更多的協助，請瀏覽 <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">如何快速開始</a>。</p><p>如果希望即時取得最新的新聞和版本，請 <a href="http://www.phpbb.com/support/">加入我們的通信論壇</a>。',
	'SYNC_FORUMS' => '開始同步討論區',
	'SYNC_POST_COUNT' => '同步討論區文章數量中',
	'SYNC_POST_COUNT_ID' => '同步討論區文章數量中，從 <var>資料</var> %1$s 到 %2$s',
	'SYNC_TOPICS' => '開始同步主題',
	'SYNC_TOPIC_ID' => '同步主題中，從 <var>主題編號</var> %1$s 到 %2$s',
	'TABLES_MISSING' => '無法找到這些資料表<br />» <strong>%s</strong>',
	'TABLE_PREFIX' => '資料表前綴',
	'TABLE_PREFIX_SAME' => '資料表前綴需要與轉換之前所使用的相同。<br />»  之前所使用的資料表前綴是 %s。',
	'TESTS_PASSED' => '檢測通過',
	'TESTS_FAILED' => '檢測失敗',
	'UNABLE_WRITE_LOCK' => '無法寫入鎖定的檔案。',
	'UNAVAILABLE' => '無法使用',
	'UNWRITABLE' => '無法寫入',
	'UPDATE_TOPICS_POSTED' => '正在產生已主題資訊',
	'UPDATE_TOPICS_POSTED_ERR' => '產生已主題資訊時發生錯誤，您可以在轉換結束後從管理介面重新執行這個步驟。',
	'VERSION' => '版本',
	'WELCOME_INSTALL' => '歡迎使用 phpBB 3',
	'WRITABLE' => '可寫入',
	'ALL_FILES_UP_TO_DATE' => '所有的檔案都已經升級到最新版本。現在您應該 <a href="../ucp.php?mode=login">登入到討論區</a> 並檢查系統是否正常工作。不要忘記刪除或者重命名（移動）install安裝目錄！',
	'ARCHIVE_FILE' => '在資料夾中的原始檔案',
	'BACK' => '上一步',
	'BINARY_FILE' => '可執行檔',
	'BOT' => '爬蟲/機器人',
	'CHANGE_CLEAN_NAMES' => '確認帳號沒有被多個會員使用的方法已經改變，新的方法發現有一些使用者使用了同樣的名稱，您必須刪除或是修改這些使用者的名稱來確認一個使用者只對應一個使用者名稱，接著才能進行下一步。',
	'CHECK_FILES' => '檢查檔案',
	'CHECK_FILES_AGAIN' => '再次檢查檔案',
	'CHECK_FILES_EXPLAIN' => '在下一個步驟中，要更新的檔案都將被檢查 - 如果這是第一次檔案檢查，將花費一點時間。',
	'CHECK_FILES_UP_TO_DATE' => '資料庫的版本已經是最新，您也許想要執行一次檔案檢查來確認所有的檔案都是 phpBB 的最新版本。',
	'CHECK_UPDATE_DATABASE' => '繼續升級過程',
	'COLLECTED_INFORMATION' => '收集到的檔案資訊',
	'COLLECTED_INFORMATION_EXPLAIN' => '下面列表顯示了需要更新的檔案資訊，請閱讀每個狀態前的資訊，確認他們的意義以及您在升級程序中可能需要執行的步驟。',
	'COMPLETE_LOGIN_TO_BOARD' => '現在您應該可以 <a href="../ucp.php?mode=login">登入討論區</a> 並檢查系統是否正常運作，不要忘記刪除或重新命名、移動 install 目錄！',
	'CONTINUE_UPDATE_NOW' => '現在繼續升級過程',
	'CURRENT_FILE' => '目前來源檔案',
	'CURRENT_VERSION' => '目前版本',
	'DATABASE_TYPE' => '資料庫類型',
	'DATABASE_UPDATE_INFO_OLD' => '在安裝目錄中的資料庫升級檔案是舊的，請確認上傳正確版本的檔案。',
	'DELETE_USER_REMOVE' => '刪除使用者與文章',
	'DELETE_USER_RETAIN' => '刪除使用者但保留文章',
	'DESTINATION' => '目標檔案',
	'DIFF_INLINE' => '文中',
	'DIFF_RAW' => '原始標準比對',
	'DIFF_SEP_EXPLAIN' => '目前檔案結束 / 新檔案的開始',
	'DIFF_SIDE_BY_SIDE' => '對齊',
	'DIFF_UNIFIED' => '標準比對',
	'DO_NOT_UPDATE' => '不要升級這個檔案',
	'DOWNLOAD' => '下載',
	'DOWNLOAD_AS' => '下載為',
	'DOWNLOAD_UPDATE_METHOD' => '下載已修改的文件',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN' => '下載後您應該解壓縮檔案，您會在解壓縮的檔案中找到要上傳到 phpBB 根目錄的異動檔案，請上傳檔案到個別的位置。當您完成所有檔案的上傳後，請透過下面的其他按鈕做檢查。',
	'ERROR' => '錯誤',
	'EDIT_USERNAME' => '編輯帳號',
	'FILE_ALREADY_UP_TO_DATE' => '檔案已經是最新。',
	'FILE_DIFF_NOT_ALLOWED' => '檔案不允許被比對。',
	'FILE_USED' => '資訊來自於',
	'FILES_CONFLICT' => '有衝突的檔案',
	'FILES_CONFLICT_EXPLAIN' => '下面的檔案已經修改過，不是舊版本的原始檔案，程式判斷合併這些檔案會產生衝突，請檢查衝突並嘗試手動的解決，或是選擇一種合併的方式繼續更新。如果您手動解決了衝突情況，請再次執行檔案檢查。您也可以為每個檔案選擇恰當的合併方式，第一個方式會遺失舊有檔案中產生衝突的內容，另一個方式會造成新檔案中異動過的內容遺失。',
	'FILES_MODIFIED' => '修改的檔案',
	'FILES_MODIFIED_EXPLAIN' => '下面的檔案已經修改，不是舊版本的原始檔案，更新檔案將合併您修改過的檔案與新檔案。',
	'FILES_NEW' => '新檔案',
	'FILES_NEW_EXPLAIN' => '下面的檔案目前不存在。',
	'FILES_NEW_CONFLICT' => '新的衝突檔案',
	'FILES_NEW_CONFLICT_EXPLAIN' => '下面的檔案比最新版本還新，而在同樣的位置程式有發現名稱相同的檔案，這個檔案將會由新檔案取代。',
	'FILES_NOT_MODIFIED' => '未修改的檔案',
	'FILES_NOT_MODIFIED_EXPLAIN' => '下面的檔案沒有被修改過，表示是舊有 phpBB 版本的檔案。',
	'FILES_UP_TO_DATE' => '已經升級的檔案',
	'FILES_UP_TO_DATE_EXPLAIN' => '以下的檔案已經是最新的，不需要升級。',
	'FTP_SETTINGS' => 'FTP 設定',
	'FTP_UPDATE_METHOD' => 'FTP 上傳',
	'INCOMPATIBLE_UPDATE_FILES' => '找到的升級檔案不適用於您的版本，您安裝的版本是 %1$s ，而升級檔案是用於升級 phpBB %2$s 到 %3$s。',
	'INCOMPLETE_UPDATE_FILES' => '升級檔案不完整。',
	'INLINE_UPDATE_SUCCESSFUL' => '資料庫升級成功，現在您需要繼續升級過程。',
	'KEEP_OLD_NAME' => '保留帳號',
	'LATEST_VERSION' => '最新版本',
	'LINE' => '行',
	'LINE_ADDED' => '新增',
	'LINE_MODIFIED' => '修改',
	'LINE_REMOVED' => '移除',
	'LINE_UNMODIFIED' => '未修改',
	'LOGIN_UPDATE_EXPLAIN' => '必須先登入才能升級您的討論區。',
	'MAPPING_FILE_STRUCTURE' => '為了方便上傳，這裡有舊有 phpBB 檔案位置的對應表。',
	'MERGE_MODIFICATIONS_OPTION' => '合併異動',
	'MERGE_NO_MERGE_NEW_OPTION' => '不要合併 - 使用新檔案',
	'MERGE_NO_MERGE_MOD_OPTION' => '不要合併 - 使用目前安裝的檔案',
	'MERGE_MOD_FILE_OPTION' => '合併不同之處並使用修改過的程式碼替代衝突程式碼',
	'MERGE_NEW_FILE_OPTION' => '合併不同之處並使用新檔案的程式碼替代衝突程式碼',
	'MERGE_SELECT_ERROR' => '沒有正確選擇衝突檔案合併方式。',
	'NEW_FILE' => '新升級的檔案',
	'NEW_USERNAME' => '新帳號',
	'NO_AUTH_UPDATE' => '無權進行升級',
	'NO_ERRORS' => '沒有錯誤',
	'NO_UPDATE_FILES' => '未升級以下檔案',
	'NO_UPDATE_FILES_EXPLAIN' => '下面的檔案有新版本或修改過的版本，但是在您的網站中沒有存放在一般會存放的位置。如果列表中包含除了 language/ 或 styles/ 目錄以外的檔案，可能您曾經修改過目錄結構，而升級程序也許無法完成。',
	'NO_UPDATE_FILES_OUTDATED' => '沒有發現正確的升級目錄，請確認上傳了相關的檔案。<br /><br />您安裝的版本似乎 <strong>不是</strong> 最新版本。版本 %1$s 的 phpBB 更新程式已經推出，請瀏覽 <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> 來取得正確的程式進行版本 %2$s 到版本 %3$s 升級程式。',
	'NO_UPDATE_FILES_UP_TO_DATE' => '您的版本已經是最新，沒有必要執行升級程式；如果您希望執行完整的檔案檢查，請確認您上傳了正確的升級程式。',
	'NO_UPDATE_INFO' => '無法找到升級資訊。',
	'NO_UPDATES_REQUIRED' => '不需要升級',
	'NO_VISIBLE_CHANGES' => '沒有可用的異動',
	'NOTICE' => '注意',
	'NUM_CONFLICTS' => '衝突的數量',
	'OLD_UPDATE_FILES' => '升級程式已經過期，找到的升級程式適用於 phpBB %1$s 到 phpBB %2$s 的升級，但是最新的 phpBB 版本是 %3$s。',
	'PACKAGE_UPDATES_TO' => '目前安裝包更新到版本',
	'PERFORM_DATABASE_UPDATE' => '進行資料庫升級',
	'PERFORM_DATABASE_UPDATE_EXPLAIN' => '在下面您可以發現一個資料庫升級程式的連結，這個程式需要執行一點時間，所以即使很長一段時間沒有回應也請不要中斷執行。在資料庫升級完成後，只要跟著顯示的連結繼續升級步驟即可。',
	'PREVIOUS_VERSION' => '上一個版本',
	'PROGRESS' => '進度',
	'RESULT' => '結果',
	'RUN_DATABASE_SCRIPT' => '現在升級我的資料庫',
	'SELECT_DIFF_MODE' => '選擇比對模式',
	'SELECT_DOWNLOAD_FORMAT' => '選擇下載檔案壓縮格式',
	'SELECT_FTP_SETTINGS' => '選擇 FTP 設定',
	'SHOW_DIFF_CONFLICT' => '顯示差異/衝突',
	'SHOW_DIFF_FINAL' => '顯示結果檔案',
	'SHOW_DIFF_MODIFIED' => '顯示合併的差異',
	'SHOW_DIFF_NEW' => '顯示檔案內容',
	'SHOW_DIFF_NEW_CONFLICT' => '顯示有衝突的差異',
	'SHOW_DIFF_NOT_MODIFIED' => '顯示差異',
	'SOME_QUERIES_FAILED' => '部分查詢失敗，錯誤與說明資訊如下。',
	'SQL' => 'SQL',
	'SQL_FAILURE_EXPLAIN' => '別擔心，升級程式會繼續，修正這個問題的方式可以從我們的支援討論區尋求協助，請參考 <a href="../docs/README.html">README</a> 瞭解如何取得更多建議。',
	'STAGE_FILE_CHECK' => '檢查檔案',
	'STAGE_UPDATE_DB' => '升級資料庫',
	'STAGE_UPDATE_FILES' => '升級檔案',
	'STAGE_VERSION_CHECK' => '版本檢查',
	'STATUS_CONFLICT' => '修改的檔案產生衝突',
	'STATUS_MODIFIED' => '已修改的檔案',
	'STATUS_NEW' => '新檔案',
	'STATUS_NEW_CONFLICT' => '有衝突的新檔案',
	'STATUS_NOT_MODIFIED' => '未修改的檔案',
	'STATUS_UP_TO_DATE' => '已升級的檔案',
	'UPDATE_COMPLETED' => '升級完成',
	'UPDATE_DATABASE' => '升級資料庫',
	'UPDATE_DATABASE_EXPLAIN' => '下一個步驟將更新資料庫。',
	'UPDATE_DATABASE_SCHEMA' => '升級資料庫結構',
	'UPDATE_FILES' => '升級檔案',
	'UPDATE_FILES_NOTICE' => '請確認您已經升級了討論區檔案，這個檔案只用來升級您的資料庫。',
	'UPDATE_INSTALLATION' => '升級 phpBB',
	'UPDATE_INSTALLATION_EXPLAIN' => '透過這個選項，您的 phpBB 將升級到最新版本。<br />過程中會檢查所有檔案的正確性，讓您可以在升級之前確認所有檔案與差異。<br /><br />檔案升級可以透過兩個不同的方式。</p><h2>手動升級</h2><p>透過這個方式，您只需要下載本身異動檔案的集合，藉此避免遺失自己曾經修改過的部份。下載這個集合後您需要自己上傳檔案到正確的位置，完成後可以再次執行檔案檢查步驟來確認檔案是否放在正確的位置。</p><h2>透過 FTP 自動升級</h2><p>這個方法與第一個差不多，但是不需要自行下載與上傳異動的檔案，程式會自動幫您完成。要使用這個方式，您需要知道自己網站的 FTP 登入資訊，完成後程式會引導您再次進行檔案檢查來確認升級程序確實完成。<br /><br />',
	'UPDATE_INSTRUCTIONS' => '<h1>新版本消息</h1> <p>在升級程式前，請閱讀<a href="%1$s" title="%1$s">最新版本消息</a> ，它包含很多有用的資訊，它也包含完整的下載連結與異動記錄。</p> <br /> <h1>如何透過自動升級程式升級您的討論區</h1><p>在這裡建議的升級方式只適用於自動升級程式，您也可以透過 INSTALL.html 文件中提到的方式升級。自動升級 phpBB3 的步驟為：</p> <ul style="margin-left: 20px; font-size: 1.1em;"> <li>到 <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com 下載區</a> 下載"Automatic Update Package" 壓縮檔。<br /><br /></li> <li>解壓縮檔案。<br /><br /></li> <li>上傳解壓縮的資料夾到 phpBB 根目錄下（存放 config.php 檔案的位置）。<br /><br /></li> </ul> <p>上傳後一般使用者將無法存取您的討論區，因為您上傳了一個安裝目錄。<br /><br /> <strong><a href="%2$s" title="%2$s">接著用瀏覽器開啟安裝目錄開始升級步驟</a>.</strong><br /> <br /> 升級程式會引導您進行升級步驟，完成後會發出通知給您。</p>',
	'UPDATE_INSTRUCTIONS_INCOMPLETE' => '<h1>發現失敗的升級過程</h1> <p>phpBB 發現一個未完成的自動升級程序，請確認您按照自動升級工具的引導進行；下面可以再次找到連結，或是直接到您的安裝目錄。</p>',
	'UPDATE_METHOD' => '升級方式',
	'UPDATE_METHOD_EXPLAIN' => '您可以選擇合適的上傳方式，使用 FTP 上傳需要提供 FTP 帳號的詳細資訊；使用這種方法檔案將自動移動到新位置，舊檔案的備份會在檔案名稱後面附加 .bak 副檔名。如果您選擇下載異動檔案，您可以接著手動解壓縮與上傳他們到正確的位置。',
	'UPDATE_REQUIRES_FILE' => '更新程式需要下面檔案： %s',
	'UPDATE_SUCCESS' => '升級完成',
	'UPDATE_SUCCESS_EXPLAIN' => '成功升級所有檔案，下一步將再次檢查所有檔案以確保檔案升級成功。',
	'UPDATE_VERSION_OPTIMIZE' => '升級版本並且最佳化資料表',
	'UPDATING_DATA' => '升級資料',
	'UPDATING_TO_LATEST_STABLE' => '更新資料庫到最新穩定版本',
	'UPDATED_VERSION' => '升級的版本',
	'UPLOAD_METHOD' => '上傳方式',
	'UPDATE_DB_SUCCESS' => '資料庫升級成功。',
	'USER_ACTIVE' => '啟用的使用者',
	'USER_INACTIVE' => '停用的使用者',
	'VERSION_CHECK' => '版本檢查',
	'VERSION_CHECK_EXPLAIN' => '檢查您目前安裝的討論區是否為最新版本。',
	'VERSION_NOT_UP_TO_DATE' => '您的討論區版本不是最新的，請繼續升級步驟。',
	'VERSION_NOT_UP_TO_DATE_ACP' => '您的討論區版本不是最新的。<br />在下面您可以找到最新版本的推出消息與進行升級的步驟說明。',
	'VERSION_UP_TO_DATE' => '您的版本是最新的，沒有可用的升級程式，您也許想進行一次討論區檔案正確性檢驗。',
	'VERSION_UP_TO_DATE_ACP' => '您的版本是最新的，沒有可用的升級程式，您不需要升級這個討論區。',
	'VIEWING_FILE_CONTENTS' => '檢視檔案內容',
	'VIEWING_FILE_DIFF' => '檢視檔案差異',
	'WRONG_INFO_FILE_FORMAT' => '錯誤的資訊檔案格式',
	'CONFIG_BOARD_EMAIL_SIG' => '管理團隊感謝您！',
	'CONFIG_SITE_DESC' => '用於描述討論區的一小段文字',
	'CONFIG_SITENAME' => '我的討論區',
	'DEFAULT_INSTALL_POST' => '這是一個範例文章，存在於您的 phpBB3 討論區中；您可以刪除這個文章、這個主題甚至這個討論區， 因為一切看起來都正常運作！',
	'EXT_GROUP_ARCHIVES' => '存檔',
	'EXT_GROUP_DOCUMENTS' => '文件',
	'EXT_GROUP_DOWNLOADABLE_FILES' => '可下載的檔案',
	'EXT_GROUP_FLASH_FILES' => 'Flash檔案',
	'EXT_GROUP_IMAGES' => '圖片',
	'EXT_GROUP_PLAIN_TEXT' => '純文字檔案',
	'EXT_GROUP_QUICKTIME_MEDIA' => 'Quicktime多媒體檔案',
	'EXT_GROUP_REAL_MEDIA' => 'Real Media多媒體檔案',
	'EXT_GROUP_WINDOWS_MEDIA' => 'Windows Media多媒體檔案',
	'FORUMS_FIRST_CATEGORY' => '我的第一個類別',
	'FORUMS_TEST_FORUM_DESC' => '這只是一個測試討論區。',
	'FORUMS_TEST_FORUM_TITLE' => '測試討論區一',
	'RANKS_SITE_ADMIN_TITLE' => '網站管理員',
	'REPORT_WAREZ' => '這個文章包含非法或盜版軟體的連結。',
	'REPORT_SPAM' => '舉報的文章內容只是為了特定網站或產品廣告。',
	'REPORT_OFF_TOPIC' => '舉報的文章離題了。',
	'REPORT_OTHER' => '舉報的文章不適用任何其他類別，請使用說明欄位。',
	'SMILIES_ARROW' => '箭頭',
	'SMILIES_CONFUSED' => '疑惑',
	'SMILIES_COOL' => '酷！',
	'SMILIES_CRYING' => '哭泣或非常傷心',
	'SMILIES_EMARRASSED' => '困窘',
	'SMILIES_EVIL' => '邪惡或瘋狂',
	'SMILIES_EXCLAMATION' => '感歎',
	'SMILIES_GEEK' => '滑稽',
	'SMILIES_IDEA' => '想法',
	'SMILIES_LAUGHING' => '大笑',
	'SMILIES_MAD' => '抓狂',
	'SMILIES_MR_GREEN' => '綠先生',
	'SMILIES_NEUTRAL' => '中立',
	'SMILIES_QUESTION' => '疑問',
	'SMILIES_RAZZ' => '冷笑',
	'SMILIES_ROLLING_EYES' => '轉動的眼睛',
	'SMILIES_SAD' => '憂鬱',
	'SMILIES_SHOCKED' => '震撼',
	'SMILIES_SMILE' => '微笑',
	'SMILIES_SURPRISED' => '驚訝',
	'SMILIES_TWISTED_EVIL' => '扭曲的惡魔',
	'SMILIES_UBER_GEEK' => '搞笑',
	'SMILIES_VERY_HAPPY' => '特開心',
	'SMILIES_WINK' => '眨眼',
	'TOPICS_TOPIC_TITLE' => '歡迎來到phpBB3'
));
?>
