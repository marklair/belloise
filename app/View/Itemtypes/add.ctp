<div class="itemtypes form">
<?php echo $this->Form->create('Itemtype');?>
	<fieldset>
		<legend><?php echo __('Add Itemtype'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

