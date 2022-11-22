<?php
session_start();

$conn = mysqli_connect(
  '192.168.1.110',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
