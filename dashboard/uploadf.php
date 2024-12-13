<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $image = $_FILES['image']['name'];
    $target = "../players/uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO forward (image_url, name, number) VALUES ('$target', '$name', '$number')";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil diunggah.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}

$conn->close();
header("Location: dashboard.php");
?>