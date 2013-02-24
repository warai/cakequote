<div class="container-fluid">
  <div class="row-fluid">
  	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
  	<div class="span10">
		<div class="countries view">
		<h2><?php  echo __('Pays'); ?></h2>
			<dl class="dl-horizontal">
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($country['Country']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($country['Country']['name']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	
	
		<div class="related">
			<h3><?php echo __('Related Quotes'); ?></h3>
			<?php if (!empty($country['Quote'])): ?>
			<table cellpadding = "0" cellspacing = "0" class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Body'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Updated'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($country['Quote'] as $quote): ?>
				<tr>
					<td><?php echo $quote['id']; ?></td>
					<td><?php echo $quote['title']; ?></td>
					<td><?php echo $quote['body']; ?></td>
					<td><?php echo $quote['user_id']; ?></td>
					<td><?php echo $quote['created']; ?></td>
					<td><?php echo $quote['updated']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'quotes', 'action' => 'edit', $quote['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quotes', 'action' => 'delete', $quote['id']), null, __('Are you sure you want to delete # %s?', $quote['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		<?php endif; ?>
		<div>
		
		
	</div>
</div>
