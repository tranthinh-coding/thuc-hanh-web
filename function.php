<?php

/**
 * Các function hay dùng
 */

if ( ! function_exists('redirect')) {
  /** Dùng tương tự như function header */
  function redirect($link)
  {
    header('location: ' . $link);
    exit();
  }
}

if ( ! function_exists('get')) {
  /** Lay ra du lieu tu POST hoac GET, neu khong ton tai thi tra ve '' */
  function get($name, $defaultValue = '')
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

if ( ! function_exists('getFlashValue')) {
  /** lấy ra flash message từ session và loại bỏ giá trị của message */
  function getFlashValue($name, $defaultValue = '') {

  }
}

if ( ! function_exists('setFlashValue')) {
  function setFlashValue($name, $value = '') {
    
  }
}
