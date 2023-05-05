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
mysqli_query($conn, 'DROP TABLE IF EXISTS nguoi_dung');
mysqli_query(
  $conn,
  'CREATE TABLE `nguoi_dung` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ho_ten VARCHAR(200) DEFAULT NULL, '
  . 'email VARCHAR(200) DEFAULT NULL UNIQUE, '
  . 'so_dien_thoai VARCHAR(200) DEFAULT NULL, '
  . 'dia_chi VARCHAR(255) DEFAULT NULL, '
  . 'mat_khau VARCHAR(200) DEFAULT NULL'
  . ')'
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

/** Tao table san pham */
mysqli_query($conn, 'DROP TABLE IF EXISTS san_pham');
mysqli_query(
  $conn,
  'CREATE TABLE `san_pham` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ten_san_pham VARCHAR(255) DEFAULT NULL, '
  . 'gia FLOAT DEFAULT NULL, '
  . 'so_luong BIGINT DEFAULT NULL, '
  . 'so_luong_da_ban BIGINT DEFAULT NULL, '
  . 'mo_ta LONGTEXT DEFAULT NULL, '
  . 'hinh_anh LONGTEXT DEFAULT NULL, '
  . 'the_loai VARCHAR(255) DEFAULT NULL'
  . ') '
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

/** Tao table lien he */
mysqli_query($conn, 'DROP TABLE IF EXISTS lien_he');
mysqli_query(
  $conn,
  'CREATE TABLE `lien_he` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ho_ten VARCHAR(200) DEFAULT NULL, '
  . 'email VARCHAR(200) DEFAULT NULL, '
  . 'so_dien_thoai VARCHAR(200) DEFAULT NULL, '
  . 'loi_nhan LONGTEXT DEFAULT NULL'
  . ')'
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

/** Tao table lien he */
mysqli_query($conn, 'DROP TABLE IF EXISTS lien_he');
mysqli_query(
  $conn,
  'CREATE TABLE `lien_he` ('
  . 'id INT PRIMARY KEY AUTO_INCREMENT, '
  . 'ho_ten VARCHAR(200) DEFAULT NULL, '
  . 'email VARCHAR(200) DEFAULT NULL, '
  . 'so_dien_thoai VARCHAR(200) DEFAULT NULL, '
  . 'loi_nhan LONGTEXT DEFAULT NULL'
  . ')'
  . 'COLLATE=\'utf8mb4_unicode_ci\''
);

echo 'Tao database va table xong <br />';
