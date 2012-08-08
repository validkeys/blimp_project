<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $this->Html->charset(); ?>
  <title><?php echo $title_for_layout; ?></title>
  <!--  meta info -->
  <?php
    echo $this->Html->meta(array("name"=>"viewport",
      "content"=>"width=device-width,  initial-scale=1.0"));
    echo $this->Html->meta(array("name"=>"description",
      "content"=>"this is the description"));
  ?>

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- styles -->
  <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-responsive');
    // echo $this->Html->css('docs');
    // echo $this->Html->css('prettify');
    echo $this->Html->css('kyle');
  ?>
  <!-- Bootstrap JS -->
  <?php 
    echo $this->Html->script(array('jquery-1.7.2.min','jquery-ui-1.8.22.custom.min','jquery.easing.1.3','jquery.easing.compatibility'));
    // echo $this->Html->script('bootstrap');
  ?>

  <!-- icons -->
  <?php
    echo  $this->Html->meta('icon',$this->webroot.'img/favicon.ico');
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'72x72'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'114x114'));
  ?>
  <!-- page specific scripts -->
    <?php echo $scripts_for_layout; ?>
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="150" data-twttr-rendered="true">
    <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse"
          data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo $this->webroot; ?>">Project Andora Rabbit</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active">
              <a href="<?php echo $this->webroot;?>">Home</a>
            </li>
            <li>
              <?php echo $this->html->link('+ Photo',array('controller' => 'photos','action'  => 'add')) ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 50px">

  <!-- Navbar ============================================= -->
  <!-- <div id="row"> -->
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
  <!-- </div> -->
  </div>
  <?php echo $this->element('sql_dump'); ?>
</body>
</html>