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
//  $Id: attributes_controller.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', '產品分類： ');

define('HEADING_TITLE_OPT', '產品選項');
define('HEADING_TITLE_VAL', '選項值');
define('HEADING_TITLE_ATRIB', '屬性控制器');
define('HEADING_TITLE_ATRIB_SELECT', '請選擇那一個 - 分類 - 來顯示 - 產品屬性 ...');

define('TEXT_PRICES_AND_WEIGHTS', '價格和重量');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', '價格因數： ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', '偏移值： ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', '一次性：');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', '一次性因數： ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', '偏移值： ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', '屬性數量價格減價：');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', '一次性屬性數量價格減價：');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', '每個字詞價格：');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- 免費字詞：');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', '每個單字價格：');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- 免費單字：');

define('TABLE_HEADING_ID', '編號');
define('TABLE_HEADING_PRODUCT', '產品名稱');
define('TABLE_HEADING_OPT_NAME', '選項名稱');
define('TABLE_HEADING_OPT_VALUE', '選項數值');
define('TABLE_HEADING_OPT_PRICE', '價格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '前綴');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_DOWNLOAD', '可下載的產品：');
define('TABLE_TEXT_FILENAME', '檔案名稱：');
define('TABLE_TEXT_MAX_DAYS', '逾期天數： （0 = 沒有限制）');
define('TABLE_TEXT_MAX_COUNT', '最多下載次數：');
define('TABLE_HEADING_OPT_DISCOUNTED', '減價');
define('TABLE_HEADING_PRICE_BASE_INCLUDED', '基本');
define('TABLE_HEADING_PRICE_TOTAL', '總數|減價： 一次性：');
define('TEXT_WARNING_OF_DELETE', '這選項，已有產品和選項值，連結著它的 - 刪除它是不安全的。');
define('TEXT_OK_TO_DELETE', '這選項，沒有產品和選項值，連結著它的 - 可以安全的刪除它。');
define('TEXT_OPTION_ID', '選項編號');
define('TEXT_OPTION_NAME', '選項名稱');

define('ATTRIBUTE_WARNING_DUPLICATE', '重複的屬性 - 屬性沒有被加入'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE', '重複的屬性存在 - 屬性沒有被更改'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH', '屬性選項，和選項值不相配 - 屬性沒有被加入'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE', '屬性選項，和選項值不相配 - 屬性沒有被更改'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE', '可能，重複的選項名稱，被加入了'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE', '可能，重複的選項值，被加入了'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING', '編輯'); // title
define('PRODUCTS_ATTRIBUTES_DELETE', '刪除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING', '增加新屬性'); // title
define('TEXT_DOWNLOADS_DISABLED', '注意： 下載已被停止');

