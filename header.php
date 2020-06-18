<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
  <!-- <title>About Dog</title> -->
  <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <header>
      <div class="menu-btn">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <nav class="menu">
        
          <?php wp_nav_menu( array(
              'theme_location'=>'mainmenu', 
              'container'     =>'', 
              'menu_class'    =>'',
              'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
          ?> 
        
        
      </nav>
    </header>