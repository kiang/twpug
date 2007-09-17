<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 4804 2006-10-21 16:19:59Z ajeh $
 */

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Zen Cart 管理介面 :: 線上購物的藝術');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_US.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'yyyy/MM/dd');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags 後設標籤已定義');
define('ICON_METATAGS_OFF', 'Meta Tags 後設標籤沒有定義');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags 後設標籤已定義：');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>注意：</strong> 這網站/標籤句，是由您為您的網站定義的，它可以在 meta_tags.php 檔案中下定義。');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="zh-TW"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', '管理首頁');
define('HEADER_TITLE_SUPPORT_SITE', '支援網站');
define('HEADER_TITLE_ONLINE_CATALOG', '在線網站');
define('HEADER_TITLE_VERSION', '版本');
define('HEADER_TITLE_LOGOFF', '登出');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME', '禮品券');
  define('TEXT_GV_NAMES', '禮品券');
  define('TEXT_DISCOUNT_COUPON', '折扣優惠券');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM', '兌換號碼');

// text for gender
define('MALE', '男性');
define('FEMALE', '女性');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '配置設定');
define('BOX_CONFIGURATION_MYSTORE', '我的商店');
define('BOX_CONFIGURATION_LOGGING', '紀錄設定');
define('BOX_CONFIGURATION_CACHE', '快取記憶');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', '外掛模組');
define('BOX_MODULES_PAYMENT', '付費方法');
define('BOX_MODULES_SHIPPING', '送運方法');
define('BOX_MODULES_ORDER_TOTAL', '訂單總額');
define('BOX_MODULES_PRODUCT_TYPES', '產品類型');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', '產品目錄管理');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', '分類 / 產品');
define('BOX_CATALOG_PRODUCT_TYPES', '產品類型');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', '選項名稱 - 管理員');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', '選項數值 - 管理員');
define('BOX_CATALOG_MANUFACTURERS', '製造商');
define('BOX_CATALOG_REVIEWS', '產品評論');
define('BOX_CATALOG_SPECIALS', '特價產品');
define('BOX_CATALOG_PRODUCTS_EXPECTED', '期待產品');
define('BOX_CATALOG_SALEMAKER', '促銷減價 - 製造器');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', '產品價格 - 管理員');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', '會員管理');
define('BOX_CUSTOMERS_CUSTOMERS', '會 - 員');
define('BOX_CUSTOMERS_ORDERS', '訂 - 單');
define('BOX_CUSTOMERS_GROUP_PRICING', '團體定價');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', '地區/稅金');
define('BOX_TAXES_COUNTRIES', '國 - 家');
define('BOX_TAXES_ZONES', '稅金地區');
define('BOX_TAXES_GEO_ZONES', '地區定義');
define('BOX_TAXES_TAX_CLASSES', '稅金種類');
define('BOX_TAXES_TAX_RATES', '稅 - 率');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', '報告報表');
define('BOX_REPORTS_PRODUCTS_VIEWED', '產品 - 瀏覽數字');
define('BOX_REPORTS_PRODUCTS_PURCHASED', '產品 - 訂購數字');
define('BOX_REPORTS_ORDERS_TOTAL', '訂單 - 總額，會員 / 顧客');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', '產品 - 低在庫量');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', '會員 - 介紹');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', '工 具 類');
define('BOX_TOOLS_ADMIN', '管理員的 - 設定');
define('BOX_TOOLS_TEMPLATE_SELECT', '佈景模板 - 選擇');
define('BOX_TOOLS_BACKUP', '資料庫備份');
define('BOX_TOOLS_BANNER_MANAGER', '廣告看板 - 管理員');
define('BOX_TOOLS_CACHE', '快取控制');
define('BOX_TOOLS_DEFINE_LANGUAGE', '語系選擇');
define('BOX_TOOLS_FILE_MANAGER', '檔案管理');
define('BOX_TOOLS_MAIL', '電子郵件 - 發送');
define('BOX_TOOLS_NEWSLETTER_MANAGER', '電子通訊 - 管理');
define('BOX_TOOLS_SERVER_INFO', '主機資料');
define('BOX_TOOLS_WHOS_ONLINE', '誰在線上');
define('BOX_TOOLS_STORE_MANAGER', '商店管理員');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', '開發工具，套件 - 搜尋');
define('BOX_TOOLS_SQLPATCH', '安裝 SQL 補丁');
define('BOX_TOOLS_EZPAGES', 'EZ-簡易頁面');

