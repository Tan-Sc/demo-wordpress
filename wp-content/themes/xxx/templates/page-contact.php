<?php
/*
Template Name: Page Contact
*/

add_filter('body_class', 'add_body_class');

function add_body_class($classes)
{
  $classes[] = 'page-contact';
  return $classes;
}
?>
<?php get_header(); ?>

<section class="contact">
  <div class="mb-10">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125416.68938543226!2d106.67622399999999!3d10.7905024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4b3330bcc7%3A0x4db964d76bf6e18e!2sSaigon%20Zoo%20and%20Botanical%20Garden!5e0!3m2!1sen!2s!4v1686966804438!5m2!1sen!2s" width="100%" height="300" allowFullScreen="{true}" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="block-content">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-8 border-b-[1px] pb-8 border-[#ccc]">
      <div class="content-contact">
        <?php the_content(); ?>
      </div>
      <div class="service">
        <div class="text-black uppercase text-center font-[700] text-2xl">
          Liên hệ với chúng tôi
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
      <!-- <div class="home__location">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125416.68938543226!2d106.67622399999999!3d10.7905024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4b3330bcc7%3A0x4db964d76bf6e18e!2sSaigon%20Zoo%20and%20Botanical%20Garden!5e0!3m2!1sen!2s!4v1686966804438!5m2!1sen!2s" width="100%" height="300" allowFullScreen="{true}" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>