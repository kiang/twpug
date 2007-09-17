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
// $Id: discount_coupon.php 4591 2006-09-23 04:25:15Z ajeh $
//

define('NAVBAR_TITLE', '優待券');
define('HEADING_TITLE', '優待券');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> 看來不是一個有效的優待券兌換號碼。請再嘗試輸入。');

define('HEADING_COUPON_HELP', '優待券說明');
define('TEXT_CLOSE_WINDOW', '關閉視窗 [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">您輸入的優待券兌換號碼是為 ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">減價優惠： </span> %s</p><p class="smallText">可能會有額外的限制。請看下面其他詳情。</p>');
define('TEXT_COUPON_HELP_DATE', '<p>這優待券有效於 %s 和 %s 之間</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">優待券的限制</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">分類的限制：</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">產品的限制：</p>');
define('TEXT_ALLOW', '許可');
define('TEXT_DENY', '拒絕');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>這優待券有效於全部分類。</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>這優待券有效於全部產品。</p>');
define('TEXT_CAT_ALLOWED', ' (有效於這分類)');
define('TEXT_CAT_DENIED', ' (不許可在這分類)');
define('TEXT_PROD_ALLOWED', ' (有效於這產品)');
define('TEXT_PROD_DENIED', ' (不許可產品)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION', '<p class="smallText">優待券可能不可應用在購買 \' . TEXT_GV_NAMES . \'. 限制 1 優待券在每一訂單。</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', '找尋優待券 ... ');
define('TEXT_DISCOUNT_COUPON_ID', '您的號碼： ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', '使用付款住址限制。');
?>