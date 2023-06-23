<?php get_header(); ?>
<div class="breadcrumbs">
  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
  }
  ?>
</div>

<main>

<div class="block-content">

  <?php echo the_content(); ?>
</div >

</main>

<?php get_footer(); ?>