<?php
session_start();
include 'koneksi.php';

$nis = $_SESSION['nis'];
$idkategori = $_POST['id_kategori'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$status = 'Menunggu';  


$query = mysqli_query($koneksi, "INSERT INTO input_aspirasi (nis, id_kategori, lokasi, tanggal, keterangan, status) VALUES ('$nis', '$idkategori', '$lokasi', '$tanggal', '$keterangan', '$status')");

if($query){
    header("Location: data-aspirasi.php");
}
else {
    echo "Gagal mengirim pengaduan.";
}