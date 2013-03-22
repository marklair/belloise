
<!--
	<?php
	echo '<b>role: </b>'.$role; 
	echo '<br>';
	echo '<b>user_ID: </b>'.$user_id;
	echo '<br>';
	?>
-->	
<?php
	if ($role == 'admin') {
		echo $this->element('user_edit', array('user' => $user));
	} elseif ($role == 'employee') {
		if ($targetuser['User']['role'] != 'admin') {
			echo $this->element('user_edit', array('user' => $user));
		} else {
			echo 'you are not authorized to edit this profile';
		}
	} elseif ($role == 'seller') {
		if ($user == $user_id) {
			echo $this->element('user_edit', array('user' => $user));
		} else {
			echo 'you are not authorized to edit this profile';
		}
	} else {
		echo 'you are not authorized to access this page';
	}
?>
