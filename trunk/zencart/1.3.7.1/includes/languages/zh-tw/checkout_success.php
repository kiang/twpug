<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 5407 2006-12-27 01:35:37Z drbyte $
 */

define('NAVBAR_TITLE_1', '結帳');
define('NAVBAR_TITLE_2', '訂單程序完成，謝謝！');

define('HEADING_TITLE', '謝謝您！ 十分感謝惠顧我們的購物商店！');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', '請通知我 - 如果我選取的產品有更新：');
define('TEXT_SEE_ORDERS', '您可以檢查您的訂單記錄，只要前去 <a href="\' . zen_href_link(FILENAME_ACCOUNT, \'\', \'SSL\') . \'">我的帳戶</a> 頁面，之後點按那「顯示全部訂單」。<br /><br />');
define('TEXT_CONTACT_STORE_OWNER', '如果您有有任何問題，請不用猶疑！ 可直接聯絡我們的 <a href="\' . zen_href_link(FILENAME_CONTACT_US) . \'">會員服務</a>，我們誠心為您解答和提供協助， 謝謝！');
define('TEXT_THANKS_FOR_SHOPPING', '多謝使用我們的網上服務！');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', '您亦可於稍後時間下載產品，時間是 \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>您的訂單號碼是： </strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '注意：為了完成您的訂單，我們建立了一個暫時的帳號，您可以透過登出來關閉這個帳號，點選登出也確保您的收件與採購資訊不會讓下一個使用這台電腦的人看到；當然，您還是可以繼續購物，隨時透過頁首的連結就可以登出。');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '感謝您的購物，請點選登出來確保您的收件與採購資訊不會讓下一個使用這台電腦的人看到。');
?>