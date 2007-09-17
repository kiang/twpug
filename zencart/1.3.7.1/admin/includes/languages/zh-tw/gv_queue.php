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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', TEXT_GV_NAME . ' -(代金券) - 佇候送出序列');

define('TABLE_HEADING_CUSTOMERS', '會員');
define('TABLE_HEADING_ORDERS_ID', '訂單號碼');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . '：價格');
define('TABLE_HEADING_DATE_PURCHASED', '購買日期');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', '您最近在我們的線上商店購買了 ' . TEXT_GV_NAME . '。');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', '之前因安全問題，這個 ' . TEXT_GV_NAME . ' 沒有馬上提供和送交給您。' .
                                          '但是，現在我們已經把它送出，您可以到我們的線上商店內，將這個 ' . TEXT_GV_NAME . '  以電子郵件方式，送給您的親友，或可以自己使用。' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', '這個 ' . TEXT_GV_NAME . ' 共值 %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', '謝謝您的惠顧！');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' 購買');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' 訂單 #');

define('TEXT_EDIT_ORDER','編輯訂單編號# ');
define('TEXT_GV_NONE','沒有「' . TEXT_GV_NAME . '」可以提供');
?>