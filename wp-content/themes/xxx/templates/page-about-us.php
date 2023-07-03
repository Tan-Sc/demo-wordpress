<?php
/*
Template Name: Page About Us
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'about-us';
  return $classes;
}
get_header();
?>
<div>
  <?php the_content(); ?>
</div>
<?php
get_footer();
