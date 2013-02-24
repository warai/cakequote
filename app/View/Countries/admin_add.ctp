<div class="container-fluid">
  <div class="row-fluid">
	<div class="span2">	
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>

				<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span10">	
		<div class="groups form">
		<?php echo $this->Form->create('Country'); ?>
			<fieldset>
				<legend><?php echo __('Add Country'); ?></legend>
			<?php
				echo $this->Form->input('name');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
</div>