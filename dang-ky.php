<?php require_once './conn.inc.php' ?>
<?php require_once './function.php' ?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php include_once "./tag-head.php" ?>

  <link rel="stylesheet" href="/assets/styles/form.css">
</head>

<body>
  <div class="container">
    <form action="/handler/dang-ky.inc.php" method="post">
      <div class="form-group">
        <label for="" class="form-label">Ho ten</label>
        <input type="text" class="form-control" value="<?php echo getFlashValue('name') ?>">
        <br />
        <label for="">Email</label>
        <input type="text" class="form-control" value="<?php echo getFlashValue('email') ?>">
        <br />
        
        <label for="">Mat khau</label>
        <input type="text" class="form-control">
      </div>

      <div class="form-btns">
        <button name="submit">Đăng ký</button>
      </div>
    </form>
  </div>
</body>

</html>
