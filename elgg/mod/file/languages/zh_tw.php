<?php
	/**
	 * Elgg file plugin language pack
	 *
	 * @package ElggFile
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 */

	$traditionalChinese = array(

		/**
		 * Menu items and titles
		 */

			'file' => "檔案",
			'files' => "檔案",
			'file:yours' => "您的檔案",
			'file:yours:friends' => "您朋友的檔案",
			'file:user' => "%s 的檔案",
			'file:friends' => "%s 朋友的檔案",
			'file:all' => "所有檔案",
			'file:edit' => "編輯檔案",
			'file:more' => "更多的檔案",
			'file:list' => "清單檢視",
			'file:group' => "群組檔案",
			'file:gallery' => "縮圖檢視",
			'file:gallery_list' => "縮圖或清單檢視",
			'file:num_files' => "顯示的檔案數",
			'file:user:gallery'=>'檢視 %s 的縮圖',
	        'file:via' => '透過檔案',
			'file:upload' => "上傳檔案",
			'file:replace' => '替換檔案的內容 (如果不要變更檔案, 請留下空白)',

			'file:newupload' => '新檔已上傳',

			'file:file' => "檔案",
			'file:title' => "標題",
			'file:desc' => "描述",
			'file:tags' => "標籤",

			'file:types' => "上傳檔案的型態",

			'file:type:all' => "所有檔案",
			'file:type:video' => "影片",
			'file:type:document' => "文件",
			'file:type:audio' => "音樂",
			'file:type:image' => "圖片",
			'file:type:general' => "一般",

			'file:user:type:video' => "%s的影片",
			'file:user:type:document' => "%s的文件",
			'file:user:type:audio' => "%s的音樂",
			'file:user:type:image' => "%s的圖片",
			'file:user:type:general' => "%s的一般檔案",

			'file:friends:type:video' => "朋友的影片",
			'file:friends:type:document' => "朋友的文件",
			'file:friends:type:audio' => "朋友的音樂",
			'file:friends:type:image' => "朋友的圖片",
			'file:friends:type:general' => "朋友的一般檔案",

			'file:widget' => "檔案小工具(widget)",
			'file:widget:description' => "最近檔案的陳列",

			'file:download' => "下載",

			'file:delete:confirm' => "您確定要刪除這個檔案?",

			'file:tagcloud' => "標籤雲",

			'file:display:number' => "顯示的檔案數",

			'file:river:created' => "%s已上傳",
			'file:river:item' => "一個檔案",
			'file:river:annotate' => "一個檔案的評論",

			'item:object:file' => '檔案',

	    /**
		 * Embed media
		 **/

		    'file:embed' => "嵌入的媒體",
		    'file:embedall' => "所有",

		/**
		 * Status messages
		 */

			'file:saved' => "檔案儲存成功.",
			'file:deleted' => "檔案刪除成功.",

		/**
		 * Error messages
		 */

			'file:none' => "目前系統無法找到任何檔案.",
			'file:uploadfailed' => "抱歉; 系統無法儲存檔案.",
			'file:downloadfailed' => "抱歉; 檔案目前無法使用.",
			'file:deletefailed' => "檔案目前無法刪除.",
			'file:noaccess' => "您沒有變更檔案旳權限",
			'file:cannotload' => "載入檔案時發生錯誤",
			'file:nofile' => "必須選取一個檔案",

	);

	add_translation("zh_tw",$traditionalChinese);
?>