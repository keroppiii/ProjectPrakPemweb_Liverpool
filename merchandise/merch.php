<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merchandise Liverpool</title>
  <link rel="stylesheet" href="../assets/css/merch.css">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cardo:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navbar">
        <div class="logo">
            <img src="../assets/images/logo-liverpool.png" alt="Liverpool FC Logo">
            <span class="logo-text">Liverpool</span>
        </div>
        <nav class="menu">
            <a href="../homepage/index.php">Home</a>
            <a href="../players/players.php">Players</a>
            <a href="../merchandise/merch.php">Merchandise</a>
            <a href="#">News</a>
        </nav>
        
        <div class="auth-links">
          <a href="../login/login-user.html" class="login">Log in</a>
          <a href="../signup/signup-user.html" class="signup">Sign Up</a>
        </div>
    </div>
  </header>
  
  <div class="search-bar">
    <i data-feather="search"></i>
    <input type="text" placeholder="What Are You Looking For?">
  </div>
  
  <main>
    <section class="hero">
        <div class="hero-image-wrapper">
            <img src="../assets/images/Merchendise/banner.jpg" alt="Liverpool Merch">
        </div>
    </section>

    <div class="running-text-container">
        <div class="running-text">Liverpool Merch 100% Official</div>
    </div>

      <div class="judul3">
        <h1>Go Get Yours!</h1>
      </div>
    <div class="jersey">
      <div class="judul4">
        <h1>Liverpool Jersey</h1>
      </div>
      <div class="product-grid">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, info, price FROM dashboard_jersey";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                    echo '<h3>' . $row["info"] . '</h3>';
                    echo '<p class="price">Price: $' . number_format($row["price"], 2, ',', '.') . '</p>'; // Menampilkan harga
                    echo '<a href="https://store.liverpoolfc.com/" class="shop-btn">Shop Now</a>'; // Tombol "Buy Now" sebagai tautan
                    echo '</div>';

                    $count++;
                    // Setiap 3 produk, tutup grid dan mulai grid baru
                    if ($count % 3 == 0) {
                        echo '</div><div class="product-grid">'; // Tutup dan mulai grid baru
                    }
                }
                echo '</div>'; // Tutup grid produk
            } else {
                echo "Tidak ada data.";
            }

            $conn->close();
            ?>
        </div>

    <div class="jersey">
      <div class="judul4">
        <h1>Liverpool Souvenirs</h1>
      </div>
      <div class="product-grid">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, info, price FROM dashboard_souvenirs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                    echo '<h3>' . $row["info"] . '</h3>';
                    echo '<p class="price">Price: $' . number_format($row["price"], 2, ',', '.') . '</p>'; // Menampilkan harga
                    echo '<a href="https://store.liverpoolfc.com/" class="shop-btn">Shop Now</a>'; // Tombol "Buy Now" sebagai tautan
                    echo '</div>';

                    $count++;
                    // Setiap 3 produk, tutup grid dan mulai grid baru
                    if ($count % 3 == 0) {
                        echo '</div><div class="product-grid">'; // Tutup dan mulai grid baru
                    }
                }
                echo '</div>'; // Tutup grid produk
            } else {
                echo "Tidak ada data.";
            }

            $conn->close();
            ?>
        </div>

    </div>
        <div class="running-text-container">
            <div class="running-text">Liverpool Merch 100% Official</div>
        </div>

        <div class="jersey">
      <div class="judul4">
        <h1>Liverpool Limited Signed Items</h1>
      </div>
      <div class="product-grid">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, info, price FROM dashboard_signed";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                    echo '<h3>' . $row["info"] . '</h3>';
                    echo '<p class="price">Price: $' . number_format($row["price"], 2, ',', '.') . '</p>'; // Menampilkan harga
                    echo '<a href="https://store.liverpoolfc.com/" class="shop-btn">Shop Now</a>'; // Tombol "Buy Now" sebagai tautan
                    echo '</div>';

                    $count++;
                    // Setiap 3 produk, tutup grid dan mulai grid baru
                    if ($count % 3 == 0) {
                        echo '</div><div class="product-grid">'; // Tutup dan mulai grid baru
                    }
                }
                echo '</div>'; // Tutup grid produk
            } else {
                echo "Tidak ada data.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    
      

  </main>

  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace(); // Mengaktifkan Feather Icons
  </script>
  <script src="../assets/js/script.js"></script>
</body>
</html>
