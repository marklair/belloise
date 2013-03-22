
	
	<div class="items index">
		<?php
		if(isset($customer_id)) {
			echo __('<h2>Items For '.$customer[0]['Customer']['firstname'].' '.$customer[0]['Customer']['lastname'].'</h2>');
		} else {
			echo __('<h2>All Items</h2>');
		}
		
		
		?>
		
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('itemtype_id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('customer_id');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('make');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('model');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('serialnbr');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('markedprice');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('lowprice');?></th>
				<th style="text-align: center;"><?php echo $this->Paginator->sort('status');?></th>
				<th class="actions" style="text-align: center; font-weight: bold;"><?php echo __('Actions');?></th>
		</tr>
		<tr>
			<td colspan="10">
				&nbsp;
			</td>
		</tr>
	<?php
	foreach ($items as $item):
		if(isset($customer_id)){
			if(($item['Item']['customer_id']) == ($customer_id)) {
	?>
			<tr>
				<td style="text-align: center;"><?php echo h($item['Item']['id']); ?>&nbsp;</td>
				<td style="text-align: center;">
					<?php echo $this->Html->link($item['Itemtype']['name'], array('controller' => 'itemtypes', 'action' => 'view', $item['Itemtype']['id'])); ?>
				</td>				
				<td style="text-align: center;">
					<?php echo $this->Html->link($item['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $item['Customer']['id'])); ?>
				</td>
				<td style="text-align: center;"><?php echo h($item['Item']['make']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['model']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['serialnbr']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['markedprice']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['lowprice']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['status']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id']), array('class' => 'yellowbutton')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id']), array('class' => 'lightgreenbutton')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
				</td>
			</tr>
	<?php

			}	
		}
		else {
	?>
			<tr>
				<td style="text-align: center;"><?php echo h($item['Item']['id']); ?>&nbsp;</td>
				<td style="text-align: center;">
					<?php echo $this->Html->link($item['Itemtype']['name'], array('controller' => 'itemtypes', 'action' => 'view', $item['Itemtype']['id'])); ?>
				</td>
				<td style="text-align: center;">
					<?php echo $this->Html->link($item['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $item['Customer']['id'])); ?>
				</td>
				<td style="text-align: center;"><?php echo h($item['Item']['make']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['model']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['serialnbr']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['markedprice']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['lowprice']); ?>&nbsp;</td>
				<td style="text-align: center;"><?php echo h($item['Item']['status']); ?>&nbsp;</td>

				<td style="text-align: center;" class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id']), array('class' => 'yellowbutton')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id']), array('class' => 'lightgreenbutton')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
				</td>
			</tr>
	<?php
		}
	 endforeach; 
	 ?>
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

