<?php

  /*********************************************************************************
  * File generated by the Sugar Translation Suite (Contributor : www.grupa-atlantis.pl)
  *********************************************************************************/
  /*********************************************************************************
  * $Header: install/language/zh-tw.lang.php, 20080513 Mon 16/06/08 21:46:20 
  * Description : 20080513.
  * Contributor(s): Finjon Kiang
  *********************************************************************************/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array ( 
   'LBL_SYSOPTS_1' => '從下面系統設定選項選擇。' ,
   'LBL_SYSOPTS_2' => '指定一個資料庫類型來進行安裝。' ,
   'LBL_SYSOPTS_CONFIG' => '系統設定' ,
   'LBL_SYSOPTS_DB_TYPE' => '' ,
   'LBL_SYSOPTS_DB' => '資料庫類型選擇' ,
   'LBL_SYSOPTS_DB_TITLE' => '資料庫類型' ,
   'LBL_SYSOPTS_ERRS_TITLE' => '繼續處理前請先修正下面錯誤：' ,
   'DEFAULT_CHARSET' => 'UTF-8' ,
   'ERR_ADMIN_PASS_BLANK' => '管理者密碼不得為空白' ,
   'ERR_CHECKSYS' => '相容性檢查時發現錯誤，為了使用完整功能，請針對下面提到的問題進行必要處理後點選重新檢查按鈕，或是嘗試再次安裝。' ,
   'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference 設定關閉中（請在 php.ini 將它開啟）' ,
   'ERR_CHECKSYS_CURL' => '找不到：排程工具將只能夠執行有限功能。' ,
   'ERR_CHECKSYS_IMAP' => '找不到：郵件相關功能需要使用 IMAP 函式庫，否則無法執行。' ,
   'ERR_CHECKSYS_MSSQL_MQGPC' => '使用 MS SQL 時不能夠啟用 Magic Quotes GPC 功能。' ,
   'ERR_CHECKSYS_MEM_LIMIT_0' => '注意：' ,
   'ERR_CHECKSYS_MEM_LIMIT_1' => '注意： $memory_limit （請設定為' ,
   'ERR_CHECKSYS_MEM_LIMIT_2' => 'M 或更大，在 php.ini 檔案中）' ,
   'ERR_CHECKSYS_MYSQL_VERSION' => '版本至少要 4.1.2 - 目前發現：' ,
   'ERR_CHECKSYS_NO_SESSIONS' => '寫入與讀取連線資訊時發生錯誤，無法繼續安裝。' ,
   'ERR_CHECKSYS_NOT_VALID_DIR' => '不是個正確的資料夾' ,
   'ERR_CHECKSYS_NOT_WRITABLE' => '注意：無法寫入' ,
   'ERR_CHECKSYS_PHP_INVALID_VER' => '錯誤的 PHP 版本：（ ver' ,
   'ERR_CHECKSYS_PHP_UNSUPPORTED' => '不支援的 PHP 版本：（ ver' ,
   'LBL_DB_UNAVAILABLE' => '資料庫無法存取' ,
   'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '找不到支援資料庫的必要程式，請確認您已經安裝了 MySQL、MS SQLServer 或 Oracle 的驅動程式；您也許需要將 php.ini 中關於驅動程式的外掛取消註解，或是重新編譯正確的執行檔案，根據您的 PHP 版本。更多資訊請參考 PHP 手冊上關於資料庫支援的部份。' ,
   'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Sugar 應用程式需要的 XML 解析函式庫不存在，您也許需要將 php.ini 中的外掛項目取消註解，或是重新編譯正確的執行檔案，根據您的 PHP 版本，更多資訊請參考 PHP 手冊。' ,
   'ERR_CHECKSYS_MBSTRING' => 'Sugar 應用程式需要的多位元組字串外掛（mbstring）不存在，一般而言，PHP預設並不會啟用這個模組，在編譯時需要加上 --enable-mbstring 參數來啟用。更多資訊請參考 PHP 手冊上關於 mbstring 支援的部份。' ,
   'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET' => 'session.save_path 沒有設定或是設定到一個不存在的資料夾，也許您需要進行設定或是檢查設定的資料夾是否存在。' ,
   'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE' => 'session.save_path 設定的資料夾無法寫入，請將寫入權限開啟。' ,
   'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => '設定檔案（config）存在但是無法寫入，請透過必要步驟來讓這個檔案可以寫入；依據您使用的作業系統，也許您需要透過 �chmod 755� 來修改權限或是在檔案圖示上點選滑鼠右鍵，在內容視窗中取消 �唯讀� 的選項' ,
   'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => '自訂資料夾（custom）存在但是無法寫入，請透過必要步驟來讓這個檔案可以寫入；依據您使用的作業系統，也許您需要透過 �chmod 755� 來修改權限或是在檔案圖示上點選滑鼠右鍵，在內容視窗中取消 �唯讀� 的選項' ,
   'ERR_CHECKSYS_FILES_NOT_WRITABLE' => '下面檔案或資料夾存在但是無法寫入，請透過必要步驟來讓這個檔案可以寫入；依據您使用的作業系統，也許您需要透過 �chmod 755� 來修改權限或是在檔案圖示上點選滑鼠右鍵，在內容視窗中取消 �唯讀� 的選項' ,
   'ERR_CHECKSYS_SAFE_MODE' => '安全模式啟動中（請在 php.ini 將它關閉）' ,
   'ERR_CHECKSYS_ZLIB' => '找不到：透過 zlib 壓縮可以取得較好的效能。' ,
   'ERR_DB_ADMIN' => '資料庫管理者帳號或密碼有誤（錯誤 ' ,
   'ERR_DB_ADMIN_MSSQL' => '資料庫管理者帳號或密碼有誤，無法連線伺服器：' ,
   'ERR_DB_EXISTS_NOT' => '指定的資料庫不存在' ,
   'ERR_DB_EXISTS_WITH_CONFIG' => '資料庫已經存在且包含設定資料，要在指定資料庫執行安裝，請重新執行安裝程式並且選擇："移除並且重建現有的 SugarCRM 資料表？" 。要升級請透過管理介面的升級精靈進行，請參考相關升級文件。' ,
   'ERR_DB_EXISTS' => '資料庫已經存在，無法使用同樣名稱建立。' ,
   'ERR_DB_EXISTS_PROCEED' => '資料庫已經存在，--<br>您可以點選上一步按鈕選擇一個新資料庫名稱，或是點選下一步繼續，不過 <strong> 所有已存在的資料表將會被移除。</strong>' ,
   'ERR_DB_HOSTNAME' => '必須輸入主機名稱。' ,
   'ERR_DB_INVALID' => '資料庫類型有誤。' ,
   'ERR_DB_LOGIN_FAILURE_MYSQL' => 'SugarCRM 資料庫帳號或密碼有誤（錯誤 ' ,
   'ERR_DB_LOGIN_FAILURE_MSSQL' => 'SugarCRM 資料庫帳號或密碼有誤（錯誤 ' ,
   'ERR_DB_MYSQL_VERSION1' => '不支援 MySQL 版本' ,
   'ERR_DB_MYSQL_VERSION2' => ' ，只能夠使用 MySQL 4.1.x 或更新版本。' ,
   'ERR_DB_NAME' => '必須輸入資料庫名稱' ,
   'ERR_DB_NAME2' => '資料庫名稱不能夠包含 \'\' 、 \'/\' 或 \'.\'。' ,
   'ERR_DB_PASSWORD' => '密碼不符' ,
   'ERR_DB_PRIV_USER' => '必須輸入管理者帳號。' ,
   'ERR_DB_USER_EXISTS' => 'SugarCRM 使用者帳號已經存在，無法以同樣名稱建立。' ,
   'ERR_DB_USER' => '必須輸入 SugarCRM 使用者名稱。' ,
   'ERR_DBCONF_VALIDATION' => '繼續處理前請先修正下面錯誤：' ,
   'ERR_DBCONF_PASSWORD_MISMATCH' => '資料庫帳號密碼不符。' ,
   'ERR_ERROR_GENERAL' => '發生下面錯誤：' ,
   'ERR_LANG_CANNOT_DELETE_FILE' => '無法刪除檔案：' ,
   'ERR_LANG_MISSING_FILE' => '找不到檔案：' ,
   'ERR_LANG_NO_LANG_FILE' => '在 include/language 找不到語言包：' ,
   'ERR_LANG_UPLOAD_1' => '上傳時發生問題，請重試。' ,
   'ERR_LANG_UPLOAD_2' => '語言包必須為 ZIP 壓縮檔。' ,
   'ERR_LANG_UPLOAD_3' => 'PHP 無法移動暫存檔案到升級目錄。' ,
   'ERR_LICENSE_MISSING' => '缺少資料欄位' ,
   'ERR_LICENSE_NOT_FOUND' => '找不到授權檔案！' ,
   'ERR_LOG_DIRECTORY_NOT_EXISTS' => '提供的記錄資料夾不正確。' ,
   'ERR_LOG_DIRECTORY_NOT_WRITABLE' => '提供的記錄資料夾無法寫入。' ,
   'ERR_LOG_DIRECTORY_REQUIRED' => '如果您希望自行指定，請輸入記錄資料夾。' ,
   'ERR_NO_DIRECT_SCRIPT' => '無法直接存取程式。' ,
   'ERR_NO_SINGLE_QUOTE' => '不能使用單引號於' ,
   'ERR_PASSWORD_MISMATCH' => 'SugarCRM 管理者密碼不符。' ,
   'ERR_PERFORM_CONFIG_PHP_1' => '無法寫入 <span class=stop>config.php</span> 檔案。' ,
   'ERR_PERFORM_CONFIG_PHP_2' => '您可以手動透過下面設定資訊建立 config.php 檔案來繼續安裝，不過在進行下個步驟前您必須先完成這個操作。' ,
   'ERR_PERFORM_CONFIG_PHP_3' => ' config.php 檔案是否已經建立？' ,
   'ERR_PERFORM_CONFIG_PHP_4' => '注意：無法寫入 config.php 檔案，請確認是否存在。' ,
   'ERR_PERFORM_HTACCESS_1' => '無法寫入' ,
   'ERR_PERFORM_HTACCESS_2' => '檔案。' ,
   'ERR_PERFORM_HTACCESS_3' => '如果您希望保護記錄檔案，請在資料夾中建立一個 .htaccess 檔案，內容如下：' ,
   'ERR_PERFORM_NO_TCPIP' => '<b>無法連上網路</b> 您可以直接透過 http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register 來註冊 SugarCRM。' ,
   'ERR_SESSION_DIRECTORY_NOT_EXISTS' => '提供的連線資料夾有誤。' ,
   'ERR_SESSION_DIRECTORY' => '提供的連線資料夾無法寫入。' ,
   'ERR_SESSION_PATH' => '如果您希望自行指定，請提供連線資料夾。' ,
   'ERR_SI_NO_CONFIG' => '在根目錄沒有 config_si.php ，或是在 config.php 沒有定義 $sugar_config_si' ,
   'ERR_SITE_GUID' => '如果您希望自行指定，請提供程式代碼。' ,
   'ERR_UPLOAD_MAX_FILESIZE' => '注意：您的 PHP 設定必須調整為允許至少 6 MB 的檔案上傳。' ,
   'LBL_UPLOAD_MAX_FILESIZE_TITLE' => '上傳檔案大小' ,
   'ERR_URL_BLANK' => '網址不能為空白' ,
   'ERR_UW_NO_UPDATE_RECORD' => '無法便是安裝資料' ,
   'ERROR_FLAVOR_INCOMPATIBLE' => '上傳的檔案版本不符：' ,
   'ERROR_LICENSE_EXPIRED' => '錯誤：您的授權到期了' ,
   'ERROR_LICENSE_EXPIRED2' => '天，請前往管理區的授權管理輸入新的授權碼。如果您在三十天內沒有輸入新的授權碼，您將無法登入系統。' ,
   'ERROR_MANIFEST_TYPE' => 'Manifest 檔案必須指定包裝類型。' ,
   'ERROR_PACKAGE_TYPE' => 'Manifest 檔案指定了一個未知的包裝類型。' ,
   'ERROR_VALIDATION_EXPIRED' => '錯誤：您的確認碼到期了' ,
   'ERROR_VALIDATION_EXPIRED2' => ' 天，請前往管理區的授權管理輸入新的確認碼。如果您在三十天內沒有輸入新的確認碼，您將無法登入系統。' ,
   'ERROR_VERSION_INCOMPATIBLE' => '上傳的檔案版本與系統不相容：' ,
   'LBL_BACK' => '上頁' ,
   'LBL_CANCEL' => '取消' ,
   'LBL_ACCEPT' => '接受' ,
   'LBL_CHECKSYS_1' => '為了正確執行 SugarCRM ，請確認下面系統檢查項目都為綠色。如果是紅色，請透過必要步驟來修正。' ,
   'LBL_CHECKSYS_CACHE' => 'cache 資料夾可以寫入' ,
   'LBL_DROP_DB_CONFIRM' => '這個資料庫已經存在，您是否希望繼續操作並且移除目前的資料表？這會清除已經存在的資料。' ,
   'LBL_CHECKSYS_CALL_TIME' => 'PHP Allow Call Time Pass Reference 啟用中' ,
   'LBL_CHECKSYS_COMPONENT' => '元件' ,
   'LBL_CHECKSYS_COMPONENT_OPTIONAL' => '其他元件' ,
   'LBL_CHECKSYS_CONFIG' => '設定檔案 (config.php) 可以寫入' ,
   'LBL_CHECKSYS_CURL' => 'cURL 模組' ,
   'LBL_CHECKSYS_SESSION_SAVE_PATH' => '連線儲存路徑設定' ,
   'LBL_CHECKSYS_CUSTOM' => 'Custom 資料夾可以寫入' ,
   'LBL_CHECKSYS_DATA' => 'Data 資料夾可以寫入' ,
   'LBL_CHECKSYS_IMAP' => 'IMAP 模組' ,
   'LBL_CHECKSYS_MQGPC' => 'Magic Quotes GPC' ,
   'LBL_CHECKSYS_MBSTRING' => 'MB Strings 模組' ,
   'LBL_CHECKSYS_MEM_OK' => '是 （沒有限制）' ,
   'LBL_CHECKSYS_MEM_UNLIMITED' => '是 （無限）' ,
   'LBL_CHECKSYS_MEM' => 'PHP 記憶體限制 >= ' ,
   'LBL_CHECKSYS_MODULE' => 'Modules 資料夾與檔案可以寫入' ,
   'LBL_CHECKSYS_MYSQL_VERSION' => 'MySQL 版本' ,
   'LBL_CHECKSYS_NOT_AVAILABLE' => '無法使用' ,
   'LBL_CHECKSYS_OK' => '是' ,
   'LBL_CHECKSYS_PHP_INI' => '<b>注意：</b> 您的PHP設定檔案 (php.ini) 位於：' ,
   'LBL_CHECKSYS_PHP_OK' => '是 (ver ' ,
   'LBL_CHECKSYS_PHPVER' => 'PHP 版本' ,
   'LBL_CHECKSYS_RECHECK' => '重新檢查' ,
   'LBL_CHECKSYS_SAFE_MODE' => 'PHP 安全模式關閉中' ,
   'LBL_CHECKSYS_SESSION' => '可寫入的連線儲存路徑（' ,
   'LBL_CHECKSYS_STATUS' => '狀態' ,
   'LBL_CHECKSYS_TITLE' => '系統檢查確認' ,
   'LBL_CHECKSYS_VER' => '找到：版本' ,
   'LBL_CHECKSYS_XML' => 'XML 解析' ,
   'LBL_CHECKSYS_ZLIB' => 'ZLIB 壓縮模組' ,
   'LBL_CHECKSYS_FIX_FILES' => '繼續處理前請修正下面檔案或資料夾：' ,
   'LBL_CHECKSYS_FIX_MODULE_FILES' => '在繼續處理前，請先修正下面模組資料夾與檔案：' ,
   'LBL_CLOSE' => '關閉' ,
   'LBL_THREE' => '3' ,
   'LBL_CONFIRM_BE_CREATED' => '建立' ,
   'LBL_CONFIRM_DB_TYPE' => '資料庫類型' ,
   'LBL_CONFIRM_DIRECTIONS' => '請確認下面設定，如果您希望調整，請點選"上一步"；否則就點選"下一步"來開始安裝。' ,
   'LBL_CONFIRM_LICENSE_TITLE' => '授權資訊' ,
   'LBL_CONFIRM_NOT' => '不' ,
   'LBL_CONFIRM_TITLE' => '確認設定' ,
   'LBL_CONFIRM_WILL' => '會' ,
   'LBL_DBCONF_CREATE_DB' => '建立資料庫' ,
   'LBL_DBCONF_CREATE_USER' => '建立使用者' ,
   'LBL_DBCONF_DB_DROP_CREATE_WARN' => '注意：勾選這個項目會清除所有資料' ,
   'LBL_DBCONF_DB_DROP_CREATE' => '移除並且重建現有資料表？' ,
   'LBL_DBCONF_DB_DROP' => '移除資料表' ,
   'LBL_DBCONF_DB_NAME' => '資料庫名稱' ,
   'LBL_DBCONF_DB_PASSWORD' => '資料庫密碼' ,
   'LBL_DBCONF_DB_PASSWORD2' => '再次輸入資料庫密碼' ,
   'LBL_DBCONF_DB_USER' => '資料庫使用者' ,
   'LBL_DBCONF_SUGAR_DB_USER' => '資料庫使用者' ,
   'LBL_DBCONF_DB_ADMIN_USER' => '資料庫管理者帳號' ,
   'LBL_DBCONF_DB_ADMIN_PASSWORD' => '資料庫管理者密碼' ,
   'LBL_DBCONF_DEMO_DATA' => '匯入展示用資料？' ,
   'LBL_DBCONF_DEMO_DATA_TITLE' => '展示資料' ,
   'LBL_DBCONF_HOST_NAME' => '主機名稱' ,
   'LBL_DBCONF_HOST_NAME_MSSQL' => '主機名稱' ,
   'LBL_DBCONF_INSTRUCTIONS' => '請在下面輸入資料庫設定資訊，如果您不確定，建議使用預設值。' ,
   'LBL_DBCONF_MB_DEMO_DATA' => '在展示資料使用多位元編碼？' ,
   'LBL_DBCONFIG_MSG2' => '輸入運行資料庫的伺服器名稱。' ,
   'LBL_DBCONFIG_MSG3' => '輸入一個資料庫名稱。' ,
   'LBL_DBCONFIG_B_MSG1' => '輸入資料庫管理者的帳號、密碼，這個管理者必須有適當的權限來建立與寫入資料庫。' ,
   'LBL_DBCONFIG_SECURITY' => '基於安全理由，您需要排除在資料庫外的一個資料庫管理員，我們可以為您建立這個管理者或是您可以指定自己。' ,
   'LBL_DBCONFIG_AUTO_DD' => '幫我執行' ,
   'LBL_DBCONFIG_PROVIDE_DD' => '提供現有使用者' ,
   'LBL_DBCONFIG_CREATE_DD' => '定義要建立的使用者' ,
   'LBL_DBCONFIG_SAME_DD' => '與管理者相同' ,
   'LBL_MSSQL_FTS' => '全文檢索' ,
   'LBL_MSSQL_FTS_INSTALLED' => '已安裝' ,
   'LBL_MSSQL_FTS_INSTALLED_ERR1' => '沒有安裝全文檢索功能' ,
   'LBL_MSSQL_FTS_INSTALLED_ERR2' => '您還是可以安裝，只是不能夠使用全文檢索功能，除非您重新安裝 SQL Server 並且啟用全文檢索功能。請參考安裝手冊來確認操作細節，或是聯絡管理員。' ,
   'LBL_DBCONF_PRIV_PASS' => '資料庫密碼' ,
   'LBL_DBCONF_PRIV_USER_2' => '上面的資料庫使用者有適當權限？' ,
   'LBL_DBCONF_PRIV_USER_DIRECTIONS' => '適當權限意味著能夠建立資料庫、移除或建立資料表以及建立使用者，這個使用者帳號只會在安裝過程使用，不過您也可以在安裝完後使用同樣的使用者。' ,
   'LBL_DBCONF_PRIV_USER' => '有適當權限的資料庫使用者' ,
   'LBL_DBCONF_TITLE' => '資料庫設定' ,
   'LBL_DBCONF_TITLE_NAME' => '資料庫名稱' ,
   'LBL_DBCONF_TITLE_USER_INFO' => '資料庫使用者資訊' ,
   'LBL_DISABLED_DESCRIPTION_2' => '完成這個異動後請點選開始按鈕來繼續安裝，安裝完成後記得修改 "installer_locked" 設定為 "true"。' ,
   'LBL_DISABLED_DESCRIPTION' => '這個安裝程式只能執行一次，如果您希望再次執行，請開啟 config.php 檔案找到（或新增）一個名為 "installer_locked" 的變數，設定為 "false"，就像這樣：' ,
   'LBL_DISABLED_HELP_1' => '安裝有任何問題請前往' ,
   'LBL_DISABLED_HELP_LNK' => 'http://twpug.net/modules/newbb/viewforum.php?forum=25' ,
   'LBL_DISABLED_HELP_2' => '支援討論區' ,
   'LBL_DISABLED_TITLE_2' => 'SugarCRM 安裝程式已經停用' ,
   'LBL_DISABLED_TITLE' => 'SugarCRM 安裝程式停用中' ,
   'LBL_EMAIL_CHARSET_DESC' => '設定您的環境中經常使用的字集' ,
   'LBL_EMAIL_CHARSET_TITLE' => '外寄郵件設定' ,
   'LBL_EMAIL_CHARSET_CONF' => '外寄郵件字集' ,
   'LBL_HELP' => '幫助' ,
   'LBL_INSTALL' => '安裝' ,
   'LBL_INSTALL_TYPE_TITLE' => '安裝選項' ,
   'LBL_INSTALL_TYPE_SUBTITLE' => '選擇您的安裝類型' ,
   'LBL_INSTALL_TYPE_TYPICAL' => '標準安裝' ,
   'LBL_INSTALL_TYPE_CUSTOM' => '自訂安裝' ,
   'LBL_INSTALL_TYPE_MSG1' => '這個鍵值並非安裝必須，但是一般應用程式功能需要它' ,
   'LBL_INSTALL_TYPE_MSG2' => '安裝所需要的最少資訊，推薦給新使用者。' ,
   'LBL_INSTALL_TYPE_MSG3' => '在安裝過程提供其他選項，大部分選項在安裝後一樣可以透過管理區設定，推薦給進階使用者。' ,
   'LBL_LANG_1' => '如果您希望安裝英文以外的語系，請參考下面步驟；否則請點選下一步繼續。' ,
   'LBL_LANG_BUTTON_COMMIT' => '安裝' ,
   'LBL_LANG_BUTTON_REMOVE' => '移除' ,
   'LBL_LANG_BUTTON_UNINSTALL' => '反安裝' ,
   'LBL_LANG_BUTTON_UPLOAD' => '上傳' ,
   'LBL_LANG_NO_PACKS' => '沒有要顯示的內容' ,
   'LBL_LANG_PACK_INSTALLED' => '已經安裝了下面語言：' ,
   'LBL_LANG_PACK_READY' => '下面語言準備好要安裝：' ,
   'LBL_LANG_SUCCESS' => '語言包上傳成功。' ,
   'LBL_LANG_TITLE' => '語言包' ,
   'LBL_LANG_UPLOAD' => '上傳語言包' ,
   'LBL_LICENSE_ACCEPTANCE' => '授權確認' ,
   'LBL_LICENSE_CHECKING' => '檢查系統相容情況' ,
   'LBL_LICENSE_CHKENV_HEADER' => '檢查環境' ,
   'LBL_LICENSE_CHKDB_HEADER' => '驗證資料庫憑證' ,
   'LBL_LICENSE_CHECK_PASSED' => '通過系統相容性檢查' ,
   'LBL_LICENSE_REDIRECT' => '轉換頁面至' ,
   'LBL_LICENSE_DIRECTIONS' => '如果您有授權資訊，請透過下面欄位輸入。' ,
   'LBL_LICENSE_DOWNLOAD_KEY' => '下載金鑰' ,
   'LBL_LICENSE_EXPIRY' => '到期日' ,
   'LBL_LICENSE_I_ACCEPT' => '接受' ,
   'LBL_LICENSE_NUM_USERS' => '使用者數量' ,
   'LBL_LICENSE_OC_DIRECTIONS' => '請輸入採購的離線使用者數量。' ,
   'LBL_LICENSE_OC_NUM' => '離線使用者授權數量' ,
   'LBL_LICENSE_OC' => '離線使用者授權' ,
   'LBL_LICENSE_PRINTABLE' => '列印檢視' ,
   'LBL_PRINT_SUMM' => '列印摘要' ,
   'LBL_LICENSE_TITLE_2' => 'SugarCRM 授權' ,
   'LBL_LICENSE_TITLE' => '授權資訊' ,
   'LBL_LICENSE_USERS' => '合法授權的使用者' ,
   'LBL_LOCALE_CURRENCY' => '貨幣設定' ,
   'LBL_LOCALE_CURR_DEFAULT' => '預設貨幣' ,
   'LBL_LOCALE_CURR_SYMBOL' => '貨幣符號' ,
   'LBL_LOCALE_CURR_ISO' => '貨幣代碼 (ISO 4217)' ,
   'LBL_LOCALE_CURR_1000S' => '千位數分隔符號' ,
   'LBL_LOCALE_CURR_DECIMAL' => '小數符號' ,
   'LBL_LOCALE_CURR_EXAMPLE' => '範例' ,
   'LBL_LOCALE_CURR_SIG_DIGITS' => '小數位數' ,
   'LBL_LOCALE_DATEF' => '預設日期格式' ,
   'LBL_LOCALE_DESC' => '調整下面區域設定。' ,
   'LBL_LOCALE_EXPORT' => '匯出字集設定（用於 vCard 與 CSV 匯出）' ,
   'LBL_LOCALE_EXPORT_DELIMITER' => '匯出檔案 (.csv) 分隔字元' ,
   'LBL_LOCALE_EXPORT_TITLE' => '匯出設定' ,
   'LBL_LOCALE_LANG' => '預設語言' ,
   'LBL_LOCALE_NAMEF' => '預設名稱格式' ,
   'LBL_LOCALE_NAMEF_DESC' => 's 稱謂<br />f 姓名<br />l 姓氏' ,
   'LBL_LOCALE_NAME_FIRST' => '水扁' ,
   'LBL_LOCALE_NAME_LAST' => '陳' ,
   'LBL_LOCALE_NAME_SALUTATION' => '博士' ,
   'LBL_LOCALE_TIMEF' => '預設時間格式' ,
   'LBL_LOCALE_TITLE' => '區域設定' ,
   'LBL_CUSTOMIZE_LOCALE' => '自訂本地端設定' ,
   'LBL_LOCALE_UI' => '使用者介面' ,
   'LBL_ML_ACTION' => '操作' ,
   'LBL_ML_DESCRIPTION' => '說明' ,
   'LBL_ML_INSTALLED' => '安裝日期' ,
   'LBL_ML_NAME' => '名稱' ,
   'LBL_ML_PUBLISHED' => '發佈日期' ,
   'LBL_ML_TYPE' => '類型' ,
   'LBL_ML_UNINSTALLABLE' => '可移除' ,
   'LBL_ML_VERSION' => '版本' ,
   'LBL_MSSQL' => 'SQL 伺服器' ,
   'LBL_MSSQL2' => 'SQL 伺服器（FreeTDS）' ,
   'LBL_MYSQL' => 'MySQL' ,
   'LBL_NEXT' => '下一個' ,
   'LBL_NO' => 'No' ,
   'LBL_ORACLE' => 'Oracle' ,
   'LBL_PERFORM_ADMIN_PASSWORD' => '設定網站管理員密碼' ,
   'LBL_PERFORM_AUDIT_TABLE' => '審計資料表 / ' ,
   'LBL_PERFORM_CONFIG_PHP' => '建立設定檔案' ,
   'LBL_PERFORM_CREATE_DB_1' => '建立資料庫' ,
   'LBL_PERFORM_CREATE_DB_2' => '於' ,
   'LBL_PERFORM_CREATE_DB_USER' => '建立資料庫使用者與密碼' ,
   'LBL_PERFORM_CREATE_DEFAULT' => '建立預設資料' ,
   'LBL_PERFORM_CREATE_LOCALHOST' => '建立本地端資料庫使用者與密碼' ,
   'LBL_PERFORM_CREATE_RELATIONSHIPS' => '建立資料表關聯' ,
   'LBL_PERFORM_CREATING' => '建立 / ' ,
   'LBL_PERFORM_DEFAULT_REPORTS' => '建立預設報表' ,
   'LBL_PERFORM_DEFAULT_SCHEDULER' => '建立預設排程工作' ,
   'LBL_PERFORM_DEFAULT_SETTINGS' => '插入預設設定' ,
   'LBL_PERFORM_DEFAULT_USERS' => '建立預設使用者' ,
   'LBL_PERFORM_DEMO_DATA' => '匯入展示資料（也許需要一點時間）' ,
   'LBL_PERFORM_DONE' => '完成<br>' ,
   'LBL_PERFORM_DROPPING' => '移除 / ' ,
   'LBL_PERFORM_FINISH' => '完成' ,
   'LBL_PERFORM_LICENSE_SETTINGS' => '更新授權資訊' ,
   'LBL_PERFORM_OUTRO_1' => '安裝' ,
   'LBL_PERFORM_OUTRO_2' => '完成。' ,
   'LBL_PERFORM_OUTRO_3' => '總共時間：' ,
   'LBL_PERFORM_OUTRO_4' => '秒。' ,
   'LBL_PERFORM_OUTRO_5' => '記憶體大概使用' ,
   'LBL_PERFORM_OUTRO_6' => '位元組。' ,
   'LBL_PERFORM_OUTRO_7' => '您的系統已經完成安裝' ,
   'LBL_PERFORM_REL_META' => '關聯後設資料' ,
   'LBL_PERFORM_SUCCESS' => '成功！' ,
   'LBL_PERFORM_TABLES' => '建立應用程式、審計資料表與關聯後設資料' ,
   'LBL_PERFORM_TITLE' => '執行安裝' ,
   'LBL_PRINT' => '列印' ,
   'LBL_REG_CONF_1' => '如果願意，請註冊您的 SugarCRM 。' ,
   'LBL_REG_CONF_2' => '只有名稱與信箱是必填的。' ,
   'LBL_REG_CONF_3' => '感謝您的註冊，點選完成按鈕來開始使用。預設的管理者帳號為 "admin" ，密碼如同您在步驟二的設定。' ,
   'LBL_REG_TITLE' => '註冊' ,
   'LBL_REG_NO_THANKS' => '不要，謝謝' ,
   'LBL_REG_SKIP_THIS_STEP' => '略過這個步驟' ,
   'LBL_REQUIRED' => '* 必填' ,
   'LBL_SITECFG_ADMIN_Name' => '應用程式管理員帳號' ,
   'LBL_SITECFG_ADMIN_PASS_2' => '重新輸入管理者密碼' ,
   'LBL_SITECFG_ADMIN_PASS_WARN' => '注意：這會取代安裝時設定的密碼。' ,
   'LBL_SITECFG_ADMIN_PASS' => '管理者密碼' ,
   'LBL_SITECFG_APP_ID' => '應用程式代碼' ,
   'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => '取代自動產生的應用程式代碼可以避免其他人安裝的程式干擾，如果您安裝在叢集系統，您需要設定一樣的應用程式代碼。' ,
   'LBL_SITECFG_CUSTOM_ID' => '您自己的應用程式代碼' ,
   'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => '取代預設的記錄資料夾，無論放在哪裡，請透過 .htaccess 檔案保護。' ,
   'LBL_SITECFG_CUSTOM_LOG' => '使用自訂記錄資料夾' ,
   'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => '提供一個安全的資料夾來儲存連線資料，避免同一台主機上的其他使用者盜用。' ,
   'LBL_SITECFG_CUSTOM_SESSION' => '使用自訂連線資料夾' ,
   'LBL_SITECFG_DIRECTIONS' => '請在下面輸入您的網站資訊，如果您不確定，建議使用預設值。' ,
   'LBL_SITECFG_FIX_ERRORS' => '請先修正下面問題' ,
   'LBL_SITECFG_LOG_DIR' => '記錄資料夾' ,
   'LBL_SITECFG_SESSION_PATH' => '連線資料夾（必須可以寫入）' ,
   'LBL_SITECFG_SITE_SECURITY' => '進階網站安全' ,
   'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => '勾選後系統會定期檢查版本更新。' ,
   'LBL_SITECFG_SUGAR_UP' => '自動檢查更新？' ,
   'LBL_SITECFG_SUGAR_UPDATES' => '更新設定' ,
   'LBL_SITECFG_TITLE' => '網站設定' ,
   'LBL_SITECFG_TITLE2' => '應用程式選項' ,
   'LBL_SITECFG_SECURITY_TITLE' => '網站安全' ,
   'LBL_SITECFG_URL' => '網址' ,
   'LBL_SITECFG_USE_DEFAULTS' => '使用預設值？' ,
   'LBL_SITECFG_ANONSTATS' => '寄送匿名的使用統計？' ,
   'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '勾選這個項目會寄送匿名的統計資料給開發商。' ,
   'LBL_SITECFG_URL_MSG' => '輸入應用程式的基礎網址，例如使用 localhost 表示只允許從這台機器執行（localhost 表示本機）。' ,
   'LBL_SITECFG_SYS_NAME_MSG' => '輸入系統的名稱，這個名稱會在使用者瀏覽應用程式時顯示在瀏覽器的標題列。' ,
   'LBL_SITECFG_PASSWORD_MSG' => '輸入管理者的密碼。' ,
   'LBL_SYSTEM_CREDS' => '系統憑證' ,
   'LBL_SYSTEM_ENV' => '系統環境' ,
   'LBL_START' => '開始' ,
   'LBL_SHOW_PASS' => '顯示密碼' ,
   'LBL_HIDE_PASS' => '隱藏密碼' ,
   'LBL_HIDDEN' => '<i>（隱藏）</i>' ,
   'LBL_CHOOSE_LANG' => '選擇您的語言' ,
   'LBL_STEP' => '步驟' ,
   'LBL_TITLE_WELCOME' => '歡迎使用 SugarCRM' ,
   'LBL_WELCOME_1' => '這個安裝程式會為您完成必要的設定，整個過程約需十分鐘。' ,
   'LBL_WELCOME_2' => '在安裝上有任何問題請透過 <a href="http://twpug.net/modules/newbb/viewforum.php?forum=25" target="_blank">TWPUG討論區</a>交流。' ,
   'LBL_TITLE_ARE_YOU_READY' => '您準備好要安裝了嗎？' ,
   'REQUIRED_SYS_COMP' => '必要的系統元件' ,
   'REQUIRED_SYS_COMP_MSG' => 'Before you begin, please be sure that you have the supported versions of the following system
                      components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MySQL, SQL Server, Oracle)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the Sugar version that you are installing.<br>' ,
   'REQUIRED_SYS_CHK' => '系統初始化檢查' ,
   'REQUIRED_SYS_CHK_MSG' => 'When you begin the installation process, a system check will be performed on the web server on which the Sugar files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>PHP version</b> – must be compatible
                      with the application</li>
                                        <li><b>Session Variables</b> – must be working properly</li>
                                            <li> <b>MB Strings</b> – must be installed and enabled in php.ini</li>

                      <li> <b>Database Support</b> – must exist for MySQL, SQL
                      Server or Oracle</li>

                      <li> <b>Config.php</b> – must exist and must have the appropriate
                                  permissions to make it writeable</li>
					  <li>The following Sugar files must be writeable:<ul><li><b>/custom</b></li>
