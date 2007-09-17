<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 5454 2006-12-29 20:10:17Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', '版權所有 &copy; 2003-2006 <a href="http:





@setlocale(LC_TIME, \'zh_TW.Big5');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'en_US.ISO_8859-1');
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A, %d日%m月%Y年 '); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'TWD');

// Global entries for the <html> tag
  define('HTML_PARAMS', 'dir="ltr" lang="zh-TW"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', '瀏覽要求開始由');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME', '禮品券');
  define('TEXT_GV_NAMES', '禮品券');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM', '兌換號碼');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Redemption code: ');

// text for gender
  define('MALE', '先生');
  define('FEMALE', '女士');
  define('MALE_ADDRESS', '先生');
  define('FEMALE_ADDRESS', '女士');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;（更多）');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', '產品分類');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', '製造商');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', '新進產品');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', '新進產品 ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', '推薦產品');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', '推薦產品 ...');
  define('TEXT_NO_FEATURED_PRODUCTS', '多種推薦產品在預備中，請稍後再來！');

  define('TEXT_NO_ALL_PRODUCTS', '多種產品在預備中，請稍後再來！');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', '全部產品 ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', '快速搜尋');
  define('BOX_SEARCH_ADVANCED_SEARCH', '進階搜尋');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', '特價產品');
  define('CATEGORIES_BOX_HEADING_SPECIALS', '特價產品 ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', '產品評論');
  define('BOX_REVIEWS_WRITE_REVIEW', '您對這產品的評論');
  define('BOX_REVIEWS_NO_REVIEWS', '目前沒有產品評論');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '5 顆星中的 %s 顆星！');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', '購物車');
  define('BOX_SHOPPING_CART_EMPTY', '您的購物車沒有產品。');
  define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;x -&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', '最近訂購');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', '暢銷產品');
  define('BOX_HEADING_BESTSELLERS_IN', '暢銷產品，在<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', '產品通知');
  define('BOX_NOTIFICATIONS_NOTIFY', '有更新通知我，關於： <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', '更新時不要通知我，關於： <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', '製造商資訊');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s 的首頁');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', '其他產品');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', '語 系');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', '貨 幣');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', '服務中心');
  define('BOX_INFORMATION_PRIVACY', '隱私權保障聲明');
  define('BOX_INFORMATION_CONDITIONS', '使用條款');
  define('BOX_INFORMATION_SHIPPING', '貨運和退回');
  define('BOX_INFORMATION_CONTACT', '聯絡我們');
  define('BOX_BBINDEX', '會員交流區');
  define('BOX_INFORMATION_UNSUBSCRIBE', '電子報 - 停止訂閱&nbsp;');

  define('BOX_INFORMATION_SITE_MAP', '網站地圖');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', '更多資訊');
  define('BOX_INFORMATION_PAGE_2', '第 2 頁');
  define('BOX_INFORMATION_PAGE_3', '第 3 頁');
  define('BOX_INFORMATION_PAGE_4', '第 4 頁');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', '推薦給親友');
  define('BOX_TELL_A_FRIEND_TEXT', '推薦這產品給親友');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', '我的願望表');
  define('BOX_WISHLIST_EMPTY', '您沒有項目在您的願望表');
  define('IMAGE_BUTTON_ADD_WISHLIST', '加到願望表');
  define('TEXT_WISHLIST_COUNT', '目前有 %s 項目在您的願望表。');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', '顯示 <strong>%d</strong> 到 <strong>%d</strong> (共 <strong>%d</strong> 項目在您的願望表)');

//New billing address text
  define('SET_AS_PRIMARY', '設定為主要地址');
  define('NEW_ADDRESS_TITLE', '付款通訊地址');

