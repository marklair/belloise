
	<div class="comments view">
	<h2><?php  echo __('Comment');?></h2>
		<table>
			<tr>
				<td><?php echo __('<b>Id: </b>'); ?></td>
				<td>
					<?php echo h($comment['Comment']['id']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Author: </b>'); ?></td>
				<td>
					<?php echo $this->Html->link($comment['User']['id'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Regarding Post: </b>'); ?></td>
				<td>
					<?php echo $this->Html->link($comment['Post']['title'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Title: </b>'); ?></td>
				<td>
					<?php echo h($comment['Comment']['title']); ?>
					&nbsp;
				</td>
				<td><?php echo __('<b>Body: </b>'); ?></td>
				<td colspan="3">
					<?php echo h($comment['Comment']['body']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td><?php echo __('<b>Comment Created On: </b>'); ?></td>
				<td>
					<?php echo h($comment['Comment']['created']); ?>
					&nbsp;
				</td>
				<td colspan="2">&nbsp;</td>
				<td><?php echo __('<b>Comment Modified On: </b>'); ?></td>
				<td>
					<?php echo h($comment['Comment']['modified']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php echo $this->Html->link(__('Edit This Comment'), array('action' => 'edit', $comment['Comment']['id']), array('class' => 'lightgreenbutton')); ?>
				</td>
				<td colspan="2">
					&nbsp;
				</td>
				<td colspan="2">
					<?php echo $this->Form->postLink(__('Delete This Comment'), array('action' => 'delete', $comment['Comment']['id']), array('class' => 'redbutton'), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
				</td>
			</tr>
		</table>
	</div>

