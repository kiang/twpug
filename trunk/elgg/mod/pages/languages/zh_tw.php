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
			'pages:welcomemessage' => "歡迎使用Elgg首頁插件. 它的功能可以讓您在任何主題建立頁面, 並選擇哪些人可以檢視與編輯它們.",
			'pages:welcomeerror' => "在儲存您的歡迎訊息時出現問題",
			'pages:welcomeposted' => "您的歡迎訊息已發佈d",
			'pages:navigation' => "網頁導覽",
	        'pages:via' => "透過網頁",
			'item:object:page_top' => '頂層網頁',
			'item:object:page' => '文章',
			'item:object:pages_welcome' => '網頁的歡迎區塊',
			'pages:nogroup' => '這個群組還沒有任何文章',
			'pages:more' => '更多文章',

		/**
		* River
		**/

		    'pages:river:annotate' => "這個網頁的評論",
		    'pages:river:created' => "%s 提到",
	        'pages:river:updated' => "%s 已更新",
	        'pages:river:posted' => "%s 已發佈",
			'pages:river:create' => "新的網頁主題",
	        'pages:river:update' => "網頁主題",
	        'page:river:annotate' => "網頁的評論",
	        'page_top:river:annotate' => "該網頁的評論",

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
			'pages:noaccess' => '無法存取網頁',
			'pages:cantedit' => '您不能編輯本頁',
			'pages:saved' => '網頁已儲存',
			'pages:notsaved' => '網頁無法儲存',
			'pages:notitle' => '您必須設定網頁的標題.',
			'pages:delete:success' => '網頁刪除成功.',
			'pages:delete:failure' => '網頁無法刪除.',

		/**
		 * Page
		 */
			'pages:strapline' => '最後更新 %s 由 %s',

		/**
		 * History
		 */
			'pages:revision' => '新版本 %s 由 %s',

		/**
		 * Widget
		 **/

		    'pages:num' => '顯示的網頁數',
			'pages:widget:description' => "這是網頁的清單.",

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