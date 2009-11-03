<?php
/* SVN FILE: $Id$ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		自由軟體技術分享工作坊-jQuery與CakePHP::
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('cake.generic');
		echo $html->css('jquery-ui-1.7.2.custom', NULL, array('media' => 'screen, projection'));
		echo $html->css('jquery.autocomplete');
		echo $javascript->link('jquery-1.3.2.min');
		echo $javascript->link('jquery-ui-1.7.2.custom.min');
		echo $javascript->link('ui.datepicker-zh-TW');
		echo $javascript->link('jquery.validate');
		echo $javascript->link('jquery.autocomplete');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link('自由軟體技術分享工作坊-jQuery與CakePHP', '/'); ?></h1>
		</div>
		<div id="content">

			<?php $session->flash(); ?>

			<div id="viewContent"><?php echo $content_for_layout; ?></div>

		</div>
		<div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>