// javascript messages
  define('JS_ERROR', '您的表格在處理時發生問題，\n\n請作以下的修改：\n\n');

  define('JS_REVIEW_TEXT', '* 您的評論最少要有 \' . REVIEW_TEXT_MIN_LENGTH . \' 個字元。');
  define('JS_REVIEW_RATING', '* 請您為這產品，提供一個評價');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* 請為您的訂單，選擇一個付款方法。');

  define('JS_ERROR_SUBMITTED', '這表格已經送出，請按 Ok 和等待這個進程完全被處理完畢。');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', '請為您的訂單，選取一個合適的付款方法。');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', '請您詳閱及同意與這訂單有關的條款和細則，及在下面的選取格上勾選，以表示閣下同意有關條款和細則。');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', '請您詳閱及同意我們的隱私權保護聲明，及在下面的選取格上勾選，以表示閣下同意我們的隱私權保護聲明。');

  define('CATEGORY_COMPANY', '公司資料');
  define('CATEGORY_PERSONAL', '您的個人資料');
  define('CATEGORY_ADDRESS', '您的地址');
  define('CATEGORY_CONTACT', '您的聯絡資料');
  define('CATEGORY_OPTIONS', '選項');
  define('CATEGORY_PASSWORD', '您的密碼');
  define('CATEGORY_LOGIN', '登入');
  define('PULL_DOWN_DEFAULT', '請選擇您所在國家');
  define('PLEASE_SELECT', '請選擇 ...');
  define('TYPE_BELOW', '在下面輸入一個選項 ...');

  define('ENTRY_COMPANY', '公司名稱：');
  define('ENTRY_COMPANY_ERROR', '');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', '稱謂：');
  define('ENTRY_GENDER_ERROR', '請選您的 - 稱謂');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', '名字/名稱：');
  define('ENTRY_FIRST_NAME_ERROR', '您填入的 - 名字 - 不能少於 \' . ENTRY_FIRST_NAME_MIN_LENGTH . \' 個字元');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', '姓氏：');
  define('ENTRY_LAST_NAME_ERROR', '您填入的 - 姓氏 - 不能少於 \' . ENTRY_LAST_NAME_MIN_LENGTH . \' 個字元');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', '出生日期：');
  define('ENTRY_DATE_OF_BIRTH_ERROR', '您填入的 - 出生日期 - 必須是右列格式： DD/MM/YYYYY (例: 21/05/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (例: 21/05/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'E-Mail 地址：  ');
  define('ENTRY_EMAIL_ADDRESS_ERROR', '您填入的 - E-Mail - 不能少於 \' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . \' 個字元');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '抱歉，您的 - E-Mail 地址- 我們的系統不能理解，請再嘗試。');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '您提供的 - E-Mail 地址 - 已經在我們系統被註冊了！請嘗試用這 email 地址來登入。如果您已經不使用這 email 地址，您可以在「我的帳戶」區中把它修改。');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', '會員交流區匿稱：');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', '這匿稱已經被使用，請嘗試其他的。');
  define('ENTRY_NICK_LENGTH_ERROR', '請再嘗試，我們系統要求最少有 \' . ENTRY_NICK_MIN_LENGTH . \' 個字元');
  define('ENTRY_STREET_ADDRESS', '街道門牌號碼 1:');
  define('ENTRY_STREET_ADDRESS_ERROR', '您填入的 - 街道門牌號碼 - 不能少於 \' . ENTRY_STREET_ADDRESS_MIN_LENGTH . \' 個字元');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', '街道門牌號碼 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', '郵遞區號：');
  define('ENTRY_POST_CODE_ERROR', '您填入的 - 郵遞區號 - 不能少於 \' . ENTRY_POSTCODE_MIN_LENGTH . \' 個字元');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', '鄉/村鎮區：');
  define('ENTRY_CUSTOMERS_REFERRAL', '介紹號碼：');

  define('ENTRY_CITY_ERROR', '您填入的 - 鄉/村鎮區 - 不能少於 \' . ENTRY_CITY_MIN_LENGTH . \' 個字元');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', '縣市：');
  define('ENTRY_STATE_ERROR', '您填入的 - 縣市 - 不能少於 \' . ENTRY_STATE_MIN_LENGTH . \' 個字元');
  define('ENTRY_STATE_ERROR_SELECT', '請從下拉式選單中選取合適的 - 縣市');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- 請選擇 --');
  define('ENTRY_COUNTRY', '國家：');
  define('ENTRY_COUNTRY_ERROR', '請您由下拉式選單中，選取一個合適的 - 國家');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', '電話號碼：');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '您填入的 - 電話號碼 - 不能少於 \' . ENTRY_TELEPHONE_MIN_LENGTH . \' 個字元');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', '傳真號碼：');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', ' 請訂閱 - 我們的電子報！');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', '訂閱&nbsp;');
  define('ENTRY_NEWSLETTER_NO', '取消訂閱&nbsp;');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', '密碼：');
  define('ENTRY_PASSWORD_ERROR', '您填入的 - 目前密碼 - 不能少於 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字元');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '您填入的 - 密碼 - 和 - 核對密碼 - 不符');
  define('ENTRY_PASSWORD_TEXT', '* (最少 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字元)');
  define('ENTRY_PASSWORD_CONFIRMATION', '核對密碼：');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', '目前密碼：');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', '您的 - 密碼 - 不能少於 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字元');
  define('ENTRY_PASSWORD_NEW', '新的密碼：');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', '您的 - 新密碼 - 不能少於 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字元');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '「新的密碼」和「核對密碼」必須要相同');
  define('PASSWORD_HIDDEN', '--隱藏--');

  define('FORM_REQUIRED_INFORMATION', '* 表示該欄必須填寫');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '列出 <strong>%d</strong> 至 <strong>%d</strong> (共 <strong>%d</strong> 項 產品)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '列出 <strong>%d</strong> 至 <strong>%d</strong> (共 <strong>%d</strong> 筆 訂單)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '列出 <strong>%d</strong> 至 <strong>%d</strong> (共 <strong>%d</strong> 個 評論)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '列出 <strong>%d</strong> 至 <strong>%d</strong> (共 <strong>%d</strong> 項 新進產品)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '列出 <strong>%d</strong> 至 <strong>%d</strong> (共 <strong>%d</strong> 項 特價)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', '列出 <strong>%d</strong> 到 <strong>%d</strong> (共 <strong>%d</strong> 項 推薦產品)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', '列出 <strong>%d</strong> 到 <strong>%d</strong> (共 <strong>%d</strong> 項 產品)');

  define('PREVNEXT_TITLE_FIRST_PAGE', '第一頁');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', '前一頁');
  define('PREVNEXT_TITLE_NEXT_PAGE', '下一頁');
  define('PREVNEXT_TITLE_LAST_PAGE', '最後一頁');
  define('PREVNEXT_TITLE_PAGE_NO', '第 %d 頁');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '前一組_第 %d 頁');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '下一組_第 %d 頁');
  define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;最前');
  define('PREVNEXT_BUTTON_PREV', '[ &lt;&lt;&nbsp;上一頁]');
  define('PREVNEXT_BUTTON_NEXT', '[下一頁&nbsp;&gt;&gt; ]');
  define('PREVNEXT_BUTTON_LAST', '最後&gt;&gt;');

  define('TEXT_BASE_PRICE', '起售價： ');

  define('TEXT_CLICK_TO_ENLARGE', '放大圖像');

  define('TEXT_SORT_PRODUCTS', '產品排序方式： ');
  define('TEXT_DESCENDINGLY', '遞減');
  define('TEXT_ASCENDINGLY', '遞增');
  define('TEXT_BY', ' 排序鍵：');

  define('TEXT_REVIEW_BY', '評論者： %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s 字');
  define('TEXT_REVIEW_RATING', '評價：%s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', '加入日期： %s');
  define('TEXT_NO_REVIEWS', '目前沒有產品評論。');

  define('TEXT_NO_NEW_PRODUCTS', '更多新進產品在預備中，請稍後再光臨參觀，謝謝！');

  define('TEXT_UNKNOWN_TAX_RATE', '銷售稅');

  define('TEXT_REQUIRED', '<span class="errorText">必須填寫</span>');

  $warn_path = (isset($_SERVER['SCRIPT_FILENAME']) ? @dirname($_SERVER['SCRIPT_FILENAME']) : '.....');
  define('WARNING_INSTALL_DIRECTORY_EXISTS', '警告：　安裝的檔案目錄存在於：　\' . $warn_path . \'/zc_install. 為了保安的理由，請把它移除。');
  define('WARNING_CONFIG_FILE_WRITEABLE', '警告：　我可以寫入設定檔案： \' . $warn_path . \'/includes/configure.php. 這對系統安全具有潛在的風險，請將檔案設定為正確的使用權限。');
  unset($warn_path);
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', '警告: sessions 資料夾不存在: \' . zen_session_save_path() . \'. 在這個資料夾未建立之前 Sessions 無法運作 ');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', '警告： 無法寫入sessions 資料夾: \' . zen_session_save_path() . \'. 在使用者權限未正確設定之前 Sessions 將無法正確動作。');
  define('WARNING_SESSION_AUTO_START', '警告： session.auto_start 已經啟動 - 請到 php.ini 內關閉這個性能，並重新啟動網頁主機。');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', '警告： 可下載的產品檔案資料夾不存在: \' . DIR_FS_DOWNLOAD . \'. 在這個資料夾未建立之前，無法下載產品。');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', '警告：SQL 的快取(cache)檔案資料夾不存在: \' . DIR_FS_SQL_CACHE . \'. 在這個檔案資料夾未建立之前，無法使用 SQL 的快取性能(caching)。');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', '警告： 無法寫入 SQL 的快取 (cache) 檔案資料夾： \' . DIR_FS_SQL_CACHE . \'. 在使用者權限未正確設定之前，快取性能 (caching) 將無法正確動作。');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', '您的資料庫看來需要更高級別的補丁。&&nbsp; 請參考&nbsp; 管理頁->工具管理->主機資料 - 取得補丁的級別。');


  define('TEXT_CCVAL_ERROR_INVALID_DATE', '輸入的信用卡到期日無效。請檢查日期後再試。');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '輸入的信用卡卡號無效。請檢查後再試。');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '您輸入的前四碼是： %s, 如果正確，我們目前尚無法接受此類信用卡。 如果錯誤，請重新再試。');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', '優待券');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Balance ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Account');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', '恭喜，您已經完成兌換 ');
  define('ERROR_NO_REDEEM_CODE', '您沒有有輸入 \' . TEXT_GV_REDEEM . \'.');
  define('ERROR_NO_INVALID_REDEEM_GV', '無效 \' . TEXT_GV_NAME . \' \' . TEXT_GV_REDEEM);
  define(\'TABLE_HEADING_CREDIT\', \'可用信用額');
  define('GV_HAS_VOUCHERA', '您有款項在您的 \' . TEXT_GV_NAME . \' 帳戶。如果您想 <br />
                           您可以發送這些款項由 <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>經 email 發出</strong></a> 給其他人');
  define('ENTRY_AMOUNT_CHECK_ERROR', '您沒有足夠款項，去送出這數額。');
  define('BOX_SEND_TO_FRIEND', '發送 \' . TEXT_GV_NAME . \' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Redeemed');
  define('CART_COUPON', '優待券：');
  define('CART_COUPON_INFO', '更多資料');
  define('TEXT_SEND_OR_SPEND', '您有一個餘額在您的 \' . TEXT_GV_NAME . \' 帳戶。 您可以使用它或把它發送給其他人。要發送請點按下面的按鈕。');
  define('TEXT_BALANCE_IS', '您的 \' . TEXT_GV_NAME . \' 餘額是： ');
  define('TEXT_AVAILABLE_BALANCE', '您的 \' . TEXT_GV_NAME . \' 帳戶');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', '禮品券 / 優待券');
  define('PAYMENT_MODULE_GV', '禮品券 - GV / 優待券 - DC');

  define('TABLE_HEADING_CREDIT_PAYMENT', '可用信用額');

  define('TEXT_INVALID_REDEEM_COUPON', '優待券號碼 - 無效');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', '您的交易金額必須達到 %s 才能使用這個優待券');
  define('TEXT_INVALID_STARTDATE_COUPON', '對不起，這優待券，仍未到行使期，暫時未可以使用');
  define('TEXT_INVALID_FINISDATE_COUPON', '對不起，這優待券，已過了行使期，不可以使用');
  define('TEXT_INVALID_USES_COUPON', '這優待券只可使用 ');
  define('TIMES', ' 次。');
  define('TIME', ' 次。');
  define('TEXT_INVALID_USES_USER_COUPON', '您已經使用超出了優待券號碼： %s 的最大值，這是每位客人可許可的使用次數。');
  define('REDEEMED_COUPON', '一項優待券等值 ');
  define('REDEEMED_MIN_ORDER', '在訂單超過 ');
  define('REDEEMED_RESTRICTIONS', ' [產品-分類 - 限制應用]');
  define('TEXT_ERROR', '有錯誤發生');
  define('TEXT_INVALID_COUPON_PRODUCT', '這個「優待券號碼」無效，暫時不可以應用在您目前購物車中的產品上。');
  define('TEXT_VALID_COUPON', '恭喜您已經兌換了這優待券');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', '您輸入的優待券無法用在您選擇的住址');

// more info in place of buy now
  define('MORE_INFO_TEXT', ' ... 更多資料');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS', '您的 IP 位址是： ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION', '位址資料');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART', '購物車上的數量： ');
  define('PRODUCTS_ORDER_QTY_TEXT', '放入購物車： ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', '產品成功加入購物車 ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', '選擇的產品成功加入購物車 ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT', '公斤');

// Shipping
  define('TEXT_SHIPPING_WEIGHT', '公斤');
  define('TEXT_SHIPPING_BOXES', '盒');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX', '節省：&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE', '% 優惠');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT', '&nbsp;優惠');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE', '再減價：&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX', '贊助者');
  define('TEXT_BANNER_BOX', '請參觀我們的贊助者 ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2', '您參觀了嗎？ ...');
  define('TEXT_BANNER_BOX2', '今天可要看清楚！');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL', '贊助者');
  define('TEXT_BANNER_BOX_ALL', '請參觀我們的贊助者 ...');

