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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', '定義頁面 - 編輯器 - 使用於： ');
define('NAVBAR_TITLE', '定義頁面編輯器');

define('TEXT_INFO_EDIT_PAGE', '選擇需要編輯的頁面:');

define('TEXT_INFO_MAIN_PAGE', '主頁');

define('TEXT_INFO_SHIPPINGINFO', '送貨和退回');
define('TEXT_INFO_PRIVACY', '隱私權保障聲明');
define('TEXT_INFO_CONDITIONS', '使用條款');
define('TEXT_INFO_CONTACT_US', '聯絡我們');
define('TEXT_INFO_CHECKOUT_SUCCESS', '結帳完成');

define('TEXT_INFO_PAGE_2', '頁數 2');
define('TEXT_INFO_PAGE_3', '頁數 3');
define('TEXT_INFO_PAGE_4', '頁數 4');

define('TEXT_FILE_DOES_NOT_EXIST', '檔案不存在: %s');

define('ERROR_FILE_NOT_WRITEABLE', '錯誤： 我不能寫入這個檔案，請設定正確的權限給予： %s');

define('TEXT_INFO_SELECT_FILE', '選擇需要編輯的檔案 ...');
define('TEXT_INFO_EDITING', '編輯檔案:');

define('TEXT_INFO_CAUTION','注意：&nbsp; 通常的，您應該修改那些檔案，它們位於您目前佈景模板，而有優先權（override）的檔案夾，<br />例如：&nbsp;  /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />請確定備份您修改後的檔案。');
?>