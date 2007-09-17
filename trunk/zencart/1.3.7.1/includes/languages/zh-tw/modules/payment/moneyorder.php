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
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $
//

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', '支票 /劃撥 /匯票');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', '請閣下安排好您的支票 /劃撥 /匯票，在抬頭上請清楚註明付款給予：　<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />並請您把支票 / 劃撥 / 匯票，投寄到我們的郵政地址：　<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . '在收到您的付款後，我們會立即為您安排付運，謝謝！');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "'請閣下安排好您的支票 /劃撥 /匯票，在抬頭上請清楚註明付款給予：　" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n並請您把支票 / 劃撥 / 匯票，投寄到我們的郵政地址：　\n" . STORE_NAME_ADDRESS . "\n\n" . '在收到您的付款後，我們會立即為您安排付運，謝謝！');
?>
