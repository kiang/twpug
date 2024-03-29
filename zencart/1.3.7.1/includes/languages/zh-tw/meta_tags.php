<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: meta_tags.php 4273 2006-08-26 03:13:52Z drbyte $
 */

// page title
define('TITLE', 'Zen Cart!');

// Site Tagline
define('SITE_TAGLINE', '電子商務的藝術');

// Custom Keywords
define('CUSTOM_KEYWORDS', '電子商業貿易 電子商貿 開放 源碼 商店 網上 線上 中文 翻譯 綠光森林 chinese zen cart, ecommerce, open source, shop, online shopping');

// Review Page can have a lead in:
define('META_TAGS_REVIEW', '評論： ');

// separators for meta tag definitions
// Define Primary Section Output
  define('PRIMARY_SECTION', ' : ');

// Define Secondary Section Output
  define('SECONDARY_SECTION', ' - ');

// Define Tertiary Section Output
  define('TERTIARY_SECTION', ', ');

// Define divider ... usually just a space or a comma plus a space
  define('METATAGS_DIVIDER', ' ');

// Define which pages to tell robots/spiders not to index
// This is generally used for account-management pages or typical SSL pages, and usually doesn't need to be touched.
  define('ROBOTS_PAGES_TO_SKIP', 'login,logoff,create_account,account,account_edit,account_history,account_history_info,account_newsletters,account_notifications,account_password,address_book,advanced_search,advanced_search_result,checkout_success,checkout_process,checkout_shipping,checkout_payment,checkout_confirmation,cookie_usage,create_account_success,contact_us,download,download_timeout,customers_authorization,down_for_maintenance,password_forgotten,time_out,unsubscribe');


// favicon setting
// There is usually NO need to enable this unless you wish to specify a path and/or a different filename
//  define('FAVICON', 'favicon.ico');

?>