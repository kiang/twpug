<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', '推薦給親友');

define('HEADING_TITLE', '推薦給親友關於： \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', '您的詳情');
define('FORM_TITLE_FRIEND_DETAILS', '您親友的詳情');
define('FORM_TITLE_FRIEND_MESSAGE', '您的訊息：');

define('FORM_FIELD_CUSTOMER_NAME', '您的姓名：');
define('FORM_FIELD_CUSTOMER_EMAIL', '您的 E-Mail 地址：');
define('FORM_FIELD_FRIEND_NAME', '您親友的姓名：');
define('FORM_FIELD_FRIEND_EMAIL', '您親友的 E-Mail 地址：');

define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

define('TEXT_EMAIL_SUCCESSFUL_SENT', '您有關 <strong>%s</strong> 的 E-Mail 已經完成發送到 <strong>%s</strong>.');

define('EMAIL_TEXT_HEADER','重要通知！');

define('EMAIL_TEXT_SUBJECT', '您的親友 %s 向您推薦，這優質產品，它在 %s ');
define('EMAIL_TEXT_GREET', '您好  %s ！ ' . "\n\n");
define('EMAIL_TEXT_INTRO', '您的親友, %s, 認為您會對這感到興趣，它是 %s 在 %s.');

define('EMAIL_TELL_A_FRIEND_MESSAGE','%s  發出一個簡訊，內容是：');

define('EMAIL_TEXT_LINK', '要檢視產品，請點按下面的連結，或把這連結，複製和把它貼到，您網頁瀏覽器上的網址列中執行： ' . "\n\n" . '%s');
define('EMAIL_TEXT_SIGNATURE', '誠懇致意' . "\n\n" . '%s');

define('ERROR_TO_NAME', '錯誤： 您親友的姓名不能留空。');
define('ERROR_TO_ADDRESS', '錯誤：您親友的 E-Mail 地址，看來是無效的，請再嘗試。');
define('ERROR_FROM_NAME', '錯誤：您的姓名不能留空。');
define('ERROR_FROM_ADDRESS', '錯誤：您的 E-Mail 地址，好像是無效的，請再嘗試。');
?>
