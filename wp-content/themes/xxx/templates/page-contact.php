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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.068145510029!2d106.79900767588187!3d10.958225089201884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dba3d2ee710d%3A0xd21db6c37af9219c!2zQ8OUTkcgVFkgQ1AgSFXhuqROIExVWeG7hk4gVsOAIEtJ4buCTSDEkOG7ik5IIEFOIFRPw4BOIFRISeG6vlQgQuG7iiBDw5RORyBOR0hJ4buGUCBNSeG7gE4gTkFN!5e0!3m2!1sen!2s!4v1688399528578!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="block-content">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 pb-8 border-[#ccc]">
      <div class="content-contact leading-8">
        <?php the_content(); ?>
      </div>
      <div class="service">
        <div class="text-black uppercase text-center font-[700] text-2xl">
          Liên hệ với chúng tôi
        </div>
        <form id="form-contact" method="post" class="form">
          <input type="text" name="name" value="" size="40" aria-invalid="false" placeholder="Họ Tên*" />
          <input type="text" name="email" value="" size="40" aria-invalid="false" placeholder="Email*" />
          <input type="text" name="title" value="" size="40" aria-invalid="false" placeholder="Tiêu đề" />
          <input type="text" name="phone" value="" maxlength="15"  aria-invalid="false" placeholder="Số điện thoại" />
          <textarea name="content" value="" aria-invalid="false" placeholder="Nội dung" rows="4" cols="50"></textarea>
          <button type="summit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Gửi đi
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
        const form = $('#form-contact');
        const name = $('#form-contact [name="name"]');
        const email = $('#form-contact [name="email"]');
        const title = $('#form-contact [name="title"]');
        const phone= $('#form-contact [name="phone"]');
        const content = $('#form-contact [name="content"]');
        const input = $('#form-contact input');
        const textarea = $('#form-contact textarea');

        form.submit(function(e) {
          e.preventDefault();
            $.ajax({
              type: 'post',
              dataType: 'json',
              url: '<?php echo admin_url('admin-ajax.php'); ?>',
              data: {
                action: 'request_contact',
                postId: '<?php echo get_the_ID(); ?>',
                name: name.val(),
                email: email.val(),
                title: title.val(),
                phone: phone.val(),
                content: content.val(),
              }
            });
            form[0].reset();
        });
      });
</script>

<?php
get_footer();
