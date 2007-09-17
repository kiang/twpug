<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', '設立帳號');

define('HEADING_TITLE', '我的帳號資料');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">注意：</strong> 如果閣下已經在我們這裡登記了帳號， 請使用隨後的連結來登入 「<a href="%s"> 按我登入 </a>」。');

// greeting salutation
define('EMAIL_SUBJECT', '歡迎光臨 ' . STORE_NAME);
define('EMAIL_GREET_MR', '親愛的 %s 先生：' . "\n\n");
define('EMAIL_GREET_MS', '親愛的 %s 女士：' . "\n\n");
define('EMAIL_GREET_NONE', '親愛的 %s ：' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', '非常歡迎 閣下來到 <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', '恭喜！ 為了答謝 閣下光臨本店和令 您在再次光臨本店時，有更好的愉快體驗，我們專誠送上特別為 您而設的優待券！ 優待券資料如下：' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', '若要使用這個優待券，請在結帳過程中輸入這  ' . TEXT_GV_REDEEM . ' 的號碼：  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', '今天我們特別送給 閣下一張 ' . TEXT_GV_NAME . ' 數額是 %s！' . "\n");
define('EMAIL_GV_REDEEM', '這 ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' 是: %s ' . "\n\n" . ' 您可以在本店選購完成後和在結帳的程序中，輸入這 ' . TEXT_GV_REDEEM . '的資料。 ');
define('EMAIL_GV_LINK', '或， 您可以在提供的連結裡兌換，這連結是: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','當 您加入這 ' . TEXT_GV_NAME . ' 到 您的帳號之後， 您可以自己使用這 ' . TEXT_GV_NAME . ' 或可以送給您喜愛的的親友！' . "\n\n");

define('EMAIL_TEXT', ' 閣下即時可以使用我們專誠為 您提供的<strong>多樣化服務</strong>，其中服務包括：' . "\n\n" . '<li><strong> - 專用的購物車紀錄</strong> - 閣下放到購物車的產品資訊會一直為 您保存，直至 您把它們移除，或把它結算。' . "\n\n" . '<li><strong> - 專用的通訊目錄</strong> - 我們可以為 閣下把產品送到 您通訊目錄中的地址！ 例如， 您要慶祝別人生日，要為她 /他帶來驚喜，把禮物意外的送到當事人手中，是上佳的配合。' . "\n\n" . '<li><strong> - 專用的訂單紀錄</strong> - 您可自己查看和跟進在本店的選購記錄。' . "\n\n" . '<li><strong> - 產品評論</strong> - 分享 您的意見和與我們其他的顧客交流。' . "\n\n");
define('EMAIL_CONTACT', '如果您對本商店的服務有任何的查詢或者需要幫助，我們必定誠心為閣下服務，只需發出 E-Mail 給本店店主： ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");
define('EMAIL_GV_CLOSURE','祝 您購物愉快！ 並祝萬事如意！' . "\n\n" . STORE_OWNER .  "\n 本店店主謹啟 \n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', '這個 E-Mail 地址是由您或我們的其中一位顧客提供給予我們的，如果您沒有在我們這裡設立帳號，或者覺得您是錯誤的接收了這個 E-Mail ，請發送 E-Mail 通知 %s ');

//moved definitions to english.php
//define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacy Statement');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'I have read and agreed to your privacy statement.');
//define('TABLE_HEADING_ADDRESS_DETAILS', 'Address Details');
//define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Additional Contact Details');
//define('TABLE_HEADING_DATE_OF_BIRTH', 'Verify Your Age');
//define('TABLE_HEADING_LOGIN_DETAILS', 'Login Details');
//define('TABLE_HEADING_REFERRAL_DETAILS', 'Were You Referred to Us?');
?>
