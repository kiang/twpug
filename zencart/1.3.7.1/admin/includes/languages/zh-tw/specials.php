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
//  $Id: specials.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '特價');

define('TABLE_HEADING_PRODUCTS', '產品');
define('TABLE_HEADING_PRODUCTS_MODEL','型號');
define('TABLE_HEADING_PRODUCTS_PRICE', '價格/特價/促銷價');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','折扣');
define('TABLE_HEADING_AVAILABLE_DATE', '提供日期');
define('TABLE_HEADING_EXPIRES_DATE','截止日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_SPECIALS_PRODUCT', '產品:');
define('TEXT_SPECIALS_SPECIAL_PRICE', '特價:');
define('TEXT_SPECIALS_EXPIRES_DATE', '截止日期:');
define('TEXT_SPECIALS_AVAILABLE_DATE', '提供日期:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>特別注意:</b><ul><li>您可以在特價的欄位內，輸入一個百分比去扣除。例如: <b>20%</b></li><li>如果輸入新的價格，小數點必須是 \'.\' (小數點), 例如: <b>49.99</b></li><li>將截止日期留空如果特價沒有結束日期</li></ul>');

define('TEXT_INFO_DATE_ADDED', '加入日期:');
define('TEXT_INFO_LAST_MODIFIED', '最後修改:');
define('TEXT_INFO_NEW_PRICE', '新價格:');
define('TEXT_INFO_ORIGINAL_PRICE', '原價格:');
define('TEXT_INFO_DISPLAY_PRICE', '顯示價格:<br />');
define('TEXT_INFO_AVAILABLE_DATE', '提供在:');
define('TEXT_INFO_EXPIRES_DATE', '截止日期:');
define('TEXT_INFO_STATUS_CHANGE', '狀態改變:');
define('TEXT_IMAGE_NONEXISTENT', '圖像不存在');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', '刪除特價');
define('TEXT_INFO_DELETE_INTRO', '您確定要，刪除這 - 產品特價 - 嗎?');
?>