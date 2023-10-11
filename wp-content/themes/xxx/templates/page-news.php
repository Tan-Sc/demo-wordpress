<?php
/*
Template Name: Page News
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'page-news';
  return $classes;
}
?>
<?php get_header(); ?>

<?php
include 'carousel.php';
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 6,
);
$query = new WP_Query($args);
?>
<section class="carousel">
  <?php echo get_section_carousel(); ?>
</section>
<section class="content-section">
  <div class="block-content">
    <div class="title font-bold text-2xl uppercase text-center my-9 text-red-500">
      <span> <?php echo get_the_title(); ?></span>
    </div>
    <section class="home__news ">
      <div class="block-content">
        <div class=" mt-8 mb-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 list-content gap-8">
            <?php
            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <a href="<?php the_permalink(); ?>">
                    <header class="entry-header flex flex-col h-full">
                      <div class="featured-image w-full">
                        <?php the_post_thumbnail('custom-size'); ?>
                      </div>
                      <h2 class="entry-title mt-2 font-[700] text-base uppercase title-news text-center"><?php the_title(); ?></h2>
                    </header>
                  </a>
                </article>
              <?php
              endwhile;
              wp_reset_postdata();
            else :
              ?>
              <p><?php _e('Không có bài đăng.'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<?php
get_footer();
