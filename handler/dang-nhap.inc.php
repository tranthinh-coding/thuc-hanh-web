<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = get('email');
  $password = get('password');

  Session::set('email', $email);

  if (!$email || !$password) {
    Session::set('message', 'Nhập đầy đủ các trường');
    redirect('../dang-nhap.php');
  }

  // lay ra thong tin tu database
  $query = "SELECT * FROM " . TABLE_USER
    . " where " . TB_USER_EMAIL . " = '$email' and " . TB_USER_PASSWORD . " = '$password'";

  $result = mysqli_query($conn, $query);

  if (!$result || mysqli_num_rows($result) != 1) {
    Session::set('message', 'Email hoặc mật khẩu không chính xác');
    redirect('../dang-nhap.php');
  }

  $user = mysqli_fetch_array($result);

  // lưu thông tin vào session
  Session::set([
    TB_USER_EMAIL => $user[TB_USER_EMAIL],
    TB_USER_NAME => $user[TB_USER_NAME],
    TB_USER_PHONE => $user[TB_USER_PHONE],
    TB_USER_ADDRESS => $user[TB_USER_ADDRESS],
    TB_USER_ROLE => $user[TB_USER_ROLE],
  ]);

  Session::set('message', 'Đăng nhập thành công');
  redirect('../');
}

redirect('../dang-nhap.php');
