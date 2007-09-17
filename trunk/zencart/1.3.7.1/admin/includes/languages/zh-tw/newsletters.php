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
//  $Id: newsletters.php 3020 2006-02-13 04:24:58Z ajeh $
//

define('HEADING_TITLE', '電子通訊 - 管理員');

define('TABLE_HEADING_NEWSLETTERS', '電子通訊');
define('TABLE_HEADING_SIZE', '大小');
define('TABLE_HEADING_MODULE', '模組');
define('TABLE_HEADING_SENT', '寄出');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_NEWSLETTER_MODULE', '模組:');
define('TEXT_NEWSLETTER_TITLE', '主題:');
define('TEXT_NEWSLETTER_CONTENT', '純文字 <br />訊息:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Rich Text <br />訊息:');

define('TEXT_NEWSLETTER_DATE_ADDED', '加入日期:');
define('TEXT_NEWSLETTER_DATE_SENT', '寄出日期:');

define('TEXT_INFO_DELETE_INTRO', '您確定要，移除這 - 電子報 - 嗎?');

define('TEXT_PLEASE_WAIT', '請等候 .. 傳送郵件中 ..<br /><br />請不要中斷這個進程！');
define('TEXT_FINISHED_SENDING_EMAILS', '完成傳送郵件！');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s 封郵件已寄出. <br /><br />請留意您的郵箱 ('.EMAIL_FROM.') 是否有:<UL><LI>a) 被拒彈回郵件</LI><LI>b) 無效的電子郵件</LI><LI>c) 取消訂閱信件.</LI></UL>取消訂閱可以在 管理 | 會員 選單裡面編輯會員記錄。');

define('ERROR_NEWSLETTER_TITLE', '錯誤: 請輸入電子報的標題');
define('ERROR_NEWSLETTER_MODULE', '錯誤: 請選擇電子報的模組');
define('ERROR_PLEASE_SELECT_AUDIENCE','錯誤: 請選擇電子報的收件者');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', '錯誤: 在刪除這個電子報之前請先上鎖.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', '錯誤: 在編輯這個電子報之前請先上鎖.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', '錯誤: 在傳送這個電子報之前請先上鎖.');
?>