<?php require_once 'autoload.php' ?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php require_once "tag-head.php" ?>

  <link rel="stylesheet" href="./assets/styles/form.css">
</head>

<body>
  <?php require_once 'thong-bao.php' ?>

  <div class="form-container">
    <form class="form" action="./handler/dang-ky.inc.php" method="post">
      <div class="form-heading">
        <h3>Đăng ký</h3>
      </div>
      <div class="form-group label-top">
        <label for="ho_ten" class="form-label"> Họ tên </label>
        <input id="ho_ten" placeholder="Tên đăng nhập" type="text" class="form-control" name="ho_ten"
          value="<?php echo Session::get('ho_ten', ['clear' => true]) ?>">
      </div>
      <div class="form-group label-top">
        <label for="sdt" class="form-label"> Số điện thoại </label>
        <input id="sdt" placeholder="Số điện thoại" type="text" class="form-control" name="so_dien_thoai"
          value="<?php echo Session::get('so_dien_thoai', ['clear' => true]) ?>">
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="email">Email</label>
        <input id="email" placeholder="Email" type="text" class="form-control" name="email"
          value="<?php echo Session::get('email', ['clear' => true]) ?>">

      </div>

      <div class="form-group label-top">
        <label class="form-label" for="mk">Mật khẩu</label>
        <input id="mk" placeholder="Mật khẩu" type="password" name="mat_khau" class="form-control">
      </div>

      <div class="form-btns">
        <a href="dang-nhap.php">
          <div class='button shadow' name="submit">Đăng nhập</div>
        </a>
        <button class='button' name="submit">Đăng ký</button>
      </div>
    </form>
  </div>

</body>

</html>
