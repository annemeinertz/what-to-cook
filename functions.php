<?php

  function page() {
    $page = "$_SERVER[REQUEST_URI]";
    $page = explode("/", $page);
    $page = array_slice($page, 1);
    return $page;
  }

  function get_page($file_path) {
    if (file_exists($file_path)) {
      global $page;
      include $file_path;
    } else {
      include 'screens/404.php';
    }
  }

  function check_login() {
    if(!isset($_COOKIE["logged_in"]) || $_COOKIE["logged_in"] !== "true") {
      return false;
    } else {
      return true;
    }
  }

  function check_personalization() {
    if (!isset($_COOKIE["personalized"]) || $_COOKIE["personalized"] !== "true") {
      return false;
    } else {
      return true;
    }
  }

?>
