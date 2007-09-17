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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', '進階搜尋');
define('NAVBAR_TITLE_2', '搜尋結果');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', '進階搜尋');

define('HEADING_SEARCH_CRITERIA', '搜尋範圍');

define('TEXT_SEARCH_IN_DESCRIPTION', '搜尋產品介紹');
define('ENTRY_CATEGORIES', '產品分類：');
define('ENTRY_INCLUDE_SUBCATEGORIES', '包含產品子分類');
define('ENTRY_MANUFACTURERS', '製造商：');
define('ENTRY_PRICE_FROM', '價格下限：');
define('ENTRY_PRICE_TO', '價格上限：');
define('ENTRY_DATE_FROM', '開始日期：');
define('ENTRY_DATE_TO', '結束日期：');

define('TEXT_SEARCH_HELP_LINK', '搜尋的說明 [?]');

define('TEXT_ALL_CATEGORIES', '所有產品分類');
define('TEXT_ALL_MANUFACTURERS', '所有製造商');

define('HEADING_SEARCH_HELP', '搜尋的說明');
define('TEXT_SEARCH_HELP', '為了達到更精確的搜尋，可以利用 AND 和/或 OR 的聲明指令來分隔關鍵字，以控制搜尋得到更精細的結果。<br><br>如要用精確的組合關鍵字來搜尋，可以把組合關鍵字加上雙引號 "" 。<br><br>例子： <u>"notebook computer"</u> 產生的只會是字串的確實匹配結果。<br><br>利用括號更可以得到更進一步的組合控制結果。<br><br>例子：  <u>Microsoft AND (keyboard or mouse or "visual basic")</u>。');
define('TEXT_CLOSE_WINDOW', '關閉視窗 [ X ]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', '型號 ');
define('TABLE_HEADING_PRODUCTS', '產品名稱 ');
define('TABLE_HEADING_MANUFACTURER', '製造商 ');
define('TABLE_HEADING_QUANTITY', '數量 ');
define('TABLE_HEADING_PRICE', '價格 ');
define('TABLE_HEADING_WEIGHT', '重量 ');
define('TABLE_HEADING_BUY_NOW', '馬上買');

define('TEXT_NO_PRODUCTS', '這裡沒有產品符合這搜尋的條件。');

define('ERROR_AT_LEAST_ONE_INPUT', '至少要在一個搜尋表的欄位上填上資料。');
define('ERROR_INVALID_FROM_DATE', '開始日期 - 是無效的。');
define('ERROR_INVALID_TO_DATE', '結束日期 - 是無效的。');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '結束日期 - 必須大於或等於開始日期。');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '價格下限 - 必須為數字。');
define('ERROR_PRICE_TO_MUST_BE_NUM', '價格上限 - 必須為數字。');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '價格上限 - 必須大於或等於價格下限。');
define('ERROR_INVALID_KEYWORDS', '關鍵字 - 是無效的。');
?>
