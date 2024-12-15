<?php
include 'connect.php'; // Menghubungkan ke database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

$conn = connectDatabase($servername, $username, $password, $dbname);

// Fungsi untuk memvalidasi email
function validasiEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

if (isset($_POST['join-btn'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi format email
    if (!validasiEmail($email)) {
        echo "<script>alert('Invalid Email Format!'); window.history.back();</script>";
        exit(); // Hentikan eksekusi jika email tidak valid
    }

    // Memeriksa apakah username sudah ada
    $checkUsername = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        // Menggunakan alert JavaScript untuk menampilkan pesan
        echo "<script>alert('Username Already Exists!'); window.history.back();</script>";
    } else {
        // Menyimpan data pengguna baru
        $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            header("Location: ../login/login-user.html"); // Mengarahkan ke halaman setelah pendaftaran berhasil
            exit(); // Menghentikan eksekusi script setelah redirect
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Menutup koneksi
$conn->close();
?>
