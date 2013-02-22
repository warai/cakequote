<div class="quotes view">
<h2><?php  echo __('Quote'); ?></h2>
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
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>

