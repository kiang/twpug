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
// $Id: popup_coupon_help.php 4591 2006-09-23 04:25:15Z ajeh $
//

define('HEADING_COUPON_HELP', '優待券說明');
define('TEXT_CLOSE_WINDOW', '關閉視窗 [x]');
define('TEXT_COUPON_HELP_HEADER', '恭喜, 您已經完成優待券兌換。');
define('TEXT_COUPON_HELP_NAME', '<br /><br />優待券名稱 : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />這優待券等值訂單的 %s 扣減優惠');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />您須要購買產品價值滿 %s 才能使用這優待券');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />這優待券送給您- 豁免訂單上的運費');
define('TEXT_COUPON_HELP_DESC', '<br /><br />優待券說明 : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />這優待券在 %s 和 %s 之間有效');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />產品/分類 - 限制');
define('TEXT_COUPON_HELP_CATEGORIES', '分類');
define('TEXT_COUPON_HELP_PRODUCTS', '產品');
define('TEXT_ALLOW', '許可');
define('TEXT_DENY', '拒絕');

define('TEXT_ALLOWED', ' (已許可)');
define('TEXT_DENIED', ' (已拒絕)');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION', '優待券，可能會不能夠使用來訂購 \' . TEXT_GV_NAMES . \' .');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', '使用付款住址限制。');
?>