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
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '寄送 \' . TEXT_GV_NAME . \' 給客戶');

define('TEXT_CUSTOMER', '會員:');
define('TEXT_SUBJECT', '標題:');
define('TEXT_FROM', '寄件人:');
define('TEXT_TO', '收件人:');
define('TEXT_AMOUNT', '總價值：');
define('TEXT_MESSAGE', '文字 <br />郵件:');
define('TEXT_RICH_TEXT_MESSAGE', 'Rich Text <br />郵件:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">只送出一個郵件時使用這項，否則請使用上面的下拉式選單</span>');
define('TEXT_SELECT_CUSTOMER', '選擇會員');
define('TEXT_ALL_CUSTOMERS', '全部會員');
define('TEXT_NEWSLETTER_CUSTOMERS', '給全部的電子報訂閱者');

define('NOTICE_EMAIL_SENT_TO', '注意： 郵件寄給: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '錯誤： 沒有選擇會員.');
define('ERROR_NO_AMOUNT_SELECTED', '錯誤： 沒有選擇總價值.');
define('ERROR_NO_SUBJECT', '錯誤： 沒有輸入標題.');
define('ERROR_GV_AMOUNT', '請以數字代表總價值. 例如： 25.00');

define('TEXT_GV_ANNOUNCE', '<font color="#0000ff">我們很高興能夠為閣下服務，專誠為您送上這「\' . TEXT_GV_NAME . \'」。</font>');
define('TEXT_GV_WORTH', '這 \' . TEXT_GV_NAME . \' 共值：  ');
define('TEXT_TO_REDEEM', '要兌換這\' . TEXT_GV_NAME . \'，請點按下面的連結，還有要寫下這 \' . TEXT_GV_REDEEM .\' ，');
define('TEXT_IN_CASE', '以防日後有問題時，可以用來參照。');
define('TEXT_OR_VISIT', '或前去： ');
define('TEXT_ENTER_CODE', ' 然後，在結帳時，輸入這編號。');
define('TEXT_CLICK_TO_REDEEM', '點按這裡兌換禮品券');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '閣下，您近期在我們的線上商店，購買了這個 \' . TEXT_GV_NAME . \' ，之前因保安的原因，這個 \' . TEXT_GV_NAME . \' 的價值，沒有即時為您提供，但是，現在本店店主，已經向您送出這 \' . TEXT_GV_NAME . \' ，和為您提供這可使用的價值。');
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', '\n\n" . \'這個  \' . TEXT_GV_NAME . \' 的總價值是： %s');
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '\n\n" . \'您現在，可以去到我們的線上商店裡，登入然後將這個 \' . TEXT_GV_NAME . \' 送給您的親友.');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '\n\n');

?>