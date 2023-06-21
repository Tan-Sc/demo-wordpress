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
    <div class="container">
        <div class="title">
            <span> <?php echo get_the_title(); ?></span>
        </div>
        <div class="row">
            <?php foreach ($industries as $item) : ?>
                <img class="img" src=<?php echo $item['img']; ?>>
                <div class="title"><?php echo $item['title']; ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
