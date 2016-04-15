<?php
$servername = "iris.fhict.nl";
$username = "i359467_fontys";
$password = "fontys2016";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>