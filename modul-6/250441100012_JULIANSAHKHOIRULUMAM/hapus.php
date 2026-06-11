<?php
include 'koneksi.php';
// 1. Cek apakah parameter id ada di URL
if (!isset($_GET['id'])) {
die("ID tidak ditemukan!");
}
// 2. Ambil id dari URL
$id = (int) $_GET['id'];
// 3. Jalankan query DELETE
$sql = "DELETE FROM guru WHERE id='$id'";
if ($db->query($sql) === TRUE) {
// 4. Setelah berhasil, langsung redirect kembali ke daftar
header("Location: tampil_data.php");
exit;
} else {echo "Gagal menghapus: " . $db->error;
}
$db->close();
?>