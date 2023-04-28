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
  <?php echo htmlspecialchars_decode($sanpham['mo_ta']) ?>
</body>

</html>
