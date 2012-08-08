<?php 
	$code = "$(document).ready(function(){
		$('div.image-holder').mouseover(function(){
			$(this).animate({
				height: 263
			}, 250, 'easeInOutCirc');
		}).mouseleave(function(){
			$(this).animate({
				height: 130,
			}, 250, 'easeInOutCirc');
		});
	});";
	echo $this->Html->scriptBlock($code, array('escape'	=> false));
?>
<header class="jumbotron subhead" id="overview">
  <h1>Photos</h1>
  <p class="lead">Here are your latest photos. Click below to organize them by Rabbit, Time or Date!</p>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#code">By Rabbit</a></li>
      <li <?php echo ($org == "date") ? 'class="active"' : ''; ?>><?php echo $this->html->link('By Date', array('controller'	=> 'photos','action'	=> 'index','org'=>'date')) ?></li>
      <li <?php echo ($org == "time") ? 'class="active"' : ''; ?>><?php echo $this->html->link('By Time', array('controller'	=> 'photos','action'	=> 'index','org'=>'time')) ?></li>
    </ul>
  </div>
</header>
