<div class="container-fluid">
  <div class="row-fluid">
  	<div class="span2">
	  	<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('New Quote'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
		<div class="span10">
		<div class="quotes index">
			<h2><?php echo __('Coutumes'); ?></h2>
			<table cellpadding="0" cellspacing="0" class="table">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('title'); ?></th>
					<th><?php echo $this->Paginator->sort('body'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id'); ?></th>
					<th><?php echo $this->Paginator->sort('country_id'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('updated'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($quotes as $quote): ?>
			<tr>
				<td><?php echo h($quote['Quote']['id']); ?>&nbsp;</td>
				<td><?php echo h($quote['Quote']['title']); ?>&nbsp;</td>
				<td><?php echo h($quote['Quote']['body']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
				</td>
				<td>
				<?php echo $this->Html->link($quote['Country']['name'], array('controller' => 'countries', 'action' => 'view', $quote['Country']['id'])); ?>
				</td>
				<td><?php echo h($quote['Quote']['created']); ?>&nbsp;</td>
				<td><?php echo h($quote['Quote']['updated']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id'])); ?><br />
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id'])); ?><br />
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quote['Quote']['id']), null, __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			
		</div>
		</div>
</div>
</div>