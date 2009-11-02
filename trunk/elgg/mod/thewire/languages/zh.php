<?php

	$chinese = array(

		/**
		 * Menu items and titles
		 */

			'thewire' => "碎碎念",
			'thewire:user' => "%s 的碎碎念",
			'thewire:posttitle' => "%s 的碎碎念在線上: %s",
			'thewire:everyone' => "所有碎碎念",

			'thewire:read' => "碎碎念文章",

			'thewire:strapline' => "%s",

			'thewire:add' => "發表到碎碎念",
		    'thewire:text' => "碎碎念文字",
			'thewire:reply' => "回覆",
			'thewire:via' => "透過",
			'thewire:wired' => "發表到線上",
			'thewire:charleft' => "(還可以輸入字數)",
			'item:object:thewire' => "碎碎念",
			'thewire:notedeleted' => "已刪除的碎碎念",
			'thewire:doing' => "在碎碎念可以輸入您現在的想法、正在做些什麼等等：",
			'thewire:newpost' => '新增碎碎念',
			'thewire:addpost' => '發表到碎碎念',


        /**
	     * The wire river
	     **/

	        //generic terms to use
	        'thewire:river:created' => "%s posted",

	        //these get inserted into the river links to take the user to the entity
	        'thewire:river:create' => "on the wire.",

	    /**
	     * Wire widget
	     **/

	        'thewire:sitedesc' => 'This widget shows the latest site notes posted to the wire',
	        'thewire:yourdesc' => 'This widget shows your latest notes posted to the wire',
	        'thewire:friendsdesc' => 'This widget will show the latest from your friends on the wire',
	        'thewire:friends' => 'Your friends on the wire',
	        'thewire:num' => 'Number of items to display',



		/**
		 * Status messages
		 */

			'thewire:posted' => "Your message was successfully posted to the wire.",
			'thewire:deleted' => "Your note was successfully deleted.",

		/**
		 * Error messages
		 */

			'thewire:blank' => "Sorry; you need to actually put something in the textbox before we can save it.",
			'thewire:notfound' => "Sorry; we could not find the specified note.",
			'thewire:notdeleted' => "Sorry; we could not delete this shout.",


		/**
		 * Settings
		 */
			'thewire:smsnumber' => "Your SMS number if different from your mobile number (mobile number must be set to public for the wire to be able to use it). All phone numbers must be in international format.",
			'thewire:channelsms' => "The number to send SMS messages to is <b>%s</b>",

	);

	add_translation("zh",$chinese);

?>