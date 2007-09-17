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
//  $Id: products_to_categories.php 2909 2006-01-29 21:29:35Z ajeh $
//

define('HEADING_TITLE','產品 - 轉為 - 複合分類 - 連結管理員 ...');
define('HEADING_TITLE2','分類 / 產品');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', '含有產品的分類，而它可供作連結 ...');

define('TABLE_HEADING_PRODUCTS_ID', '產品 ID');
define('TABLE_HEADING_PRODUCT', '產品名稱');
define('TABLE_HEADING_MODEL', '型號');
define('TABLE_HEADING_ACTION', '行動');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', '編輯產品到產品分類資料');
define('TEXT_PRODUCTS_ID', '產品 ID# ');
define('TEXT_PRODUCTS_NAME', '產品： ');
define('TEXT_PRODUCTS_MODEL', '型號： ');
define('TEXT_PRODUCTS_PRICE', '價格： ');
define('BUTTON_UPDATE_CATEGORY_LINKS', '更新分類連結');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', '選擇產品去連結');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', '設定產品去分類連結，這產品是： ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;已連結分類，目前的數量是： ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'這產品到分類連結器，是設計來快速連結目前的產品，到一個或多個分類。<br />您亦可以連結一個分類內的所有產品，使可以去到 另一個分類，或從另一個分類中，移除已經連結的產品。 (請在下面參考更多的附加使用說明)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'為了標示價格的用途，每個產品都需要有一個主要分類，不管這產品是否已經連結了多少個分類。這可以由主要分類的下拉式選單中設定。<br />
這產品目前已經按照上面的選取項，連結到一個或多個分類。如要新增一個或多個分類，只需在 -分類名稱 -旁邊的選取盒勾選。如要移除一個或多個分類已經連結的分類，只需在 -分類名稱 -旁邊的選取盒，把已經勾選的選項反勾選。<br />
當您已經為這產品，勾選好所要連結的分類，請按這 ' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', '總體-分類連結-更改 和 主要分類 ID -重置 ');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>警告：</strong> 您必須設定這 - 主分類編號 ID，在更改 - 連結分類 - 之前');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>複製-分類內的所有產品，成為另一個分類的連結產品  ...</strong><br />例子： 使用 8 和 22 表示連結所有在 -分類 8 的產品 -到 -分類 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '選取所有產品，在分類： ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '連結到分類： ');
define('BUTTON_COPY_CATEGORY_LINKED', '複製產品作為已經連結 ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', '警告： 產品已經被重置，而且已經不再是這 - 分類 - 的部份 ...');
define('WARNING_COPY_LINKED', '警告： ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '無效的分類到連結產品 -由： ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '無效的分類到連結產品 -到： ');
define('WARNING_NO_CATEGORIES_ID', '警告： 沒有選擇到分類 ... 沒有做更改');
define('SUCCESS_COPY_LINKED', '完成更新產品作為已經連結 ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '有效的分類到連結產品 -由： ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '有效的分類到連結產品 -到： ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>警告： 沒有進行更改，產品已經是連結的 ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>移除-所有產品在已選取分類內的，而它們已經連結到另一個-分類 ...</strong><br />例子： 使用 8 和 22 表示從 -分類 22 中，解除所有在 -分類 8 的全部產品的連結');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '選取所有產品，在分類： ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '移除由已連結到這分類的： ');
define('BUTTON_REMOVE_CATEGORY_LINKED', '移除產品當作已連結 ');

define('WARNING_REMOVE_LINKED', '警告： ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '無效的分類到移除連結產品 -由： ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '無效分類型到移除連結產品 -到： ');
define('SUCCESS_REMOVE_LINKED', '完成移除產品為已經連結 ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '無效分類到移除已經連結產品 -由： ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '無效分類到移除已經連結產品 -到： ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>警告： 沒有進行更改，產品已經是連結的 ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>警告： 主要分類 ID 出現衝突！！ </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>主要分類 ID 是： </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', '注意： 主要分類是用作標價用途，而產品分類影響到已連結的產品價格，例子： Sales 促銷<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', '為了解決這問題，您已經被引領到出現衝突的第一個產品。請重新指派有關的-主要分類 ID，給那您想要從它移除的分類，以使它不是-產品的-主要分類 ID，請再嘗試。當所有衝突被解決之後，您便可完成您要求的移除行動。');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' 衝突由 -分類： ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' 衝突到 -分類： ');
define('SUCCESS_MASTER_CATEGORIES_ID', '完成更新- 產品 ：到： 分類連結 ...');
define('WARNING_MASTER_CATEGORIES_ID', '警告： 沒有設定主要分類！');

define('TEXT_PRODUCTS_ID_INVALID', '&nbsp; &nbsp; ：警告： 無效的產品 ID 或者沒有選取產品');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '注意：&nbsp; 一個產品的 ID，並不須要設定為使用 - 連結所有產品 - 由一個分類到另一個分類。<br />不過：&nbsp; 設定一個有效的 - 產品 ID，可以顯示所有已經存在的 - 分類和它們的 ID 號碼。');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>重置-所有產品，在已選取-分類中的，使到那已選取的分類成為-新的主要分類 ID ...</strong><br />例子：重置-分類 22 代表設定所有產品在-分類 22 中的，使用-分類 22 為主要分類 ID');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '重置-主要分類 ID ，包括分類內所有產品，而它們在 -分類： ');
define('BUTTON_RESET_CATEGORY_MASTER', '重置主要分類 ID');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '警告： 選擇了無效的分類 ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '完成更新全部產品去新的主分類編號ID，為分類： ');

?>