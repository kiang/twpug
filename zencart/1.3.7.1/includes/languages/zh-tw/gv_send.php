<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3058 2006-02-21 09:40:07Z birdbrain $
 */

define('HEADING_TITLE', '送出 ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', '送出 ' . TEXT_GV_NAME . ' 確認');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' 送出');
define('NAVBAR_TITLE', '送出 ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', '訊息由 ' . STORE_NAME);
define('HEADING_TEXT','請輸入您希望送出那 ' . TEXT_GV_NAME . ' 的名稱，email 地址和款額。如要更多資料請參考我們的 <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', '接收者名稱：');
define('ENTRY_EMAIL', '接收者 Email:');
define('ENTRY_MESSAGE', '您的訊息：');
define('ENTRY_AMOUNT', '送出款額：');
define('ERROR_ENTRY_TO_NAME_CHECK', '我們得不到按收者的名稱。請在下面輸入。 ');
define('ERROR_ENTRY_AMOUNT_CHECK', '這 ' . TEXT_GV_NAME . ' 款額看來不正確。請再嘗試。');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '這 email 地址是否正確？請再嘗試。');
define('MAIN_MESSAGE', '您正送出一項 ' . TEXT_GV_NAME . ' 價值 %s 給 %s,  他的 email 地址是 %s. 如果 這些詳情不正確，您可以編輯您的訊息，只需點按那 <strong>編輯</strong> 按鈕。<br /><br />您在發送中的訊息是：<br /><br />');
define('SECONDARY_MESSAGE', 'Dear %s,<br /><br />' . 'You have been sent a ' . TEXT_GV_NAME . ' worth %s by %s');
define('PERSONAL_MESSAGE', '%s 發言道：');
define('TEXT_SUCCESS', '恭喜，您的 ' . TEXT_GV_NAME . ' 已經完成發送');
define('TEXT_SEND_ANOTHER', '您想發出另外一個 ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  '禮品券數額');

define('EMAIL_GV_TEXT_SUBJECT', '由 %s 送出的一份禮物');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', '恭喜，您收到壹項 ' . TEXT_GV_NAME . ' 數額是 %s');
define('EMAIL_GV_FROM', '這項 ' . TEXT_GV_NAME . ' 是由 %s 送給您的。');
define('EMAIL_GV_MESSAGE', '附函寫道： ');
define('EMAIL_GV_SEND_TO', '您好， %s');
define('EMAIL_GV_REDEEM', '要兌換這項 ' . TEXT_GV_NAME . ' ，請點按下面的超連結。而且請同時保存好這 ' . TEXT_GV_REDEEM . ' 的資料，它是： %s ' . "\n\n" . '以備有需要時查照。');
define('EMAIL_GV_LINK', '要兌換請點按訢這裡 ');
define('EMAIL_GV_VISIT', ' 或探訪 ');
define('EMAIL_GV_ENTER', ' 和輸入這 ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', '如果您在兌換這 ' . TEXT_GV_NAME . ' 時有問題，請使用上面列出的自動連結, ' . "\n" .
                                '閣下亦可在本店完成選購後，於結算的過程中使用和輸入這 ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' 。');
define('EMAIL_GV_SHOP_FOOTER', '');
?>