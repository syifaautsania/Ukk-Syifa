<?php
include 'koneksi.php';  

$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE nis='$nis'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', kelas='$kelas' WHERE nis='$nis'");

    header("Location: datasiswa.php");
}
?>

<h2>Edit Data Siswa</h2>
<form method="POST">
    Nama: <input type="text" name="username" value="<?= $row['username'] ?>"><br><br>
    Password: <input type="text" name="password" value="<?= $row['password'] ?>"><br><br>
    Kelas: <input type="text" name="kelas" value="<?= $row['kelas'] ?>"><br><br>

    <button type="submit" name="submit">Update</button>
</form>