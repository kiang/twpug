<?php

  /*********************************************************************************
  * File generated by the Sugar Translation Suite (Contributor : www.grupa-atlantis.pl)
  *********************************************************************************/
  /*********************************************************************************
  * $Header: modules/UpgradeWizard/language/zh-tw.lang.php, 1 Mon 03/03/08 16:17:38 
  * Description : http://twpug.net.
  * Contributor(s): Finjon Kiang
  *********************************************************************************/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array ( 
   'DESC_MODULES_INSTALLED' => '安裝了下面模組：' ,
   'DESC_MODULES_QUEUED' => '在本機上找到要升級的模組：' ,
   'ERR_UW_CANNOT_DETERMINE_GROUP' => '無法偵測群組' ,
   'ERR_UW_CANNOT_DETERMINE_USER' => '無法偵測擁有者' ,
   'ERR_UW_CONFIG_WRITE' => '更新 config.php 版本資訊時發生錯誤。' ,
   'ERR_UW_CONFIG' => '請確認檔案 config.php 可以寫入，然後重新讀取這個頁面。' ,
   'ERR_UW_DIR_NOT_WRITABLE' => '資料夾無法寫入' ,
   'ERR_UW_FILE_NOT_COPIED' => '檔案沒有複製' ,
   'ERR_UW_FILE_NOT_DELETED' => '移除包裝時發生錯誤' ,
   'ERR_UW_FILE_NOT_READABLE' => '檔案無法讀取。' ,
   'ERR_UW_FILE_NOT_WRITABLE' => '檔案無法移動或寫入到' ,
   'ERR_UW_FLAVOR_2' => '升級特色：' ,
   'ERR_UW_FLAVOR' => 'SugarCRM 系統特色：' ,
   'ERR_UW_LOG_FILE_UNWRITABLE' => '無法建立或寫入 ./upgradeWizard.log ，請檢查 SugarCRM 的資料夾。' ,
   'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload 設定值大於 1，請修改 php.ini 的設定後重新啟動網頁伺服器。' ,
   'ERR_UW_MYSQL_VERSION' => 'SugarCRM 需要 MySQL 4.1.2 或更新版本，目前為：' ,
   'ERR_UW_NO_FILE_UPLOADED' => '請指定一個檔案後重試！<br>n' ,
   'ERR_UW_NO_FILES' => '找不到要檢查的檔案，發生錯誤。' ,
   'ERR_UW_NO_MANIFEST' => '壓縮檔案中缺少 manifest.php 檔案，無法處理。' ,
   'ERR_UW_NO_VIEW' => '指定的檢視有誤。' ,
   'ERR_UW_NO_VIEW2' => '檢視尚未定義，請到管理區首頁後來導覽這個頁面。' ,
   'ERR_UW_NOT_VALID_UPLOAD' => '上傳失敗。' ,
   'ERR_UW_NO_CREATE_TMP_DIR' => '無法建立暫存資料夾，請檢查檔案權限。' ,
   'ERR_UW_ONLY_PATCHES' => '在這個頁面您只能夠上傳修補程式。' ,
   'ERR_UW_PREFLIGHT_ERRORS' => '事前檢查時發現錯誤' ,
   'ERR_UW_UPLOAD_ERR' => '上傳檔案時發生錯誤，請重試！<br>n' ,
   'ERR_UW_VERSION' => 'SugarCRM 系統版本：' ,
   'ERR_UW_WRONG_TYPE' => '這個頁面不是為了執行' ,
   '1' => '上傳的檔案超過了 php.ini 中的 upload_max_filesize 設定' ,
   '2' => '上傳的檔案超過了表單中指定的 MAX_FILE_SIZE' ,
   '3' => '上傳的檔案不完整。' ,
   '4' => '沒有檔案上傳' ,
   '5' => '不知名的錯誤' ,
   '6' => '遺失一個暫存資料夾。' ,
   '7' => '寫入檔案時發生錯誤。' ,
   '8' => '檔案上傳被外掛阻擋。' ,
   'LBL_BUTTON_BACK' => '上頁' ,
   'LBL_BUTTON_CANCEL' => '取消' ,
   'LBL_BUTTON_DELETE' => '刪除包裝' ,
   'LBL_BUTTON_DONE' => '完成' ,
   'LBL_BUTTON_INSTALL' => '升級前測試' ,
   'LBL_BUTTON_NEXT' => '下一個' ,
   'LBL_BUTTON_RECHECK' => '重新檢查' ,
   'LBL_UPLOAD_UPGRADE' => '上傳更新：' ,
   'LBL_UW_BACKUP_FILES_EXIST_TITLE' => '檔案備份' ,
   'LBL_UW_BACKUP_FILES_EXIST' => '這次升級的備份檔案不存在於' ,
   'LBL_UW_BACKUP' => '檔案備份' ,
   'LBL_UW_CANCEL_DESC' => '升級精靈取消了，所有暫存檔案與上傳的壓縮檔都刪除了。<br><br>點選 下一頁 來重新開始升級精靈。' ,
   'LBL_UW_CHARSET_SCHEMA_CHANGE' => '字元集結構異動' ,
   'LBL_UW_CHECK_ALL' => '全選' ,
   'LBL_UW_CHECKLIST' => '升級步驟' ,
   'LBL_UW_COMMIT_ADD_TASK_DESC_1' => '被覆蓋的檔案備份到下面資料夾：' ,
   'LBL_UW_COMMIT_ADD_TASK_DESC_2' => '手動合併下面檔案：' ,
   'LBL_UW_COMMIT_ADD_TASK_NAME' => '升級處理：手動合併檔案' ,
   'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => '請使用熟悉的版本比對工具來合併這些檔案，在這些步驟完成前，SugarCRM 的狀態都還不是很穩定，升級還沒完成。' ,
   'LBL_UW_COMPLETE' => '完成' ,
   'LBL_UW_CONTINUE_CONFIRMATION' => '這個新版本包含了新的授權方式，您是否要繼續？' ,
   'LBL_UW_COMPLIANCE_ALL_OK' => '所有系統設定需求都符合' ,
   'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP 設定： Call Time Pass By Reference' ,
   'LBL_UW_COMPLIANCE_CURL' => 'cURL 模組' ,
   'LBL_UW_COMPLIANCE_IMAP' => 'IMAP 模組' ,
   'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings 模組' ,
   'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload 參數' ,
   'LBL_UW_COMPLIANCE_MEMORY' => 'PHP 設定： Memory Limit' ,
   'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'MS SQL 伺服器與 PHP Magic Quotes GPC' ,
   'LBL_UW_COMPLIANCE_MYSQL' => 'MySQL 版本下限' ,
   'LBL_UW_COMPLIANCE_PHP_INI' => 'php.ini 的位置' ,
   'LBL_UW_COMPLIANCE_PHP_VERSION' => 'PHP 版本下限' ,
   'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP 設定： 安全模式' ,
   'LBL_UW_COMPLIANCE_TITLE' => '檢查伺服器設定' ,
   'LBL_UW_COMPLIANCE_TITLE2' => '偵測到的設定' ,
   'LBL_UW_COMPLIANCE_XML' => 'XML 解析' ,
   'LBL_UW_COPIED_FILES_TITLE' => '檔案複製成功' ,
   'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => '自訂資料表結構異動' ,
   'LBL_UW_DB_CHOICE1' => '升級精靈執行 SQL' ,
   'LBL_UW_DB_CHOICE2' => '手訂執行 SQL ' ,
   'LBL_UW_DB_INSERT_FAILED' => 'INSERT 失敗，比對結果不同於' ,
   'LBL_UW_DB_ISSUES_PERMS' => '資料庫權限' ,
   'LBL_UW_DB_ISSUES' => '資料庫問題' ,
   'LBL_UW_DB_METHOD' => '資料庫更新方式' ,
   'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]' ,
   'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]' ,
   'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]' ,
   'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]' ,
   'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]' ,
   'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]' ,
   'LBL_UW_DB_NO_ERRORS' => '所有可用權限' ,
   'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]' ,
   'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]' ,
   'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]' ,
   'LBL_UW_DB_PERMS' => '必要權限' ,
   'LBL_UW_DESC_MODULES_INSTALLED' => '升級了下面模組：' ,
   'LBL_UW_END_DESC' => '恭喜，您的系統已經升級了。' ,
   'LBL_UW_END_DESC2' => '如果您選擇手動執行任何步驟，像是檔案合併或資料庫查詢，請現在執行。系統升級操作必須包含這些步驟才能夠完成。' ,
   'LBL_UW_END_LOGOUT' => '如果您計畫升級到超過這個修補、升級層級，請登出。' ,
   'LBL_UW_END_LOGOUT2' => '退出' ,
   'LBL_UW_REPAIR_INDEX' => '為了資料庫效能，請執行 <a href="index.php?module=Administration&action=RepairIndex" target="_blank">修護索引</a> 程式。' ,
   'LBL_UW_FILE_DELETED' => ' 移除了。<br>' ,
   'LBL_UW_FILE_GROUP' => '群組' ,
   'LBL_UW_FILE_ISSUES_PERMS' => '檔案權限' ,
   'LBL_UW_FILE_ISSUES' => '檔案問題' ,
   'LBL_UW_FILE_NEEDS_DIFF' => '檔案需要手動比對' ,
   'LBL_UW_FILE_NO_ERRORS' => '<b>所有檔案可以寫入</b>' ,
   'LBL_UW_FILE_OWNER' => '擁有者' ,
   'LBL_UW_FILE_PERMS' => '權限' ,
   'LBL_UW_FILE_UPLOADED' => ' 已經上傳了' ,
   'LBL_UW_FILE' => '檔案名稱' ,
   'LBL_UW_FILES_QUEUED' => '下面升級程式已經準備好要安裝：' ,
   'LBL_UW_FILES_REMOVED' => '下面檔案將會從系統中移除：<br>' ,
   'LBL_UW_FROZEN' => '在繼續前必須先完成必要步驟。' ,
   'LBL_UW_HIDE_DETAILS' => '隱藏細節' ,
   'LBL_UW_IN_PROGRESS' => '處理之中' ,
   'LBL_UW_INCLUDING' => '包含' ,
   'LBL_UW_INCOMPLETE' => '失敗' ,
   'LBL_UW_INSTALL' => '檔案安裝' ,
   'LBL_UW_MANUAL_MERGE' => '檔案合併' ,
   'LBL_UW_MODULE_READY_UNINSTALL' => '模組已經準備好要移除，點選 "Commit" 來處理。<br>' ,
   'LBL_UW_MODULE_READY' => '模組已經準備好要安裝，點選 "Commit" 來處理。' ,
   'LBL_UW_NO_INSTALLED_UPGRADES' => '沒有找到升級紀錄。' ,
   'LBL_UW_NONE' => '無' ,
   'LBL_UW_NOT_AVAILABLE' => '無法使用' ,
   'LBL_UW_OVERWRITE_DESC' => '所有異動的檔案會被覆蓋，包含已經自行調整的程式或畫面，您確定要繼續？' ,
   'LBL_UW_OVERWRITE_FILES_CHOICE1' => '覆蓋所有檔案' ,
   'LBL_UW_OVERWRITE_FILES_CHOICE2' => '手動合併 - 全部保留' ,
   'LBL_UW_OVERWRITE_FILES' => '合併方式' ,
   'LBL_UW_PATCH_READY' => '這個修補程式已經準備好要處理，點選下面的 "Commit" 按鈕來完成升級操作。' ,
   'LBL_UW_PATCH_READY2' => '<h2>注意：發現自訂版面配置</h2><br />透過系統管理下面檔案會套用新的欄位或畫面配置，您要使用的修補程式會異動這些檔案。這些檔案您可以：<br><ul><li>[<b>預設</b>] 保留您的版本並且取消項目勾選，修補程式中的異動會略過。</li>或<li>勾選項目來更新檔案，您的畫面配置需要透過作業區重新套用。</li></ul>' ,
   'LBL_UW_PREFLIGHT_ADD_TASK' => '為手動合併建立任務項目？' ,
   'LBL_UW_PREFLIGHT_COMPLETE' => '事先檢查' ,
   'LBL_UW_PREFLIGHT_DIFF' => '差異' ,
   'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => '提醒自己進行手動合併？' ,
   'LBL_UW_PREFLIGHT_FILES_DESC' => '下面的檔案有過異動，要取消項目就必須手動進行合併。<i>偵測到的畫面差異會自動取消，勾選希望覆蓋的項目。' ,
   'LBL_UW_PREFLIGHT_NO_DIFFS' => '沒有需要手動合併的檔案。' ,
   'LBL_UW_PREFLIGHT_NOT_NEEDED' => '不需要' ,
   'LBL_UW_PREFLIGHT_PRESERVE_FILES' => '自動保留的檔案：' ,
   'LBL_UW_PREFLIGHT_TESTS_PASSED' => '所有測試都完成了，點選下一步來套用這些異動。' ,
   'LBL_UW_PREFLIGHT_TOGGLE_ALL' => '勾選所有檔案' ,
   'LBL_UW_REBUILD_TITLE' => '重建結果' ,
   'LBL_UW_SCHEMA_CHANGE' => '結構異動' ,
   'LBL_UW_SHOW_COMPLIANCE' => '顯示自動偵測的設定' ,
   'LBL_UW_SHOW_DB_PERMS' => '顯示缺少的資料庫權限' ,
   'LBL_UW_SHOW_DETAILS' => '顯示細節' ,
   'LBL_UW_SHOW_DIFFS' => '顯示需要手動合併的檔案' ,
   'LBL_UW_SHOW_NW_FILES' => '顯示權限需要調整的檔案' ,
   'LBL_UW_SHOW_SCHEMA' => '顯示結構異動指令' ,
   'LBL_UW_SHOW_SQL_ERRORS' => '顯示錯誤的查詢' ,
   'LBL_UW_SHOW' => '顯示' ,
   'LBL_UW_SKIPPED_FILES_TITLE' => '略過的檔案' ,
   'LBL_UW_SKIPPING_FILE_OVERWRITE' => '略過覆蓋檔案 - 手動合併選擇項目。' ,
   'LBL_UW_SQL_RUN' => '在手動執行 SQL 後進行檢查' ,
   'LBL_UW_START_DESC' => '歡迎使用 SugarCRM 升級精靈，請跟著步驟小心操作。' ,
   'LBL_UW_START_DESC2' => '這個升級程式目前還在測試中，千萬不要用來升級正式運作的系統。' ,
   'LBL_UW_START_UPGRADED_UW_DESC' => '新的升級精靈現在會繼續升級操作，建議只在測試環境操作。<b>不要在正式運作的系統安裝這個升級程式。</b>' ,
   'LBL_UW_START_UPGRADED_UW_TITLE' => '歡迎使用新的升級精靈' ,
   'LBL_UW_SYSTEM_CHECK_CHECKING' => '檢查中，請稍後；也許需要 30 秒左右。' ,
   'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => '找尋需要檢查的檔案。' ,
   'LBL_UW_SYSTEM_CHECK_FILES' => '個檔案' ,
   'LBL_UW_SYSTEM_CHECK_FOUND' => '找到' ,
   'LBL_UW_TITLE_CANCEL' => '取消' ,
   'LBL_UW_TITLE_COMMIT' => '開始升級' ,
   'LBL_UW_TITLE_END' => '結果' ,
   'LBL_UW_TITLE_PREFLIGHT' => '事先檢查' ,
   'LBL_UW_TITLE_START' => '開始' ,
   'LBL_UW_TITLE_SYSTEM_CHECK' => '系統檢查' ,
   'LBL_UW_TITLE_UPLOAD' => '上傳升級程式' ,
   'LBL_UW_TITLE' => '升級精靈' ,
   'LBL_UW_UNINSTALL' => '反安裝' ,
   'LBL_UW_ACCEPT_THE_LICENSE' => '接受授權' ,
   'LBL_UW_CONVERT_THE_LICENSE' => '轉換授權' ,
   'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES' => '升級/自訂的模組' ,
   'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED' => '下面模組偵測為自訂的並且保留' ,
   'LBL_UW_FOLLOWING_MODULES_UPGRADED' => '下面模組偵測為自訂的系統管理項目並且需要升級' ,
   'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE' => 'Sugar Community Edition 5.0 使用 GNU General Public License Version 3，這個升級將會轉換您現有的授權到下面顯示的項目。' ,
   'LBL_START_UPGRADE_IN_PROGRESS' => '開始處理中' ,
   'LBL_SYSTEM_CHECKS_IN_PROGRESS' => '系統檢查處理中' ,
   'LBL_LICENSE_CHECK_IN_PROGRESS' => '授權檢查處理中' ,
   'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => '操作前檢查處理中' ,
   'LBL_COMMIT_UPGRADE_IN_PROGRESS' => '進行升級處理中' ,
   'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => '更新摘要處理中' ,
   'LBL_UPGRADE_IN_PROGRESS' => '處理中 ' ,
   'LBL_UPGRADE_TIME_ELAPSED' => '使用時間' ,
   'LBL_UPGRADE_CANCEL_IN_PROGRESS' => '升級取消了，清除操作處理中' ,
   'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => '升級需要一點時間' ,
   'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => '上傳檔案檢查處理中' ,
   'LBL_UPLOADING_UPGRADE_PACKAGE' => '升級包裝上傳中 ' ,
   'LBL_UW_DORP_THE_OLD_SCHMEA' => '您是否要移除舊有的 451 資料表？' ,
   'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => '升級精靈移除舊有的 451 資料表' ,
   'LBL_UW_DROP_SCHEMA_MANUAL' => '升級完成後手動移除資料表' ,
   'LBL_UW_DROP_SCHEMA_METHOD' => '移除舊資料表方法' ,
   'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => '顯示可以被移除的舊資料表' );


