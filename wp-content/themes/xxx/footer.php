<?php
$menuItems = [
  'Trang Chủ' => 'index.php',
  'Giới thiệu' => 'about.php',
  'Lĩnh Vực Hoạt Động' => 'services.php',
  'Tin tức' => 'contact.php',
  'Tuyển dụng' => 'contact.php',
  'Liên hệ' => 'contact.php'
];
$menuHTML = array_map(function ($title, $url) {
  return "<li><a href='$url' class='text-white text-[14px] leading-4 hover:text-[#676e6f]'>$title</a></li>";
}, array_keys($menuItems), $menuItems);
?>

<footer>
  <div class="bg-[#02336b] pt-14 pb-5 text-white">
    <div class="block-content grid grid-cols-1 md:grid-cols-2  gap-12 lg:grid-cols-3">
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