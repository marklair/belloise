

	
<div class="comments form">
	<?php echo $this->Form->create('Comment');?>
		<fieldset>
			<h2><legend><?php echo __('Edit Comment'); ?></legend></h2>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('user_id');
			echo $this->Form->input('post_id');
			echo $this->Form->input('title');
			echo $this->Form->input('body');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
</div>	
	


