<?php

$chinese = array (

	/**
	 * Nice name for the entity (shown in admin panel)
	 */
	'item:object:moddefaultwidgets' => '預設區塊設定',

	/**
	 * Menu items
	 */
	'defaultwidgets:menu:profile' => '預設個人資料區塊',
    'defaultwidgets:menu:dashboard' => '預設個人首頁區塊',

    'defaultwidgets:admin:error' => '錯誤: 您尚未登入為系統管理者',
	'defaultwidgets:admin:notfound' => '錯誤: 找不到網頁',
	'defaultwidgets:admin:loginfailure' => '警告: 您目前尚未登入為系統管理者',

	'defaultwidgets:update:success' => '您的 widget 設定已被儲存成功',
	'defaultwidgets:update:failed' => '錯誤: 設定尚未被儲存',
	'defaultwidgets:update:noparams' => '錯誤: 不正確的表單參數',

	'defaultwidgets:profile:title' => '將預設的 widgets 設定給新使用者的個人資料頁面',
	'defaultwidgets:dashboard:title' => '將預設的 widgets 設定給新使用者的儀表板頁面',
);

add_translation ( "zh", $chinese );
