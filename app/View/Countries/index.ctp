<div class="countries index">
	<h2><?php echo __('Coutumes par pays'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($countries as $country): ?>
	<tr>
		
		<td><?php echo h($country['Country']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Voir les coutumes'), array('action' => 'view', $country['Country']['id'])); ?>
			
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

