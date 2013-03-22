<div class="users view">
<h2><?php  echo __('Employee');?></h2>
	<table>
		<tr>
			<td colspan="4"><?php echo __('<b>Employee Number: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</td>
			<td colspan="4"><?php echo __('<b>Username: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['username']); ?>
				&nbsp;
			</td>


<!--			<td><?php echo __('<b>Password: </b>'); ?></td>
			<td>
				<?php echo h($user['User']['password']); ?>
				&nbsp;
			</td>-->
		</tr>
		<tr>
			<td colspan="16">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="4"><?php echo __('<b>First Name: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['firstname']); ?>
				&nbsp;
			</td>
			<td colspan="4"><?php echo __('<b>Last Name: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['lastname']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="16">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="4"><?php echo __('<b>Phone: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['phone']); ?>
				&nbsp;
			</td>
			<td colspan="4"><?php echo __('<b>Email: </b>'); ?></td>
			<td colspan="4">
				<?php echo h($user['User']['email']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="16">
				&nbsp;
			</td>
		</tr>
		<tr>	
			<td colspan="2"><?php echo __('<b>Role: </b>'); ?></td>
			<td colspan="2">
				<?php echo h($user['User']['role']); ?>
				&nbsp;
			</td>
			<td colspan="4">

			</td>			
			<td colspan="2"><?php echo __('<b>Account Created On: </b>'); ?></td>
			<td colspan="2">
				<?php echo h($user['User']['created']); ?>
				&nbsp;
			</td>
			<td colspan="2"><?php echo __('<b>Last Modified: </b>'); ?></td>
			<td colspan="2">
				<?php echo h($user['User']['modified']); ?>
				&nbsp;
			</td>

		</tr>
		<tr>
			<td colspan="16">
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="4"><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $user['User']['id']), array('class' => 'lightgreenbutton')); ?></td>
			<td colspan="8"></td>
			<td colspan="4"><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $user['User']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?></td>
		</tr>
	</table>
</div>