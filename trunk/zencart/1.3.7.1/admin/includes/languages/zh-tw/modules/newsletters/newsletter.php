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
//  $Id: newsletter.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('TEXT_COUNT_CUSTOMERS', '接收電子報的會員: %s');
define('HEADING_TITLE', '電子報管理員');

define('TABLE_HEADING_NEWSLETTERS', '電子報');
define('TABLE_HEADING_SIZE', '大小');
define('TABLE_HEADING_MODULE', '模組');
define('TABLE_HEADING_SENT', '送出');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_NEWSLETTER_MODULE', '模組：');
define('TEXT_NEWSLETTER_TITLE', '標題：');
define('TEXT_NEWSLETTER_CONTENT', '文字 <br />內容：');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Rich Text <br />內容：');

define('TEXT_NEWSLETTER_DATE_ADDED', '加入日期：');
define('TEXT_NEWSLETTER_DATE_SENT', '送出日期：');

define('TEXT_INFO_DELETE_INTRO', '您確定要移除這項電子報嗎？');

define('TEXT_PLEASE_SELECT_AUDIENCE','請選擇那些讀者群，來接收這次郵寄的電子報：');
define('TEXT_PLEASE_WAIT', '請稍等 .. 郵件在傳送中 ..<br /><br />請不要中斷這個進程!');
define('TEXT_FINISHED_SENDING_EMAILS', '完成傳送郵件！');

define('ERROR_NEWSLETTER_TITLE', '錯誤: 電子報的標題，不能留空');
define('ERROR_NEWSLETTER_MODULE', '錯誤: 電子報的模組，必須設立');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', '錯誤: 在刪除電子報之前，請先把它上鎖。');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', '錯誤: 在編輯電子報之前，請先把它上鎖。');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', '錯誤: 在傳送電子報之前，請先把它上鎖。');
?>