<?php 

require_once '../conn.inc.php';
require_once '../function.php';
require_once '../constants.php';

function get($name, $default = '') {
  if (isset($_POST[$name])) {
    return $_POST[$name];
  }
  if (isset($_GET[$name])) {
    return $_GET[$name];
  }
  return $default;
}

if (isset($_POST['submit'])) {
  $name = get('name');
  $phone = get('phone');
  $email = get('email');
  $password = get('password');

  if ($name == '' || $phone == '' || $email == '' || $password == '') {
    
  }
}

redirect('/dang-ky.php');
