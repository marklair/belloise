

	<div class="items form">
	<?php echo $this->Form->create('Item');?>
		<fieldset>
			<h2><legend><?php echo __('Edit Item'); ?></legend></h2>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('itemtype_id');
			echo $this->Form->input('customer_id');
			echo $this->Form->input('make');
			echo $this->Form->input('model');
			echo $this->Form->input('serialnbr');
			echo $this->Form->input('description');
			echo $this->Form->input('markedprice');
			echo $this->Form->input('lowprice');
			echo $this->Form->input('status');
			echo $this->Upload->edit('Item', $this->Form->fields['Item.id']);
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>

