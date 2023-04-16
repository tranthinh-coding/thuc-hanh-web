<?php

$HOST = 'localhost';
$USER_NAME = 'root';
$PASSWORD = '';
$DB = 'thuc-hanh-web';
$PORT = 3306;

// connect sql
if ( ! isset($conn)) {
  try {
    $conn = mysqli_connect($HOST, $USER_NAME, $PASSWORD, $DB, $PORT);
  } catch (\Exception $e) {
    if ( ! isset($conn)) {
      echo ('<h1>Khong the ket noi database: ' 
      . $DB . ', port: ' . $PORT 
      . '. <br />'
      . 'Kiem tra xampp/laragon, ten database, port</h1>');
      die;
    }
  }

}
