
<!--
	<?php
		echo '<b>role: </b>'.$role; 
		echo '<br>';
		echo '<b>user_ID: </b>'.$user_id;
		echo '<br>';
	?>
-->


	<div class="items view">
	<h2><?php  echo __('Item For Sale');?></h2>
		<table>
			<tr>
				<td><?php echo __('<b>Item Number: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['id']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Category: </b>'); ?></td>
				<td>
					<?php echo $this->Html->link($item['Itemtype']['name'], array('controller' => 'itemtypes', 'action' => 'view', $item['Itemtype']['id'])); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Customer: </b>'); ?></td>
				<td>
					<?php echo $this->Html->link(
						($item['Customer']['id'].' - '.$item['Customer']['firstname'].' '.$item['Customer']['lastname']),
						 array('controller' => 'customers', 'action' => 'view', $item['Customer']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Make: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['make']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Model: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['model']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Serialnbr: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['serialnbr']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Description: </b>'); ?></td>
				<td colspan="5">
					<?php echo h($item['Item']['description']); ?>
					&nbsp;
				</td>

			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Marked Price: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['markedprice']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Lowest Price: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['lowprice']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Sold Status: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['status']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Images: </b>'); ?></td>
				<td>
					<?php  echo $this->Upload->view('Item', $item['Item']['id']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Created: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['created']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Modified: </b>'); ?></td>
				<td>
					<?php echo h($item['Item']['modified']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo $this->Html->link(__('Edit This Item'), array('action' => 'edit', $item['Item']['id']), array('class' => 'lightgreenbutton')); ?>
				</td>
				<td colspan="2">
					
				</td>
				<td colspan="2">
					<?php echo $this->Form->postLink(__('Delete This Item'), array('action' => 'delete', $item['Item']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
				</td>
			</tr>
		</table>
	</div>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itemtypes'), array('controller' => 'itemtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itemtype'), array('controller' => 'itemtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
