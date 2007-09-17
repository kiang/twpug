<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', '縱欄框盒');

define('TABLE_HEADING_LAYOUT_BOX_NAME', '框盒檔案名稱');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', '左/右-縱欄<br />狀態');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', '單-縱欄<br />狀態');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', '<左 -或- 右><br />縱欄');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', '左/右-縱欄<br />排序');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', '單-縱欄<br />排序');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_INFO_EDIT_INTRO', '如有需要，請作有關修改');
define('TEXT_INFO_LAYOUT_BOX','選擇框盒： ');
define('TEXT_INFO_LAYOUT_BOX_NAME', '框盒名稱：');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','位置： （單-縱欄 在使用時，這設定會被忽略）');
define('TEXT_INFO_LAYOUT_BOX_STATUS', '左/右-縱欄 - 狀態： ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', '單-縱欄 - 狀態： ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','開啟 = 1 關閉 = 0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', '左/右 - 縱欄 - 排序：');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', '單-縱欄 - 排序：');
define('TEXT_INFO_INSERT_INTRO', '請輸入新框盒，和它的有關資料');
define('TEXT_INFO_DELETE_INTRO', '您確定要移除這個框盒嗎?');
define('TEXT_INFO_HEADING_NEW_BOX', '新框盒');
define('TEXT_INFO_HEADING_EDIT_BOX', '編輯框盒');
define('TEXT_INFO_HEADING_DELETE_BOX', '移除框盒');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','移除遺失的框盒，從模板表單中： ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','注意： 這不會移除檔案；而您可以重新加入那些框盒，在任何時間，只需把它加入到正確的檔案夾裡。<br /><br /><strong>移除框盒名稱： </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','重設全部框盒的排序，以配合預設的排序順序，為模板： ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','這不會移除任何框盒，而只是重設目前的框盒排序順序');
define('TEXT_INFO_BOX_DETAILS','框盒詳細資料： ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', '網站模板佈局');

define('TABLE_HEADING_LAYOUT_TITLE', '標題');
define('TABLE_HEADING_LAYOUT_VALUE', '數值');
define('TABLE_HEADING_ACTION', '行動');


define('TEXT_MODULE_DIRECTORY', '網站佈局檔案夾：');
define('TEXT_INFO_DATE_ADDED', '加入日期：');
define('TEXT_INFO_LAST_MODIFIED', '最後修改：');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', '佈局');
define('BOX_LAYOUT_COLUMNS', '縱欄控制器');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>不存在</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','完成由模板移除框盒： ');
define('SUCCESS_BOX_RESET','完成重設全部框盒設定，為模板： ');
define('SUCCESS_BOX_UPDATED','完成更新設定，為框盒： ');

define('TEXT_ON',' 使用 ');
define('TEXT_OFF',' 停止 ');
define('TEXT_LEFT','< 左 ');
define('TEXT_RIGHT','右 >');

?>