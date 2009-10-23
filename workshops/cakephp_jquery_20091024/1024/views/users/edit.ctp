<div id="usersEditPage">
<?php
if(!empty($editMessage)) {
    echo '<div class="message">' . $editMessage . '</div>';
}
?>
<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php
echo $javascript->codeBlock('$(function() {
	$(\'#UserEditForm\').submit(function() {
		$.post(\'' . $html->url(array('action' => 'edit')) . '\', $(this).serializeArray(), function(pageData) {
			$(\'#usersEditPage\').html(pageData);
		});
		return false;
	});
	setTimeout(function() {
		$(\'div#usersEditPage div.message\').fadeOut();
	}, 3000);
	$(\'#UserBirthday\').datepicker();
})');
?>
</div>