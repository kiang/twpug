<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$mod_strings = array (
  'DEFAULT_CHARSET' => 'UTF-8',
  'ERR_ADMIN_PASS_BLANK' => '管理者密碼不得為空白',
  'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference 設定關閉中（請在 php.ini 將它開啟）',
  'ERR_CHECKSYS_CURL' => '找不到：排程工具將只能夠執行有限功能。',
  'ERR_CHECKSYS_IMAP' => '找不到：郵件相關功能需要使用 IMAP 函式庫，否則無法執行。',
  'ERR_CHECKSYS_MSSQL_MQGPC' => '使用 MS SQL 時不能夠啟用 Magic Quotes GPC 功能。',
  'ERR_CHECKSYS_MBSTRING' => '找不到：系統將無法處理多位元編碼，這會影響 UTF-8 編碼以外的信件。',
  'ERR_CHECKSYS_MEM_LIMIT_0' => '注意：',
  'ERR_CHECKSYS_MEM_LIMIT_1' => '注意： $memory_limit （請設定為',
  'ERR_CHECKSYS_MEM_LIMIT_2' => 'M 或更大，在 php.ini 檔案中）',
  'ERR_CHECKSYS_MYSQL_VERSION' => '版本至少要 4.1.2 - 目前發現：',
  'ERR_CHECKSYS_NO_SESSIONS' => '寫入與讀取連線資訊時發生錯誤，無法繼續安裝。',
  'ERR_CHECKSYS_NOT_VALID_DIR' => '不是個正確的資料夾',
  'ERR_CHECKSYS_NOT_WRITABLE' => '注意：無法寫入',
  'ERR_CHECKSYS_PHP_INVALID_VER' => '錯誤的 PHP 版本：（ ver',
  'ERR_CHECKSYS_PHP_UNSUPPORTED' => '不支援的 PHP 版本：（ ver',
  'ERR_CHECKSYS_SAFE_MODE' => '安全模式啟動中（請在 php.ini 將它關閉）',
  'ERR_CHECKSYS_ZLIB' => '找不到：透過 zlib 壓縮可以取得較好的效能。',
  'ERR_DB_ADMIN' => '資料庫管理者帳號或密碼有誤（錯誤 ',
  'ERR_DB_EXISTS_NOT' => '指定的資料庫不存在',
  'ERR_DB_EXISTS_WITH_CONFIG' => '資料庫已經存在且包含設定資料，要在指定資料庫執行安裝，請重新執行安裝程式並且選擇：\"移除並且重建現有的 SugarCRM 資料表？\" 。要升級請透過管理介面的升級精靈進行，請參考相關升級文件。',
  'ERR_DB_EXISTS' => '資料庫已經存在，無法使用同樣名稱建立。',
  'ERR_DB_HOSTNAME' => '必須輸入主機名稱。',
  'ERR_DB_INVALID' => '資料庫類型有誤。',
  'ERR_DB_LOGIN_FAILURE_MYSQL' => 'SugarCRM 資料庫帳號或密碼有誤（錯誤 ',
  'ERR_DB_LOGIN_FAILURE_MSSQL' => 'SugarCRM 資料庫帳號或密碼有誤',
  'ERR_DB_MYSQL_VERSION1' => '不支援 MySQL 版本',
  'ERR_DB_MYSQL_VERSION2' => ' ，只能夠使用 MySQL 4.1.x 或更新版本。',
  'ERR_DB_NAME' => '必須輸入資料庫名稱',
  'ERR_DB_NAME2' => '資料庫名稱不能包含 \"\\\", \"/\", 或 \".\"',
  'ERR_DB_PASSWORD' => '密碼不符',
  'ERR_DB_PRIV_USER' => '必須輸入管理者帳號。',
  'ERR_DB_USER_EXISTS' => 'SugarCRM 使用者帳號已經存在，無法以同樣名稱建立。',
  'ERR_DB_USER' => '必須輸入 SugarCRM 使用者名稱。',
  'ERR_DBCONF_VALIDATION' => '請修正下面錯誤後繼續：',
  'ERR_ERROR_GENERAL' => '發生下面錯誤：',
  'ERR_LANG_CANNOT_DELETE_FILE' => '無法刪除檔案：',
  'ERR_LANG_MISSING_FILE' => '找不到檔案：',
  'ERR_LANG_NO_LANG_FILE' => '在 include/language 找不到語言包：',
  'ERR_LANG_UPLOAD_1' => '上傳時發生問題，請重試。',
  'ERR_LANG_UPLOAD_2' => '語言包必須為 ZIP 壓縮檔。',
  'ERR_LANG_UPLOAD_3' => 'PHP 無法移動暫存檔案到升級目錄。',
  'ERR_LICENSE_MISSING' => '缺少資料欄位',
  'ERR_LICENSE_NOT_FOUND' => '找不到授權檔案！',
  'ERR_LOG_DIRECTORY_NOT_EXISTS' => '提供的記錄資料夾不正確。',
  'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '提供的記錄資料夾無法寫入。',
  'ERR_LOG_DIRECTORY_REQUIRED' => '如果您希望自行指定，請輸入記錄資料夾。',
  'ERR_NO_DIRECT_SCRIPT' => '無法直接存取程式。',
  'ERR_NO_SINGLE_QUOTE' => '不能使用單引號於',
  'ERR_PASSWORD_MISMATCH' => 'SugarCRM 管理者密碼不符。',
  'ERR_PERFORM_CONFIG_PHP_1' => '無法寫入 <span class=stop>config.php</span> 檔案。',
  'ERR_PERFORM_CONFIG_PHP_2' => '您可以手動透過下面設定資訊建立 config.php 檔案來繼續安裝，不過在進行下個步驟前您必須先完成這個操作。',
  'ERR_PERFORM_CONFIG_PHP_3' => ' config.php 檔案是否已經建立？',
  'ERR_PERFORM_CONFIG_PHP_4' => '注意：無法寫入 config.php 檔案，請確認是否存在。',
  'ERR_PERFORM_HTACCESS_1' => '無法寫入',
  'ERR_PERFORM_HTACCESS_2' => '檔案。',
  'ERR_PERFORM_HTACCESS_3' => '如果您希望保護記錄檔案，請在資料夾中建立一個 .htaccess 檔案，內容如下：',
  'ERR_PERFORM_NO_TCPIP' => '<b>無法連上網路</b> 您可以直接透過 http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register 來註冊 SugarCRM。',
  'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '提供的連線資料夾有誤。',
  'ERR_SESSION_DIRECTORY' => '提供的連線資料夾無法寫入。',
  'ERR_SESSION_PATH' => '如果您希望自行指定，請提供連線資料夾。',
  'ERR_SI_NO_CONFIG' => '在根目錄沒有 config_si.php ，或是在 config.php 沒有定義 $sugar_config_si',
  'ERR_SITE_GUID' => '如果您希望自行指定，請提供程式代碼。',
  'ERR_UPLOAD_MAX_FILESIZE' => '注意：您的 PHP 設定必須調整為允許至少 6 MB 的檔案上傳。',
  'ERR_URL_BLANK' => '網址不能為空白',
  'ERR_UW_NO_UPDATE_RECORD' => '無法便是安裝資料',
  'ERROR_FLAVOR_INCOMPATIBLE' => '上傳的檔案版本不符：',
  'ERROR_LICENSE_EXPIRED' => '錯誤：您的授權到期了',
  'ERROR_LICENSE_EXPIRED2' => '天，請前往管理區的授權管理輸入新的授權碼。如果您在三十天內沒有輸入新的授權碼，您將無法登入系統。',
  'ERROR_MANIFEST_TYPE' => 'Manifest 檔案必須指定包裝類型。',
  'ERROR_PACKAGE_TYPE' => 'Manifest 檔案指定了一個未知的包裝類型。',
  'ERROR_VALIDATION_EXPIRED' => '錯誤：您的確認碼到期了',
  'ERROR_VALIDATION_EXPIRED2' => ' 天，請前往管理區的授權管理輸入新的確認碼。如果您在三十天內沒有輸入新的確認碼，您將無法登入系統。',
  'ERROR_VERSION_INCOMPATIBLE' => '上傳的檔案版本與系統不相容：',
  'LBL_BACK' => '上一步',
  'LBL_CHECKSYS_1' => '為了正確執行 SugarCRM ，請確認下面系統檢查項目都為綠色。如果是紅色，請透過必要步驟來修正。',
  'LBL_CHECKSYS_CACHE' => 'cache 資料夾可以寫入',
  'LBL_CHECKSYS_CALL_TIME' => 'PHP Allow Call Time Pass Reference 啟用中',
  'LBL_CHECKSYS_COMPONENT' => '元件',
  'LBL_CHECKSYS_COMPONENT_OPTIONAL' => '其他元件',
  'LBL_CHECKSYS_CONFIG' => '設定檔案 (config.php) 可以寫入',
  'LBL_CHECKSYS_CURL' => 'cURL 模組',
  'LBL_CHECKSYS_CUSTOM' => 'Custom 資料夾可以寫入',
  'LBL_CHECKSYS_DATA' => 'Data 資料夾可以寫入',
  'LBL_CHECKSYS_IMAP' => 'IMAP 模組',
  'LBL_CHECKSYS_MQGPC' => 'Magic Quotes GPC',
  'LBL_CHECKSYS_MBSTRING' => 'MB Strings 模組',
  'LBL_CHECKSYS_MEM_OK' => '是 （沒有限制）',
  'LBL_CHECKSYS_MEM_UNLIMITED' => '是 （無限）',
  'LBL_CHECKSYS_MEM' => 'PHP 記憶體限制 >= ',
  'LBL_CHECKSYS_MODULE' => 'Modules 資料夾與檔案可以寫入',
  'LBL_CHECKSYS_MYSQL_VERSION' => 'MySQL 版本',
  'LBL_CHECKSYS_NOT_AVAILABLE' => '無法使用',
  'LBL_CHECKSYS_OK' => '是',
  'LBL_CHECKSYS_PHP_INI' => '<b>注意：</b> 您的PHP設定檔案 (php.ini) 位於：',
  'LBL_CHECKSYS_PHP_OK' => '是 (ver ',
  'LBL_CHECKSYS_PHPVER' => 'PHP 版本',
  'LBL_CHECKSYS_RECHECK' => '重新檢查',
  'LBL_CHECKSYS_SAFE_MODE' => 'PHP 安全模式關閉中',
  'LBL_CHECKSYS_SESSION' => '可寫入的連線儲存路徑（',
  'LBL_CHECKSYS_STATUS' => '狀態',
  'LBL_CHECKSYS_TITLE' => '系統檢查確認',
  'LBL_CHECKSYS_VER' => '找到：版本',
  'LBL_CHECKSYS_XML' => 'XML 解析',
  'LBL_CHECKSYS_ZLIB' => 'ZLIB 壓縮模組',
  'LBL_CLOSE' => '關閉',
  'LBL_CONFIRM_BE_CREATED' => '建立',
  'LBL_CONFIRM_DB_TYPE' => '資料庫類型',
  'LBL_CONFIRM_DIRECTIONS' => '請確認下面設定，如果您希望調整，請點選\"上一步\"；否則就點選\"下一步\"來開始安裝。',
  'LBL_CONFIRM_LICENSE_TITLE' => '授權資訊',
  'LBL_CONFIRM_NOT' => '不',
  'LBL_CONFIRM_TITLE' => '確認設定',
  'LBL_CONFIRM_WILL' => '會',
  'LBL_DBCONF_CREATE_DB' => '建立資料庫',
  'LBL_DBCONF_CREATE_USER' => '建立使用者',
  'LBL_DBCONF_DB_DROP_CREATE_WARN' => '注意：勾選這個項目會清除所有資料',
  'LBL_DBCONF_DB_DROP_CREATE' => '移除並且重建現有資料表？',
  'LBL_DBCONF_DB_NAME' => '資料庫名稱',
  'LBL_DBCONF_DB_PASSWORD' => '資料庫密碼',
  'LBL_DBCONF_DB_PASSWORD2' => '再次輸入資料庫密碼',
  'LBL_DBCONF_DB_USER' => '資料庫使用者',
  'LBL_DBCONF_DEMO_DATA' => '匯入展示用資料？',
  'LBL_DBCONF_HOST_NAME' => '主機名稱',
  'LBL_DBCONF_INSTRUCTIONS' => '請在下面輸入資料庫設定資訊，如果您不確定，建議使用預設值。',
  'LBL_DBCONF_MB_DEMO_DATA' => '在展示資料使用多位元編碼？',
  'LBL_DBCONF_PRIV_PASS' => '資料庫密碼',
  'LBL_DBCONF_PRIV_USER_2' => '上面的資料庫使用者有適當權限？',
  'LBL_DBCONF_PRIV_USER_DIRECTIONS' => '適當權限意味著能夠建立資料庫、移除或建立資料表以及建立使用者，這個使用者帳號只會在安裝過程使用，不過您也可以在安裝完後使用同樣的使用者。',
  'LBL_DBCONF_PRIV_USER' => '有適當權限的資料庫使用者',
  'LBL_DBCONF_TITLE' => '資料庫設定',
  'LBL_DISABLED_DESCRIPTION_2' => '完成這個異動後請點選開始按鈕來繼續安裝，安裝完成後記得修改 \"installer_locked\" 設定為 \"true\"。',
  'LBL_DISABLED_DESCRIPTION' => '這個安裝程式只能執行一次，如果您希望再次執行，請開啟 config.php 檔案找到（或新增）一個名為 \"installer_locked\" 的變數，設定為 \"false\"，就像這樣：',
  'LBL_DISABLED_HELP_1' => '安裝有任何問題請前往',
  'LBL_DISABLED_HELP_2' => '支援討論區',
  'LBL_DISABLED_TITLE_2' => 'SugarCRM 安裝程式已經停用',
  'LBL_DISABLED_TITLE' => 'SugarCRM 安裝程式停用中',
  'LBL_EMAIL_CHARSET_DESC' => '設定您的環境中經常使用的字集',
  'LBL_EMAIL_CHARSET_TITLE' => '外寄郵件字集',
  'LBL_HELP' => '說明',
  'LBL_LANG_1' => '如果您希望安裝英文以外的語系，請參考下面步驟；否則請點選下一步繼續。',
  'LBL_LANG_BUTTON_COMMIT' => '安裝',
  'LBL_LANG_BUTTON_REMOVE' => '移除',
  'LBL_LANG_BUTTON_UNINSTALL' => '反安裝',
  'LBL_LANG_BUTTON_UPLOAD' => '上傳',
  'LBL_LANG_NO_PACKS' => '無',
  'LBL_LANG_PACK_INSTALLED' => '已經安裝了下面語言：',
  'LBL_LANG_PACK_READY' => '下面語言準備好要安裝：',
  'LBL_LANG_SUCCESS' => '語言包上傳成功。',
  'LBL_LANG_TITLE' => '語言包',
  'LBL_LANG_UPLOAD' => '上傳語言包',
  'LBL_LICENSE_ACCEPTANCE' => '授權確認',
  'LBL_LICENSE_DIRECTIONS' => '如果您有授權資訊，請透過下面欄位輸入。',
  'LBL_LICENSE_DOWNLOAD_KEY' => '下載金鑰',
  'LBL_LICENSE_EXPIRY' => '到期日',
  'LBL_LICENSE_I_ACCEPT' => '我接受',
  'LBL_LICENSE_NUM_USERS' => '使用者數量',
  'LBL_LICENSE_OC_DIRECTIONS' => '請輸入採購的離線使用者數量。',
  'LBL_LICENSE_OC_NUM' => '離線使用者授權數量',
  'LBL_LICENSE_OC' => '離線使用者授權',
  'LBL_LICENSE_PRINTABLE' => '列印檢視',
  'LBL_LICENSE_TITLE_2' => 'SugarCRM 授權',
  'LBL_LICENSE_TITLE' => '授權資訊',
  'LBL_LICENSE_USERS' => '合法授權的使用者',
  'LBL_LOCALE_CURRENCY' => '貨幣設定',
  'LBL_LOCALE_CURR_DEFAULT' => '預設貨幣',
  'LBL_LOCALE_CURR_SYMBOL' => '貨幣符號',
  'LBL_LOCALE_CURR_ISO' => '貨幣代碼 (ISO 4217)',
  'LBL_LOCALE_CURR_1000S' => '千位數分隔符號',
  'LBL_LOCALE_CURR_DECIMAL' => '小數符號',
  'LBL_LOCALE_CURR_EXAMPLE' => '範例',
  'LBL_LOCALE_CURR_SIG_DIGITS' => '小數位數',
  'LBL_LOCALE_DATEF' => '預設日期格式',
  'LBL_LOCALE_DESC' => '調整下面區域設定。',
  'LBL_LOCALE_EXPORT' => '匯出字集設定（用於 vCard 與 CSV 匯出）',
  'LBL_LOCALE_EXPORT_DELIMITER' => '匯出檔案 (.csv) 分隔字元',
  'LBL_LOCALE_EXPORT_TITLE' => '匯出設定',
  'LBL_LOCALE_LANG' => '預設語言',
  'LBL_LOCALE_NAMEF' => '預設名稱格式',
  'LBL_LOCALE_NAMEF_DESC' => '\"s\" 抬頭<br />\"f\" 姓名<br />\"l\" 姓氏',
  'LBL_LOCALE_NAME_FIRST' => '水扁',
  'LBL_LOCALE_NAME_LAST' => '陳',
  'LBL_LOCALE_NAME_SALUTATION' => '總統',
  'LBL_LOCALE_TIMEF' => '預設時間格式',
  'LBL_LOCALE_TITLE' => '區域設定',
  'LBL_LOCALE_UI' => '使用者介面',
  'LBL_ML_ACTION' => '操作',
  'LBL_ML_DESCRIPTION' => '說明',
  'LBL_ML_INSTALLED' => '安裝日期',
  'LBL_ML_NAME' => '名稱',
  'LBL_ML_PUBLISHED' => '發佈日期',
  'LBL_ML_TYPE' => '類型',
  'LBL_ML_UNINSTALLABLE' => '可移除',
  'LBL_ML_VERSION' => '版本',
  'LBL_MSSQL' => 'SQL Server',
  'LBL_MYSQL' => 'MySQL',
  'LBL_NEXT' => '下一步',
  'LBL_NO' => '否',
  'LBL_ORACLE' => 'Oracle',
  'LBL_PERFORM_ADMIN_PASSWORD' => '設定網站管理員密碼',
  'LBL_PERFORM_AUDIT_TABLE' => '審計資料表 / ',
  'LBL_PERFORM_CONFIG_PHP' => '建立設定檔案',
  'LBL_PERFORM_CREATE_DB_1' => '建立資料庫',
  'LBL_PERFORM_CREATE_DB_2' => '於',
  'LBL_PERFORM_CREATE_DB_USER' => '建立資料庫使用者與密碼',
  'LBL_PERFORM_CREATE_DEFAULT' => '建立預設資料',
  'LBL_PERFORM_CREATE_LOCALHOST' => '建立本地端資料庫使用者與密碼',
  'LBL_PERFORM_CREATE_RELATIONSHIPS' => '建立資料表關聯',
  'LBL_PERFORM_CREATING' => '建立 / ',
  'LBL_PERFORM_DEFAULT_REPORTS' => '建立預設報表',
  'LBL_PERFORM_DEFAULT_SCHEDULER' => '建立預設排程工作',
  'LBL_PERFORM_DEFAULT_SETTINGS' => '插入預設設定',
  'LBL_PERFORM_DEFAULT_USERS' => '建立預設使用者',
  'LBL_PERFORM_DEMO_DATA' => '匯入展示資料（也許需要一點時間）',
  'LBL_PERFORM_DONE' => '完成<br>',
  'LBL_PERFORM_DROPPING' => '移除 / ',
  'LBL_PERFORM_FINISH' => '完成',
  'LBL_PERFORM_LICENSE_SETTINGS' => '更新授權資訊',
  'LBL_PERFORM_OUTRO_1' => '安裝',
  'LBL_PERFORM_OUTRO_2' => '完成。',
  'LBL_PERFORM_OUTRO_3' => '總共時間：',
  'LBL_PERFORM_OUTRO_4' => '秒。',
  'LBL_PERFORM_OUTRO_5' => '記憶體大概使用',
  'LBL_PERFORM_OUTRO_6' => '位元組。',
  'LBL_PERFORM_OUTRO_7' => '您的系統已經完成安裝',
  'LBL_PERFORM_REL_META' => '關聯後設資料',
  'LBL_PERFORM_SUCCESS' => '成功！',
  'LBL_PERFORM_TABLES' => '建立應用程式、審計資料表與關聯後設資料',
  'LBL_PERFORM_TITLE' => '執行安裝',
  'LBL_PRINT' => '列印',
  'LBL_REG_CONF_1' => '如果願意，請註冊您的 SugarCRM 。',
  'LBL_REG_CONF_2' => '只有名稱與信箱是必填的。',
  'LBL_REG_CONF_3' => '感謝您的註冊，點選完成按鈕來開始使用。預設的管理者帳號為 \"admin\" ，密碼如同您在步驟二的設定。',
  'LBL_REG_TITLE' => '註冊',
  'LBL_REQUIRED' => '* 必填',
  'LBL_SITECFG_ADMIN_PASS_2' => '重新輸入管理者密碼',
  'LBL_SITECFG_ADMIN_PASS_WARN' => '注意：這會取代安裝時設定的密碼。',
  'LBL_SITECFG_ADMIN_PASS' => '管理者密碼',
  'LBL_SITECFG_APP_ID' => '應用程式代碼',
  'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '取代自動產生的應用程式代碼可以避免其他人安裝的程式干擾，如果您安裝在叢集系統，您需要設定一樣的應用程式代碼。',
  'LBL_SITECFG_CUSTOM_ID' => '您自己的應用程式代碼',
  'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '取代預設的記錄資料夾，無論放在哪裡，請透過 .htaccess 檔案保護。',
  'LBL_SITECFG_CUSTOM_LOG' => '使用自訂記錄資料夾',
  'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '提供一個安全的資料夾來儲存連線資料，避免同一台主機上的其他使用者盜用。',
  'LBL_SITECFG_CUSTOM_SESSION' => '使用自訂連線資料夾',
  'LBL_SITECFG_DIRECTIONS' => '請在下面輸入您的網站資訊，如果您不確定，建議使用預設值。',
  'LBL_SITECFG_FIX_ERRORS' => '請先修正下面問題',
  'LBL_SITECFG_LOG_DIR' => '記錄資料夾',
  'LBL_SITECFG_SESSION_PATH' => '連線資料夾（必須可以寫入）',
  'LBL_SITECFG_SITE_SECURITY' => '進階網站安全',
  'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => '勾選後系統會定期檢查版本更新。',
  'LBL_SITECFG_SUGAR_UP' => '自動檢查更新？',
  'LBL_SITECFG_SUGAR_UPDATES' => '更新設定',
  'LBL_SITECFG_TITLE' => '網站設定',
  'LBL_SITECFG_URL' => '網址',
  'LBL_SITECFG_USE_DEFAULTS' => '使用預設值？',
  'LBL_SITECFG_ANONSTATS' => '寄送匿名的使用統計？',
  'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '勾選這個項目會寄送匿名的統計資料給開發商。',
  'LBL_START' => '開始',
  'LBL_STEP' => '步驟',
  'LBL_TITLE_WELCOME' => '歡迎使用 SugarCRM',
  'LBL_WELCOME_1' => '這個安裝程式會為您完成必要的設定，整個過程約需十分鐘。',
  'LBL_WELCOME_2' => '在安裝上有任何問題請透過 <a href=\"http://twpug.net/modules/newbb/viewforum.php?forum=25\" target=\"_blank\">TWPUG討論區</a>交流。',
  'LBL_WELCOME_CHOOSE_LANGUAGE' => '選擇語言',
  'LBL_WELCOME_SETUP_WIZARD' => '安裝精靈',
  'LBL_WELCOME_TITLE_WELCOME' => '歡迎使用 SugarCRM',
  'LBL_WELCOME_TITLE' => 'SugarCRM 安裝精靈',
  'LBL_WIZARD_TITLE' => 'SugarCRM 安裝精靈：步驟',
  'LBL_YES' => '是',
  'LBL_OOTB_WORKFLOW' => '處理工作流程任務',
  'LBL_OOTB_REPORTS' => '產生預定任務的報表',
  'LBL_OOTB_IE' => '檢查收件匣',
  'LBL_OOTB_BOUNCE' => '執行活動退信夜間處理',
  'LBL_OOTB_CAMPAIGN' => '執行大量活動信件夜間處理',
  'LBL_OOTB_PRUNE' => '在每月月初清理資料庫',
  'LBL_PATCHES_TITLE' => '安裝最新的修補程式',
  'LBL_MODULE_TITLE' => '下載與安裝語言包',
  'LBL_PATCH_1' => '如果您希望略過這個步驟，請點選下一步按鈕。',
  'LBL_PATCH_TITLE' => '系統修補程式',
  'LBL_PATCH_READY' => '下面修補程式已經準備好安裝',
  'LBL_SESSION_ERR_DESCRIPTION' => 'SugarCRM 仰賴 PHP 連線來儲存重要資訊，您的 PHP 環境沒有正確的設定；比較常見的問題是 session.save_path 沒有設定到一個正確的目錄，請修正您的 php.ini 設定。',
  'LBL_SESSION_ERR_TITLE' => 'PHP 連線設定錯誤',
  'LBL_SYSTEM_NAME' => '系統名稱',
  'LBL_SYSTEM_NAME_INFO' => '這將會顯示在標題列',
  'LBL_REQUIRED_SYSTEM_NAME' => '系統名稱不能為空白',
  'LBL_PATCH_UPLOAD' => '上傳一個修補程式',

);
?>