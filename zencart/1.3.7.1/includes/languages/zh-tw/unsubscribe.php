<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', '取消訂閱');
define('HEADING_TITLE', '取消訂閱我們的電子報');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />得知，您要停止訂閱我們的電子報，我們感到非常遺憾，如果您對對個人的隱私不放心，請參考我們的 <a href="\' . zen_href_link(FILENAME_PRIVACY,\'\',\'NONSSL\') . \'"><span class="pseudolink">隱私權保障聲明</span></a>.<br /><br />訂閱我們的電子報，可以經常得到，新產品消息，減價優惠，和本網站最新動態。<br /><br />如果您仍然不想收到您的電子報，請點按在下面的按鈕。 ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />得知，您要停止訂閱我們的電子報，我們感到非常遺憾，如果您對個人的隱私不放心，請參考我們的 <a href="\' . zen_href_link(FILENAME_PRIVACY,\'\',\'NONSSL\') . \'"><span class="pseudolink">隱私權保障聲明</span></a>.<br /><br />訂閱我們的電子報，可以經常得到，新產品消息，減價優惠，和本網站最新動態。<br /><br />如果您仍然不想收到您的電子報，請點按在下面的按鈕。您會被帶引到您的 帳戶-偏好  頁面，在那，您可以更改您的訂閱狀態。您可能會被提示先要登入。');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />您的 email 地址，列出在下面，已經按照您的指示，被移除於我們的電子赧訂閱名單。 <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />您指定的 email 地址，不存在於我們的電子報資料庫中，或已經，被移除於我們的電子赧訂閱名單。 <br /><br />');
?>