<?php
/*
Template Name: Page Introduce
*/
add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'page-intro';
  return $classes;
}
?>
<?php get_header(); ?>

<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="page-content">
        <?php echo the_content(); ?>
      </div>
    </div>
  </div>
</section>
<section class="news-other">
  <div class="container">
    <div class="row">
      <h3>Tin tức khác</h3>
      <hr>
    </div>
  </div>
</section>
<?php
get_footer();
