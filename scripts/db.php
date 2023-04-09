<?php
$server = "localhost";
$login = "root";
$password = "root";
$database = "games";

$link = mysqli_connect($server, $login, $password);
mysqli_select_db($link, $database);
?>
