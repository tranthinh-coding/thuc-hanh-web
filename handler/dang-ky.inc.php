<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $ho_ten = reduceName(get('ho_ten'));
  $email = get('email');
  $so_dien_thoai = get('so_dien_thoai');
  $mat_khau = get('mat_khau');

  Session::set([
    'ho_ten' => $ho_ten,
    'email' => $email,
    'so_dien_thoai' => $so_dien_thoai,
    'vai_tro' => 'KH',
  ]);

  if (!$ho_ten || !$email || !$so_dien_thoai || !$mat_khau) {
    Session::set([
      'message' => 'Điền đầy đủ các trường.'
    ]);
    redirect('../dang-ky.php');
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Session::set('message', 'Email không đúng định dạng.');
    redirect('../dang-ky.php');
  }

  if (!preg_match("/^[A-Za-z\sĂăÂâĐđÊêÔôƠơƯư]+$/u", $ho_ten)) {
    Session::set('message', 'Họ tên chỉ được gồm các chữ cái a-z hoặc A-Z và khoảng trắng.');
    redirect('../dang-ky.php');
  }

  if (count(explode(' ', $ho_ten)) < 2) {
    Session::set('message', 'Họ tên phải từ ít nhất 2 từ trở lên.');
    redirect('../dang-ky.php'); 
  }

  try {
    // insert the user into database
    $sql = "insert into nguoi_dung (ho_ten, email, mat_khau, so_dien_thoai) 
      values ( \"$ho_ten\", \"$email\", \"$mat_khau\", \"$so_dien_thoai\")"; // " la ky tu dac biet nen can them \"

    $result = mysqli_query($conn, $sql);

    // lấy ra id cuối cùng sau khi insert, đó là id của user
    $id = mysqli_insert_id($conn);

    Session::set('user_id', $id);
    Session::set('message', 'Đăng ký thành công');

    redirect('../index.php');
  } catch (\Throwable $th) {
    Session::set('message', 'Đăng ký không thành công');
    redirect('../dang-ky.php');
  }
}

Session::set('message', 'Để method POST');
redirect('../dang-ky.php');
