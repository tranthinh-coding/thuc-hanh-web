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
        <label for="45gy35g" class="form-label"> Họ tên </label>
        <input id="45gy35g" placeholder="Tên đăng nhập" type="text" class="form-control" name="name"
          value="<?php echo Session::get('name', ['clear' => true]) ?>">
      </div>
      <div class="form-group label-top">
        <label for="sdsdwe" class="form-label"> Số điện thoại </label>
        <input id="sdsdwe" placeholder="Số điện thoại" type="text" class="form-control" name="phone"
          value="<?php echo Session::get('phone', ['clear' => true]) ?>">
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="4f456u">Email</label>
        <input id="4f456u" placeholder="Email" type="text" class="form-control" name="email"
          value="<?php echo Session::get('email', ['clear' => true]) ?>">

      </div>

      <div class="form-group label-top">
        <label class="form-label" for="fnsdcm">Mật khẩu</label>
        <input id="fnsdcm" placeholder="Mật khẩu" type="text" name="password" class="form-control">
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