define('BOX_HEADING_EXTRAS', '額外類別');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR', '定義頁面 - 編輯器');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', '首頁');
define('BOX_TOOLS_DEFINE_CONTACT_US', '聯絡我們');
define('BOX_TOOLS_DEFINE_PRIVACY', '隱私權');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO', '運費及退貨');
define('BOX_TOOLS_DEFINE_CONDITIONS', '使用條款');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS', '結算完成');
define('BOX_TOOLS_DEFINE_PAGE_2', '頁面 2');
define('BOX_TOOLS_DEFINE_PAGE_3', '頁面 3');
define('BOX_TOOLS_DEFINE_PAGE_4', '頁面 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', '本地化管理');
define('BOX_LOCALIZATION_CURRENCIES', '貨 - 幣');
define('BOX_LOCALIZATION_LANGUAGES', '語 - 系');
define('BOX_LOCALIZATION_ORDERS_STATUS', '訂單狀態 - 名稱');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Coupons');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Queue');
define('BOX_GV_ADMIN_MAIL', 'Mail \' . TEXT_GV_NAME);
define(\'BOX_GV_ADMIN_SENT\', TEXT_GV_NAMES . \' sent');
define('BOX_COUPON_ADMIN', '優待券 - 管理');

define('IMAGE_RELEASE', '兌換\' . TEXT_GV_NAME);


define(\'JS_ERROR\', \'在處理表單時出現錯誤!\n請修改下面的資料：\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* 請輸入新產品的價格n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* 請輸入新產品價格的前綴貨幣單位n');

define('JS_PRODUCTS_NAME', '* 請輸入產品名稱n');
define('JS_PRODUCTS_DESCRIPTION', '* 請輸入產品介紹n');
define('JS_PRODUCTS_PRICE', '* 請輸入產品價格n');
define('JS_PRODUCTS_WEIGHT', '* 請輸入產品重量n');
define('JS_PRODUCTS_QUANTITY', '* 請輸入產品數量n');
define('JS_PRODUCTS_MODEL', '* 請輸入產品型號n');
define('JS_PRODUCTS_IMAGE', '* 請提供產品圖像n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* 請輸入產品的新價格n');

define('JS_GENDER', '* 請選擇性別.n');
define('JS_FIRST_NAME', '* 會員名字必須多於 \' . ENTRY_FIRST_NAME_MIN_LENGTH . \' 個字詞.n');
define('JS_LAST_NAME', '* 會員姓必須多於 \' . ENTRY_LAST_NAME_MIN_LENGTH . \' 個字詞.n');
define('JS_DOB', '* 出生日期必須是以下格式： xx/xx/xxxx (月/日/年).n');
define('JS_EMAIL_ADDRESS', '* 電子郵件必須多於 \' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . \' 個字詞.\n');
define('JS_ADDRESS', '* 地址必須多於 \' . ENTRY_STREET_ADDRESS_MIN_LENGTH . \' 個字詞.\n');
define('JS_POST_CODE', '* 郵遞區號必須多於 \' . ENTRY_POSTCODE_MIN_LENGTH . \' 個字詞.n');
define('JS_CITY', '* 城市名字必須多於 \' . ENTRY_CITY_MIN_LENGTH . \' 個字詞.n');
define('JS_STATE', '* 請選擇縣市.n');
define('JS_STATE_SELECT', '-- 選項 --');
define('JS_ZONE', '* 請選擇這個國家的縣市.');
define('JS_COUNTRY', '* 請選擇國家.n');
define('JS_TELEPHONE', '* 電話號碼必須多於 \' . ENTRY_TELEPHONE_MIN_LENGTH . \' 個號碼.n');
define('JS_PASSWORD', '* 密碼和確認密碼必須多於 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字詞.\n');

define('JS_ORDER_DOES_NOT_EXIST', '訂單編號 %s 不存在!');

define('CATEGORY_PERSONAL', '私人');
define('CATEGORY_ADDRESS', '地址');
define('CATEGORY_CONTACT', '聯絡');
define('CATEGORY_COMPANY', '公司');
define('CATEGORY_OPTIONS', '選項');

define('ENTRY_GENDER', '性別：');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_FIRST_NAME', '名字：');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_FIRST_NAME_MIN_LENGTH . \' 個字</span>');
define('ENTRY_LAST_NAME', '姓氏：');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_LAST_NAME_MIN_LENGTH . \' 個字</span>');
define('ENTRY_DATE_OF_BIRTH', '出生日期：');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', '電子郵件地址：');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . \' 個字</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">請輸入有效的電子郵件地址！</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">這電子郵件地址已有會員使用！</span>');
define('ENTRY_COMPANY', '公司名稱：');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', '團體定價：');
define('ENTRY_STREET_ADDRESS', '聯絡地址：');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_STREET_ADDRESS_MIN_LENGTH . \' 個字</span>');
define('ENTRY_SUBURB', '郊區：');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', '郵遞區號：');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_POSTCODE_MIN_LENGTH . \' 個字</span>');
define('ENTRY_CITY', '城市：');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_CITY_MIN_LENGTH . \' 個字</span>');
define('ENTRY_STATE', '縣市：');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_COUNTRY', '國家：');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', '聯絡電話：');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">最少 \' . ENTRY_TELEPHONE_MIN_LENGTH . \' 個號碼</span>');
define('ENTRY_FAX_NUMBER', '傳真號碼：');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', '電子報：');
define('ENTRY_NEWSLETTER_YES', '訂閱&nbsp;');
define('ENTRY_NEWSLETTER_NO', '不訂閱&nbsp;');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', '返回');
define('IMAGE_BACKUP', '備份');
define('IMAGE_CANCEL', '取消');
define('IMAGE_CONFIRM', '確定');
define('IMAGE_COPY', '複製');
define('IMAGE_COPY_TO', '複製到');
define('IMAGE_DETAILS', '詳細資料');
define('IMAGE_DELETE', '刪除');
define('IMAGE_EDIT', '編輯');
define('IMAGE_EMAIL', '電子郵件');
define('IMAGE_FILE_MANAGER', '檔案管理');
define('IMAGE_ICON_STATUS_GREEN', '在啟用中');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', '設為 - 啟用');
define('IMAGE_ICON_STATUS_RED', '沒有啟用');
define('IMAGE_ICON_STATUS_RED_LIGHT', '設為 - 不使用');
define('IMAGE_ICON_STATUS_RED_EZPAGES', '錯誤，輸入太多網址或內容類型');
define('IMAGE_ICON_STATUS_RED_ERROR', '錯誤');
define('IMAGE_ICON_INFO', '資料');
define('IMAGE_INSERT', '輸入');
define('IMAGE_LOCK', '封鎖');
define('IMAGE_MODULE_INSTALL', '安裝外掛模組');
define('IMAGE_MODULE_REMOVE', '移除外掛模組');
define('IMAGE_MOVE', '移動');
define('IMAGE_NEW_BANNER', '新廣告看板');
define('IMAGE_NEW_CATEGORY', '新分類');
define('IMAGE_NEW_COUNTRY', '新國家');
define('IMAGE_NEW_CURRENCY', '新貨幣');
define('IMAGE_NEW_FILE', '新檔案');
define('IMAGE_NEW_FOLDER', '新資料夾');
define('IMAGE_NEW_LANGUAGE', '新語系');
define('IMAGE_NEW_NEWSLETTER', '新電子報');
define('IMAGE_NEW_PRODUCT', '新產品');
define('IMAGE_NEW_SALE', '新促銷');
define('IMAGE_NEW_TAX_CLASS', '新稅金種類');
define('IMAGE_NEW_TAX_RATE', '新稅率');
define('IMAGE_NEW_TAX_ZONE', '新稅金地區');
define('IMAGE_NEW_ZONE', '新地區');
define('IMAGE_OPTION_NAMES', '選項名稱 - 管理員');
define('IMAGE_OPTION_VALUES', '選項值 - 管理員');
define('IMAGE_ORDERS', '訂單');
define('IMAGE_ORDERS_INVOICE', '發票');
define('IMAGE_ORDERS_PACKINGSLIP', '裝貨單');
define('IMAGE_PREVIEW', '預覽');
define('IMAGE_RESTORE', '復原');
define('IMAGE_RESET', '重設');
define('IMAGE_SAVE', '儲存');
define('IMAGE_SEARCH', '搜尋');
define('IMAGE_SELECT', '選擇');
define('IMAGE_SEND', '發送');
define('IMAGE_SEND_EMAIL', '發送電子郵件');
define('IMAGE_UNLOCK', '解鎖');
define('IMAGE_UPDATE', '更新');
define('IMAGE_UPDATE_CURRENCIES', '更新貨幣匯率');
define('IMAGE_UPLOAD', '上載');
define('IMAGE_TAX_RATES', '稅率');
define('IMAGE_DEFINE_ZONES', '定義地區');
define('IMAGE_PRODUCTS_PRICE_MANAGER', '產品價格 - 管理員');
define('IMAGE_UPDATE_PRICE_CHANGES', '更新價格改變');
define('IMAGE_ADD_BLANK_DISCOUNTS', '新增 \' . DISCOUNT_QTY_ADD . \' 空白的減價量');
define('IMAGE_CHECK_VERSION', '檢查是否有更新版本 Zen Cart ');
define('IMAGE_PRODUCTS_TO_CATEGORIES', '複合產品分類 - 連結管理員');

