
	<div class="users form">
	<?php echo $this->Form->create('User');?>
		<fieldset>
			<h2><legend><?php echo __('Add New Employee'); ?></legend></h2>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('firstname');
			echo $this->Form->input('lastname');
			echo $this->Form->input('phone');
			echo $this->Form->input('email');
	       	if (isset($role)) {
				if ($role == 'admin') {
			        echo $this->Form->input('role', array(
			            'options' => array('admin' => 'Admin', 'employee' => 'Employee')
			        ));
			    } else {
			        echo $this->Form->input('role', array(
			            'options' => array('employee' => 'Employee')
			        ));
			    }
			} else {
				echo $this->Form->input('role', array(
			        'options' => array('employee' => 'Employee')
			    ));
			}
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>

