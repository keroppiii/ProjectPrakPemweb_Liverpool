<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "login";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>