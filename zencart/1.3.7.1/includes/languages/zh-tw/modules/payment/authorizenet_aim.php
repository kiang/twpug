<?php
/**
 * Authorize.net AIM Payment Module V.1.0 created by Eric Stamper - 01/30/2004 Released under GPL
 *
  * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 2667 2005-12-24 05:31:58Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<b>自動批核信用卡號碼：</b><br /><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>注意：</b>&nbsp; 這些信用卡號碼在實際使用時，會被回覆為拒絕，
而在測試時會被回覆為批准。任何的未來日期都可用作逾期日，而任何 3 或 4 (AMEX) 位數字的號碼，可以用作 CVV 核實碼。<br /><br /><b>自動被拒絕的信用卡號碼：</b><br /><br />卡號 #: 4222222222222<br /><br />這卡號可用在，接收拒絕通知的測驗用途上。<br /><br />');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', '信用卡');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', '信用卡類型：');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', '信用卡持有人：');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', '信用卡號碼：');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', '信用卡逾期日：');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV 號碼 (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . '更多資料' . '</a>)');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* 信用卡持有人的名字，必須至少有 ' . CC_OWNER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* 信用卡的號碼，必須至少要有 ' . CC_NUMBER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* 這 3 或 4 位數字的 CVV 號碼必須輸入，它在卡的向背後可找到。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', '您的信用卡，為這原因，不被認可，請修正所有資料；和再嘗試，或者，聯絡我們取得進一步協助。');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', '信用卡錯誤！');
?>