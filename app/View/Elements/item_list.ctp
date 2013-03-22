			<tr>
				<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($item['Itemtype']['name'], array('controller' => 'itemtypes', 'action' => 'view', $item['Itemtype']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($item['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $item['Customer']['id'])); ?>
				</td>
				<td><?php echo h($item['Item']['make']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['model']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['serialnbr']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['markedprice']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['lowprice']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['status']); ?>&nbsp;</td>

				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
				</td>
			</tr>