<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = get('name');
  $email = get('email');
  $phone = get('phone');
  $password = get('password');

  Session::set([
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    TB_USER_ROLE => ROLE_KHACH_HANG,
  ]);

  if ($name == '' || $email == '' || $phone == '' || $password == '') {
    Session::set('message', 'Điền đầy đủ các trường.');
    redirect('/dang-ky.php');
  }

  // insert the user into database
  $sql = "
    insert into " . TABLE_USER
    . " ( "
    . TB_USER_NAME . ","
    . TB_USER_PASSWORD . ","
    . TB_USER_EMAIL . ","
    . TB_USER_PHONE . ","
    . TB_USER_ROLE
    . " ) "
    . "values ( "
    . "'$name', "
    . "'$email' ,"
    . "'$phone' ,"
    . "'$password' ,"
    . "'" . ROLE_KHACH_HANG . "'"
    . ")";

  $result = mysqli_query($conn, $sql);

  if (! $result) {
    Session::set('message', 'Đăng ký không thành công');
    redirect('/dang-ky.php');
  }

  // TODO: get id user before redirect to index page

  redirect('/index.php');
}

Session::set('message', 'Để method POST');
redirect('/dang-ky.php');
