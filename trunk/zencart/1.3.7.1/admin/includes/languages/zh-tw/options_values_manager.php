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
//  $Id: options_values_manager.php 1148 2005-04-07 19:24:10Z drbyte $
//

define('HEADING_TITLE_OPT', '產品選項');
define('HEADING_TITLE_VAL', '選項值');
define('HEADING_TITLE_ATRIB', '產品屬性');

define('TABLE_HEADING_ID', '編號');
define('TABLE_HEADING_PRODUCT', '產品名稱');
define('TABLE_HEADING_OPT_NAME', '選項名稱');
define('TABLE_HEADING_OPT_VALUE', '選項值');
define('TABLE_HEADING_OPT_PRICE', '價格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '前綴');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_DOWNLOAD', '可下載的產品:');
define('TABLE_TEXT_FILENAME', '檔案名稱:');
define('TABLE_TEXT_MAX_DAYS', '截止日期:');
define('TABLE_TEXT_MAX_COUNT', '允許下載次數:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">這個選項有連結著的產品和選項值 - 刪除它是不安全的.<br />注意: 任何與這選項關聯的下載檔案不會從這伺服器移除.</span>');
define('TEXT_OK_TO_DELETE', '這個選項沒有連結著的產品和選項值 - 您可以安全將它刪除.');
define('TEXT_OPTION_ID', '選項編號');
define('TEXT_OPTION_NAME', '選項名稱');
define('TABLE_HEADING_OPT_DISCOUNTED','特價');

define('ATTRIBUTE_WARNING_DUPLICATE','重複屬性 - 屬性未加入'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','重複屬性存在 - 屬性未改變'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','屬性選項和選項值不相同 - 屬性未加入'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','屬性選項和選項值不相同 - 屬性未改變'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','可能新增了相同的選項名稱'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','可能新增了相同的選項值'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','編輯'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','刪除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','增加新屬性'); // title
define('TEXT_DOWNLOADS_DISABLED','注意: 下載功能是關閉狀態');

define('TABLE_TEXT_MAX_DAYS_SHORT', '日:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '最大:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','排序');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','預設排序');
  define('TEXT_SORT',' Order: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','重量的前綴');
  define('TABLE_HEADING_OPT_WEIGHT','重量');
  define('TABLE_HEADING_OPT_SORT_ORDER','排序');
  define('TABLE_HEADING_OPT_DEFAULT','預設');

  define('TABLE_HEADING_YES','是');
  define('TABLE_HEADING_NO','否');

  define('TABLE_HEADING_OPT_TYPE', '選項類型'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','大小');
  define('TABLE_HEADING_OPTION_VALUE_MAX','最大');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','橫列數');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','註解');

  define('TEXT_OPTION_VALUE_COMMENTS','註解: ');
  define('TEXT_OPTION_VALUE_SIZE','顯示大小: ');
  define('TEXT_OPTION_VALUE_MAX','最大長度: ');

  define('TEXT_ATTRIBUTES_IMAGE','屬性圖像樣本：');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','屬性圖像檔案夾：');

  define('TEXT_ATTRIBUTES_FLAGS','屬性<br />旗標:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '只用於<br />顯示用途:');
  define('TEXT_ATTRIBUTES_IS_FREE', '屬性是免費的<br />當產品是免費時：');
  define('TEXT_ATTRIBUTES_DEFAULT', '預設屬性<br />被標誌為已選擇：');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '給特價產品及<br />促銷價使用的特價:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','當價格以屬性表示時<br />包括基本價');

  define('TEXT_PRODUCT_OPTIONS_INFO','編輯 - 產品選項，為了額外的設定');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>複製到全部產品，而它的選項名稱和選項數值是 ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '請選擇現存於一項 / 多項產品中的 - 選項名稱和選項值，是您希望用來接受複製其它的 - 選項名稱和選項值，替代全部產品使用這現存的選項名稱和選項數值。');
  define('TEXT_SELECT_OPTION_FROM', '要配合的選項名稱:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', '要配合的選項數值:');
  define('TEXT_SELECT_OPTION_TO', '要加入的選項名稱:');
  define('TEXT_SELECT_OPTION_VALUES_TO', '要加入的選項數值:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', '若為全部產品把它留空 / 或<br />輸入需要更新的產品分類編號#');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>複製- 選項名稱/選項值 -到那些已經有- 選項名稱-的產品...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', '請選擇現存於一項 / 多項產品中的 - 屬性名稱和屬性值，以加入到所有產品，或在已選擇分類裡面的產品，而它們擁有已選的選項名稱。
                                                   <br /><strong>範例：</strong> 加入選項名稱: 顏色選項值: 加入 -紅色(Red) 到所有產品，如果它們屬於 -選項名稱: 大少(Size)
                                                   <br /><strong>範例：</strong> 加入選項名稱: 顏色選項值: 加入 -綠色(Green) 預設 -選項值 -由產品編號#: 34 去到所有產品而它們的 -選項名稱是: Size (大少)
                                                   <br /><strong>範例：</strong> 加入選項名稱: 顏色選項值: 綠色(Green) 與預設值 -由產品編號#: 34 去到所有產品而它們擁有選項名稱: Size (大少) 給予產品類型編號#: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', '要「加入去到」的 -選項名稱:');
  define('TEXT_SELECT_OPTION_FROM_ADD', '要「加入」的 -選項名稱:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', '要「加入」的 -選項值:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', '預設由 -產品編號# 來的新屬性值 -或把它留空如果沒有預設屬性值:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>現存的 -產品屬性 -應該如何處理？</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>移除</strong> 在先，然後複製新的屬性');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>更新</strong> 現存的屬性（利用新的設定/價格）');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>忽略</strong> 現存的屬性和只加入新的屬性');

  define('TEXT_INFO_FROM', ' 由: ');
  define('TEXT_INFO_TO', ' 到: ');
  define('ERROR_OPTION_VALUES_COPIED', '錯誤： 重複的選項名稱和選項數值');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', '錯誤： 選擇了, 不相符的選項名稱和選項數值');
  define('ERROR_OPTION_VALUES_NONE', '錯誤： 找不到要複製的');
  define('SUCCESS_OPTION_VALUES_COPIED', '完成複製！ ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', '錯誤：&nbsp; 缺少選項名稱/選項值 -在產品編號#： ');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>移除相配的屬性；由全部產品而它的選項名稱和數值是 ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '請選一項選項名稱和選項值，它已存在於一項 / 多項產品中；是您希望從所有產品，或在一個分類裡面的全部產品中移除');
  define('TEXT_SELECT_DELETE_OPTION_FROM', '要配合的選項名稱:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', '要配合的選項數值:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', '錯誤： 選擇了，不相配的選項名稱和選項數值');

  define('SUCCESS_OPTION_VALUES_DELETE', '完成： 移除: ');
?>