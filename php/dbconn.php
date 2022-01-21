<?php
$server = 'localhost';
$user = "root";
$password = "";

$conn = mysqli_connect($server, $user, $password);
if (!$conn) {
 die("connection to this database failed due to" . mysqli_connect_error());
}
