<?php

  /*********************************************************************************
  * File generated by the Sugar Translation Suite (Contributor : www.grupa-atlantis.pl)
  *********************************************************************************/
  /*********************************************************************************
  * $Header: modules/Migration/language/zh-tw.lang.php, 20080506 Tue 06/05/08 22:59:58 
  * Description : 20080506.
  * Contributor(s): Finjon Kiang
  *********************************************************************************/

$mod_strings = array ( 
   'LBL_MIGRATE_INFO' => '輸入升級資料，從 <b><i> 來源版本 </i></b> 升級到 <b><i> 最新版本的vtigerCRM </i></b>' ,
   'LBL_CURRENT_VT_MYSQL_EXIST' => '目前 vtiger 的資料庫存在於' ,
   'LBL_THIS_MACHINE' => '這台機器' ,
   'LBL_DIFFERENT_MACHINE' => '不同機器' ,
   'LBL_CURRENT_VT_MYSQL_PATH' => '目前 vtiger 的資料庫路徑' ,
   'LBL_SOURCE_VT_MYSQL_DUMPFILE' => 'vtiger <b>來源版本</b> 匯出資料的檔案名稱' ,
   'LBL_NOTE_TITLE' => '摘要' ,
   'LBL_NOTES_LIST1' => '如果目前的資料庫是在同一台機器，輸入資料庫路徑（或）輸入匯出資料的檔案名稱。' ,
   'LBL_NOTES_LIST2' => '如果目前的資料庫存在於不同機器，輸入（來源）匯出資料的檔案名稱與完整路徑。' ,
   'LBL_NOTES_DUMP_PROCESS' => '要將資料庫匯出，請參考下面指令：<br><b>mysqldump --user="mysql_username"  --password="mysql-password" -h "hostname"  --port="mysql_port" "database_name" > dump_filename</b><br>新增 <b>SET_FOREIGN_KEY_CHECKS = 0;</b> -- 到檔案開始的地方<br>新增 <b>SET_FOREIGN_KEY_CHECKS = 1;</b> -- 到檔案結束的地方' ,
   'LBL_NOTES_LIST3' => '提供資料庫的路徑，像是 <b>/home/crm/vtigerCRM4_5/mysql</b>' ,
   'LBL_NOTES_LIST4' => '提供匯出資料的檔案路徑，像是 <b>/home/fullpath/4_2_dump.txt</b>' ,
   'LBL_CURRENT_MYSQL_PATH_FOUND' => '找到目前版本的資料庫路徑。' ,
   'LBL_SOURCE_HOST_NAME' => '來源主機名稱：' ,
   'LBL_SOURCE_MYSQL_PORT_NO' => '來源資料庫連接埠：' ,
   'LBL_SOURCE_MYSQL_USER_NAME' => '來源資料庫帳號：' ,
   'LBL_SOURCE_MYSQL_PASSWORD' => '來源資料庫密碼：' ,
   'LBL_SOURCE_DB_NAME' => '來源資料庫名稱：' ,
   'LBL_MIGRATE' => '升級到最新版本' ,
   'LBL_UPGRADE_VTIGER' => '升級 vtiger CRM 資料庫' ,
   'LBL_UPGRADE_FROM_VTIGER_423' => '將資料庫從 vtiger CRM 4.2.3 升級到 5.0.0' ,
   'LBL_SETTINGS' => '設定' ,
   'LBL_STEP' => '步驟' ,
   'LBL_SELECT_SOURCE' => '選擇來源' ,
   'LBL_STEP1_DESC' => '要開始資料庫移轉，您必須指定舊有資料的格式' ,
   'LBL_RADIO_BUTTON1_TEXT' => '我有 vtiger CRM 資料庫系統的權限' ,
   'LBL_RADIO_BUTTON1_DESC' => '這個選項需要主機（資料庫所在）位址與資料庫權限細節，這個方法同時支援本地與遠端系統，細節請參考文件說明。' ,
   'LBL_RADIO_BUTTON2_TEXT' => '我有 vtiger CRM 資料庫備份' ,
   'LBL_RADIO_BUTTON2_DESC' => '這個選項需要有資料庫備份檔案在同一台機器來進行升級，您無法存取不同主機（遠端資料庫伺服器）的備份資料，細節請參考文件說明。' ,
   'LBL_RADIO_BUTTON3_TEXT' => '我有新的資料庫包含 4.2.3 資料' ,
   'LBL_RADIO_BUTTON3_DESC' => '這個選項需要 vtiger CRM 4.2.3 資料庫系統細節，包含伺服器編號、帳號與密碼，您無法存取不同主機（遠端資料庫伺服器）的備份資料。' ,
   'LBL_HOST_DB_ACCESS_DETAILS' => '主機資料庫存取權限' ,
   'LBL_MYSQL_HOST_NAME_IP' => 'MySQL 主機名稱或IP位址：' ,
   'LBL_MYSQL_PORT' => 'MySQL 連接埠編號：' ,
   'LBL_MYSQL_USER_NAME' => 'MySql 帳號：' ,
   'LBL_MYSQL_PASSWORD' => 'MySql 密碼：' ,
   'LBL_DB_NAME' => '資料庫名稱：' ,
   'LBL_LOCATE_DB_DUMP_FILE' => '資料庫備份檔案' ,
   'LBL_DUMP_FILE_LOCATION' => '備份檔案位置：' ,
   'LBL_RADIO_BUTTON3_PROCESS' => '<font color="red">請不要指定 4.2.3 資料庫資訊，這個選項會直接修改指定的資料庫。</font><br />建議您執行下面操作：<ol><li>備份 4.2.3 資料庫</li><li>建立新的資料庫（最好是跟 vtiger 5.0 資料庫在同一台主機）</li><li>匯入 4.2.3 備份資料到新資料庫</li></ol>接著提供新資料庫的權限資料，這個轉換會修改資料庫來符合 5.0 架構，最後需要修改 config.inc.php 檔案中的資料庫名稱設定，例如： $dbconfig["db_name"] = "new db name";' ,
   'LBL_ENTER_MYSQL_SERVER_PATH' => '輸入 MySQL 伺服器路徑' ,
   'LBL_SERVER_PATH_DESC' => 'MySQL 在伺服器的路徑，像是 <b>/home/5beta/vtigerCRM5_beta/mysql/bin</b> 或 <b>c:Program Filesmysqlbin</b>' ,
   'LBL_MYSQL_SERVER_PATH' => 'MySQL 伺服器路徑：' ,
   'LBL_MIGRATE_BUTTON' => '轉換' ,
   'LBL_CANCEL_BUTTON' => '取消' ,
   'LBL_UPGRADE_FROM_VTIGER_5X' => '升級 vtiger CRM 5.x 資料庫到下一個版本' ,
   'LBL_PATCH_OR_MIGRATION' => '您必須指定來源資料庫的版本（修補程式更新或是轉換）' ,
   'ENTER_SOURCE_HOST' => '請輸入來源主機名稱' ,
   'ENTER_SOURCE_MYSQL_PORT' => '請輸入來源 MySql 連接埠' ,
   'ENTER_SOURCE_MYSQL_USER' => '請輸入來源 MySql 帳號' ,
   'ENTER_SOURCE_DATABASE' => '請輸入來源資料庫名稱' ,
   'ENTER_SOURCE_MYSQL_DUMP' => '請輸入正確的 MySql 備份檔' ,
   'ENTER_HOST' => '請輸入主機名稱' ,
   'ENTER_MYSQL_PORT' => '請輸入 MySql 連接埠' ,
   'ENTER_MYSQL_USER' => '請輸入 MySql 帳號' ,
   'ENTER_DATABASE' => '請輸入資料庫名稱' ,
   'SELECT_ANYONE_OPTION' => '請選擇任意項目' ,
   'ENTER_CORRECT_MYSQL_PATH' => '請輸入正確的 MySQL 路徑' );


