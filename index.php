<?php require_once './autoload.php' ?>

<?php
$sql = "SELECT * FROM san_pham";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php include_once "./tag-head.php" ?>

  <link rel="stylesheet" href="./assets/styles/form.css" />
</head>

<body>
  <?php require_once './thong-bao.php' ?>

  <?php require_once './app-header.php'  ?>

  <section class="container content-container">
    <aside>
      <ul>
        <li><a href=""> Trang chủ </a></li>
        <li><a href=""> Danh sách sản phẩm </a></li>
        <li><a href=""> Thông tin bla bla </a></li>
      </ul>
    </aside>

    <main>
      <?php while ($sanpham = mysqli_fetch_array($result)) : ?>
        <div class="card">
          <div class="card-image">
            <img src="./assets/images/san_pham/<?php echo $sanpham['hinh_anh'] ?>" />
          </div>
          <a href="./chi-tiet-san-pham.php?id=<?php echo $sanpham['id'] ?>">
            <h3 class="card-title"><?php echo $sanpham['ten_san_pham'] ?></h3>
          </a>
          <div class="float-box">
            <p class="button shadow" style="white-space: nowrap;"><?php echo formatCurrency($sanpham['gia']) ?> đ</p>
          </div>
        </div>
      <?php endwhile ?>
    </main>
  </section>

  <section class="container form-section">
    <form class="form" action="./handler/lien-he.inc.php" method="post">
      <div class="form-heading">
        <h3>Liên hệ với chúng tôi</h3>
      </div>
      <div class="form-group label-top">
        <label for="ho_ten" class="form-label"> Họ tên </label>
        <input id="ho_ten" placeholder="Tên đăng nhập" type="text" class="form-control" name="ho_ten" value="<?php echo Session::get('ho_ten') ?>" />
      </div>
      <div class="form-group label-top">
        <label for="sdt" class="form-label"> Số điện thoại </label>
        <input id="sdt" placeholder="Số điện thoại" type="text" class="form-control" name="so_dien_thoai" value="<?php echo Session::get('so_dien_thoai') ?>" />
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="email">Email</label>
        <input id="email" placeholder="Email" type="text" class="form-control" name="email" value="<?php echo Session::get('email') ?>" />
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="loi_nhan">Lời nhắn</label>
        <textarea row="40" id="loi_nhan" placeholder="Lời nhắn" name="loi_nhan" class="form-control"><?php echo Session::get('loi_nhan') ?></textarea>
      </div>

      <div class="form-btns">
        <button class="button" name="submit">Gửi lời nhắn</button>
      </div>
    </form>
  </section>

  <?php require_once "./app-footer.php" ?>

  <style>
    .form {
      position: relative;
      filter: drop-shadow(0 8px 32px rgba(0, 0, 0, 0.021));
    }

    .content-container {
      display: flex;
    }

    section.form-section {
      display: flex;
      justify-content: center;
    }

    aside {
      width: 300px;
      /* background: #ddd; */
      height: 600px;
    }

    main {
      padding: 0 14px;
      display: flex;
      gap: 40px 20px;
      align-items: flex-start;
      justify-content: flex-start;
      flex-wrap: wrap;
      /* height: 600px; */
      width: 100%;
    }

    main .card {
      display: block;
      flex: 1;
      min-width: 180px;
      max-width: 25%;
    }
  </style>
</body>

</html>
