<?php get_header(); ?>
<div class="breadcrumbs">
  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
  }
  ?>
</div>


<main>
  <h1 class="text-black text-3xl">Blog page</h1>
</main>

<?php get_footer(); ?>