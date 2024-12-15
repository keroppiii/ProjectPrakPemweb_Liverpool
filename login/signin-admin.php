<?php
include '../signup/connect.php'; // Memuat fungsi connectDatabase

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

// Membuat koneksi ke database
$conn = connectDatabase($servername, $username, $password, $dbname);

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

function validateInputs($username, $password) {
    if (empty($username) || empty($password)) {
        return "Username dan Password tidak boleh kosong.";
    }
    return true;
}

if (isset($_POST['signin-btn'])) {
    // Validasi dan sanitasi input
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Validasi input
    $validationResult = validateInputs($username, $password);
    if ($validationResult !== true) {
        echo "<script>alert('$validationResult'); window.history.back();</script>";
        exit();
    }

    // Menggunakan prepared statement untuk keamanan
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];

        // Redirect ke dashboard
        header("Location: ../dashboard/dashboard.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Username or Password'); window.history.back();</script>";
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>
