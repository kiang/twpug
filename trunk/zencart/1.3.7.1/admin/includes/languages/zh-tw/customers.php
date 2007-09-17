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
//  $Id: customers.php 4133 2006-08-14 00:37:30Z drbyte $
//

define('HEADING_TITLE', '客戶');

define('TABLE_HEADING_ID', '編號 ID#');
define('TABLE_HEADING_FIRSTNAME', '名字 -First');
define('TABLE_HEADING_LASTNAME', '姓氏 -Last');
define('TABLE_HEADING_ACCOUNT_CREATED', '帳號建立日期');
define('TABLE_HEADING_LOGIN', '最後登錄日期');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_PRICING_GROUP', '定價團體');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', '認可');

define('TEXT_DATE_ACCOUNT_CREATED', '帳號建立日期：');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '最後修改日期：');
define('TEXT_INFO_DATE_LAST_LOGON', '最後登錄日期：');
define('TEXT_INFO_NUMBER_OF_LOGONS', '登錄次數：');
define('TEXT_INFO_COUNTRY', '國家：');
define('TEXT_INFO_NUMBER_OF_REVIEWS', '評論次數：');
define('TEXT_DELETE_INTRO', '您確定要，移除這個會員嗎？');
define('TEXT_DELETE_REVIEWS', '移除 %s 評論');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', '移除會員');
define('TYPE_BELOW', '在下方輸入');
define('PLEASE_SELECT', '選擇一項');
define('TEXT_INFO_NUMBER_OF_ORDERS', '訂單數目：');
define('TEXT_INFO_LAST_ORDER', '最後訂購：');
define('TEXT_INFO_ORDERS_TOTAL', '訂單總額：');
define('CUSTOMERS_REFERRAL', '會員介紹<br />首度 - 優待券：');

define('ENTRY_NONE', '沒有');

define('TABLE_HEADING_COMPANY', '公司');

define('CUSTOMERS_AUTHORIZATION', '會員認可狀態：');
define('CUSTOMERS_AUTHORIZATION_0', '認可');
define('CUSTOMERS_AUTHORIZATION_1', '認可等待中 - 必須認可，才能瀏覽');
define('CUSTOMERS_AUTHORIZATION_2', '認可等待中 - 可以瀏覽，但沒有價格');
define('CUSTOMERS_AUTHORIZATION_3', '認可等待中 - 可以瀏覽價格，但無法購買');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', '警告： 您商店設定為需認可，而沒有瀏覽。顧客已被設定為等候認可 - 沒有瀏覽 ');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', '警告： 您商店的認可設定為可瀏覽但沒有價格。顧客已被設定為等候認可 - 可瀏覽沒有價格 ');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', '您的客戶狀態更新了，感謝您在此購物，期待您的下次光臨。');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', '客戶狀態更新了');
?>