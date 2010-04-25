<?php
	/**
	 * Elgg groups plugin language pack
	 *
	 * @package ElggGroups
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'groups' => "群組",
			'groups:owned' => "您管理的群組",
			'groups:yours' => "您的群組",
			'groups:user' => "%s 的群組",
			'groups:all' => "所有群組",
			'groups:new' => "建立群組",
			'groups:edit' => "編輯群組",
			'groups:delete' => '刪除群組',
			'groups:membershiprequests' => '管理加入的請求',
			'groups:invitations' => '群組的邀請',

			'groups:icon' => '群組圖標(如果不變更, 請留下空白)',
			'groups:name' => '群組名稱',
			'groups:username' => '群組簡短名稱(會顯示在連結中, 限使用英文字母)',
			'groups:description' => '介紹',
			'groups:briefdescription' => '簡介',
			'groups:interests' => '標籤',
			'groups:website' => '網站',
			'groups:members' => '成員',
			'groups:membership' => "群組成員的權限權限",
			'groups:access' => "存取權限",
			'groups:owner' => "管理員",
	        'groups:widget:num_display' => '顯示的群組數',
	        'groups:widget:membership' => '群組成員',
	        'groups:widgets:description' => '在您的個人資料中, 顯示您加入的群組',
			'groups:noaccess' => '無法存取群組',
			'groups:cantedit' => '您無法編輯這個群組',
			'groups:saved' => '群組已儲存',
			'groups:featured' => '推薦的群組',
			'groups:makeunfeatured' => '不推薦',
			'groups:makefeatured' => '推薦',
			'groups:featuredon' => '您已經將這個群組設為推荐.',
			'groups:unfeature' => '您已經將這個群組從推荐清單中移除',
			'groups:joinrequest' => '申請成為會員',
			'groups:join' => '加入群組',
			'groups:leave' => '取消群組',
			'groups:invite' => '邀請朋友',
			'groups:inviteto' => "邀請朋友到'%s'",
			'groups:nofriends' => "沒有任何朋友尚未被邀請加入這個群組.",
			'groups:viagroups' => "透過群組",
			'groups:group' => "群組",
			'groups:search:tags' => "標籤",

			'groups:notfound' => "未發現群組",
			'groups:notfound:details' => "要求的群組不存在或是無法存取",

			'groups:requests:none' => '目前沒有尚未核准的申請加入成員.',

			'groups:invitations:none' => '目前沒有尚未核准的邀請.',

			'item:object:groupforumtopic' => "討論的主題",
			
			'groupforumtopic:new' => "新的討論內容",

			'groups:count' => "建立群組",
			'groups:open' => "開啟群組",
			'groups:closed' => "關閉群組",
			'groups:member' => "成員",
			'groups:searchtag' => "利用標籤搜尋群組",


			/*
			 * Access
			 */
			'groups:access:private' => '關閉 - 使用者必須被邀請',
			'groups:access:public' => '開啟 - 所有的使用者都可以加入',
			'groups:closedgroup' => '群組屬於封閉性成員. 如果您想要加入, 請在功能表的連結上點擊"申請成為會員".',
			'groups:visibility' => '誰能看到這個群組?',

			/*
			   Group tools
			*/
			'groups:enablepages' => '啟用群組網頁',
			'groups:enableforum' => '啟用群組討論區',
			'groups:enablefiles' => '啟用群組檔案',
			'groups:yes' => '是',
			'groups:no' => '否',

			'group:created' => '由%s建立, %d張貼',
			'groups:lastupdated' => '最後更新 %s, 作者:%s',
			'groups:pages' => '群組pages',
			'groups:files' => '群組files',

			/*
			  Group forum strings
			*/

			'group:replies' => '回應',
			'groups:forum' => '群組討論',
			'groups:addtopic' => '新增主題',
			'groups:forumlatest' => '最新討論',
			'groups:latestdiscussion' => '最新討論',
			'groups:newest' => '最新',
			'groups:popular' => '熱門',
			'groupspost:success' => '您的訊息已經送出',
			'groups:alldiscussion' => '最新討論',
			'groups:edittopic' => '編輯主題',
			'groups:topicmessage' => '主題內容',
			'groups:topicstatus' => '主題狀態',
			'groups:reply' => '張貼評論',
			'groups:topic' => '主題',
			'groups:posts' => '內容',
			'groups:lastperson' => '最後一位成員',
			'groups:when' => '時間',
			'grouptopic:notcreated' => '尚未建立主題.',
			'groups:topicopen' => '開啟',
			'groups:topicclosed' => '關閉',
			'groups:topicresolved' => '已處理',
			'grouptopic:created' => '主題已建立.',
			'groupstopic:deleted' => '主題已刪除.',
			'groups:topicsticky' => '黏著',
			'groups:topicisclosed' => '主題已關閉.',
			'groups:topiccloseddesc' => '主題已關閉, 不接受新評論.',
			'grouptopic:error' => '無法建立群組主題. 請再試一次, 或洽系統管理員.',
			'groups:forumpost:edited' => "編輯論壇的內容成功.",
			'groups:forumpost:error' => "編輯論壇的內容出現問題.",
			'groups:privategroup' => '該群組屬於私人性質, 請申請成為會員.',
			'groups:notitle' => '群組必須具備稱呼',
			'groups:cantjoin' => '無法加入群組',
			'groups:cantleave' => '無法脫離群組',
			'groups:addedtogroup' => '成功將使用者加入群組',
			'groups:joinrequestnotmade' => '加入申請無法建立',
			'groups:joinrequestmade' => '加入群組的申請已成功建立',
			'groups:joined' => '成功加入群組!',
			'groups:left' => '成功脫離群組',
			'groups:notowner' => '抱歉, 您不是這個群組的管理者.',
			'groups:alreadymember' => '您已經是這個群組的成員!',
			'groups:userinvited' => '已經將邀請傳送給使用者.',
			'groups:usernotinvited' => '使用者無法被邀請.',
			'groups:useralreadyinvited' => '使用者已經被邀請過',
			'groups:updated' => "最近的評論",
			'groups:invite:subject' => "%s 您被邀請加入 %s!",
			'groups:started' => "發起人",
			'groups:joinrequest:remove:check' => '您確定要移除這個加入群組的邀請嗎?',
			'groups:invite:body' => "嗨, %s,

