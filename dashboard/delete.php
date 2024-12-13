<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    echo "ID received: " . $id; // Debug statement

    $tables = ["dashboard_data", "dashboard_jersey", "dashboard_souvenirs", "dashboard_signed", "goalkeepers", "defenders", "midfielders", "forward"];
    foreach ($tables as $table) {
        $sql = "SELECT image_url FROM $table WHERE id = $id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imagePath = $row['image_url'];

            $sqlDelete = "DELETE FROM $table WHERE id = $id";
            if ($conn->query($sqlDelete) === TRUE) {
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                header("Location: dashboard.php?message=" . urlencode(ucfirst($table) . " record deleted successfully."));
                exit();
            } else {
                echo "Error deleting record from $table: " . $conn->error; // Debug statement
            }
        }
    }

    // Handle case where no record is found
    header("Location: dashboard.php?error=" . urlencode("No record found with ID: $id"));
    exit();
}

$conn->close();
?>
