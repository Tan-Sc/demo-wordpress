<?php
/*
Template Name: Home page
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'home-page';
  return $classes;
}
?>
<?php get_header(); ?>

<?php
include 'carousel.php';
include 'logo-carousel.php';

global $post;
$post_id    = $post->ID;
$industries = get_post_meta($post_id, 'group_industries', true);

$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 6,
);
$query = new WP_Query($args);
?>


<body>
  <main class="home">
    <section class="carousel">
      <?php echo get_section_carousel(); ?>
    </section>
    <section class="home__banner-content">
      <div class="block-content home__banner-content--container"></div>
    </section>
    <section class="content-section mb-10">
      <div class="block-content ">
        <h2 class="font-bold text-2xl uppercase text-center my-9 text-[#1e73be]">Lĩnh Vực Hoạt Động</h2>
        <div class="row grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 justify-center">
          <?php foreach ($industries as $item) : ?>
            <a href=<?php echo $item['link']; ?> class="flex flex-col items-center gap-10">
              <img class="img max-w-[400px] w-full" src=<?php echo $item['img']; ?>>
              <div class="title text-[#49b2ed] text-[19px] text-center mt-3 font-bold"><?php echo $item['title']; ?></div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="home__banner-content-2">
      <div class="block-content home__banner-content-2--container"></div>
    </section>
    <section class="home__news ">
      <div class="block-content">
        <div class=" mt-8 mb-8 border-b-[1px] pb-8 border-[#ccc]">
          <div class="border-solid border-b-2 border-[#49b2ed] mb-5">
            <span class="bg-[#49b2ed] text-white px-3 pt-2 pb-1 uppercase">Tin tức - sự kiện</span>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 list-content gap-8">
            <?php
            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header flex flex-col h-full">
                    <div class="featured-image w-full">
                      <?php the_post_thumbnail('custom-size'); ?>
                    </div>
                    <h2 class="entry-title mt-2 font-[700] text-base uppercase title-news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="desc-content">
                      <?php echo the_excerpt(); ?>
                    </div>
                    <div class="date-post">
                      <?php echo get_the_date(); ?>
                    </div>
                  </header>
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
    </section>

    <section class="home__link-carousel mb-16">
      <?php echo get_section_logo_carousel(); ?>
    </section>
  </main>
</body>

<?php
get_footer();
