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
// $Id: download_time_out.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', '您的下載 ...');
define('HEADING_TITLE', '您的下載 ...');

define('TEXT_INFORMATION', '我們感到非常抱歉，您的下載已經逾時。<br /><br />
  如果您還有其他下載想收取，
  請您去到 <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '"> 我的帳號 </a> 的頁面裡去檢視您的訂單。<br /><br />
  或者， 如果您認為您的訂單發生問題，請您 <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">聯絡我們</a> <br /><br />
  謝謝！
  ');
?>