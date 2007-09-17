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
//  $Id: admin.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '管理員設定');

define('TABLE_HEADING_ADMINS_NAME', '管理員名稱');
define('TABLE_HEADING_ADMINS_ID', '編號');
define('TABLE_HEADING_ADMINS_EMAIL', '電子信箱');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_HEADING_NEW_ADMIN', '新增');
define('TEXT_HEADING_EDIT_ADMIN', '編輯');
define('TEXT_HEADING_DELETE_ADMIN', '移除');
define('TEXT_HEADING_RESET_PASSWORD', '重設密碼');

define('TEXT_ADMINS', '管理員：');
define('TEXT_ADMINS_EMAIL', '電子信箱：');

define('TEXT_NEW_INTRO', '請在下面，輸入新管理員的資料。');
define('TEXT_EDIT_INTRO', '如有需要，請作有關修改');

define('TEXT_ADMINS_NAME', '管理員名稱:');
define('TEXT_ADMINS_PASSWORD', '新密碼:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', '確認新密碼:');

define('TEXT_DELETE_INTRO', '您確定要移除這個管理員嗎？');
define('TEXT_DELETE_IMAGE', '要移除這管理員的圖樣嗎?');


define('ENTRY_PASSWORD_NEW_ERROR', '您的新密碼必須不少於 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 個字元.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '確認新密碼必須和新密碼相同.');

define('TEXT_ADMINS_LEVEL', '這個登入的管理等級：');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS', '如果設定這管理員為 - 等級 1 ，會允許這個登入可以操縱 - 管理示範，當它是啟動的時候。 &nbsp; 只有 - 等級 1 ，才能夠更改管理登入和密碼，當 - 管理示範，是啟動的時候。');
define('TEXT_ADMIN_DEMO', '這 - 管理示範 - 功能，更改這管理，由一全巧能管理，變為一個 - 部份-功能，較少破壞性的管理，這是為了您，有時需要設立示範版本。 &nbsp; 只有管理登入是 - 等級 1 ，才可以更改這設定，和他們有操縱權，去容許使用完整效能的管理，即使 - 示範管理 - 是啟動的。<br /><br />請確定，在啟動這設定之前，您已經設立一個示範登入，而且被設定為 - 等級 0 ');
define('TEXT_DEMO_STATUS', '目前的 - 管理示範 - 設定為：');
define('TEXT_DEMO_OFF', '關閉');
define('TEXT_DEMO_ON', '開啟');
?>