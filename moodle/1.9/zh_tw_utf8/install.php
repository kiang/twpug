<?PHP // $Id$ 
      // install.php - created with Moodle 1.9 + (Build: 20080409) (2007101509)


$string['admindirerror'] = '指定的管理目錄不正確';
$string['admindirname'] = '管理目錄';
$string['admindirsetting'] = '有些web主機用/admin作為特定的URL，讓您做一些控制或其他事情。不幸地，這會跟標準的Moodle管理網頁位址相衝突。您可以在這兒修正此錯誤:在您的安裝過程中，重新命名管理者目錄，然後將新的目錄名稱放在這兒。例如:<br/> <br /><b>moodleadmin</b><br /> <br />這將可修正Moodle的admin連結。';
$string['admindirsettinghead'] = '設定管理目錄 ...';
$string['admindirsettingsub'] = '少部份主機使用 /admin 作為管理介面或是其他用途的特殊網址，這會與 Moodle 管理介面的標準位置；您可以修改管理介面資料夾的名稱，然後將新名稱輸入這兒。例如 <br /> <br /><b>moodleadmin</b><br /> <br /> 這會修正 Moodle 管理介面的連結。';
$string['caution'] = '注意';
$string['chooselanguage'] = '選擇一種語言';
$string['chooselanguagehead'] = '選擇一種語言';
$string['chooselanguagesub'] = '請選擇在安裝過程中使用的語言。稍後您可以根據需要重新選擇用於網站和使用者的語言。';
$string['compatibilitysettings'] = '檢查您的PHP設定...';
$string['compatibilitysettingshead'] = '檢查您的PHP設定...';
$string['compatibilitysettingssub'] = '您的伺服器必須通過所有測試才能夠正確執行 Moodle。';
$string['configfilenotwritten'] = '這個安裝程式無法自動將您所選擇的設定建立成config.php檔，這可能是因為Moodle目錄無法寫入。您可以手動複製下面的程式碼到Moodle的根目錄下，建立名為config.php的檔案中。';
$string['configfilewritten'] = 'config.php已經成功建立';
$string['configurationcomplete'] = '設定完成';
$string['configurationcompletehead'] = '設定完成';
$string['configurationcompletesub'] = 'Moodle會嘗試將設定資料儲存在您的Moodle根目錄中。';
$string['database'] = '資料庫';
$string['databasecreationsettings'] = '現在您必須配置資料庫，它將存放大多數Moodle的資料。這資料庫將會由Moodle4Windows安裝程式自動建立，並設定如下： <b>類型:</b> 由安裝程式固定設為\"mysql\"<br /> <b>主機:</b> 固定設為\"localhost\"<br /> <b>名稱:</b> 資料庫名稱，如，moodle<br /> <b>用戶:</b> 固定設為 \"root\" <br /> <b>密碼:</b> 您資料庫的密碼<br /> <b>表格接首字首:</b> 在所有的表格名稱前加上自定的接首字';
$string['databasecreationsettingshead'] = '現在您需要設定大部分 Moodle 資料儲存的資料庫，透過下面指定的設定，安裝程式可以自動建立資料庫。';
$string['databasecreationsettingssub'] = '<b>類型：</b> 安裝程式固定使用 \"mysql\" <br /> <b>主機：</b> 安裝程式固定使用 \"localhost\"<br /> <b>名稱：</b> 資料庫名稱，例如 moodle<br /> <b>帳號：</b> 安裝程式固定使用 \"root\"<br /> <b>密碼：</b> 您的資料庫密碼<br /> <b>資料表前置字元：</b> 選擇性為所有資料表名稱加入前置字元';
$string['databasesettings'] = '現在您必須設定資料庫，大部分的Moodle資料會儲存在這兒。這個資料庫必須是已建立，而且建立了一個可存取的使用者帳號及密碼。<br/>
<br /> <br />
<b>類型:</b> mysql 或 postgres7<br />
<b>主機:</b> 例如 localhost 或 db.isp.com<br />
<b>名稱:</b> 資料庫名稱, 例如 moodle<br />
<b>使用者:</b> 該資料庫使用者名稱<br />
<b>密碼:</b>該使用者的密碼<br />
<b>表格前置字元:</b> 所有表格名稱使用選擇性前置位元';
$string['databasesettingshead'] = '現在您需要設定資料庫，Moodle的大部分資料都會儲存在其中。您應該先建立好這個資料庫並設定好用於存取該資料庫的帳號與密碼。';
$string['databasesettingssub'] = '<b>資料庫系統:</b> mysql 或 postgres7<br />
<b>主機:</b> 例如 localhost 或 db.isp.com<br />
<b>資料庫名稱:</b> 資料庫名稱，例如 moodle<br />
<b>帳號:</b> 您的資料庫連線帳號 <br />
<b>密碼:</b> 您的資料庫連線密碼 <br />
<b>資料表的前置字元:</b> 針對所有資料表名稱，選擇性的前置字元';
$string['databasesettingssub_mssql'] = '<b>類型：</b> SQL*Server (非UTF-8) <b><font color=\"red\">實驗的！(不能用在產品中)</font></b><br /> <b>主機：</b> 例如，localhost 或者 db.isp.com<br /> <b>名稱：</b> 資料庫名稱：例如 moodle<br /> <b>帳號：</b> 您的資料庫帳號<br /> <b>密碼：</b> 您的資料庫密碼<br /> <b>資料表的前置字元：</b> 在所有的表格名稱前加上前置字元 (強制的)';
$string['databasesettingssub_mssql_n'] = '<b>類型：</b> SQL*Server (UTF-8 可以)<br /> <b>主機：</b> 例如，localhost或者db.isp.com<br /> <b>名稱：</b>資料庫名稱，例如moodle<br /> <b>帳號：</b> 您的資料庫帳號<br /> <b>密碼：</b> 您的資料庫密碼<br /> <b>表格前置字元：</b> 在所有的表格名稱前加上字首 (強制的)';
$string['databasesettingssub_mysql'] = '<b>類型：</b> MySQL<br/> 
<b>主機：</b> 例如，localhost或者db.dn.edu.tw<br/>
<b>名稱：</b> 資料庫名稱，例如moodle<br/>
<b>帳號：</b> 您的資料庫帳號<br/> 
<b>密碼：</b> 您的資料庫密碼<br/> 
<b>表格前置字元：</b>在所有的表格名稱前加上字首（可自選的）';
$string['databasesettingssub_mysqli'] = '<b>類型：</b> 改良的MySQL<br/> 
<b>主機：</b> 例如，localhost或者db.dn.edu.tw<br/>
<b>名稱：</b> 資料庫名稱，例如moodle<br/>
<b>帳號：</b> 您的資料庫帳號<br/> 
<b>密碼：</b> 您的資料庫密碼<br/> 
<b>表格前置字元：</b>在所有的表格名稱前加上字首（可自選的）';
$string['databasesettingssub_oci8po'] = '<b>類型:</b> Oracle<br /> <b>主機:</b> 不需要，必須留空<br /> <b>名稱:</b> 給出tnsnames.ora連接的名稱<br /> <b>帳號:</b> 您的資料庫帳號<br /> <b>密碼:</b> 您的資料庫密碼<br /> <b>表格字首:</b> 在所有的表格名稱前加上字首(強制的, 最大2cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>類型:</b> SQL*Server (超過 ODBC) <b><font color=\"red\">實驗的! (不可用在產品中)</font></b><br /> <b>主機:</b> 給出ODBC控制面板中DSN的名字<br /> <b>名稱：</b> 資料庫名稱，例如moodle<br /> <b>帳號:</b> 您的資料庫帳號<br /> <b>密碼:</b> 您的資料庫密碼<br /> <b>表格字首:</b> 在所有的表格名稱前加上字首(強制的)';
$string['databasesettingssub_postgres7'] = '<b>類型:</b> PostgreSQL<br /> <b>主機:</b> 例如，localhost或者db.isp.com<br /> <b>名稱：</b> 資料庫名稱，例如moodle<br /> <b>帳號:</b> 您的資料庫帳號<br /> <b>密碼:</b> 您的資料庫密碼<br /> <b>表格字首:</b> 在所有的表格名稱前加上字首(強制的)';
$string['databasesettingswillbecreated'] = '<b>註:</b>如果資料庫不存在，安裝程式將會自動建立';
$string['dataroot'] = '資料目錄';
$string['datarooterror'] = '您所指定的\'資料目錄\'找不到或無法建立。請更正路徑，或者手動建立該目錄。';
$string['dbconnectionerror'] = '無法連到您指定的資料庫,請查檢您的資料庫設定';
$string['dbcreationerror'] = '建立資料庫錯誤,無法以您給的資料庫名稱建立資料表';
$string['dbhost'] = '主機位址';
$string['dbpass'] = '密碼';
$string['dbprefix'] = '資料表名稱的前置字元';
$string['dbtype'] = '類型';
$string['dbwrongencoding'] = '您選擇的資料庫使用了字元集{$a}，我們推薦您使用一個Unicode (UTF-8)字元集的資料庫。當然，您可以選擇“跳過資料庫字元集檢查”來跳過這個環節，但您將來可能會遇到問題。';
$string['dbwronghostserver'] = '您必須遵循上面所說明的“主機”規則。';
$string['dbwrongnlslang'] = '在您的web伺服器中的NLS_LANG環境變數必須用 AL32UTF8 字元集。請查閱有關如何正確配置OCI8的PHP文件。';
$string['dbwrongprefix'] = '您必須遵循上面所說明的“資料表前置字元”規則。';
$string['directorysettings'] = '<p>請確認Moodle安裝的位置。</p>

