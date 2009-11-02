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

    'defaultwidgets:admin:error' => 'Error: You are not logged in as an administrator',
	'defaultwidgets:admin:notfound' => 'Error: Page not found',
	'defaultwidgets:admin:loginfailure' => 'Warning: You are not currently logged is as an administrator',

	'defaultwidgets:update:success' => 'Your widget settings have been saved',
	'defaultwidgets:update:failed' => 'Error: settings have not been saved',
	'defaultwidgets:update:noparams' => 'Error: incorrect form parameters',

	'defaultwidgets:profile:title' => 'Set default widgets for new user profile pages',
	'defaultwidgets:dashboard:title' => 'Set default widgets for new user dashboard pages',
);

add_translation ( "zh", $chinese );
