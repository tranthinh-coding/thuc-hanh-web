<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = get('email');
  $mat_khau = get('mat_khau');

  Session::set('email', $email);

  if (!$email || !$mat_khau) {
    Session::set('message', 'Nhập đầy đủ các trường');
    redirect('../dang-nhap.php');
  }

  // lay ra thong tin tu database
  $query = "SELECT * FROM nguoi_dung WHERE email = \"$email\" and mat_khau = \"$mat_khau\"";

  $result = mysqli_query($conn, $query);

  if (!$result || mysqli_num_rows($result) != 1) {
    Session::set('message', 'Email hoặc mật khẩu không chính xác');
    redirect('../dang-nhap.php');
  }

  $user = mysqli_fetch_array($result);

  // lưu thông tin vào session
  Session::set([
    'email' => $user['email'],
    'ho_ten' => $user['ho_ten'],
    'so_dien_thoai' => $user['so_dien_thoai'],
    'dia_chi' => $user['dia_chi'],
    'vai_tro' => $user['vai_tro'],
  ]);

  Session::set('message', 'Đăng nhập thành công');
  redirect('../');
}

redirect('../dang-nhap.php');
