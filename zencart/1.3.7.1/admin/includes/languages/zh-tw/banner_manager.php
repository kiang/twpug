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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//

define('HEADING_TITLE', '廣告看板管理');

define('TABLE_HEADING_BANNERS', '廣告');
define('TABLE_HEADING_GROUPS', '類型');
define('TABLE_HEADING_STATISTICS', '出現率 / 點擊率');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','新視窗');
define('TABLE_HEADING_BANNER_ON_SSL', '顯示 SSL');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_BANNER_SORT_ORDER', '排序<br />順序');

define('TEXT_BANNERS_TITLE', '廣告標題：');
define('TEXT_BANNERS_URL', '廣告 URL:');
define('TEXT_BANNERS_GROUP', '廣告群組：');
define('TEXT_BANNERS_NEW_GROUP', ', 或在下面，輸入一個廣告群組');
define('TEXT_BANNERS_IMAGE', '圖像：');
define('TEXT_BANNERS_IMAGE_LOCAL', ', 或在下面，輸入本地檔案');
define('TEXT_BANNERS_IMAGE_TARGET', '圖像目標 (儲存到)：');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>在這伺服器的，建議圖像目標位置： </strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>注意： HTML 廣告不會記錄廣告的點擊數</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', '排列順序 - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>注意： banners_box_all 框盒，會以它們已定義的排列順序，來顯示廣告</strong>');
define('TEXT_BANNERS_EXPIRES_ON', '逾期在：');
define('TEXT_BANNERS_OR_AT', ', 或在');
define('TEXT_BANNERS_IMPRESSIONS', '出現率 /瀏覽數。');
define('TEXT_BANNERS_SCHEDULED_AT', '排程在：');
define('TEXT_BANNERS_BANNER_NOTE', '<b>廣告註明： </b><ul><li>使用圖像，或 HTML 文本作為廣告 - 但不能同時使用.</li><li>HTML Text 的優先權，比圖像較高</li><li>HTML Text 不會記錄那 click thru, 但會記錄 displays</li><li>廣告有絕對圖像 URLs 的，不應該顯示在有保安的頁面</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>圖像註明： </b><ul><li>上傳的檔案夾必須要有適當的使用者（寫入）權限！ </li><li>請不要填寫（儲存到）的欄位：- 假如您不上傳圖像到網頁主機（例如，你正使用在本地（主機端）的圖像）. </li><li>那（儲存到）的欄位必須是已經存在的檔案夾加上結尾的斜線符號（例子： banners/ ）.</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>逾期註明： </b><ul><li>只需要提交，兩個欄位的其中一個</li><li>如果廣告不是自動逾期，請把這些欄位留空</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>排程註明： </b><ul><li>如果已經設定一個排程，這廣告會在此日期啟用。</li><li>全部有排程的廣告是被標誌為不啟動的，直至它們排程的日期到臨，在這之後它們才會被標誌為啟動。</li></ul>');
define('TEXT_BANNERS_STATUS', '廣告狀態：');
define('TEXT_BANNERS_ACTIVE', '啟動');
define('TEXT_BANNERS_NOT_ACTIVE', '不啟動');
define('TEXT_INFO_BANNER_STATUS', '<strong>注意： </strong> 廣告狀態的更新，是基於排程日期和出現率');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', '廣告新視窗');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>注意： </strong> 廣告會打開在一個新視窗');
define('TEXT_BANNERS_ON_SSL', '廣告在 SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>注意： </strong> 廣告可以顯示在 SSL 安全頁面，而不會出現錯誤');

define('TEXT_BANNERS_DATE_ADDED', '加入日期：');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '排程在： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '逾期在： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '逾期在： <b>%s</b> 出現率');
define('TEXT_BANNERS_STATUS_CHANGE', '狀態改變： %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', '之前 3 天');
define('TEXT_BANNERS_BANNER_VIEWS', '廣告瀏覽');
define('TEXT_BANNERS_BANNER_CLICKS', '廣告點擊');

define('TEXT_INFO_DELETE_INTRO', '您確定要，刪除這個 - 廣告 - 嗎?');
define('TEXT_INFO_DELETE_IMAGE', '刪除廣告圖示');

define('SUCCESS_BANNER_INSERTED', '完成： 這廣告已經加入.');
define('SUCCESS_BANNER_UPDATED', '完成： 這廣告已經更新.');
define('SUCCESS_BANNER_REMOVED', '完成： 這廣告已經移除.');
define('SUCCESS_BANNER_STATUS_UPDATED', '完成： 這廣告的狀態已經更新.');

define('ERROR_BANNER_TITLE_REQUIRED', '錯誤： 請提供廣告標題.');
define('ERROR_BANNER_GROUP_REQUIRED', '錯誤： 請提供廣告群組.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '錯誤： 目標檔案目錄不存在： %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '錯誤： 目標檔案目錄不能寫入： %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '錯誤： 圖像不存在。');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '錯誤： 圖像不能移除。');
define('ERROR_UNKNOWN_STATUS_FLAG', '錯誤： 不明的狀態旗標。.');
define('ERROR_BANNER_IMAGE_REQUIRED', '錯誤： 請提供廣告圖像。');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '錯誤： 圖像檔案目錄不存在，請建立一個圖像檔案目錄，例子： <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '錯誤： 圖像檔案案目錄不能被寫入，這位於： <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', '顯示 SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', '新視窗');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','打開新視窗 - 啟動');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','打開新視窗 - 停止');
define('IMAGE_ICON_BANNER_ON_SSL_ON','顯示在安全頁面上 - 啟動');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','顯示在安全頁面上 - 停止');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', '完成： 這狀態，關於廣告在新視窗打開的，已經更新。');
define('SUCCESS_BANNER_ON_SSL_UPDATED', '完成： 這狀態，關於廣告顯示在 SSL 的，已經更新。');
?>