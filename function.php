<?php

if ( ! function_exists('redirect')) {
  function redirect($link)
  {
    header('location: ' . $link);
    exit();
  }
}

if ( ! function_exists('get')) {
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
  function getFlashMessage($name, $defaultValue = '') {

  }
}

if ( ! function_exists('setFlashMessage')) {
  function setFlashMessage($name, $value = '') {
    
  }
}
