<div class="container-fluid">
  <div class="row-fluid">
  	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('New country'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Quotes'), array('controller' => 'quotes', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Quote'), array('controller' => 'quotes', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
  	<div class="span10">
		<div class="countries index">
			<h2><?php echo __('Pays'); ?></h2>
			<table cellpadding="0" cellspacing="0" class="table">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($countries as $country): ?>
			<tr>
				<td><?php echo h($country['Country']['id']); ?>&nbsp;</td>
				<td><?php echo h($country['Country']['name']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $country['Country']['id'])); ?><br/>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $country['Country']['id'])); ?><br/>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?>
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