define('IMAGE_ICON_STATUS_ON', '狀態 - 已經 - 在使用中');
define('IMAGE_ICON_STATUS_OFF', '狀態 - 已經 - 停止使用');
define('IMAGE_ICON_LINKED', '已連結的產品');

define('IMAGE_REMOVE_SPECIAL', '移除特價資料');
define('IMAGE_REMOVE_FEATURED', '移除推薦產品資料');
define('IMAGE_INSTALL_SPECIAL', '新增特價資料');
define('IMAGE_INSTALL_FEATURED', '新增推薦產品');

define('ICON_PRODUCTS_PRICE_MANAGER', '產品價格 - 管理員');
define('ICON_COPY_TO', '複製到');
define('ICON_CROSS', '不正確');
define('ICON_CURRENT_FOLDER', '目前的檔案夾');
define('ICON_DELETE', '刪除');
define('ICON_EDIT', '編輯');
define('ICON_ERROR', '錯誤');
define('ICON_FILE', '檔案');
define('ICON_FILE_DOWNLOAD', '下載');
define('ICON_FOLDER', '檔案夾');
//define('ICON_LOCKED', 'Locked');
define('ICON_MOVE', '移動');
define('ICON_PREVIOUS_LEVEL', '上一層');
define('ICON_PREVIEW', '預覽');
define('ICON_RESET', '重設');
define('ICON_STATISTICS', '統計資料');
define('ICON_SUCCESS', '完成');
define('ICON_TICK', '正確');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', '警告');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '頁面 %s 共 %d 頁');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 名管理員)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 廣告)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個分類)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個國家)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個會員)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個貨幣)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products on featured)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個語系)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 製造商)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個電子報)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個訂單)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個訂單狀態)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個價格群)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個產品)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個產品類型)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個期待產品)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個產品評論)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個促銷價)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個特價產品)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 稅金種類)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個佈景模板)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個稅金地區)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個稅率)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個地區)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', '預設');
define('TEXT_SET_DEFAULT', '設為預設');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* 必填</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '錯誤： 目前沒有設定到預設貨幣，請到： 管理主頁 -> 本地化管理 -> 貨幣 - 去設定一個預設貨幣。');

