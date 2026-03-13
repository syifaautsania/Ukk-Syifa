

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: rgb(167, 106, 212);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form{
        background-color: rgba(86, 35, 125, 0.61);
        padding: 30px;
        border-radius: 20px;
        width: 320px;
    }

    label{
        font-weight: bold;
        color: cornsilk;
    }

    input{
        width: 90%;
        padding: 8px;
        margin-bottom: 12px;
        border-radius: 10px;
        border: none;
        resize: none;
    }

    button{
        width: 100%;
        background-color: rgba(180, 193, 255, 0.9);
        padding: 10px;
        border-radius: 12px;
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    table{
    border-collapse: collapse;
    margin-left: 40px;
    min-width: 500px;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    font-family: Arial, sans-serif;
}

th{
    background-color: rgb(86, 35, 125);
    color: white;
    padding: 10px 15px;
    text-align: center;
}

td{
    padding: 10px 15px;
    text-align: center;
}

tr:nth-child(even){
    background-color: #f2f2f2;
}

tr:hover{
    background-color: #ddd;
}

h2{
    text-align: center;
    margin-bottom: 10px;
}
    </style>
<body>
    <form action="proses-datasiswa.php" method="post">
        <br/>
        <label>NIS</label><br/>
        <input type="text" name="Nis">
        <br/>

        <br/>
        <label>Nama</label><br/>
        <input type="text" name="Nama" required>
        <br/>

        <br/>
        <label>Kelas</label><br/>
        <input type="text" name="Kelas">
        <br/>

        <br/>
        <label>Role</label><br/>
        <select name="role" required>
        <option value="admin">Admin</option>
        <option value="siswa">Siswa</option>
    </select>

        <br/>
        <label>Password</label><br/>
        <input type="text" name="Password" required>
        <br/>

        <button type="submit">Kirim</button>
    </form>

  <?php
include 'tampil.php';
?>

<?php while ($row = mysqli_fetch_assoc($hasil)) { ?>

<tr>
<td><?= $row['nis'] ?></td>
<td><?= $row['username'] ?></td>
<td><?= $row['password'] ?></td>
<td><?= $row['role'] ?></td>
<td><?= $row['kelas'] ?></td>

<td>
<a href="edit.php?id=<?= $row['nis']; ?>">Edit</a>
<a href="hapus.php?id=<?= $row['nis']; ?>">Hapus</a>
</td>
</tr>

<?php } ?>

</table>


</body>
</html>