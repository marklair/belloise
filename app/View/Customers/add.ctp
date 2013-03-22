
	<div class="customers form">
	<?php echo $this->Form->create('Customer');?>
		<fieldset>
			<h2><legend><?php echo __('Add Customer'); ?></legend></h2>
		<?php
			echo $this->Form->input('firstname');
			echo $this->Form->input('lastname');
			echo $this->Form->input('address');
			echo $this->Form->input('city');
			echo $this->Form->input('state');
			echo $this->Form->input('zip');
			echo $this->Form->input('phone');
			echo $this->Form->input('email');
			echo $this->Form->input('dl_nbr');
			echo $this->Form->input('dl_img');
			//echo $this->Upload->edit('Customer', $this->Form->fields['Customer.id']);

		?>
		</fieldset>
	</div>

	<div class="grid_2">
		<?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'yellowbutton'));	?>
	</div>
	<div class="grid_8">
	</div>
	<div class="grid_2">		
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
