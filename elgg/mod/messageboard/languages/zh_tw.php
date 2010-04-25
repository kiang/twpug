<?php

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'messageboard:board' => "留言板",
			'messageboard:messageboard' => "留言板",
			'messageboard:viewall' => "檢視全部",
			'messageboard:postit' => "留言",
			'messageboard:history' => "記錄",
			'messageboard:none' => "留言板尚無任何訊息",
			'messageboard:num_display' => "要顯示的訊息數",
			'messageboard:desc' => "這是一個可以放置在您個人資料中的留言板, 其他會員可以評論它.",

			'messageboard:user' => "%s 的留言板",

			'messageboard:history' => "記錄",
			'messageboard:replyon' => '回覆',

         /**
	     * Message board widget river
	     **/

	        'messageboard:river:annotate' => "%s 有一個新的評論發表在他們的留言板上.",
	        'messageboard:river:create' => "%s 新增留言板小工具(widget).",
	        'messageboard:river:update' => "%s 更新了他們的留言板小工具(widget).",
	        'messageboard:river:added' => "%s 發表",
		    'messageboard:river:messageboard' => "留言板",


		/**
		 * Status messages
		 */

			'messageboard:posted' => "You successfully posted on the message board.",
			'messageboard:deleted' => "You successfully deleted the message.",

		/**
		 * Email messages
		 */

			'messageboard:email:subject' => '您的留言板有新訊息！',
			'messageboard:email:body' => " %s 留了一封訊息給您：


%s


點選這裡檢視：

	%s

回覆 %s 訊息點這裡：

	%s

請不要直接回覆這封信！",

		/**
		 * Error messages
		 */

			'messageboard:blank' => "Sorry; you need to actually put something in the message area before we can save it.",
			'messageboard:notfound' => "Sorry; we could not find the specified item.",
			'messageboard:notdeleted' => "Sorry; we could not delete this message.",
			'messageboard:somethingwentwrong' => "Something went wrong when trying to save your message, make sure you actually wrote a message.",

			'messageboard:failure' => "An unexpected error occurred when adding your message. Please try again.",

	);

	add_translation("zh_tw",$traditionalChinese);

?>