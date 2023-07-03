<?php
$menuItems = [
  'Trang Chủ' => 'index.php',
  'Giới thiệu' => 'about.php',
  'Lĩnh Vực Hoạt Động' => 'page-industry.php',
  'Tin tức' => 'page-news.php',
  'Tuyển dụng' => 'contact.php',
  'Liên hệ' => 'contact.php'
];
$menuHTML = array_map(function ($title, $url) {
  return "<li><a href='$url' class='text-white text-[14px] leading-4 hover:text-[#676e6f]'>$title</a></li>";
}, array_keys($menuItems), $menuItems);

$options       = get_option('banner_settings');
$field_phone   = 'phone_hotline';
$phone         = $options[$field_phone];

?>

<?php
echo '<script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#scrollBtn").fadeIn();
                } else {
                    $("#scrollBtn").fadeOut();
                }
            });
            $("#scrollBtn").click(function() {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
        });
    </script>';
?>

<button id="scrollBtn" class="flex items-center justify-center fixed bottom-12 right-12 w-12 h-12 text-black bg-[#33dfd6] rounded-full scroll-to-top">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
  </svg>
</button>
<footer>
  <div class="bg-[#02336b] pt-14 pb-16 text-white">
    <div class="block-content grid grid-cols-1 md:grid-cols-2  gap-14 lg:grid-cols-3">
      <div>
        <div class="uppercase text-[15px] mb-8">
          CÔNG TY CỔ PHẦN HUẤN LUYỆN VÀ KIỂM ĐỊNH AN TOÀN THIẾT BỊ CÔNG NGHIỆP MIỀN NAM
        </div>
        <div>
          <?php echo "<ul class='flex flex-col gap-3 '>" . implode('', $menuHTML) . "</ul>";  ?>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">Trụ sở chính</div>
        <div class="flex flex-col gap-2">
          <p>Mã số thuế: 3603903293</p>
          <p>
            Địa chỉ: E22 Đường D2, Khu Phố 2, Phường Bửu Long, Thành phố Biên Hoà, Tỉnh Đồng Nai.
          </p>
          <p>Số tài khoản: 379888686 tại Ngân hàng TMCP Quân đội (MBBank) - Chi nhánh Tân Cảng.</p>
          <p>Điện thoại: (0251)395.3186</p>
          <p>Website: miennamkiemdinh.com </p>
        </div>
      </div>
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.068145510029!2d106.79900767588187!3d10.958225089201884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dba3d2ee710d%3A0xd21db6c37af9219c!2zQ8OUTkcgVFkgQ1AgSFXhuqROIExVWeG7hk4gVsOAIEtJ4buCTSDEkOG7ik5IIEFOIFRPw4BOIFRISeG6vlQgQuG7iiBDw5RORyBOR0hJ4buGUCBNSeG7gE4gTkFN!5e0!3m2!1sen!2s!4v1688399528578!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <div class="bg-[#022146] fixed bottom-0 w-full">
    <div class="block-content">
      <span class="flex items-center py-4 text-xl uppercase text-white leading-4">
        <a href="tel:<?php echo $phone; ?>" id="hotline">
          Hotline: <?php echo $phone; ?>
        </a>
      </span>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>