我們誠摯的邀請您加入'%s'群組, 請點擊以下部份進行確認:

%s",

			'groups:welcome:subject' => "歡迎來到 %s 群組!",
			'groups:welcome:body' => "嗨, %s!

您現在已正式成為'%s'群組的一員! 請點擊以下部份開始參與!

%s",

			'groups:request:subject' => "%s 申請加入 %s",
			'groups:request:body' => "嗨, %s,

%s 要求加入 '%s' 群組, 請點擊以下部份來檢視他的個人資料:

%s

或點擊以下部份接受他申請加入的要求:

%s",

            /*
				Forum river items
			*/

			'groups:river:member' => '現在是以下群組的成員',
			'groupforum:river:updated' => '%s 已經更新',
			'groupforum:river:update' => '討論的主題',
			'groupforum:river:created' => '%s 已經建立',
			'groupforum:river:create' => '已建立新的討論主題',
			'groupforum:river:posted' => '%s 發表了一篇新的評論',
			'groupforum:river:annotate:create' => '在這個討論的主題',
			'groupforum:river:postedtopic' => '%s 新增一個討論的主題',
			'groups:river:member' => '%s 現在是以下群組的成員',
			'groups:river:togroup' => '到一個群組',
			
			'groups:nowidgets' => '這個群組未定義任何小工具(widgets).',


			'groups:widgets:members:title' => '群組成員',
			'groups:widgets:members:description' => '列出群組成員.',
			'groups:widgets:members:label:displaynum' => '列出一個群組的成員.',
			'groups:widgets:members:label:pleaseedit' => '請設定這個小工具體(widget)的組態.',

			'groups:widgets:entities:title' => "群組中的物件",
			'groups:widgets:entities:description' => "列出儲存在這個群組的物件",
			'groups:widgets:entities:label:displaynum' => '列出該群組的物件.',
			'groups:widgets:entities:label:pleaseedit' => '請設定這個小工具(widget)的組態.',

			'groups:forumtopic:edited' => '論壇的主題編輯成功.',

			'groups:allowhiddengroups' => '您要將該群組設為私人(其他人不可見)的嗎?',

			/**
			 * Action messages
			 */
			'group:deleted' => '群組與群組的內容已被刪除',
			'group:notdeleted' => '群組無法被刪除',

			'grouppost:deleted' => '群組內容已被成功的刪除',
			'grouppost:notdeleted' => '群組內容無法被刪除',
			'groupstopic:deleted' => '主題已被刪除',
			'groupstopic:notdeleted' => '主題未被刪除',
			'grouptopic:blank' => '無主題',
			'grouptopic:notfound' => '無法找到主題',
			'grouppost:nopost' => '清空內容',
			'groups:deletewarning' => "您確定要刪除這個群組嗎? 這個動作無法復原!",

			'groups:joinrequestkilled' => '加入申請已經被刪除.',
	);

	add_translation("zh_tw",$traditionalChinese);
?>