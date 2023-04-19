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
            <h4>Đăng nhập không thành công</h4>
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
          <input id="fnsdcm" placeholder="Mật khẩu" type="text" name="password" class="form-control">
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
  </div>

  <style>

  </style>
</body>

</html>
