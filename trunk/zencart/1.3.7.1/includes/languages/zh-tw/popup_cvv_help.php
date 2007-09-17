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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', '什麼是 CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Discover 3 位數字的信用卡驗證號碼<br /><br />
                    為了您的安全和保安，我們需要您，輸入您的信用卡驗證號碼.<br /><br />
                    這驗證號碼，是個 3 位數字的號碼，它印在您的卡的背面。
                    它顯示在，您的卡號，隨後的右面。<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express 4 位數字的信用卡驗證號碼<br /><br />
                    為了您的安全和保安，我們需要您，輸入您的信用卡驗證號碼.<br /><br />
                    這 American Express 驗證號碼，是個 4 位數字的號碼，印在您的卡的前面。
                    它顯示在，您的卡號，隨後的右面.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '關閉視窗 [X]');
?>