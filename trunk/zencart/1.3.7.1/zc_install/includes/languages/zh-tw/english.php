<?php
/**
 * Main English language file for installer *
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 4266 2006-08-25 08:27:53Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('YES', '是');
  define('NO', '否');
  define('REFRESH_BUTTON', '重新檢查');

  // Global entries for the <html> tag
  define('HTML_PARAMS', 'dir="ltr" lang="zh-tw"');

  // charset for web pages and emails
  define('CHARSET', 'UTF-8');

  // META TAG TITLE
  define('META_TAG_TITLE', 'Zen Cart&trade; 安裝精靈');

  define('INSTALLATION_IN_PROGRESS', '安裝進行中...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>注意：發現問題</strong></span>');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>注意：發現問題</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', 'Install Error: Could not connect to the Database');
	define('SHOULD_UPGRADE', 'You should consider upgrading!');
  define('MUST_UPGRADE', 'You need to upgrade this before installing Zen Cart');

  define('UPLOAD_SETTINGS', 'The Maximum upload size supported will be whichever the LOWER of these values:.<br />
<em>upload_max_filesize</em> in php.ini %s <br />
<em>post_max_size</em> in php.ini: %s <br />\' . 

\'You may find some Apache settings that prevent you from uploading files or limit your maximum file size.  
See the Apache documentation for more information.');

  define('TEXT_HELP_LINK', ' more info...');
  define('TEXT_CLOSE_WINDOW', '[關閉視窗]');
  define('STORE_ADDRESS_DEFAULT_VALUE', '商店名稱
住址
國家
電話');

  define('ERROR_TEXT_ADMIN_CONFIGURE', '/admin/includes/configure.php 不存在');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', '/includes/configure.php 不存在');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', 'Physical path is empty');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', 'Physical path is incorrect');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', 'Virtual HTTP is empty');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', 'Virtual HTTPS is empty');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', 'Virtual HTTPS server is empty');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'Database UserName is empty');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // re-using another one, since message is essentially the same.

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'Database Host is empty');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'Database Name is empty'); 
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'SQL Install file does not exist');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', 'Database not supported');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', 'Connection to Database failed');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_DB_CREATE_FAILED', 'Could not create database');
  define('ERROR_CODE_DB_CREATE_FAILED', '29');

  define('ERROR_TEXT_DB_NOTEXIST', 'Database does not exist');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', 'Store name is empty');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', 'Store owner is empty');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', 'Store email address is empty');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', 'Store email address is not valid');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', 'Store address is empty');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', 'Demo product SQL file does not exist');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', 'Admin user name is empty');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', 'Admin email empty');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', 'Admin email is not valid');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', 'Admin password is empty');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', 'Passwords do not match');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'PHP Version is 4.1.2');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'PHP Version not supported');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', 'PHP Version not supported');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'admin configure.php is not writeable');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'store configure.php is not writeable');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'The Session/SQL Cache Directory entry is empty');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'The Session/SQL Cache Directory entry does not exist');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'The Session/SQL Cache Directory entry is not writeable');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_PHPBB_CONFIG_NOTEXIST', 'phpBB config files do not exist');
define('ERROR_CODE_PHPBB_CONFIG_NOTEXIST', '68');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register Globals is ON');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe Mode is ON');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED', 'Cache folder required to use file caching support');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED', 'Could not update all your configure.php files with new prefix');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE', 'Could not rename all tables');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH', 'PHP "session.save_path" is not writable');
define('ERROR_CODE_SESSION_SAVE_PATH', '74');

define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME', 'PHP "magic_quotes_runtime" is active');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME', '75');

define('ERROR_TEXT_DB_VER_UNKNOWN', 'Database Engine version information unknown');
define('ERROR_CODE_DB_VER_UNKNOWN', '76');

define('ERROR_TEXT_DB_MYSQL5', 'MySQL 5 support not fully tested');
define('ERROR_CODE_DB_MYSQL5', '90');

define('ERROR_TEXT_UPLOADS_DISABLED', 'File Uploads are disabled');
define('ERROR_CODE_UPLOADS_DISABLED', '77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED', 'Admin Password required to proceed with upgrade');
define('ERROR_CODE_ADMIN_PWD_REQUIRED', '78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT', 'PHP Session Support is required');
define('ERROR_CODE_PHP_SESSION_SUPPORT', '80');

define('ERROR_TEXT_PHP_AS_CGI', 'PHP running as cgi not recommended unless server is Windows');
define('ERROR_CODE_PHP_AS_CGI', '81');

define('ERROR_TEXT_DISABLE_FUNCTIONS', 'Required PHP functions are disabled on your server');
define('ERROR_CODE_DISABLE_FUNCTIONS', '82');

define('ERROR_TEXT_OPENSSL_WARN', 'OpenSSL is "one" way in which a server can be configured to offer SSL (https:
define(\'ERROR_CODE_OPENSSL_WARN\',\'79');
define('ERROR_CODE_OPENSSL_WARN', '79');

define('ERROR_TEXT_DB_PREFIX_NODOTS', 'Database Table-Prefix may not contain any of these characters: / or \ or . ');
define('ERROR_CODE_DB_PREFIX_NODOTS', '83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART', 'PHP Session.autostart should be disabled.');
define('ERROR_CODE_PHP_SESSION_AUTOSTART', '84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID', 'PHP Session.use_trans_sid should be disabled.');
define('ERROR_CODE_PHP_SESSION_TRANS_SID', '86');
define('ERROR_TEXT_DB_PRIVS', 'Permissions Required for Database User');
define('ERROR_CODE_DB_PRIVS', '87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES', 'Error encountered while writing /includes/configure.php');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES', '88');
define('ERROR_TEXT_GD_SUPPORT', 'GD Support Details');
define('ERROR_CODE_GD_SUPPORT', '89');

define('ERROR_TEXT_OPEN_BASEDIR', 'Could have problems uploading files or doing backups');
define('ERROR_CODE_OPEN_BASEDIR', '92');
define('ERROR_TEXT_CURL_SUPPORT', 'cURL support not detected');
define('ERROR_CODE_CURL_SUPPORT', '93');

$error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('21'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('22'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  
  case ('25'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('64'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('65'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    
  break;
  case ('66'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('67'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('68'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('79'):
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING', 'cURL support not detected');
    define('POPUP_ERROR_TEXT', 'Some 3rd-party payment and shipping modules/gateways require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.');
  break;


}

?>