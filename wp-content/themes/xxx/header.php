<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
  <?php
  $options            = get_option('banner_settings');
  $field_image        = 'banner_image';
  $field_hyperlink    = 'banner_hyperlink';

  $url_img    = $options[$field_image];
  $hyperlink  = $options[$field_hyperlink];

  ?>
  <section class="global-banner" style="background-color: #1e72be">
    <div class="block-content">
      <a href="<?php echo $hyperlink; ?>"> <img src=<?php echo $url_img; ?>></a>
    </div>
  </section>

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