<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: media_manager.php 4873 2006-11-02 09:12:46Z drbyte $
//

define('HEADING_TITLE_MEDIA_MANAGER', '媒體管理員');

define('TABLE_HEADING_MEDIA', '專輯名稱');
define('TABLE_HEADING_ACTION', '行動');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', '新 - 媒體專輯');
define('TEXT_NEW_INTRO', '請在下面，輸入新 - 媒體專輯 - 的資料。');
define('TEXT_MEDIA_COLLECTION_NAME', '媒體專輯名稱：');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', '請使用上面部份來改變- 媒體專輯名稱，然後點按「儲存」按鈕。<br /><br />
                                        請使用下面部份，由- 媒體專輯 -中，新增或移除- 媒體的剪輯片段。');
define('TEXT_DATE_ADDED', '加入日期：');
define('TEXT_LAST_MODIFIED', '最後修改：');
define('TEXT_PRODUCTS', '已連結產品：');
define('TEXT_CLIPS', '已連結片段：');
define('TEXT_NO_PRODUCTS', '沒有產品在這個分類裡');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', '編輯 - 媒體專輯');
define('TEXT_EDIT_INTRO', '請在下面，修定新 - 媒體專輯 - 的詳細資料。');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', '刪除 - 媒體專輯');
define('TEXT_DELETE_INTRO', '您確定要，刪除這個 - 媒體專輯 - 嗎?');
  define('TEXT_DISPLAY_NUMBER_OF_MEDIA', '顯示 <strong>%d</strong> 到 <strong>%d</strong> (共 <strong>%d</strong> 個媒體專輯)');
define('TEXT_ADD_MEDIA_CLIP', '新增媒體的剪輯片段');
define('TEXT_MEDIA_CLIP_DIR', '上傳到媒體檔案夾');
define('TEXT_MEDIA_CLIP_TYPE', '媒體剪輯片段類型');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', '指派 - 媒體專輯 - 到產品');
define('TEXT_PRODUCTS_INTRO', '您可以使用下面的表格，為產品指派或移除這個媒體專輯。');
define('IMAGE_PRODUCTS', '指派到產品');
define('TEXT_DELETE_PRODUCTS', '刪除這個 - 媒體專輯 - 和所有連結著它的項目嗎?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>警告：</b> 這裡仍然有 %s 個產品，連結到這個媒體專輯!');
define('TEXT_WARNING_FOLDER_UNWRITABLE', '注意：媒體資料夾 \' . DIR_FS_CATALOG_MEDIA . \' 無法寫入，將無法上傳檔案。');

define('ERROR_UNKNOWN_DATA', '錯誤： 提供了不明資料 ... 操作被取消');
define('TEXT_ADD', '加入');


?>