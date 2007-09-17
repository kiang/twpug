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
//  $Id: whos_online.php 2663 2005-12-24 02:28:51Z ajeh $
//

define('HEADING_TITLE', '誰在線上');

define('TABLE_HEADING_ONLINE', '在線');
define('TABLE_HEADING_CUSTOMER_ID', '帳號');
define('TABLE_HEADING_FULL_NAME', '詳細姓名');
define('TABLE_HEADING_IP_ADDRESS', 'IP 位址');
define('TABLE_HEADING_SESSION_ID', 'Session');
define('TABLE_HEADING_ENTRY_TIME', '進入時間');
define('TABLE_HEADING_LAST_CLICK', '最後點擊');
define('TIME_PASSED_LAST_CLICKED', '<strong>Time Since Clicked：</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', '最後檢視的 URL');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_SHOPPING_CART', '使用者購物車');
define('TEXT_SHOPPING_CART_SUBTOTAL', '小計金額');
define('TEXT_NUMBER_OF_CUSTOMERS', '目前這裡有 %s 個顧客在線');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', '更新名單');
  define('WHOS_ONLINE_LEGEND_TEXT','圖例說明： ');
  define('WHOS_ONLINE_ACTIVE_TEXT','活躍 / 在購物 ');
  define('WHOS_ONLINE_INACTIVE_TEXT','不活躍 /  在購物 ');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','活躍 / 沒有購物 ');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','不活躍 / 沒有購物 ');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','不活躍的，是由最後的點擊 >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','不活躍的，那些由抵達 >');
  define('WHOS_ONLINE_REMOVED_TEXT',' 之後，將會被移除');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // 秒會在誰在線上表單中移除 - 1200 預設 = 20 分鐘
  define('WHOIS_TIMER_INACTIVE',180); // 秒會被視為不活躍 - 180 預設 = 3 分鐘
  define('WHOIS_TIMER_DEAD',540); // 秒會被視為死亡 - 540 預設 = 9 分鐘
  define('WHOIS_SHOW_HOST','1'); // 顯示最後點擊時間和主機名稱 - 1 預設
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // 顯示圖例說明在下面，當大於多少輸入數時 - 12 預設
  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF 關閉');

  define('TEXT_SESSION_ID', '<strong>Session ID：</strong> ');
  define('TEXT_HOST', '<strong>Host：</strong> ');
  define('TEXT_USER_AGENT', '<strong>User Agent：</strong> ');
  define('TEXT_EMPTY_CART', '<strong>空購物車</strong>');
?>