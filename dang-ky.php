<?php require_once 'autoload.php' ?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php include_once "tag-head.php" ?>

  <link rel="stylesheet" href="/assets/styles/form.css">
</head>

<body>
  <div class="popper-container">
    <script type="text/javascript">
      function closeNotification() {
        document.querySelector('.notification').style.display = 'none';
      }
    </script>

    <?php if ($message = Session::clear()->get('message')): ?>
      <div class="notification">
        <div class="notification-content">
          <header class="notification-content-header">
            <h4>Đăng ký không thành công</h4>
          </header>
          <p class="notification-content-text"><?php echo $message ?></p>
        </div>
        <div class="notification-close"><i class="icon-close" onclick="closeNotification()"></i></div>
      </div>
    <?php endif ?>
  </div>

  <div class="container">
    <div class="form-container">
      <form class="form" action="/handler/dang-ky.inc.php" method="post">
        <h3 class="form-heading">Đăng ký</h3>
        <div class="form-group label-top">
          <label for="45gy35g" class="form-label"> Họ tên </label>
          <input id="45gy35g" placeholder="Tên đăng nhập" type="text" class="form-control" name="name"
            value="<?php echo Session::get('name', ['clear' => true]) ?>">
        </div>
        <div class="form-group label-top">
          <label for="sdsdwe" class="form-label"> Số điện thoại </label>
          <input id="sdsdwe" placeholder="Tên đăng nhập" type="text" class="form-control" name="phone"
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
          <button class='button' name="submit">Đăng ký</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
