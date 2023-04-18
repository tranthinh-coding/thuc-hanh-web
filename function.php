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

if (! function_exists('getForm')) {
  function getForm($name, $defaultValue = null) {
    if (isset($_POST[$name])) {
      return $_POST[$name];
    }
    if (isset($_GET[$name])) {
      return $_GET[$name];
    }
    return $defaultValue;
  }
}

if ( ! function_exists('get')) {
  /** Lay ra du lieu tu POST hoac GET, neu khong ton tai thi tra ve '' */
  function get($name, $defaultValue = null)
  {
    if (is_array($name)) {
      $val = [];
      foreach ($name as $n) {
        $val[] = getForm($n, $defaultValue);
      }
      return $val;
    }

    return getForm($name, $defaultValue);
  }
}
