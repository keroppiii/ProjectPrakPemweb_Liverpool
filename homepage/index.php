<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage Liverpool</title>
  <link rel="stylesheet" href="../assets/css/homepage.css">
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
            <a href="#">Home</a>
            <a href="#">Players</a>
            <a href="#">Merchandise</a>
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
            <img src="../assets/images/homepage/highlight.webp" alt="Liverpool Match">
        </div>
      <div class="headline">
        <h1>Liverpool lolos ke babak sistem gugur Liga Champions</h1>
      </div>
    </section>
    
    <div class="container">
      <div class="club-logo">
        <div class="line"></div>
        <img src="../assets/images/logoBesar - liverpool.png" alt="Liverpool Logo">
        <div class="line"></div>
      </div>

      <div class="judul2">
        <h1>Liverpool First Team Matches</h1>
      </div>
     
      <div class="match">
        <div class="team">
          <h2>Liverpool</h2>
          <img src="../assets/images/logo-liverpool.png" alt="Liverpool Logo">
        </div>
        <div class="details">
          <p>1 DEC 2024</p>
          <h3>23:00</h3>
          <p>Premier League</p>
        </div>
        <div class="team">
          <img src="../assets/images/Manchester City.png" alt="Manchester City Logo">
          <h2>Manchester City</h2>
        </div>
      </div>
  
      <hr>
      <div class="match">
        <div class="team">
          <h2>Newcastle United</h2>
          <img src="../assets/images/Newcastle United.png" alt="Newcastle Logo">
        </div>
        <div class="details">
          <p>5 DEC 2024</p>
          <h3>02:30</h3>
          <p>Premier League</p>
        </div>
        <div class="team">
          <img src="../assets/images/logo-liverpool.png" alt="Liverpool Logo">
          <h2>Liverpool</h2>
        </div>
      </div>
  
      <hr>
      <div class="match">
        <div class="team">
          <h2>Everton</h2>
          <img src="../assets/images/everton.png" alt="Everton Logo">
        </div>
        <div class="details">
          <p>7 DEC 2024</p>
          <h3>19:30</h3>
          <p>Premier League</p>
        </div>
        <div class="team">
          <img src="../assets/images/logo-liverpool.png" alt="Liverpool Logo">
          <h2>Liverpool</h2>
        </div>
      </div>

      <div class="countdown-container">
        <div class="text-and-timer">
          <div class="text">
            <span>Next Match</span><br>
            <span>Start In</span>
          </div>
          <div class="timer">
            <div class="time-box">
              <span id="days" class="time">00</span>
              <span class="label">days</span>
            </div>
            <span class="separator">:</span>
            <div class="time-box">
              <span id="hours" class="time">00</span>
              <span class="label">hours</span>
            </div>
            <span class="separator">:</span>
            <div class="time-box">
              <span id="minutes" class="time">00</span>
              <span class="label">mins</span>
            </div>
            <span class="separator">:</span>
            <div class="time-box">
              <span id="seconds" class="time">00</span>
              <span class="label">secs</span>
            </div>
          </div>
        </div>
      </div>

      <div class="club-logo">
        <div class="line"></div>
        <img src="../assets/images/logoBesar - liverpool.png" alt="Liverpool Logo">
        <div class="line"></div>
      </div>

      <div class="judul3">
        <h1>LFC Merchandise</h1>
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

            $sql = "SELECT id, image_url, info, price FROM dashboard_data";
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
