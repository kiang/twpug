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
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', '促銷減價 - 製造器');
define('SUBHEADING_TITLE', '促銷減價 - 製造器，使用技巧:');
define('INFO_TEXT', '<ul>
                      <li>
                        永遠在扣除和價格範圍，使用 \'.\' 來當小數點.
                      </li>
                      <li>
                        使用和您在 - 新增 / 編輯 - 產品時相同的匯率，來輸入您的價格.
                      </li>
                      <li>
                        在扣除的欄位內，您可以輸入一個數額或百方比來扣除。
                        或一個取代的價格，(例子： 扣除 $5.00 由全部價格，扣除 10% 由
                        全部價格，或改變全部價格到 $25.00)
                      </li>
                      <li>
                        輸入一個價格範圍，可以縮小受影響的產品範圍，（例子： 
                        產品由 $50.00 到 $150.00）
                      </li>
                      <li>
                        您必須選擇要採取的行動，如果一個產品是一個特價 <i>和</i> 是屬於這促銷：
						<ul>
                          <li>
                            <strong>忽略特價 - 套用到產品價格和代替特價</strong><br>
							這促銷減價，會套用到產品的正常價格。
                            （例子： 正常價格 $10.00, 特價是 $9.50, 促銷情況是 10%.
							這產品的，最終價格將會顯示 $9.00 在促銷上，而那特價會被忽略。）
                          </li>
                          <li>
                            <strong>忽略促銷情況 - 不使用促銷，當有特價存在時</strong><br>
                            這促銷減價將不會應用到特價，而特價會顯示為正如
                            在這裡沒有促銷被定義。（例子： 正常價格 $10.00, 特價是 $9.50,
                            促銷情況是 10%. 這產品的最終價格將會顯示為 $9.50 在促銷上。
                            這促情況會被忽略。）
                          </li>
                          <li>
                            <strong>應用促銷減價到特價 - 或者應用到價格</strong><br>
                            這促銷減價會被應用到特價，一個複合的價格會顯示。
                            （例子： 正常價格 $10.00, 特價是 $9.50, 促銷情況是 10%. 這產品的
                            最終價格將會顯示 $8.55. 一個額外的 10% 由那特價扣除。）
                          </li>
                        </ul>
                      </li>
                      <li>
                        將開始日期留空，將會馬上使用促銷.
                      </li>
                      <li>
                        將截止日期留空，如果您不想促銷有期限。.</li>
                      <li>
                        自動檢查一個分類包括子分類。
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ 關閉視窗 ]');
?>