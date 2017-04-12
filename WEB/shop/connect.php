<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atarjayaonline";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>