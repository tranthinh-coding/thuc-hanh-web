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

  Session::set('message', "Gửi lời nhắn tới người quản trị thành công");
  redirect('../');
}

redirect('../');
