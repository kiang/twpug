<?php

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'messages' => "線上訊息",
            'messages:back' => "回到線上訊息",
			'messages:user' => "您的收件匣",
			'messages:sentMessages' => "寄件備份",
			'messages:posttitle' => "%s 的訊息： %s",
			'messages:inbox' => "收件匣",
			'messages:send' => "發送訊息",
			'messages:sent' => "寄件備份",
			'messages:message' => "線上訊息",
			'messages:title' => "標題",
			'messages:to' => "收件人",
            'messages:from' => "寄件人",
			'messages:fly' => "送出",
			'messages:replying' => "回覆訊息",
			'messages:inbox' => "收件匣",
			'messages:sendmessage' => "Send a message",
			'messages:compose' => "Compose a message",
			'messages:sentmessages' => "Sent messages",
			'messages:recent' => "Recent messages",
            'messages:original' => "Original message",
            'messages:yours' => "Your message",
            'messages:answer' => "回覆",
			'messages:toggle' => 'Toggle all',
			'messages:markread' => 'Mark read',

			'messages:new' => 'New message',

			'notification:method:site' => 'Site',

			'messages:error' => 'There was a problem saving your message. Please try again.',

			'item:object:messages' => '線上訊息',

		/**
		 * Status messages
		 */

			'messages:posted' => "Your message was successfully sent.",
			'messages:deleted' => "Your messages were successfully deleted.",
			'messages:markedread' => "Your messages were successfully marked as read.",

		/**
		 * Email messages
		 */

			'messages:email:subject' => '您有新的訊息！',
			'messages:email:body' => " %s 寄了一封訊息給您：


%s


點選這裡檢視：

	%s

回覆 %s 一個訊息點這裡：

	%s

請不要直接回覆這封信！",

		/**
		 * Error messages
		 */

			'messages:blank' => "Sorry; you need to actually put something in the message body before we can save it.",
			'messages:notfound' => "Sorry; we could not find the specified message.",
			'messages:notdeleted' => "Sorry; we could not delete this message.",
			'messages:nopermission' => "You do not have permission to alter that message.",
			'messages:nomessages' => "There are no messages to display.",
			'messages:user:nonexist' => "We could not find the recipient in the user database.",
			'messages:user:blank' => "You did not select someone to send this to.",

	);

	add_translation("zh_tw",$traditionalChinese);

?>