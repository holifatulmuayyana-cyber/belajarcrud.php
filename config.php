<!-- Koneksi ke database -->
<?php
$koneksi = mysqli_connect("localhost", "root", "root", "dbsiswa");

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>