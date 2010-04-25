<?php
	/**
	 * Email user validation plugin language pack.
	 *
	 * @package ElggUserValidationByEmail
	 * @author Curverider Ltd
	 * @link http://elgg.com/
	 */

	$traditionalChinese = array(

		'email:validate:subject' => "%s 信箱驗證",
		'email:validate:body' => "嗨, %s,

請透過點選下面連結來驗證您的信箱：

%s
",
		'email:validate:success:subject' => "信箱通過驗證 %s",
		'email:validate:success:body' => "嗨, %s,

太好了，您的信箱已經通過驗證。",


		'email:confirm:success' => "您已經完成信箱驗證",
		'email:confirm:fail' => "您的信箱還沒通過驗證",

		'uservalidationbyemail:registerok' => "要啟用您的帳號，請透過我們寄發給您的驗證信進行操作。"

	);

	add_translation("zh_tw",$traditionalChinese);
?>