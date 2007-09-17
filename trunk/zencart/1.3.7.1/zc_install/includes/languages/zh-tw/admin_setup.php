<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_setup.php 2342 2005-11-13 01:07:55Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', '安裝 Zen Cart&trade;  - 設定管理者帳號');
  define('SAVE_ADMIN_SETTINGS', '儲存管理設定');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '要管理 Zen Cart&trade; 中的設定，您需要一個管理者帳號，請選擇一個管理者名稱、密碼與用來重設密碼的電子信箱。小心輸入與檢查後點選<em>".SAVE_ADMIN_SETTINGS.\'</em> 。');
  define('ADMIN_INFORMATION', '管理者資訊');
  define('ADMIN_USERNAME', '管理者帳號');
  define('ADMIN_USERNAME_INSTRUCTION', '輸入 Zen Cart 管理者帳號');
  define('ADMIN_PASS', '管理者密碼');
  define('ADMIN_PASS_INSTRUCTION', '輸入 Zen Cart 管理者密碼');
  define('ADMIN_PASS_CONFIRM', '確認管理者密碼');
  define('ADMIN_PASS_CONFIRM_INSTRUCTION', '確認 Zen Cart 管理者密碼');
  define('ADMIN_EMAIL', '管理者電子信箱');
  define('ADMIN_EMAIL_INSTRUCTION', '輸入 Zen Cart 管理者信箱');
  define('UPGRADE_DETECTION', '升級偵測');
  define('UPGRADE_INSTRUCTION_TITLE', '在登入管理區時偵測 Zen Cart&trade; 更新版本');
  define('UPGRADE_INSTRUCTION_TEXT', '這將會連線 Zen Cart&trade; 版本伺服器來偵測有沒有新版本推出，如果有，管理區會顯示訊息，但是並不會自動套用任何更新。<br />您可以在 管理->設定->我的商店->檢查更新 調整。');

?>