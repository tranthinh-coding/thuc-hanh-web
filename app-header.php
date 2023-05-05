<header>
  <nav class="container">
    <div class="nav-left">
      <a href="./">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="font-size: 40px;fill: rgba(0, 0, 0, 1);">
          <path d="M6 18.573c2.206 0 4-1.794 4-4V4.428L19 7.7v7.43a3.953 3.953 0 0 0-2-.557c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4V7a.998.998 0 0 0-.658-.939l-11-4A.999.999 0 0 0 8 3v8.13a3.953 3.953 0 0 0-2-.557c-2.206 0-4 1.794-4 4s1.794 4 4 4z"></path>
        </svg>
      </a>
    </div>

    <div class="nav-center">
      <a href="./" alt="Trang chủ"><i style="font-size: 30px" class='bx bxs-home-heart'></i></a>
      <a href="./<?php if (Session::has('query')) echo "?query=" . Session::get('query') ?>#san-pham">Sản phẩm</a>
      <a href="./#lien-he">Liên hệ</a>
    </div>

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
  </nav>
</header>

<style>
  .nav-center {
    display: flex;
    height: 100%;
    gap: 20px;
    align-items: center;
    justify-content: center;
  }

  .nav-center a {
    display: block;
    /* height: 100%; */
    padding: 10px 15px;
  }
  .nav-center a:hover {
    text-decoration: underline;
  }
</style>
