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
//  $Id: store_manager.php 2634 2005-12-20 06:56:04Z drbyte $
//
//
  define('HEADING_TITLE', '商店管理員');
  define('TABLE_CONFIGURATION_TABLE', '查詢常數 (CONSTANT) 定義');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>完成</strong> 更新屬性排序');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>完成</strong> 更新產品的價格排序器數值');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>完成</strong> 重設產品檢視的數目為 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>完成</strong> 重設產品已訂購為 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>完成</strong> 重設所有主目錄，為已連繫的產品');
  define('SUCCESS_UPDATE_COUNTER', '<strong>完成</strong> 計數器更新為： ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>完成</strong> 更新管理的活動記錄');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>錯誤：</strong> 找不到符合的設置關鍵 ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>錯誤：</strong> 沒有輸入要搜尋的設置關鍵或文字 ... 搜尋被終止');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>更新計數器</strong><br />到一新數值： ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>更新所有產品價格的排序器</strong><br />使可以排序是依照顯示價格： ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>重設全部產品被檢視數目</strong><br />重設產品被檢視數目為 0： ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>重設全部已訂購產品</strong><br />重設已訂購產品數目為 0： ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>重設全部產品的主分類編號</strong><br />使可以用作已連繫產品和訂價： ');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>由資料庫清空管理區活動記錄表<br />警告： 在執行這更新之前！請確定備份您的資料庫！</strong><br />這管理活動記錄，是用跟蹤的方法來記錄在管理區的活動。由於它的性質它會變成非常大，增長非常快，所以需要經常的清理<br />警告會發出在記錄超過 50,000 項，或超過 60 日，次序以早發生者為先。');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>重設目前的訂單編號</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '<strong>注意： 在更新 - 目前訂單編號 ID - 之前 ...</strong><br /><br />首先創建一個測試訂單。之後，使用這測試訂單編號 ID 來完成以下的資料。<br />那跟著真正的，新的 - 訂單編號ID，應該輸入為，比您想用的 - 訂單編號ID - 小於 1 的數值。<br /><strong>例子：</strong> 如果您想跟著的真正 - 訂單編號ID 將為 1225, 應該輸入號碼 1224<br /><br /><strong>警告：</strong> 您可以重置那些 - 訂單編號ID 向前，但不可向後。<br />所以如果您想設定 - 訂單編號ID - 成為 25, 之後更改成為 20, 那跟著的 - 訂單編號ID - 將會仍然是 26.');
  define('TEXT_OLD_ORDERS_ID', '舊的訂單編號');
  define('TEXT_NEW_ORDERS_ID', '新的訂單編號 &nbsp;');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>查詢常數 (CONSTANT) 定義 或 語系檔案定義</strong>');
  define('TEXT_CONFIGURATION_KEY', '關鍵字或名稱：');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注意：</strong> 常數 (CONSTANT) 是以大寫 uppercase 來表示的。<br />在搜尋資料庳表單沒有結果時，搜尋語系檔案可以作為替代方法。');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>查詢語系檔案定義</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', '查詢文字：');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>注意：</strong> 語系檔案查詢可以是大寫 upper case 或小寫 lower case');

  define('TABLE_TITLE_KEY', '<strong>關鍵：</strong>');
  define('TABLE_TITLE_TITLE', '<strong>標題：</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>描述：</strong>');
  define('TABLE_TITLE_GROUP', '<strong>團體：</strong>');
  define('TABLE_TITLE_VALUE', '<strong>數值：</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '語系檔案查詢：');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '未有設定');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '全部語系檔案關於 ' . strtoupper($_SESSION['language']) . ' - 目錄/管理');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '全部主要語系檔案 - 目錄 (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '全部目前已選擇語系檔案 - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '全部主要語系檔案 - 管理 (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . '**chinese**.php /english.php /espanol.php 之類。)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '全部目前已選擇語系檔案 - 管理 (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '全部目前已選擇語系檔案 - 目錄/管理');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','不可以編輯');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' 或，隱藏');
?>