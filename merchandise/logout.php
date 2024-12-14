<?php
session_start(); // Pastikan session dimulai
// Proses logout
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../login/login-user.html");
    exit();
}
?>