define('TEXT_CACHE_CATEGORIES', '分類區');
define('TEXT_CACHE_MANUFACTURERS', '製造商區');
define('TEXT_CACHE_ALSO_PURCHASED', '同樣也購買模組');

define('TEXT_NONE', '-  - - 沒有 - - - ');
define('TEXT_TOP', '頂層');

define('ERROR_DESTINATION_DOES_NOT_EXIST', '錯誤： 目的地不存在 %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', '錯誤： 目的地不能寫入 %s');
define('ERROR_FILE_NOT_SAVED', '錯誤： 上載檔案沒有被儲存.');
define('ERROR_FILETYPE_NOT_ALLOWED', '錯誤： 不接納的上載檔案類型  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '完成： 上載檔案儲存完成 %s');
define('WARNING_NO_FILE_UPLOADED', '警告： 沒有檔案上載.');
define('WARNING_FILE_UPLOADS_DISABLED', '警告： 上載檔案是被停止的，而有關設定在 php.ini 的設定檔案中.');
define('ERROR_ADMIN_SECURITY_WARNING', '警告：&nbsp; 您的管理登入帳號並不安全 ... 可能您仍然使用預設的登入設定，那是：&nbsp; Admin admin 或沒有移除，或沒有更改：&nbsp; demo demoonly<br />為了您商店保安的原因，這個登入帳號應該盡快更改。<br />可到 - 工具類 -> 管理員的 - 設定，去更改登入帳號和密碼。<br />有關更多保安的資料，請參考在 /docs 資料夾內的文件');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE', '您的資料庫看來需要更高級別的補丁。&&nbsp; 請參考&nbsp; 管理頁->工具管理->主機資料 - 取得補丁的級別。');
define('WARN_DATABASE_VERSION_PROBLEM', 'true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>警告：</strong> 網站現時是設定為關閉維護 ...<br />注意： 在維護模式，您不可以測試大部份的付款和和貨運模組');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', '警告：這些檔案應該要刪除來避免安全性問題：');
define('WARNING_INSTALL_DIRECTORY_EXISTS', '警告：安裝目錄存在於 \' . DIR_FS_CATALOG . \'zc_install，基於安全理由請移除這個資料夾。');
define('WARNING_CONFIG_FILE_WRITEABLE', '警告，您的設定檔案為 %sincludes/configure.php，這個檔案有安全上的風險，請為這個檔案設定正確權限（唯讀、CHMOD 644 或 444 是標準的）。');

define('_JANUARY', '一月');
define('_FEBRUARY', '二月');
define('_MARCH', '三月');
define('_APRIL', '四月');
define('_MAY', '五月');
define('_JUNE', '六月');
define('_JULY', '七月');
define('_AUGUST', '八月');
define('_SEPTEMBER', '九月');
define('_OCTOBER', '十月');
define('_NOVEMBER', '十一月');
define('_DECEMBER', '十二月');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 項禮品代金券)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '顯示 <b>%d</b> to <b>%d</b> (of <b>%d</b> 項優待券)');

