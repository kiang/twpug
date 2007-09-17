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
// $Id: popup_search_help.php 2471 2005-11-29 01:14:18Z drbyte $
//

define('HEADING_SEARCH_HELP', '搜尋說明');
define('TEXT_SEARCH_HELP', '為了達到更精確的搜尋，可以利用 AND 和/或 OR 的聲明指令來分隔關鍵字，以控制搜尋得到更精細的結果。<br /><br />舉例， <span style="text-decoration:underline;">Microsoft AND mouse</span> 會產生一個結果的組合，而它包會含兩個關鍵字。然而，在 <u>mouse OR keyboard</u>, 得出的結果組合，會同時包含兩個，或單一的關鍵字。<br /><br />要有確切敏合的搜尋，可以把組合關鍵字加上雙引號 "" 。<br /><br />舉例， <span style="text-decoration:underline">"notebook computer"</span> 會產生一個結果組，它會確切的敏合所輸入的字串。<br /><br />括號可以利用為，對結果組的進一步控制。<br /><br />舉例， <span style="text-decoration:underline;">Microsoft and (keyboard or mouse or "visual basic")</span>.');
define('TEXT_CLOSE_WINDOW', '<span class="pseudolink">關閉視窗</span> [x]');

?>