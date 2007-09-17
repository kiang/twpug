<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */

define('NAVBAR_TITLE_1', '結帳 - 步驟 1');
define('NAVBAR_TITLE_2', '付款方法 - 步驟 2');

define('HEADING_TITLE', '步驟：2 - 共 3 個步驟 - 付款資料');

define('TABLE_HEADING_BILLING_ADDRESS', '帳單地址');
define('TEXT_SELECTED_BILLING_DESTINATION', '左列是您的「帳單地址」，它應該和您用來；接收信用卡結算單的地址相同。如果要更改帳單地址，請點按「更改地址」的按鈕，之後由通訊錄中新增或選取另一郵寄「帳單地址」。');
define('TITLE_BILLING_ADDRESS', '帳單地址:');

define('TABLE_HEADING_PAYMENT_METHOD', '付款方法');
define('TEXT_SELECT_PAYMENT_METHOD', '請您為這訂單，選取一個合適的付款方法。');
define('TITLE_PLEASE_SELECT', '請選取');
define('TEXT_ENTER_PAYMENT_INFORMATION', '這訂單目前只接受一種付款方法。');
define('TABLE_HEADING_COMMENTS', '特別指示 / 訂單附註');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', '目前無法使用');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE', '<span class="alert">抱歉，我們目前不接受來自您這個區域的付款，</span><br />請與我們聯繫來進行其他安排。');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>請繼續到：步驟 - 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '：確認您的訂單');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">條款和細則</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">請您參閱和同意：與這訂單有關的條款和細則，並且請勾選下面的選取格，表示閣下接受我們的有關條款和細則， <a href="\' . zen_href_link(FILENAME_CONDITIONS, \'\', \'SSL\') . \'"><span class="pseudolink">詳情請看這裡</span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">我確認已經清楚及同意接受與這訂單有關的條款和細則。</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', '應付總額： ');
define('TEXT_YOUR_TOTAL', '您的總額');
?>