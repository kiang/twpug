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
	'ADMIN_CONFIG'				=> '管理員設定',
	'ADMIN_PASSWORD'			=> '管理員密碼',
	'ADMIN_PASSWORD_CONFIRM'	=> '確認管理員密碼',
	'ADMIN_PASSWORD_EXPLAIN'	=> '（請輸入一個6到30位的密碼）',
	'ADMIN_TEST'				=> '檢測管理員設定',
	'ADMIN_USERNAME'			=> '管理員帳號',
	'ADMIN_USERNAME_EXPLAIN'	=> '（請輸入一個3到20位的帳號）',
	'APP_MAGICK'				=> 'Imagemagick 支援【附件】',
	'AUTHOR_NOTES'				=> '作者提示<br />» %s',
	'AVAILABLE'					=> '可用',
	'AVAILABLE_CONVERTORS'		=> '可用的轉換程序',

	'BEGIN_CONVERT'					=> '開始轉換',
	'BLANK_PREFIX_FOUND'			=> '對資料庫的掃瞄顯示存在可用的無前綴資料表。',
	'BOARD_NOT_INSTALLED'			=> '沒有發現已安裝的phpBB',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> '為了進行轉換您必須預先安裝一個全新的 phpBB3。請注意新的安裝資料要和舊的資料存在同一個資料庫裡，您是否要進行【<a href="%s">全新安裝</a>】？',

	'CATEGORY'					=> '分區',
	'CACHE_STORE'				=> '快取類型',
	'CACHE_STORE_EXPLAIN'		=> '資料快取的物理地址，請優先使用檔案系統。',
	'CAT_CONVERT'				=> '轉換操作',
	'CAT_INSTALL'				=> '全新安裝',
	'CAT_OVERVIEW'				=> '綜合資訊',
	'CAT_UPDATE'				=> '升級',
	'CHANGE'					=> '改變',
	'CHECK_TABLE_PREFIX'		=> '請檢查您的資料表前綴後重試',
	'CLEAN_VERIFY'				=> '正在清理並檢驗最終結構',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> 清除自會員:',
	'COLLIDING_USERNAMES_FOUND'	=> '在舊的討論區中發現帳號衝突. 為了完成討論區轉換, 請刪除或重命名這些會員使得只有一個使用該帳號的會員存在.',
	'COLLIDING_USER'			=> '» 會員 id: <strong>%d</strong> 帳號: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> '正在轉換設定內容',
	'CONFIG_FILE_UNABLE_WRITE'	=> '寫入設定檔案失敗，建立這個檔案的其他方式以下：',
	'CONFIG_FILE_WRITTEN'		=> '寫入設定檔案成功，您現在可以繼續進行下一步。',
	'CONFIG_PHPBB_EMPTY'		=> '缺少 phpBB3 的設定資訊「%s」。',
	'CONFIG_RETRY'				=> '重試',
	'CONTACT_EMAIL_CONFIRM'		=> '確認Email聯繫地址',
	'CONTINUE_CONVERT'			=> '繼續轉換',
	'CONTINUE_CONVERT_BODY'		=> '檢測到曾經進行過轉換，您可以選擇進行重新轉換還是繼續上一次的轉換。',
	'CONTINUE_LAST'				=> '繼續進行操作',
	'CONTINUE_OLD_CONVERSION'	=> '繼續進行以前的轉換',
	'CONVERT'					=> '轉換',
	'CONVERT_COMPLETE'			=> '轉換完成',
	'CONVERT_COMPLETE_EXPLAIN'	=> '您已經將您的討論區成功轉換為 phpBB 3.0，您現在可以 <a href="../">瀏覽您的討論區</a>。phpBB 的線上使用幫助位於 <a href="http://www.phpbb.com/support/documentation/3.0/">會員指南</a> 和 <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">技術支援版面</a>',
	'CONVERT_INTRO'				=> '歡迎使用 phpBB 統一轉換框架',
	'CONVERT_INTRO_BODY'		=> '這裡您可以從其它（已安裝）的討論區匯入資料，下表列出的是所有可用的轉換模組。如果其中沒有您想要的轉換模組，請瀏覽我們的網站，那裡可能會提供更多的轉換模組下載。',
	'CONVERT_NEW_CONVERSION'	=> '新的轉換',
	'CONVERT_NOT_EXIST'			=> '指定的轉換程序不存在',
	'CONVERT_SETTINGS_VERIFIED'	=> '您輸入的資訊已經被檢驗，要開始轉換，請點選下面的按鈕。',
	'CONV_ERR_FATAL'					=> '嚴重錯誤',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '原討論區允許附件使用FTP上傳，請停用FTP上傳並確認設定了有效的上傳目錄，所有附件將被複製到這個新的web可瀏覽的目錄。這些完成後，請重新開始轉換程序。',
	'CONV_ERROR_CONFIG_EMPTY'			=> '轉換程序沒有可用的設定資訊。',
	'CONV_ERROR_FORUM_ACCESS'			=> '無法得到版面的瀏覽資訊.',
	'CONV_ERROR_GET_CATEGORIES'			=> '無法得到分區資訊.',
	'CONV_ERROR_GET_CONFIG'				=> '無法找到您的版面設定資訊.',
	'CONV_ERROR_COULD_NOT_READ'			=> '無法讀寫 "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> '無法得到群組權限資訊.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在add_bots()中檢測到群組資料表中的矛盾資料 - 如果手動設定過您需要新增所有特殊群組.',
	'CONV_ERROR_INSERT_BOT'				=> '無法在群組中新增bot.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '無法在bots資料表中新增bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '無法在群組資料表中新增會員.',
	'CONV_ERROR_MESSAGE_PARSER'			=> '內容解析錯誤',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '開發者注意: 您必須指定 $convertor[\'avatar_path\'] 以使用 %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> '指向源討論區的相對路徑未指定.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '開發者注意: 您必須指定 $convertor[\'avatar_gallery_path\'] 以使用 %s.',
	'CONV_ERROR_NO_GROUP'				=> '群組 "%1$s" 在 %2$s 中無法找到.',
	'CONV_ERROR_NO_RANKS_PATH'			=> '開發者注意: 您必須指定 $convertor[\'ranks_path\'] 以使用 %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '開發者注意: 您必須指定 $convertor[\'smilies_path\'] 以使用 %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '開發者注意: 您必須指定 $convertor[\'upload_path\'] 以使用 %s.',
	'CONV_ERROR_PERM_SETTING'			=> '無法新增/更改權限設定.',
	'CONV_ERROR_PM_COUNT'				=> '無法選擇站內簡訊數量.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '無法在新討論區中替換舊分區.',
	'CONV_ERROR_REPLACE_FORUM'			=> '無法在新討論區中替換舊版面.',
	'CONV_ERROR_USER_ACCESS'			=> '無法得到會員權限資訊.',
	'CONV_ERROR_WRONG_GROUP'			=> '錯誤的群組 "%1$s" 定義在 %2$s.',
	'CONV_SAVED_MESSAGES'				=> '儲存資訊',

	'COULD_NOT_COPY'			=> '無法複製檔案 <strong>%1$s</strong> 到 <strong>%2$s</strong><br /><br />請檢查目標資料夾是否存在並是否可以被web伺服器寫入',
	'COULD_NOT_FIND_PATH'		=> '無法找到您以前討論區的路徑. 請檢查您的設定並再試一次.<br />» 指定的路徑是 %s',

	'DBMS'						=> '資料庫類型',
	'DB_CONFIG'					=> '資料庫設定',
	'DB_CONNECTION'				=> '資料庫連接',
	'DB_ERR_INSERT'				=> '執行 <code>INSERT</code> 語句時發生錯誤。',
	'DB_ERR_LAST'				=> '執行 <var>query_last</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST'		=> '執行 <var>query_first</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '執行 <var>query_first</var> 時發生錯誤：%s ("%s")。',
	'DB_ERR_SELECT'				=> '執行 <code>SELECT</code> 語句時發生錯誤。',
	'DB_HOST'					=> '資料庫伺服器地址，或 DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN 代表 資料源名稱，它只與 ODBC 有關。',
	'DB_NAME'					=> '資料庫名稱',
	'DB_PASSWORD'				=> '資料庫密碼',
	'DB_PORT'					=> '資料庫伺服器連接埠',
	'DB_PORT_EXPLAIN'			=> '不用填寫，除非您確定伺服器監聽一個非標準連接埠。',
	'DB_USERNAME'				=> '資料庫帳號',
	'DB_TEST'					=> '連接檢測',
	'DEFAULT_LANG'				=> '預設討論區語言',
	'DEFAULT_PREFIX_IS'			=> '根據提供的前綴, 轉換器無法找到可用的資料表. 請確認您在同一資料庫中存在舊的資料表. %1$s 預設的資料表前綴是 <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> '在轉換器中沒有指定test_file變量的值. 如果您是轉換器的使用者, 您不應該看到這個錯誤, 請聯繫轉換器的作者並報告這個錯誤. 如果您是轉換器的作者, 您必須指定一個源討論區中存在的檔案名稱稱, 使得路徑檢驗能正常進行.',
	'DIRECTORIES_AND_FILES'		=> '設定目錄與檔案',
	'DISABLE_KEYS'				=> '停用關鍵字...',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'FTP 支援【 安裝phpBB 】',
	'DLL_GD'					=> 'GD 圖形支援【 圖形確認碼 】',
	'DLL_MBSTRING'				=> '多位元字元支援',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL (保護 MySQLi 外掛)',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML 支援【 Jabber 】',
	'DLL_ZLIB'					=> 'zlib 壓縮支援【 壓縮檔案：.gz .tar.gz .zip 】',
	'DL_CONFIG'					=> '下載 config',
	'DL_CONFIG_EXPLAIN'			=> '您應該將完整的 config.php 下載到您的個人電腦中，然後手動上傳它，覆蓋 phpBB 3.0 根目錄中已經存在的檔案。請注意以 ASCII 格式上傳（如果您不確定如何辦到，請閱讀您的FTP軟體文件）。上傳完成之後，請點選 「完成」 以進行下一步。',
	'DL_DOWNLOAD'				=> '下載',
	'DONE'						=> '完成',

	'ENABLE_KEYS'				=> '重新啟用關鍵字. 這需要等待一會兒',

	'FILES_OPTIONAL'			=> '可用的檔案與目錄',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>可用的</strong> - 這些檔案、目錄及權限不是必需的。如果它們不存在或無法寫入，安裝程序將會嘗試使用一些技術手段來建立它們。但如果存在，將會使安裝加速。',
	'FILES_REQUIRED'			=> '檔案與目錄',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>必需的</strong> - 為了正常運行，phpBB需要針對特定檔案或目錄的寫入權限。如果下面出現「不存在」，您就需要建立正確的檔案或目錄；如果出現「無法寫入」，您就需要改變正確的檔案或目錄的權限來允許phpBB對其進行寫入操作。',
	'FILLING_TABLE'				=> '正在填寫資料表：<strong>%s</strong>',
	'FILLING_TABLES'			=> '正在填寫資料表',
	'FINAL_STEP'				=> '正在執行最後一步',
	'FORUM_ADDRESS'				=> '討論區地址',
	'FORUM_ADDRESS_EXPLAIN'		=> '這是指向您的討論區根目錄的超連結地址，例如：<samp>http://www.example.com/phpBB2/</samp>。如果您填入了一個地址，所有在信件、簡訊及簽名檔中與前面範例相同的地址都將被替換為新的討論區地址。',
	'FORUM_PATH'				=> '討論區路徑',
	'FORUM_PATH_EXPLAIN'		=> '這是在硬碟上對應與您<strong>現在的phpBB根目錄</strong>的原討論區 <strong>相對</strong> 路徑',
	'FOUND'						=> '存在',
	'FTP_CONFIG'				=> '通過 FTP 傳輸設定',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB已經在伺服器上檢測到 FTP 模組，如果您希望，您可以嘗試通過它安裝您的 config.php。您將需要提供以下資訊，請注意帳號和密碼是用來登入伺服器的（如果您不確定是什麼，聯繫您的服務供應商）！',
	'FTP_PATH'					=> 'FTP 路徑',
	'FTP_PATH_EXPLAIN'			=> '這是從FTP根目錄至phpBB目錄的相對路徑，例如：htdocs/phpBB3/',
	'FTP_UPLOAD'				=> '上傳',

	'GPL'						=> 'General Public License(GPL協議)',
	
	'INITIAL_CONFIG'			=> '基本設定',
	'INITIAL_CONFIG_EXPLAIN'	=> '安裝程序認為您的伺服器可以運行phpBB，您需要提供一些具體資訊。如果您不知道如何連接您的資料庫，請首先考慮聯繫您的服務供應商，或是瀏覽phpBB支援討論區。在繼續下一步之前，請仔細檢查您輸入的資訊。',
	'INSTALL_CONGRATS'			=> '恭喜！',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>您已經成功安裝 phpBB %1$s. 從這裡, 您有兩個選項可以設定您新安裝的 phpBB3:</p>
		<h2>轉換一個已經存在的討論區到 phpBB3</h2>
		<p>phpBB 統一轉換框架支援從 phpBB 2.0.x 和其他討論區軟體到 phpBB3 的轉換. 如果您有一個舊的討論區需要轉換, 請 <a href="%2$s">運行轉換程序</a>.</p>
		<h2>使用您的 phpBB3!</h2>
		<p>點選下面的連結將帶您到管理員控制面板 (ACP). 花一些時間檢查設定選項是否可用. 記住可以使用在線上幫助文件位於 <a href="http://www.phpbb.com/support/documentation/3.0/">文件</a> 和 <a href="http://www.phpbb.com/community/viewforum.php?f=46">技術支援版面</a>, 檢視 <a href="%3$s">README</a> 以得到更多的資訊.</p><p><strong>請在使用討論區前刪除, 移動或重命名install資料夾. 如果這個資料夾存在, 只有管理員控制面板才可以瀏覽.</strong></p>',
	'INSTALL_INTRO'				=> '歡迎安裝！',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> '使用這個選項, 應該可以在您的伺服器上安裝 phpBB.</p><p>為了繼續安裝, 您需要知道您的資料庫設定. 如果您不清楚這些, 請聯繫您的web空間提供者. 沒有這些資訊安裝將不能繼續. 您需要:</p>

	<ul>
		<li>資料庫類型 - 您將使用的資料庫.</li>
		<li>資料庫伺服器主機名或 DSN - 資料庫伺服器地址.</li>
		<li>資料庫伺服器連接埠 - 資料庫伺服器連接埠 (一般情況下不需要輸入).</li>
		<li>資料庫名稱 - 資料庫伺服器上的資料庫名稱.</li>
		<li>帳號和密碼 - 用於登入並瀏覽上述資料庫的會員資料.</li>
	</ul>

	<p><strong>注意:</strong> 如果您使用 SQLite, 您應該在DSN框中輸入資料庫的完整路徑並保持帳號和密碼空白. 為了安全的原因, 您應該確保資料庫檔案不會存放在一個可以被公眾瀏覽的資料夾下.</p>

	<p>phpBB3 支援以下的資料庫:</p>
	<ul>
		<li>MySQL 3.23 或更高 (支援MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 或更高 (直接瀏覽或通過 ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>只有您的伺服器支援的資料庫才會被顯示.',
	'INSTALL_INTRO_NEXT'		=> '要開始安裝，點選下面的按鈕。',
	'INSTALL_LOGIN'				=> '登入討論區',
	'INSTALL_NEXT'				=> '下一步',
	'INSTALL_NEXT_FAIL'			=> '某些檢測未能通過，您應該在進行下一步之前修正這些問題，不然可能會導致安裝無法完成。',
	'INSTALL_NEXT_PASS'			=> '全部的基礎檢測都已經通過，您可以進行下一步了。如果您改變了一些設定比如權限、模組等等，您可以選擇重新檢測。',
	'INSTALL_PANEL'				=> 'Installation Panel',
	'INSTALL_SEND_CONFIG'		=> '很不幸，phpBB沒能將設定資訊直接寫入您的 config.php 檔案。這可能是由於此檔案不存在或無法寫入。下面將提供一些選項幫助您完成設定 config.php。',
	'INSTALL_START'				=> '開始安裝',
	'INSTALL_TEST'				=> '重新檢測',
	'INST_ERR'					=> '安裝過程出錯',
	'INST_ERR_DB_CONNECT'		=> '連接資料庫失敗，錯誤資訊以下',
	'INST_ERR_DB_FORUM_PATH'	=> '指定的資料庫檔案位於討論區目錄內，您應該把它放在一個無法通過網路瀏覽的位置。',
	'INST_ERR_DB_NO_ERROR'		=> '沒有得到正確的錯誤資訊',
	'INST_ERR_DB_NO_MYSQLI'		=> '伺服器內安裝的 MySQL 版本與您選擇的 「MySQL with MySQLi Extension」 選項不相容，請嘗試 「MySQL」 選項。',
	'INST_ERR_DB_NO_SQLITE'		=> '您安裝的 SQLite 版本太古老，請升級至最低 2.8.2 版。',
	'INST_ERR_DB_NO_ORACLE'		=> '伺服器內安裝的 Oracle 版本需要您將參數 <var>NLS_CHARACTERSET</var> 設定為 <var>UTF8</var>。請設定此參數，或將 Oracle 升級至最低 9.2 版。',
	'INST_ERR_DB_NO_FIREBIRD'	=> '您安裝的 Firebird 版本太古老，請升級至最低 2.0 版。',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> '您為 Firebird 選擇的資料庫的頁面容量小於 8192，它必須至少為 8192。',
	'INST_ERR_DB_NO_POSTGRES'	=> '您選擇的資料庫不是 <var>UNICODE</var> 或 <var>UTF8</var> 編碼，請使用 <var>UNICODE</var> 或 <var>UTF8</var> 編碼的資料庫。',
	'INST_ERR_DB_NO_NAME'		=> '沒有指定資料庫名稱',
	'INST_ERR_EMAIL_INVALID'	=> '您輸入的Email地址無效',
	'INST_ERR_EMAIL_MISMATCH'	=> '您輸入的兩個Email地址互相不符合',
	'INST_ERR_FATAL'			=> '安裝過程出現嚴重錯誤',
	'INST_ERR_FATAL_DB'			=> '資料庫出現了一個嚴重且無法恢復的錯誤。這可能是由於您指定的會員沒有 <code>CREATE TABLES</code> 或 <code>INSERT</code> 的權限等等，下面可能會提供進一步的資訊。請首先考慮聯繫您的服務供應商，或是瀏覽phpBB支援討論區，以得到進一步幫助。',
	'INST_ERR_FTP_PATH'			=> '無法轉換到指定目錄，請檢查路徑資訊。',
	'INST_ERR_FTP_LOGIN'		=> '無法登入 FTP 伺服器，請檢查帳號和密碼。',
	'INST_ERR_MISSING_DATA'		=> '您必須填完此資料表的全部單元',
	'INST_ERR_NO_DB'			=> '無法找到指定資料庫類型的 PHP 模組',
	'INST_ERR_PASSWORD_MISMATCH'	=> '您輸入的兩個密碼互相不符合。',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '您輸入的密碼過長，請輸入最多30個字元。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '您輸入的密碼太短，請輸入最少6個字元。',
	'INST_ERR_PREFIX'			=> '已經存在使用指定前綴的資料表，請指定另一個。',
	'INST_ERR_PREFIX_INVALID'	=> '您指定的資料表前綴無效，請嘗試另一個，去掉諸如連字元之類的字元。',
	'INST_ERR_PREFIX_TOO_LONG'	=> '您指定的資料表前綴過長，上限為 %d 個字元。',
	'INST_ERR_USER_TOO_LONG'	=> '您輸入的帳號過長，請輸入最多20個字元。',
	'INST_ERR_USER_TOO_SHORT'	=> '您輸入的帳號太短，請輸入最少3個字元。',
	'INVALID_PRIMARY_KEY'		=> '無效的主鍵 : %s',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> 外掛檢測',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> 是一個 PHP 外掛外掛，它提供多位元字元串處理功能。某些 mbstring 的功能與phpBB不相容，因此必須被停用。',
	'MBSTRING_FUNC_OVERLOAD'				=> '程序過載',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> 必須被設定為 0 或 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> '字元編碼',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 必須被設定為 0',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP 輸入字元轉換',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> 必須被設定為 <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP 輸出字元轉換',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> 必須被設定為 <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> '請首先確保此資料夾存在並且可以被網路伺服器寫入，然後重試：<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> '請首先確保這些資料夾存在並且可以被網路伺服器寫入，然後重試：<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> '命名衝突：%s 與 %s 都是別名<br /><br />%s',
	'NEXT_STEP'					=> '繼續進行下一步',
	'NOT_FOUND'					=> '不存在',
	'NOT_UNDERSTAND'			=> '無法理解 %s #%d，資料表 %s ("%s")',
	'NO_CONVERTORS'				=> '沒有可用的轉換程序',
	'NO_CONVERT_SPECIFIED'		=> '沒有指定轉換程序',
	'NO_LOCATION'				=> '無法確定位置。如果您確定 Imagemagick 已經安裝，請於討論區安裝完成之後，在管理員控制面板中指定它的位置。',
	'NO_TABLES_FOUND'			=> '沒有找到任何資料表',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> '歡迎使用phpBB3.0 RC1! 這個版本的發佈是為了得到更廣泛的使用, 從而幫助我們檢驗已經被修正的bug.</p><p>請閱讀 <a href="../docs/INSTALL.html">安裝指南</a> 以得到更多的安裝資訊</p><p><strong style="text-transform: uppercase;">注意:</strong> 這個發行版 <strong style="text-transform: uppercase;">並不是正式版</strong>. 您可能需要等待最終發行版的發佈.</p><p>這個安裝系統將引導您完成安裝phpBB, 或者升級phpBB, 或者轉換其他程序資料到phpBB的全過程, 需要每個選項的更多資訊, 請從上面的選單選擇正確的頁面.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 支援',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> '如果PHP的PCRE外掛不支援UTF-8，phpBB 將 <strong>無法</strong> 運行。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP 函數 getimagesize() 可用',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>必須的</strong> - 為了讓phpBB正常工作,  需要啟用 getimagesize 函數.',
	'PHP_OPTIONAL_MODULE'			=> '可選模組',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>可用的</strong> - 這些模組或程序不是必需的。但如果它們可用，您將可以使用附加功能。',
	'PHP_SUPPORTED_DB'				=> '支援的資料庫',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>必需的</strong> - 您必須為PHP提供至少一個相容的資料庫。如果下面沒有可用的資料庫模組，您應該聯繫服務供應商，或者查閱相關的PHP安裝文件。',
	'PHP_REGISTER_GLOBALS'			=> 'PHP 設定 <var>register_globals</var> 已停用',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> '如果此設定被允許，phpBB仍然會運行。但出於安全考慮，如果條件允許，建議您將 register_globals 停用。',
	'PHP_SAFE_MODE'					=> '安全模式',
	'PHP_SETTINGS'					=> 'PHP 版本和設定',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>必需的</strong> - 要安裝phpBB，您必需正在運行最低 4.3.3 版本的PHP。如果下面出現 <var>safe mode</var>，您的PHP正在運行於安全模式，這將給遠端管理及類似功能帶來限制。',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP 設定 <var>allow_url_fopen</var> 為啟用狀態',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>選擇性</strong> - 這個設定是可用的, 不過某些phpBB的功能例如外部圖示可能會因為沒有這個功能而無法正常工作. ',
	'PHP_VERSION_REQD'				=> 'PHP 版本 >= 4.3.3',
	'POST_ID'						=> '文章 ID',
	'PREFIX_FOUND'					=> '對資料表的掃瞄顯示一組有效的資料表正在使用 <strong>%s</strong> 作為前綴。',
	'PREPROCESS_STEP'				=> '正在執行轉換準備操作',
	'PRE_CONVERT_COMPLETE'			=> '全部的轉換準備步驟都已被成功完成，您現在可以開始進行實際的轉換操作。',
	'PROCESS_LAST'					=> '正在執行最後的指令',

	'REFRESH_PAGE'				=> '更新頁面以繼續轉換',
	'REFRESH_PAGE_EXPLAIN'		=> '如果設定為「是」，轉換程序將會在完成每一步之後更新頁面，然後繼續。如果這是您為了測試目的而進行的第一次轉換，我們建議您將此設定為「No」。',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> '伺服器相容性',
	'REQUIREMENTS_EXPLAIN'		=> '在完整安裝之前，phpBB需要對您的伺服器設定及所需檔案進行檢測，以確定您是否可以安裝和運行phpBB。請仔細瀏覽以下結果，並在繼續進行之前確保所有必需的檢測都已通過。如果您希望使用任何基於非必需檢測的功能，請同時確保相關檢測已通過。',
	'RETRY_WRITE'				=> '重新嘗試寫入設定',
	'RETRY_WRITE_EXPLAIN'		=> '如果您想允許phpBB寫入config.php，您可以改變它的權限，然後點選下面的【重試】按鈕。請記得在安裝完成之後恢復config.php的正確權限。',

	'SCRIPT_PATH'				=> '指令路徑',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 根目錄與域名指向目錄的相對路徑，例如：<samp>/phpBB3</samp>',
	'SELECT_LANG'				=> '選擇語言',
	'SERVER_CONFIG'				=> '伺服器設定',
	'SEARCH_INDEX_UNCONVERTED'	=> '搜尋索引沒有轉換',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> '您的舊搜尋索引沒有轉換. 搜尋將總是得到空結果. 如果需要建立一個新索引, 請到管理員控制面板, 選擇維護, 然後從子選單中選擇搜尋索引.',
	'SOFTWARE'					=> '討論區軟體',
	'SPECIFY_OPTIONS'			=> '設定轉換選項',
	'STAGE_ADMINISTRATOR'		=> '管理員資訊',
	'STAGE_ADVANCED'			=> '進階設定',
	'STAGE_ADVANCED_EXPLAIN'	=> '只有您確定需要一些非預設設定時，您才有必要更改此頁的內容。如果您不確定，請繼續至下一頁，因為這些設定可以隨時在管理員控制面板中更改。',
	'STAGE_CONFIG_FILE'			=> '設定檔案',
	'STAGE_CREATE_TABLE'		=> '建立資料表',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'phpBB 3.0 所使用的資料庫資料表已經被建立並被填入一些初始資料，請繼續至下一步以完成安裝。',
	'STAGE_DATABASE'			=> '資料庫設定',
	'STAGE_FINAL'				=> '完成',
	'STAGE_INTRO'				=> '簡介',
	'STAGE_IN_PROGRESS'			=> '進行轉換',
	'STAGE_REQUIREMENTS'		=> '檢測需求',
	'STAGE_SETTINGS'			=> '設定',
	'STARTING_CONVERT'			=> '開始轉換操作',
	'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'SUB_INTRO'					=> '簡介',
	'SUB_LICENSE'				=> '授權',
	'SUB_SUPPORT'				=> '支援',
	'SUCCESSFUL_CONNECT'		=> '連接成功',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> '在測試階段, 我們提供有限的技術支援於 <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB 3.0 測試支援版面</a>. 我們將回答一般的安裝設定問題, 以及和bug相關的一般問題. 我們不提供外掛, 自定義程式碼/風格和任何實際應用的支援.</p><p>需要更多的幫助, 請瀏覽 <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">如何快速上手</a>.</p><p>如果需要及時獲取最新的新聞和發佈, 請 <a href="http://www.phpbb.com/support/">加入我們的郵件列表</a>',
	'SYNC_FORUMS'				=> '開始同步版面',
	'SYNC_TOPICS'				=> '開始同步主題',
	'SYNC_TOPIC_ID'				=> '正在同步主題：<var>topic_id</var> %1$s 至 %2$s',

	'TABLES_MISSING'			=> '無法找到這些資料表<br />» <strong>%s</strong>',
	'TABLE_PREFIX'				=> '為資料庫中的資料表名稱新增前綴',
	'TABLE_PREFIX_SAME'			=> '資料表前綴需要與轉換之前所使用的相同。<br />»  之前所使用的資料表前綴是 %s',
	'TESTS_PASSED'				=> '檢測通過',
	'TESTS_FAILED'				=> '檢測未通過',

	'UNABLE_WRITE_LOCK'			=> '無法寫入鎖定檔案',
	'UNAVAILABLE'				=> '無法使用',
	'UNWRITABLE'				=> '無法寫',
	'UPDATE_TOPICS_POSTED'		=> '正在產生主題發佈資訊',
	'UPDATE_TOPICS_POSTED_ERR'	=> '在產生主題資訊時發生錯誤. 您可以在轉換結束後在管理員控制面板中重試這個操作.',
	'VERSION'					=> '版本',

	'WELCOME_INSTALL'			=> '歡迎安裝 phpBB 3',
	'WRITABLE'					=> '可寫',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> '所有的檔案都已經升級到最新版本。現在您應該 <a href="../ucp.php?mode=login">登入到討論區</a> 並檢查系統是否正常工作。不要忘記刪除或者重命名（移動）install安裝目錄！',
	'ARCHIVE_FILE'				=> '文件中的源檔案',

	'BACK'				=> '後退',
	'BINARY_FILE'		=> '二進制檔案',

	'CHECK_FILES'					=> '檢查檔案',
	'CHECK_FILES_AGAIN'				=> '再次檢查檔案',
	'CHECK_FILES_EXPLAIN'			=> '在下面的步驟中相關聯的檔案都將被檢查 - 如果這是第一次檔案檢查，將花費一定的時間。',
	'CHECK_FILES_UP_TO_DATE'		=> '依照您資料庫的版本已是最新。您需要處理一個檔案檢查確認所有的檔案已經更新到了phpBB最近版本的檔案。',
	'CHECK_UPDATE_DATABASE'			=> '繼續升級過程',
	'COLLECTED_INFORMATION'			=> '收集到的檔案資訊',
	'COLLECTED_INFORMATION_EXPLAIN'	=> '下面的列表顯示了需要更新的檔案的資訊。請閱讀每個狀態前的資訊並並理解其含義, 從而瞭解在升級過程中您需要做的事情。',
	'COMPLETE_LOGIN_TO_BOARD'		=> '現在您應該 <a href="../ucp.php?mode=login">登入到討論區</a> 並檢查系統是否正常工作。不要忘記刪除或者重命名（移動）install目錄！',
	'CONTINUE_UPDATE_NOW'			=> '現在繼續升級過程',
	'CURRENT_FILE'					=> '目前源檔案',
	'CURRENT_VERSION'				=> '目前版本',

	'DATABASE_TYPE'						=> '資料庫類型',
	'DATABASE_UPDATE_INFO_OLD'			=> '再安裝目錄中的資料庫升級檔案是過時的。請確定上傳正確版本的檔案。',
	'DESTINATION'						=> '目標檔案',
	'DIFF_INLINE'						=> '行內',
	'DIFF_RAW'							=> '裸標準對比',
	'DIFF_SEP_EXPLAIN'					=> '目前檔案尾 / 新檔案頭',
	'DIFF_SIDE_BY_SIDE'					=> '對齊',
	'DIFF_UNIFIED'						=> '標準對比',
	'DO_NOT_UPDATE'						=> '不要上傳這個檔案',
	'DONE'								=> '完成',
	'DOWNLOAD'							=> '下載',
	'DOWNLOAD_AS'						=> '下載為',
	'DOWNLOAD_UPDATE_METHOD'			=> '下載已修改的文件',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '當您下載並解壓縮檔案後, 您需要上傳安裝包內的檔案到phpBB安裝目錄。請上傳檔案到各個正確位置。當您完成所有檔案的上傳後，請用下面的按鈕做檔案檢查。',

	'ERROR'		=> '錯誤',

	'FILE_ALREADY_UP_TO_DATE'		=> '檔案已經是最新',
	'FILE_DIFF_NOT_ALLOWED'			=> '檔案不允許被比較',
	'FILE_USED'						=> '資訊來自於',			// Single file
	'FILES_CONFLICT'				=> '有衝突的檔案',
	'FILES_CONFLICT_EXPLAIN'		=> '下面的檔案已經修改過, 不是舊版本的原始檔案。phpBB 認為合併這些檔案會產生衝突。請檢查衝突並嘗試手動的解決, 或者選擇一種合併的方式繼續更新。如果您手動修改消除了衝突，請再次運行檔案檢查。您也可以選擇為每個檔案自動首選合併。這將拋棄舊版本檔案的衝突程式碼而失去您於這個檔案上的修改。',
	'FILES_MODIFIED'				=> '修改的檔案',
	'FILES_MODIFIED_EXPLAIN'		=> '下面的檔案已經修改, 不是舊版本的原始檔案。更新檔案將合併您修改過的檔案。',
	'FILES_NEW'						=> '新檔案',
	'FILES_NEW_EXPLAIN'				=> '以下的檔案在安裝中不存在.',
	'FILES_NEW_CONFLICT'			=> '新的衝突檔案',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的檔案在新版本中已更新，但是再對應目錄已經存在同名檔案，這個檔案將被新檔案覆蓋。',
	'FILES_NOT_MODIFIED'			=> '未修改的檔案',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的檔案在老版本的phpBB檔案再新版本中沒有修改。',
	'FILES_UP_TO_DATE'				=> '已經升級的檔案',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的檔案已經是最新的, 不需要升級.',
	'FTP_SETTINGS'					=> 'FTP 設定',
	'FTP_UPDATE_METHOD'				=> 'FTP 上傳',

	'INCOMPATIBLE_UPDATE_FILES'		=> '找到的升級檔案不適用於您目前的版本. 您的安裝版本是 %1$s 而升級檔案是用於升級 phpBB %2$s 到 %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> '上傳的檔案不完全',
	'INLINE_UPDATE_SUCCESSFUL'		=> '資料庫升級成功. 現在您需要繼續升級過程.',

	'LATEST_VERSION'		=> '最新版本',
	'LINE'					=> '行',
	'LINE_ADDED'			=> '已新增',
	'LINE_MODIFIED'			=> '已修改',
	'LINE_REMOVED'			=> '已刪除',
	'LINE_UNMODIFIED'		=> '未修改',
	'LOGIN_UPDATE_EXPLAIN'	=> '您必須登入後才能升級您的討論區.',

	'MAPPING_FILE_STRUCTURE'	=> '為了方便上傳, 這裡有安裝檔案位置的對應表.',
	'MERGE_NO_MERGE_NEW_OPTION'	=> '不要合併 - 使用新檔案',
	'MERGE_NO_MERGE_MOD_OPTION'	=> '不要合併 - 使用目前安裝的檔案',
	'MERGE_MOD_FILE_OPTION'		=> '合併不同之處並使用修改過的程式碼替代衝突程式碼',
	'MERGE_NEW_FILE_OPTION'		=> '合併不同之處並使用新檔案的程式碼替代衝突程式碼',
	'MERGE_SELECT_ERROR'		=> '沒有正確選擇衝突檔案合併方式.',

	'NEW_FILE'						=> '新升級的檔案',
	'NO_AUTH_UPDATE'				=> '無權進行升級',
	'NO_ERRORS'						=> '沒有錯誤',
	'NO_UPDATE_FILES'				=> '不要升級以下檔案',
	'NO_UPDATE_FILES_EXPLAIN'		=> '以下的檔案有更新或者修改過的版本, 但是在您的安裝的目錄中找到。如果列表中包含了除了language/或者styles/ 目錄以外的檔案，可能您曾經修改過目錄結構，升級程序可能沒有執行完全。',
	'NO_UPDATE_FILES_OUTDATED'		=> '沒有發現有效的更新目錄，請確認上傳了相關的升級檔案。<br /><br />您的安裝似乎Your installation does <strong>不是</strong> 最新版本。版本 %1$s 的phpBB的更新程序已經提供下載，請瀏覽 <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> 獲得正確的從版本%2$s 到版本%3$s 升級檔案。',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> '您的版本已經是最新版本。沒有必要進行升級。如果您希望做一個完全的檔案檢查, 請確認您上傳了正確的更新檔案。',
	'NO_UPDATE_INFO'				=> '無法找到升級檔案資訊.',
	'NO_UPDATES_REQUIRED'			=> '不需要升級',
	'NO_VISIBLE_CHANGES'			=> '沒有可用的更改',
	'NOTICE'						=> '注意',
	'NUM_CONFLICTS'					=> '衝突的數量',

	'OLD_UPDATE_FILES'		=> '升級檔案已經過期. 找到的升級檔案是用於 phpBB %1$s 到 phpBB %2$s 的升級, 但是最新的 phpBB 版本是 %3$s.',

	'PERFORM_DATABASE_UPDATE'			=> '進行資料庫升級',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> '在下面是資料庫升級指令的連結。這個指令需要分開執行, 因為資料庫升級中如果您已經登入可能會產生無法預見的結果。資料庫升級要花費一定時間，在這期間看起來沒有反應, 但是不要在半途停止執行。 當您處理完資料庫的升級後, 請關閉資料庫升級的視窗並繼續升級程序。',
	'PREVIOUS_VERSION'					=> '上一個版本',
	'PROGRESS'							=> '進度',

	'RESULT'					=> '結果',
	'RUN_DATABASE_SCRIPT'		=> '現在升級我的資料庫',

	'SELECT_DIFF_MODE'			=> '選擇對比模式',
	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載文件格式',
	'SELECT_FTP_SETTINGS'		=> '選擇 FTP 設定',
	'SHOW_DIFF_CONFLICT'		=> '顯示差異/衝突',
	'SHOW_DIFF_FINAL'			=> '顯示結果檔案',
	'SHOW_DIFF_MODIFIED'		=> '顯示合併的差異',
	'SHOW_DIFF_NEW'				=> '顯示檔案內容',
	'SHOW_DIFF_NEW_CONFLICT'	=> '顯示有衝突的差異',
	'SHOW_DIFF_NOT_MODIFIED'	=> '顯示差異',
	'SOME_QUERIES_FAILED'		=> '部分查詢失敗, 失敗的語句列出以下',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> '這不需要太多擔心，更新會繼續。如果想解決這個問題您需要到我們的技術支援討論區中檢視或尋求幫助。請檢視 <a href="../docs/README.html">README</a> 瞭解如何獲取更多建議。',
	'STAGE_FILE_CHECK'			=> '檢查檔案',
	'STAGE_UPDATE_DB'			=> '升級資料庫',
	'STAGE_UPDATE_FILES'		=> '升級檔案',
	'STAGE_VERSION_CHECK'		=> '版本檢查',
	'STATUS_CONFLICT'			=> '修改的檔案產生衝突',
	'STATUS_MODIFIED'			=> '已修改的檔案',
	'STATUS_NEW'				=> '新檔案',
	'STATUS_NEW_CONFLICT'		=> '有衝突的新檔案',
	'STATUS_NOT_MODIFIED'		=> '未修改的檔案',
	'STATUS_UP_TO_DATE'			=> '已升級的檔案',

	'UPDATE_COMPLETED'				=> '升級完成',
	'UPDATE_DATABASE'				=> '更新資料庫',
	'UPDATE_DATABASE_EXPLAIN'		=> '下一步資料庫將被更新.',
	'UPDATE_DATABASE_SCHEMA'		=> '升級資料庫結構',
	'UPDATE_FILES'					=> '升級檔案',
	'UPDATE_FILES_NOTICE'			=> '請確認您已經升級了討論區檔案, 這個檔案僅用於升級您的討論區資料庫.',
	'UPDATE_INSTALLATION'			=> '升級安裝',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '本選項將升級您的phpBB安裝到最新版本。<br />在升級處理期間所有的檔案都將被檢查是否完整。您可以檢視檔案和升級前的變化。<br /><br />檔案自動升級的途徑有兩條。</p><h2>手動升級</h2><p>這個選項, 您只需要下載有改動的檔案以確保不會失去您對其他檔案的修改。下載後將檔案上傳到phpBB目錄的正確位置。之後，您可以再次進行檔案檢查，檢查是否將檔案放到了正確的位置。</p><h2>通過FTP自動升級</h2><p>這個方法和第一個類似，但是不需要下載有變動的檔案和手動上傳它們。系統將為您自動做這個工作。用這個方法進行升級您需要知道您的FTP登入的詳細資訊。 一旦完成設定，系統將重新定向到檔案檢查功能完成系統升級。.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>發行公告</h1>

		<p>在升級程序前，請閱讀<a href="%1$s" title="%1$s">最後版本的發行公告</a> ，它包含很多有用的資訊。它也包含完整的下載連結和程式碼變動日誌。</p>

		<br />

		<h1>如何升級您的討論區</h1>

		<p>推薦的方法:　通過以下的幾步升級您的討論區:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>到 <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">phpBB.com 下載頁面</a> 下載正確的 「phpBB 更新包」 檔案.<br /><br /></li>
			<li>解壓縮檔案.<br /><br /></li>
			<li>上傳解壓完成的檔案到您的phpBB安裝的根目錄（即config.php檔案所在目錄）。<br /><br /></li>
		</ul>

		<p>上傳install目錄後您的討論區將阻止普通會員的瀏覽。<br /><br />
		<strong><a href="%2$s" title="%2$s">現在輸入install地址開始更新程序</a>。</strong><br />
		<br />
		按嚮導完成開始更新。完成後更新程序將給您發送一個通知。
		</p>
	',
	'UPDATE_METHOD'					=> '升級方式',
	'UPDATE_METHOD_EXPLAIN'			=> '您可以選擇合適的上傳方式。使用FTP上傳您需要提供FTP帳號的詳細資訊。 使用這種方法檔案將自動移動到對應目錄並且通過在原檔案後新增.bak副檔名的方式備份原來的檔案 。如果您選擇下載修改的檔案則您要解壓縮包後手動的上傳檔案到正確的目錄。',
	'UPDATE_SUCCESS'				=> '更新完成',
	'UPDATE_SUCCESS_EXPLAIN'		=> '成功更新所有檔案. 下一步將重新檢驗所有檔案以確保檔案被正確升級.',
	'UPDATE_VERSION_OPTIMIZE'		=> '更新版本, 最佳化資料庫資料表',
	'UPDATING_DATA'					=> '更新資料',
	'UPDATING_TO_LATEST_STABLE'		=> '更新資料庫至最新的穩定版本',
	'UPDATED_VERSION'				=> '已更新的版本',
	'UPLOAD_METHOD'					=> '上傳方式',

	'UPDATE_DB_SUCCESS'				=> '資料庫更新完成',

	'VERSION_CHECK'				=> '版本檢查',
	'VERSION_CHECK_EXPLAIN'		=> '檢查您目前運行的討論區是否是最新版本.',
	'VERSION_NOT_UP_TO_DATE'	=> '您的討論區版本不是最新的, 請繼續升級過程.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> '您的討論區版本不是最新的.<br />下面是最新版本的發佈和更新幫助連結.',
	'VERSION_UP_TO_DATE'		=> '您的版本是最新的, 沒有可用的更新. 您也許想進行一次討論區程序檔案的檢驗.',
	'VERSION_UP_TO_DATE_ACP'	=> '您的版本是最新的, 沒有可用的更新. 您不需要升級您的討論區.',
	'VIEWING_FILE_CONTENTS'		=> '檢視檔案內容',
	'VIEWING_FILE_DIFF'			=> '檢視檔案差異',

	'WRONG_INFO_FILE_FORMAT'	=> '錯誤的資訊檔案格式',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '非常感謝, 討論區管理團隊',
	'CONFIG_SITE_DESC'				=> '用於描述您的討論區的一小段文字',
	'CONFIG_SITENAME'				=> 'phpBB討論區',

	'DEFAULT_INSTALL_POST'			=> '這是新安裝好的phpBB3討論區中的一個樣本文章。您可以刪除這個文章、這個主題甚至這個版面， 因為一切看起來都運轉正常！',

	'EXT_GROUP_ARCHIVES'			=> '存檔',
	'EXT_GROUP_DOCUMENTS'			=> '文件',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> '可下載的檔案',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash檔案',
	'EXT_GROUP_IMAGES'				=> '圖片',
	'EXT_GROUP_PLAIN_TEXT'			=> '純文字檔案',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime多媒體檔案',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media多媒體檔案',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media多媒體檔案',

	'FORUMS_FIRST_CATEGORY'			=> '我的第一個分區',
	'FORUMS_TEST_FORUM_DESC'		=> '這只是一個測試版面.',
	'FORUMS_TEST_FORUM_TITLE'		=> '測試版面一',

	'RANKS_SITE_ADMIN_TITLE'		=> '網站管理員',

	'SMILIES_ARROW'					=> '箭頭',
	'SMILIES_CONFUSED'				=> '疑惑',
	'SMILIES_COOL'					=> '酷！',
	'SMILIES_CRYING'				=> '哭泣或非常傷心',
	'SMILIES_EMARRASSED'			=> '困窘',
	'SMILIES_EVIL'					=> '邪惡或瘋狂',
	'SMILIES_EXCLAMATION'			=> '感歎',
	'SMILIES_GEEK'					=> '滑稽',
	'SMILIES_IDEA'					=> '想法',
	'SMILIES_LAUGHING'				=> '大笑',
	'SMILIES_MAD'					=> '抓狂',
	'SMILIES_MR_GREEN'				=> '綠先生',
	'SMILIES_NEUTRAL'				=> '中立',
	'SMILIES_QUESTION'				=> '疑問',
	'SMILIES_RAZZ'					=> '冷笑',
	'SMILIES_ROLLING_EYES'			=> '轉動的眼睛',
	'SMILIES_SAD'					=> '憂鬱',
	'SMILIES_SHOCKED'				=> '震撼',
	'SMILIES_SMILE'					=> '微笑',
	'SMILIES_SURPRISED'				=> '驚訝',
	'SMILIES_TWISTED_EVIL'			=> '扭曲的惡魔',
	'SMILIES_UBER_GEEK'				=> '搞笑',
	'SMILIES_VERY_HAPPY'			=> '特開心',
	'SMILIES_WINK'					=> '眨眼',

	'TOPICS_TOPIC_TITLE'			=> '歡迎來到phpBB3',
));

?>