<div class="quotes view">

	<dl class="dl-horizontal">
		
		<h2><?php echo h($quote['Quote']['title']); ?>&nbsp;</h2>
		
		<p class="lead">
			<?php echo h($quote['Quote']['body']); ?>
			&nbsp;
		</p>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quote['User']['username'], array('controller' => 'users', 'action' => 'view', $quote['User']['id'])); ?>
			&nbsp;
		</dd>
				<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quote['Country']['name'], array('controller' => 'countries', 'action' => 'view', $quote['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>

