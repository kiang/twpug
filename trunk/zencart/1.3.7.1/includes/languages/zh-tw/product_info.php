<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_info.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('TEXT_PRODUCT_NOT_FOUND', '對不起，找不到這產品。');
define('TEXT_CURRENT_REVIEWS', '目前評論：');
define('TEXT_MORE_INFORMATION', '如需更多資料，請瀏覽這項產品的 <a href="%s" target="_blank">網頁</a>。');
define('TEXT_DATE_ADDED', '這產品加入我們目錄，日期在： %s.');
define('TEXT_DATE_AVAILABLE', '這產品將會進庫，日期在： %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', '顧客購買這產品的，都會同時購買...');
define('TEXT_PRODUCT_OPTIONS', '請選擇： ');
define('TEXT_PRODUCT_MANUFACTURER', '製造商： ');
define('TEXT_PRODUCT_WEIGHT', '貨運重量：');
define('TEXT_PRODUCT_QUANTITY', ' 庫存量');
define('TEXT_PRODUCT_MODEL', '型號： ');



// previous next product
define('PREV_NEXT_PRODUCT', '產品： ');
define('PREV_NEXT_FROM', ' 由 ');
define('IMAGE_BUTTON_PREVIOUS','向前');
define('IMAGE_BUTTON_NEXT','向後');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','返回產列表');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', '新進產品在 %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', '快將上市產品');
//define('TABLE_HEADING_DATE_EXPECTED', '預售日期');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [原價： ');
define('TEXT_ATTRIBUTE_IS_FREE',' 現在： 免費]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' 可能會收一次性收費');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','有提供 - 多量購物優惠');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');
?>