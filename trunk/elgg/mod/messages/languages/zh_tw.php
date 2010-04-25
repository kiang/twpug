<?php

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'messages' => "訊息",
            'messages:back' => "回到訊息",
			'messages:user' => "您的收件匣",
			'messages:sentMessages' => "寄件備份",
			'messages:posttitle' => "%s 的訊息： %s",
			'messages:inbox' => "收件匣",
			'messages:send' => "發送訊息",
			'messages:sent' => "寄件備份",
			'messages:message' => "訊息",
			'messages:title' => "標題",
			'messages:to' => "收件人",
            'messages:from' => "寄件人",
			'messages:fly' => "送出",
			'messages:replying' => "回覆訊息",
			'messages:inbox' => "收件匣",
			'messages:sendmessage' => "傳送訊息",
			'messages:compose' => "寄出訊息",
			'messages:sentmessages' => "發送訊息",
			'messages:recent' => "重送訊息",
            'messages:original' => "原始訊息",
            'messages:yours' => "您的訊息",
            'messages:answer' => "回覆",
			'messages:toggle' => '轉換全部',
			'messages:markread' => '標示為已讀',

			'messages:new' => '新訊息',

			'notification:method:site' => '網站',

			'messages:error' => '儲存訊息時出現問題. 請再試一次.',

			'item:object:messages' => '線上訊息',

		/**
		 * Status messages
		 */

			'messages:posted' => "您的訊息成功傳送.",
			'messages:deleted' => "您的訊息成功刪除.",
			'messages:markedread' => "您的訊息成功標示為已讀.",

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

			'messages:blank' => "抱歉; 在系統儲存前, 您需要在訊息的主體中放入一些內容.",
			'messages:notfound' => "抱歉; 系統無法找到特定的訊息.",
			'messages:notdeleted' => "抱歉; 系統無法刪除這個訊息.",
			'messages:nopermission' => "您沒有修改訊息的權限.",
			'messages:nomessages' => "沒有訊息要顯示.",
			'messages:user:nonexist' => "在使用者的資料庫中, 系統無法找到收件人.",
			'messages:user:blank' => "您未選取任何要傳送的對象.",

	);

	add_translation("zh_tw",$traditionalChinese);

?>