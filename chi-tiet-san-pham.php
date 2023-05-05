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
      <div class="back-btn">
        <a href="./<?php if (Session::has('query')) echo "?query=" . Session::get('query') ?>">
          <button class="button shadow"><i class='bx bx-left-arrow-alt'></i></button>
        </a>
      </div>
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
            <h3>Số lượng:  <span class="tag"><?php echo $sanpham['so_luong'] ?></span></h3>
            <h3>Đã bán: <span class="tag"> <?php echo $sanpham['so_luong_da_ban'] ?></span></h3>
            <div>
              <h2 style="font-size: 24px; margin: 14px 0;">Mô tả sản phẩm</h2>
              <?php echo htmlspecialchars_decode($sanpham['mo_ta']) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once "./app-footer.php" ?>

  <style>
    .back-btn {
      max-width: 60px;
    }

    .back-btn button.button {
      border-radius: 120px 60px 60px 30px;
      font-size: 20px;
      opacity: 0.7;
    }

    .back-btn button.button:hover {
      opacity: 1;
    }

    p {
      margin: 0 0 10px;
    }

    .wrapper {
      padding-top: 30px;
    }

    .product-heading {
      font-weight: 500;
      padding: 20px 0;
      font-size: 30px;
    }

    .wrapper .product-info {
      display: flex;
      gap: 40px;
    }

    .product-info .image {
      flex-shrink: 0;
      width: 400px;
      border-radius: 10px;
    }

    .product-info .details {
      display: flex;
      flex-direction: column;
      gap: 30px;
      /* white-space: nowrap; */
      flex: 1;
      width: 100%;
    }

    .product-info .details ul li {
      padding: 4px 0;
    }
  </style>
</body>

</html>
