<?php
session_start(); // Pastikan sesi dimulai di awal
include 'connect.php'; // Menghubungkan ke database

if(isset($_POST['signin-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk memeriksa keberadaan username dan password
    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=$conn->query($sql);
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        // Menyimpan username ke dalam sesi
        $_SESSION['username'] = $row['username'];
        header("Location: ../homepage/index.php"); // Redirect ke halaman utama
        exit();
    } else {
        echo "<script>alert('Not Found, Incorrect Username or Password'); window.history.back();</script>";
    }
}

// Menutup koneksi
$conn->close();
?>
