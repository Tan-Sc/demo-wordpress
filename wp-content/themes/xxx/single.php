<?php get_header(); ?>

<div class="breadcrumbs">
  <?php
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
  }
  ?>
  <div id="primary" class="content">
    <main id="main" class="site-main">

      <?php
      while (have_posts()) :
        the_post();
      ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <div class="social-sharing">
            <h3>Share this post:</h3>
            <ul class="social-icons">
              <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="nofollow">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="nofollow">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </article><!-- #post-<?php the_ID(); ?> -->

      <?php endwhile; ?>
    </main>
  </div>

  <div id="second" class="block-content">
    <?php
    // Query for recent blog posts
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 5,
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
        </article><?php the_ID(); ?>
      <?php
      endwhile;
      wp_reset_postdata();
    else :
      ?>
      <p><?php _e('No Recent posts.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>