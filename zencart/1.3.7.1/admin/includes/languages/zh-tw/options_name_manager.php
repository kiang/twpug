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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
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
define('TABLE_HEADING_DOWNLOAD', '可下載產品：');
define('TABLE_TEXT_FILENAME', '檔案名稱：');
define('TABLE_TEXT_MAX_DAYS', '截止日期：');
define('TABLE_TEXT_MAX_COUNT', '最多下載數：');

define('TEXT_WARNING_OF_DELETE', '這選項已有產品和數值連結著的 - 刪除它是不安全的。');
define('TEXT_OK_TO_DELETE', '這個選項沒有產品連結著的 - 刪除它是安全的。<br />警告： 全部選項值將會被刪除，為了這選項名稱');
define('TEXT_OPTION_ID', '選項編號');
define('TEXT_OPTION_NAME', '選項名稱');
define('TABLE_HEADING_OPT_DISCOUNTED','已減價');

define('ATTRIBUTE_WARNING_DUPLICATE','重複的屬性 - 屬性沒有被加入'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','重複的屬性存在 - 屬性沒有被更改'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','屬性選項和選項值不相配 - 屬性沒有被加入'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','屬性選項和選項值不相配 - 屬性沒有被更改'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','可能重複的選項名稱被加入了'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','可能重複的選項值被加入了'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','編輯'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','移除'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','加入新屬性'); // title
define('TEXT_DOWNLOADS_DISABLED','注意： 下載已經關閉');

define('TABLE_TEXT_MAX_DAYS_SHORT', '日數：');
define('TABLE_TEXT_MAX_COUNT_SHORT', '最多：');

  define('TABLE_HEADING_OPTION_SORT_ORDER','排序');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','預設排序');
  define('TEXT_SORT',' 排序： ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','前綴');
  define('TABLE_HEADING_OPT_WEIGHT','重量');
  define('TABLE_HEADING_OPT_SORT_ORDER','排序');
  define('TABLE_HEADING_OPT_DEFAULT','預設');

  define('TABLE_HEADING_YES','是');
  define('TABLE_HEADING_NO','否');

  define('TABLE_HEADING_OPT_TYPE', '選項類型'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','大小');
  define('TABLE_HEADING_OPTION_VALUE_MAX','最大');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','橫列');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','註解');

  define('TEXT_OPTION_VALUE_COMMENTS','註解： ');
  define('TEXT_OPTION_VALUE_SIZE','顯示大小： ');
  define('TEXT_OPTION_VALUE_MAX','最大長度： ');

  define('TEXT_ATTRIBUTES_IMAGE','屬性圖像樣本：');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','屬性圖像檔案夾：');

  define('TEXT_ATTRIBUTES_FLAGS','屬性<br />旗標：');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '只用作<br />顯示用途：');
  define('TEXT_ATTRIBUTES_IS_FREE', '屬性是免費的<br />當產品是免費時：');
  define('TEXT_ATTRIBUTES_DEFAULT', '預設屬性<br />被標誌為已選擇：');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '應用相同減價<br />給產品使用：');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','包括基本價格<br />當訂價是基於屬性時');

  define('TEXT_PRODUCT_OPTIONS_INFO','編輯 - 產品選項，為了額外的設定');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', '警告： 找不到產品 ... 沒有被更新');

define('TEXT_SELECT_PRODUCT', ' 選擇一產品');
define('TEXT_SELECT_CATEGORY', ' 選擇一分類');
define('TEXT_SELECT_OPTION', '選擇一選項名稱');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>加入全部選項值到全部的產品，為了選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', '更新現存的全部產品，它們有最少一選項值，和 加入全部的選項值，到一選項名稱');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', '完成更新選項 ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>加入全部選項值到一產品，和為了選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', '更新一產品，它有最少一選項值，和加入 - 全部選項值，到一選項名稱');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>加入全部的選項值到一個產品分類，為了選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', '更新一個產品分類，當產品有最少一個選項值，和加入全部的選項值到一選項名稱');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>注意：</strong> 排序的順序，將會被設定為這些產品的，預設選項值的排程順序');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>刪除全部選項值，到全部產品，為了選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '更新-全部-現有產品，它們有最少一選項值，和刪除在一個選項名稱內的，全部選項值');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>刪除一個產品的全部選項值</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', '更新有最少一個選項值的一個產品, 然後刪除在選項名稱內的全部選項值');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>刪除全部選項值，在一個產品分類內的，為了選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', '更新一個產品分類，當那產品有最少一個選項值，和刪除在一選項名稱內的，全部選項值');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>注意：</strong> 全部選項值，將會被移除，為了那些已擇的產品。這不會刪除選項值的設定。');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>複製全部選項值到另一個選項名稱</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '全部選項值，將會被複製，由一選項名稱到另一選項名稱');
define('TEXT_SELECT_OPTION_FROM', '複製由選項名稱： ');
define('TEXT_SELECT_OPTION_TO', '複製全部選項值到選項名稱： ');
define('SUCCESS_OPTION_VALUES_COPIED', '完成複製！ ');
define('ERROR_OPTION_VALUES_COPIED', '錯誤 - 不能複製選項值到相同的選項名稱! ');
define('ERROR_OPTION_VALUES_NONE', '錯誤 - 複製到的選項名稱有 0 個選項值. 沒有複製任何東西!');
define('TEXT_WARNING_BACKUP', '警告： 請經常進行適當的資料庫備份，在進行總體更改之前更加要首先備份您的資料庫');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', '每橫列的屬性圖示： ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', '屬性的式樣 - 單選按鈕/核取方塊： ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>文字屬性的最大長度和顯示尺寸：</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>圖像式樣：</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= 圖像在選項名稱之下');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= 元素，圖像和選項值');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= 元素，圖像和選項值下面');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= 選項值在項目和圖示下面');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= 元素在圖像和選項值下面');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= 元素在圖像和選項名稱上面');
?>