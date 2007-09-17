<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: cc.php 2424 2005-11-22 09:25:32Z drbyte $
//

  define('MODULE_PAYMENT_CC_TEXT_TITLE', '信用卡');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', '信用卡測試資料：<br /><br />CC#: 4111111111111111<br />逾期日： 任何');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', '信用卡類型：');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', '信用卡持有人名字：');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', '信用卡號碼：');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV 核實碼 (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . '更多資料' . '</a>)&nbsp;');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', '逾期日：');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* 信用卡持有人的名字，必須至少有 ' . CC_OWNER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* 信用卡的號碼，必須至少要有 ' . CC_NUMBER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', '信用卡錯誤：');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* 這 CVV 核實碼，最少必須要有 ' . CC_CVV_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','錯誤 - 設定錯誤： ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','錯誤： 您已經啟動這個 CC 付款模組，但沒有設定它為；經 email 發出 CC 資料。這有一個後果，是您會不能夠處理那些  CC 號碼，如果訂單是經這方法訂下的。請前去  管理區 ->外掛模組 -> 付費方法 -> 信用卡 -> [編輯] 按鈕，和設定發出信用卡資料的 email 地址。' . "\n\n\n\n");
?>