define('TEXT_VALID_PRODUCTS_LIST', '產品列表');
define('TEXT_VALID_PRODUCTS_ID', '產品編號');
define('TEXT_VALID_PRODUCTS_NAME', '產品名稱');
define('TEXT_VALID_PRODUCTS_MODEL', '產品型號');

define('TEXT_VALID_CATEGORIES_LIST', '分類列表');
define('TEXT_VALID_CATEGORIES_ID', '分類編號');
define('TEXT_VALID_CATEGORIES_NAME', '分類名稱');

define('DEFINE_LANGUAGE', '設定語系：');

define('BOX_ENTRY_COUNTER_DATE', '點擊 - 計數器 - 開始日期：');
define('BOX_ENTRY_COUNTER', '點擊 - 計數器：');

// not installed
define('NOT_INSTALLED_TEXT', '沒有被安裝');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES', '選項數值 - 排序器 ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS', '<strong>更新 - 屬性排序 - 由選項值預設</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES', '<strong>更新 - 全部產品 -的- 屬性排序</strong><br />以配合 - 選項值 - 預設排序： <br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME', '選項名稱 - 排序器');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER', '屬性 - 控制器');

// generic model
  define('TEXT_MODEL', '型號：');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER', '框盒佈局 - 控制器');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE', '%s 等待認可 ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Queue');
  define('IMAGE_ORDER', '訂單');

  define('BOX_TOOLS_EMAIL_WELCOME', '歡迎電郵 - 預覽');

  define('IMAGE_DISPLAY', '顯示');
  define('IMAGE_UPDATE_SORT', '更新排序');
  define('IMAGE_EDIT_PRODUCT', '編輯產品');
  define('IMAGE_EDIT_ATTRIBUTES', '編輯屬性');
  define('TEXT_NEW_PRODUCT', '產品在分類： &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES', '選項名稱和選項值');
  define('TEXT_PRODUCTS_PRICE_MANAGER', '產品價格 - 管理員');
  define('TEXT_PRODUCT_EDIT', '編輯產品');
  define('TEXT_ATTRIBUTE_EDIT', '編輯屬性');
  define('TEXT_PRODUCT_DETAILS', '檢視詳細資料');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', '減價總額');
  define('DEDUCTION_TYPE_DROPDOWN_1', '百分比');
  define('DEDUCTION_TYPE_DROPDOWN_2', '新價格');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING', '最少量：');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', '每單位：');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING', '在購物車內：');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', '新增附加的：');

  define('TEXT_PRODUCTS_MIX_OFF', '*不是 -混合選項');
  define('TEXT_PRODUCTS_MIX_ON', '*是的 -混合選項');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER', '搜尋過濾： ');
  define('HEADING_TITLE_SEARCH_DETAIL', '搜 尋：  ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', '搜尋產品，逗點分隔');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', '搜尋產品名稱/型號');

  define('PREV_NEXT_PRODUCT', '產品： ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*分類被停止</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*產品被停止</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE', '管理示範模式目前在啟用中，有些設定會被停用');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION', '管理示範模式目前在啟用中，有些設定會被停用 - <strong>注意： 管理優先權在開啟狀態</strong>');
  define('ERROR_ADMIN_DEMO', '管理示範模式啟用中中 ... 您正在嘗試使用的功能已經被停止');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER', '新提出版本 V');
  define('TEXT_VERSION_CHECK_NEW_PATCH', '新提出補丁： V');
  define('TEXT_VERSION_CHECK_PATCH', '補丁');
  define('TEXT_VERSION_CHECK_DOWNLOAD', '在這下載');
  define('TEXT_VERSION_CHECK_CURRENT', '您的 Zen Cart&trade; 看來是目前的版本.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個下載)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', '下載 - 管理員');

