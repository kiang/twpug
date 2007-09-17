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
//  $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
//

define('HEADING_TITLE', '製造商');

define('TABLE_HEADING_MANUFACTURERS', '製造商');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_HEADING_NEW_MANUFACTURER', '新製造商');
define('TEXT_HEADING_EDIT_MANUFACTURER', '編輯製造商');
define('TEXT_HEADING_DELETE_MANUFACTURER', '刪除製造商');

define('TEXT_MANUFACTURERS', '製造商：');
define('TEXT_DATE_ADDED', '加入日期：');
define('TEXT_LAST_MODIFIED', '最後修改：');
define('TEXT_PRODUCTS', '產品：');
define('TEXT_PRODUCTS_IMAGE_DIR', '上傳到檔案夾： ');
define('TEXT_IMAGE_NONEXISTENT', '圖像不存在');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>或是選擇一個已經存在的，檔案名稱：</strong>');

define('TEXT_NEW_INTRO', '請在下面，輸入新 - 製造商 - 的資料。');
define('TEXT_EDIT_INTRO', '如有需要，請作有關修改');

define('TEXT_MANUFACTURERS_NAME', '製造商名稱：');
define('TEXT_MANUFACTURERS_IMAGE', '製造商圖像：');
define('TEXT_MANUFACTURERS_URL', '製造商 URL：');

define('TEXT_DELETE_INTRO', '您確定要，移除這個 - 製造商 - 嗎?');
define('TEXT_DELETE_IMAGE', '刪除製造商圖像?');
define('TEXT_DELETE_PRODUCTS', '刪除來自這個 - 製造商 - 的產品：（包括產品評論，在特價的產品，和預告產品)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>警告：</b> 這裡仍然有 %s 個產品，連結到這個製造商!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', '錯誤： 我無法寫入這個檔案夾，請設定正確的使用者權限，給予： %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', '錯誤： 檔案夾不存在： %s');
?>