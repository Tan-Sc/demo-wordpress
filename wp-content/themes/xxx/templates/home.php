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

global $post;
$post_id    = $post->ID;
$industries = get_post_meta($post_id, 'group_industries', true);

?>
<section class="carousel">
  <?php echo get_section_carousel(); ?>
</section>
<section class="content-section">
  <div class="block-content ">
    <div class="font-bold text-2xl uppercase text-center my-9 text-[#1e73be]">Lĩnh Vực Hoạt Động</div>
    <div class="row grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ($industries as $item) : ?>
        <a href=<?php echo $item['link']; ?> class="flex flex-col items-center gap-10 max-w-[400px]">
          <img class="img" src=<?php echo $item['img']; ?>>
          <div class="title text-[#49b2ed] text-[19px] text-center mt-3 font-bold"><?php echo $item['title']; ?></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php
get_footer();