define('BOX_CATALOG_FEATURED', '推薦產品');

define('ERROR_NOTHING_SELECTED', '沒有選取項目 ... 資料沒有被改變');
define('TEXT_STATUS_WARNING', '<strong>注意：</strong> 當日期被設定，狀態是自動 - 啟用/停用，');

define('TEXT_LEGEND_LINKED', '已連結產品');
define('TEXT_MASTER_CATEGORIES_ID', '產品主要分類：');
define('TEXT_LEGEND', '圖例說明： ');
define('TEXT_LEGEND_STATUS_OFF', '停用 狀態 ');
define('TEXT_LEGEND_STATUS_ON', '啟用 狀態 ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>注意： &nbsp; 主要分類是用作定價用途, <br />而產品分類會影響連結產品的價格, 範例： Sales 促銷價.</strong>');
define('TEXT_YES', '是');
define('TEXT_NO', '否');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>貨運設定錯誤！</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>警告： </strong> 商店郵遞區號 Zip Code 沒有定定義。請看配置設定 | Shipping/Packaging 貨運/包裝，和設定它。');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>警告： </strong> 0 重量的設定，是為了 - 免費送貨，和 - 免費送貨模組 - 沒有被啟動');
define('ERROR_USPS_STATUS', '<strong>警告： </strong> USPS 缺乏了名稱 和/或 密碼， 或 ... 它被設定為 測試，而不是 生產，因而它不會工作<br />如果您仍然不能提取報價，請聯絡 USPS 和啟動您的正式工作帳戶');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', '注意：您沒有啟用任何送貨模組，請到模組 -> 貨運進行設定。');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', '注意：您沒有啟用任何付款模組，請到模組 -> 付款進行設定。');

