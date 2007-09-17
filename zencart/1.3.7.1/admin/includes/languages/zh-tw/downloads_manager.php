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
//  $Id: downloads_manager.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE','下載 - 管理員');
define('TABLE_HEADING_ATTRIBUTES_ID', '屬性編號');
define('TABLE_HEADING_PRODUCTS_ID', '產品編號');
define('TABLE_HEADING_PRODUCT', '產品名稱');
define('TABLE_HEADING_MODEL', '型號');
define('TABLE_HEADING_OPT_NAME', '選項名稱');
define('TABLE_HEADING_OPT_VALUE', '選項值名稱');
define('TABLE_TEXT_FILENAME', '檔案名');
define('TABLE_TEXT_MAX_DAYS', '過期日數');
define('TABLE_TEXT_MAX_COUNT', '下載次數');
define('TABLE_HEADING_ACTION', '行動');

define('TABLE_HEADING_OPT_PRICE', '價格');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '價格的前綴');

define('TEXT_PRODUCTS_NAME', '產品： ');
define('TEXT_PRODUCTS_MODEL', '型號： ');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_DOWNLOAD', '編輯下載資料');
define('TEXT_INFO_HEADING_DELETE_PRODUCTS_DOWNLOAD', '確定刪除下載');
define('TEXT_INFO_EDIT_INTRO', '編輯下載資料：');
define('TEXT_DELETE_INTRO', '下面的檔案名稱，會由資料庫移除，但檔案還會留在主機裡。');

define('TEXT_INFO_FILENAME', '檔案名稱： ');
define('TEXT_INFO_MAX_DAYS', '允許下載最多日數： ');
define('TEXT_INFO_MAX_COUNT', '允許下載最多次數： ');

define('TEXT_INFO_FILENAME_MISSING','&nbsp;欠缺檔案名稱');
define('TEXT_INFO_FILENAME_GOOD','&nbsp;有效檔案名稱');
?>