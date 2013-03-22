

	<div class="posts index">
		<h2><?php echo __('Posts');?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('user_id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('title');?></th>
				<!--<th style="text-align: center;"><?php echo $this->Paginator->sort('body');?></th>-->
				<th style="text-align: center;"><?php echo $this->Paginator->sort('created');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('modified');?></th>
				<th style="text-align: center;" class="actions"><?php echo __('Actions');?></th>
		</tr>
		<?php
		foreach ($posts as $post): ?>
		<tr>
			<td style="text-align: center;"><?php echo h($post['Post']['id']); ?>&nbsp;</td>
			<td style="text-align: center;">
				<?php echo $this->Html->link($post['User']['firstname'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
			</td>
			<td style="text-align: center;"><?php echo h($post['Post']['title']); ?>&nbsp;</td>
			<!--<td style="text-align: center;"><?php echo h($post['Post']['body']); ?>&nbsp;</td>-->
			<td style="text-align: center;"><?php echo h($post['Post']['created']); ?>&nbsp;</td>
			<td style="text-align: center;"><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
			<td class="actions" style="text-align: center;">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id']), array('class' => 'yellowbutton')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']), array('class' => 'lightgreenbutton')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>

		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
