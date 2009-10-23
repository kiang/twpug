<div class="topics index">
<h2><?php __('Topics');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<div id="sortingResult" class="message"></div>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('sort');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('body');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<tbody id="topicListBody">
<?php
$i = 0;
foreach ($topics as $topic):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?> id="sLine<?php echo $topic['Topic']['id']; ?>">
		<td>
			<?php echo $topic['Topic']['id']; ?>
		</td>
		<td>
			<?php echo $topic['Topic']['sort']; ?>
		</td>
		<td>
			<?php echo $topic['Topic']['title']; ?>
		</td>
		<td>
			<?php echo $topic['Topic']['body']; ?>
		</td>
		<td>
			<?php echo $topic['Topic']['created']; ?>
		</td>
		<td>
			<?php echo $topic['Topic']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $topic['Topic']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $topic['Topic']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $topic['Topic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $topic['Topic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
<a href="#" id="saveSorting">儲存排序</a>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Topic', true), array('action' => 'add', $userId)); ?></li>
		<li><?php echo $html->link('回到使用者', array('controller' => 'users', 'action' => 'index'));?></li>
	</ul>
</div>
<?php
echo $javascript->codeBlock('$(function() {
	$(\'#topicListBody\').sortable({
    	axis: \'y\',
    });
    $(\'#saveSorting\').click(function() {
    	var sortingIndex = 1;
    	var sortingResult = {};
    	$(\'tbody#topicListBody tr\').each(function() {
    		sortingResult[this.id.split(\'sLine\')[1]] = sortingIndex;
    		sortingIndex++;
    	});
    	$.ajax({
    		type: \'POST\',
    		url: \''.$html->url('/topics/sort/' . $userId).'\',
    		data: sortingResult,
    		success: function(data) {
    			$(\'#sortingResult\').html(\'排序已經儲存，請重新整理畫面來檢視新的順序\');
    		},
    		error: function() {
    			$(\'#sortingResult\').html(\'更新資料時發生錯誤，請重試！\');
    		}
    	});
    	return false;
    });
})');