<?php
session_start();
include 'connect.php';

if (isset($_POST['signin-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk memeriksa username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Menyimpan username ke dalam sesi
        $_SESSION['username'] = $row['username']; // Simpan username ke session
        $_SESSION['name'] = $row['name']; // Simpan nama jika ada kolom `name`
        header("Location: ../homepage/index.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Username or Password'); window.history.back();</script>";
    }
}

$conn->close();

?>
