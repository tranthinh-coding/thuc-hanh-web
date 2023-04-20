<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = reduceName(get('name'));
  $email = get('email');
  $phone = get('phone');
  $password = get('password');

  Session::set([
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    TB_USER_ROLE => ROLE_KHACH_HANG,
  ]);

  if (!$name || !$email || !$phone || !$password) {
    Session::set([
      'message' => 'Điền đầy đủ các trường.'
    ]);
    redirect('/dang-ky.php');
  }

  // check $email hop le
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Session::set('message', 'Email không đúng định dạng.');
    redirect('/dang-ky.php');
  }

  if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    Session::set('message', 'Họ tên chỉ được gồm các chữ cái a-z hoặc A-Z và khoảng trắng.');
    redirect('/dang-ky.php');
  }

  // insert the user into database
  $sql = "
    insert into " . TABLE_USER
    . " ( "
    . TB_USER_NAME . ","
    . TB_USER_EMAIL . ","
    . TB_USER_PASSWORD . ","
    . TB_USER_PHONE . ","
    . TB_USER_ROLE
    . " ) "
    . "values ( "
    . "'$name', "
    . "'$email' ,"
    . "'$password' ,"
    . "'$phone' ,"
    . "'" . ROLE_KHACH_HANG . "'"
    . ")";

  $result = mysqli_query($conn, $sql);

  if (!$result) {
    Session::set('message', 'Đăng ký không thành công');
    redirect('/dang-ky.php');
  }

  // lấy ra id cuối cùng sau khi insert, đó là id của user
  $id = mysqli_insert_id($conn);
  Session::set('user_id', $id);

  redirect('/index.php');
}

Session::set('message', 'Để method POST');
redirect('/dang-ky.php');
