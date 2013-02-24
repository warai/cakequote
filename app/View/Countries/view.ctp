<div class="countries view">

			<h2><em><?php echo h($country['Country']['name']); ?></em></h2>
			&nbsp;
		
</div>

<div class="related">
	<h2><?php echo __('Coutumes liées à ce pays'); ?></h2>
	<?php if (!empty($country['Quote'])): ?>
	

	<?php
		$i = 0;
		foreach ($country['Quote'] as $quote): ?>		
			
			<h3><?php echo $quote['title']; ?></h3>
			
			<blockquote><p><?php echo $quote['body']; ?>&nbsp;</p>
			<small><?php echo $quote['created']; ?>&nbsp;			
			<?php echo $this->Html->link(__('View'), array('controller' => 'quotes', 'action' => 'view', $quote['id'])); ?></small></blockquote>
				

	<?php endforeach; ?>

<?php endif; ?>

	
</div>
