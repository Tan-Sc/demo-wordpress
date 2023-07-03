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

global $post;
$post_id  = $post->ID;
$phone    = get_post_meta($post_id, 'hotline', true);

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
<a href="tele://<?php echo $phone; ?>" id="hotline" class="flex items-center justify-center fixed bottom-12 left-12 w-12 h-12 text-black rounded-full">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="50px" height="50px">
    <path fill="#0f0" d="M13,42h22c3.866,0,7-3.134,7-7V13c0-3.866-3.134-7-7-7H13c-3.866,0-7,3.134-7,7v22	C6,38.866,9.134,42,13,42z" />
    <path fill="#fff" d="M35.45,31.041l-4.612-3.051c-0.563-0.341-1.267-0.347-1.836-0.017c0,0,0,0-1.978,1.153	c-0.265,0.154-0.52,0.183-0.726,0.145c-0.262-0.048-0.442-0.191-0.454-0.201c-1.087-0.797-2.357-1.852-3.711-3.205	c-1.353-1.353-2.408-2.623-3.205-3.711c-0.009-0.013-0.153-0.193-0.201-0.454c-0.037-0.206-0.009-0.46,0.145-0.726	c1.153-1.978,1.153-1.978,1.153-1.978c0.331-0.569,0.324-1.274-0.017-1.836l-3.051-4.612c-0.378-0.571-1.151-0.722-1.714-0.332	c0,0-1.445,0.989-1.922,1.325c-0.764,0.538-1.01,1.356-1.011,2.496c-0.002,1.604,1.38,6.629,7.201,12.45l0,0l0,0l0,0l0,0	c5.822,5.822,10.846,7.203,12.45,7.201c1.14-0.001,1.958-0.248,2.496-1.011c0.336-0.477,1.325-1.922,1.325-1.922	C36.172,32.192,36.022,31.419,35.45,31.041z" />
  </svg>
</a>

<button id="scrollBtn" class="flex items-center justify-center fixed bottom-12 right-12 w-12 h-12 text-black bg-[#33dfd6] rounded-full scroll-to-top">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
  </svg>
</button>
<footer>
  <div class="bg-[#02336b] pt-14 pb-5 text-white">
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
  <div class="bg-[#022146]">
    <div class="block-content">
      <span class="text-white flex items-center py-2 text-[14px] leading-4">
        Copyright &copy; 2022. All rights reserved.
      </span>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>