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
    <form class="form" action="./handler/dang-nhap.inc.php" method="post">
      <div class="form-heading">
        <h3>Đăng nhập</h3>
      </div>
      <div class="form-group label-top">
        <label class="form-label" for="4f456u">Email</label>
        <input id="4f456u" placeholder="Email" type="text" class="form-control" name="email"
          value="<?php echo Session::get('email', ['clear' => true]) ?>">
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="fnsdcm">Mật khẩu</label>
        <input id="fnsdcm" placeholder="Mật khẩu" type="password" name="mat_khau" class="form-control">
      </div>

      <div class="form-btns">
        <a href='dang-ky.php'>
          <div class='button shadow' name="submit">
            Đăng ký
          </div>
        </a>
        <button class='button' name="submit">Đăng nhập</button>
      </div>
    </form>
  </div>
</body>

</html>
