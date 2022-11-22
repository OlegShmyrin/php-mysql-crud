<?php

define("DB_HOST", "db-hostname");
define("DB_USER", "root");
define("DB_PASSWORD", "password123");
define("DB_DATABASE", "php_mysql_crud");

session_start();

$conn = mysqli_connect(
  "DB_HOST",
  "DB_USER",
  "DB_PASSWORD",
  "DB_DATABASE"
) or die(mysqli_error($mysqli));

?>
