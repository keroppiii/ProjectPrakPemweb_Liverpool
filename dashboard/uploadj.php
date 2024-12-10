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
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../dashboard/uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO dashboard_jersey (image_url, info, price) VALUES ('$target', '$info', '$price')";
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