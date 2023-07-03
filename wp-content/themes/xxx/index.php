<?php get_header(); ?>

<div class="block-content">
  <div class="breadcrumbs">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
    }
    ?>
  </div>
  <?php
  $category_title = single_cat_title('', false); // Get the category title
  echo '<h1 class="page-title text-center uppercase text-2xl font-bold mt-5">' . $category_title . '</h1>';
  ?>
  <div class="md:grid md:grid-cols-[69%,30%] block gap-10 pt-10 pb-16">
    <main class="site-main">
      <?php
      // Get the current category
      $current_category = get_queried_object();

      // Query for posts with the current category
      $args = array(
        'post_type'      => 'post',
        'category_name'  => $current_category->slug,
        'posts_per_page' => -1, // Display all posts
      );
      $query = new WP_Query($args);
      ?>
      <div class="flex flex-col gap-5 list-categories">
        <?php
        if ($query->have_posts()) :
          while ($query->have_posts()) :
            $query->the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <h2 class="entry-title text-xl leading-[1.3] font-[700] mb-3 text-blac"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header>

              <div class="grid grid-cols-[40%,60%] gap-4">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="featured-image">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                <?php endif; ?>
                <div class="entry-content">
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
                </div>
              </div>
            </article>
            <!-- <?php the_ID(); ?> -->
          <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p><?php _e('No posts found.'); ?></p>
        <?php endif; ?>
      </div>

    </main>

    <div class="content box-style">
      <div class="border-solid border-b-2 border-[#49b2ed]">
        <span class="bg-[#49b2ed] text-white px-3 pt-2 pb-1 uppercase">tin tức mới</span>
      </div>
      <?php
      $current_category = get_queried_object();
      $category_title = single_cat_title('', false);
      $args = array(
        'post_type'      => 'post',
        'category_name'  => $current_category->slug,
        'posts_per_page' => 5,
      );
      $query = new WP_Query($args);
      ?>
      <div class="flex flex-col list-content">
        <?php
        if ($query->have_posts()) :
          while ($query->have_posts()) :
            $query->the_post();
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <h2 class="entry-title uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </header><!-- .entry-header -->
            </article>
          <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p><?php _e('No posts found.'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>