<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT image_url FROM dashboard_jersey WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image_url'];

        $sqlDelete = "DELETE FROM dashboard_jersey WHERE id = $id";
        if ($conn->query($sqlDelete) === TRUE) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
}

$conn->close();
header("Location: dashboard.php");
?>