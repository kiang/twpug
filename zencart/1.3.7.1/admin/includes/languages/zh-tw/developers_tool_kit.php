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
//  $Id: developers_tool_kit.php 1105 2005-04-04 22:05:35Z birdbrain $
//
  define('HEADING_TITLE', '開發者 - 工具');
  define('TABLE_CONFIGURATION_TABLE', '查詢常數 (CONSTANT) 定義');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>完成</strong> 更新產品的價格排序器數值');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>錯誤：</strong> 找不到相關的設定關鍵字 ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>錯誤：</strong> 沒有輸入設定關鍵字或字詞 ... 搜尋停止');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>更新全部產品的價格排序器</strong><br />以便能夠，以價格顯示來排序： ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>查詢常數 (CONSTANT) 或語系檔中的定義</strong>');
  define('TEXT_CONFIGURATION_KEY', '關鍵字或名稱：');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注意：</strong> 常數 -CONSTANT 是以大寫 uppercase 表示。<br />語系檔案，函數 -functions, classes, 等等的查詢會進行，當在資料庫表單找不到結果時，假使它們已經從下拉表單中選取。');

  define('TABLE_TITLE_KEY', '<strong>關鍵字：</strong>');
  define('TABLE_TITLE_TITLE', '<strong>標題：</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>介紹：</strong>');
  define('TABLE_TITLE_GROUP', '<strong>群組：</strong>');
  define('TABLE_TITLE_VALUE', '<strong>數值：</strong>');

  define('TEXT_LOOKUP_NONE', '沒有');
  define('TEXT_INFO_SEARCHING', '搜尋 ');
  define('TEXT_INFO_FILES_FOR', ' 檔案 ... 為： ');
  define('TEXT_INFO_MATCHES_FOUND', '找到符合的句子： ');

  define('TEXT_LANGUAGE_LOOKUPS', '語系檔案查詢：');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '全部的語系檔，在 ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '全部的主要語系檔 - 目錄 (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '全部目前已選的語系檔 - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '全部主要語系檔 - 管理 (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '全部目前已選的語系檔 - 管理 (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '全部目前已選的語系檔 - 目錄 / 管理');

  define('TEXT_FUNCTION_CONSTANT', '<strong>查詢函數或函數檔案內的事物</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Function 檔案查詢：');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '全部的函數檔案 - 目錄 / 管理');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '全部的函數檔案 - 目錄');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '全部的函數檔案 - 管理');

  define('TEXT_CLASS_CONSTANT', '<strong>查詢 Classes 或 Classes 檔案內的事物</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Classes 檔案查詢：');
  define('TEXT_CLASS_LOOKUP_CURRENT', '全部 Classes 檔案 - 目錄 / 管理');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '全部 Classes 檔案 - 目錄');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '全部 Classes 檔案 - 管理');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>查詢模板的事物</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', '模板檔案查詢：');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '全部模板檔案 - /模板 側框盒 / 頁面 等等.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '全部的模板檔案 - /模板');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '全部的模板檔案 - /側框盒');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '全部的模板檔案 - /頁面');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>查詢在全部檔案</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '全部檔案查詢：');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '全部檔案 - 目錄 / 管理');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '全部檔案 - 目錄');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '全部檔案 - 管理');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','不提供編輯');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' 或，隱藏');
?>