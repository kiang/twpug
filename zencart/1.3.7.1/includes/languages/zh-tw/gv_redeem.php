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
// $Id: gv_redeem.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', '兌換 ' . TEXT_GV_NAME);
define('HEADING_TITLE', '兌換 ' . TEXT_GV_NAME);
define('TEXT_INFORMATION', '<br />如想得到更多有關 ' . TEXT_GV_NAME . ' 的資料，請參考我們的 <a href="' . zen_href_link(FILENAME_GV_FAQ,'', 'NONSSL') .'">'. GV_FAQ . '。</a>');
define('TEXT_INVALID_GV', '這個 ' . TEXT_GV_NAME . ' 的號碼，可能是無效的，或者，它已經被兌換。<br /><br />若要和我們店主洽詢，請使用我們的「連絡我們」超連結。');
define('TEXT_VALID_GV', '恭喜，您已經兌換了一項 ' . TEXT_GV_NAME . ' ，價值是 %s.');
?>