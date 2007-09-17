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
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '廣告統計資料');

define('TABLE_HEADING_SOURCE', '來源');
define('TABLE_HEADING_VIEWS', '瀏覽');
define('TABLE_HEADING_CLICKS', '點擊');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s 每天的統計資料在 %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s 每月的統計資料在 %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s 每年的統計資料');

define('STATISTICS_TYPE_DAILY', '每天');
define('STATISTICS_TYPE_MONTHLY', '每月');
define('STATISTICS_TYPE_YEARLY', '每年');

define('TITLE_TYPE', '類型：');
define('TITLE_YEAR', '年份：');
define('TITLE_MONTH', '月份：');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '錯誤： 圖像檔案夾不存在，請建立一個圖像檔案目錄，例子： <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '錯誤： 圖像檔案目錄不能被寫入，這位於： <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>