<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_syifa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>