// boxes defines
  define('PULL_DOWN_ALL', '- - - 請 選 擇 - - -');
  define('PULL_DOWN_MANUFACTURERS', '- - -  重 設  - - - ');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', '- - - 請 選 擇 - - -');

// general Sort By
  define('TEXT_INFO_SORT_BY', '排序於： ');

// close window image popups
  define('TEXT_CLOSE_WINDOW', ' - 關閉視窗 >> 可點按圖像');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW', '[ 關閉視窗 ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', '錯誤： 不接納的檔案類型');
  define('WARNING_NO_FILE_UPLOADED', '警告： 沒有檔案上載');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '完成： 檔案儲存完成');
  define('ERROR_FILE_NOT_SAVED', '錯誤： 檔案沒有被儲存');
  define('ERROR_DESTINATION_NOT_WRITEABLE', '錯誤： 目的位置不能寫入');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', '錯誤： 目的位置不存在');
  define('ERROR_FILE_TOO_BIG', '警告：檔案太大所以無法上傳！<br />訂單可以送出，但是關於上傳檔案的問題請洽尋網站管理員。');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', '注意： 非常抱歉！本網站因要進行更新維護，將要暫停，而且排程在： ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', '注意： 非常抱歉！本網站因要進行資料更新維護，暫停向外開放，請稍後再光臨，謝謝！');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '這是免費的！');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '歡迎查詢售價');
  define('TEXT_CALL_FOR_PRICE', '歡迎查詢售價');

  define('TEXT_INVALID_SELECTION', ' 您選取了無效的選項： ');
  define('TEXT_ERROR_OPTION_FOR', ' 在這選項： ');
  define('TEXT_INVALID_USER_INPUT', '需要使用者輸入<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING', '最少：');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', '單位：');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING', '在購物車：');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', '加入附加的：');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', '最大：');

  define('TEXT_PRODUCTS_MIX_OFF', '*不可 混合');
  define('TEXT_PRODUCTS_MIX_ON', '*可以 混合');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART', '*不可使用 - 混合選項值');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART', '*可以使用 - 混合選項值');

  define('ERROR_MAXIMUM_QTY', '數量調整了 - 最大數量加入了購物車 ');
  define('ERROR_CORRECTIONS_HEADING', '請修正以下的： <br />');
  define('ERROR_QUANTITY_ADJUSTED', '數量錯誤調整<br />');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG', '注意： 下載是暫停供應的，直到付款被確認之後');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT', '產品名稱： ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART', '<br />我們非常抱歉，但現時這產品我們已經由貨架中移離。<br />這項目已從您的購物車中移除。');
  define('ERROR_PRODUCT_QUANTITY_MIN', ' ... 最少數量錯誤 - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS', ' ... 數量單位錯誤 - ');
  define('ERROR_PRODUCT_OPTION_SELECTION', '<br /> ... 選取了無效的選項值 ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED', '<br /> 您總共訂購了： ');
  define('ERROR_PRODUCT_QUANTITY_MAX', ' ... 最大數量錯誤 - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART', ' ... 最少數量錯誤 - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART', ' ... 數量單位錯誤 - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART', ' ... 最大數量錯誤 - ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', '無法驗證客戶資訊！<br />請登入或重新建立您的帳號。');

  define('TABLE_HEADING_FEATURED_PRODUCTS', '推薦產品');

  define('TABLE_HEADING_NEW_PRODUCTS', '新進產品 - 快報 - 在 %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', '快將上市 - 產品');
  define('TABLE_HEADING_DATE_EXPECTED', '預售日期');
  define('TABLE_HEADING_SPECIALS_INDEX', '每月特價 - 呈送 - 在 %s');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT', '這是免費的！');