<p><b>網站位址:</b>
指定將存取Moodle的完整網站位址 
如果您的網站可以透過多個網址進入，請選擇您的學生們最自然會使用的那個。網址不要包含結尾的斜線。</p>

<p><b>Moodle目錄:</b>
指定此安裝的完整目錄。請確認大小寫是正確的。
</p>

<p><b>資料目錄:</b>
您必須給Moodle存放上傳檔案的空間。這個目錄必須是可以給網站伺服器使用者(通常是\'nobody\'或\'apache\')讀取和\"寫入\"的權限。但請注意，這個目錄不應該透過網站瀏覽就可以讀取。';
$string['directorysettingshead'] = '請確認 Moodle 安裝的目錄位置';
$string['directorysettingssub'] = '<b>網站位址：</b> 指定存取 Moodle 的完整網址，如果您的網站透過多個網址存取，請選擇其中最常用的一個。網址的末尾不要有斜線。<br /> <br /> <b>Moodle 目錄：</b> 指定安裝的完整路徑，請確認英文大小寫是否正確。 <br /> <br /> <b>資料目錄：</b> 您需要設定一個 Moodle 可以儲存上傳資料的位置，這個位置要能夠讓網頁伺服器(通常是 \'nobody\' 或 \'apache\')讀取與寫入，但是建議不要放在能夠直接透過網址存取的位置。';
$string['dirroot'] = 'Moodle目錄';
$string['dirrooterror'] = '此\'Moodle目錄\'設定似乎不正確-我們無法在這兒找到Moodle安裝程式。下列數值已經重設。';
$string['download'] = '下載';
$string['downloadlanguagebutton'] = '下載 \"{$a}\" 語言包';
$string['downloadlanguagehead'] = '下載語言包';
$string['downloadlanguagenotneeded'] = '您可以用預設的語言包 \"{$a}\" 繼續安裝過程。';
$string['downloadlanguagesub'] = '您現在可以選擇下載一個語言包然後用指定的語言繼續安裝過程。<br /><br />如果您無法下載語言包，安裝過程會繼續以英文繼續進行。（只要安裝完成，您還是可以下載、安裝其他的語言包）';
$string['environmenthead'] = '檢查您的環境中...';
$string['environmentsub'] = '正在檢查系統的相關元件來確認是否符合安裝需求';
$string['fail'] = '失敗';
$string['fileuploads'] = '檔案上傳';
$string['fileuploadserror'] = '這應該開啟';
$string['fileuploadshelp'] = '<p>伺服器似乎取消檔案上傳功能.</p>
<p>Moodle還是可以安裝，但是沒有這個功能，您就無法上傳課程資料，或者新使用者的個人圖檔。
<p>若要啟動檔案上傳功能，您或您的系統管理者必須要編輯您系統上的主要php.ini檔案，將
<b>file_uploads</b> 設定值改為 \'1\'。</p>';
$string['gdversion'] = 'GD版本';
$string['gdversionerror'] = 'GD程式庫應該存在,以便處理並建立影像';
$string['gdversionhelp'] = '<p>您的伺服器上似乎沒有安裝GD.</p>

<p>GD 是一個函式庫，PHP需要它來讓Moodle處理圖片
(例如使用者個人圖示) 及建立新圖片(例如登入記錄圖表). Moodle沒有GD仍然可以運作 - 只是這些功能您無法使用。</p>

<p>在Unix系統下，要在PHP中加入GD，在編譯PHP時，需加上 --with-gd 參數。</p>

<p>在Windows系統下，通常您可以編輯php.ini，將libgd.dll 前的註解符號拿掉。</p>';
$string['globalsquotes'] = '不安全的全域變數處理';
$string['globalsquoteserror'] = '修正您的 PHP 設定值: 取消 register_globals 和/或 啟用 magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>不建議您同時取消了Magic Quotes GPC 又啟動 Register Globals.</p>

<p>在您的php.ini中，建議的設定值是
<b>magic_quotes_gpc = On</b> 和 <b>register_globals = Off</b></p>

<p>如果您沒又權限存取php.ini檔，您可以在您的Moodle 目錄中建立名稱為 .htaccess 的檔案，並且放入下列幾行內容：
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = '安裝';
$string['langdownloaderror'] = '很不幸地，語言“{$a}”並未安裝。安裝過程將以英文繼續。';
$string['langdownloadok'] = '語言“{$a}”已經成功安裝了。安裝過程將會以此語言繼續。';
$string['magicquotesruntime'] = 'Magic Quotes 執行時間';
$string['magicquotesruntimeerror'] = '這應該關閉';
$string['magicquotesruntimehelp'] = '<p>Magic quotes 應該關閉執行時間，讓Moodle的功能能正常。</p>

<p>一般情況下，它預設是關閉的... 請看php.ini檔案中的<b>magic_quotes_runtime</b> 設定</p>

<p>如果您不存取php.ini,您也可以在您Moodle目錄下的.htaccess檔案中的加入下面這一列:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = '記憶體限制';
$string['memorylimiterror'] = 'PHP 執行之記憶體設定過低,您可能稍後會遇到一些問題';
$string['memorylimithelp'] = '<p>PHP記憶體上限目前設定為$a。</p>
<p>稍後它可能會造成Moodle記憶體的問題，尤其是您啟動了很多的模組及大量的使用者後。
<p>建議您儘可能將PHP的上限設得高一點，比如16M。
以下有幾種方式您可以試試:
<ol>
<li>如果可以的話，用<i>--enable-memory-limit</i>重新編譯PHP。讓Moodle自己設定記憶體上限.
<li>如果您要使用php.ini檔, 您可以改變<b>memory_limit</b>這個設定值，例如到16M。如果您無法使用這個檔，您可以請您的管理者幫您做
<li>在一些PHP伺服器上，您可以在Moodle目錄下，建立.htaccess檔，包含這行:<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>然而，在一些伺服器上，這將造成<b>所有的</b> PHP 網頁無法運作(當您看這些網頁時，您就會看到錯誤) 因此，您就必須將 .htaccess 檔案移除。
</ol>';
$string['mssql'] = 'SQL*Server(mssql)';
$string['mssql_n'] = '支援UTF-8的SQL*Server(mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP的 MSSQL擴充套件並未適當安裝，因此無法與SQL*Server連通。請檢查您的php.ini檔案或重新編譯PHP。';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP用MySQL延伸指令作無法正常架設，此延伸指令讓PHP可以跟MySQL做溝通。請檢查php.ini檔或者重新編譯PHP。';
$string['mysqli'] = '改良的MySQL(mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP的MySQLi延伸套件沒有適當設置。為了可以和MySQL連線，請檢查您的php.ini檔案或重新編譯PHP。針對PHP4，MySQLi延伸套件不能使用。';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP的OCI8擴充套件並未適當安裝，因此無法與Oracle連通。請檢查您的php.ini檔案或重新編譯PHP。';
$string['odbc_mssql'] = '經由ODBC的SQL*Server (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP的ODBC擴充套件並未適當安裝，因此無法與SQL*Server連通。請檢查您的php.ini檔案或重新編譯PHP。';
$string['pass'] = '測試通過';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP的PGSQL擴充套件並未適當安裝，因此無法與PostgreSQL連通。請檢查您的php.ini檔案或重新編譯PHP。';
$string['phpversion'] = 'PHP版本';
$string['phpversionerror'] = 'PHP版本至少必須在4.1.0以上';
$string['phpversionhelp'] = '<p>Moodle 需要至少4.1.0.的PHP版本 </p>
<p>您目前執行的是$a 版</p>
<p>您必須更新您的 PHP 或在有更新版本的主機進行安裝!</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = '安全模式';
$string['safemodeerror'] = 'Moodle 在安全模式啟動時可能會發生錯誤';
$string['safemodehelp'] = '<p>Moodle在安全模式中，可能有許多的問題，不只是無法建新新檔案。

<p>安全模式通常只有偏激的公眾Web主機才會啟動，所以您也許必須尋找新的網站主機公司來放置您的Moodle網站。</p>

<p>如果您喜歡，您可以試著繼續安裝，但稍後就可期待許多問題出現了.</p>';
$string['sessionautostart'] = 'Session自動啟動';
$string['sessionautostarterror'] = '這應該關閉';
$string['sessionautostarthelp'] = '<p>Moodle 需要有session功能的支援,沒有它無法正確動作 .</p>
<p>Sessions 可以在 php.ini 檔案中啟動,請尋找其中 session.auto_start 參數.</p>';
$string['skipdbencodingtest'] = '略過資料庫編碼測試';
$string['welcomep10'] = 'a->installername ($a->installerversion)';
$string['welcomep20'] = '這個頁面是提醒您已經成功安裝與啟動 <strong>$a->packname $a->packversion</strong> ，恭喜！';
$string['welcomep30'] = '<strong>{$a->installername}</strong>包含了可以建立<strong>Moodle</strong>執行環境的應用程序：';
$string['welcomep40'] = '這個軟體還包含了<strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>。';
$string['welcomep50'] = '使用本軟體個包中包含的應用程序時應遵循它們各自的授權協議。整個<strong>{$a->installername}</strong> 軟體都是<a href=\"http://www.opensource.org/docs/definition_plain.html\">開放原始碼</a> ，並且遵循 <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> 授權協議發佈。';
$string['welcomep60'] = '接下來的頁面將會透過一些簡單的步驟引導您安裝 <strong>Moodle</strong> 到電腦中，您可以接受預設值，或是針對自己的需求調整修改。';
$string['welcomep70'] = '點選 \"下一步\" 按鈕，繼續設定<strong>Moodle</strong>.';
$string['wwwroot'] = '網站位址';
$string['wwwrooterror'] = '指定網路位址不存在-這個Moodle 系統並不在您指定的地方';

?>
