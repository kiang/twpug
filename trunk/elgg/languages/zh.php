<?php

	$chinese = array(

		/**
		 * Sites
		 */

			'item:site' => '網站',

		/**
		 * Sessions
		 */

			'login' => "登入",
			'loginok' => "You have been logged in.",
			'loginerror' => "We couldn't log you in. This may be because you haven't validated your account yet, the details you supplied were incorrect, or you have made too many incorrect login attempts. Make sure your details are correct and please try again.",

			'logout' => "Log out",
			'logoutok' => "You have been logged out.",
			'logouterror' => "We couldn't log you out. Please try again.",

		/**
		 * Errors
		 */
			'exception:title' => "Welcome to Elgg.",

			'InstallationException:CantCreateSite' => "Unable to create a default ElggSite with credentials Name:%s, Url: %s",

			'actionundefined' => "The requested action (%s) was not defined in the system.",
			'actionloggedout' => "Sorry, you cannot perform this action while logged out.",

			'notfound' => "The requested resource could not be found, or you do not have access to it.",

			'SecurityException:Codeblock' => "Denied access to execute privileged code block",
			'DatabaseException:WrongCredentials' => "Elgg couldn't connect to the database using the given credentials.",
			'DatabaseException:NoConnect' => "Elgg couldn't select the database '%s', please check that the database is created and you have access to it.",
			'SecurityException:FunctionDenied' => "Access to privileged function '%s' is denied.",
			'DatabaseException:DBSetupIssues' => "There were a number of issues: ",
			'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",

			'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
			'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
			'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",

			'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",

			'PluginException:MisconfiguredPlugin' => "%s is a misconfigured plugin.",

			'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",

			'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",

			'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",

			'IOException:UnableToSaveNew' => "Unable to save new %s",

			'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
			'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",

			'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
			'IOException:NotDirectory' => "%s is not a directory.",

			'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
			'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
			'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",

			'ClassException:ClassnameNotClass' => "%s is not a %s.",
			'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
			'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",

			'ImportException:ImportFailed' => "Could not import element %d",
			'ImportException:ProblemSaving' => "There was a problem saving %s",
			'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",

			'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
			'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",

			'ExportException:NoSuchEntity' => "No such entity GUID:%d",

			'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
			'ImportException:NotAllImported' => "Not all elements were imported.",

			'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
			'InvalidParameterException:MissingOwner' => "File %s (%d) is missing an owner!",
			'IOException:CouldNotMake' => "Could not make %s",
			'IOException:MissingFileName' => "You must specify a name before opening a file.",
			'ClassNotFoundException:NotFoundNotSavedWithFile' => "Filestore not found or class not saved with file!",
			'NotificationException:NoNotificationMethod' => "No notification method specified.",
			'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
			'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
			'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
			'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",

			'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
			'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
			'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
			'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
			'DatabaseException:NoACL' => "No access control was provided on query",

			'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",

			'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
			'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
			'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
			'InvalidParameterException:NoDataFound' => "Could not find any data.",
			'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
			'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
			'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",

			'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
			'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
			'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.",

			'ConfigurationException:NoSiteID' => "No site ID has been specified.",
			'InvalidParameterException:UnrecognisedMethod' => "Unrecognised call method '%s'",
			'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
			'APIException:ParameterNotArray' => "%s does not appear to be an array.",
			'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
			'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
			'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
			'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
			'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
			'CallException:InvalidCallMethod' => "%s must be called using '%s'",
			'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
			'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
			'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
			'APIException:NotGetOrPost' => "Request method must be GET or POST",
			'APIException:MissingAPIKey' => "Missing X-Elgg-apikey HTTP header",
			'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
			'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
			'APIException:MissingTime' => "Missing X-Elgg-time header",
			'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
			'APIException:NoQueryString' => "No data on the query string",
			'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
			'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
			'APIException:MissingContentType' => "Missing content type for post data",
			'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
			'SecurityException:DupePacket' => "Packet signature already seen.",
			'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
			'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",

			'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
			'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
			'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",

			'PluginException:NoPluginName' => "The plugin name could not be found",

			'ConfigurationException:BadDatabaseVersion' => "The database backend you have installed doesn't meet the basic requirements to run Elgg. Please consult your documentation.",
			'ConfigurationException:BadPHPVersion' => "You need at least PHP version 5.2 to run Elgg.",
			'configurationwarning:phpversion' => "Elgg requires at least PHP version 5.2, you can install it on 5.1.6 but some features may not work. Use at your own risk.",


			'InstallationException:DatarootNotWritable' => "Your data directory %s is not writable.",
			'InstallationException:DatarootUnderPath' => "Your data directory %s must be outside of your install path.",
			'InstallationException:DatarootBlank' => "You have not specified a data directory.",

			'SecurityException:authenticationfailed' => "User could not be authenticated",

			'CronException:unknownperiod' => '%s is not a recognised period.',

			'SecurityException:deletedisablecurrentsite' => 'You can not delete or disable the site you are currently viewing!',

			'memcache:notinstalled' => 'PHP memcache module not installed, you must install php5-memcache',
			'memcache:noservers' => 'No memcache servers defined, please populate the $CONFIG->memcache_servers variable',
			'memcache:versiontoolow' => 'Memcache needs at least version %s to run, you are running %s',
			'memcache:noaddserver' => 'Multiple server support disabled, you may need to upgrade your PECL memcache library',

			'deprecatedfunction' => 'Warning: This code uses the deprecated function \'%s\' and is not compatible with this version of Elgg',

			'pageownerunavailable' => 'Warning: The page owner %d is not accessible!',
		/**
		 * API
		 */
			'system.api.list' => "List all available API calls on the system.",
			'auth.gettoken' => "This API call lets a user log in, returning an authentication token which can be used in leu of a username and password for authenticating further calls.",

		/**
		 * User details
		 */

			'name' => "顯示名稱",
			'email' => "Email 信箱",
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
			'dashboard:nowidgets' => "Your dashboard is your gateway into the site. Click 'Edit page' to add widgets to keep track of content and your life within the system.",

			'widgets:add' => 'Add widgets to your page',
			'widgets:add:description' => "Choose the features you want to add to your page by dragging them from the <b>Widget gallery</b> on the right, to any of the three widget areas below, and position them where you would like them to appear.

To remove a widget drag it back to the <b>Widget gallery</b>.",
			'widgets:position:fixed' => '(Fixed position on page)',

			'widgets' => "Widgets",
			'widget' => "Widget",
			'item:object:widget' => "Widgets",
			'layout:customise' => "Customise layout",
			'widgets:gallery' => "Widget gallery",
			'widgets:leftcolumn' => "Left widgets",
			'widgets:fixed' => "Fixed position",
			'widgets:middlecolumn' => "Middle widgets",
			'widgets:rightcolumn' => "Right widgets",
			'widgets:profilebox' => "Profile box",
			'widgets:panel:save:success' => "Your widgets were successfully saved.",
			'widgets:panel:save:failure' => "There was a problem saving your widgets. Please try again.",
			'widgets:save:success' => "The widget was successfully saved.",
			'widgets:save:failure' => "We could not save your widget. Please try again.",
			'widgets:handlernotfound' => 'This widget is either broken or has been disabled by the site administrator.',

		/**
		 * Groups
		 */

			'group' => "群組",
			'item:group' => "群組",

		/**
		 * Profile
		 */

			'profile' => "個人資料",
			'profile:edit:default' => 'Replace profile fields',
			'profile:preview' => '預覽',
			'user' => "會員",
			'item:user' => "會員",
			'riveritem:single:user' => 'a user',
			'riveritem:plural:user' => 'some users',



		/**
		 * Profile menu items and titles
		 */

			'profile:yours' => "您的資料",
			'profile:user' => "%s 的資料",

			'profile:edit' => "編輯個人資料",
			'profile:profilepictureinstructions' => "The profile picture is the image that's displayed on your profile page. <br /> You can change it as often as you'd like. (File formats accepted: GIF, JPG or PNG)",
			'profile:icon' => "Profile picture",
			'profile:createicon' => "Create your avatar",
			'profile:currentavatar' => "Current avatar",
			'profile:createicon:header' => "Profile picture",
			'profile:profilepicturecroppingtool' => "Profile picture cropping tool",
			'profile:createicon:instructions' => "Click and drag a square below to match how you want your picture cropped.  A preview of your cropped picture will appear in the box on the right.  When you are happy with the preview, click 'Create your avatar'. This cropped image will be used throughout the site as your avatar. ",

			'profile:editdetails' => "Edit details",
			'profile:editicon' => "Edit profile icon",

			'profile:aboutme' => "關於自己",
			'profile:description' => "關於自己",
			'profile:briefdescription' => "簡介",
			'profile:location' => "來自",
			'profile:skills' => "專長",
			'profile:interests' => "興趣",
			'profile:contactemail' => "連絡信箱",
			'profile:phone' => "電話",
			'profile:mobile' => "手機",
			'profile:website' => "網站",

			'profile:banned' => 'This user account has been suspended.',
			'profile:deleteduser' => 'Deleted user',

			'profile:river:update' => "%s updated their profile",
			'profile:river:iconupdate' => "%s updated their profile icon",

			'profile:label' => "Profile label",
			'profile:type' => "Profile type",

			'profile:editdefault:fail' => 'Default profile could not be saved',
			'profile:editdefault:success' => 'Item successfully added to default profile',


			'profile:editdefault:delete:fail' => 'Removed default profile item field failed',
			'profile:editdefault:delete:success' => 'Default profile item deleted!',

			'profile:defaultprofile:reset' => 'Default system profile reset',

			'profile:resetdefault' => 'Reset default profile',
			'profile:explainchangefields' => 'You can replace the existing profile fields with your own using the form below. First you give the new profile field a label, for example, \'Favourite team\'. Next you need to select the field type, for example, tags, url, text and so on. At any time you can revert back to the default profile set up.',



		/**
		 * Profile status messages
		 */

			'profile:saved' => "Your profile was successfully saved.",
			'profile:icon:uploaded' => "Your profile picture was successfully uploaded.",

		/**
		 * Profile error messages
		 */

			'profile:noaccess' => "You do not have permission to edit this profile.",
			'profile:notfound' => "Sorry; we could not find the specified profile.",
			'profile:cantedit' => "Sorry; you do not have permission to edit this profile.",
			'profile:icon:notfound' => "Sorry; there was a problem uploading your profile picture.",

		/**
		 * Friends
		 */

			'friends' => "朋友",
			'friends:yours' => "您的朋友",
			'friends:owned' => "%s 的朋友",
			'friend:add' => "新增朋友",
			'friend:remove' => "移除朋友",

			'friends:add:successful' => "You have successfully added %s as a friend.",
			'friends:add:failure' => "We couldn't add %s as a friend. Please try again.",

			'friends:remove:successful' => "You have successfully removed %s from your friends.",
			'friends:remove:failure' => "We couldn't remove %s from your friends. Please try again.",

			'friends:none' => "This user hasn't added anyone as a friend yet.",
			'friends:none:you' => "You haven't added anyone as a friend! Search for your interests to begin finding people to follow.",

			'friends:none:found' => "No friends were found.",

			'friends:of:none' => "Nobody has added this user as a friend yet.",
			'friends:of:none:you' => "Nobody has added you as a friend yet. Start adding content and fill in your profile to let people find you!",

			'friends:of:owned' => "People who have made %s a friend",

			 'friends:num_display' => "Number of friends to display",
			 'friends:icon_size' => "Icon size",
			 'friends:tiny' => "tiny",
			 'friends:small' => "small",
			 'friends:of' => "Friends of",
			 'friends:collections' => "Collections of friends",
			 'friends:collections:add' => "New friends collection",
			 'friends:addfriends' => "Add friends",
			 'friends:collectionname' => "Collection name",
			 'friends:collectionfriends' => "Friends in collection",
			 'friends:collectionedit' => "Edit this collection",
			 'friends:nocollections' => "You do not yet have any collections.",
			 'friends:collectiondeleted' => "Your collection has been deleted.",
			 'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
			 'friends:collectionadded' => "Your collection was successfuly created",
			 'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
			'friends:collections:members' => "Collection members",
			'friends:collections:edit' => "Edit collection",

	        'friends:river:created' => "%s added the friends widget.",
	        'friends:river:updated' => "%s updated their friends widget.",
	        'friends:river:delete' => "%s removed their friends widget.",
	        'friends:river:add' => "%s is now a friend with",

			'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

		/**
		 * Feeds
		 */
			'feed:rss' => '訂閱',
			'feed:odd' => 'Syndicate OpenDD',

		/**
          * links
		 **/

			'link:view' => '檢視連結',


		/**
		 * River
		 */
			'river' => "River",
			'river:relationship:friend' => 'is now friends with',
			'river:noaccess' => 'You do not have permission to view this item.',
			'river:posted:generic' => '%s posted',

		/**
		 * Plugins
		 */
			'plugins:settings:save:ok' => "Settings for the %s plugin were saved successfully.",
			'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
			'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
			'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
			'admin:plugins:label:version' => "Version",
			'item:object:plugin' => 'Plugin configuration settings',

		/**
		 * Notifications
		 */
			'notifications:usersettings' => "Notification settings",
			'notifications:methods' => "Please specify which methods you want to permit.",

			'notifications:usersettings:save:ok' => "Your notification settings were successfully saved.",
			'notifications:usersettings:save:fail' => "There was a problem saving your notification settings.",

			'user.notification.get' => 'Return the notification settings for a given user.',
			'user.notification.set' => 'Set the notification settings for a given user.',
		/**
		 * Search
		 */

			'search' => "Search",
			'searchtitle' => "Search: %s",
			'users:searchtitle' => "Searching for users: %s",
			'groups:searchtitle' => "Searching for groups: %s",
			'advancedsearchtitle' => "%s with results matching %s",
			'notfound' => "No results found.",
			'next' => "Next",
			'previous' => "Previous",

			'viewtype:change' => "Change listing type",
			'viewtype:list' => "List view",
			'viewtype:gallery' => "Gallery",

			'tag:search:startblurb' => "Items with tags matching '%s':",

			'user:search:startblurb' => "Users matching '%s':",
			'user:search:finishblurb' => "To view more, click here.",

			'group:search:startblurb' => "Groups matching '%s':",
			'group:search:finishblurb' => "To view more, click here.",
			'search:go' => 'Go',

		/**
		 * Account
		 */

			'account' => "帳號",
			'settings' => "設定",
            'tools' => "工具",
            'tools:yours' => "您的工具",

			'register' => "註冊",
			'registerok' => "You have successfully registered for %s.",
			'registerbad' => "Your registration was unsuccessful. The username may already exist, your passwords might not match, or your username or password may be too short.",
			'registerdisabled' => "Registration has been disabled by the system administrator",

			'firstadminlogininstructions' => 'Your new Elgg site has been successfully installed and your administrator account created. You can now configure your site further by enabling various installed plugin tools.',

			'registration:notemail' => 'The email address you provided does not appear to be a valid email address.',
			'registration:userexists' => 'That username already exists',
			'registration:usernametooshort' => 'Your username must be a minimum of 4 characters long.',
			'registration:passwordtooshort' => 'The password must be a minimum of 6 characters long.',
			'registration:dupeemail' => 'This email address has already been registered.',
			'registration:invalidchars' => 'Sorry, your username contains invalid characters.',
			'registration:emailnotvalid' => 'Sorry, the email address you entered is invalid on this system',
			'registration:passwordnotvalid' => 'Sorry, the password you entered is invalid on this system',
			'registration:usernamenotvalid' => 'Sorry, the username you entered is invalid on this system',

			'adduser' => "Add User",
			'adduser:ok' => "You have successfully added a new user.",
			'adduser:bad' => "The new user could not be created.",

			'item:object:reported_content' => "Reported items",

			'user:set:name' => "Account name settings",
			'user:name:label' => "Your name",
			'user:name:success' => "Successfully changed your name on the system.",
			'user:name:fail' => "Could not change your name on the system.",

			'user:set:password' => "帳號密碼",
			'user:password:label' => "新密碼",
			'user:password2:label' => "再次輸入密碼",
			'user:password:success' => "密碼已經修改",
			'user:password:fail' => "無法修改密碼",
			'user:password:fail:notsame' => "兩次輸入的密碼不符",
			'user:password:fail:tooshort' => "密碼太短了！",

			'user:set:language' => "語言設定",
			'user:language:label' => "您的語言",
			'user:language:success' => "Your language settings have been updated.",
			'user:language:fail' => "Your language settings could not be saved.",

			'user:username:notfound' => '找不到帳號 %s',

			'user:password:lost' => '忘記密碼',
			'user:password:resetreq:success' => 'Successfully requested a new password, email sent',
			'user:password:resetreq:fail' => 'Could not request a new password.',

			'user:password:text' => 'To generate a new password, enter your username below. We will send the address of a unique verification page to you via email click on the link in the body of the message and a new password will be sent to you.',

			'user:persistent' => '記住我',
		/**
		 * Administration
		 */

			'admin:configuration:success' => "Your settings have been saved.",
			'admin:configuration:fail' => "Your settings could not be saved.",

			'admin' => "管理",
			'admin:description' => "The admin panel allows you to control all aspects of the system, from user management to how plugins behave. Choose an option below to get started.",

			'admin:user' => "User Administration",
			'admin:user:description' => "This admin panel allows you to control user settings for your site. Choose an option below to get started.",
			'admin:user:adduser:label' => "Click here to add a new user...",
			'admin:user:opt:linktext' => "Configure users...",
			'admin:user:opt:description' => "Configure users and account information. ",

			'admin:site' => "Site Administration",
			'admin:site:description' => "This admin panel allows you to control global settings for your site. Choose an option below to get started.",
			'admin:site:opt:linktext' => "Configure site...",
			'admin:site:opt:description' => "Configure the site technical and non-technical settings. ",
			'admin:site:access:warning' => "Changing the access setting only affects the permissions on content created in the future.",

			'admin:plugins' => "Tool Administration",
			'admin:plugins:description' => "This admin panel allows you to control and configure tools installed on your site.",
			'admin:plugins:opt:linktext' => "Configure tools...",
			'admin:plugins:opt:description' => "Configure the tools installed on the site. ",
			'admin:plugins:label:author' => "Author",
			'admin:plugins:label:copyright' => "Copyright",
			'admin:plugins:label:licence' => "Licence",
			'admin:plugins:label:website' => "URL",
			'admin:plugins:label:moreinfo' => 'more info',
			'admin:plugins:label:version' => 'Version',
			'admin:plugins:warning:elggversionunknown' => 'Warning: This plugin does not specify a compatible Elgg version.',
			'admin:plugins:warning:elggtoolow' => 'Warning: This plugin requires a later version of Elgg!',
			'admin:plugins:reorder:yes' => "Plugin %s was reordered successfully.",
			'admin:plugins:reorder:no' => "Plugin %s could not be reordered.",
			'admin:plugins:disable:yes' => "Plugin %s was disabled successfully.",
			'admin:plugins:disable:no' => "Plugin %s could not be disabled.",
			'admin:plugins:enable:yes' => "Plugin %s was enabled successfully.",
			'admin:plugins:enable:no' => "Plugin %s could not be enabled.",

			'admin:statistics' => "Statistics",
			'admin:statistics:description' => "This is an overview of statistics on your site. If you need more detailed statistics, a professional administration feature is available.",
			'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'admin:statistics:opt:linktext' => "View statistics...",
			'admin:statistics:label:basic' => "Basic site statistics",
			'admin:statistics:label:numentities' => "Entities on site",
			'admin:statistics:label:numusers' => "Number of users",
			'admin:statistics:label:numonline' => "Number of users online",
			'admin:statistics:label:onlineusers' => "Users online now",
			'admin:statistics:label:version' => "Elgg version",
			'admin:statistics:label:version:release' => "Release",
			'admin:statistics:label:version:version' => "Version",

			'admin:user:label:search' => "Find users:",
			'admin:user:label:seachbutton' => "搜尋",

			'admin:user:ban:no' => "Can not ban user",
			'admin:user:ban:yes' => "User banned.",
			'admin:user:unban:no' => "Can not unban user",
			'admin:user:unban:yes' => "User un-banned.",
			'admin:user:delete:no' => "Can not delete user",
			'admin:user:delete:yes' => "User deleted",

			'admin:user:resetpassword:yes' => "Password reset, user notified.",
			'admin:user:resetpassword:no' => "Password could not be reset.",

			'admin:user:makeadmin:yes' => "User is now an admin.",
			'admin:user:makeadmin:no' => "We could not make this user an admin.",

			'admin:user:removeadmin:yes' => "User is no longer an admin.",
			'admin:user:removeadmin:no' => "We could not remove administrator privileges from this user.",

		/**
		 * User settings
		 */
			'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",

			'usersettings:statistics' => "您的統計資訊",
			'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
			'usersettings:statistics:opt:linktext' => "帳號統計",

			'usersettings:user' => "Your settings",
			'usersettings:user:opt:description' => "This allows you to control user settings.",
			'usersettings:user:opt:linktext' => "修改您的設定",

			'usersettings:plugins' => "功能",
			'usersettings:plugins:opt:description' => "Configure settings (if any) for your active tools.",
			'usersettings:plugins:opt:linktext' => "設定您的功能",

			'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
			'usersettings:statistics:label:numentities' => "Your entities",

			'usersettings:statistics:yourdetails' => "您的資訊",
			'usersettings:statistics:label:name' => "全名",
			'usersettings:statistics:label:email' => "Email",
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

			'up' => '往上',
			'down' => '往下',
			'top' => '頁首',
			'bottom' => '頁底',

			'invite' => "邀請",

			'resetpassword' => "重設密碼",
			'makeadmin' => "Make admin",
			'removeadmin' => "Remove admin",

			'option:yes' => "是",
			'option:no' => "否",

			'unknown' => '未知',

			'active' => '啟用',
			'total' => '總計',

			'learnmore' => "Click here to learn more.",

			'content' => "content",
			'content:latest' => 'Latest activity',
			'content:latest:blurb' => 'Alternatively, click here to view the latest content from across the site.',

			'link:text' => '檢視連結',

			'enableall' => 'Enable All',
			'disableall' => 'Disable All',

		/**
		 * Generic questions
		 */

			'question:areyousure' => 'Are you sure?',

		/**
		 * Generic data words
		 */

			'title' => "標題",
			'description' => "描述",
			'tags' => "標籤",
			'spotlight' => "焦點",
			'all' => "所有",

			'by' => 'by',

			'annotations' => "Annotations",
			'relationships' => "Relationships",
			'metadata' => "Metadata",

		/**
		 * Input / output strings
		 */

			'deleteconfirm' => "Are you sure you want to delete this item?",
			'fileexists' => "A file has already been uploaded. To replace it, select it below:",

		/**
		 * User add
		 */

			'useradd:subject' => 'User account created',
			'useradd:body' => '
%s,

A user account has been created for you at %s. To log in, visit:

	%s

And log in with these user credentials:

	Username: %s
	Password: %s

Once you have logged in, we highly recommend that you change your password.
',

	    /**
         * System messages
         **/

			'systemmessages:dismiss' => "點選這裡隱藏",


		/**
		 * Import / export
		 */
			'importsuccess' => "Import of data was successful",
			'importfail' => "OpenDD import of data failed.",

		/**
		 * Time
		 */

			'friendlytime:justnow' => "just now",
			'friendlytime:minutes' => "%s minutes ago",
			'friendlytime:minutes:singular' => "a minute ago",
			'friendlytime:hours' => "%s hours ago",
			'friendlytime:hours:singular' => "an hour ago",
			'friendlytime:days' => "%s days ago",
			'friendlytime:days:singular' => "yesterday",

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

			'installation:error:htaccess' => "Elgg requires a file called .htaccess to be set in the root directory of its installation. We tried to create it for you, but Elgg doesn't have permission to write to that directory.

Creating this is easy. Copy the contents of the textbox below into a text editor and save it as .htaccess

",
			'installation:error:settings' => "Elgg couldn't find its settings file. Most of Elgg's settings will be handled for you, but we need you to supply your database details. To do this:

1. Rename engine/settings.example.php to settings.php in your Elgg installation.

2. Open it with a text editor and enter your MySQL database details. If you don't know these, ask your system administrator or technical support for help.

Alternatively, you can enter your database settings below and we will try and do this for you...",

			'installation:error:configuration' => "Once you've corrected any configuration issues, press reload to try again.",

			'installation' => "Installation",
			'installation:success' => "Elgg's database was installed successfully.",
			'installation:configuration:success' => "Your initial configuration settings have been saved. Now register your initial user; this will be your first system administrator.",

			'installation:settings' => "System settings",
			'installation:settings:description' => "Now that the Elgg database has been successfully installed, you need to enter a couple of pieces of information to get your site fully up and running. We've tried to guess where we could, but <b>you should check these details.</b>",

			'installation:settings:dbwizard:prompt' => "Enter your database settings below and hit save:",
			'installation:settings:dbwizard:label:user' => "Database user",
			'installation:settings:dbwizard:label:pass' => "Database password",
			'installation:settings:dbwizard:label:dbname' => "Elgg database",
			'installation:settings:dbwizard:label:host' => "Database hostname (usually 'localhost')",
			'installation:settings:dbwizard:label:prefix' => "Database table prefix (usually 'elgg')",

			'installation:settings:dbwizard:savefail' => "We were unable to save the new settings.php. Please save the following file as engine/settings.php using a text editor.",

			'installation:sitename' => "The name of your site (eg \"My social networking site\"):",
			'installation:sitedescription' => "Short description of your site (optional)",
			'installation:wwwroot' => "The site URL, followed by a trailing slash:",
			'installation:path' => "The full path to your site root on your disk, followed by a trailing slash:",
			'installation:dataroot' => "The full path to the directory where uploaded files will be stored, followed by a trailing slash:",
			'installation:dataroot:warning' => "You must create this directory manually. It should sit in a different directory to your Elgg installation.",
			'installation:sitepermissions' => "The default access permissions:",
			'installation:language' => "The default language for your site:",
			'installation:debug' => "Debug mode provides extra information which can be used to diagnose faults, however it can slow your system down so should only be used if you are having problems:",
			'installation:debug:label' => "Turn on debug mode",
			'installation:httpslogin' => "Enable this to have user logins performed over HTTPS. You will need to have https enabled on your server for this to work.",
			'installation:httpslogin:label' => "Enable HTTPS logins",
			'installation:usage' => "This option lets Elgg send anonymous usage statistics back to Curverider.",
			'installation:usage:label' => "Send anonymous usage statistics",
			'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",

			'installation:siteemail' => "Site email address (used when sending system emails)",

			'installation:disableapi' => "The RESTful API is a flexible and extensible interface that enables applications to use certain Elgg features remotely.",
			'installation:disableapi:label' => "Enable the RESTful API",

			'installation:allow_user_default_access:description' => "If checked, individual users will be allowed to set their own default access level that can over-ride the system default access level.",
			'installation:allow_user_default_access:label' => "Allow user default access",

			'installation:simplecache:description' => "The simple cache increases performance by caching static content including some CSS and JavaScript files. Normally you will want this on.",
			'installation:simplecache:label' => "Use simple cache (recommended)",

			'installation:viewpathcache:description' => "The view filepath cache decreases the loading times of plugins by caching the location of their views.",
			'installation:viewpathcache:label' => "Use view filepath cache (recommended)",

			'upgrading' => 'Upgrading',
			'upgrade:db' => 'Your database was upgraded.',
			'upgrade:core' => 'Your elgg installation was upgraded',

		/**
		 * Welcome
		 */

			'welcome' => "歡迎",
			'welcome:user' => '歡迎 %s',
			'welcome_message' => "Welcome to this Elgg installation.",

		/**
		 * Emails
		 */
			'email:settings' => "Email settings",
			'email:address:label' => "Your email address",

			'email:save:success' => "New email address saved, verification requested.",
			'email:save:fail' => "Your new email address could not be saved.",

			'friend:newfriend:subject' => "%s has made you a friend!",
			'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

	%s

You cannot reply to this email.",



			'email:resetpassword:subject' => "Password reset!",
			'email:resetpassword:body' => "Hi %s,

Your password has been reset to: %s",


			'email:resetreq:subject' => "Request for new password.",
			'email:resetreq:body' => "Hi %s,

Somebody (from the IP address %s) has requested a new password for their account.

If you requested this click on the link below, otherwise ignore this email.

%s
",

		/**
		 * user default access
		 */

		'default_access:settings' => "Your default access level",
		'default_access:label' => "Default access",
		'user:default_access:success' => "Your new default access level was saved.",
		'user:default_access:failure' => "Your new default access level could not be saved.",

		/**
		 * XML-RPC
		 */
			'xmlrpc:noinputdata'	=>	"Input data missing",

		/**
		 * Comments
		 */

			'comments:count' => "%s 個評論",

			'riveraction:annotation:generic_comment' => '%s 個評論於 %s',

			'generic_comments:add' => "新增評論",
			'generic_comments:text' => "評論",
			'generic_comment:posted' => "Your comment was successfully posted.",
			'generic_comment:deleted' => "Your comment was successfully deleted.",
			'generic_comment:blank' => "Sorry; you need to actually put something in your comment before we can save it.",
			'generic_comment:notfound' => "Sorry; we could not find the specified item.",
			'generic_comment:notdeleted' => "Sorry; we could not delete this comment.",
			'generic_comment:failure' => "An unexpected error occurred when adding your comment. Please try again.",

			'generic_comment:email:subject' => 'You have a new comment!',
			'generic_comment:email:body' => "You have a new comment on your item \"%s\" from %s. It reads:


%s


To reply or view the original item, click here:

	%s

To view %s's profile, click here:

	%s

You cannot reply to this email.",

		/**
		 * Entities
		 */
			'entity:default:strapline' => 'Created %s by %s',
			'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',

			'entity:delete:success' => 'Entity %s has been deleted',
			'entity:delete:fail' => 'Entity %s could not be deleted',


		/**
		 * Action gatekeeper
		 */
			'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
			'actiongatekeeper:tokeninvalid' => "We encountered an error (token mismatch). This probably means that the page you were using expired. Please try again.",
			'actiongatekeeper:timeerror' => 'The page you were using has expired. Please refresh and try again.',
			'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',

		/**
		 * Word blacklists
		 */
			'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

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
			"zh" => "中文",
			"zu" => "Zulu",
	);

	add_translation("zh",$chinese);