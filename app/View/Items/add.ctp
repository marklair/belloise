
	
	<?php echo $this->Form->create('Item');?>
		<fieldset>
			<legend><?php echo __('Add Item'); ?></legend>
		<?php
			echo $this->Form->input('itemtype_id');
			echo $this->Form->input('customer_id');
			echo $this->Form->input('make');
			echo $this->Form->input('model');
			echo $this->Form->input('serialnbr');
			echo $this->Form->input('description');
			echo $this->Form->input('markedprice');
			echo $this->Form->input('lowprice');
			echo $this->Form->input('status');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>
	