<li><b>/cache</b></li>
<li><b>/modules</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation. An error message will be displayed, explaining why your system
                                  did not pass the check.
                                  After making any necessary changes, you can undergo the system
                                  check again to continue the installation.<br>' ,
   'REQUIRED_INSTALLTYPE' => '標準或自訂安裝' ,
   'REQUIRED_INSTALLTYPE_MSG' => 'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the Sugar data <ul><li>Compatible database
                      types: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your Sugar files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the Sugar data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the Sugar database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></li></ul></li>
                      <li> <b>Sugar database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      </p><ul>
                      <li> <b>URL that will be used to access the Sugar instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for Sugar information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the Sugar log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one Sugar instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ' ,
   'LBL_WELCOME_PLEASE_READ_BELOW' => '在開始安裝前請先閱讀下面的重要訊息，這些資訊可以用來確認您是否已經準備好安裝這個程式。' ,
   'LBL_WELCOME_CHOOSE_LANGUAGE' => '選擇您的語言' ,
   'LBL_WELCOME_SETUP_WIZARD' => '安裝精靈' ,
   'LBL_WELCOME_TITLE_WELCOME' => '歡迎使用 SugarCRM' ,
   'LBL_WELCOME_TITLE' => 'SugarCRM 安裝精靈' ,
   'LBL_WIZARD_TITLE' => 'SugarCRM 安裝精靈：步驟' ,
   'LBL_YES' => '是' ,
   'LBL_YES_MULTI' => '是 - 多國語言' ,
   'LBL_OOTB_WORKFLOW' => '處理工作流程任務' ,
   'LBL_OOTB_REPORTS' => '產生預定任務的報表' ,
   'LBL_OOTB_IE' => '檢查收件匣' ,
   'LBL_OOTB_BOUNCE' => '執行活動退信夜間處理' ,
   'LBL_OOTB_CAMPAIGN' => '執行大量活動信件夜間處理' ,
   'LBL_OOTB_PRUNE' => '在每月月初清理資料庫' ,
   'LBL_OOTB_TRACKER' => '清空追蹤資料表' ,
   'LBL_UPDATE_TRACKER_SESSIONS' => '更新 tracker_sessions 資料表' ,
   'LBL_PATCHES_TITLE' => '安裝最新的修補程式' ,
   'LBL_MODULE_TITLE' => '下載與安裝語言包' ,
   'LBL_PATCH_1' => '如果您希望略過這個步驟，請點選下一步按鈕。' ,
   'LBL_PATCH_TITLE' => '系統修補程式' ,
   'LBL_PATCH_READY' => '下面修補程式已經準備好安裝' ,
   'LBL_SESSION_ERR_DESCRIPTION' => 'SugarCRM 仰賴 PHP 連線來儲存重要資訊，您的 PHP 環境沒有正確的設定；比較常見的問題是 session.save_path 沒有設定到一個正確的目錄，請修正您的 php.ini 設定。' ,
   'LBL_SESSION_ERR_TITLE' => 'PHP 連線設定錯誤' ,
   'LBL_SYSTEM_NAME' => '系統名稱' ,
   'LBL_REQUIRED_SYSTEM_NAME' => '系統名稱不能為空白' ,
   'LBL_PATCH_UPLOAD' => '上傳一個修補程式' ,
   'LBL_INCOMPATIBLE_PHP_VERSION' => '需要使用 PHP 5 或更新版本。' ,
   'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php 相容模式啟用，關閉 zend.ze1_compatibility_mode 來繼續處理' );


