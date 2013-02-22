<div class="groups view">
<h2><?php  echo __('Groupe'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<em><?php echo h($group['Group']['name']); ?></em>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Utilisateurs appartenant à ce groupe'); ?></h3>
	<?php if (!empty($group['User'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['updated']; ?></td>
			<td class="actions">
				<div class="btn btn-info"><?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?></div>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
