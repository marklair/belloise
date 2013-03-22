
	<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
			<h2><legend><?php echo __('Edit User'); ?></legend></h2>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('firstname');
			echo $this->Form->input('lastname');
			echo $this->Form->input('phone');
			echo $this->Form->input('email');
	//		echo $this->Form->input('role');
			if (isset($role) && ($role == 'admin'))  {
		        echo $this->Form->input('role', array(
	             'options' => array('admin' => 'Admin', 'employee' => 'Employee', 'seller' => 'Seller')));
	        } else {
		        echo $this->Form->input('role', array(
	           	  'options' => array('employee' => 'Employee', 'seller' => 'Seller')));
			}
	        
		?>
		</fieldset>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<td>
					<?php echo $this->Form->end(__('Submit'));?>
				</td>
				<td>
					<?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
				</td>
			</tr>
		</table>
	
	
	</div>
