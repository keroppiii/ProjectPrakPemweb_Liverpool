<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Player</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="../assets/css/players.css">
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
            <a href="../news/news.php">News</a>
        </nav>
        
        <div class="auth-links">
          <?php
          session_start(); // Mulai session
          if (isset($_SESSION['username'])) {
              echo '<span class="welcome">Welcome, ' . htmlspecialchars($_SESSION['username']) . '</span>';
              echo '<form action="" method="POST" style="display:inline;">';
              echo '<button type="submit" name="logout" class="logout">Log Out</button>';
              echo '</form>';
          } else {
              echo '<a href="../login/login-user.html" class="login">Log in</a>';
              echo '<a href="../signup/signup-user.html" class="signup">Sign Up</a>';
          }

          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
            session_destroy();
            header("Location: ../login/login-user.html");
            exit();
          }        
          ?>
        </div>
    </div>
  </header>

  <div class="search-bar">
    <i data-feather="search"></i>
    <input type="text" placeholder="What Are You Looking For?">
  </div>

  <div class="player-banner">
  <img src="../assets/images/players/men/highlight.webp" alt="Team Banner">
  <div class="banner-overlay">
    <h1>MEN</h1>
  </div>
</div>

<div class="categories-container">
  <a href="#goalkeepers" class="category-link">Goalkeepers</a>
  <a href="#defenders" class="category-link">Defenders</a>
  <a href="#midfielders" class="category-link">Midfielders</a>
  <a href="#forwards" class="category-link">Forwards</a>
</div>

  </div>
</div>
  

  <div class="judul4">
        <h1>Goalkeepers</h1>
      </div>
      <div class="card">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, name, number FROM goalkeepers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                  echo '<div class="player-card">';
                  echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                  echo '<div class="overlay">';
                  echo '<h3>' . $row["name"] . '</h3>';
                  echo '<p>#' . $row["number"] . '</p>';
                  echo '</div>';
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

        <div class="judul4">
        <h1>Defenders</h1>
      </div>
        <div class="card">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, name, number FROM defenders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                  echo '<div class="player-card">';
                  echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                  echo '<div class="overlay">';
                  echo '<h3>' . $row["name"] . '</h3>';
                  echo '<p>#' . $row["number"] . '</p>';
                  echo '</div>';
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

        <div class="judul4">
        <h1>Midfielders</h1>
      </div>
        <div class="card">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, name, number FROM midfielders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                  echo '<div class="player-card">';
                  echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                  echo '<div class="overlay">';
                  echo '<h3>' . $row["name"] . '</h3>';
                  echo '<p>#' . $row["number"] . '</p>';
                  echo '</div>';
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

        <div class="judul4">
        <h1>Forward</h1>
      </div>
        <div class="card">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "my_website";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT id, image_url, name, number FROM forward";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $count = 0; // Untuk menghitung jumlah produk yang ditampilkan
                while($row = $result->fetch_assoc()) {
                  echo '<div class="player-card">';
                  echo '<img src="' . $row["image_url"] . '" alt="Gambar" />';
                  echo '<div class="overlay">';
                  echo '<h3>' . $row["name"] . '</h3>';
                  echo '<p>#' . $row["number"] . '</p>';
                  echo '</div>';
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

  <footer class="footer">
  <div class="social-icons">
    <a href="https://www.facebook.com/" target="_blank"><img src="https://cdn.simpleicons.org/facebook/FFFFFF" alt="Facebook"></a>
    <a href="https://twitter.com/" target="_blank">
  <img src="https://cdn.simpleicons.org/x/FFFFFF" alt="X (Twitter)">
</a>
    <a href="https://www.instagram.com/" target="_blank"><img src="https://cdn.simpleicons.org/instagram/FFFFFF" alt="Instagram"></a>
    <a href="https://www.tiktok.com/" target="_blank"><img src="https://cdn.simpleicons.org/tiktok/FFFFFF" alt="TikTok"></a>
    <a href="https://www.youtube.com/" target="_blank"><img src="https://cdn.simpleicons.org/youtube/FFFFFF" alt="YouTube"></a>
  </div>
  <p>DOWNLOAD THE OFFICIAL LFC APP</p>
  <div class="app-buttons">
    <a href="https://www.apple.com/app-store/" target="_blank">
      <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on the App Store">
    </a>
    <a href="https://play.google.com/store" target="_blank">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">
    </a>
  </div>
  <p>© Copyright 2024 All rights reserved.</p>
</footer>

  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace(); // Mengaktifkan Feather Icons
  </script>


</body>
</html>