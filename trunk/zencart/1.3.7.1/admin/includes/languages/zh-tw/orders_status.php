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
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '訂單狀態 - 名稱');

define('TABLE_HEADING_ORDERS_STATUS', '訂單狀態 - 名稱');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_INFO_EDIT_INTRO', '如有需要，請作有關修改');
define('TEXT_INFO_ORDERS_STATUS_NAME', '訂單狀態 - 名稱:');
define('TEXT_INFO_INSERT_INTRO', '請輸入新的 - 訂單狀態 - 和有關的資料');
define('TEXT_INFO_DELETE_INTRO', '您確定要刪除，這個 - 訂單狀態 - 嗎?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', '新增 - 訂單狀態');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', '編輯 - 訂單狀態');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', '刪除 - 訂單狀態');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', '錯誤: 預設的 - 訂單狀態 - 不能移除，請選擇另一個 - 訂單狀態 - 為預設，然後再試一次。');
define('ERROR_STATUS_USED_IN_ORDERS', '錯誤： 這個 - 訂單狀態 - 目前已被使用在 - 訂單- 中。');
define('ERROR_STATUS_USED_IN_HISTORY', '錯誤: 這個 - 訂單狀態 - 目前已被使用在 - 訂單狀態 - 歷史 - 中。');
?>