<ul>
	<?php foreach ($photos as $date => $photolist): ?>
		<li>
			<div><?php echo $date ?></div>
			<?php foreach ($photolist as $photo): ?>
				<img src="<?php echo $this->webroot . "attachments" . DS . "img" . DS . "small" . DS . $photo['Photo']['Photo_file_path'] ?>" alt="<?php echo $photo['Photo']['title'] ?>" />
			<?php endforeach ?>
		</li>
	<?php endforeach ?>
</ul>