<?php

require '../constants.php';

$conn = mysqli_connect(HOST, USER_NAME, PASSWORD);

/** DROP database */
mysqli_query($conn, 'DROP DATABASE IF EXISTS ' . DB_NAME);

/** Tao database */
mysqli_query($conn, 'CREATE DATABASE ' . DB_NAME);

/** Tao database */
mysqli_query($conn, 'use ' . DB_NAME);

/** Tao table nguoi dung */
mysqli_query($conn, 'DROP TABLE IF EXISTS ' . TABLE_USER);
mysqli_query(
  $conn,
  'CREATE TABLE `' . TABLE_USER . '` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ho_ten VARCHAR(200) DEFAULT NULL, '
  . 'email VARCHAR(200) DEFAULT NULL UNIQUE, '
  . 'so_dien_thoai VARCHAR(200) DEFAULT NULL, '
  . 'vai_tro VARCHAR(200) DEFAULT NULL, '
  . 'dia_chi VARCHAR(255) DEFAULT NULL, '
  . 'mat_khau VARCHAR(200) DEFAULT NULL'
  . ')'
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

/** Tao table san pham */
mysqli_query($conn, 'DROP TABLE IF EXISTS ' . TABLE_PRODUCTS);
mysqli_query(
  $conn,
  'CREATE TABLE `' . TABLE_PRODUCTS . '` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ten_san_pham VARCHAR(255) DEFAULT NULL, '
  . 'gia FLOAT DEFAULT NULL, '
  . 'so_luong BIGINT DEFAULT NULL, '
  . 'so_luong_da_ban BIGINT DEFAULT NULL, '
  . 'mo_ta LONGTEXT DEFAULT NULL, '
  . 'hinh_anh LONGTEXT DEFAULT NULL'
  . ') '
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

/** Tao table lien he */
mysqli_query($conn, 'DROP TABLE IF EXISTS ' . TABLE_CONTACT);
mysqli_query(
  $conn,
  'CREATE TABLE `' . TABLE_CONTACT . '` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ho_ten VARCHAR(200) DEFAULT NULL, '
  . 'email VARCHAR(200) DEFAULT NULL, '
  . 'so_dien_thoai VARCHAR(200) DEFAULT NULL, '
  . 'loi_nhan LONGTEXT DEFAULT NULL'
  . ')'
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

mysqli_close($conn);
die('Tao database va table xong');
