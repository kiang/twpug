<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', '團體定價');

define('TABLE_HEADING_GROUP_ID', '編號');
define('TABLE_HEADING_GROUP_NAME', '團體名稱');
define('TABLE_HEADING_GROUP_AMOUNT', '減去價格 - %');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_HEADING_NEW_PRICING_GROUP', '新 - 團體定價');
define('TEXT_HEADING_EDIT_PRICING_GROUP', '編輯 - 團體定價');
define('TEXT_HEADING_DELETE_PRICING_GROUP', '刪除 - 團體定價');

define('TEXT_NEW_INTRO', '請在下面，輸入新 - 團體定價 - 的資料。');
define('TEXT_EDIT_INTRO', '如有需要，請作有關修改');
define('TEXT_DELETE_INTRO', '您確定要，刪除這個 - 團體 - 嗎?');
define('TEXT_DELETE_PRICING_GROUP', '移除定價團體');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>警告：</b> 這裡仍有 %s 個顧客仍然連結在這分類！');

define('TEXT_GROUP_PRICING_NAME', '團體名稱： ');
define('TEXT_GROUP_PRICING_AMOUNT', '減去價格的，百分比：');
define('TEXT_DATE_ADDED', '加入日期：');
define('TEXT_LAST_MODIFIED', '修改日期：');
define('TEXT_CUSTOMERS', '屬於 - 這團體的 - 會員：');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','錯誤： 顧客出現在這個團體。請確定您希望由這團體中移除全部成員和刪除它。');
define('ERROR_MODULE_NOT_CONFIGURED','注意： 您有團體價格的定義，但您沒有啟動；那團體價格訂單總額模組。<br />請進入管理區 -> 外掛模組 -> 訂單總額 -> 團體優惠 Membership Discount (ot_group_pricing) 和 安裝/設定 那模組。');

?>