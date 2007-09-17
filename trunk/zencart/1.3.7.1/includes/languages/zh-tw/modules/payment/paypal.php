<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 5314 2006-12-21 02:23:06Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Paypal IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'Paypal');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN 即時付款通知</strong>');
  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN 即時付款通知</strong>');
  }

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', '姓名 -First Name：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', '姓氏 -Last Name：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', '公司 / 商業名稱 ：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', '地址：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', '街道：:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', '地址- 城市：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', '地址- 州 / 縣：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', '地址-　區域編碼：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', '地址- 國家：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', '支付者 Email:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Payer ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', '支付者狀態：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', '地址狀態：');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', '付款類型：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', '付款狀態：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', '待審原因：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', '發票：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', '付款日期：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', '貨幣：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', '總款額：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', '付款收費：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', '匯率：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', '購物車項目:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', '交易類型：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', '交易編號：');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', '來源交易編號：');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DECRIPTION_TITLE', STORE_NAME . ' Purchase');

?>