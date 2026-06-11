<?php
// 1. Panggil koneksi database
include 'koneksi.php';
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