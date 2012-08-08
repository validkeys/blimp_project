<div class="photos view">
<h2><?php  echo __('Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rabbit Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['rabbit_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geo Long'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['geo_long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geo Lat'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['geo_lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Taken'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['date_taken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), null, __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
