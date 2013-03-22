
	<div class="customers view">
	<h2><?php  echo __('Customer');?></h2>
		<table>
			<tr>
				<td colspan="2"><?php echo __('<b>Customer Number: </b>'); echo h($customer['Customer']['id']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>First Name: </b>');  echo h($customer['Customer']['firstname']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>Last Name: </b>'); echo h($customer['Customer']['lastname']); ?>
					&nbsp;
				</td>			
				<td colspan="2">
					
				</td>
			</tr>
			<tr>
				<td colspan="8">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo __('<b>Address: </b>'); echo h($customer['Customer']['address']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>City: </b>'); echo h($customer['Customer']['city']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>State: </b>'); echo h($customer['Customer']['state']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>Zip: </b>'); echo h($customer['Customer']['zip']); ?>
					&nbsp;
				</td>			
				
			</tr>
			<tr>
				<td colspan="8">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo __('<b>Phone: </b>'); echo h($customer['Customer']['phone']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>Email: </b>'); echo h($customer['Customer']['email']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>Driver License Nbr: </b>'); echo h($customer['Customer']['dl_nbr']); ?>
					&nbsp;
				</td>
				<td colspan="2">
					
				</td>
			
				
			</tr>
			<tr>
				<td colspan="8">
					&nbsp;
				</td>
			</tr>
			<tr>
<!--				<td colspan="3"><?php echo __('<b>Driver License Img: </b>'); echo '<a href="http://localhost/belloise/graphics/'.h($customer['Customer']['dl_img']).'">'.h($customer['Customer']['dl_img']).'</a>'; ?>
					&nbsp;				
				</td>-->
				<td colspan="3">
					<?php echo __('<b>Driver License Img: </b>'); echo $this->Upload->view('Customer', $customer['Customer']['id']); ?>
				</td>
				<td>
					
				</td>
				<td colspan="2"><?php echo __('<b>Created: </b>'); echo h($customer['Customer']['created']); ?>
					&nbsp;
				</td>
				<td colspan="2"><?php echo __('<b>Modified: </b>'); echo h($customer['Customer']['modified']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="8">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<?php echo $this->Html->link(__('Edit This Customer\'s Details'), array('action' => 'edit', $customer['Customer']['id']), array('class' => 'lightgreenbutton')); ?>
				</td>
				<td>
					
				</td>
				<td colspan="4">
					<?php echo $this->Form->postLink(__('Delete This Customer'), array('action' => 'delete', $customer['Customer']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="grid_16">
	<div class="related">
		<h3><?php echo __('Related Items');?></h3>
		<?php if (!empty($customer['Item'])):?>
		<table cellpatding = "0" cellspacing = "0">
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo __('Itemtype Id'); ?></td>
			<td><?php echo __('Customer Id'); ?></td>
			<td><?php echo __('Make'); ?></td>
			<td><?php echo __('Model'); ?></td>
			<td><?php echo __('Serialnbr'); ?></td>
			<td><?php echo __('Markedprice'); ?></td>
			<td><?php echo __('Lowprice'); ?></td>
			<td><?php echo __('Status'); ?></td>
			<td><?php echo __('Created'); ?></td>
			<td><?php echo __('Modified'); ?></td>

			<td class="actions"><?php echo __('Actions');?></td>
		</tr>
		<?php
			$i = 0;
			foreach ($customer['Item'] as $item): ?>
			<tr>
				<td><?php echo $item['id'];?></td>
				<td><?php echo $item['itemtype_id'];?></td>
				<td><?php echo $item['customer_id'];?></td>
				<td><?php echo $item['make'];?></td>
				<td><?php echo $item['model'];?></td>
				<td><?php echo $item['serialnbr'];?></td>
				<td><?php echo $item['markedprice'];?></td>
				<td><?php echo $item['lowprice'];?></td>
				<td><?php echo $item['status'];?></td>
				<td><?php echo $item['created'];?></td>
				<td><?php echo $item['modified'];?></td>
				
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id']), array('class' => 'yellowbutton')); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id']), array('class' => 'lightgreenbutton')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $item['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
