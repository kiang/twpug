<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('birthday', array(
		    'type' => 'text',
		));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php
echo $javascript->codeBlock('$(function() {
	$(\'#UserBirthday\').datepicker();
})');