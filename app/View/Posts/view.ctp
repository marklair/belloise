
	<h2><?php  echo __('Post');?></h2>
		<table>
			<tr>
				<td><?php echo __('<b>Post Number: </b>'); ?></td>
				<td>
					<?php echo h($post['Post']['id']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Author: </b>'); ?></td>
				<td>
					<?php echo $this->Html->link($post['User']['firstname'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo __('<b>Post Title: </b>'); ?></td>
				<td colspan="2">
					<?php echo h($post['Post']['title']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2"><?php echo __('<b>Post Body: </b>'); ?></td>
				<td colspan="2">
					<?php echo h($post['Post']['body']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="4">
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Post Created On: </b>'); ?></td>
				<td>
					<?php echo h($post['Post']['created']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Post Last Modified On: </b>'); ?></td>
				<td>
					<?php echo h($post['Post']['modified']); ?>
					&nbsp;
				</td>
			</tr>
		</table>
</div>
<div class="grid_12">
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Comment On This Post'), array('controller' => 'comments', 'action' => 'add', 'post', $post['Post']['id']), array('class' => 'darkbluebutton'));?>
				</li>
			</ul>
		</div>
</div>

<div class="grid_16">
	<div class="related">
		<h3><?php echo __('Related Comments');?></h3>
		<?php if (!empty($post['Comment'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th style="text-align: center;"><?php echo __('<b>Id</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>User Id</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>Post Number</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>Title</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>Body</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>Created</b>'); ?></th>
			<th style="text-align: center;"><?php echo __('<b>Modified</b>'); ?></th>
			<th style="text-align: center;" class="actions"><?php echo __('<b>Actions</b>');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($post['Comment'] as $comment): ?>
			<tr>
				<td style="text-align: center;"><?php echo $comment['id'];?></td>
				<td style="text-align: center;"><?php echo $comment['user_id'];?></td>
				<td style="text-align: center;"><?php echo $comment['post_id'];?></td>
				<td style="text-align: center;"><?php echo $comment['title'];?></td>
				<td style="text-align: center;"><?php echo $comment['body'];?></td>
				<td style="text-align: center;"><?php echo $comment['created'];?></td>
				<td style="text-align: center;"><?php echo $comment['modified'];?></td>
				<td class="actions" style="text-align: center;">
					<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id']), array('class' => 'yellowbutton')); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id']), array('class' => 'lightgreenbutton')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

