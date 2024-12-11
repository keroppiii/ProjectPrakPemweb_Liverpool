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

    // Check in dashboard_data
    $sql = "SELECT image_url FROM dashboard_data WHERE id = $id";
    $result = $conn->query($sql);
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image_url'];

        $sqlDelete = "DELETE FROM dashboard_data WHERE id = $id";
        if ($conn->query($sqlDelete) === TRUE) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            header("Location: dashboard.php?message=" . urlencode("Product deleted successfully."));
            exit();
        } else {
            echo "Error deleting record: " . $conn->error; // Debug statement
        }
    } else {
        // Check in dashboard_jersey
        $sql = "SELECT image_url FROM dashboard_jersey WHERE id = $id";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imagePath = $row['image_url'];

            $sqlDelete = "DELETE FROM dashboard_jersey WHERE id = $id";
            if ($conn->query($sqlDelete) === TRUE) {
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                header("Location: dashboard.php?message=" . urlencode("Jersey deleted successfully."));
                exit();
            } else {
                echo "Error deleting jersey record: " . $conn->error; // Debug statement
            }
        } else {
            // Handle case where no record is found
            header("Location: dashboard.php?error=" . urlencode("No record found with ID: $id"));
            exit();
        }
    }
} else {
    header("Location: dashboard.php?error=" . urlencode("Invalid request."));
    exit();
}

$conn->close();
?>