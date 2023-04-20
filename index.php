<?php require_once './autoload.php' ?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <?php include_once "./tag-head.php" ?>

  <link rel="stylesheet" href="/assets/styles/form.css">
</head>

<body>
  <?php require_once 'thong-bao.php' ?>

  <header>
    <nav class="container">
      <div class="nav-right">
        <a href="dang-ky.php">
          <button class="button shadow">Đăng ký</button>
        </a>
        <a href="dang-nhap.php">
          <button class="button">Đăng nhập</button>
        </a>
      </div>
    </nav>

    <banner></banner>
  </header>

  <section class="container content-container">
    <aside>

    </aside>

    <main>

    </main>
  </section>

  <section class="container form-section">
    <form class="form" action="/handler/lien-he.inc.php" method="post">
      <div class="form-heading">
        <h3>Liên hệ với chúng tôi</h3>
      </div>
      <div class="form-group label-top">
        <label for="45gy35g" class="form-label"> Họ tên </label>
        <input id="45gy35g" placeholder="Tên đăng nhập" type="text" class="form-control" name="name"
          value="<?php echo Session::get('name') ?>">
      </div>
      <div class="form-group label-top">
        <label for="sdsdwe" class="form-label"> Số điện thoại </label>
        <input id="sdsdwe" placeholder="Tên đăng nhập" type="text" class="form-control" name="phone"
          value="<?php echo Session::get('phone') ?>">
      </div>

      <div class="form-group label-top">
        <label class="form-label" for="4f456u">Email</label>
        <input id="4f456u" placeholder="Email" type="text" class="form-control" name="email"
          value="<?php echo Session::get('email') ?>">

      </div>

      <div class="form-group label-top">
        <label class="form-label" for="fnsdcm">Lời nhắn</label>
        <textarea row="40" id="fnsdcm" placeholder="Lời nhắn" type="text" name="contact-message" class="form-control">
        </textarea>
      </div>

      <div class="form-btns">
        <button class='button' name="submit">Gửi lời nhắn</button>
      </div>
    </form>
  </section>

  <footer class="container">
    <div class="card">
      <div class="card-image">
        <img src="/assets/images/tvthink.jpg" />
      </div>
      <h3 class="card-title">Trần Văn Thinh</h3>
      <p class="card-content"> 02-12-2001 </p>
      <div class="float-box">
        <p class="button shadow">20103100350</p>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="/assets/images/tvthink.jpg" />
      </div>
      <h3 class="card-title">Trần Văn Thinh</h3>
      <p class="card-content"> 02-12-2001 </p>
      <div class="float-box">
        <p class="button shadow">20103100350</p>
      </div>
    </div>
    <div class="card">
      <div class="card-image">
        <img src="/assets/images/tvthink.jpg" />
      </div>
      <h3 class="card-title">Trần Văn Thinh</h3>
      <p class="card-content"> 02-12-2001 </p>
      <div class="float-box">
        <p class="button shadow">20103100350</p>
      </div>
    </div>
  </footer>

  <style>
    .form {
      position: relative;
    }
    section {
      width: 100%;
      margin-top: 50px;
      margin-top: 50px;
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
      background: #ddd;
      height: 600px;
    }

    main {
      height: 600px;
      width: 100%;
      background: rgb(var(--warn));
    }

    header {
      position: sticky;
      top: 0;
      width: 100%;
      height: 60px;
      filter: drop-shadow(0 8px 32px rgba(0, 0, 0, 0.021));
      background: #fff;
      border-radius: 0 0 36px 36px;
      overflow: hidden;
    }

    header nav {
      height: 100%;
      width: 100%;
    }

    .nav-right {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      height: 100%;
      margin-left: auto;
      width: fit-content;
    }

    footer {
      width: 100%;
      height: 350px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 32px;
    }

    .card {
      width: 180px;
      height: 220px;
      /* background: #eee; */
      border-radius: 28px;
      position: relative;
      box-shadow: 0 8px 32px 0px rgba(0, 0, 0, 0.03);
      flex-shrink: 0;
    }

    .card-image {
      border-radius: 28px 28px 48px 48px;
      overflow: hidden;
      height: 140px;
      width: 100%;
      transition: border-radius 0.2s ease;
    }

    .card-image img {
      border-radius: 28px;
      width: 100%;
      height: 100%;
      object-fit: fill;
      transition: transform 0.2s ease;
    }

    .card:hover .card-image {
      border-radius: 28px 28px 34px 34px;
    }

    .card:hover .card-image img {
      transform: scale(1.07);
    }

    .card-title {
      font-weight: 500;
      font-size: 18px;
      text-align: center;
      width: 100%;
      margin-top: 14px;
      margin-bottom: 14px;
    }

    .card-content {
      font-size: 15px;
      text-align: center;
    }

    .float-box {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 40px;
      transform: translateY(55%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .float-box .button {
      max-width: 120px;
    }

  </style>
</body>

</html>
