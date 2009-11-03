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
			'groups:membershiprequests' => 'Manage join requests',

			'groups:icon' => 'Group icon (leave blank to leave unchanged)',
			'groups:name' => '群組名稱',
			'groups:username' => 'Group short name (displayed in URLs, alphanumeric characters only)',
			'groups:description' => '介紹',
			'groups:briefdescription' => '簡介',
			'groups:interests' => '標籤',
			'groups:website' => '網站',
			'groups:members' => '成員',
			'groups:membership' => "Group membership permissions",
			'groups:access' => "Access permissions",
			'groups:owner' => "管理員",
	        'groups:widget:num_display' => 'Number of groups to display',
	        'groups:widget:membership' => 'Group membership',
	        'groups:widgets:description' => 'Display the groups you are a member of on your profile',
			'groups:noaccess' => 'No access to group',
			'groups:cantedit' => 'You can not edit this group',
			'groups:saved' => 'Group saved',
			'groups:featured' => '推薦的群組',
			'groups:makeunfeatured' => 'Unfeature',
			'groups:makefeatured' => 'Make featured',
			'groups:featuredon' => 'You have made this group a featured one.',
			'groups:unfeature' => 'You have removed this group from the featured list',
			'groups:joinrequest' => 'Request membership',
			'groups:join' => '加入群組',
			'groups:leave' => '取消群組',
			'groups:invite' => '邀請朋友',
			'groups:inviteto' => "Invite friends to '%s'",
			'groups:nofriends' => "You have no friends left who have not been invited to this group.",
			'groups:viagroups' => "via groups",
			'groups:group' => "Group",

			'groups:notfound' => "Group not found",
			'groups:notfound:details' => "The requested group either does not exist or you do not have access to it",

			'groups:requests:none' => 'There are no outstanding membership requests at this time.',

			'item:object:groupforumtopic' => "Discussion topics",

			'groupforumtopic:new' => "New discussion post",

			'groups:count' => "groups created",
			'groups:open' => "open group",
			'groups:closed' => "closed group",
			'groups:member' => "members",
			'groups:searchtag' => "Search for groups by tag",


			/*
			 * Access
			 */
			'groups:access:private' => 'Closed - Users must be invited',
			'groups:access:public' => 'Open - Any user may join',
			'groups:closedgroup' => 'This group has a closed membership. To ask to be added, click the "request membership" menu link.',
			'groups:visibility' => 'Who can see this group?',

			/*
			   Group tools
			*/
			'groups:enablepages' => 'Enable group pages',
			'groups:enableforum' => 'Enable group discussion',
			'groups:enablefiles' => 'Enable group files',
			'groups:yes' => 'yes',
			'groups:no' => 'no',

			'group:created' => 'Created %s with %d posts',
			'groups:lastupdated' => 'Last updated %s by %s',
			'groups:pages' => 'Group pages',
			'groups:files' => 'Group files',

			/*
			  Group forum strings
			*/

			'group:replies' => '回應',
			'groups:forum' => 'Group discussion',
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
			'groups:reply' => 'Post a comment',
			'groups:topic' => 'Topic',
			'groups:posts' => 'Posts',
			'groups:lastperson' => 'Last person',
			'groups:when' => '時間',
			'grouptopic:notcreated' => 'No topics have been created.',
			'groups:topicopen' => '開啟',
			'groups:topicclosed' => '關閉',
			'groups:topicresolved' => '已處理',
			'grouptopic:created' => 'Your topic was created.',
			'groupstopic:deleted' => 'The topic has been deleted.',
			'groups:topicsticky' => 'Sticky',
			'groups:topicisclosed' => 'This topic is closed.',
			'groups:topiccloseddesc' => 'This topic has now been closed and is not accepting new comments.',
			'grouptopic:error' => 'Your group topic could not be created. Please try again or contact a system administrator.',
			'groups:forumpost:edited' => "You have successfully edited the forum post.",
			'groups:forumpost:error' => "There was a problem editing the forum post.",
			'groups:privategroup' => 'This group is private, requesting membership.',
			'groups:notitle' => 'Groups must have a title',
			'groups:cantjoin' => 'Can not join group',
			'groups:cantleave' => 'Could not leave group',
			'groups:addedtogroup' => 'Successfully added the user to the group',
			'groups:joinrequestnotmade' => 'Join request could not be made',
			'groups:joinrequestmade' => 'Request to join group successfully made',
			'groups:joined' => 'Successfully joined group!',
			'groups:left' => 'Successfully left group',
			'groups:notowner' => 'Sorry, you are not the owner of this group.',
			'groups:alreadymember' => 'You are already a member of this group!',
			'groups:userinvited' => 'User has been invited.',
			'groups:usernotinvited' => 'User could not be invited.',
			'groups:useralreadyinvited' => 'User has already been invited',
			'groups:updated' => "Last comment",
			'groups:invite:subject' => "%s you have been invited to join %s!",
			'groups:started' => "Started by",
			'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
			'groups:invite:body' => "Hi %s,

You have been invited to join the '%s' group, click below to confirm:

%s",

			'groups:welcome:subject' => "Welcome to the %s group!",
			'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' group! Click below to begin posting!

%s",

			'groups:request:subject' => "%s has requested to join %s",
			'groups:request:body' => "Hi %s,

%s has requested to join the '%s' group, click below to view their profile:

%s

or click below to confirm request:

%s",

            /*
				Forum river items
			*/

			'groups:river:member' => 'is now a member of',
			'groupforum:river:updated' => '%s has updated',
			'groupforum:river:update' => 'this discussion topic',
			'groupforum:river:created' => '%s has created',
			'groupforum:river:create' => 'a new discussion topic titled',
			'groupforum:river:posted' => '%s has posted a new comment',
			'groupforum:river:annotate:create' => 'on this discussion topic',
			'groupforum:river:postedtopic' => '%s has started a new discussion topic titled',
			'groups:river:member' => '%s is now a member of',

			'groups:nowidgets' => 'No widgets have been defined for this group.',


			'groups:widgets:members:title' => 'Group members',
			'groups:widgets:members:description' => 'List the members of a group.',
			'groups:widgets:members:label:displaynum' => 'List the members of a group.',
			'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

			'groups:widgets:entities:title' => "Objects in group",
			'groups:widgets:entities:description' => "List the objects saved in this group",
			'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
			'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

			'groups:forumtopic:edited' => 'Forum topic successfully edited.',

			'groups:allowhiddengroups' => 'Do you want to allow private (invisible) groups?',

			/**
			 * Action messages
			 */
			'group:deleted' => 'Group and group contents deleted',
			'group:notdeleted' => 'Group could not be deleted',

			'grouppost:deleted' => 'Group posting successfully deleted',
			'grouppost:notdeleted' => 'Group posting could not be deleted',
			'groupstopic:deleted' => 'Topic deleted',
			'groupstopic:notdeleted' => 'Topic not deleted',
			'grouptopic:blank' => 'No topic',
			'groups:deletewarning' => "Are you sure you want to delete this group? There is no undo!",

			'groups:joinrequestkilled' => 'The join request has been deleted.',
	);

	add_translation("zh_tw",$traditionalChinese);
?>