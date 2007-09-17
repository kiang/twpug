<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: database_setup.php 3164 2006-03-11 01:54:17Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_DATABASE_SETTINGS', '儲存資料庫設定');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '接著我們需要一些資料庫設定資訊，請在適當的區塊小心輸入每個設定，接著點選<em>儲存資料庫設定</em> 來繼續。');
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; 安裝 - 資料庫設定');
  define('DATABASE_INFORMATION', '資料庫資訊');
  define('DATABASE_TYPE', '資料庫類型');
  define('DATABASE_TYPE_INSTRUCTION', '請選擇要使用的資料庫類型。');
  define('DATABASE_HOST', '資料庫主機');
  define('DATABASE_HOST_INSTRUCTION', '資料庫主機為何？格式可以是主機名稱，如 db1.myserver.com ；或是 IP 位址，如 192.168.0.1 。');
  define('DATABASE_USERNAME', '資料庫帳號');
  define('DATABASE_USERNAME_INSTRUCTION', '用來連線資料庫的帳號，例如 root 。');
  define('DATABASE_PASSWORD', '資料庫密碼');
  define('DATABASE_PASSWORD_INSTRUCTION', '用來連線資料庫的密碼');
  define('DATABASE_NAME', '資料庫名稱');
  define('DATABASE_NAME_INSTRUCTION', '用來儲存資料的資料庫名稱，例如 zencart 或 myaccount_zencart 。');
  define('DATABASE_PREFIX', '識別字元（資料表前綴）');
  define('DATABASE_PREFIX_INSTRUCTION', '您希望資料表使用什麼前綴，例如 zen_ ；空白表示不需要。<br />使用前綴可以在同一個資料庫中安裝多個商店。');
  define('DATABASE_CREATE', '建立資料庫？');
  define('DATABASE_CREATE_INSTRUCTION', '您是否希望安裝精靈協助您建立資料庫？');
  define('DATABASE_CONNECTION', '持續連線');
  define('DATABASE_CONNECTION_INSTRUCTION', '您是否希望使用持續連線？如果不確定請選擇否。');
  define('DATABASE_SESSION', '資料庫連線');
  define('DATABASE_SESSION_INSTRUCTION', '您是否要將連線資訊儲存在資料庫中？如果不確定請選擇是。');
  define('CACHE_TYPE', 'SQL 快取方式');
  define('CACHE_TYPE_INSTRUCTION', '選擇 SQL 快取的方式。');
  define('SQL_CACHE', '連線/SQL 快取資料夾');
  define('SQL_CACHE_INSTRUCTION', '輸入用來作檔案型快取的資料夾。');
  define('ONLY_UPDATE_CONFIG_FILES', '只更新設定檔');


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

?>