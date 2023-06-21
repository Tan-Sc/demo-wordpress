<?php
function get_section_carousel()
{
  ob_start();

  $array_media = get_post_meta( get_the_ID(), 'group_img_carousel', true );

?>
  <section class="row global-section">
    <div class="container">
      <div class="global-carousel">
        <?php
        foreach ($array_media as $value) {
        ?>
          <img class="img" src=<?php echo $value['img']; ?>>
        <?php
        }
        ?>
      </div>
    </div>
  </section>

<script>
  jQuery(document).ready(function() {
    jQuery('.global-carousel').slick({
        dots: false,
				autoplay: true,
				autoplaySpeed: 2000,
				infinite: true,
        slidesPerRow: 1,
    });
});
</script>

<?php
  return ob_get_clean();
}

?>
