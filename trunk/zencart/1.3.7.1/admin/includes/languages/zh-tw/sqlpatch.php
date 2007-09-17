<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: sqlpatch.php 3093 2006-03-02 19:50:40Z drbyte $
//
  define('HEADING_TITLE','SQL 查詢執行器');
  define('HEADING_WARNING','在跑執行碼之前請先將資料庫備份！');
  define('HEADING_WARNING2','如果您安裝的是第三者的投稿、貢獻程式或執行碼，請注意您須要承擔自己的風險。<br />Zen Cart&trade; 完全不保證第三者的投稿、貢獻程式或執行碼，也不保證它們可否安全運作、或使用、和有沒有安全問題。請先進行測試，然後才應用在您的生產上的資料庫！');
  define('TEXT_QUERY_RESULTS','查詢結果:');
  define('TEXT_ENTER_QUERY_STRING','輸入將執行的 <br />查詢碼：&nbsp; &nbsp;<br /><br />請確定<br />在最後面輸入 ;');
  define('TEXT_QUERY_FILENAME','上傳檔案:');
  define('ERROR_NOTHING_TO_DO','錯誤： 沒有任何操作 - 沒有提供查詢或查詢檔案.');
  define('TEXT_CLOSE_WINDOW', '[ 關閉視窗 ]');
  define('SQLPATCH_HELP_TEXT','這 SQLPATCH 工具可以讓您安裝系統補丁，它籍由直接的把 SQL 碼貼進這裡的文字區 '.
                              '輸入欄，或上傳已提供的腳本 -script (.SQL) 檔案。<br />' . 
                              '當準備腳本 -scripts 供給這個工具使用時， 請不要包括資料表的前綴詞，因為這個工具會' .
                              '自動幫您為啟用中的資料庫插入所需前綴詞，這是基於在商店內的設定，而它是： ' .
                              'admin/includes/configure.php file (DB_PREFIX definition).<br /><br />' .
                              '輸入的指令或上傳的檔案，只能有以下陳述式，及必須以大寫表示：'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (just a single table)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<li>SELECT </li></ul>' . 
'<h2>進階方法</h2>以下的方法可以在有需要時，使用來發出更加複雜的陳述句法： <br />
要共同執行一些編碼的區塊，使它們被 MySQL 視作為一個單獨的命令，您需要那  "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" 數值的設定，這樣那語法剖析程式，便會把 X 數目的命令，作為單一的命令處理。<br />
如果您執行這個檔案經 phpMyAdmin 或者其他兼容的程式，那 "#NEXT..." 命令會被忽略，而腳本 -script 可以正常處理。<br />
<br /><strong>注意： </strong>SELECT.... FROM... 和 LEFT JOIN 陳述句需要那 "FROM" 或者 "LEFT JOIN" 存在它自己的一句之內，以便語法剖析程式的腳本 -script 可加入那表單的前綴詞。<br /><br />
<em><strong>範例：</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','不能夠創建資料表 %s 因為它已經存在。');
  define('REASON_TABLE_DOESNT_EXIST','不能夠移除資料表 %s 因為它不存在。');
  define('REASON_TABLE_NOT_FOUND','不能夠執行，因為資料表 %s 不存在。');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','不能夠插入 configuration_key "%s" 因為它已經存在。');
  define('REASON_COLUMN_ALREADY_EXISTS','不能夠 ADD column %s 因為它已經存在。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','不能夠 DROP column %s 因為它已經存在。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','不能夠 CHANGE column %s 因為它不存在。');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','不能夠插入 prod-type-layout configuration_key "%s" 因為它已經存在');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','不能夠移除 index %s 在資料表 %s 因為它不存在。');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','不能夠移除 primary key 在資料表 %s 因為它不存在。');
  define('REASON_INDEX_ALREADY_EXISTS','不能夠加入 index %s 到資料表 %s 因為它已經存在。');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','不能夠加入 primary key 到資料表 %s 因為一個 primary key 已經存在。');
  define('REASON_NO_PRIVILEGES','使用者 '.DB_SERVER_USERNAME.'@'.DB_SERVER.' 沒有得到 %s 的權限去資料庫 '.DB_DATABASE.'.');

?>