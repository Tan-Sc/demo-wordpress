<?php
function get_section_logo_carousel()
{
  ob_start();

  $array_logo = get_post_meta(get_the_ID(), 'group_logo_carousel', true);

?>
  <section class="logo-carousel-section">
    <div class="block-content">
      <div class="logo-carousel">
        <?php
        foreach ($array_logo as $value) {
        ?>
          <a href="<?php echo $value['link']; ?>" class="img" style="background-image: url(<?php echo $value['img']; ?>); height: 500px; background-size: cover; background-repeat: no-repeat; background-position: center center;">
          </a>
        <?php
        }
        ?>
      </div>
    </div>
  </section>

  <script>
    jQuery(document).ready(function() {
      jQuery('.logo-carousel').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        slidesPerRow: 1,
        arrows: true,
        slidesToShow: 3
      });
    });
  </script>

<?php
  return ob_get_clean();
}

?>