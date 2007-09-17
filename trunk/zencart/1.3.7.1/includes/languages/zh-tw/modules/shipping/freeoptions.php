<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', '免運費選項');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
免費選項，是當已經有其他貨運模組顯示出的時候，用來顯示出一個　免收運費　的選擇。
它可以基於：　經常顯示、訂單總額、訂單重量，或者　訂單項目數量。
這個　免費選項　模組，在有　免費送貨　顯示的時候，是不會顯示出來的。<br /><br />
設定總額成為 >= 0.00 和 <= 0.00 將會啟動這個模組，在所有貨運模組中顯示出來，除了在 　免費的運費 - 免費送貨。<br /><br />
注意：　留空所有總額、重量和項目數額，將會停止這個模組。<br /><br />
注意：　免收運費選項　是不會顯示的，如果　免費送貨　的使用是基於 0 重量　為　免費送貨。
請看：　免費送貨
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', '免費送貨');

?>