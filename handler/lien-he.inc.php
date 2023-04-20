<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = get('name');
  $phone = get('phone');
  $email = get('email');
  $message = get('contact-message');

  if (!$name || !$email || !$phone || !$message) {
    Session::set('message', "Điền đầy đủ các trường");
    redirect('../');
  }

  // check $email hop le
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Session::set('message', 'Email không đúng định dạng.');
    redirect('../');
  }

  if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    Session::set('message', 'Họ tên chỉ được gồm các chữ cái a-z hoặc A-Z và khoảng trắng.');
    redirect('../');
  }

  

  Session::set('message', "Gửi lời nhắn tới người quản trị thành công");
  redirect('../');
}

redirect('../');