define('TABLE_TEXT_MAX_DAYS_SHORT', '日數：');
define('TABLE_TEXT_MAX_COUNT_SHORT', '最大：');

  define('TABLE_HEADING_OPTION_SORT_ORDER', '排序順序');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER', '預設排序');
  define('TEXT_SORT', ' 排序： ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX', '前綴');
  define('TABLE_HEADING_OPT_WEIGHT', '重量');
  define('TABLE_HEADING_OPT_SORT_ORDER', '排序');
  define('TABLE_HEADING_OPT_DEFAULT', '預設');

  define('TABLE_HEADING_OPT_TYPE', '選項類型'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE', '大小');
  define('TABLE_HEADING_OPTION_VALUE_MAX', '最大');
  define('TABLE_HEADING_OPTION_VALUE_ROWS', '橫列');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS', '註解');

  define('TEXT_OPTION_VALUE_COMMENTS', '註解： ');
  define('TEXT_OPTION_VALUE_SIZE', '顯示大小： ');
  define('TEXT_OPTION_VALUE_MAX', '最大長度： ');

  define('TEXT_ATTRIBUTES_IMAGE', '屬性圖像樣本：');
  define('TEXT_ATTRIBUTES_IMAGE_DIR', '屬性圖像檔案目錄：');

  define('TEXT_ATTRIBUTES_FLAGS', '屬性<br />旗標：');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '只使用作<br />顯示用途：');
  define('TEXT_ATTRIBUTES_IS_FREE', '屬性是免費的<br />當產品是，免費：');
  define('TEXT_ATTRIBUTES_DEFAULT', '預設屬性<br />被標誌為，已選擇：');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '應用減價，已使用<br />由，特價產品 / 促銷減價：');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED', '包含在，基本價格<br />當訂價基於，屬性');
  define('TEXT_ATTRIBUTES_REQUIRED', '屬性是需要的<br />在文字：');

  define('LEGEND_BOX', '圖例說明：');
  define('LEGEND_KEYS', '關 / 開');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', '只作陳列顯示');
  define('LEGEND_ATTRIBUTES_IS_FREE', '免費');
  define('LEGEND_ATTRIBUTES_DEFAULT', '預設');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', '已減價');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED', '基本價格');
  define('LEGEND_ATTRIBUTES_REQUIRED', '需要');
  define('LEGEND_ATTRIBUTES_IMAGES', '圖像');
  define('LEGEND_ATTRIBUTES_DOWNLOAD', '有效 / 無效<br />檔案名稱');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER', '設為預設排序');
  define('TEXT_PRODUCTS_LISTING', '產品列表，為： ');
  define('TEXT_NO_PRODUCTS_SELECTED', '沒有選擇產品');
  define('TEXT_NO_ATTRIBUTES_DEFINED', '沒有定義到屬性 - 產品編號 # 是');

  define('TEXT_PRODUCTS_ID', '產品編號 #： ');
  define('TEXT_ATTRIBUTES_DELETE', '全部移除');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS', '複製到產品');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY', '複製到分類');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', '更改屬性的，產品編號 # 是 ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', '移除 <strong>全部</strong> 產品屬性，它們是：<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', '複製 - 屬性，到其他 - 產品，或到一個整體 - 分類，由：<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS', '產品');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', '複製 - 屬性，到另一個 <strong>產品</strong>，由編號 # ');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO', '選擇 - 產品 - 去複製 全部屬性，到：');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY', '分類');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO', '請選擇那些分類，去複製全部屬性，到：');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', '複製屬性，到全部產品在 <strong>分類</strong> 由產品編號#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>現存的產品屬性，應該如何處理？</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>刪除</strong> 在先，然後複製新屬性');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>更新</strong> 使用新設定 / 價格，然後加入新的');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>忽略</strong> 和只加入新屬性');

  define('SUCCESS_PRODUCT_UPDATE_SORT', '完成屬性排序順序的更新，為編號# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE', '沒有屬性去更新排序，為編號# ');
  define('SUCCESS_ATTRIBUTES_DELETED', '屬性完成刪除');
  define('SUCCESS_ATTRIBUTES_UPDATE', '屬性完成更新');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE', '沒有分類被選擇為複製');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME', ' - 在分類： ');

  define('TEXT_DELETE_ALL_ATTRIBUTES', '您是否確定，要刪除全部屬性，為編號# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING', '<strong>略過新屬性 </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>插入新屬性，由 </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', '<strong>更新由屬性 </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW', '預覽屬性');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY', '預覽屬性顯示，為編號#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>請選擇：</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>定義那屬性設定，然後點按 - 插入 - 來應用。</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '訂價基於屬性');
  define('TEXT_PRODUCTS_PRICE', '產品價格：');
  define('TEXT_SPECIAL_PRICE', '特價：');
  define('TEXT_SALE_PRICE', '促銷價：');
  define('TEXT_FREE', '免費');
  define('TEXT_CALL_FOR_PRICE', '歡迎查詢價格');
  define('TEXT_SAVE_CHANGES', '更新和儲存修改：');

  define('TEXT_INFO_ID', '編號#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', '不可以加入購物車');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', '確認移除 - 全部 - 產品選項值，為 - 選項名稱 ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>產品名稱： </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>選項名稱： </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>編號#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', '全部選項值刪除成功，選項名稱： ');
?>