<?php

	$chinese = array(

		/**
		 * Menu items and titles
		 */

			'messageboard:board' => "留言板",
			'messageboard:messageboard' => "留言板",
			'messageboard:viewall' => "檢視全部",
			'messageboard:postit' => "留言",
			'messageboard:history' => "記錄",
			'messageboard:none' => "There is nothing on this message board yet",
			'messageboard:num_display' => "Number of messages to display",
			'messageboard:desc' => "This is a message board that you can put on your profile where other users can comment.",

			'messageboard:user' => "%s 的留言板",

			'messageboard:history' => "記錄",
			'messageboard:replyon' => 'reply on',

         /**
	     * Message board widget river
	     **/

	        'messageboard:river:annotate' => "%s has had a new comment posted on their message board.",
	        'messageboard:river:create' => "%s added the message board widget.",
	        'messageboard:river:update' => "%s updated their message board widget.",
	        'messageboard:river:added' => "%s posted on",
		    'messageboard:river:messageboard' => "message board",


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

	add_translation("zh",$chinese);

?>