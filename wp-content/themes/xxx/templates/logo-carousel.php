<?php
function get_section_logo_carousel()
{
  ob_start();

  $array_logo = get_post_meta(get_the_ID(), 'group_logo_carousel', true);

?>
  <section class="logo-carousel-section">
    <div class="block-content">
      <h2 class="font-bold text-2xl uppercase text-center my-9 text-[#1e73be]">LIÊN KẾT WEBSITE</h2>
      <div class="logo-carousel">
        <?php
        foreach ($array_logo as $value) {
        ?>
          <a href="<?php echo $value['link']; ?>">
            <img src=<?php echo $value['img']; ?> alt="link">
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