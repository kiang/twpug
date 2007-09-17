<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: inspect.php 5354 2006-12-23 01:55:47Z drbyte $
 */
/**
 * defining language components for the page
 */
  
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; 安裝 - 系統檢查');
  define('INSTALL_BUTTON', '安裝'); // this comes before TEXT_MAIN
  define('UPGRADE_BUTTON', '升級設定檔案'); // this comes before TEXT_MAIN
  define('DB_UPGRADE_BUTTON', '資料庫升級'); // this comes before TEXT_MAIN
//Button meanings: (to be made into help-text for future version):
// "Install" = make new configure.php files, regardless of existing contents.  Load new database by dropping old tables.
// "Upgrade" = read old configure.php files, and write new ones using new structure. Upgrade database, instead of wiping and new install
// "Database Upgrade" = don't write the configure.php files -- simply jump to the database-upgrade page. Only displayed if detected database version is new enough to not require configure.php file updates.

  define('TEXT_MAIN', 'Take a moment to check whether your webserver supports the features required for Zen Cart&trade; to operate. &nbsp;Please resolve any errors or warnings before continuing. &nbsp;Then click on <em>\'.INSTALL_BUTTON.\'&nbsp;</em> to continue.');
  define('SYSTEM_INSPECTION_RESULTS', '系統檢查結果');
  define('OTHER_INFORMATION', '其他系統資訊（僅供參考）');
  define('OTHER_INFORMATION_DESCRIPTION', 'The following info does not necessarily indicate any problem or configuration issue. It is simply for the sake of displaying it in an easy-to-find location.');

  define('NOT_EXIST', '找不到');
  define('WRITABLE', '可寫入');
  define('UNWRITABLE', '<span class=\'errors\'>無法寫入</span>');
  define('UNKNOWN', '不明');
  define('ON', '啟用');
  define('OFF', '關閉');
  define('OK', '是');

  define('UPGRADE_DETECTION', '可以使用升級模式');
  define('LABEL_PREVIOUS_INSTALL_FOUND', '找到已經安裝的 Zen Cart');
  define('LABEL_PREVIOUS_VERSION_NUMBER', 'Zen Cart 資料庫版本為 %s');
  define('LABEL_PREVIOUS_VERSION_NUMBER_UNKNOWN', '<em>However, the version level of your database cannot be determined, usually resulting from wrong table prefixes, or other database settings mismatches. <br /><br />CAUTION: Only use the Upgrade option if you are sure your configure.php settings are correct.</em>');
  define('LABEL_UPGRADE_VS_INSTALL', '安裝或升級？');
  define('LABEL_INSTALL', '準備好安裝？（這將會移除任何已經存在的資料，您並不是在升級模式！）');

  define('IMAGE_STOP_BEFORE_UPGRADING', '<div class="center"><img src="includes/templates/template_default/images/stop.gif" border="0" alt="WARNING: Be sure to choose the proper option below." /></div>');

  define('LABEL_ACTION_SELECTION_INSTRUCTIONS', '<p class="errors extralarge"><span class="center">NOTE:</span><br />If you are Upgrading, be sure to choose "<span style="text-decoration: underline;">Database Upgrade</span>" below to keep your data.</p><p class="extralarge">If you choose "Install", you will erase all the contents of your database.</p>');

  define('DISPLAY_PHP_INFO', 'PHP 資訊連結：');
  define('VIEW_PHP_INFO_LINK_TEXT', '檢視伺服器的 PHPINFO');
  define('LABEL_WEBSERVER', '網頁伺服器');
  define('LABEL_MYSQL_AVAILABLE', '支援 MySQL');
  define('LABEL_MYSQL_VER', 'MySQL 版本');
  define('LABEL_DB_PRIVS', '資料庫權限');
  define('LABEL_POSTGRES_AVAILABLE', '支援 PostgreSQL');
  define('LABEL_PHP_VER', 'PHP 版本');
  define('LABEL_PHP_OS', 'PHP 環境');
  define('LABEL_REGISTER_GLOBALS', 'Register Globals');
  define('LABEL_SET_TIME_LIMIT', 'PHP Max Execution Time per page');
  define('LABEL_DISABLED_FUNCTIONS', '停用的 PHP Functions');
  define('LABEL_SAFE_MODE', 'PHP 安全模式');
  define('LABEL_CURRENT_CACHE_PATH', '目前的 SQL 快取資料夾');
  define('LABEL_SUGGESTED_CACHE_PATH', '建議的 SQL 快取資料夾');
  define('LABEL_HTTP_HOST', 'HTTP 主機');
  define('LABEL_PATH_TRANLSATED', 'Path_Translated');
  define('LABEL_PHP_API_MODE', 'PHP API Mode');
  define('LABEL_PHP_MODULES', 'PHP Modules Active');
  define('LABEL_PHP_EXT_SESSIONS', 'PHP Sessions Support');
  define('LABEL_PHP_SESSION_AUTOSTART', 'PHP Session.AutoStart');
  define('LABEL_PHP_EXT_SAVE_PATH', 'PHP Session.Save_Path');
  define('LABEL_PHP_EXT_FTP', 'PHP FTP Support');
  define('LABEL_PHP_EXT_CURL', 'PHP cURL Support');
  define('LABEL_PHP_MAG_QT_RUN', 'PHP magic_quotes_runtime setting');
  define('LABEL_PHP_EXT_GD', 'PHP GD Support');
  define('LABEL_GD_VER', 'GD Version');
  define('LABEL_PHP_EXT_OPENSSL', 'PHP OpenSSL Support');
  define('LABEL_PHP_UPLOAD_STATUS', 'PHP Upload Support');
  define('LABEL_PHP_EXT_PFPRO', 'PHP Payflow Pro Support');
  define('LABEL_PHP_EXT_ZLIB', 'PHP ZLIB Compression Support');
  define('LABEL_PHP_SESSION_TRANS_SID', 'PHP session.use_trans_sid');
  define('LABEL_DISK_FREE_SPACE', 'Server Free Disk Space');
  define('LABEL_XML_SUPPORT', 'PHP XML Support');
  define('LABEL_OPEN_BASEDIR', 'PHP open_basedir restrictions');
  define('LABEL_UPLOAD_TMP_DIR', 'PHP Upload TMP dir');
  define('LABEL_SENDMAIL_FROM', 'PHP sendmail \'from\'');
  define('LABEL_SENDMAIL_PATH', 'PHP sendmail path');
  define('LABEL_SMTP_MAIL', 'PHP SMTP destination');
  define('LABEL_GZIP', 'PHP Output Buffering (gzip)');
  define('LABEL_INCLUDE_PATH', 'PHP include_path');

  define('LABEL_CRITICAL', 'Critical Items');
  define('LABEL_RECOMMENDED', 'Recommended Items');
  define('LABEL_OPTIONAL', 'Optional Items');

  define('LABEL_EXPLAIN', '&nbsp;Click here for more info');
  define('LABEL_FOLDER_PERMISSIONS', 'File and Folder Permissions');
  define('LABEL_WRITABLE_FOLDER_INFO', 'In order for many Zen Cart&trade; administrative and day-to-day functions to work properly,
You need to mark several files/folders "Writeable".  The following is a list of folders which need to be "read-write", 
along with recommended CHMOD settings. Please correct these settings before continuing installation. 
Refresh this page in your browser to re-check settings.<br /><br />Some hosts may not allow you to set CHMOD 777, but only 666. Start with the higher setting first, and switch to lower values if required.');


?>