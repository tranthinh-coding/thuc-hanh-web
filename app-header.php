<header>
  <div class="header-nav">
    <nav class="container">
      <div class="nav-original">
        <div class="nav-left">
          <a href="./">
            <i style="font-size: 50px" class='bx bxl-deezer'></i>
          </a>
        </div>

        <ul class="nav-center">
          <li class="nav-item" alt="Trang chủ">
            <a href="./">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a href="./<?php if (Session::has('query')) echo "?query=" . Session::get('query') ?>#san-pham">Sản phẩm</a>
            <i class='bx bx-chevron-down'></i>

            <ul class="sidebar-list">
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=&?search=<?php echo Session::get('search') ?>"> Tất cả </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=piano&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/piano.svg" alt="" /> Đàn piano
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=organ&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/organ.svg" alt="" /> Đàn organ
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=guitar&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/guitar.svg" alt="" /> Đàn guitar
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=ukulele&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/ukulele.svg" alt="" /> Đàn Ukulele
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=kalimba&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/kalimba.svg" alt="" /> Đàn Kalimba
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=drum&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/drum.svg" alt="" /> Bộ trống -
                  Drum
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=am-thanh&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/speaker.svg" alt="" /> Âm thanh
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=micro&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/microphone.svg" alt="" />
                  Micro Nhạc cụ - chuyên nghiệp
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="?query=nhac-cu-dan-toc&?search=<?php echo Session::get('search') ?>">
                  <img src="./assets/images/icons/harp.svg" alt="" />
                  Nhạc vụ dân tộc
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./#lien-he">Liên hệ</a>
          </li>
        </ul>

        <div class="nav-right">
          <?php if (Session::has('ho_ten')) : ?>
            <?php echo Session::get('ho_ten') ?>
            <a href="dang-xuat.php">
              <button class="button shadow">Đăng xuất</button>
            </a>
          <?php else : ?>
            <a href="dang-ky.php">
              <button class="button shadow">Đăng ký</button>
            </a>
            <a href="dang-nhap.php">
              <button class="button">Đăng nhập</button>
            </a>
          <?php endif ?>
        </div>
      </div>
    </nav>
  </div>
</header>

<style>
  .top-header {}

  .header-nav {
    border-radius: 0 0 36px 36px;
    /* background-color: var(--theme-color); */
  }

  header {
    position: sticky;
    z-index: 1000;
    top: 0;
    width: 100%;
    min-height: 70px;
    height: auto;
    filter: drop-shadow(0 8px 32px rgba(0, 0, 0, 0.03));
    background: #fff;
    border-radius: 0 0 36px 36px;
    /* overflow: hidden; */
    /* color: #fff; */
  }

  .nav-original {
    width: 100%;
    height: var(--header-nav-height);
    display: flex;
    justify-content: space-between;
  }

  .nav-left {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: fit-content;
  }

  .nav-left .logo-link {
    width: 40px;
  }

  .nav-right {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    height: 100%;
    width: fit-content;
  }

  .nav-center {
    display: flex;
    height: 100%;
    gap: 20px;
    align-items: center;
    justify-content: center;
  }

  .nav-center .nav-item {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    position: relative;
    padding: 10px 15px;
  }

  .nav-center .nav-item:hover {
    text-decoration: underline;
  }

  .nav-center .nav-item .sidebar-list {
    position: absolute;
    top: 100%;
    left: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(30px);
    width: 300px;
    border-radius: 8px 20px 20px 20px;
    padding: 10px;
    background-color: var(--theme-layout);
    transition: all 0.25s ease;
  }

  .nav-center .nav-item:hover .sidebar-list {
    opacity: 1;
    visibility: visible;
    transform: translateY(8px);
    filter: drop-shadow(0 6px 28px rgba(0, 0, 0, 0.02));
  }

  .nav-center .nav-item::before {
    content: '';
    position: absolute;
    top: 100%;
    width: 100%;
    height: 12px;
    background-color: transparent;
  }

  .nav-center .nav-item .sidebar-list .sidebar-item img {
    display: none;
  }
</style>
