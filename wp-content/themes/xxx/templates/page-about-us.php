<?php
/*
Template Name: Page About Us
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
    $classes[] = 'about-us';
    return $classes;
}
get_header();
?>
    <h1>adad</h1>
<?php
get_footer();
