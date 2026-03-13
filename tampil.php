<?php
include 'koneksi.php';
$hasil = mysqli_query($koneksi, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<style>
.edit{
background:#3498db;
color:white;
padding:6px 12px;
border-radius:8px;
text-decoration:none;
margin-right:5px;
}

.hapus{
background:#e74c3c;
color:white;
padding:6px 12px;
border-radius:8px;
text-decoration:none;
}
</style>
<body>
    <center>
        <h2>Data Siswa</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Id</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Role</th>
                <th>Kelas</th>
                <th>Aksi</th>
            <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nis'] ?></td>
<td><?= $row['username'] ?></td>
<td><?= $row['password'] ?></td>
<td><?= $row['role'] ?></td>
<td><?= $row['kelas'] ?></td>

<td>
<a href="edit.php?nis=<?= $row['nis']; ?>" class="edit">Edit</a>
<a href="hapus.php?nis=<?= $row['nis']; ?>" class="hapus"
onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
</td>

</tr>

<?php } ?>
        </table>
    </center>
</body>
</html>