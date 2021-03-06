<?php echo $this->element('photos/index_heading') ?>
<p class="lead">Here are your photos arranged by date</p>
<div class="alert alert-error"><strong>TODO:</strong> Add in date range picker w/ ajax submit</div>
<ul class="photo-grid">
	<?php foreach ($photos as $date => $photolist): ?>
		<li>
			<div class="heading"><?php echo date('F jS', strtotime($date)) ?></div>
			<?php foreach ($photolist as $photo): ?>
			<div class="image-holder">
				<img src="<?php echo $this->webroot . "attachments" . DS . "img" . DS . "small" . DS . $photo['Photo']['Photo_file_path'] ?>" alt="<?php echo $photo['Photo']['title'] ?>" />
			</div>
			<?php endforeach ?>
		</li>
	<?php endforeach ?>
</ul>