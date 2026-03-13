<?php
include 'koneksi.php';

if(!isset($_GET['id'])) {
   echo "ID tidak ditemukan.";
    exit;
}

$id = $_GET['id'];

if(isset($_POST['simpan'])){
    $status = $_POST['status'];
    $feedback = $_POST['feedback'];

    mysqli_query($koneksi, "UPDATE input_aspirasi SET status='$status', feedback='$feedback' WHERE id_pelaporan='$id'");

    header("Location: admin.php");
    exit;
} 

//buat ngambil data
$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori WHERE id_pelaporan='$id'");

$data = mysqli_fetch_assoc($query);
if(!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #9c6bcf, #b07bdc);
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: white;
        margin-top: 90px;
    }

    .logo-area {
        position: fixed;
        top: 15px;
        left: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .logo {
        width: 45px;
    }

    .logo-text {
        color: white;
        font-weight: bold;
    }

    form {
        width: 550px;
        margin: 30px auto;
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td {
        padding: 10px;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    select, textarea {
        width: 100%;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    textarea {
        resize: none;
    }

    button {
        background-color: #5b2c83;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }

    button:hover {
        background-color: #7d4cb1;
    }

    a {
        text-decoration: none;
        background-color: black;
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        margin-left: 10px;
    }

    a:hover {
        background-color: darkgray;
    }
</style>
<body>

<div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>

    <h2>Detail Pengaduan</h2>
    <form method="POST">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Id Pengaduan</td>
                <td><?php echo $data['id_pelaporan']; ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><?php echo $data['ket_kategori']; ?></td>
            </tr>
              <td>Tanggal</td>
                <td><?php echo $data['tanggal']; ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td><?php echo $data['lokasi']; ?></td>
            </tr>
            <tr>
                 <td>Keterangan</td>
                <td><?php echo $data['keterangan']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="0" <?php if($data['status'] == '0') echo 'selected'; ?>>Belum Diproses</option>
                        <option value="proses" <?php if($data['status'] == 'proses') echo 'selected'; ?>>Proses</option>
                        <option value="selesai" <?php if($data['status'] == 'selesai') echo 'selected'; ?>>Selesai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Feedback</td>
                <td>
                    <textarea name="feedback" rows="4" cols="40"><?php echo $data['feedback']; ?></textarea>
                </td>
            </tr>
</table>
<br>
<button type="submit" name="simpan">Simpan Perubahan</button>
<a href="admin.php">Kembali</a>
    </form>
</body>
</html>