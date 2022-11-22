<?php
session_start();

$conn = mysqli_connect("DB_HOST","DB_USER","DB_PASSWORD","DB_DATABASE"
) or die(mysqli_error($mysqli));

?>
