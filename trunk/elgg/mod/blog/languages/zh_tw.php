<?php

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'blog' => "部落格",
			'blogs' => "部落格",
			'blog:user' => "%s 的部落格",
			'blog:user:friends' => "%s 朋友的部落格",
			'blog:your' => "您的部落格",
			'blog:posttitle' => "%s 的部落格：  %s",
			'blog:friends' => "朋友的部落格",
			'blog:yourfriends' => "您朋友最後發表的部落格文章",
			'blog:everyone' => "整個網站的部落格文章",
			'blog:newpost' => "新的部落格文章",
			'blog:via' => "透過部落格",
			'blog:read' => "閱讀部落格",

			'blog:addpost' => "寫一篇部落格文章",
			'blog:editpost' => "編輯部落格文章",

			'blog:text' => "部落格內容",

			'blog:strapline' => "%s",

			'item:object:blog' => '部落格文章',

			'blog:never' => '永遠不',
			'blog:preview' => '預覽',

			'blog:draft:save' => '儲存草稿',
			'blog:draft:saved' => '最後儲存的草稿',
			'blog:comments:allow' => '允許發表評論',

			'blog:preview:description' => '這是一篇在您部落格文章中, 尚未儲存的預覽內容.',
			'blog:preview:description:link' => '要繼續編輯或是儲存您的文章, 請點擊這裏.',

			'blog:enableblog' => '啟用群組部落格',

			'blog:group' => '群組部落格',

         /**
	     * Blog river
	     **/

	        //generic terms to use
	        'blog:river:created' => "%s 寫入",
	        'blog:river:updated' => "%s 更新",
	        'blog:river:posted' => "%s 張貼",

	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "一篇部落格文章剛被命名",
	        'blog:river:update' => "一篇部落格文章已被命名",
	        'blog:river:annotate' => "有人針對此部落格發表了一篇評論",


		/**
		 * Status messages
		 */

			'blog:posted' => "您的部落格文章已被發表成功.",
			'blog:deleted' => "您的部落格文章已被刪除成功",

		/**
		 * Error messages
		 */

			'blog:error' => '系統發生錯誤. 請再試一次.',
			'blog:save:failure' => "您的部落格文章無法被儲存. 請再試一次.",
			'blog:blank' => "抱歉; 在您發表文章之前您必須填寫文章的標題及內容.",
			'blog:notfound' => "抱歉; 系統無法找到您所指定的部落格文章.",
			'blog:notdeleted' => "抱歉; 系統無法刪除這筆部落格文章.",

	);

	add_translation("zh_tw",$traditionalChinese);

?>