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
//  $Id: currencies.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '貨幣');

define('TABLE_HEADING_CURRENCY_NAME', '貨幣');
define('TABLE_HEADING_CURRENCY_CODES', '編碼');
define('TABLE_HEADING_CURRENCY_VALUE', '匯率比值');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_INFO_EDIT_INTRO', '如有需要，請作有關修改');
define('TEXT_INFO_CURRENCY_TITLE', '名稱：');
define('TEXT_INFO_CURRENCY_CODE', '編碼：');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', '左置 - 貨幣符號：');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', '貨幣符號 - 右置：');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', '十進位點 -  符號：');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', '千進位點 - 符號：');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', '十進位後 - 數位：');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '最後更新：');
define('TEXT_INFO_CURRENCY_VALUE', '匯率比值：');
define('TEXT_INFO_CURRENCY_EXAMPLE', '輸出範例：');
define('TEXT_INFO_INSERT_INTRO', '請輸入新貨幣和有關的資料');
define('TEXT_INFO_DELETE_INTRO', '您確定要刪除這個貨幣嗎?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', '新貨幣');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', '編輯貨幣');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', '刪除貨幣');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' （須自行手動更新貨幣值）');
define('TEXT_INFO_CURRENCY_UPDATED', '%s (%s) 貨幣的匯率已經更新完畢，是經由 %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', '錯誤： 預設的貨幣不能移除，請設定其他貨幣為預設，然後再嘗試。');
define('ERROR_CURRENCY_INVALID', '錯誤： %s (%s) 貨幣的匯率不能經由 %s 更新。請問這是有效的貨幣編碼？');
define('WARNING_PRIMARY_SERVER_FAILED', '警告： 主要的匯率對換伺服器 (%s) ，在對 %s (%s) 進行更新時發生錯誤 - 正嘗試使用輔助的匯率對換伺服器。');
?>