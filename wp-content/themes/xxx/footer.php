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
  <div class="bg-[#02336b] pt-14 pb-10 text-white">
    <div class="block-content grid grid-cols-1 md:grid-cols-2  gap-14 lg:grid-cols-3">
      <div>
        <div class="uppercase text-[15px] mb-8">
          TRUNG TÂM KIỂM ĐỊNH KỸ THUẬT AN TOÀN KHU VỰC I
        </div>
        <div>
          <?php echo "<ul class='flex flex-col gap-3 '>" . implode('', $menuHTML) . "</ul>";  ?>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">Trụ sở chính</div>
        <div>
          <p>
            Địa chỉ:
            <strong>
              Tầng 19 tòa nhà VTC Online, số 18 Tam Trinh, Phường Minh Khai,
              Quận Hai Bà Trưng, Hà Nội
            </strong>
          </p>
          <p>Tel: (+84) 39438049</p>
          <p>Fax: (+84) 38225401</p>
          <p>MST: 0100110341</p>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">
          TỔ KIỂM ĐỊNH TP HỒ CHÍ MINH
        </div>
        <div>
          <p>
            Địa chỉ: A75/6B/46 Bạch Đằng, Phường 2, Quận Tân Bình, TP Hồ Chí
            Minh
          </p>
          <p>Tổ trưởng: Ông Nguyễn Đức Hiếu</p>
          <p>Mobile: 0988 366 615</p>
          <p>ĐT/Fax: 086 296 3981</p>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">
          TỔ KIỂM ĐỊNH KHU VỰC MIỀN TRUNG
        </div>
        <div>
          <div>
            <p>
              Địa chỉ: số 469 đường Trường Chinh, phường An Khê, quận Thanh
              Khê, thành phố Đà Nẵng
            </p>
            <p>Tổ trưởng: Ông Nguyễn Việt Anh</p>
            <p>Mobile: 0903 205 595</p>
            <p>Email: vietanhkd1@gmail.com</p>
          </div>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">
          VĂN PHÒNG ĐẠI DIỆN TẠI LÀO CAI
        </div>
        <div>
          <div>
            <p>
              Địa chỉ: Số 311 đường Hoàng Quốc Việt, Tổ 3, phường Bắc Lệnh,
              TP Lào Cai, Tỉnh Lào Cai.
            </p>
            <p>Trưởng đại diện: Ông Lê Việt Cường</p>
            <p>Mobile: 0912 292 097</p>
            <p>Mail: lecuong1102@gmail.com</p>
          </div>
        </div>
      </div>
      <div>
        <div class="uppercase text-[15px] mb-8">
          TRẠM KIỂM ĐỊNH CHAI ÁP LỰC HẢI PHÒNG
        </div>
        <div>
          <div>
            <p>Địa chỉ: KCN Cành Hầu, Quán Trữ, Kiến An, Hải Phòng</p>
            <p>Trưởng trạm: Ông Trần Ngọc Trung</p>
            <p>Mobile: 0912 665 253</p>
            <p>ĐT/Fax: 0313 576 005</p>
            <p>Mail: trungkd1.hp@gmail.com</p>
          </div>
        </div>
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