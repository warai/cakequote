<div class="container-fluid">
  <div class="row-fluid">
  	
		<div class="span10">	
		<div class="users form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<legend><?php echo __('Créer un compte'); ?></legend>
			<?php
				echo $this->Form->input('username');
				echo $this->Form->input('password');
				echo $this->Form->input('email');
				echo $this->Form->input('group_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
		</div>
	</div>
</div>
