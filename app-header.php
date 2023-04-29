<header>
  <nav class="container">
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
  </nav>=
</header>
