<?php

/**
 * Các function hay dùng
 */

if (!function_exists('redirect')) {
  /** Dùng tương tự như function header */
  function redirect($link)
  {
    header('location: ' . $link);
    exit();
  }
}

if (!function_exists('getForm')) {
  function getForm($name, $defaultValue = null)
  {
    if (isset($_POST[$name])) {
      return $_POST[$name];
    }
    if (isset($_GET[$name])) {
      return $_GET[$name];
    }
    return $defaultValue;
  }
}

if (!function_exists('get')) {
  /** Lay ra du lieu tu POST hoac GET, neu khong ton tai thi tra ve '' */
  /**
   * get('name') => tra ve name tu method POST hoac method GET
   * 
   * get([
   *  'name',
   *  'email'
   * ]) 
   * => trả về mảng có dạng 
   * [
   *    'email' => 'email@example.com',
   *    'name' => 'Hi man',
   * ]
   */
  function get($name, $defaultValue = null)
  {
    if (is_array($name)) {
      $val = [];
      foreach ($name as $n) {
        $val[] = getForm($n, $defaultValue);
      }
      return $val;
    }
    // trim: loại bỏ khoảng trắng đầu và cuối chuỗi sau khi được trả về từ hàm getForm
    return trim(getForm($name, $defaultValue));
  }
}

if (!function_exists('reduceName')) {
  /**
   * Xoa bo cac khoang trang thua o dau va cuoi chuoi
   * Xoa bo cac khoang trang thua o giua, moi tu chi cach nhau 1 khoang trang
   */
  function reduceName($name)
  {
    $splitName = explode(' ', trim($name));
    $nameReduced = [];
    foreach ($splitName as $letter) {
      // neu cuoi mang la mot tu thi them ki tu trang
      if (end($nameReduced) != ' ' && count($nameReduced)) {
        $nameReduced[] = ' ';
      }
      if (trim($letter) != '') {
        $nameReduced[] = trim($letter);
      }
    }
    return trim(join($nameReduced));
  }
}

if (!function_exists('formatCurrency')) {

  function formatCurrency($amount)
  {
    return number_format($amount, 0);
  }
}
