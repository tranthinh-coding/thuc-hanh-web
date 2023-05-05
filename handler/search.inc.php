<?php

require_once "../autoload.php";

$query = Session::get('query');
$search = get('search');
Session::set('search', $search);

$link = "../";

if ($query) {
  $link .= "?query=$query";
}

if ($search) {
  $and = "";
  if ($query) {
    $and = "&";
  }
  $link .= $and . "?search=$search";
}

redirect($link);
