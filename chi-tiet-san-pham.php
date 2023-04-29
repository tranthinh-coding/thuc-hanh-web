<?php

require_once "./autoload.php";

// lay ra ma san pham tren url
$id = get('id');

try {
  // truy van thong tin san pham tu database
  $result = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = $id");

  if (!mysqli_num_rows($result)) {
    redirect('./');
  }

  $sanpham = mysqli_fetch_array($result);
} catch (\Throwable $th) {
  redirect('./');
}

?>

<?php require_once './conn.inc.php' ?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php include_once "./tag-head.php" ?>
</head>

<body>
  <?php require_once './thong-bao.php' ?>

  <?php require_once './app-header.php'  ?>

  <section>

    <div class="container">
      <div class="wrapper">
        <h2 class="product-heading">
          <?php echo $sanpham['ten_san_pham'] ?>
        </h2>

        <div class="product-info">

          <div class="image">
            <img src="./assets/images/san_pham/<?php echo $sanpham['hinh_anh'] ?>" alt="">
          </div>
          <div class="details">
            <h3 style="color: rgb(var(--danger)); font-size: 20px;"><?php echo formatCurrency($sanpham['gia']) ?>đ</h3>
            <h3>Số lượng:  <span  class="tag"><?php echo $sanpham['so_luong'] ?></span></h3>
            <h3>Đã bán: <span  class="tag"> <?php echo $sanpham['so_luong_da_ban'] ?></span></h3>
          </div>
        </div>
      </div>

      <div>
        <h2 style="font-size: 24px; margin: 14px 0;">Mô tả sản phẩm</h2>
        <?php echo htmlspecialchars_decode($sanpham['mo_ta']) ?>
      </div>
    </div>
  </section>

  <?php require_once "./app-footer.php" ?>

  <style>
    p {
      margin: 0 0 10px;
    }
    .wrapper {
      padding-top: 30px;
    }
    .product-heading {
      font-weight: 500;
      font-size: 26px;
    }
    .wrapper .product-info {
      display: flex;
      gap: 40px;
    }
    .product-info .image {
      width: 400px;
    }
    .product-info .details {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
  </style>
</body>

</html>
