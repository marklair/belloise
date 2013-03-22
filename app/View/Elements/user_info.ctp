	<tr>
	<!--	<td><?php echo h($user['User']['id']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['username']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['password']); ?>&nbsp;</td> -->
		<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
	<!--	<td><?php echo h($user['User']['phone']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['email']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['created']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['modified']); ?>&nbsp;</td> -->
	<!--	<td><?php echo h($user['User']['role']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'yellowbutton'));
			if ($role == 'admin') {
				echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'lightgreenbutton'));
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $user['User']['id']));
			} elseif ($role == 'employee') {
				if (($user['User']['id']) == ($user_id)) {
					echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'lightgreenbutton'));
					echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $user['User']['id']));
				}
			}
			?>
		</td>
	</tr>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>