<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_syifa");

if(isset($_POST['Nis'])){

    $Nis = $_POST['Nis'];
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Password = $_POST['Password'];
    $role = $_POST['role'];



    // Kalau admin, NIS jadi NULL
    if($role == "admin"){
        $query = mysqli_query($koneksi, 
        "INSERT INTO user (`username`, `password`, `role`, `nis`, `kelas`) 
         VALUES ('$Nama','$Password','$role', NULL, NULL)");
    } else {
        $query = mysqli_query($koneksi, 
        "INSERT INTO user (`username`, `password`, `role`, `nis`, `kelas`) 
         VALUES ('$Nama','$Password','$role','$Nis','$Kelas')");
    }

    if($query){
        header("Location: aspirasi-admin.php");
        exit();
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>