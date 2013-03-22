<div class="itemtypes index">
	<h2><?php echo __('Itemtypes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($itemtypes as $itemtype): ?>
	<tr>
		<td><?php echo h($itemtype['Itemtype']['id']); ?>&nbsp;</td>
		<td><?php echo h($itemtype['Itemtype']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemtype['Itemtype']['id']), array('class' => 'yellowbutton')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemtype['Itemtype']['id']), array('class' => 'lightgreenbutton')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemtype['Itemtype']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $itemtype['Itemtype']['id'])); ?>
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
	<?php echo $this->Html->link(__('New Itemtype'), array('action' => 'add'), array('class' => 'darkbluebutton')); ?>
</div>



