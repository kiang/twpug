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
//  $Id: salemaker.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '促銷減價 - 製造器');
define('TABLE_HEADING_SALE_NAME', '促銷名稱');
define('TABLE_HEADING_SALE_DEDUCTION', '扣除');
define('TABLE_HEADING_SALE_DATE_START', '開始日期');
define('TABLE_HEADING_SALE_DATE_END', '截止日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');
define('TEXT_SALEMAKER_NAME', '促銷名稱:');
define('TEXT_SALEMAKER_DEDUCTION', '扣除:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;類型:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', '產品百分比:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', '如果是特價產品:');
define('TEXT_SALEMAKER_DATE_START', '開始日期:');
define('TEXT_SALEMAKER_DATE_END', '截止日期:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>或者</b> 在下面勾選，以選擇那一些分類，來套用這項促銷：');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>點按這裡，查看促銷器使用技巧.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(更多資料)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', '馬上');
define('TEXT_SALEMAKER_NEVER', '永不');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', '勾選這個核取盒如果你要讓這項促銷應用到 <b>全部產品</b>：');
define('TEXT_SALEMAKER_TOP', '整個目錄');
define('TEXT_INFO_DATE_ADDED', '加入日期:');
define('TEXT_INFO_DATE_MODIFIED', '最後修改:');
define('TEXT_INFO_DATE_STATUS_CHANGE', '最後狀態改變:');
define('TEXT_INFO_SPECIALS_CONDITION', '特價條件:');
define('TEXT_INFO_DEDUCTION', '扣除:');
define('TEXT_INFO_PRICERANGE_FROM', '百分比:');
define('TEXT_INFO_PRICERANGE_TO', ' 到 ');
define('TEXT_INFO_DATE_START', '開始:');
define('TEXT_INFO_DATE_END', '截止:');
define('SPECIALS_CONDITION_DROPDOWN_0', '忽略特價 - 套用到產品價格，和取代特價');
define('SPECIALS_CONDITION_DROPDOWN_1', '忽略促銷條件 - 不應用促銷，當有特價存在時');
define('SPECIALS_CONDITION_DROPDOWN_2', '套用促銷減價到特價 - 否則套用到價格');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', '扣除總額');
define('DEDUCTION_TYPE_DROPDOWN_1', '百分比');
define('DEDUCTION_TYPE_DROPDOWN_2', '新價格');
*/
define('TEXT_INFO_HEADING_COPY_SALE', '複製促銷');
define('TEXT_INFO_COPY_INTRO', '請輸入一個用來複製的名稱<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', '刪除促銷');
define('TEXT_INFO_DELETE_INTRO', '您確定要，永久刪除這 - 促銷減價 - 嗎?');
?>