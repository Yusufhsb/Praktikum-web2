<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Mahasiswa</h2>
        <form action="process_mahasiswa.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required>
            </div>
            <div class="form-group">
                <label for="ipk">IPK:</label>
                <input type="number" id="ipk" name="ipk" step="0.01" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
// Memeriksa apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    $ipk = $_POST["ipk"];

    // Proses data sesuai kebutuhan, contoh:
    // Menyimpan data ke database, dll.
    
    // Menampilkan data yang dimasukkan
    echo "<h2>Data Mahasiswa:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Jurusan: $jurusan</p>";
    echo "<p>IPK: $ipk</p>";
} else {
    // Jika formulir tidak dikirimkan, arahkan kembali ke form
    header("Location: form_mahasiswa.html");
    exit();
}
?>
