<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_modul6";


$db = new mysqli($server, $user, $password, $database);

if ($db->connect_error) {
    die("Koneksi ke database gagal: " . $db->connect_error);
}
?>
  