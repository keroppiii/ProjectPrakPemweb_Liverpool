<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, image_url, info, price FROM dashboard_signed";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="product-grid">'; // Start product grid
    while($row = $result->fetch_assoc()) {
        echo '<div class="product-card">';
        echo '<img src="' . htmlspecialchars($row["image_url"]) . '" alt="Image" />';
        echo '<h3>' . htmlspecialchars($row["info"]) . '</h3>';
        echo '<p class="price">Price: $' . number_format($row["price"], 2, ',', '.') . '</p>'; // Display price
        echo '<form action="../dashboard/delete.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<button type="submit" name="delete" value="delete" class="delete-btn">Delete</button>';
        echo '</form>';
        echo '</div>';
    }
    echo '</div>'; // Close product grid
} else {
    echo "No data available.";
}

$conn->close();
?>