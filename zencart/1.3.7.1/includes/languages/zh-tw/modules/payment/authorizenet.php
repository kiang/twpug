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
// $Id: authorizenet.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', '信用卡');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '信用卡測試資訊：<br /><br />CC#: 4111111111111111<br />逾期日： 任何');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', '類型：');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', '信用卡持有人：');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', '信用卡號碼：');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', '信用卡逾期日：');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* 信用卡持有人的名字必須至少有 ' . CC_OWNER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* 信用卡的號碼必須至少有　' . CC_NUMBER_MIN_LENGTH . ' 個字元。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', '在處理您的信用卡資料時發生錯誤，請再嘗試。');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', '您的信用卡已被拒絕。請使用其他的信用卡，或聯絡您的發卡銀行，以取得更多資料。');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '信用卡錯誤！');
?>