<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: geo_zones.php 4736 2006-10-13 07:11:44Z drbyte $
 */

define('HEADING_TITLE', '地區定義 - 稅金、付款和運費');

define('TABLE_HEADING_COUNTRY', '國家');
define('TABLE_HEADING_COUNTRY_ZONE', '地區');
define('TABLE_HEADING_TAX_ZONES', '稅金地區');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', '地區說明');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '行動');
//define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_TAX_AND_ZONES', '：稅金與區域定義了');
define('TEXT_LEGEND_ONLY_ZONES', '：區域定義了，但是稅金還沒');
define('TEXT_LEGEND_NOT_CONF', '：尚未設定');

define('TEXT_INFO_HEADING_NEW_ZONE', '新地區');
define('TEXT_INFO_NEW_ZONE_INTRO', '請輸入新地區的資料');

define('TEXT_INFO_HEADING_EDIT_ZONE', '編輯地區');
define('TEXT_INFO_EDIT_ZONE_INTRO', '如有需要，請作有關修改');

define('TEXT_INFO_HEADING_DELETE_ZONE', '刪除地區');
define('TEXT_INFO_DELETE_ZONE_INTRO', '確定要刪除這個地區嗎?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', '新子地區');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO', '請輸入新子地區的資料');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', '編輯子地區');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', '如有需要，請作有關修改');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', '刪除子地區');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO', '確定要刪除這個子地區嗎?');

define('TEXT_INFO_DATE_ADDED', '加入日期:');
define('TEXT_INFO_LAST_MODIFIED', '最後修改:');
define('TEXT_INFO_ZONE_NAME', '地區名稱:');
define('TEXT_INFO_NUMBER_ZONES', '地區數:');
define('TEXT_INFO_ZONE_DESCRIPTION', '簡介:');
define('TEXT_INFO_COUNTRY', '國家:');
define('TEXT_INFO_COUNTRY_ZONE', '地區:');
define('TYPE_BELOW', '全部地區');
define('PLEASE_SELECT', '全部地區');
define('TEXT_ALL_COUNTRIES', '全部國家');

define('TEXT_INFO_NUMBER_TAX_RATES', '稅率：');
define('ERROR_TAX_RATE_EXISTS', '警告：這個地區已設定稅率，如果要移除這個地區請先刪除稅率');
?>