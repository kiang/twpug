<?php

/**
 * Activity viewer
 *
 * @package Elgg
 * @subpackage Core
 * @author Curverider Ltd
 * @link http://elgg.org/
 * @正體中文 by http://myggyy.com
 */

$traditionalChinese = array(
/**
 * Sites
 */
	'item:site' => '網站',

/**
 * Sessions
 */

	'login' => "登入",
	'loginok' => "您已經登入.",
	'loginerror' => "無法登入系統. 可能是因為您尚未完成帳號認證作業、 您提供的資料不正確, 或者是登入的錯誤次數太多. 請確認您的資料後再試一次.",

	'logout' => "登出",
	'logoutok' => "您已經登出.",
	'logouterror' => "系統無法將您登出.請再試一次.",


	'loggedinrequired' => "在瀏覽該頁面前, 您必須先登入.",
	'adminrequired' => "要瀏覽該頁面, 您必須是系統管理者.",

/**
 * Errors
 */
	'exception:title' => "歡迎使用Elgg.",

	'InstallationException:CantCreateSite' => "無法建立預設的Elgg網站, 參數名稱為:%s, Url: %s",

	'actionundefined' => "您所要求的動作 (%s) 系統並未定義.",
	'actionloggedout' => "抱歉, 您無法在登出後執行這個動作.",

	'SecurityException:Codeblock' => "執行個人的程式碼區塊被拒絕存取",
	'DatabaseException:WrongCredentials' => "Elgg無法使用目前的參數連接到資料庫.",
	'DatabaseException:NoConnect' => "Elgg無法選取資料庫'%s', 請檢查該資料庫是否已經建立, 並且有權存取它.",
	'SecurityException:FunctionDenied' => "存取私人的功能 '%s' 被拒.",
	'DatabaseException:DBSetupIssues' => "出現一些問題: ",
	'DatabaseException:ScriptNotFound' => "Elgg無法找到所需的資料程代碼, 其位置%s.",

	'IOException:FailedToLoadGUID' => "載入新的 %s 失敗, GUID:%d",
	'InvalidParameterException:NonElggObject' => "傳遞一個非Elgg物件到一個Elgg物件的建構元!",
	'InvalidParameterException:UnrecognisedValue' => "傳遞到(物件)建構元的值無法辨識.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d 不是一個有效的 %s",

	'PluginException:MisconfiguredPlugin' => "%s 是一個未經適當組態的插件(plugin).",

	'InvalidParameterException:NonElggUser' => "傳遞一個非ElggUser到ElggUser物件的建構元!",

	'InvalidParameterException:NonElggSite' => "傳遞一個非ElggSite到ElggSite物件的建構元!",

	'InvalidParameterException:NonElggGroup' => "傳遞一個非ElggGroup到ElggGroup物件的建構元!",

	'IOException:UnableToSaveNew' => "無法儲存新的 %s",

	'InvalidParameterException:GUIDNotForExport' => "在匯出期間, GUID未被設定, 這種情況不應該發生.",
	'InvalidParameterException:NonArrayReturnValue' => "項目(Entity)序列化的功能函式傳遞一個非陣列的返回值參數",
	'ConfigurationException:NoCachePath' => "快取路徑被設定為nothing!",
	'IOException:NotDirectory' => "%s 不是一個有效的路徑.",

	'IOException:BaseEntitySaveFailed' => "無法儲存新物件的基底項目資訊!",
	'InvalidParameterException:UnexpectedODDClass' => "import() 傳遞一個預期外的ODD類別",
	'InvalidParameterException:EntityTypeNotSet' => "項目(Entity)的型態必須被設定.",

	'ClassException:ClassnameNotClass' => "%s 不是一個 %s.",
	'ClassNotFoundException:MissingClass' => "找不到類別 '%s' , 遺失插件?",
	'InstallationException:TypeNotSupported' => "不支援型態 %s. 這表示在安裝過程中出現錯誤, 很可能是不完全的升級導致.",

	'ImportException:ImportFailed' => "無法匯入元表(element) %d",
	'ImportException:ProblemSaving' => "在儲存 %s的時候發生問題",
	'ImportException:NoGUID' => "新項目建立了, 但缺少GUID, 這種情況不應該發生.",

	'ImportException:GUIDNotFound' => "找不到項目 '%d'.",
	'ImportException:ProblemUpdatingMeta' => "在更新'%d'的'%s'時發生問題.",

	'ExportException:NoSuchEntity' => "不存在該項目的GUID:%d",

	'ImportException:NoODDElements' => "在匯入的資料中找不到OpenDD項目, 匯入.",
	'ImportException:NotAllImported' => "部份項目未被匯入.",

	'InvalidParameterException:UnrecognisedFileMode' => "無法辨識的檔案模式 '%s'",
	'InvalidParameterException:MissingOwner' => "檔案 %s (%d) 欠缺擁有者!",
	'IOException:CouldNotMake' => "無法建立 %s",
	'IOException:MissingFileName' => "在開啟檔案之前, 您必須指定一個名稱.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "找不到Filestore, 或者類別未與檔案一起儲存!",
	'NotificationException:NoNotificationMethod' => "未指定通知的方法.",
	'NotificationException:NoHandlerFound' => "找不到 '%s'的Handler, 或者是無法被呼叫.",
	'NotificationException:ErrorNotifyingGuid' => "通知 %d時發生錯誤",
	'NotificationException:NoEmailAddress' => "無法找到電子郵件, GUID:%d",
	'NotificationException:MissingParameter' => "遺漏一個必要的參數, '%s'",

	'DatabaseException:WhereSetNonQuery' => "集合不包含WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "在選取的類型查詢中, 遺漏部份欄位",
	'DatabaseException:UnspecifiedQueryType' => "無法識別或未指定的查詢類型.",
	'DatabaseException:NoTablesSpecified' => "查詢未指定表格名稱.",
	'DatabaseException:NoACL' => "查詣未提供存取控制",

	'InvalidParameterException:NoEntityFound' => "找不到該項目, 不是不存在就是您無法存取它.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s 無法找到, 或者您無法存取它.",
	'InvalidParameterException:IdNotExistForGUID' => "抱歉, '%s' 不存在於 guid:%d",
	'InvalidParameterException:CanNotExportType' => "抱歉, 我不知道如何匯出 '%s'",
	'InvalidParameterException:NoDataFound' => "無法找到任何資料.",
	'InvalidParameterException:DoesNotBelong' => "不屬於該項目.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "不屬於或未參照到該項目.",
	'InvalidParameterException:MissingParameter' => "遺漏參數, 您必須將它提供給GUID.",

	'APIException:ApiResultUnknown' => "API的結果傳回未知的型態, 這種情況不應該發生.",
	'ConfigurationException:NoSiteID' => "未指定網站的ID.",
	'SecurityException:APIAccessDenied' => "抱歉, API存取功能已經被管理者設定為失效.",
	'SecurityException:NoAuthMethods' => "未找到授權的方法, 無法針對要求授權該API.",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "在呼叫expose_method()時, 方法或功能函式未設定",
	'InvalidParameterException:APIParametersArrayStructure' => "在呼叫顯露的方法 '%s'時, 參數陣列的結構不正確.",
	'InvalidParameterException:UnrecognisedMethod' => "無法辨識的方法呼叫'%s'",
	'APIException:MissingParameterInMethod' => "遺漏參數 %s , 方法為 %s",
	'APIException:ParameterNotArray' => "%s 看起來不是一個陣列.",
	'APIException:UnrecognisedTypeCast' => "無法辨識的cast型態 %s , 其變數為: '%s' ,其方法為 '%s'",
	'APIException:InvalidParameter' => "無效的參數 '%s' ,其方法為 '%s'.",
	'APIException:FunctionParseError' => "%s(%s) 解析錯誤.",
	'APIException:FunctionNoReturn' => "%s(%s) 未傳回任何值.",
	'SecurityException:AuthTokenExpired' => "授權的權仗(token)遺失, 無效或過期.",
	'CallException:InvalidCallMethod' => "%s 被呼叫時必須使用 '%s'",
	'APIException:MethodCallNotImplemented' => "呼叫的方法 '%s' 未被執行.",
	'APIException:FunctionDoesNotExist' => "方法 '%s' 的功能函式無法呼叫",
	'APIException:AlgorithmNotSupported' => "演算法 '%s' 不被支援或者被停用了.",
	'ConfigurationException:CacheDirNotSet' => "快取目錄 'cache_path' 未被設定.",
	'APIException:NotGetOrPost' => "要求的方法必須為GET或POST",
	'APIException:MissingAPIKey' => "遺失 X-Elgg-apikey HTTP 的標頭",
	'APIException:BadAPIKey' => "損壞的API鍵值",
	'APIException:MissingHmac' => "遺失 X-Elgg-hmac 的標頭",
	'APIException:MissingHmacAlgo' => "遺失 X-Elgg-hmac-algo 的標頭",
	'APIException:MissingTime' => "遺失 X-Elgg-time 的標頭",
	'APIException:MissingNonce' => "遺失 X-Elgg-nonce 的標頭",
	'APIException:TemporalDrift' => "X-Elgg-time的時間遠超過過去或未來. Epoch.",
	'APIException:NoQueryString' => "在查詢的字串中沒有資料",
	'APIException:MissingPOSTHash' => "遺失 X-Elgg-posthash 的標頭",
	'APIException:MissingPOSTAlgo' => "遺失 X-Elgg-posthash_algo 的標頭",
	'APIException:MissingContentType' => "遺失張貼資料的內容型態",
	'SecurityException:InvalidPostHash' => "張貼的資料hash不合法 - 預期為 %s 但實際為 got %s.",
	'SecurityException:DupePacket' => "Packet簽署已經存在.",
	'SecurityException:InvalidAPIKey' => "不合法或遺漏的API Key.",
	'NotImplementedException:CallMethodNotImplemented' => "呼叫的方法 '%s' 目前未被支援.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC 方法呼叫 call '%s' 未被執行.",
	'InvalidParameterException:UnexpectedReturnFormat' => "呼叫方法 '%s' 傳回不被預期的結果.",
	'CallException:NotRPCCall' => "呼叫看起來不是合法的 XML-RPC call",

	'PluginException:NoPluginName' => "無法找到該插件的名稱",

	'ConfigurationException:BadDatabaseVersion' => "您安裝的資料庫後端, 無法滿足執行Elgg的基本要求. 請參考說明文件.",
	'ConfigurationException:BadPHPVersion' => "要執行Elgg, 最起碼需要安裝PHP 5.2 以上的版本.",
	'configurationwarning:phpversion' => "Elgg 要求的PHP最低版本為5.2, 您可以將它安裝在5.1.6的環境, 但有效功能無法運作. 使用它將導致您的風險.",


	'InstallationException:DatarootNotWritable' => "您的資料目錄 %s 無法寫入.",
	'InstallationException:DatarootUnderPath' => "您的資料目錄 %s 必須在安裝的目錄之外.",
	'InstallationException:DatarootBlank' => "您未指定資料目錄.",

	'SecurityException:authenticationfailed' => "使用者無法被授權",

	'CronException:unknownperiod' => '%s 不是一個可理解的週期.',

	'SecurityException:deletedisablecurrentsite' => '您不能刪除或停用這個您正在瀏覽的網站!',

	'memcache:notinstalled' => 'PHP memcache 模組未安裝, 您必須安裝php5-memcache',
	'memcache:noservers' => '未定義memcache servers, 請指定 $CONFIG->memcache_servers 變數',
	'memcache:versiontoolow' => 'Memcache 至少需要版本 %s , 您目前執行的版本為 %s',
	'memcache:noaddserver' => '多伺服器的支援已經被停止, 您或許需要更新您的PECL memcache 程式庫',

	'deprecatedfunction' => '警告: 這段程使碼使用了不支援的函式 \'%s\' , 且不相容於目前版本的Elgg',

	'pageownerunavailable' => '警告: 本頁的擁有者 %d 無法存取!',
/**
 * API
 */
	'system.api.list' => "列出在本系統中所有可用的API呼叫.",
	'auth.gettoken' => "該API呼叫讓使用者登入, 傳回被授權的權仗(token), 可以被用來竊取使用者名稱與密碼.",

/**
 * User details
 */

	'name' => "顯示名稱",
	'email' => "電子郵件",
	'username' => "帳號",
	'password' => "密碼",
	'passwordagain' => "密碼 (再次輸入確認)",
	'admin_option' => "設定為管理員？",

/**
 * Access
 */

	'PRIVATE' => "私人的",
	'LOGGED_IN' => "登入會員",
	'PUBLIC' => "公開",
	'access:friends:label' => "朋友",
	'access' => "權限",

/**
 * Dashboard and widgets
 */

	'dashboard' => "我的首頁",
        'dashboard:configure' => "編輯頁面",
	'dashboard:nowidgets' => "首頁是您通往整個網站的橋樑. 請按一下'編輯頁面以便添加「小工具(widgets)」; 這樣一來, 您就可以在「我的首頁」中, 掌控整個社群的動態.",
	'widgets:add' => '新增區塊到個人首頁',
	'widgets:add:description' => "利用施放右方<b>Widget gallery</b>到以下三個widget區域的, 並指定顯示的位置, 選擇您要加入頁面的功能. 

要移除它, 請將它拖放回<b>Widget gallery</b>.",
	'widgets:position:fixed' => '(修正頁面中的位置)',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'layout:customise' => "自訂版面",
	'widgets:gallery' => "Widget gallery",
	'widgets:leftcolumn' => "左邊Widget",
	'widgets:fixed' => "固定寬度",
	'widgets:middlecolumn' => "中間Widget",
	'widgets:rightcolumn' => "右邊Widget",
	'widgets:profilebox' => "個人設定方塊",
	'widgets:panel:save:success' => "您的widgets儲存成功.",
	'widgets:panel:save:failure' => "系統在儲存 widgets 時發生了一個錯誤. 請再試一次.",
	'widgets:save:success' => "這個widget儲存成功.",
	'widgets:save:failure' => "系統無法儲存您的 widget. 請再試一次.",
	'widgets:handlernotfound' => '這個widget可能已經毀損或被系統管理者停用.',

/**
 * Groups
 */

	'group' => "群組",
	'item:group' => "群組",

/**
 * Users
 */

	'user' => "使用者",
	'item:user' => "使用者",

/**
 * Friends
 */

	'friends' => "朋友",
	'friends:yours' => "您的朋友",
	'friends:owned' => "%s的朋友",
	'friend:add' => "增加朋友",
	'friend:remove' => "移除朋友",

	'friends:add:successful' => "您已經成功地將%s增加為朋友.",
	'friends:add:failure' => "系統無法將%s增加為朋友. 請再試一次.",

	'friends:remove:successful' => "您已經成功將%s從您的朋友中移除.",
	'friends:remove:failure' => "系統無法將%s從您的朋友中移除. 請再試一次",

	'friends:none' => "該使用者尚未加入任何朋友.",
	'friends:none:you' => "您加未將任何人加為朋友! 按照您的興趣搜尋, 以便尋找可的朋友.",

	'friends:none:found' => "未發現任何朋友.",

	'friends:of:none' => "尚無任何人將該使用者添加為朋友.",
	'friends:of:none:you' => "尚無任何人將您添加為朋友. 開始增加內容並填寫您的個人資料, 以便讓其他人找到您!",

	'friends:of:owned' => "將%s添加為朋友的人",

	'friends:num_display' => "顯示的朋友數",
	'friends:icon_size' => "圖標大小",
	'friends:tiny' => "極小",
	'friends:small' => "小",
	'friends:of' => "為...的朋友",
	'friends:collections' => "朋友集",
	'friends:collections:add' => "新的朋友集",
	'friends:addfriends' => "添加朋友",
	'friends:collectionname' => "朋友集的名稱",
	'friends:collectionfriends' => "朋友集內的朋友",
	'friends:collectionedit' => "編輯這個朋友集",
	'friends:nocollections' => "您尚未擁有任何朋友集.",
	'friends:collectiondeleted' => "您的朋友集已經被刪除.",
	'friends:collectiondeletefailed' => "系統無法刪除朋友集. 可能是您沒有權限, 或者發生了其他問題.",
	'friends:collectionadded' => "您的朋友集已經成功地建立了",
	'friends:nocollectionname' => "在建立朋友集之前, 您需要給定一個名稱.",
	'friends:collections:members' => "朋友集內的成員",
	'friends:collections:edit' => "編輯朋友集",

     'friends:river:created' => "%s 新增朋友widget.",
     'friends:river:updated' => "%s 更新他們朋友的widget.",
     'friends:river:delete' => "%s 移除他們朋友的widget.",
     'friends:river:add' => "%s 現在是...的朋友了",

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
/**
 * links
 */
	'link:view' =>"檢視連結",

/**
 * Feeds
 */
	'feed:rss' => "訂閱",
	'feed:odd' => 'Syndicate OpenDD',

/**
 * River
 */
	'river' => 'River',
	'river:relationship:friend' => "現在是...的朋友",
	'river:noaccess' => "您沒有檢視該項目的權限.",
	'river:posted:generic' => "由%s張貼",
	'riveritem:single:user' => "個別使用者",
	'riveritem:plural:user' => "部份使用者",

/**
 * Plugins
 */
	'plugins:settings:save:ok' => "針對 %s 插件的設定已經被成功的儲存了.",
	'plugins:settings:save:fail' => "在儲存 %s 插件的設定時發生問題.",
	'plugins:usersettings:save:ok' => "使用者對 %s 插件的設定已經被成功地儲存了.",
	'plugins:usersettings:save:fail' => "儲存 %s 插件的使用者設定出現問題.",
	'admin:plugins:label:version' => "版本",
	'item:object:plugin' => "插件的組態設定",

/**
 * Notifications
 */
	'notifications:usersettings' => "通知的設定",
	'notifications:methods' => "請設定您允許的方法.",

	'notifications:usersettings:save:ok' => "您的通知設定已經成功地儲存了.",
	'notifications:usersettings:save:fail' => "在儲存您的通知設定時出現問題.",

	'user.notification.get' => "對指定的使用者傳回通知的設定.",
	'user.notification.set' => "對指定的使用者設定通知的方式.",
/**
 * Search
 */

	'search' => "搜尋",
	'searchtitle' => "搜尋: %s",
	'users:searchtitle' => "搜尋使用者: %s",
	'groups:searchtitle' => "搜尋群組: %s",
	'advancedsearchtitle' => "%s 找到符合的結果 %s",
	'notfound' => "未找到符合的結果.",
	'next' => "下一步",
	'previous' => "上一步",

	'viewtype:change' => "變更顯示的型態",
	'viewtype:list' => "清單檢視",
	'viewtype:gallery' => "相簿檢視",

	'tag:search:startblurb' => "具有標籤'%s'的符合項目:",

	'user:search:startblurb' => "符合的使用者 '%s':",
	'user:search:finishblurb' => "要檢視更多的結果, 請單擊這裡.",

	'group:search:startblurb' => "符合的群組 '%s':",
	'group:search:finishblurb' => "要檢視更多的結果, 請單擊這裡.",
	'search:go' => "執行",
	'userpicker:only_friends' => "只顯示朋友",

/**
 * Account
 */

	'account' => "帳號",
	'settings' => "設定",
        'tools' => "工具",
        'tools:yours' => "您的工具",

	'register' => "註冊",
	'registerok' => "您已經成功的註冊了 %s.",
	'registerbad' => "您的註冊未成功. 可能的原因為使用者名稱已存在, 密碼不相符, 或是您的使用者/密碼過於簡短.",
	'registerdisabled' => "註冊的功能被系統管理者停用",

	'firstadminlogininstructions' => '您的新Elgg網站已經被成功的安裝, 管理者帳號也建立完成. 現在您可以開始透過啟用不同的插件來設定您網站的組態.',

	'registration:notemail' => '您的郵件位址不是合法的電子郵件位址.',
	'registration:userexists' => '使用者名稱已經存在',
	'registration:usernametooshort' => '使用者名稱至少要大於4個字元.',
	'registration:passwordtooshort' => '密碼至少要大於6個字元.',
	'registration:dupeemail' => '該電子郵件已經被註冊過.',
	'registration:invalidchars' => '抱歉, 您的使用者名稱包含不合法字元.',
	'registration:emailnotvalid' => '抱歉, 您輸入的電子郵箱位址不合法.',
	'registration:passwordnotvalid' => '抱歉, 您輸的密碼不合法.',
	'registration:usernamenotvalid' => '抱歉, 您輸入的使用者名稱不合法.',

	'adduser' => "增加使用者",
	'adduser:ok' => "您已經成功地添加一位使用者.",
	'adduser:bad' => "新的使用者無法建立.",

	'item:object:reported_content' => "報告的內容",

	'user:set:name' => "設定帳號名稱",
	'user:name:label' => "您的名稱",
	'user:name:success' => "已成功地變更您的名稱.",
	'user:name:fail' => "無法變更您的名稱.",

	'user:set:password' => "帳號密碼",
	'user:password:label' => "新密碼",
	'user:password2:label' => "再次輸入密碼",
	'user:password:success' => "密碼已經修改",
	'user:password:fail' => "無法修改密碼",
	'user:password:fail:notsame' => "兩次輸入的密碼不符",
	'user:password:fail:tooshort' => "密碼太短了！",
	'user:resetpassword:unknown_user' => '無效的使用者.',
	'user:resetpassword:reset_password_confirm' => '重設您的密碼, 系統會將新密碼傳送到您的電子郵件信箱.',

	'user:set:language' => "語言設定",
	'user:language:label' => "您的語言",
	'user:language:success' => "您的語言設定已經更新.",
	'user:language:fail' => "您的語言設定無法儲存.",

	'user:username:notfound' => '找不到帳號 %s',

	'user:password:lost' => '忘記密碼',
	'user:password:resetreq:success' => '成功要求新的密碼, 電子郵件已經寄送',
	'user:password:resetreq:fail' => '無法要求新的密碼.',

	'user:password:text' => '要產生新的密碼, 請在底下輸入您的使用者名稱. 我們將透過電子郵件傳送驗證的位址給您, 點擊郵件的連結就會將新的密碼寄送給您.',

	'user:persistent' => '記住我',
/**
 * Administration
 */

	'admin:configuration:success' => "您的設定已經被儲存.",
	'admin:configuration:fail' => "您的設定無法被儲存.",

	'admin' => "管理",
	'admin:description' => "管理面板讓您輕鬆地控制所有的系統功能, 從使用者管理到插件的行為. 請選取底下的選項開始進行各項工作.",

	'admin:user' => "使用者管理",
	'admin:user:description' => "管理面板讓您控制使用者的設定. 選取底下的選項以便開始進行工作.",
	'admin:user:adduser:label' => "單擊這裡以便添加使用者...",
	'admin:user:opt:linktext' => "使用者組態管理...",
	'admin:user:opt:description' => "組態使用者與帳號的資訊. ",

	'admin:site' => "網站管理",
	'admin:site:description' => "管理面板讓您控制網站的整體設定. 選取底下的選項以便開始進行工作.",
	'admin:site:opt:linktext' => "組態網站...",
	'admin:site:opt:description' => "組態網站的技術與非技術性設定. ",
	'admin:site:access:warning' => "變更存取的設定只會影響未來建立內容的權限.",

	'admin:plugins' => "工具管理",
	'admin:plugins:description' => "管理面板讓您控制與設定安裝在您網站的工具組態.",
	'admin:plugins:opt:linktext' => "組態工具...",
	'admin:plugins:opt:description' => "組態安裝在網站上的工具. ",
	'admin:plugins:label:author' => "作者",
	'admin:plugins:label:copyright' => "著作權",
	'admin:plugins:label:licence' => "授權",
	'admin:plugins:label:website' => "連結",
	'admin:plugins:label:moreinfo' => '更多資訊',
	'admin:plugins:label:version' => '版本',
	'admin:plugins:warning:elggversionunknown' => '警告: 這個插件未指定相容的Elgg版本.',
	'admin:plugins:warning:elggtoolow' => '警告: 這個插件需求一個較新版本的Elgg!',
	'admin:plugins:reorder:yes' => "插件 %s 重新排序成功.",
	'admin:plugins:reorder:no' => "插件 %s 無法重新排序.",
	'admin:plugins:disable:yes' => "插件 %s 成功地停用.",
	'admin:plugins:disable:no' => "插件 %s 無法被停用.",
	'admin:plugins:enable:yes' => "插件 %s 成功地啟用.",
	'admin:plugins:enable:no' => "插件 %s 無法被啟用.",

	'admin:statistics' => "統計",
	'admin:statistics:description' => "網站統計資料的概觀. 如果需要更多詳細的統計資料, 可以另外尋找專業的管理工具.",
	'admin:statistics:opt:description' => "檢視您網站上有關使用者與物件的統計資訊.",
	'admin:statistics:opt:linktext' => "檢視統計...",
	'admin:statistics:label:basic' => "基本網站統計",
	'admin:statistics:label:numentities' => "網站上的項目",
	'admin:statistics:label:numusers' => "使用者數",
	'admin:statistics:label:numonline' => "線上使用者數",
	'admin:statistics:label:onlineusers' => "現在上線的使用者",
	'admin:statistics:label:version' => "Elgg版本",
	'admin:statistics:label:version:release' => "使用的版本",
	'admin:statistics:label:version:version' => "版本",

	'admin:user:label:search' => "尋找使用者:",
	'admin:user:label:seachbutton' => "搜尋",

	'admin:user:ban:no' => "無法設為黑名單",
	'admin:user:ban:yes' => "將該使用者設為黑名單.",
	'admin:user:unban:no' => "無法取消該使用者的黑名單",
	'admin:user:unban:yes' => "使用者取消黑名單.",
	'admin:user:delete:no' => "無法刪除使用者",
	'admin:user:delete:yes' => "使用者被刪除",

	'admin:user:resetpassword:yes' => "密碼已經重設, 已通知使用者.",
	'admin:user:resetpassword:no' => "密碼無法重設.",

	'admin:user:makeadmin:yes' => "使用者已經變更為管理者.",
	'admin:user:makeadmin:no' => "我們無法將該使用者變更為管理者.",

	'admin:user:removeadmin:yes' => "使用者不再是管理者.",
	'admin:user:removeadmin:no' => "我們從法將管理者的權限從該使用者移除.",


/**
 * User settings
 */
	'usersettings:description' => "使用者設定面板允許您控制所有的個人設定, 從使用者管理到插件的行為. 請選取以下的選項以便開始工作.",

	'usersettings:statistics' => "您的統計資訊",
	'usersettings:statistics:opt:description' => "檢視有關使用者與物件的統計資訊.",
	'usersettings:statistics:opt:linktext' => "帳號統計",

	'usersettings:user' => "您的設定",
	'usersettings:user:opt:description' => "這邊讓您控制使用者設定.",
	'usersettings:user:opt:linktext' => "修改您的設定",

	'usersettings:plugins' => "功能",
	'usersettings:plugins:opt:description' => "組態啟用工具的設定(如果有的話).",
	'usersettings:plugins:opt:linktext' => "設定您的功能",

	'usersettings:plugins:description' => "這個面板讓您控制與組態您系統中安裝工具的個人設定.",
	'usersettings:statistics:label:numentities' => "您的項目",

	'usersettings:statistics:yourdetails' => "您的資訊",
	'usersettings:statistics:label:name' => "全名",
	'usersettings:statistics:label:email' => "電子郵件",
	'usersettings:statistics:label:membersince' => "加入日期",
	'usersettings:statistics:label:lastlogin' => "上次登入",


/**
 * Generic action words
 */

	'save' => "儲存",
	'publish' => "發表",
	'cancel' => "取消",
	'saving' => "儲存中 ...",
	'update' => "更新",
	'edit' => "編輯",
	'delete' => "刪除",
	'accept' => "接受",
	'load' => "讀取",
	'upload' => "上傳",
	'ban' => "黑名單",
	'unban' => "取消黑名單",
	'enable' => "啟用",
	'disable' => "停用",
	'request' => "請求",
	'complete' => "完成",
	'open' => '開啟',
	'close' => '關閉',
	'reply' => "回覆",
	'more' => '更多',
	'comments' => '評論',
	'import' => '匯入',
	'export' => '匯出',
	'untitled' => '未命名',
	'help' => '幫助',
	'send' => '傳送',
	'post' => '張貼',
	'submit' => '送出',
	'site' => '網站',

	'up' => '往上',
	'down' => '往下',
	'top' => '頁首',
	'bottom' => '頁底',

	'invite' => "邀請",

	'resetpassword' => "重設密碼",
	'makeadmin' => "設為管理員",
	'removeadmin' => "移除管理員",

	'option:yes' => "是",
	'option:no' => "否",

	'unknown' => '未知',

	'active' => '啟用',
	'total' => '總計',

	'learnmore' => "點擊這邊以便得到更多的訊息.",

	'content' => "內容",
	'content:latest' => '最新的活動',
	'content:latest:blurb' => '或者, 您也可以點擊這裡檢視網站最新的內容.',

	'link:text' => '檢視連結',

	'enableall' => '啟用所有',
	'disableall' => '停用所有',

/**
 * Generic questions
 */

	'question:areyousure' => '您確定嗎?',

/**
 * Generic data words
 */

	'title' => "標題",
	'description' => "描述",
	'tags' => "標籤",
	'spotlight' => "焦點",
	'all' => "所有",

	'by' => 'by',

	'annotations' => "註解",
	'relationships' => "關係",
	'metadata' => "Metadata",

/**
 * Input / output strings
 */

	'deleteconfirm' => "您確定要刪除這個項目嗎?",
	'fileexists' => "檔案已經被上載. 要取代它, 請選擇底下的項目:",

/**
 * User add
 */

	'useradd:subject' => '使用者帳號已經建立',
	'useradd:body' => '
%s,

在 %s 註冊了一個帳號，請透過以下的網址登入：

	%s

您的登入資訊如下：

	名稱: %s
	密碼: %s

在登入後，我們強烈建議您立刻修改密碼。',

/**
 * System messages
 **/

	'systemmessages:dismiss' => "點選這裡隱藏",


/**
 * Import / export
 */
	'importsuccess' => "成功匯入資料",
	'importfail' => "OpenDD匯入資料失敗.",

/**
 * Time
 */

	'friendlytime:justnow' => "剛剛",
	'friendlytime:minutes' => "%s 分鐘前",
	'friendlytime:minutes:singular' => "1 分鐘前",
	'friendlytime:hours' => "%s 小時前",
	'friendlytime:hours:singular' => "1 小時前",
	'friendlytime:days' => "%s 天前",
	'friendlytime:days:singular' => "1 天前",
	'friendlytime:date_format' => 'j F Y @ g:ia',

	'date:month:01' => '一月 %s',
	'date:month:02' => '二月 %s',
	'date:month:03' => '三月 %s',
	'date:month:04' => '四月 %s',
	'date:month:05' => '五月 %s',
	'date:month:06' => '六月 %s',
	'date:month:07' => '七月 %s',
	'date:month:08' => '八月 %s',
	'date:month:09' => '九月 %s',
	'date:month:10' => '十月 %s',
	'date:month:11' => '十一月 %s',
	'date:month:12' => '十二月 %s',


/**
 * Installation and system settings
 */

	'installation:error:htaccess' => "Elgg需要一個在安裝時存放在根目錄, 名為.htaccess的檔案. 我們試著建立它, 但Elgg沒有權限寫入目錄.

要建立它並不困難, 只要將底下文字方塊的內容複製到文字編輯器, 並將它儲存為 .htaccess即可

",
	'installation:error:settings' => "Elgg無法找到它的設定檔. 大多數Elgg的設定會自行處理, 但我們需要您提供資料庫的詳細資料. 要這麼做:

1. 在您安裝Elgg的機器上, 將engine/settings.example.php更名為settings.php.

2. 使用文字編輯器開啟它, 並輸入MySQ資料庫的詳細資料. 如果您不清楚這些, 請向您的系統管理員或技術支援人員尋求協助.

相對地, 您也可以在底下輸入您資料庫的設定...",

	'installation:error:configuration' => "一旦您更正任何的組態問題, 請按下重新載入再試一次.",

	'installation' => "安裝",
	'installation:success' => "Elgg的資料庫已成功安裝.",
	'installation:configuration:success' => "您初始的組態設定已經被儲存. 現在請註冊您的初始使用者; 他會成為您系統第一位管理者.",

	'installation:settings' => "系統設定",
	'installation:settings:description' => "現在Elgg資料庫已經成功的安裝, 您需要再輸入一些資訊, 以便讓您的網站完全運作. 我們已經盡最大努力試著猜想要怎麼做, 但是<b>您應該詳細檢查這些項目.</b>",

	'installation:settings:dbwizard:prompt' => "輸入底下的資料庫設定並點擊儲存:",
	'installation:settings:dbwizard:label:user' => "Database使用者",
	'installation:settings:dbwizard:label:pass' => "Database密碼",
	'installation:settings:dbwizard:label:dbname' => "Elgg資料庫",
	'installation:settings:dbwizard:label:host' => "Database伺服器名稱(通常為'localhost')",
	'installation:settings:dbwizard:label:prefix' => "Database表格的前置字元(通常為'elgg')",

	'installation:settings:dbwizard:savefail' => "我們無法儲存新的settings.php. 請使用文字編輯器將以下檔案儲存為engine/settings.php.",

	'installation:sitename' => "您的網站名稱(如 \"我們社交網站\"):",
	'installation:sitedescription' => "簡短的描述(選擇性的)",
	'installation:wwwroot' => "這個網站的URL, 由斜線所接續:",
	'installation:path' => "您網站在硬碟中的根目錄完整路徑, 由斜線所接續:",
	'installation:dataroot' => "要上傳檔目錄的完整路徑會被儲存, 由斜線所接續:",
	'installation:dataroot:warning' => "您必須手動建立該目錄. 該目錄必須不同於Elgg安裝的目錄.",
	'installation:sitepermissions' => "預設的存取權限:",
	'installation:language' => "網站的預設語言:",
	'installation:debug' => "偵錯模式提供了額外的資訊, 可以用來診斷錯誤, 然而它會降低系統的運行速度, 所以只有在出現問題時才要使用:",
	'installation:debug:label' => "開啟偵錯模式",
	'installation:httpslogin' => "啟用這部份以便透過HTTPS登入. 要正常運作, 您的伺服器必須啟用https.",
	'installation:httpslogin:label' => "啟用HTTPS登入",
	'installation:usage' => "這個選項讓Elgg傳送匿名統計資料到Curverider.",
	'installation:usage:label' => "傳送匿名的使用統計",
	'installation:view' => "輸入您網站預設的view, 或許留下空白以便使用預設的view (如果不確定的話, 請使用default):",

	'installation:siteemail' => "網站的電子郵件位址(當傳送系統郵件時使用)",

	'installation:disableapi' => "RESTful API是一種高彈性且具擴充性的介紹, 它可以讓應用程式遠端使用部份Elgg的功能.",
	'installation:disableapi:label' => "啟用RESTful API",

	'installation:allow_user_default_access:description' => "如果是核取狀態, 個別的使用者可以設定他們自己的預設存取層級, 並覆寫系統預設的存取層級.",
	'installation:allow_user_default_access:label' => "允許使用者自定的預設存取層級",

	'installation:simplecache:description' => "使用簡單快取可以藉由快取靜態內容(包含CSS與JavaScript的檔案), 增強系統的效能. 一般來說, 您會需要開啟它.",
	'installation:simplecache:label' => "使用簡單快取(推薦)",

	'installation:viewpathcache:description' => "使用view filepath cache可以降低插件的載入時間, 因為可以將檢視的位置快取.",
	'installation:viewpathcache:label' => "使用view filepath cache (推薦)",

	'upgrading' => '升級中',
	'upgrade:db' => '您的資料庫已經升級.',
	'upgrade:core' => '您的elgg版本已經升級',

/**
 * Welcome
 */

	'welcome' => "歡迎",
	'welcome:user' => '歡迎 %s',
	'welcome_message' => "歡迎使用Elgg安裝程式.",

/**
 * Emails
 */
	'email:settings' => "Email 設定",
	'email:address:label' => "您的電子郵件住址",

	'email:save:success' => "新的電子郵件住址已經儲存, 需要驗證.",
	'email:save:fail' => "您的電子郵件住址無法被儲存.",

	'friend:newfriend:subject' => "%s 把你加入好友",
	'friend:newfriend:body' => "%s 剛剛把你加入好友

透過下面網址可以檢視他的資訊：

	%s

請不要直接回覆這封信。",

	'email:resetpassword:subject' => "密碼重設",
	'email:resetpassword:body' => "Hi %s,

您的密碼已經重設為：  %s",

	'email:resetreq:subject' => "密碼請求",
	'email:resetreq:body' => "Hi %s,

有人(來自 IP %s) 請求重設密碼。

如果這是您發出的請求，可以點選下面連結繼續，如果不是就請忽略這封信：

%s
",


/**
 * user default access
 */

'default_access:settings' => "您預設的取存層次",
'default_access:label' => "預設的存取",
'user:default_access:success' => "您的新預設存取層次已經儲存.",
'user:default_access:failure' => "您新的預設存取層次無法儲存.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"輸入的資料遺漏",

/**
 * Comments
 */

	'comments:count' => "%s 個評論",

	'riveraction:annotation:generic_comment' => '%s 個評論於 %s',

	'generic_comments:add' => "新增評論",
	'generic_comments:text' => "評論",
	'generic_comment:posted' => "您的評論已經成功地張貼.",
	'generic_comment:deleted' => "您的評論已經成功地刪除.",
	'generic_comment:blank' => "抱歉; 在我們儲存它之前, 您需要實際在您的評論中加入一些東西.",
	'generic_comment:notfound' => "抱歉; 我們無法找到設定的項目.",
	'generic_comment:notdeleted' => "抱歉; 我們無法刪除這個評論.",
	'generic_comment:failure' => "在添加您的評論時, 發生無法預期的錯誤. 請再試一次.",

	'generic_comment:email:subject' => '您有新的留言',
	'generic_comment:email:body' => "您的 \"%s\" 在 %s 有新留言：


%s


回覆留言或檢視原來項目請點選：

	%s

檢視 %s 的資訊請點選：

	%s

請不要直接回覆這封信。",

/**
 * Entities
 */
	'entity:default:strapline' => '%s 由 %s 所建立',
	'entity:default:missingsupport:popup' => '這個項目無法正確的顯示. 這也許是因為它需要某個插件提供的支持, 需該插件並未安裝.',

	'entity:delete:success' => '項目 %s 已經被刪除',
	'entity:delete:fail' => '項目 %s 無法被刪除',


/**
 * Action gatekeeper
 */
	'actiongatekeeper:missingfields' => '表單遺失 __token或 __ts欄目',
	'actiongatekeeper:tokeninvalid' => "我們遭遇一個錯誤(權仗不符合). 可能的原因為您使用的頁面已經過期. 請再試一次.",
	'actiongatekeeper:timeerror' => '您使用的網頁已經過期. 請更新並再試一次.',
	'actiongatekeeper:pluginprevents' => '一個擴充功能已經禁止傳送該表單.',

/**
 * Word blacklists
 */
	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Tags',

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zh_tw" => "正體中文",
	"zu" => "Zulu",
);

add_translation("zh_tw",$traditionalChinese);
