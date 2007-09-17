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
//  $Id: mail.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', '發送 - 電子郵件 - 給會員');

define('TEXT_CUSTOMER', '會員：');
define('TEXT_SUBJECT', '標題：');
define('TEXT_FROM', '寄件者：');
define('TEXT_MESSAGE', '純文字 <br />訊息：');
define('TEXT_MESSAGE_HTML','Rich Text <br />訊息：');
define('TEXT_SELECT_CUSTOMER', '選擇會員');
define('TEXT_ALL_CUSTOMERS', '全部會員');
define('TEXT_NEWSLETTER_CUSTOMERS', '全部電子報訂閱者');
define('TEXT_ATTACHMENTS_LIST','已選擇附件： ');
define('TEXT_SELECT_ATTACHMENT','附件<br />在主機裡： ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','附件<br />要上傳的<br />&amp; 附上： ');
define('TEXT_ATTACHMENTS_DIR','上載檔案夾： ');

define('NOTICE_EMAIL_SENT_TO', '注意： 郵件送出到: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '錯誤： 沒有會員被選取.');
define('ERROR_NO_SUBJECT', '錯誤： 沒有輸入主題.');
define('ERROR_ATTACHMENTS', '錯誤： 您不能選擇一同上傳和新增分別不同的附件，請選擇其中一個.');
?>