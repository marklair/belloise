
	<div class="posts form">
<!--
	<?php
		echo '<b>role: </b>'.$role; 
		echo '<br>';
		echo '<b>user_ID: </b>'.$user_id;
		echo '<br>';
	?>
-->
	<?php echo $this->Form->create('Post');?>
		<fieldset>
			<h2><legend><?php echo __('Add Post'); ?></legend></h2>
		<?php
	//		echo $this->Form->input('user_id');
			echo $this->Form->input('title');
			echo $this->Form->input('body');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit'));?>
	</div>


