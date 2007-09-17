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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', '訂單確認通知');
define('EMAIL_TEXT_HEADER', '訂單確認通知 - ');
define('EMAIL_TEXT_FROM',' 發送者： ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','閣下之前光臨和惠顧本店，我們非常感謝！');
define('EMAIL_DETAILS_FOLLOW','您的訂單資料，已經在下面詳細列出。');
define('EMAIL_TEXT_ORDER_NUMBER', '訂單號碼：');
define('EMAIL_TEXT_INVOICE_URL', '詳細發票：');
define('EMAIL_TEXT_INVOICE_URL_CLICK', '點按這裡可以取得詳細的發票');
define('EMAIL_TEXT_DATE_ORDERED', '訂單日期：');
define('EMAIL_TEXT_PRODUCTS', '產品');
define('EMAIL_TEXT_SUBTOTAL', '小計：');
define('EMAIL_TEXT_TAX', '稅金：');
define('EMAIL_TEXT_SHIPPING', '運費：');
define('EMAIL_TEXT_TOTAL', '總 計：');
define('EMAIL_TEXT_DELIVERY_ADDRESS', '送貨地址');
define('EMAIL_TEXT_BILLING_ADDRESS', '帳單地址');
define('EMAIL_TEXT_PAYMENT_METHOD', '付款方法');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', '經由');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' - 號碼： ');
define('HEADING_ADDRESS_INFORMATION','地址資料');
define('HEADING_SHIPPING_METHOD','送運方法');
?>