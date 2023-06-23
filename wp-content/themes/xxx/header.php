<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
  <header>
    <div class="nav-bar-menu">
      <?php
      wp_nav_menu(array(
        'echo'      => true,
        'container' => '',
        'theme_location' => 'primary'
      ));
      ?>
    </div>
  </header>