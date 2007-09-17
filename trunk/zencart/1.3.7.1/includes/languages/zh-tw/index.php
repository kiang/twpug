<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('TEXT_MAIN','這是中文正體的主要定義訊息，會在模板檔案的內容仍沒有提供時，出現在主頁面之內，這個模板檔案位於：<br /> <strong>/includes/languages/YOUR_LANGUAGE/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', '歡迎您！親愛的 <span class="greetUser"> 來賓</span>， 請您 <a href="%s"> 在這裡登入</a>！');
} else {
  define('TEXT_GREETING_GUEST', '歡迎您！ 請享用我們的線上商店示範。');
}

define('TEXT_GREETING_PERSONAL', '親愛的 <span class="greetUser">%s</span> ，歡迎您！請參觀我們的 <a href="%s">最新產品</a>！');

define('TEXT_INFORMATION', '在這裡樣定義您的主頁面。');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', '在庫產品');
  define('TABLE_HEADING_IMAGE', '產品圖像');
  define('TABLE_HEADING_MODEL', '型號');
  define('TABLE_HEADING_PRODUCTS', '產品名稱');
  define('TABLE_HEADING_MANUFACTURER', '製造商');
  define('TABLE_HEADING_QUANTITY', '數量');
  define('TABLE_HEADING_PRICE', '價格');
  define('TABLE_HEADING_WEIGHT', '重量');
  define('TABLE_HEADING_BUY_NOW', '馬上購買');
  define('TEXT_NO_PRODUCTS', '這分類暫時沒有可列出的產品。');
  define('TEXT_NO_PRODUCTS2', '這製造商暫時沒有可列出的產品。');
  define('TEXT_NUMBER_OF_PRODUCTS', '產品數目： ');
  define('TEXT_SHOW', '過濾結果：');
  define('TEXT_BUY', '購買 1 \'');
  define('TEXT_NOW', '\' 馬上');
  define('TEXT_ALL_CATEGORIES', '全部分類');
  define('TEXT_ALL_MANUFACTURERS', '全部製造商');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '歡迎您來到 Zen Cart&trade; 線上購物車！<br />中文翻譯由 <a href="http://open.38.com" target="_blank">綠光森林</a> 提供維護。<br /><br />');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '歡迎您來到 Zen Cart&trade; 線上購物車！<br />中文翻譯由 <a href="http://open.38.com" target="_blank">綠光森林</a> 提供維護。<br /><br />');
}
?>
