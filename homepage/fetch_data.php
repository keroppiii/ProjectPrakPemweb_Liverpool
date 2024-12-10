<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT id, image_url, info, price FROM dashboard_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="product-grid">'; // Mulai grid produk
    while($row = $result->fetch_assoc()) {
        echo '<div class="product-card">';
        echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
        echo '<h3>' . $row["info"] . '</h3>';
        echo '<p class="price">Price: $' . number_format($row["price"], 2, ',', '.') . '</p>'; // Menampilkan harga
        echo '<form action="delete.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
        echo '<button type="submit" class="delete-btn">Hapus</button>';
        echo '</form>';
        echo '</div>';
    }
    echo '</div>'; // Tutup grid produk
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>