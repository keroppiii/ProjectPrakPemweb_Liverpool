<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LFC Merchandise</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <main>
        <div class="upload-form">
            <h2>Homepage</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="info">Informasi:</label>
                <textarea name="info" id="info" required></textarea>
                <label for="price">Harga:</label>
                <input type="number" name="price" id="price" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../homepage/fetch_data.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Jersey</h2>
            <form action="uploadj.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="info">Informasi:</label>
                <textarea name="info" id="info" required></textarea>
                <label for="price">Harga:</label>
                <input type="number" name="price" id="price" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../merchandise/fetch_jersey.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Souvenirs</h2>
            <form action="uploads.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="info">Informasi:</label>
                <textarea name="info" id="info" required></textarea>
                <label for="price">Harga:</label>
                <input type="number" name="price" id="price" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../merchandise/fetch_souvenirs.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Limited Signed Items</h2>
            <form action="uploadsi.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="info">Informasi:</label>
                <textarea name="info" id="info" required></textarea>
                <label for="price">Harga:</label>
                <input type="number" name="price" id="price" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../merchandise/fetch_signed.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Goalkeepers</h2>
            <form action="uploadg.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="name">Nama:</label>
                <textarea name="name" id="name" required></textarea>
                <label for="number">Number:</label>
                <input type="number" name="number" id="number" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../players/fetch_goalkeepers.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Defenders</h2>
            <form action="uploadd.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="name">Nama:</label>
                <textarea name="name" id="name" required></textarea>
                <label for="number">Number:</label>
                <input type="number" name="number" id="number" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../players/fetch_defenders.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Midfielders</h2>
            <form action="uploadm.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="name">Nama:</label>
                <textarea name="name" id="name" required></textarea>
                <label for="number">Number:</label>
                <input type="number" name="number" id="number" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../players/fetch_mainfielders.php'; ?>
        </div>

        <div class="upload-form">
            <h2>Forward</h2>
            <form action="uploadf.php" method="post" enctype="multipart/form-data">
                <label for="image">Pilih Gambar:</label>
                <input type="file" name="image" id="image" required>
                <label for="name">Nama:</label>
                <textarea name="name" id="name" required></textarea>
                <label for="number">Number:</label>
                <input type="number" name="number" id="number" step="0.01" required>
                <button type="submit">Unggah</button>
            </form>
        </div>
        <h2>Produk yang Tersimpan</h2>
        <div class="product-grid">
            <?php include '../players/fetch_forward.php'; ?>
        </div>

    </main>
    <footer>
        <p>&copy; 2024 LFC Merchandise</p>
    </footer>
</body>
</html>