<?php

if (!isset($conn)) {
  try {
    $conn = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME, PORT);
  } catch (\Exception $e) {
    if (!isset($conn)) {
      echo ('<h1>Khong the ket noi database: '
        . DB_NAME . ', port: ' . PORT
        . '. <br />'
        . 'Kiem tra xampp/laragon, ten database, port</h1>');
      die;
    }
  }

}
