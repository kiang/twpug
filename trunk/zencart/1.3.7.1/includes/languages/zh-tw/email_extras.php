<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 3166 2006-03-11 02:45:51Z drbyte $
 */

// office use only
  define('OFFICE_FROM','<strong>來自：</strong>');
  define('OFFICE_EMAIL','<strong>E-Mail：</strong>');

  define('OFFICE_SENT_TO','<strong>送給：</strong>');
  define('OFFICE_EMAIL_TO','<strong>致 E-Mail：</strong>');

  define('OFFICE_USE','<strong>辦公室專用：</strong>');
  define('OFFICE_LOGIN_NAME','<strong>登入名稱：</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>登入 E-Mail：</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>電話號碼：</strong>');
  define('OFFICE_IP_ADDRESS','<strong>網絡 IP 位址：</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>主機位址：</strong>');
  define('OFFICE_DATE_TIME','<strong>日期和時間：</strong>');
  define('OFFICE_IP_TO_HOST_ADDRESS', '停止 - OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', '這 E-Mail 是由您，或我們其中一位顧客提供給我們的，如果您認為，是錯誤的接收了這電子郵件，請發出 E-Mail, 通知 %s ');
  define('EMAIL_SPAM_DISCLAIMER','這 E-Mail 的發送是按照美國，在2004年01月01日生效的 (CAN-SPAM Law) 條例內的指引。如果不想繼續接收 E-Mail, 請通知我們，我們衷心理解和尊重您的意願。');
  define('EMAIL_FOOTER_COPYRIGHT','版權所有 (c) 2003-2006 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "<br />" . '<strong>重要：</strong> 為了您的安全保障，和防止有人惡意使用，所有經本網站發送的 E-Mail 都會被紀錄，而所有紀錄內容，均為本店所擁有，如果您認為，這是錯誤的接收了這 E-Mail ，請通知我們，謝謝！我們的 E-Mail 是： ' . STORE_OWNER_EMAIL_ADDRESS .  " \n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>本訊息，都包含在所有經本網站發送的 E-Mail 中：</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[設立帳戶]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT','[推薦給親友]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[禮品券 已發給顧客]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[新訂單]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[額外 副本 訂單 資料] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','警告： 低在庫量');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','低在庫量報告： ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '停用');
?>