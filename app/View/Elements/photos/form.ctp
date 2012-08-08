<header class="jumbotron subhead" id="overview">
  <h1><?php echo ($edit_mode == true) ? __('Edit Photo') : __('Add Photo'); ?></h1>
  <p class="lead">You're about to do something to a photo.</p>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
    </ul>
  </div>
</header>


<div class="photos form form-horizontal well">
<?php echo $this->Form->create('Photo', array('type'	=> 'file')); ?>
	<fieldset>
	<?php
		echo ($edit_mode == true) ? $this->Form->input('id') : '';
		echo $this->Form->input('Photo', array('type'	=> 'file'));
		echo $this->Form->input('rabbit_id', array('type'	=> 'text','default'	=> 1));
		echo $this->Form->input('geo_long',array('default'	=> 1));
		echo $this->Form->input('geo_lat',array('default'	=> 1));
		echo $this->Form->input('date_taken');
	?>
	</fieldset>
<?php echo $this->Form->end(array(
'text'	=> __('Submit'),
'class'	=> 'btn btn-primary',
'div'	=> array(
	'style'	=> array('margin'	=> '10px 0','clear'	=> 'both')
	))); ?>
</div>