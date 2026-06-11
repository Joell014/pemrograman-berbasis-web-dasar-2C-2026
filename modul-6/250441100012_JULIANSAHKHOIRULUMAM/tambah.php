<!DOCTYPE html>
<html lang="id">
<head>
<title>Tambah Data Guru</title>
</head>
<body>
    <h2>Form Tambah Data Guru</h2>
    <form action="proses.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    
    <br>
    <a href="tampil_data.php">Lihat Daftar Guru</a>
</body>
</html>

<?php
// 1. Panggil koneksi database
include 'index.php';
// 2. Cek apakah form sudah di-submit
if (isset($_POST['submit'])) {
// 3. Ambil data dari form
$nama = $_POST['nama'];
$umur = (int) $_POST['umur']; // dipaksa jadi integer
// 4. Buat query INSERT
$sql = "INSERT INTO guru (nama, umur) VALUES ('$nama',
'$umur')";
// 5. Jalankan query dan cek hasilnya
if ($db->query($sql) === TRUE) {
echo "<h3>Berhasil!</h3>";
echo "Data guru bernama <b>$nama</b> sudah masuk ke
database.";
echo "<br><br><a href='tampil_data.php'>Lihat Daftar
Guru</a>";
echo " | <a href='index.php'>Tambah Data Lagi</a>";
} else {
echo "Gagal menyimpan: " . $db->error;
}
// 6. Tutup koneksi
$db->close();
}
?>