// text pricing
define('TEXT_CHARGES_WORD', '估計的費用：');
define('TEXT_PER_WORD', '<br />單詞價格： ');
define('TEXT_WORDS_FREE', ' 字詞免費 ');
define('TEXT_CHARGES_LETTERS', '估計的費用：');
define('TEXT_PER_LETTER', '<br />單字價格： ');
define('TEXT_LETTERS_FREE', ' 單字免費 ');
define('TEXT_ONETIME_CHARGES', '*一次性費用 = ');
define('TEXT_ONETIME_CHARGES_EMAIL', 't" . \'*一次性費用 = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', '選項數量減價');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY', '數量');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE', '價格');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '選項數量減價一次性費用');
define('TEXT_CATEGORIES_PRODUCTS', '請選擇一個含有產品的 - 分類 ... 彧在產品間移動');
define('TEXT_PRODUCT_TO_VIEW', '請選擇一個產品去檢視和點按 - 顯示 ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', '無效的主要分類型編號# ID');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>警告： </strong> 這個產品已經連結到 -複合產品分類，但沒有 - 主要分類 - 被設定！');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '產品是 -歡迎查詢價格');
define('PRODUCTS_PRICE_IS_FREE_TEXT', '產品是免費');

define('TEXT_PRODUCT_WEIGHT_UNIT', '公斤');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', '最多：');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX', '節省：&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% 減價');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;減價');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE', '促銷價：&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED', '&nbsp; &nbsp; 如果您沒有設定 HTML 編輯器，或沒有啟用 JavaScript, 您可以在這輸入原始的 HTML 語法。 <br />');
define('TEXT_WARNING_HTML_DISABLED', '<span class = "main">&nbsp; &nbsp; 注意： 您使用的是文本式的電子郵件，如果您想使用 HTML，請到 - 電子郵件選項 - 裡開啟 "使用 MIME HTML"</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML', '<span class = "main">注意： 您使用的是文字電子郵件，如果您想用 HTML 請到- 電子郵件選項 -裡啟用 "使用 MIME HTML"</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML', '您會看到這個訊息是因為我們寄給您的是HTML格式的郵件，但是您的電郵軟體不能顯示 HTML 訊息.');
define('ENTRY_EMAIL_PREFERENCE', '電子郵件格式偏好：');
define('ENTRY_EMAIL_FORMAT_COMMENTS', '選擇 "沒有" 或 "不選擇" 會讓您收不到任何郵件，包括訂單詳細資料');
define('ENTRY_EMAIL_HTML_DISPLAY', 'HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY', '純文字');
define('ENTRY_EMAIL_NONE_DISPLAY', '永不');
define('ENTRY_EMAIL_OPTOUT_DISPLAY', '不選擇電子報');
define('ENTRY_NOTHING_TO_SEND', '您還沒有為您的訊息輸入任何內容');
 define('EMAIL_SEND_FAILED', '錯誤： E-email 發送失敗，致送給： "%s" <%s> 主題是： "%s"');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', '&nbsp; &nbsp; 文本編輯器：');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \'\'.DIR_WS_CATALOG.\'editors/\' folder');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', '產品排序：');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', '產品排序、產品名稱');
  define('TEXT_SORT_PRODUCTS_NAME', '產品名稱');
  define('TEXT_SORT_PRODUCTS_MODEL', '產品型號');
  define('TEXT_SORT_PRODUCTS_QUANTITY', '產品數量+, 產品名稱');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', '產品數量-, 產品名稱');
  define('TEXT_SORT_PRODUCTS_PRICE', '產品價格+, 產品名稱');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', '產品價格-, 產品名稱');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', '分類排序, 分類名稱');
  define('TEXT_SORT_CATEGORIES_NAME', '分類名稱');



  define('TABLE_HEADING_YES', '是');
  define('TABLE_HEADING_NO', '否');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Or, select an existing image file from server, filename:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '是否要覆蓋目前的圖像？ <br /><font color="red">如自行輸入名稱，請採用「否」</font>. ');
  define('TEXT_IMAGE_OVERWRITE_WARNING', '警告： 檔案名稱已更新但是沒有被覆蓋。 ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTE: Removes Image from Product, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', '警告： 沒有定義選項名稱');
  define('ERROR_DEFINE_OPTION_VALUES', '警告： 沒有定義選項值');
  define('ERROR_DEFINE_PRODUCTS', '警告： 沒有定義產品');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', '警告： 沒有為這產品設定主分類編號 ID');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON', '加入包括子分類');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF', '加入不包括子分類');

  define('BUTTON_PREVIOUS_ALT', '上一項產品');
  define('BUTTON_NEXT_ALT', '下一項產品');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', '多重分類連結管理員');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', '複製產品到多重分類');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', '所有全局複製，加入和移除功能狀態現時是 - 關閉');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', '顯示全局功能 - 開啟');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', '顯示全局功能 - 關閉');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '錯誤： 在相同分類，不能夠連結產品。');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '錯誤： 分類圖像是不能寫入的： \' . DIR_FS_CATALOG_IMAGES);
  define(\'ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST\', \'錯誤： 分類圖像檔案夾不存在： \' . DIR_FS_CATALOG_IMAGES);
  define(\'ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT\', \'錯誤： 分類不能夠移入子分類。');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', '錯誤： 不能移動產品到相同的分類，或移入一個已經存在的分類。');
  define('ERROR_CATEGORY_HAS_PRODUCTS', '錯誤： 分類已經有產品！<br /><br />當這可以暫時建立您的分類 ... 分類保存其中的產品或分類，但永不會是一起的！');
  define('SUCCESS_CATEGORY_MOVED', '完成！ 分類已經完成移動 ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', '錯誤： 不能移動分類到相同分類！ 編號 ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '錯誤： EZ-簡易頁面頁首 - 只為 Admin IP 開啟');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '錯誤： EZ-簡易頁面頁首 - 只為 Admin IP 開啟');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '錯誤： EZ-簡易頁面頁首 - 只為 Admin IP 開啟');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW', '警告： 這產品是標誌為 - 免費送貨，和略過送運地址<br />當訂單中，所有貨品都是虛擬產品時，將不會被要求送貨');
  define('TEXT_VIRTUAL_EDIT', '警告： 這產品已被標誌為 - 免費送貨，和略過送運地址<br />當訂單中，所有貨品都是虛擬產品時，將不會被要求送貨');
  define('TEXT_FREE_SHIPPING_PREVIEW', '警告： 這產品已被標誌為 - 免費送貨，需要送運地址<br />需要 - 免費送貨模組，當在訂單中，所有產品都是 - 經常免費送貨產品');
  define('TEXT_FREE_SHIPPING_EDIT', '警告： 是的，標誌這產品為 - 免費送貨，需要送貨地址<br />需要 - 免費送貨模組，  當在這訂單中，所有產品都是 - 經常免費送貨產品');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', '警告： 管理員的活動記錄表，已經超過 2 個月，所以應該清理它 ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', '警告： 管理員的活動記錄表，已經超過 50,000 項記錄，所以應該清理它 ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', '進入商店管理員，去重置管理員的活動記錄');

  define('CATEGORY_HAS_SUBCATEGORIES', '注意： 分類已經有子分類<br />產品不能加入');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>