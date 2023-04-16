<?php

if ( ! function_exists('redirect')) {
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

if ( ! function_exists('getFlashMessage')) {
  /** Set một flash message vào session */
  function getFlashMessage($name, $defaultValue = '') {

  }
}

if ( ! function_exists('setFlashMessage')) {
  function setFlashMessage($name, $value = '') {
    
  }
}
