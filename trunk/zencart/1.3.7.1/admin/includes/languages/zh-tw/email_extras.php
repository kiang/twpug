<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: email_extras.php 2081 2005-10-03 05:34:18Z ajeh $
//

// office use only
  define('OFFICE_FROM','發信人：');
  define('OFFICE_EMAIL','電子信箱：');

  define('OFFICE_SENT_TO','收件人：');
  define('OFFICE_EMAIL_TO','電子信箱：');
  define('OFFICE_USE','辦公室專用：');
  define('OFFICE_LOGIN_NAME','登入名稱：');
  define('OFFICE_LOGIN_EMAIL','登入 電子信箱：');
  define('OFFICE_LOGIN_PHONE','<strong>電話：</strong>');
  define('OFFICE_IP_ADDRESS','IP 位址：');
  define('OFFICE_HOST_ADDRESS','主機位址：');
  define('OFFICE_DATE_TIME','日期和時間：');

// email disclaimer
  define('EMAIL_DISCLAIMER', '這 email 地址，是由自您，或我們的會員提供給我們的，如果您認為，這是錯誤接收到電郵，請通知我們，謝謝！我們的 email 地址是： %s');
  define('EMAIL_SPAM_DISCLAIMER','這 email 的發送，是按照美國的 US CAN-SPAM 規定，起效日期為 01/01/2004. 移除接收電郵的要求，可寄到我們的 E-Mail 地址，有關要求我們會予以重視和尊重。');
  define('EMAIL_FOOTER_COPYRIGHT','版權所有 &copy; 2004 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[GV ADMIN SENT]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[DISCOUNT COUPONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ORDERS STATUS]');
  define('TEXT_UNSUBSCRIBE', "\n\n要停止訂閱以後的電子報，或任何推廣郵件，只需簡單請點選下面連結： \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '停止');
?>