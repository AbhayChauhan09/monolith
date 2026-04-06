<?php
$host = "mariadb";
$user = "root";
$pass = "root";
$db = "mydb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
