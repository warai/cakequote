
<div class="container-fluid">
  <div class="row-fluid">

	<div class="span10">
		<div class="quotes form">
		<?php echo $this->Form->create('Quote'); ?>
			<fieldset>
				<legend><?php echo __('Editer la citation'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('title');
				echo $this->Form->input('body');
			
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>

</div>
</div>
