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
//  $Id: orders.php 2652 2005-12-22 18:30:59Z drbyte $
//

define('HEADING_TITLE', '訂單');
define('HEADING_TITLE_SEARCH', '訂單編號：');
define('HEADING_TITLE_STATUS', '狀態：');

define('TABLE_HEADING_PAYMENT_METHOD', '付款<br />貨運');
define('TABLE_HEADING_ORDERS_ID','編號');

define('TEXT_BILLING_SHIPPING_MISMATCH','帳單地址 - 和 - 交運地址 - 不相同');

define('TABLE_HEADING_COMMENTS', '附加評註');
define('TABLE_HEADING_CUSTOMERS', '會員');
define('TABLE_HEADING_ORDER_TOTAL', '總價');
define('TABLE_HEADING_DATE_PURCHASED', '訂購日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_TYPE', '訂單類型');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_QUANTITY', '數量');
define('TABLE_HEADING_PRODUCTS_MODEL', '型號');
define('TABLE_HEADING_PRODUCTS', '產品');
define('TABLE_HEADING_TAX', '稅金');
define('TABLE_HEADING_TOTAL', '總額');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '價格 (不含稅)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '價格 (含稅)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '總價 (不含稅)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '總價 (含稅)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', '通知會員');
define('TABLE_HEADING_DATE_ADDED', '加入日期');

define('ENTRY_CUSTOMER', '客戶：');
define('ENTRY_SOLD_TO', '售予：');
define('ENTRY_DELIVERY_TO', '貨物落貨地址：');
define('ENTRY_SHIP_TO', '運至：');
define('ENTRY_SHIPPING_ADDRESS', '貨運地址：');
define('ENTRY_BILLING_ADDRESS', '帳單地址：');
define('ENTRY_PAYMENT_METHOD', '付費方法：');
define('ENTRY_CREDIT_CARD_TYPE', '信用卡類型：');
define('ENTRY_CREDIT_CARD_OWNER', '信用卡所有人：');
define('ENTRY_CREDIT_CARD_NUMBER', '信用卡號碼：');
define('ENTRY_CREDIT_CARD_CVV', '信用卡 CVV 號碼：');
define('ENTRY_CREDIT_CARD_EXPIRES', '信用卡過期日：');
define('ENTRY_SUB_TOTAL', '價格：');
define('ENTRY_TAX', '稅金：');
define('ENTRY_SHIPPING', '運費：');
define('ENTRY_TOTAL', '總額：');
define('ENTRY_DATE_PURCHASED', '訂購日期：');
define('ENTRY_STATUS', '狀態：');
define('ENTRY_DATE_LAST_UPDATED', '最後更新日期：');
define('ENTRY_NOTIFY_CUSTOMER', '通知會員：');
define('ENTRY_NOTIFY_COMMENTS', '附加評註：');
define('ENTRY_PRINTABLE', '印列訂單');

define('TEXT_INFO_HEADING_DELETE_ORDER', '刪除訂單');
define('TEXT_INFO_DELETE_INTRO', '您確定要，刪除這 - 訂單 - 嗎？');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '重新加回產品的 - 在庫數量');
define('TEXT_DATE_ORDER_CREATED', '建立日期：');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '最後修改：');
define('TEXT_INFO_PAYMENT_METHOD', '付費方法：');
define('TEXT_PAID', '已付清');
define('TEXT_UNPAID', '未付清');

define('TEXT_ALL_ORDERS', '全部訂單');
define('TEXT_NO_ORDER_HISTORY', '沒有訂單歷史');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', '更新訂單');
define('EMAIL_TEXT_ORDER_NUMBER', '訂單號碼：');
define('EMAIL_TEXT_INVOICE_URL', '詳細訂單資料：');
define('EMAIL_TEXT_DATE_ORDERED', '訂購日期：');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>您訂單的附加評註是： </em>');
define('EMAIL_TEXT_STATUS_UPDATED', '您的訂單已被更新至：' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>新狀態：</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', '如果您有問題請回覆這個信件.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '錯誤： 訂單不存在.');
define('SUCCESS_ORDER_UPDATED', '完成： 訂單已被更新.');
define('WARNING_ORDER_NOT_UPDATED', '警告： 沒有改變的東西. 訂單未更新.');

define('ENTRY_ORDER_ID','訂單編號： ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">免費</span>');

define('TEXT_DOWNLOAD_TITLE', '下載狀態');
define('TEXT_DOWNLOAD_STATUS', '狀態');
define('TEXT_DOWNLOAD_FILENAME', '檔案名稱');
define('TEXT_DOWNLOAD_MAX_DAYS', '日數');
define('TEXT_DOWNLOAD_MAX_COUNT', '次數');

define('TEXT_DOWNLOAD_AVAILABLE', '可下載');
define('TEXT_DOWNLOAD_EXPIRED', '已逾期');
define('TEXT_DOWNLOAD_MISSING', '不在主機內');

define('IMAGE_ICON_STATUS_CURRENT', '狀態 - 可下載');
define('IMAGE_ICON_STATUS_EXPIRED', '狀態 - 已逾期');
define('IMAGE_ICON_STATUS_MISSING', '狀態 - 不存在');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', '下載已經完成 - 啟用');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', '下載已經完成 - 停止');
define('TEXT_MORE', '... 更多');

define('TEXT_INFO_IP_ADDRESS', 'IP 位址： ');
define('TEXT_DELETE_CVV_FROM_DATABASE','刪除 CVV 由資料庫');
define('TEXT_DELETE_CVV_REPLACEMENT','刪除');
define('TEXT_MASK_CC_NUMBER','屏蔽這個號碼');
?>