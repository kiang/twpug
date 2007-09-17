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
//  $Id: products_price_manager.php 543 2004-11-13 19:19:29Z wilt $
//

define('HEADING_TITLE', '產品價格 - 管理員');
define('HEADING_TITLE_PRODUCT_SELECT','請選擇一個含有產品的 - 分類，來顯示 - 定價資料 ...');

define('TABLE_HEADING_PRODUCTS', '產品');
define('TABLE_HEADING_PRODUCTS_MODEL','型號');
define('TABLE_HEADING_PRODUCTS_PRICE', '價格/特價/促銷價');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','百分比');
define('TABLE_HEADING_AVAILABLE_DATE', '上市日期');
define('TABLE_HEADING_EXPIRES_DATE','截止日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_PRODUCT_INFO', '產品資料:');
define('TEXT_PRODUCTS_PRICE_INFO', '產品價格資料:');
define('TEXT_PRODUCTS_MODEL','型號:');
define('TEXT_PRICE', '價格');
define('TEXT_PRODUCT_AVAILABLE_DATE', '上市日期:');
define('TEXT_PRODUCTS_STATUS', '產品狀態:');
define('TEXT_PRODUCT_AVAILABLE', '有貨');
define('TEXT_PRODUCT_NOT_AVAILABLE', '缺貨');

define('TEXT_PRODUCT_INFO_NONE', '請選擇產品 ...');
  define('TEXT_PRODUCT_IS_FREE','免費產品:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*這是免費產品');
  define('TEXT_PRODUCT_IS_CALL','詢問產品價格:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*這個產品必須詢問價格');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','以屬性標價:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','是');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','否');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*顯示價格包括最小的屬性群價格加上價格');
  define('TEXT_PRODUCTS_MIXED','產品數量 最少/單位 混合:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', '混合屬性的特價數量');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','最少數量:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','數量單位:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','最大數量:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= 不限制<br />1= 沒有 數量/最大 欄位');

define('TEXT_FEATURED_PRODUCT_INFO', '推薦產品資料:');
define('TEXT_FEATURED_PRODUCT', '產品:');
define('TEXT_FEATURED_EXPIRES_DATE', '截止日期:');
define('TEXT_FEATURED_AVAILABLE_DATE', '期限:');
define('TEXT_FEATURED_PRODUCTS_STATUS', '推薦狀態:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', '推薦');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', '不推薦');
define('TEXT_FEATURED_DISABLED', '<strong>注意: 推薦產品資料目前是未開啟, 已截止, 或不推薦狀態</strong>');

define('TEXT_SPECIALS_PRODUCT', '產品:');
define('TEXT_SPECIALS_SPECIAL_PRICE', '特價:');
define('TEXT_SPECIALS_EXPIRES_DATE', '截止日期:');
define('TEXT_SPECIALS_AVAILABLE_DATE', '特價日期:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>特別注意： </b><ul><li>您可以在特價價格欄位，輸入一個百分點，來減價，舉例： <b>20%</b></li><li>如果您輸入一個新價格有小數的，那小數分隔符必須為 \'.\' (小數點), 例子： <b>49.99</b></li><li>如果沒有截止日期的話，請把-截止日期-欄位留空</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', '特價資料:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', '特價狀態:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', '特價');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', '沒有特價');
define('TEXT_SPECIALS_NO_GIFTS','如使用禮卷將-沒有特價');
define('TEXT_SPECIAL_DISABLED', '<strong>注意: 特價產品資料目前是未開啟, 已截止, 或沒有特價狀態</strong>');

define('TEXT_INFO_DATE_ADDED', '加入日期:');
define('TEXT_INFO_LAST_MODIFIED', '最後修改:');
define('TEXT_INFO_NEW_PRICE', '新價格:');
define('TEXT_INFO_ORIGINAL_PRICE', '原價:');
define('TEXT_INFO_PERCENTAGE', '折扣:');
define('TEXT_INFO_AVAILABLE_DATE', '上市日期:');
define('TEXT_INFO_EXPIRES_DATE', '截止日期:');
define('TEXT_INFO_STATUS_CHANGE', '狀態改變:');
define('TEXT_IMAGE_NONEXISTENT', '沒有圖示');

define('TEXT_INFO_HEADING_DELETE_FEATURED', '刪除推薦產品');
define('TEXT_INFO_DELETE_INTRO', '確定要刪除這項推薦產品嗎?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>設定要的屬性然後按下輸入套用</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '以屬性標價');
  define('TEXT_PRODUCTS_PRICE', '產品價格: ');
  define('TEXT_SPECIAL_PRICE', '特價: ');
  define('TEXT_SALE_PRICE', '促銷價: ');
  define('TEXT_FREE', '免費');
  define('TEXT_CALL_FOR_PRICE', '詢問價格');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', '加入 ' . DISCOUNT_QTY_ADD . ' 空白特價量:');
define('TEXT_BLANKS_INFO','全部 0 個量的特價將會在更新後移除');
define('TEXT_INFO_NO_DISCOUNTS', '沒有提供特價量');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', '特價層次');
define('TEXT_PRODUCTS_DISCOUNT','特價');
define('TEXT_PRODUCTS_DISCOUNT_QTY','最少量');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','特價值');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','類型');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','計算價格:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','擴充價格:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','計算<br />價格: &nbsp; 含稅:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','擴充<br />價格: &nbsp; 含稅:');

define('TEXT_EACH','每項');
define('TEXT_EXTENDED','總數');

define('TEXT_DISCOUNT_TYPE_INFO', '產品特價資料');
define('TEXT_DISCOUNT_TYPE','特價類型:');
define('TEXT_DISCOUNT_TYPE_FROM', '特價從:');

define('DISCOUNT_TYPE_DROPDOWN_0','沒有');
define('DISCOUNT_TYPE_DROPDOWN_1','折價');
define('DISCOUNT_TYPE_DROPDOWN_2','原價');
define('DISCOUNT_TYPE_DROPDOWN_3','減價');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','原價');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','特價');

define('TEXT_UPDATE_COMMIT','更新全部的改變');

define('TEXT_PRODUCTS_TAX_CLASS', '稅金種類:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>警告：</strong> 產品的主分類編號# %s 跟目前的分類編號# %s 不相同, 及產品並未連結!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' 目前分類編號# %s 跟主分類編號# %s 相同');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', '更新主分類編號# %s 來符合目前的分類編號# %s');

define('PRODUCT_WARNING_UPDATE', '請進行修改，然後按-更新-來儲存');
define('PRODUCT_UPDATE_SUCCESS', '完成更新產品改變!');
define('PRODUCT_WARNING_UPDATE_CANCEL', '改變已被取消, 還未儲存 ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>進行編輯 ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', '只預覽 ... 目前價格狀態 ... 只預覽');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>編輯產品資料然後更新儲存</strong>');
?>