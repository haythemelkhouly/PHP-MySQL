<?php
$hostname = "localhost";
$username = "phpapp";
$password = "mysql123";
$database = "default";

// connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// check
if (!$conn) {
    die("Error :" . mysqli_connect_error());
}
