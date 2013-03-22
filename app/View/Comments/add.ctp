
	<div class="comments form">
	<?php echo $this->Form->create('Comment');?>
		<fieldset>
			<h2><legend><?php echo __('Add Comment'); ?></legend></h2>
		<?php
			echo $this->Form->input('user_id', array(
					'type' => 'hidden',
					'value' => $user_id));
			echo $this->Form->input('post_id', array(
					'type' => 'hidden',
					'value' => $post_id));
			echo $this->Form->input('title');
			echo $this->Form->input('body');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>

