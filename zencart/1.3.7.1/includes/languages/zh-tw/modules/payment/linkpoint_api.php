<?php
/**
 * @package linkpoint_api_payment_module
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron 
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 5025 2006-12-01 20:48:25Z drbyte $
 */
 
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Credit Card');

  if (MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https:
  } else { 
 define(\'MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION\', \'<a target="_blank" href="http:
  }
  define(\'MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE\', \'Credit Card Type:');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Credit Card Type:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Credit Card Owner:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Credit Card Number:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'CVV Number:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Credit Card Expiry Date:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* The cardholder\'s name must be at least \' . CC_OWNER_MIN_LENGTH . \' characters.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* The credit card number must be at least \' . CC_NUMBER_MIN_LENGTH . \' characters.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* You must enter the 3 or 4 digit number on the back of your credit card');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', 'Credit Card Error!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Your card has been declined.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Invalid Billing Address.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Your card has been declined.  Please re-enter your card information, try another card, or contact the store owner for assistance.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', 'What\'s this?');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***AUTHORIZATION ONLY -- CHARGES WILL BE SETTLED LATER BY THE ADMINISTRATOR.***');
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NOTE: This was a TEST transaction...forced to return a SUCCESS response.');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NOTE: This was a TEST transaction...forced to return a DECLINED response.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Module is not configured yet)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'CURL functions not found - required for Linkpoint API payment module');

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'We apologize for the inconvenience, but we are presently unable to contact the Credit Card company for authorization. Please contact the Store Owner for payment alternatives.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication 
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server
  
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'We are sorry. There was a system error while processing your card. Your information is safe. Please notify the Store Owner to arrange alternate payment options.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.
  
  
  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'Linkpoint Order ID:');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'AVS Response:');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Response Message:');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Approval Code:');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Reference Number:');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Fraud Score:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTE: Module is in testing mode)</span>');

?>