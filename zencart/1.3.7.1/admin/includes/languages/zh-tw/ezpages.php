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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ-簡易頁面');
define('TABLE_HEADING_PAGES', '頁面標題');
define('TABLE_HEADING_ACTION', '行動');
define('TABLE_HEADING_VSORT_ORDER', '側框盒排序');
define('TABLE_HEADING_HSORT_ORDER', '頁尾排序');
define('TEXT_PAGES_TITLE', '頁面標題：');
define('TEXT_PAGES_HTML_TEXT', 'HTML 內容：');
define('TABLE_HEADING_DATE_ADDED', '加入日期：');
define('TEXT_PAGES_STATUS_CHANGE', '狀態更改： %s');
define('TEXT_INFO_DELETE_INTRO', '您是否確定要移除這頁面？');
define('SUCCESS_PAGE_INSERTED', '完成： 已經插入了頁面。');
define('SUCCESS_PAGE_UPDATED', '完成： 已經更新了頁面。');
define('SUCCESS_PAGE_REMOVED', '完成： 已經移除了頁面。');
define('SUCCESS_PAGE_STATUS_UPDATED', '完成： 頁面的狀態已經被更新了。');
define('ERROR_PAGE_TITLE_REQUIRED', '錯誤： 需要頁面標題。');
define('ERROR_UNKNOWN_STATUS_FLAG', '錯誤： 不明的狀態旗標。');
define('ERROR_MULTIPLE_HTML_URL', '錯誤： 您定義了多重的設定，在每連結可能只許一個定義 ...<br />只可定義其中之一： HTML 內容 -或- 內部連結 URL -或- 外部連結 URL');

define('TABLE_HEADING_ID', '編號 ID');
define('TABLE_HEADING_STATUS_HEADER', '頁首：');
define('TABLE_HEADING_STATUS_SIDEBOX', '側框盒：');
define('TABLE_HEADING_STATUS_FOOTER', '頁尾：');
define('TABLE_HEADING_STATUS_TOC', 'TOC 內容目錄：');
define('TABLE_HEADING_CHAPTER', '章節：');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', '打開新視窗：');
define('TABLE_HEADING_PAGE_IS_SSL', '頁面是 SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 頁)');
define('IMAGE_NEW_PAGE', '新頁面');
define('TEXT_INFO_PAGE_IMAGE', '圖像');
define('TEXT_INFO_CURRENT_IMAGE', '當前圖像：');
define('TEXT_INFO_PAGES_ID', '編號 ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', '選擇一個頁面 ...');

define('TEXT_HEADER_SORT_ORDER', '排序：');
define('TEXT_SIDEBOX_SORT_ORDER', '排序：');
define('TEXT_FOOTER_SORT_ORDER', '排序：');
define('TEXT_TOC_SORT_ORDER', '排序：');
define('TEXT_CHAPTER', '之前 / 之後 章節：');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', '章節：&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', '頁首排序 - 使用在產生頁面，以單橫列方式，列出在頁首；排序值，應該大於零，才會啟動這頁面，列出在，橫列類型列表。');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '框盒排序 - 使用在頁面，以垂直方式，列出連結；掛序值，應該大於零，才會啟動這頁面，在垂直列表，否則，它會被視為 HTML 文本，有特別用途。');
define('TEXT_FOOTER_ORDER_EXPLAIN', '頁尾排序 - 使用在，產生頁面，以單橫列方式，列出在頁尾；排序值，應該大於零，才會啟動這頁面，列出在，橫列類型列表。');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (內容目錄) 排序 - 使用在，產生頁面，它被定制為 ，可以是一個單橫列 (頁首 / 頁尾，之類) 或垂直的，按不同需要而定；排序值應該大於零，才會啟動這頁面，列出在列表中。');
define('TEXT_CHAPTER_EXPLAIN', '章節是和 - TOC (內容目錄) 排序 - 同時使用，是為了顯示在 - 向前 / 向後。TOC 內的連結，會包括敏合這章節號碼的頁面，和會顯示在 - TOC  內容目錄 - 排序 - 中');

define('TEXT_ALT_URL', '內部連結 URL:');
define('TEXT_ALT_URL_EXPLAIN', '如有指定，頁面內容會被忽略，而且這 - 內部 - 替代 URL 會用來產生那連結<br />預覽的例子： index.php?main_page=reviews<br />我的帳戶的例子： index.php?main_page=account 和產生為 SSL');

define('TEXT_ALT_URL_EXTERNAL', '外部連結 URL:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', '如有指定，頁面內容會被忽略，而且這 - 外部 - 替代 URL 會用來產生那連結<br />外部連結例子： http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', '顯示排序： ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', '章節 / TOC 內容目錄');
define('TEXT_SORT_HEADER_TITLE', '頁首');
define('TEXT_SORT_SIDEBOX_TITLE', '側框盒');
define('TEXT_SORT_FOOTER_TITLE', '頁尾');
define('TEXT_SORT_PAGE_TITLE', '頁面標題');
define('TEXT_SORT_PAGE_ID_TITLE', '頁面編號 ID, 標題');

define('TEXT_PAGE_TITLE', '標題：');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>警告： 多重連結定義</strong>');
?>