// customer login
  define('TEXT_SHOWCASE_ONLY', '聯絡我們');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE', '售價未能提供');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE', '請登錄取得售價');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM', '只限於示範商店');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', '售價未能提供');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', '等待認可中');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE', '登入商店');

// text pricing
  define('TEXT_CHARGES_WORD', '計算出的費用：');
  define('TEXT_PER_WORD', '<br />每個字串的價格： ');
  define('TEXT_WORDS_FREE', ' 免費字串數目 ');
  define('TEXT_CHARGES_LETTERS', '計算出的費用：');
  define('TEXT_PER_LETTER', '<br />每個字元的價格： ');
  define('TEXT_LETTERS_FREE', ' 免費字元數目 ');
  define('TEXT_ONETIME_CHARGES', '*一次性收費 = ');
  define('TEXT_ONETIME_CHARGES_EMAIL', 't" . \'*一次性收費 = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', '選項 - 多量購物，優惠價格');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY', '數量');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE', '售價');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '選項 - 多量購物，優惠價格，一次性收費');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED', ' 許可的最大字符數目');
  define('TEXT_REMAINING', '剩餘');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', '估計的貨運成本');
  define('CART_SHIPPING_OPTIONS_LOGIN', '請 <a href="\' . zen_href_link(FILENAME_LOGIN, \'\', \'SSL\') . \'"><span class="pseudolink">登入</span></a>，以便顯示適合您個人的運費成本。');
  define('CART_SHIPPING_METHOD_TEXT', '可提供的貨運方法');
  define('CART_SHIPPING_METHOD_RATES', '費率');
  define('CART_SHIPPING_METHOD_TO', '送運至：');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', '送運至： <a href="\' . zen_href_link(FILENAME_LOGIN, \'\', \'SSL\') . \'"><span class="pseudolink">登入</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT', '免費送貨');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS', '- 下載');
  define('CART_SHIPPING_METHOD_RECALCULATE', '重新計算');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED', '真確');
  define('CART_SHIPPING_METHOD_ADDRESS', '地址：');
  define('CART_OT', '總成本估計：');
  define('CART_OT_SHOW', '真確'); // set to false if you don't want order totals
  define('CART_ITEMS', '購物車中的項目： ');
  define('CART_SELECT', '選擇');
  define('ERROR_CART_UPDATE', '請更新您的訂單 ...<br />');
  define('IMAGE_BUTTON_UPDATE_CART', '更新');
  define('EMPTY_CART_TEXT_NO_QUOTE', '您的連線已經逾時，請更新您的購物車來繼續運費報價。');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', '加入：');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', '加入：');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', '加入：');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', '加入：');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', '多量購物，優惠價');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', '多量購物，新價格');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', '多量購物，優惠價');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* 基於以上選項，優惠會有作不同');
  define('TEXT_HEADER_DISCOUNTS_OFF', '多量購物優惠，暫時未能提供 ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET', '- - -  重 設  - - - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', '產品名稱');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', '產品名稱 - 介紹');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', '價目 - 低至高');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', '價目 - 高至低');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', '型號');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', '加入日期 - 新至舊');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', '加入日期 - 舊至新');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', '預設顯示');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', '連結逾期');
  define('TABLE_HEADING_DOWNLOAD_COUNT', '剩餘');
  define('HEADING_DOWNLOAD', '如要下載您的檔案，請點按那下載的按鈕，和在冒出的選單中選擇 "儲存到磁碟" 。');
  define('TABLE_HEADING_DOWNLOAD_FILENAME', '檔案名稱');
  define('TABLE_HEADING_PRODUCT_NAME', '項目名稱');
  define('TABLE_HEADING_BYTE_SIZE', '檔案容量');
  define('TEXT_DOWNLOADS_UNLIMITED', '沒有限制');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', '數量');
  define('TABLE_HEADING_PRODUCTS', '項目名稱');
  define('TABLE_HEADING_TOTAL', '總共');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', '隱私權保障聲明');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '請您勾選，在下面的核取框盒，作為確認同意我們的隱私權保障聲明。這隱私權保障聲明在 <a href="\' . zen_href_link(FILENAME_PRIVACY, \'\', \'SSL\') . \'"><span class="pseudolink">這裡</span></a>，請詳細參閱。');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '我已經詳閱和同意您的隱私權保障聲明。');
  define('TABLE_HEADING_ADDRESS_DETAILS', '地址資料');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', '額外聯繫資料');
  define('TABLE_HEADING_DATE_OF_BIRTH', '請核對您的年齡');
  define('TABLE_HEADING_LOGIN_DETAILS', '登錄資料');
  define('TABLE_HEADING_REFERRAL_DETAILS', '您是由介紹而來我們這這裡？');

  define('ENTRY_EMAIL_PREFERENCE', '電子報，和 Email 資料');
  define('ENTRY_EMAIL_HTML_DISPLAY', ' HTML 格式');
  define('ENTRY_EMAIL_TEXT_DISPLAY', 'TEXT 文本格式');
  define('EMAIL_SEND_FAILED', '錯誤： 發送 email 時失敗，地址是： "%s" <%s> 有關主題是： "%s"');

  define('DB_ERROR_NOT_CONNECTED', '錯誤 - 不能連接上資料庫');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '警告：EZ-簡易頁面 - 頁頂 - 只為管理員 IP 開啟');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '警告：EZ-簡易頁面 - 頁尾 - 只為管理員 IP 開啟');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '警告：EZ-簡易頁面 - 框盒 - 只為管理員 IP 開啟');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', '項目開始於');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- 重設 --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
?>