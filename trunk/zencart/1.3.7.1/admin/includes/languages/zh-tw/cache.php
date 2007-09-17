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
//  $Id: cache.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '快取記憶控制');

define('TABLE_HEADING_CACHE', '快取記憶區塊');
define('TABLE_HEADING_DATE_CREATED', '建立日期');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_FILE_DOES_NOT_EXIST', '檔案不存在');
define('TEXT_CACHE_DIRECTORY', '快取記憶檔案目錄：');

define('ERROR_CACHE_DIRECTORY_DOES_NOT_EXIST', '錯誤： 快取檔案目錄不存在. 請設定這個設定，在 - 配置設定 -> Cache,  快取記憶。');
define('ERROR_CACHE_DIRECTORY_NOT_WRITEABLE', '錯誤： 快取記憶檔案目錄不能被寫入。');
?>