<div class="container-fluid">
  <div class="row-fluid">
	<div class="span10">
		<fieldset>
			<legend><?php echo __('Connectez-vous'); ?></legend>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('username'); ?>
			<?php echo $this->Form->input('password'); ?>
			<?php echo $this->Form->end('login'); ?>
	</div>
</div>
</div>