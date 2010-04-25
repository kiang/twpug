<?php
	/**
	 * Elgg profile plugin language pack
	 *
	 * @package ElggProfile
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2010
	 * @link http://elgg.com/
	 */
	 
	$traditionalChinese = array(

	/**
	 * Profile
	 */

		'profile' => "個人資料",
		'profile:edit:default' => '取代個人資料中的欄位',
		'profile:preview' => '預覽',

	/**
	 * Profile menu items and titles
	 */

		'profile:yours' => "您的個人資料",
		'profile:user' => "%s的個人資料",

		'profile:edit' => "編輯個人資料",
		'profile:profilepictureinstructions' => "個人圖片是顯示在您個人資料網頁中的影像. <br /> 您可以隨時變更它. (接受的檔案格式: GIF, JPG 或 PNG)",
		'profile:icon' => "個人圖片",
		'profile:createicon' => "建立您的代表圖標",
		'profile:currentavatar' => "目前的代表圖標",
		'profile:createicon:header' => "個人圖片",
		'profile:profilepicturecroppingtool' => "個人圖片縮圖工具",
		'profile:createicon:instructions' => "建立並拖拉底下的方型, 以符合您要縮放的圖片大小. 縮圖的預覽會顯示在右方的方塊上.  如果您對縮圖滿意, 請點擊 '建立代表圖標'. 縮圖會做為代表圖標在整個網站中使用. ",

		'profile:editdetails' => "編輯細節",
		'profile:editicon' => "編輯個人圖示",

		'profile:aboutme' => "關於我",
		'profile:description' => "關於我",
		'profile:briefdescription' => "簡短的描述",
		'profile:location' => "位置",
		'profile:skills' => "技能",
		'profile:interests' => "興趣",
		'profile:contactemail' => "電子郵件",
		'profile:phone' => "電話號碼",
		'profile:mobile' => "手機號碼",
		'profile:website' => "網站名稱",

		'profile:banned' => '使用者帳號已被凍結.',
		'profile:deleteduser' => '刪除使用者',

		'profile:river:update' => "%s 更新了他們的個人資料",
		'profile:river:iconupdate' => "%s 更新了他們的個人圖示",

		'profile:label' => "個人資料標籤",
		'profile:type' => "個人資料型態",

		'profile:editdefault:fail' => '預設個人資料無法被儲存',
		'profile:editdefault:success' => '項目已經成功的加入到預設的個人資料',


		'profile:editdefault:delete:fail' => '移除預設的個人資料欄位失敗',
		'profile:editdefault:delete:success' => '預設的個人資料項目已刪除!',

		'profile:defaultprofile:reset' => '已重設預設的系統個人資料',

		'profile:resetdefault' => '重設預設的個人資料',
		'profile:explainchangefields' => '您可以透過底下的表單, 用自己的資料取代現存的個人資料欄位. 首先指定一個標籤給新的個人資料欄位, 例如, \'最喜愛的團隊\'. 接下來您需要選取欄位的型態, 例如, tags, url, text等. 任何時候您可以回復到預設的個人資料設定.',


	/**
	 * Profile status messages
	 */

		'profile:saved' => "您的個人資料儲存成功.",
		'profile:icon:uploaded' => "您的個人圖片上載成功.",

	/**
	 * Profile error messages
	 */

		'profile:noaccess' => "您沒有編輯個人資料的權限.",
		'profile:notfound' => "抱歉, 系統無法找到指定的個人資料.",
		'profile:icon:notfound' => "抱歉, 在上傳您的個人圖片時發生問題.",
		'profile:icon:noaccess' => '您無法變更個人圖示',
		'profile:field_too_long' => '由於"%s"的單元過長, 無法儲存您的個人資料.',

	);

	add_translation("zh_tw",$traditionalChinese);

?>