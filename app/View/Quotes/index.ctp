<div class="quotes index">
	<h1><?php echo __('365 us et coutumes du monde'); ?></h1>
	<table cellpadding="0" cellspacing="0" class="table">
	
	<?php foreach ($quotes as $quote): ?>

		
		
		<h3><?php echo h($quote['Quote']['title']); ?>&nbsp;</h3>
		<blockquote><p><?php echo h($quote['Quote']['body']); ?>&nbsp;</p>
		
			<small><?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
		
		<?php echo h($quote['Quote']['created']); ?>&nbsp;
		- Pays: <?php echo $this->Html->link($quote['Country']['name'], array('controller' => 'countries', 'action' => 'view', $quote['Country']['id'])); ?></small>
		<?php echo $this->Html->link(__('View'), array('action' => 'view', $quote['Quote']['id'])); ?> - 
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quote['Quote']['id'])); ?></blockquote>
		
	
</div>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	
</div>

