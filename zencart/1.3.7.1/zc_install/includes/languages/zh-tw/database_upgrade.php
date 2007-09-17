<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_upgrade.php 3447 2006-04-17 20:10:18Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('PAGE_HEADING', 'Zen Cart&trade; 安裝 - 資料庫升級');
  define('UPDATE_DATABASE_NOW', '現在升級資料庫');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '<em>警告：</em> 這個程式只能夠用來升級您下面版本的 Zen Cart 資料庫結構<span class="emphasis"><strong>我們強烈建議您在升級前做一個完整的資料庫備份。</strong></span>');
  define('TEXT_MAIN_2', '<span class="emphasis">請小心檢查下面細節</span>，這些資訊來自您的 configure.php 。<br />如果您確定它們有問題，請不要繼續進行，這可能會造成資料庫的毀損。');

  define('DATABASE_INFORMATION', '資料庫資訊');
  define('DATABASE_TYPE', '資料庫類型');
  define('DATABASE_HOST', '資料庫主機');
  define('DATABASE_USERNAME', '資料庫帳號');
  define('DATABASE_PASSWORD', '資料庫密碼');
  define('DATABASE_NAME', '資料庫名稱');
  define('DATABASE_PREFIX', '識別字元（資料表前綴）');
  define('DATABASE_PRIVILEGES', '資料庫權限');

  define('SNIFFER_PREDICTS', '<em>升級</em> 偵測：');
  define('CHOOSE_UPGRADES', '請確認您的升級步驟');
  define('TITLE_DATABASE_PREFIX_CHANGE', '修改資料表前綴');
  define('ERROR_PREFIX_CHANGE_NEEDED', '<span class="errors">我們無法找到正確的資料表<br />也許是資料表前綴有誤？</span><br />如果修改資料表前綴無髮姐決問題，您也許需要手動比對設定檔案與實際的資料庫有沒有差異，也或者透過 phpMyAdmin 或您的網頁伺服器控制介面。');
  define('TEXT_DATABASE_PREFIX_CHANGE', '如果您希望修改資料表前綴，請在下面輸入新的前綴。<span class="emphasis">注意：請確認資料表前綴並非使用中</span>，因為程式並不會檢查這樣的重複情形，使用已經存在的前綴會破壞您的資料庫。');
  define('TEXT_DATABASE_PREFIX_CHANGE_WARNING', '<span class="errors"><strong>警告：在建立一個完整的備份之前請不要嘗試修改資料表前綴，如果過程有錯誤產生，您會需要還原備份資料；如果這是個顧慮或是您並不確定狀況，請不要嘗試修改資料表名稱。</strong></span>');
  define('DATABASE_OLD_PREFIX', '原有資料表前綴');
  define('DATABASE_OLD_PREFIX_INSTRUCTION', '輸入原有資料表前綴');
  define('ENTRY_NEW_PREFIX', '新資料表前綴');
  define('DATABASE_NEW_PREFIX_INSTRUCTION', '輸入新資料表前綴');
  define('ENTRY_ADMIN_ID', '管理者帳號（購物車）');
  define('ENTRY_ADMIN_PASSWORD', '密碼');
  define('ADMIN_PASSSWORD_INSTRUCTION', '調整資料庫需要管理者帳號/密碼（用來管理購物車的）<em>（這並不是 MySQL 密碼）</em>');
  define('TITLE_SECURITY', '資料庫安全');

  define('UPDATE_DATABASE_WARNING_DO_NOT_INTERRUPT', '<span class="emphasis">在點選下面按鈕後，不要中斷，請耐心等候升級程序。</span>');
  define('SKIP_UPDATES', '更新完成');


  define('REASON_TABLE_ALREADY_EXISTS', '無法建立資料表 %s ，因為它已經存在。');
  define('REASON_TABLE_DOESNT_EXIST', '無法移除資料表 %s ，因為它不存在。');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS', '無法加入 configuration_key "%s"，因為它已經存在。');
  define('REASON_COLUMN_ALREADY_EXISTS', '無法新增欄位 %s，因為它已經存在。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP', '無法移除欄位 %s，因為它不存在。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE', '無法修改欄位 %s，因為它不存在。');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS', '無法加入 prod-type-layout configuration_key "%s"，因為它已經存在。');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP', '無法移除索引 %s 於資料表 %s，因為它不存在。');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP', '無法移除主鍵於資料表 %s，因為它不存在。');
  define('REASON_INDEX_ALREADY_EXISTS', '無法加入索引 %s 於資料表 %s，因為它已經存在。');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS', '無法加入主鍵於資料表 %s，因為它已經存在。');
  define('REASON_NO_PRIVILEGES', '使用者 %s@%s 沒有資料庫的 %s 權限。');
  define('REASON_CONFIGURATION_GROUP_KEY_ALREADY_EXISTS', '無法加入 configuration_group_title %s，因為它已經存在。');
  define('REASON_CONFIGURATION_GROUP_ID_ALREADY_EXISTS', '無法加入 configuration_group_id %s，因為它已經存在。');

?>