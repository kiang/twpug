<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', '登入逾時');
define('HEADING_TITLE', '噢！您的 session 時限已經逾時。');
define('HEADING_TITLE_LOGGED_IN', '噢！ 抱歉，但您不容許，進行這要求行動。 ');
define('TEXT_INFORMATION', '<p>如果您正在下訂單，請登入，而您的購物車會被復原。返回後，您可以回去結帳，和完成您的最後選購。</p><p>如果您已經完成一個訂單和希望檢視它' . (DOWNLOAD_ENABLED == 'true' ? ', 或有一個下載 希望取回它' : '') . ', 請前去您的 <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">我的帳戶</a> 頁面，來檢視您的訂單。</p>');

define('TEXT_INFORMATION_LOGGED_IN', '您仍然登入您的帳戶，可以繼續購物。請在選單上選擇目的地。');

define('HEADING_RETURNING_CUSTOMER', '登入');
define('TEXT_PASSWORD_FORGOTTEN', '您忘記了密碼？')
?>