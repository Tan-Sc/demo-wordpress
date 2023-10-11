<?php
/*
Template Name: Page Industry
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'page-industry';
  return $classes;
}
?>
<?php get_header(); ?>

<?php
include 'carousel.php';

global $post;
$post_id    = $post->ID;
$industries = get_post_meta($post_id, 'group_industries', true);

?>
<section class="carousel">
  <?php echo get_section_carousel(); ?>
</section>
<section class="content-section">
  <div class="block-content">
    <div class="title font-bold text-2xl uppercase text-center my-9 text-red-500">
      <span> <?php echo get_the_title(); ?></span>
    </div>
    <div class=" row grid grid-cols-1 sm:grid-cols-2 grid-cols-auto gap-5 mb-10">
      <?php foreach ($industries as $item) : ?>
        <div class="flex flex-col items-center">
          <img class="img" src=<?php echo $item['img']; ?>>
          <div class="title text-[#49b2ed] text-[19px] text-center mt-3 font-bold"><?php echo $item['title']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
get_footer();
