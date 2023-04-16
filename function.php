<?php

if (!function_exists('redirect')) {
  function redirect($link) {
    header('location: ' . $link);
    exit();
  }
}
