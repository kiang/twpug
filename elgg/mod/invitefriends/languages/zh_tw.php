<?php

	/**
	 * Elgg invite page
	 *
	 * @package ElggFile
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @link http://elgg.org/
	 */

	$traditionalChinese = array(

		'friends:invite' => '邀請朋友',
		'invitefriends:introduction' => '邀請朋友加入您所在的社群, 請在底下輸入他們的電子郵件地址(每行一位):',
		'invitefriends:message' => '請輸入他們收到的邀請函中看到的訊息:',
		'invitefriends:subject' => '來自 %s 的邀請',

		'invitefriends:success' => '您的朋友已經被邀請.',
		'invitefriends:email_error' => '邀請函已送出, 但以下的郵件地址不正確: %s',
		'invitefriends:failure' => '您的朋友無法被邀請.',

		'invitefriends:message:default' => '
Hi,

我想邀請你加入我們在 %s 的社群',
		'invitefriends:email' => '
 %s 的會員 %s 邀請您的參與，他提到：

%s

要加入我們，請點選連結：

	%s

您在建立帳號後會自動成為他們的朋友',

	);

	add_translation("zh_tw",$traditionalChinese);
?>