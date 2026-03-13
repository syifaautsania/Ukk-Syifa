<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, 
    "SELECT * FROM user WHERE username='$username' AND password='$password'"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

    // ✅ Simpan data penting ke session
    $_SESSION['username'] = $data['username'];
    $_SESSION['nis'] = $data['nis'];      // WAJIB ADA
    $_SESSION['role'] = $data['role'];


    if($data['role'] == 'admin'){
        header("Location: aspirasi-admin.php");
        exit;
    } 
    else if($data['role'] == 'siswa'){
        header("Location: aspirasi.php");
        exit;
    }

} else {
    echo "Login Gagal";
}
?>