<?php

	$chinese = array(

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
			'blog:yourfriends' => "Your friends' latest blogs",
			'blog:everyone' => "All site blogs",
			'blog:newpost' => "New blog post",
			'blog:via' => "via blog",
			'blog:read' => "Read blog",

			'blog:addpost' => "Write a blog post",
			'blog:editpost' => "Edit blog post",

			'blog:text' => "部落格內容",

			'blog:strapline' => "%s",

			'item:object:blog' => '部落格文章',

			'blog:never' => 'never',
			'blog:preview' => '預覽',

			'blog:draft:save' => '儲存草稿',
			'blog:draft:saved' => 'Draft last saved',
			'blog:comments:allow' => 'Allow comments',

			'blog:preview:description' => 'This is an unsaved preview of your blog post.',
			'blog:preview:description:link' => 'To continue editing or save your post, click here.',

			'blog:enableblog' => '啟用群組部落格',

			'blog:group' => '群組部落格',

         /**
	     * Blog river
	     **/

	        //generic terms to use
	        'blog:river:created' => "%s wrote",
	        'blog:river:updated' => "%s updated",
	        'blog:river:posted' => "%s posted",

	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "a new blog post titled",
	        'blog:river:update' => "a blog post titled",
	        'blog:river:annotate' => "a comment on this blog post",


		/**
		 * Status messages
		 */

			'blog:posted' => "Your blog post was successfully posted.",
			'blog:deleted' => "Your blog post was successfully deleted.",

		/**
		 * Error messages
		 */

			'blog:error' => 'Something went wrong. Please try again.',
			'blog:save:failure' => "Your blog post could not be saved. Please try again.",
			'blog:blank' => "Sorry; you need to fill in both the title and body before you can make a post.",
			'blog:notfound' => "Sorry; we could not find the specified blog post.",
			'blog:notdeleted' => "Sorry; we could not delete this blog post.",

	);

	add_translation("zh",$chinese);

?>