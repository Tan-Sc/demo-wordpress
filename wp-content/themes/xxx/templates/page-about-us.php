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
<div class="block-content">
  <div class="title font-bold text-2xl uppercase text-center my-9 text-red-500">
    <span> <?php echo get_the_title(); ?></span>
  </div>
  <div class="pb-8 leading-8">
    <?php the_content(); ?>
  </div>
</div>
<?php
get_footer();
