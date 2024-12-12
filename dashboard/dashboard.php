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
        <h1>Dashboard LFC Merchandise</h1>
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
    </main>
    <footer>
        <p>&copy; 2024 LFC Merchandise</p>
    </footer>
</body>
</html>