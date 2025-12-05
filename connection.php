<?php
$servername = "localhost";
$username   = "root";   // default XAMPP user
$password   = "";       // default XAMPP password is empty
$database   = "login_system_new";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
