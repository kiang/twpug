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
//  $Id: featured.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', '推薦產品');

define('TABLE_HEADING_PRODUCTS', '產品');
define('TABLE_HEADING_PRODUCTS_MODEL', '型號');
define('TABLE_HEADING_PRODUCTS_PRICE', '價格/特價/促銷價');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE', '百分比');
define('TABLE_HEADING_AVAILABLE_DATE', '提供日期');
define('TABLE_HEADING_EXPIRES_DATE', '截止日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_FEATURED_PRODUCT', '產品:');
define('TEXT_FEATURED_EXPIRES_DATE', '截止日期:');
define('TEXT_FEATURED_AVAILABLE_DATE', '提供日期:');

define('TEXT_INFO_DATE_ADDED', '加入日期:');
define('TEXT_INFO_LAST_MODIFIED', '最後修改:');
define('TEXT_INFO_NEW_PRICE', '新價格:');
define('TEXT_INFO_ORIGINAL_PRICE', '原價格:');
define('TEXT_INFO_PERCENTAGE', '百分比:');
define('TEXT_INFO_AVAILABLE_DATE', '提供日期:');
define('TEXT_INFO_EXPIRES_DATE', '截止日期:');
define('TEXT_INFO_STATUS_CHANGE', '狀態改變:');
define('TEXT_IMAGE_NONEXISTENT', '沒有圖像');

define('TEXT_INFO_HEADING_DELETE_FEATURED', '刪除產品');
define('TEXT_INFO_DELETE_INTRO', '確定要刪除這個推薦產品嗎?');

define('SUCCESS_FEATURED_PRE_ADD', '成功：預先新增特別介紹，請更新日期。');
define('WARNING_FEATURED_PRE_ADD_EMPTY', '警告：沒有指定產品編號，新增失敗。');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', '警告：產品編號已經是特價商品，新增失敗。');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', '警告：產品編號有誤，新增失敗。');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', '透過產品編號手動新增特別介紹');
define('TEXT_INFO_PRE_ADD_INTRO', '在大型資料庫中，您也許想透過手動輸入產品編號方式來加入特別介紹<br /><br />當頁面需要很長時間產生，或是選單有太多項目而難以選擇時，透過這種方式會比較方便。');
define('TEXT_PRE_ADD_PRODUCTS_ID', '請輸入要預先新增的產品編號：');
define('TEXT_INFO_MANUAL', '要手動新增為特別介紹的產品編號');
?>