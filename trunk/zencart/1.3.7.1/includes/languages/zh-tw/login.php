<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 5458 2006-12-29 22:00:08Z drbyte $
 */

define('NAVBAR_TITLE', '登入');
define('HEADING_TITLE', '歡迎！ 請登入');

define('HEADING_NEW_CUSTOMER', '新來賓？ 請提供資料，方便處理您的帳單');
define('HEADING_NEW_CUSTOMER_SPLIT', 'New Customers');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', '注意： 您的資料，我們只用於，處理您的帳戶和送貨上！<br /><br />您在「 \' . STORE_NAME . \' 」設立登入資料，<br />可以使到您，購物更加快捷方便，隨時檢查您的訂單情況，<br />令您更容易，追蹤您的訂單狀態，翻查以前的記錄。<br /><br />這樣方便、簡單輕鬆，不要錯過！<br />請您立即行動，馬上提供資料！<br /><br />');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Have a PayPal account? Want to pay quickly with a credit card? Use the PayPal button below to use the Express Checkout option.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Or</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Create a Customer Profile with <strong>\' . STORE_NAME . \'</strong> which allows you to shop faster, track the status of your current orders, review your previous orders and take advantage of our other member\'s benefits.');

define('HEADING_RETURNING_CUSTOMER', '回訪的顧客： 請登入');
define('HEADING_RETURNING_CUSTOMER_SPLIT', '回訪的顧客');

define('TEXT_RETURNING_CUSTOMER_SPLIT', '繼續之前請登入您在 <strong>\' . STORE_NAME . \'</strong> 的帳號。');

define('TEXT_PASSWORD_FORGOTTEN', '您是否忘記了密碼？');

define('TEXT_LOGIN_ERROR', '錯誤： 對不起： 這個 E-Mail 地址 與/或 密碼沒有符合的紀錄。');
define('TEXT_VISITORS_CART', '<strong>注意：</strong> 當您登入之後，您的 &quot;訪客購物車&quot; 上的內容，將會併合到您的 &quot;會員購物車&quot; 上的內容裡。請參考 <a href="javascript:session_win();">[更多資料]</a>。');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">隱私權保障聲明</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">請認同我們的，隱私權保障聲明；和勾選在下面的選取格作確認。有關詳細的隱私權保障聲明，可參閱隨後的連結，</span> <a href="\' . zen_href_link(FILENAME_PRIVACY, \'\', \'SSL\') . \'"><span class="pseudolink">詳情請看這裡</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">我已經參閱，亦同意您們的隱私權保障聲明。</span>');

?>