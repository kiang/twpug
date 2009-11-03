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
		'invitefriends:introduction' => 'To invite friends to join you on this network, enter their email addresses below (one per line):',
		'invitefriends:message' => 'Enter a message they will receive with your invitation:',
		'invitefriends:subject' => '來自 %s 的邀請',

		'invitefriends:success' => 'Your friends were invited.',
		'invitefriends:failure' => 'Your friends could not be invited.',

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