<?php echo $this->element('photos/index_heading') ?>
<p class="lead">Here are your photos arranged by time</p>
<ul class="photo-grid">
	<?php foreach ($photos as $time => $photolist): ?>
		<li>
			<div class="heading"><?php echo $time ?></div>
			<?php foreach ($photolist as $photo): ?>
				<img src="<?php echo $this->webroot . "attachments" . DS . "img" . DS . "small" . DS . $photo['Photo']['Photo_file_path'] ?>" alt="<?php echo $photo['Photo']['title'] ?>" />
			<?php endforeach ?>
		</li>
	<?php endforeach ?>
</ul>