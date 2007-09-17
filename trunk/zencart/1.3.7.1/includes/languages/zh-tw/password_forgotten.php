<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', '登入');
define('NAVBAR_TITLE_2', '忘記密碼');

define('HEADING_TITLE', '忘記密碼');

define('TEXT_MAIN', '請在下面，輸入您的 email 地址， 我們會經電郵，把新的密碼送給您');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', '錯誤： 我們的紀錄，沒有這 E-Mail 地址，請再嘗試。');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - 新密碼');
define('EMAIL_PASSWORD_REMINDER_BODY', '一個新密碼的請求，提出由 ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . '您的新密碼在 \'' . STORE_NAME . '\' 是：' . "\n\n" . '   %s' . "\n\n當您使用新的密碼登入之後，您可以進入「我的帳戶」區中把它更改。");

define('SUCCESS_PASSWORD_SENT', '完成: 一個新密碼已經送到您的 E-Mail 地址.');
?>