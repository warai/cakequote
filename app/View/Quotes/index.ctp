<div class="quotes index">
	<h1><?php echo __('Quotes'); ?></h1>
	<table cellpadding="0" cellspacing="0" class="table">
	
	<?php foreach ($quotes as $quote): ?>

		
		
		<h3><?php echo h($quote['Quote']['title']); ?>&nbsp;</h3>
		<blockquote><p><?php echo h($quote['Quote']['body']); ?>&nbsp;</p>
		
			<small><?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
		
		<?php echo h($quote['Quote']['created']); ?>&nbsp;</small>
		<?php echo h($quote['Quote']['updated']); ?>&nbsp;</blockquote>
		
	
</div>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous-'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

