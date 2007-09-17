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
//  $Id: coupon_admin.php 4677 2006-10-04 19:33:39Z drbyte $
//

define('TOP_BAR_TITLE', '統計資料');
define('HEADING_TITLE', '優待券');
define('HEADING_TITLE_STATUS', '狀態 ： ');
define('TEXT_CUSTOMER', '客戶：');
define('TEXT_COUPON', '優待券名稱：');
define('TEXT_COUPON_ALL', '全部優待券');
define('TEXT_COUPON_ACTIVE', '活躍的優待券');
define('TEXT_COUPON_INACTIVE', '不活躍的優待券');
define('TEXT_SUBJECT', '標題：');
define('TEXT_UNLIMITED', '沒有限制');
define('TEXT_FROM', '由：');
define('TEXT_FREE_SHIPPING', '免費送貨');
define('TEXT_MESSAGE', '訊息：');
define('TEXT_RICH_TEXT_MESSAGE', 'Rich-Text 訊息：');
define('TEXT_SELECT_CUSTOMER', '選擇客戶');
define('TEXT_ALL_CUSTOMERS', '致全部客戶');
define('TEXT_NEWSLETTER_CUSTOMERS', '致全部電子報訂戶');
define('TEXT_CONFIRM_DELETE', '您確定要刪除這優待券嗎？');
define('TEXT_SEE_RESTRICT', '使用有限制');

define('TEXT_COUPON_ANNOUNCE', '我們誠意為您送上一項商店優待券');

define('TEXT_TO_REDEEM', '如果您要兌換這優待券，可以在結帳的過程中。只需在已提供的欄位上，輸入優這待券編號，然後點按那兌換按鈕。');
define('TEXT_IN_CASE', ' 假使您有任何問題。 ');
define('TEXT_VOUCHER_IS', '這優待券的編碼是 ');
define('TEXT_REMEMBER', '請勿遺失這優待券編號，並確定把這編號存放在安全的地方，以便您在日後，可以受益於這特別優惠。');
define('TEXT_VISIT', '請來訪我們的網址 %s ');
define('TEXT_ENTER_CODE', ' 和輸入這優待券編號 ');

define('TABLE_HEADING_ACTION', '行動');

define('CUSTOMER_ID', '客戶編號');
define('CUSTOMER_NAME', '客戶名稱');
define('REDEEM_DATE', '兌換日期');
define('IP_ADDRESS', 'IP 位 址');

define('TEXT_REDEMPTIONS', '兌換');
define('TEXT_REDEMPTIONS_TOTAL', '總數 ');
define('TEXT_REDEMPTIONS_CUSTOMER', '為這位客戶 ');
define('TEXT_NO_FREE_SHIPPING', '沒有 - 免費送貨');

define('NOTICE_EMAIL_SENT_TO', '注意： Email 已寄到： %s');
define('ERROR_NO_CUSTOMER_SELECTED', '錯誤： 沒有選擇客戶。');
define('ERROR_NO_SUBJECT', '錯誤： 沒有輸入主題。');

define('COUPON_NAME', '優待券名稱');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', '優待券數額');
define('COUPON_CODE', '優待券編號');
define('COUPON_STARTDATE', '開始日期');
define('COUPON_FINISHDATE', '終止日期');
define('COUPON_FREE_SHIP', '免費送貨');
define('COUPON_DESC', '優待券介紹 <br />（客戶可以觀看到的）');
define('COUPON_MIN_ORDER', '優待券最少訂單價值');
define('COUPON_USES_COUPON', '每券使用次數');
define('COUPON_USES_USER', '每客戶使用次數');
define('COUPON_PRODUCTS', '有效產品列表');
define('COUPON_CATEGORIES', '有效分類列表');
define('VOUCHER_NUMBER_USED', '已使用次數');
define('DATE_CREATED', '加入日期');
define('DATE_MODIFIED', '修改日期');
define('TEXT_HEADING_NEW_COUPON', '建立新優待券');
define('TEXT_NEW_INTRO', '請在下面，輸入新優待券的資料。<br />');
define('COUPON_ZONE_RESTRICTION', '優待券區域限制：');
define('TEXT_COUPON_ZONE_RESTRICTION', '優待券區域限制是選擇性的。');

define('ERROR_NO_COUPON_AMOUNT', '沒有輸入優待券的數額');
define('ERROR_NO_COUPON_NAME', '沒有輸入優待券的名稱 ');
define('ERROR_COUPON_EXISTS', '這優待券編號已經存在');


define('COUPON_NAME_HELP', '一個簡短的優待券名稱');
define('COUPON_AMOUNT_HELP', '優待券的可扣減數值，可以是整數，或在尾後加上 % 符號，作為減價減去的百分比。');
define('COUPON_CODE_HELP', '您可以在這，輸入這優待券的編號，或把它留空，系統會自動產生一個編號。');
define('COUPON_STARTDATE_HELP', '優待券將會開始生效的日期');
define('COUPON_FINISHDATE_HELP', '優待券的終止生效日期');
define('COUPON_FREE_SHIP_HELP', '這優待券，提供免費送貨，給予一訂單。注意： 這會取代那，優待券總額，的數值，但是仍然維持那，最少訂單價值。');
define('COUPON_DESC_HELP', '供客戶觀看的優待券介紹');
define('COUPON_MIN_ORDER_HELP', '最少訂單價值，必須多於這數值，優待券才生效');
define('COUPON_USES_COUPON_HELP', '優待券，可使用的最多次數，請把它留空，如果您希望沒有限制。');
define('COUPON_USES_USER_HELP', '每客戶，可使用這優待券的次數，請把它留空，如果您希望沒有限制。');
define('COUPON_PRODUCTS_HELP', '用逗點來分隔，可使用這個優待券的，產品編號，留空為沒有限制。');
define('COUPON_CATEGORIES_HELP', '用逗點來分隔，可使用這個優待券的，產品分類，留空為沒有限制。');
define('COUPON_BUTTON_PREVIEW', '預覽');
define('COUPON_BUTTON_CONFIRM', '確定');
define('COUPON_BUTTON_BACK', '返回');

define('COUPON_ACTIVE', '狀態');
define('COUPON_START_DATE', '開始');
define('COUPON_EXPIRE_DATE', '逾期');

define('ERROR_DISCOUNT_COUPON_WELCOME', '折扣優惠券不能停用，這個折扣優待券是歡迎光臨優惠券，<br /><br />在刪除之前請先社定期他優惠券為歡迎光臨優惠券，參考管理->設定->禮券');
define('SUCCESS_COUPON_DISABLED', '折扣優惠券成功停用');
define('TEXT_COUPON_NEW', '使用新的折扣優惠券代碼：');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', '警告！優惠券重複，被取消的重複優惠券代碼：');
define('TEXT_CONFIRM_COPY', '您確定要複製這個優惠券？');
define('SUCCESS_COUPON_DUPLICATE', '優惠券成功複製 ...<br /><br />請確認優惠券名稱與日期。');
?>