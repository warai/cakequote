<div class="users view">
<h2><?php  echo __('Utilisateur'); ?></h2>
	<dl class="dl-horizontal">
		
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($user['User']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Ses coutumes'); ?></h3>
	<?php if (!empty($user['Quote'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<tr>
		
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Coutume'); ?></th>
		
		<th><?php echo __('Crée le'); ?></th>
		<th><?php echo __('Mis à jour'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Quote'] as $quote): ?>
		<tr>
			
			<td><?php echo $quote['title']; ?></td>
			<td><?php echo $quote['body']; ?></td>
			
			<td><?php echo $quote['created']; ?></td>
			<td><?php echo $quote['updated']; ?></td>
			<td class="actions">
				<div class="btn btn-info"><?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?></div>
				<div class="btn btn-warning"><?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id'])); ?></div>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
