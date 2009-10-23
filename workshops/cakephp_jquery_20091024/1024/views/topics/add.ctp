<div class="topics form">
<?php echo $form->create('Topic', array('url' => array($userId)));?>
	<fieldset>
 		<legend><?php __('Add Topic');?></legend>
	<?php
		echo $form->input('sort');
		echo $form->input('title');
		echo $form->input('body');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Topics', true), array('action' => 'index', $userId));?></li>
	</ul>
</div>