<?php

$HOST = 'localhost';
$USER_NAME = 'root';
$PASSWORD = '';
$DB = 'thuc-hanh-web';
$PORT = 3306;

// connect sql
if ( ! isset($conn)) {
  $conn = mysqli_connect($HOST, $USER_NAME, $PASSWORD, $DB, $PORT);

  if ( ! $conn) {
    throw new Exception('Khong the ket noi database: ' 
    . $DB . ', port: ' . $PORT 
    . ', kiem tra ten database, port');
  }
}
