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
                  <header class="entry-header flex flex-col items-center h-full">
                    <div class="featured-image w-full">
                      <?php the_post_thumbnail('custom-size'); ?>
                    </div>
                    <h2 class="entry-title mt-2 font-[700] text-base uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
    </section>
    <section class="mt-8">
      <div class="block-content">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-8 border-b-[1px] pb-8 border-[#ccc]">
          <div class="home__service">
            <div class="border-solid border-b-2 border-[#49b2ed]">
              <span class="bg-[#49b2ed] text-white px-3 pt-2 pb-1 uppercase">Yêu cầu dịch vụ của khách hàng</span>
            </div>
            <form action="" class="form">
              <input type="text" name="name" value="" size="40" aria-invalid="false" placeholder="Họ Tên*" />
              <input type="text" name="email" value="" size="40" aria-invalid="false" placeholder="Email*" />
              <input type="text" name="title" value="" size="40" aria-invalid="false" placeholder="Tiêu đề" />
              <input type="text" name="phone" value="" size="40" aria-invalid="false" placeholder="Số điện thoại" />
              <textarea name="content" value="" aria-invalid="false" placeholder="Nội dung" rows="4" cols="50"></textarea>
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Gửi đi
              </button>
            </form>
          </div>
          <div class="home__location">
            <div class="border-solid border-b-2 border-[#49b2ed]">
              <span class="bg-[#49b2ed] text-white px-3 pt-2 pb-1 uppercase">Yêu cầu dịch vụ của khách hàng</span>
            </div>
            <div class="mt-5">
              <div className="mt-5 flex items-center gap-5">
                <span>
                  Địa chỉ: Tầng 19 tòa nhà VTC Online, số 18 Tam Trinh, Phường Minh
                  Khai, Quận Hai Bà Trưng, Hà Nội
                </span>
              </div>
              <div className="mt-5 flex items-center gap-5">
                <span>Email : TTKDKTATKV1@molisa.gov.vn</span>
              </div>
              <div className="mt-5 flex items-center gap-5">
                <span>Tel: (+84) 39438049</span>
              </div>
              <div className="mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125416.68938543226!2d106.67622399999999!3d10.7905024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4b3330bcc7%3A0x4db964d76bf6e18e!2sSaigon%20Zoo%20and%20Botanical%20Garden!5e0!3m2!1sen!2s!4v1686966804438!5m2!1sen!2s" width="100%" height="300" allowFullScreen={true} loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
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
