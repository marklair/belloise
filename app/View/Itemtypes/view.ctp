<div class="itemtypes view">
<h2><?php  echo __('Itemtype');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemtype['Itemtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($itemtype['Itemtype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div>
		<?php echo $this->Html->link(__('Edit This Itemtype'), array('action' => 'edit', $itemtype['Itemtype']['id']), array('class' => 'lightgreenbutton')); ?>
		<?php echo $this->Form->postLink(__('Delete This Itemtype'), array('action' => 'delete', $itemtype['Itemtype']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $itemtype['Itemtype']['id'])); ?>
</div>
<div style="clear: both;">
	&nbsp;
</div>
<div class="related">
	<h3><?php echo __('Related Items');?></h3>
	<?php if (!empty($itemtype['Item'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Itemtype Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Make'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Serialnbr'); ?></th>
		<th><?php echo __('Markedprice'); ?></th>
		<th><?php echo __('Lowprice'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($itemtype['Item'] as $item): ?>
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
