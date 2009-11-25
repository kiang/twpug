<?php
	/**
	 * Elgg pages plugin language pack
	 *
	 * @package ElggPages
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'pages' => "文章",
			'pages:yours' => "您的文章",
			'pages:user' => "文章首頁",
			'pages:group' => "群組文章",
			'pages:all' => "所有文章",
			'pages:new' => "新增文章",
			'pages:groupprofile' => "群組文章",
			'pages:edit' => "編輯文章",
			'pages:delete' => "刪除文章",
			'pages:history' => "文章記錄",
			'pages:view' => "檢視文章",
			'pages:welcome' => "編輯歡迎訊息",
			'pages:welcomemessage' => "Welcome to this Elgg pages plugin. This feature allows you to create pages on any topic and select who can view them and edit them.",
			'pages:welcomeerror' => "There was a problem saving your welcome message",
			'pages:welcomeposted' => "Your welcome message has been posted",
			'pages:navigation' => "文章分頁",
	        'pages:via' => "via pages",
			'item:object:page_top' => 'Top-level pages',
			'item:object:page' => '文章',
			'item:object:pages_welcome' => 'Pages welcome blocks',
			'pages:nogroup' => '這個群組還沒有任何文章',
			'pages:more' => '更多文章',

		/**
		* River
		**/

		    'pages:river:annotate' => "a comment on this page",
		    'pages:river:created' => "%s 提到",
	        'pages:river:updated' => "%s updated",
	        'pages:river:posted' => "%s posted",
			'pages:river:create' => "a new page titled",
	        'pages:river:update' => "a page titled",
	        'page:river:annotate' => "a comment on this page",
	        'page_top:river:annotate' => "a comment on this page",

		/**
		 * Form fields
		 */

			'pages:title' => '文章標題',
			'pages:description' => '內容',
			'pages:tags' => '標籤',
			'pages:access_id' => '閱讀權限',
			'pages:write_access_id' => '寫入權限',

		/**
		 * Status and error messages
		 */
			'pages:noaccess' => 'No access to page',
			'pages:cantedit' => 'You can not edit this page',
			'pages:saved' => 'Pages saved',
			'pages:notsaved' => 'Page could not be saved',
			'pages:notitle' => 'You must specify a title for your page.',
			'pages:delete:success' => 'Your page was successfully deleted.',
			'pages:delete:failure' => 'The page could not be deleted.',

		/**
		 * Page
		 */
			'pages:strapline' => 'Last updated %s by %s',

		/**
		 * History
		 */
			'pages:revision' => 'Revision created %s by %s',

		/**
		 * Widget
		 **/

		    'pages:num' => 'Number of pages to display',
			'pages:widget:description' => "This is a list of your pages.",

		/**
		 * Submenu items
		 */
			'pages:label:view' => "檢視文章",
			'pages:label:edit' => "編輯文章",
			'pages:label:history' => "文章記錄",

		/**
		 * Sidebar items
		 */
			'pages:sidebar:this' => "這篇文章",
			'pages:sidebar:children' => "延伸文章",
			'pages:sidebar:parent' => "參考文章",

			'pages:newchild' => "建立延伸文章",
			'pages:backtoparent' => "回到 '%s'",
	);

	add_translation("zh_tw",$traditionalChinese);
?>