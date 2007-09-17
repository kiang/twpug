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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', '顯示訂單： ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal 訂單已接收  (新 - 舊)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal 訂單已接收 (舊 - 新)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', '訂單 ID (高 - 低), PayPal 訂單已接收');
  define('TEXT_SORT_ZEN_ORDER_ID', '訂單 ID (低 - 高), PayPal 訂單已接收');
  define('TEXT_PAYMENT_AMOUNT_DESC', '訂單總額 (高 - 低)');
  define('TEXT_PAYMENT_AMOUNT', '訂單總額 (低 - 高)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal IPN 即時付款通知');
  define('HEADING_PAYMENT_STATUS', '付款狀態');
  define('TEXT_ALL_IPNS', '全部');

  define('TABLE_HEADING_ORDER_NUMBER', '訂單號碼 #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', '交易類別');
  define('TABLE_HEADING_PAYMENT_STATUS', '付款狀態');
  define('TABLE_HEADING_PAYMENT_AMOUNT', '總額');
  define('TABLE_HEADING_ACTION', '行動');
  define('TABLE_HEADING_DATE_ADDED', '加入日期');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', '在狀態記錄的輸入號碼');
  define('TABLE_HEADING_ENTRY_NUM', '輸入號碼');
  define('TABLE_HEADING_TRANS_ID', '交易 Trans. ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN 即時付款通知');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', '顯示 <strong>%d</strong> 到 <strong>%d</strong> (共 <strong>%d</strong> IPN\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal 客戶登記詳情');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal 即時付款通知');
  define('TEXT_INFO_ENTRY_ADDRESS', '地址');
  define('TEXT_INFO_ORDER_NUMBER', '訂單號碼');
  define('TEXT_INFO_TXN_TYPE', '交易類型');
  define('TEXT_INFO_PAYMENT_STATUS', '付款狀態');
  define('TEXT_INFO_PAYMENT_AMOUNT', '總額');
  define('ENTRY_FIRST_NAME', '姓 /First Name');
  define('ENTRY_LAST_NAME', '名稱，名字 /Last Name');
  define('ENTRY_BUSINESS_NAME', '商業名稱');
  define('ENTRY_ADDRESS', '地址');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'Payer ID');
  define('ENTRY_PAYER_STATUS', 'Payer 狀態');
  define('ENTRY_ADDRESS_STATUS', '地址狀態');
  define('ENTRY_PAYMENT_TYPE', '付款類型');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', '付款狀態');
  define('TABLE_HEADING_PENDING_REASON', '待審原因');
  define('TABLE_HEADING_IPN_DATE', 'IPN 日期');
  define('ENTRY_INVOICE', '帳單');
  define('ENTRY_PAYPAL_IPN_TXN', '交易 ID');
  define('ENTRY_PAYMENT_DATE', '付款日期');
  define('ENTRY_PAYMENT_LAST_MODIFIED', '最後修改');
  define('ENTRY_MC_CURRENCY', 'MC 貨幣');
  define('ENTRY_MC_GROSS', 'MC 毛值');
  define('ENTRY_MC_FEE', 'MC 收費');
  define('ENTRY_PAYMENT_GROSS', '付款毛值');
  define('ENTRY_PAYMENT_FEE', '付款收費');
  define('ENTRY_SETTLE_AMOUNT', '解決金額');
  define('ENTRY_SETTLE_CURRENCY', '解決貨幣');
  define('ENTRY_EXCHANGE_RATE', '匯率');
  define('ENTRY_CART_ITEMS', '購物車項目的數量');
  define('ENTRY_CUSTOMER_COMMENTS', '顧客評語');
  define('TEXT_NO_IPN_HISTORY', '沒有 IPN 記錄可提供');
  define('TEXT_TXN_SIGNATURE', '交易簽署');
  //end ADMIN text
?>
