<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */

define('NAVBAR_TITLE', '購物車內容');
define('HEADING_TITLE', '您的購物車內容');
define('HEADING_TITLE_EMPTY', '您的購物車t');
define('TEXT_INFORMATION', '您可能想在這裡，加入一些指示，甚樣使用購物車。(設定在 includes/languages/english/shopping_cart.php)');
define('TABLE_HEADING_REMOVE', '移除');
define('TABLE_HEADING_QUANTITY', '數量');
define('TABLE_HEADING_MODEL', '型號');
define('TABLE_HEADING_PRICE','單位');
define('TEXT_CART_EMPTY', '您的購物車沒有內容。');
define('SUB_TITLE_SUB_TOTAL', '小計：');
define('SUB_TITLE_TOTAL', '總計：');

define('OUT_OF_STOCK_CANT_CHECKOUT', '產品若記有 ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 是暫時沒有庫存，或在庫量不能滿足您的訂單要求，<br />請更改這記有 (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ') 的產品數量 謝謝您');
define('OUT_OF_STOCK_CAN_CHECKOUT', '產品若記有 ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 是暫時沒有庫存的。<br />沒有庫存的項目，會安排在預定訂單。');

define('TEXT_TOTAL_ITEMS', '總項目： ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;重量： ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;總額： ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[說明 (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>