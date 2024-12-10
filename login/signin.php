<?php
include 'connect.php'; // Menghubungkan ke database

if(isset($_POST['signin-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['username']=$row['username'];
     header("Location: ../homepage/index.html");
     exit();
    }
    else{
        echo "<script>alert('Not Found, Incorrect Username or Password'); window.history.back();</script>";
    }
 
 }

// Menutup koneksi
$conn->close();
?>