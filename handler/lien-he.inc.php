<?php

require_once "../autoload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $ho_ten = reduceName(get('ho_ten'));
  $so_dien_thoai = get('so_dien_thoai');
  $email = get('email');
  $loi_nhan = get('loi_nhan');

  Session::set([
    'lh_ho_ten' => $ho_ten,
    'lh_so_dien_thoai' => $so_dien_thoai,
    'lh_email' => $email,
    'lh_loi_nhan' => $loi_nhan,
  ]);

  if (!$ho_ten || !$email || !$so_dien_thoai || !$loi_nhan) {
    Session::set('message', "Điền đầy đủ các trường");
    redirect('../');
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
    // insert vao database
    $sql = "INSERT INTO lien_he (ho_ten, email, so_dien_thoai, loi_nhan)
      values (\"$ho_ten\", \"$email\", \"$so_dien_thoai\", \"$loi_nhan\")";

    mysqli_query($conn, $sql);

    Session::set('message', "Gửi lời nhắn tới người quản trị thành công");
    redirect('../');
  } catch (\Throwable $th) {
    Session::set('message', 'Có lỗi xảy ra, không thể gửi lời nhắn tới quản trị viên');
    redirect('../dang-ky.php');
  }
}

redirect('../');
