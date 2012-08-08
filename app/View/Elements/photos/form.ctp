<div class="photos form">
<?php echo $this->Form->create('Photo', array('type'	=> 'file')); ?>
	<fieldset>
		<legend><?php echo ($edit_mode == true) ? __('Edit Photo') : __('Add Photo'); ?></legend>
	<?php
		echo ($edit_mode == true) ? $this->Form->input('id') : '';
		echo $this->Form->input('Photo', array('type'	=> 'file'));
		echo $this->Form->input('rabbit_id', array('type'	=> 'text','default'	=> 1));
		echo $this->Form->input('geo_long',array('default'	=> 1));
		echo $this->Form->input('geo_lat',array('default'	=> 1));
		echo $this->Form->input('date_taken');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Photo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Photo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
