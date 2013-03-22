	
	<div class="customers index">
		<h2><?php echo __('Customers');?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th colspan="2"><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('firstname');?></th>
				<th><?php echo $this->Paginator->sort('lastname');?></th>
<!--				<th><?php echo $this->Paginator->sort('address');?></th>
				<th><?php echo $this->Paginator->sort('city');?></th>
				<th><?php echo $this->Paginator->sort('state');?></th>
				<th><?php echo $this->Paginator->sort('zip');?></th>
				<th><?php echo $this->Paginator->sort('phone');?></th>
				<th><?php echo $this->Paginator->sort('email');?></th>
				<th><?php echo $this->Paginator->sort('dl_nbr');?></th>
				<th><?php echo $this->Paginator->sort('dl_img');?></th>-->
				<th class="actions"><?php echo __('Actions');?></th>
		</tr>

		<?php
		foreach ($customers as $customer): ?>
		<tr>
			<td colspan="2"><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['firstname']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['lastname']); ?>&nbsp;</td>
<!--			<td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['city']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['state']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['zip']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['phone']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['dl_nbr']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['dl_img']); ?>&nbsp;</td>-->
			<td class="actions">


				
				<?php echo $this->Html->link(__('Items'), array('controller' => 'items', 'action' => 'index', $customer['Customer']['id']), array('class' => 'darkbluebutton')); ?>
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id']), array('class' => 'lightgreenbutton')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id']), array('class' => 'lightgreenbutton')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
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
