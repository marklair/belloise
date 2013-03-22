
	<div class="comments index">
		<h2><?php echo __('Comments');?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('user_id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('post_id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('title');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('body');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('created');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('modified');?></th>
				<th class="actions" style="text-align: center;"><?php echo __('Actions');?></th>
		</tr>
		<?php
		foreach ($comments as $comment): ?>
		<tr>
			<td style="text-align: center;"><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
			<td style="text-align: center;">
				<?php echo $this->Html->link($comment['User']['firstname'].' '.$comment['User']['lastname'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			</td>
			<td style="text-align: center;">
				<?php echo $this->Html->link($comment['Post']['title'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['id'])); ?>
			</td>
			<td style="text-align: center;"><?php echo h($comment['Comment']['title']); ?>&nbsp;</td>
			<td style="text-align: center;"><?php echo h($comment['Comment']['body']); ?>&nbsp;</td>
			<td style="text-align: center;"><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
			<td style="text-align: center;"><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
			<td class="actions" style="text-align: center;">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['id']), array('class' => 'yellowbutton')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['id']), array('class' => 'lightgreenbutton')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
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

