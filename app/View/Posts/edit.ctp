<!--
<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
?>
-->
<?php
	if($role == 'admin') {
		echo $this->element('post_edit', array('post' => $post));
	} elseif ($role == 'employee') {
		if (($post['User']['id']) == $user_id) {
			echo $this->element('post_edit', array('post' => $post));
		}
	} else {
		echo 'you are not authorized to access this page';
	}
	
?>


<div class="grid_4">
	<div class="box menu">
		<?php
			echo $this->element('navbar');
		?>
	</div>
</div>

