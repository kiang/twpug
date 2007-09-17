<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: system_setup.php 4707 2006-10-08 08:52:12Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_SYSTEM_SETTINGS', '儲存系統設定'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', 'We will now setup the Zen Cart&trade; System environment.  Please carefully review each setting, and change if necessary to suit your directory layout. Then click on <em>".SAVE_SYSTEM_SETTINGS.\'</em> to continue.');
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; 安裝 - 系統設定');
  define('SERVER_SETTINGS', '伺服器設定');
  define('PHYSICAL_PATH', '實體路徑');
  define('PHYSICAL_PATH_INSTRUCTION', 'Physical Path to your<br />Zen Cart directory.<br />Leave no trailing slash.');
  define('VIRTUAL_HTTP_PATH', '虛擬 HTTP 路徑');
  define('VIRTUAL_HTTP_PATH_INSTRUCTION', 'Virtual Path to your<br />Zen Cart directory.<br />Leave no trailing slash.');
  define('VIRTUAL_HTTPS_PATH', '虛擬 HTTPS 路徑');
  define('VIRTUAL_HTTPS_PATH_INSTRUCTION', 'Virtual Path to your<br />secure Zen Cart directory.<br />Leave no trailing slash.');
  define('VIRTUAL_HTTPS_SERVER', '虛擬 HTTPS 伺服器');
  define('VIRTUAL_HTTPS_SERVER_INSTRUCTION', 'Virtual server for your<br />secure Zen Cart directory.<br />Leave no trailing slash.');
  define('ENABLE_SSL', '使用 SSL');
  define('ENABLE_SSL_INSTRUCTION', 'Would you like to enable Secure Sockets Layer in Customer area?<br />Leave this set to NO unless you\'re SURE you have SSL working.');
  define('ENABLE_SSL_ADMIN', '管理區使用 SSL');
  define('ENABLE_SSL_ADMIN_INSTRUCTION', 'Would you like to enable Secure Sockets Layer for Admin areas?<br />
Leave this set to NO unless you\'re SURE you have SSL working.');
  define('REDISCOVER', '重新偵測這個主機的預設值');

?>