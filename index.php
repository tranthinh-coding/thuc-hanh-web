<?php require_once './autoload.php' ?>

<?php
$query = get('query');
Session::set('query', $query);

$sql = "SELECT * FROM san_pham WHERE the_loai LIKE '%$query%'";

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
    <aside class="sidebar">
      <h2 class="sidebar-header">Danh mục sản phẩm</h2>
      <ul class="sidebar-list">
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query="> Tất cả </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=piano">
            <img src="./assets/images/icons/piano.svg" alt="" /> Đàn piano
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=organ">
            <img src="./assets/images/icons/organ.svg" alt="" /> Đàn organ
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=guitar">
            <img src="./assets/images/icons/guitar.svg" alt="" /> Đàn guitar
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=ukulele">
            <img src="./assets/images/icons/ukulele.svg" alt="" /> Đàn Ukulele
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=kalimba">
            <img src="./assets/images/icons/kalimba.svg" alt="" /> Đàn Kalimba
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=drum">
            <img src="./assets/images/icons/drum.svg" alt="" /> Bộ trống -
            Drum
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=am-thanh">
            <img src="./assets/images/icons/speaker.svg" alt="" /> Âm thanh
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=micro">
            <img src="./assets/images/icons/microphone.svg" alt="" />
            Micro Nhạc cụ - chuyên nghiệp
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="?query=nhac-cu-dan-toc">
            <img src="./assets/images/icons/harp.svg" alt="" />
            Nhạc vụ dân tộc
          </a>
        </li>
      </ul>
    </aside>

    <main id="san-pham">
      <?php if (mysqli_num_rows($result) == null) : ?>
        <style>
          .not-found-items {
            width: 400px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
          }
        </style>
        <div class="not-found-items">
          Danh mục này chưa có sản phẩm
        </div>
      <?php endif ?>
      <?php while ($sanpham = mysqli_fetch_array($result)) : ?>
        <div class="card">
          <div class="card-image">
            <a href="./chi-tiet-san-pham.php?id=<?php echo $sanpham['id'] ?>">
              <img src="./assets/images/san_pham/<?php echo $sanpham['hinh_anh'] ?>" />
            </a>
          </div>
          <a href="./chi-tiet-san-pham.php?id=<?php echo $sanpham['id'] ?>">
            <h3 class="card-title"><?php echo $sanpham['ten_san_pham'] ?></h3>
          </a>
          <div class="float-box">
            <p class="button shadow" style="white-space: nowrap">
              <?php echo formatCurrency($sanpham['gia']) ?>
              đ
            </p>
          </div>
        </div>
      <?php endwhile ?>
    </main>
  </section>

  <section id="lien-he" class="container form-section">
    <form class="form" action="./handler/lien-he.inc.php" method="post">
      <div class="form-heading">
        <h3>Liên hệ với chúng tôi</h3>
      </div>
      <div class="form-group label-top">
        <label for="ho_ten" class="form-label"> Họ tên </label>
        <input id="ho_ten" placeholder="Tên đăng nhập" type="text" class="form-control" name="ho_ten" value="<?php echo Session::get('lh_ho_ten') ?>" />
      </div>
      <div class="form-group label-top">
        <label for="sdt" class="form-label"> Số điện thoại </label>
        <input id="sdt" placeholder="Số điện thoại" type="text" class="form-control" name="so_dien_thoai" value="<?php echo Session::get('lh_so_dien_thoai') ?>" />
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="email">Email</label>
        <input id="email" placeholder="Email" type="text" class="form-control" name="email" value="<?php echo Session::get('lh_email') ?>" />
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="loi_nhan">Lời nhắn</label>
        <textarea row="40" id="loi_nhan" placeholder="Lời nhắn" name="loi_nhan" class="form-control"><?php echo Session::get('lh_loi_nhan') ?></textarea>
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

    .sidebar {
      width: 400px;
      padding: 10px 0;
    }

    .sidebar-header {
      font-size: 22px;
      margin: 10px 0;
    }

    .sidebar-item {
      list-style: none;
      margin: 4px 0;
      padding: 4px 10px;
    }

    .sidebar-link {
      gap: 8px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
    }

    .sidebar-item:hover {
      text-decoration: underline;
    }

    .sidebar-item img {
      margin-right: 6px;
      width: 24px;
      height: 24px;
      display: inline-block;
      vertical-align: bottom;
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
