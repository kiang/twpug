<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product_free_shipping.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', '分類 / 產品');
define('HEADING_TITLE_GOTO', '轉 到：');

define('TABLE_HEADING_ID', '編號');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '分類 / 產品');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', '排序');

define('TABLE_HEADING_PRICE','價格/特價/促銷價');
define('TABLE_HEADING_QUANTITY','數量');

define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_STATUS', '狀態');

define('TEXT_CATEGORIES', '分類：');
define('TEXT_SUBCATEGORIES', '副分類：');
define('TEXT_PRODUCTS', '產品：');
define('TEXT_PRODUCTS_PRICE_INFO', '價格：');
define('TEXT_PRODUCTS_TAX_CLASS', '稅金種類：');
define('TEXT_PRODUCTS_AVERAGE_RATING', '平均評分：');
define('TEXT_PRODUCTS_QUANTITY_INFO', '數量：');
define('TEXT_DATE_ADDED', '加入日期：');
define('TEXT_DATE_AVAILABLE', '上市日期：');
define('TEXT_LAST_MODIFIED', '最後修改：');
define('TEXT_IMAGE_NONEXISTENT', '圖像不存在');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '請輸入新分類或產品在這水平.');
define('TEXT_PRODUCT_MORE_INFORMATION', '如需更多資料，請到訪這產品 <a href="http://%s" target="blank">的網頁</a>.');
define('TEXT_PRODUCT_DATE_ADDED', '這產品加入我們的目錄，日期在 %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '這產品將會在庫，日期在 %s.');

define('TEXT_EDIT_INTRO', '如有需要，請作有關修改');
define('TEXT_EDIT_CATEGORIES_ID', '分類編號：');
define('TEXT_EDIT_CATEGORIES_NAME', '分類名稱： ');
define('TEXT_EDIT_CATEGORIES_IMAGE', '分類圖像： ');
define('TEXT_EDIT_SORT_ORDER', '排序：');

define('TEXT_INFO_COPY_TO_INTRO', '請選擇一個新分類，而它是您想複製這產品去到的');
define('TEXT_INFO_CURRENT_CATEGORIES', '目前的分類： ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '新分類');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '編輯分類');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '移除分類');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '遷移分類');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '移除產品');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '遷移產品');
define('TEXT_INFO_HEADING_COPY_TO', '複製到');

define('TEXT_DELETE_CATEGORY_INTRO', '您確定要移除這分類嗎?');
define('TEXT_DELETE_PRODUCT_INTRO', '您確定要永久移除此產品嗎? <br /><br /><strong>警告：</strong> 在已連結的產品<br />1. 請肯定主分類已經更新，如果您正由那主分類移除產品<br />2. 在那需要移除產品的分類的核取盒上勾選');

define('TEXT_DELETE_WARNING_CHILDS', '<b>警告：</b> 這裡有 %s 個「子分類」仍然連結到這分類!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>警告：</b> 這裡仍然有 %s 個產品，連結到這分類!');

define('TEXT_MOVE_PRODUCTS_INTRO', '請選擇那個 - 分類您想 <b>%s</b> 歸納在內');
define('TEXT_MOVE_CATEGORIES_INTRO', '請選擇那一個 - 分類，您想 <b>%s</b> 歸納在內');
define('TEXT_MOVE', '遷移 <b>%s</b> 到：');

define('TEXT_NEW_CATEGORY_INTRO', '請在下面輸入新分類的資料');
define('TEXT_CATEGORIES_NAME', '分類名稱： ');
define('TEXT_CATEGORIES_IMAGE', '分類圖像： ');
define('TEXT_SORT_ORDER', '排序：');

define('TEXT_PRODUCTS_STATUS', '產品狀態:');
define('TEXT_PRODUCTS_VIRTUAL', '虛擬產品:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '經常免運費：');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '產品數量框盒顯示：');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '上市日期：');
define('TEXT_PRODUCT_AVAILABLE', '有貨');
define('TEXT_PRODUCT_NOT_AVAILABLE', '缺貨');
define('TEXT_PRODUCT_IS_VIRTUAL', '是的，略過送運地址');
define('TEXT_PRODUCT_NOT_VIRTUAL', '否的，需要送運地址');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '是的，經常免運費');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '否的，正常運費規則');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', '特價，產品/下載組合 需要貨運地址');
define('TEXT_PRODUCTS_SORT_ORDER', '排序:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', '是，顯示數量欄位');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', '否，不顯示數量欄位');

define('TEXT_PRODUCTS_MANUFACTURER', '產品製造商：');
define('TEXT_PRODUCTS_NAME', '產品名稱：');
define('TEXT_PRODUCTS_DESCRIPTION', '產品介紹：');
define('TEXT_PRODUCTS_QUANTITY', '產品數量：');
define('TEXT_PRODUCTS_MODEL', '產品型號：');
define('TEXT_PRODUCTS_IMAGE', '產品圖像：');
define('TEXT_PRODUCTS_IMAGE_DIR', '上載到資料夾：');
define('TEXT_PRODUCTS_URL', '產品 URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(<font color="red">不用加：</font> http:// )</small>');
define('TEXT_PRODUCTS_PRICE_NET', '產品價格 (淨價)：');
define('TEXT_PRODUCTS_PRICE_GROSS', '產品價格 (總價)：');
define('TEXT_PRODUCTS_WEIGHT', '產品重量：');

define('EMPTY_CATEGORY', '清空分類');

define('TEXT_HOW_TO_COPY', '複製方法：');
define('TEXT_COPY_AS_LINK', '連結產品');
define('TEXT_COPY_AS_DUPLICATE', '複製產品');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','只使用於複製產品 ...');
  define('TEXT_COPY_ATTRIBUTES','複製 產品屬性，到複製品上？');
  define('TEXT_COPY_ATTRIBUTES_YES','是');
  define('TEXT_COPY_ATTRIBUTES_NO','否');

  define('TEXT_INFO_CURRENT_PRODUCT', '目前產品： ');
  define('TABLE_HEADING_MODEL', '型號');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','屬性改變，為產品編號# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','刪除 <strong>全部</strong> 產品屬性，為：<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','複製屬性到其他產品，或到一整個分類，由：<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','複製屬性到其他 <strong>產品</strong> 由：<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','複製屬性到其他 <strong>分類</strong> 由：<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>該如何處理目前的產品屬性?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>刪除</strong> 在先，然後複製新屬性');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>更新</strong> 使用新設定/價格，然後加入新的');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>忽略</strong> 和只加入新屬性');

  define('SUCCESS_ATTRIBUTES_DELETED','屬性完成刪除');
  define('SUCCESS_ATTRIBUTES_UPDATE','屬性完成更新');

  define('ICON_ATTRIBUTES','屬性效能');

  define('TEXT_CATEGORIES_IMAGE_DIR','上載到資料夾：');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','警告： 不顯示數量欄位，預設到數量 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','警告： 不顯示數量欄位，預設到數量 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>請選擇：</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','屬性效能為：');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','下載： ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','產品訂價基於屬性：');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','是');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','否');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*顯示的價格，會包括最低的，團體屬性價格，再加上價格');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*顯示的價格，會包括最低的，團體屬性價格，再加上價格');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','產品數量最少值：');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','產品數量單位：');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','產品數量最大值：');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = 沒有限制, 1 = 沒有數量欄位或最大 ##');

  define('TEXT_PRODUCTS_MIXED','產品數量 最少/單位 混合：');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '免費產品');
  define('TEXT_PRODUCT_IS_FREE','免費產品：');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*產品已標誌為免費');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*產品已標誌為免費');

  define('TEXT_PRODUCT_IS_CALL','產品是 - 詢問價格：');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*產品已標誌為 - 詢問價格');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*產品已標誌為 - 詢問價格');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>略過新屬性 </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>加入新屬性，由 </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>更新屬性，由</strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>標誌那一些產品的後設標籤標題 Meta Tag Title 應該包括在內：</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>產品名稱：</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>標題：</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>型號：</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>價格：</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>標題/標籤句 Tagline：</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>後設標籤標題 Meta Tag Title：</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>後設標籤關鍵宇 Meta Tag Keywords：</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>後設標籤描述 Meta Tag Description：</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">不包括</span>');
?>