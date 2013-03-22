	<h2>
		<a href="#" id="toggle-section-menu" style="cursor: pointer;"><?php echo __('Actions'); ?></a>
	</h2>
	
	<div style="margin: 0px; position: static; overflow: hidden;">
		<div class="block" id="section-menu">
			<ul class="section menu">
<!--				<li>
					<?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
				<li>-->
				<li>
					<a class="menuitem"><?php echo __('Pages'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
					</ul>
				</li>
				<li>
					<a class="menuitem"><?php echo __('Account Functions'); ?></a>
					<?php
					if ((isset($myself)) && ($myself['role'] != '')) {

						echo '<ul class="submenu"/>';
						echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $myself['id'])).'</li>';
						echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $myself['id'])).'</li>';
						echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';
						echo '</ul>';

					} elseif ((isset($role)) && ($role != '')) {

						echo '<ul class="submenu"/>';
						echo '<li>'. $this->Html->link(__('View My Account'), array('controller' => 'users', 'action' => 'view', $user_id)).'</li>';
						echo '<li>'. $this->Html->link(__('Edit My Account'), array('controller' => 'users', 'action' => 'edit', $user_id)).'</li>';
						echo '<li>'. $this->Html->link(__('Log Out'), array('controller' => 'users', 'action' => 'logout')).'</li>';
						echo '</ul>';

					} else {

						echo '<ul class="submenu"/>';
						echo '<li>'. $this->Html->link(__('Log In'), array('controller' => 'users', 'action' => 'login')).'</li>';
						//echo '<li>'. $this->Html->link(__('Register New Employee'), array('controller' => 'users', 'action' => 'add')).'</li>';
						echo '</ul>';

					}
					?>
				</li>	
				<li>
					<a class="menuitem"><?php echo __('Customers'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Add New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
					</ul>
				</li>
				<li>
					<a class="menuitem"><?php echo __('Items'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Add New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Item Types'), array('controller' => 'itemtypes', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Add New Item Type'), array('controller' => 'itemtypes', 'action' => 'add')); ?> </li>
					</ul>
				</li>				
				<li>
					<a class="menuitem"><?php echo __('Employees'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'users', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Register New Employee'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					</ul>
				</li>
				<li>
					<a class="menuitem"><?php echo __('Message Board'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
					</ul>
				</li>
	<?php 
		if (isset($role)) {
			if ($role == 'admin') {
	?>
				<li>
					<a class="menuitem"><?php echo __('Admin Functions'); ?></a>
					<ul class="submenu">
						<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>

					</ul>
				</li>
	<?php 
			}
		} else {
			if (isset($myself)) {
				if (($myself['role']) == 'admin') {
		?>
					<li>
						<a class="menuitem"><?php echo __('Admin Functions'); ?></a>
						<ul class="submenu">
							<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>

						</ul>
					</li>
		<?php
				}
			}
		}

	//echo($myself['role']);
	?>
			</ul>
		</div>
	</div>

