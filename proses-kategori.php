<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_syifa");

if(isset($_POST['nama'])){

    $nama_kategori = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO kategori (`ket_kategori`) VALUES ('$nama_kategori')");

    if($query){
        header("Location: aspirasi-admin.php");
        exit();
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>