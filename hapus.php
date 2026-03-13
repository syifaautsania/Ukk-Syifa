<?php
include 'koneksi.php';
$nis = $_GET['nis'];
mysqli_query($koneksi, "DELETE FROM user WHERE nis='$nis'");
header("Location: datasiswa.php");
?>