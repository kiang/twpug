<?PHP // $Id$ 
      // auth.php - created with Moodle 1.9 + (Build: 20080409) (2007101509)


$string['CASform'] = '認證選擇';
$string['accesCAS'] = 'CAS 用戶';
$string['accesNOCAS'] = '其他用戶';
$string['actauthhdr'] = '目前的認證外掛程式';
$string['alternatelogin'] = '如果您在此輸入一個URL，它將被用於本站的登入頁。這個頁面上應當有一個表單，表單的action一項應設定為<strong>“{$a}” </strong>，並且返回的欄位中應當有<strong>username</strong>和< strong>password</strong>。<br />小心不要輸入錯誤的URL，否則您可能會被鎖在網站之外。<br />如果要使用預設登入頁面，此設定請留空白。';
$string['alternateloginurl'] = '換用其他登錄網址';
$string['auth_cas_auth_user_create'] = '在外部建立用戶';
$string['auth_cas_baseuri'] = '伺服器的URI<br />例如，如果CAS伺服器位於 host.domain.tw/CAS/ 那麼<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = '在沒有更改密碼前，您無法繼續使用。可是沒有修改密碼的頁面可以使用，請聯絡您的Moodle管理人員';
$string['auth_cas_cantconnect'] = 'CAS模組的LDAP部份無法連線到伺服器：{$a}';
$string['auth_cas_casversion'] = '版本';
$string['auth_cas_changepasswordurl'] = '修改密碼的網址';
$string['auth_cas_create_user'] = '如果您希望將CAS認證用戶加入到Moodle資料庫中，請開啟。否則只有Moodle資料庫中的用戶可以登入。';
$string['auth_cas_create_user_key'] = '建立用戶';
$string['auth_cas_enabled'] = '如果您希望使用CAS認證，請開啟此選項。';
$string['auth_cas_hostname'] = 'CAS伺服器主機名稱<br />例如: host.domain.tw';
$string['auth_cas_hostname_key'] = '伺服器的名稱';
$string['auth_cas_invalidcaslogin'] = '對不起，您登入失敗——無法對您進行認證。';
$string['auth_cas_language'] = '選擇的語言';
$string['auth_cas_language_key'] = '語言';
$string['auth_cas_logincas'] = '安全連線存取';
$string['auth_cas_logoutcas'] = '如果您希望從 Moodle 離線時同時登出 CAS ，請啟用這個項目';
$string['auth_cas_logoutcas_key'] = '登出 CAS';
$string['auth_cas_multiauth'] = '如果您希望使用多重認證（ CAS 加上其他認證），請將此選項設為\"是\"。';
$string['auth_cas_multiauth_key'] = 'Multi-authentication';
$string['auth_cas_port'] = 'CAS伺服器的連接埠';
$string['auth_cas_port_key'] = '連接埠';
$string['auth_cas_proxycas'] = '如果您使用 CAS 於代理模式，請啟用這個項目';
$string['auth_cas_proxycas_key'] = 'Proxy 模式';
$string['auth_cas_server_settings'] = 'CAS伺服器的配置';
$string['auth_cas_text'] = '安全連線';
$string['auth_cas_use_cas'] = '使用CAS';
$string['auth_cas_version'] = 'CAS版本';
$string['auth_casdescription'] = '這個方法使用CAS伺服器(中央認證服務)來認證Single Sing On(SSO)環境中的用戶。您也可以使用LDAP認證。如果給定的用戶名稱和密碼在CAS中有效，Moodle會在資料庫中建立新用戶登錄資料，並從LDAP 中取出必要屬性資料。在後續的登入中，只檢查用戶名稱和密碼。';
$string['auth_casnotinstalled'] = '無法使用 CAS 認證，PHP 的 LDAP 模組未安裝。';
$string['auth_castitle'] = '使用CAS伺服器(SSO)';
$string['auth_changepasswordhelp'] = '變更密碼說明';
$string['auth_changepasswordhelp_expl'] = '顯示密碼遺失說明給遺失$a 密碼的用戶。它將顯示 <strong>變更密碼網址</strong>或Moodle內部的密碼變更。';
$string['auth_changepasswordurl'] = '變更密碼網址';
$string['auth_changepasswordurl_expl'] = '指定網址給遺失密碼$a的用戶。設定<strong>使用標準變更密碼網頁</strong> 為 <strong>否</strong>.';
$string['auth_common_settings'] = '一般設定';
$string['auth_data_mapping'] = '資料對應';
$string['auth_dbcantconnect'] = '無法連線到指定的認證資料庫...';
$string['auth_dbchangepasswordurl_key'] = '變更密碼的網址';
$string['auth_dbdebugauthdb'] = 'ADOdb 偵錯';
$string['auth_dbdebugauthdbhelp'] = 'ADOdb 連線到外部資料庫偵錯，在登入過程出現空白頁面時使用，不適合用在正式運作的網站。';
$string['auth_dbdeleteuser'] = '刪除用戶 $a[0] 編號 $a[1]';
$string['auth_dbdeleteusererror'] = '刪除用戶 $a 時發生錯誤';
$string['auth_dbdescription'] = '該方法使用一個外部資料庫來檢驗用戶名和密碼是否有效。如果是一個新帳號，該帳號其他欄位的資訊將一起複製到本系統中。';
$string['auth_dbextencoding'] = '外部資料庫編碼';
$string['auth_dbextencodinghelp'] = '外部資料庫使用的編碼';
$string['auth_dbextrafields'] = '這些欄位是選擇性的。您在此指定的<B>外部資料庫欄位</B>將預先填入本系統的用戶資料庫中。<P>如果您留空不填，將使用系統預設值。<P>無論以上哪種情況，用戶在登錄後都可以改寫這些欄位。';
$string['auth_dbfieldpass'] = '包含密碼的欄位名稱';
$string['auth_dbfieldpass_key'] = '密碼欄位';
$string['auth_dbfielduser'] = '包含帳號名稱的欄位名稱';
$string['auth_dbfielduser_key'] = '帳號名稱欄位';
$string['auth_dbhost'] = '資料庫所在主機';
$string['auth_dbhost_key'] = '主機';
$string['auth_dbinsertuser'] = '加入用戶 $a[0] 編號 $a[1]';
$string['auth_dbinsertusererror'] = '加入用戶 {$a} 時發生錯誤';
$string['auth_dbname'] = '資料庫名稱';
$string['auth_dbname_key'] = '資料庫名稱';
$string['auth_dbpass'] = '密碼與帳號名稱相符合';
$string['auth_dbpass_key'] = '密碼';
$string['auth_dbpasstype'] = '指定密碼欄位所用的格式。MD5編碼可用於與其他通用WEB應用如PostNuke相聯接';
$string['auth_dbpasstype_key'] = '密碼格式';
$string['auth_dbreviveduser'] = '重啟用戶 $a[0] 編號 $a[1]';
$string['auth_dbrevivedusererror'] = '重啟用戶{$a}時發生錯誤';
$string['auth_dbsetupsql'] = 'SQL 設定指令';
$string['auth_dbsetupsqlhelp'] = '指定資料庫安裝的 SQL 指令，通常用來設定連線編碼，例如在 MySQL 與 PostgreSQL：<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '中止用戶 $a[0] 編號 $a[1]';
$string['auth_dbsuspendusererror'] = '中止用戶 $a 時發生錯誤';
$string['auth_dbsybasequoting'] = '使用 sybase 引號';
$string['auth_dbsybasequotinghelp'] = '使用 Oracle、MS SQL等部份資料庫系統時需要Sybase 風格的單引號脫逸。 MySQL 不使用！';
$string['auth_dbtable'] = '資料庫中資料表名稱';
$string['auth_dbtable_key'] = '資料表';
$string['auth_dbtitle'] = '使用外界資料庫';
$string['auth_dbtype'] = '資料庫格式 (進一步說明請參見<A 資料庫類型（詳情請看<A HREF=../lib/adodb/readme.htm#drivers>ADOdb幫助文檔</A>）';
$string['auth_dbtype_key'] = '資料庫';
$string['auth_dbupdatinguser'] = '更新用戶 $a[0] 編號 $a[1]';
$string['auth_dbuser'] = '可讀取資料庫的用戶名稱';
$string['auth_dbuser_key'] = '資料庫用戶';
$string['auth_dbusernotexist'] = '無法更新不存在的用戶：{$a}';
$string['auth_dbuserstoadd'] = '要新增的用戶資料：{$a}';
$string['auth_dbuserstoremove'] = '要移除的用戶資料：{$a}';
$string['auth_emaildescription'] = '以電子郵件確認帳號是系統預設認證方式。當用戶申請帳號時，選擇帳號名稱與密碼，系統將以電子郵件送出確認訊息。申請者須閱讀電子郵件後按下內容內確認連結後啟動帳號使用權。以上動作只要一次即可，之後可要帳號名稱與密碼相符便可登入。';
$string['auth_emailnoemail'] = '嘗試寄送郵件給您時發生錯誤！';
$string['auth_emailnoinsert'] = '無法新增您的資料到資料庫！';
$string['auth_emailrecaptcha'] = '在登入頁面，針對電子郵件自我認證的使用者，新增一個視覺/聲音的表格確認元件。此在防止垃圾郵件並引起正面動機。詳細說明請至http://recaptcha.net/learnmore.html';
$string['auth_emailrecaptcha_key'] = '啟動reCAPTCHA元件';
$string['auth_emailsettings'] = '設定';
$string['auth_emailtitle'] = '電子郵件確認';
$string['auth_fcchangepasswordurl'] = '變更密碼的網址';
$string['auth_fcconnfail'] = '連線失敗錯誤代碼： $a[0] 與訊息： $a[1]';
$string['auth_fccreators'] = '列出允許開課的會員群組，可以用;分割多個群組，名稱必須與第一層伺服器相符，系統大小寫是代表不同的字元。';
$string['auth_fccreators_key'] = '建立者';
$string['auth_fcdescription'] = '這個方法使用一個第一層伺服器檢查用戶名稱與密碼是否有效';
$string['auth_fcfppport'] = '伺服器連接埠(通常是3333)';
$string['auth_fcfppport_key'] = '連接埠';
$string['auth_fchost'] = '第一層伺服器位址,可使用ip或dns名稱';
$string['auth_fchost_key'] = '主機：';
$string['auth_fcpasswd'] = '第一層伺服器上帳號的密碼';
$string['auth_fcpasswd_key'] = '密碼';
$string['auth_fctitle'] = '使用一部第一層伺服器';
$string['auth_fcuserid'] = '擁有第一層伺服器助理管理員權限的用戶帳號';
$string['auth_fcuserid_key'] = '用戶帳號';
$string['auth_fieldlock'] = '鎖定值';
$string['auth_fieldlock_expl'] = '<p><b>鎖定值：</b> 如果啟動，Moodle用戶和管理員將不能直接修改欄位的值。如果您正在維護外部資料庫的資料，請選擇此項。';
$string['auth_fieldlocks'] = '鎖定使用者欄位';
$string['auth_fieldlocks_help'] = '您可以鎖定用戶資料欄位。當管理者在編輯用戶紀錄或使用\"上傳用戶\"的功能時，這對網站很有幫助。</p> 若您是藉由Moodle來要求鎖住欄位，請確定您在建立用戶帳號時，有提供必要的資料，否則該帳號將無法使用。 </p><p>考慮設定封鎖模式為\'若空白則解除封鎖\'以避免這個問題。</p>';
$string['auth_imapchangepasswordurl_key'] = '變更密碼的網址';
$string['auth_imapdescription'] = '本方式使用 IMAP 伺服器 檢查帳號名稱與密碼是否相符.';
$string['auth_imaphost'] = 'IMAP 伺服器網址. 請使用 IP 號碼, 而不是名稱資料.';
$string['auth_imaphost_key'] = '主機';
$string['auth_imapnotinstalled'] = '無法使用 IMAP 認證，PHP 的 IMAP 模組未安裝。';
$string['auth_imapport'] = 'IMAP 伺服器的連接埠. 通常是 143 或 993.';
$string['auth_imapport_key'] = '連接埠';
$string['auth_imaptitle'] = '使用IMAP 伺服器';
$string['auth_imaptype'] = 'IMAP 伺服器型態。IMAP 伺服器可以有不同認證方式。';
$string['auth_imaptype_key'] = '類型';
$string['auth_ldap_ad_create_req'] = '無法在Active Directory建立新的帳號。請確認您符合此動作的所有要求（LDAPS連結等等）';
$string['auth_ldap_attrcreators'] = '群組或內容的列表，其成員可以建立屬性。利用\";\"區分多個群組， 通常會寫得像\'cn=teachers,ou=staff,o=myorg\'。';
$string['auth_ldap_attrcreators_key'] = '建立者屬性';
$string['auth_ldap_auth_user_create_key'] = '透過外部建立用戶';
$string['auth_ldap_bind_dn'] = '如果您想用綁定使用者來搜索使用者，在此指定。就像：‘cn=ldapuser,ou=public,o=org’';
$string['auth_ldap_bind_dn_key'] = '辨識名稱';
$string['auth_ldap_bind_pw'] = '繫結使用者的密碼。';
$string['auth_ldap_bind_pw_key'] = '密碼';
$string['auth_ldap_bind_settings'] = '繫結的設定';
$string['auth_ldap_changepasswordurl_key'] = '變更密碼的網址';
$string['auth_ldap_contexts'] = '使用者背景列表。以‘;’分隔。例如：‘ou=users,o=org; ou=others,o=org’';
$string['auth_ldap_contexts_key'] = '條件';
$string['auth_ldap_create_context'] = '如果您允許根據email資訊創建用戶，請指定創建用戶的條件。該值基於安全問題應該有別於別的用戶者。您不需將此條件加到LDAP條件變數，Moodle以此條件搜尋用戶。<br /><b>注意!</b> 您必須變更auth/ldap/auth.php檔案中的user_create()方法以使建立用戶的工作能運作。';
$string['auth_ldap_create_context_key'] = '新用戶的條件';
$string['auth_ldap_create_error'] = '在LDAP中建立使用者時發生錯誤';
$string['auth_ldap_creators'] = '列出可建立新課程的群組.用;分割多個群組';
$string['auth_ldap_creators_key'] = '建立者';
$string['auth_ldap_expiration_desc'] = '要取消密碼過期檢查就按否,或者直接從LDAP讀取過期時間';
$string['auth_ldap_expiration_key'] = '有效期限';
$string['auth_ldap_expiration_warning_desc'] = '發出密碼過期警告的日數';
$string['auth_ldap_expiration_warning_key'] = '過期警告';
$string['auth_ldap_expireattr_desc'] = '選項:覆寫儲存的ldap屬性';
$string['auth_ldap_expireattr_key'] = '過期屬性';
$string['auth_ldap_graceattr_desc'] = '選項:覆寫寬容登入屬性';
$string['auth_ldap_gracelogin_key'] = '寬容登入屬性';
$string['auth_ldap_gracelogins_desc'] = '啟用LDAP gracelogin 支援';
$string['auth_ldap_gracelogins_key'] = '寬容登入';
$string['auth_ldap_groupecreators'] = '群組或內容的列表，其成員可以建立屬性。利用\";\"區分多個群組， 通常會寫得像\'cn=teachers,ou=staff,o=myorg\'。';
$string['auth_ldap_groupecreators_key'] = '群組建立者';
$string['auth_ldap_host_url'] = '以URL形式指定LDAP主機，類似於：‘ldap://ldap.myorg.com/’或‘ldaps://ldap.myorg.com/’or ldaps://ldap.myorg.com/';
$string['auth_ldap_host_url_key'] = '主機網址';
$string['auth_ldap_ldap_encoding'] = '指定 LDAP 伺服器使用的編碼，通常是 utf-8，MS AD v2 使用預設平台編碼，像是 cp1252、cp1250 等。';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP編碼';
$string['auth_ldap_login_settings'] = '登入設定';
$string['auth_ldap_memberattribute'] = '指定從屬於某個組的使用者屬性,一般是\"會員\"';
$string['auth_ldap_memberattribute_isdn'] = '選填：覆蓋會員屬性值處理， 0 或 1';
$string['auth_ldap_memberattribute_isdn_key'] = '會員屬性使用 dn';
$string['auth_ldap_memberattribute_key'] = '會員屬性';
$string['auth_ldap_no_mbstring'] = '您需要mbstring延伸集才能在Active Directory建立使用者。';
$string['auth_ldap_noconnect'] = 'LDAP 模組無法連線伺服器： $a';
$string['auth_ldap_noconnect_all'] = 'LDAP 模組無法連線到任何伺服器： $a';
$string['auth_ldap_noextension'] = '警告： PHP 的 LDAP 模組似乎不存在，請確認是否已經安裝及啟用。';
$string['auth_ldap_objectclass'] = '用來搜尋使用者的過濾器,預設使是objectClass=*,將從LDAP伺服器傳回所有物件';
$string['auth_ldap_objectclass_key'] = '物件類別';
$string['auth_ldap_opt_deref'] = '決定ldap在搜尋時的別名:選擇:\"否\" (LDAP_DEREF_NEVER) 或 \"是\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = '不同的代稱';
$string['auth_ldap_passtype'] = '指定在 LDAP 伺服器新增或修改密碼的格式';
$string['auth_ldap_passtype_key'] = '密碼格式';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP 密碼過期設定';
$string['auth_ldap_preventpassindb'] = '選擇\"是\" 可以防止密碼被儲存到Moodle的資料庫中';
$string['auth_ldap_preventpassindb_key'] = '隱藏密碼';
$string['auth_ldap_search_sub'] = '從次級上下文中搜索用戶';
$string['auth_ldap_search_sub_key'] = '搜尋子條件';
$string['auth_ldap_server_settings'] = 'LDAP 伺服器設定';
$string['auth_ldap_unsupportedusertype'] = '認證： ldap user_create() 不支援選擇的用戶類型：\"$a\" (..還沒)';
$string['auth_ldap_update_userinfo'] = '從LDAP向本系統更新用戶資訊（姓名、位址……）要查看映射資訊，請看/auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = '用於命名/搜索使用者的屬性。通常為‘cn’。';
$string['auth_ldap_user_attribute_key'] = '用戶屬性';
$string['auth_ldap_user_exists'] = 'LDAP使用者名稱已經存在。';
$string['auth_ldap_user_settings'] = '用戶搜尋設定';
$string['auth_ldap_user_type'] = '選擇使用者儲存在LDAP的方法,此設定同時也指定可登入時間,grace 登入和用者建立等功能';
$string['auth_ldap_user_type_key'] = '用戶類型';
$string['auth_ldap_usertypeundefined'] = 'config.user_type 未定義或是函式 ldap_expirationtime2unix 不支援選擇的類型！';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type 未定義或是函式 ldap_unixi2expirationtime 不支援選擇的類型！';
$string['auth_ldap_version'] = '您目前LDAP 伺服器的使用版本';
$string['auth_ldap_version_key'] = '版本';
$string['auth_ldapdescription'] = '該方法利用一個外部的LDAP伺服器進行身份驗證。 如果使用者名和密碼是有效的，本系統據此在資料庫中創建一個新使用者。 該模組可以從LDAP中讀取使用者屬性，並把指定的欄位預先填入本系統資料庫。 此後的登錄只需檢驗使用者名和密碼。';
$string['auth_ldapextrafields'] = '這些欄位是可選的。您可以在此指定這些<B>LDAP欄位</B>複製到本系統的資料庫中。 <P>如果您不選，將使用本系統預設值。<P>無論以上何種情況，使用者在登錄之後都可以修改這些欄位。';
$string['auth_ldapnotinstalled'] = '無法使用 LDAP 認證，PHP 的 LDAP 模組未安裝。';
$string['auth_ldaptitle'] = '使用一個LDAP伺服器';
$string['auth_manualdescription'] = '該方法不允許使用者以任何方式創建帳號。所有帳號只能由管理員手工創建。';
$string['auth_manualtitle'] = '只允許手工添加帳號';
$string['auth_mnet_auto_add_remote_users'] = '設定為是時，當遠端用戶第一次登入時會在本地端自動建立一個用戶資料。';
$string['auth_mnet_roamin'] = '這些主機的用戶可以在您的網站漫遊。';
$string['auth_mnet_roamout'] = '您的用戶可以登入這些主機漫遊。';
$string['auth_mnet_rpc_negotiation_timeout'] = '透過 XMLRPC 傳輸認證的逾時秒數。';
$string['auth_mnetdescription'] = '根據您在 Moodle 網路設定中的信任網站進行用戶認證。';
$string['auth_mnettitle'] = 'Moodle 網路認證';
$string['auth_multiplehosts'] = '多個不同的主機可以被指定(例如host1.com;host2.com;host3.com)';
$string['auth_nntpchangepasswordurl_key'] = '變更密碼網址';
$string['auth_nntpdescription'] = '該方法使用一個NNTP伺服器來檢驗使用者名和密碼是否有效。';
$string['auth_nntphost'] = 'NNTP伺服器位址。用IP地址，不要用功能變數名稱。';
$string['auth_nntphost_key'] = '主機';
$string['auth_nntpnotinstalled'] = '無法使用 NNTP 認證，PHP 的 IMAP 模組未安裝。';
$string['auth_nntpport'] = '伺服器埠（通常是119）';
$string['auth_nntpport_key'] = '連接埠';
$string['auth_nntptitle'] = '使用一個NNTP伺服器';
$string['auth_nologindescription'] = '避免用戶登入系統的輔助外掛也會阻止所有發送給用戶的信件，可以用來<em>停用</em>用戶帳號。';
$string['auth_nologintitle'] = '拒絕登入';
$string['auth_nonedescription'] = '使用者可以即刻進入本系統並創建一個有效帳號，不需要任何身份驗證，也不需要電子郵件確認。慎用該方法——考慮一下安全性和管理上的問題。';
$string['auth_nonetitle'] = '沒有身份驗證';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = '設定為\'是\'，以使用NTLM領域來Single Sign On。<strong>注意:</strong>此動作需在網站伺服器做額外安裝，請參見<a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = '啟用';
$string['auth_ntlmsso_subnet'] = '如果設定，將只在此子網路中的客戶端使用SSO。格式：xxx.xxx.xxx.xxx/遮罩位元';
$string['auth_ntlmsso_subnet_key'] = '子網';
$string['auth_pamdescription'] = '這個方法使用PAM 存取伺服器本地的使用者,您必須安裝<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a>以便使用這個模組';
$string['auth_pamtitle'] = 'PAM(可插入式認證模組)';
$string['auth_passwordisexpired'] = '您的密碼已過期,要現在變更密碼嗎?';
$string['auth_passwordwillexpire'] = '您的密碼將在$a 天內過期,您要現在變更密碼嗎?';
$string['auth_pop3changepasswordurl_key'] = '變更密碼的網址';
$string['auth_pop3description'] = '該方法使用一個POP3伺服器來檢驗使用者名和密碼。';
$string['auth_pop3host'] = 'POP3 伺服器網址. 輸入IP 而不是名稱.';
$string['auth_pop3host_key'] = '主機';
$string['auth_pop3mailbox'] = '建立連結的電子郵件信箱名稱(通常是收件匣)';
$string['auth_pop3mailbox_key'] = '郵件信箱';
$string['auth_pop3notinstalled'] = '無法使用 POP3 認證，PHP 的 IMAP 模組未安裝。';
$string['auth_pop3port'] = '伺服器埠（通常是110）';
$string['auth_pop3port_key'] = '連接埠';
$string['auth_pop3title'] = '使用 POP3 伺服器';
$string['auth_pop3type'] = '伺服器類型。如果您的POP3伺服器使用安全驗證，請選擇pop3cert。';
$string['auth_pop3type_key'] = '類型';
$string['auth_radiuschangepasswordurl_key'] = '變更密碼網址';
$string['auth_radiusdescription'] = '此方法使用一台<a href=\"http://en.wikipedia.org/wiki/RADIUS\" target=\"_blank\">RADIUS</a> 伺服器以檢查使用者帳號和密碼是否正確。';
$string['auth_radiushost'] = 'RADIUS伺服器網址';
$string['auth_radiushost_key'] = '主機';
$string['auth_radiusnasport'] = '連接埠';
$string['auth_radiusnasport_key'] = '連接埠';
$string['auth_radiussecret'] = '共享密鑰';
$string['auth_radiussecret_key'] = '密鑰';
$string['auth_radiustitle'] = '使用RADIUS伺服器';
$string['auth_remove_delete'] = '內部完全刪除';
$string['auth_remove_keep'] = '保留內部';
$string['auth_remove_suspend'] = '停用內部';
$string['auth_remove_user'] = '當從遠端來的用戶在大量移除時，內部用戶帳號要執行的動作。唯用戶再次出現在外部來源時，該停用用戶才會自動重新啟用。';
$string['auth_remove_user_key'] = '移除的外部使用者';
$string['auth_shib_changepasswordurl'] = '變更密碼網址';
$string['auth_shib_convert_data'] = '資料修改API';
$string['auth_shib_convert_data_description'] = '您可以使用API去修改由Shibboleth提供的資料。要瞭解細節，請參考<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a>。';
$string['auth_shib_convert_data_warning'] = '此檔不存在或無法被Web伺服器讀取！';
$string['auth_shib_instructions'] = '如果您的學校支援Shibboleth，可以使用<a href=\"$a\">Shibboleth登入</a>來存取它。<br />否則請使用這標準登入表單。';
$string['auth_shib_instructions_help'] = '應當在此為您的用戶提供關於Shibboleth的解釋。在登入畫面上，將會顯示這些提示。其中應包含一個指“<b>$a< /b>”的連結，這樣Shibboleth用戶可以輕鬆登入。如果您空白，預設的指示資訊將會被使用(不是Shibboleth特定的)。';
$string['auth_shib_no_organizations_warning'] = '如果您欲使用整合的WAYF服務，您必須提供實體提供者entityIDs的清單(以逗號區隔，他們的名字和連線創建者）';
$string['auth_shib_only'] = '只用Shibboleth';
$string['auth_shib_only_description'] = '如果只是用Shibboleth認證方式，請設定此選項。';
$string['auth_shib_username_description'] = '用在Moodle中當作用戶名稱的Shibboleth環境變數';
$string['auth_shibboleth_contact_administrator'] = '若您無法與該組織連繫，而您需要存取此網站的課程，請與管理者連繫。';
$string['auth_shibboleth_errormsg'] = '請選您所屬的組織';
$string['auth_shibboleth_login'] = 'Shibboleth登入';
$string['auth_shibboleth_login_long'] = '透過Shibboleth登入Moodle';
$string['auth_shibboleth_manual_login'] = '手動登入';
$string['auth_shibboleth_select_member'] = '我是...的成員';
$string['auth_shibboleth_select_organization'] = '透過Shibboleth認證，請在下拉式清單中選擇您的組織:';
$string['auth_shibbolethdescription'] = '這個方法，用戶的建立和驗證是使用<a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br>請閱讀 <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> 幫助您了解如何設定Moodle 來使用Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_sync_script'] = '定期執行程式同步腳本';
$string['auth_updatelocal'] = '更新本地資料';
$string['auth_updatelocal_expl'] = '<p><b>更新本地資料:</b>啟用時,每次用戶登入或用戶進行同步化時欄位將被更新(從外部認證),欄位設為本地更新時會被鎖定.</p>';
$string['auth_updateremote'] = '更新外部資料';
$string['auth_updateremote_expl'] = '<p><b>更新外部資料:</b>啟用時,使用者資料更新時外部認證資料也會更新,欄位必須設為解除鎖定才能編輯.</p>';
$string['auth_updateremote_ldap'] = '<p><b>注恴:</b>更新外部LDAP 資料需要設定binddn和bindpw 到一個綁定的使用者,並開放所有對使用者進行編輯的權限,它目前無法儲存多重屬性,多餘的資料在更新時會被移除 </p>';
$string['auth_user_create'] = '啟動使用者創建功能';
$string['auth_user_creation'] = '新的(匿名)用戶可以在外部身份驗證源中創建新用戶帳號，並通過email確認。如果您啟動了這個功能，請記住同時也為用戶創建功能設置一下模組特定選項';
$string['auth_usernameexists'] = '選中的用戶名已經存在。請選擇一個新的。';
$string['authenticationoptions'] = '身份驗證選項';
$string['authinstructions'] = '您在這裏可以給您的用戶提供使用說明，讓他們知道該用哪個用戶名和密碼。您在這裏輸入的文本將出現在登錄頁面。如果留空不填，登錄頁面將不會出現使用說明。';
$string['auto_add_remote_users'] = '自動新增遠端用戶';
$string['changepassword'] = '更改密碼的網址';
$string['changepasswordhelp'] = '請輸入當使用者忘記密碼時可以設定新密碼的網址. 此網址將提供於登入畫面中, 若是並未提供網址則不會出現此按鈕.';
$string['chooseauthmethod'] = '選擇一個身份驗證方法：';
$string['createpasswordifneeded'] = '如果需要則建立密碼';
$string['enterthenumbersyouhear'] = '輸入您聽到的數字';
$string['enterthewordsabove'] = '輸入您在上圖中看到的字元';
$string['errorminpassworddigits'] = '密碼至少需有$a位數字。';
$string['errorminpasswordlength'] = '密碼至少需有$a字元長度。';
$string['errorminpasswordlower'] = '密碼至少需有$a位小寫字元。';
$string['errorminpasswordnonalphanum'] = '密碼至少需有$a位非阿拉伯數字字元';
$string['errorminpasswordupper'] = '密碼至少需有$a位大寫字元';
$string['errorpasswordupdate'] = '更新密碼時發生錯誤，密碼沒有修改';
$string['forcechangepassword'] = '強制變更密碼';
$string['forcechangepassword_help'] = '強制使用者在下次登入時變更密碼';
$string['forcechangepasswordfirst_help'] = '強制使用者在第一次登入時變更密碼';
$string['forgottenpassword'] = '若您在此輸入一個位址，它將用於此網址遺失密碼的回覆網頁中。此意謂網站的密碼管理完全在Moodle之外。若要使用預設的密碼回覆方式，此處請空白。';
$string['forgottenpasswordurl'] = '密碼遺忘時網址';
$string['getanaudiocaptcha'] = '聽聲音的字詞驗證';
$string['getanimagecaptcha'] = '看圖片的字詞驗證';
$string['getanothercaptcha'] = '換一個字詞';
$string['guestloginbutton'] = '訪客登入按鈕';
$string['incorrectpleasetryagain'] = '不正確。請重試。';
$string['infilefield'] = '在檔案中需要的欄位';
$string['instructions'] = '使用說明';
$string['internal'] = '內部的';
$string['locked'] = '已鎖定';
$string['md5'] = 'MD5加密';
$string['nopasswordchange'] = '密碼不能夠修改';
$string['nopasswordchangeforced'] = '沒有修改密碼前您無法處理，這裡沒有提供可以變更的頁面，請聯絡您的Moodle管理員。';
$string['ntlmsso_attempting'] = '透過NTLM進行Single Sign On';
$string['ntlmsso_failed'] = '自動登入失敗，請使用一般登入頁面。';
$string['ntlmsso_isdisabled'] = 'NTLM SSO無效。';
$string['passwordhandling'] = '密碼欄位處裡中';
$string['plaintext'] = '純文字';
$string['pluginnotenabled'] = '認證外掛 \'$a\' 未啟用。';
$string['pluginnotinstalled'] = '認證外掛 \'$a\' 未安裝。';
$string['recaptcha'] = '字詞驗證';
$string['rpc_negotiation_timeout'] = 'PC 交涉逾時';
$string['selfregistration'] = '自行註冊';
$string['selfregistration_help'] = '選擇用戶自行註冊時，所使用的認證外掛。';
$string['sha1'] = 'SHA-1 hash';
$string['shib_no_attributes_error'] = '您似乎以Shibboleth認證，但是Moodle並未收到任何使用者的資料。請檢查您的身份認證資料提供者是否提供了必要的資料($a)給服務提供者Moodle，或者通知此伺服器的管理者。';
$string['shib_not_all_attributes_error'] = 'Moodle需要必要的Shibboleth資料，而未存在您的資料中。這些資料是:$a<br />請與此伺服器管理員或您的身份認證資料提供者連繫。';
$string['shib_not_set_up_error'] = 'Shibboleth認證並未正確設定，因為沒有Shibboleth環境變數出現在此頁面上。請閱讀<a href=\"README.txt\">說明檔</a> 進一步瞭解如何設定Shibboleth認證或此Moodle安裝的網站管理員。';
$string['showguestlogin'] = '您可以選擇登入網頁中是否顯示訪客登入按鈕.';
$string['stdchangepassword'] = '使用標準的變更密碼表單';
$string['stdchangepassword_expl'] = '如果外部認證系統允許透過moodle變更密碼,將此功能設為啟動,這個設定將會覆寫\"變更密碼URL\"欄位';
$string['stdchangepassword_explldap'] = '注意:強烈建議您使用LDAP在SSL 加密通道(ldaps://) 如果LDAP 伺服器是在遠端';
$string['unlocked'] = '已解除鎖定';
$string['unlockedifempty'] = '如果留空，則解除鎖定';
$string['update_never'] = '從不';
$string['update_oncreate'] = '建立時';
$string['update_onlogin'] = '每次登入時';
$string['update_onupdate'] = '更新時';

?>
