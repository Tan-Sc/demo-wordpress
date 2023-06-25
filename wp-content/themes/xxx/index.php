<?php get_header(); ?>

<div class="block-content">
  <div class="breadcrumbs">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
    }
    ?>
  </div>
  <main id="main" class="site-main">
    <?php
    // Get the current category
    $current_category = get_queried_object();
    $category_title = single_cat_title('', false); // Get the category title

    echo '<h1 class="page-title">' . $category_title . '</h1>';

    // Query for posts with the current category
    $args = array(
      'post_type'      => 'post',
      'category_name'  => $current_category->slug,
      'posts_per_page' => -1, // Display all posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
          </div>
        </article><?php the_ID(); ?>
      <?php
      endwhile;
      wp_reset_postdata();
    else :
      ?>
      <p><?php _e('No posts found.'); ?></p>
    <?php endif; ?>

  </main>
</div>

<?php get_footer(); ?>