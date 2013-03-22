<div class="itemtypes form">
<?php echo $this->Form->create('Itemtype');?>
	<fieldset>
		<h2><legend><?php echo __('Edit Item Type'); ?></legend></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

