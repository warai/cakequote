<div class="container-fluid">
  <div class="row-fluid">
  	
	<div class="span10">	
		<div class="quotes form">
		<?php echo $this->Form->create('Quote'); ?>
			<fieldset>
				<legend><?php echo __('Ajouter une coutume'); ?></legend>
			<?php
				echo $this->Form->input('title');
				echo $this->Form->input('body');
				echo $this->Form->input('country_id');
				
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
</div>

