<?php include 'navbar.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(167, 106, 212);
        margin: 0;
        padding: 30px;
    }

    h2 {
        text-align: center;
        color: white;
        margin-top: 20px;
        margin-bottom: 20px;
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
        width: 60px;
    }

    .logo-text {
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    th {
        background-color: rgb(86, 35, 125);
        color: white;
        padding: 12px;
    }

    td {
        padding: 10px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    button {
        padding: 6px 12px;
        border: none;
        background-color: rgb(86, 35, 125);
        color: white;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background-color: rgb(120, 70, 160);
    }

    .status-menunggu { background:red; }
    .status-proses { background:yellow; }
    .status-selesai { background:greenyellow; }
</style>

<div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>

<h2>Data Pengaduan</h2>

<form method="GET" style="margin-bottom:20px; text-align:center;">
    <input type="text" name="search" placeholder="Cari data pengaduan..." 
    style="padding:8px; width:250px; border-radius:6px; border:none;">

    <button type="submit">Search</button>
</form>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Id Kategori</th>
        <th>Nama Kategori</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php 
include 'koneksi.php'; 
$no =1;

$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori 
FROM input_aspirasi 
LEFT JOIN kategori 
ON input_aspirasi.id_kategori = kategori.id_kategori
WHERE kategori.ket_kategori LIKE '%$search%'
OR lokasi LIKE '%$search%'
OR keterangan LIKE '%$search%'
OR status LIKE '%$search%'");

    while($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['id_kategori'] ?></td>
        <td><?= $data['ket_kategori'] ?></td>
        <td><?= $data['lokasi'] ?></td>
        <td><?= $data['keterangan'] ?></td>

        <td class="
        <?php 
        if($data['status'] == 'menunggu'){
            echo 'status-menunggu';
        }elseif($data['status'] == 'proses'){
            echo 'status-proses';
        }elseif($data['status'] == 'selesai'){
            echo 'status-selesai';
        }
        ?>
        ">
        <?= $data['status'] ?>
        </td>

        <td>
            <a href="detail-pengaduan.php?id=<?=  $data['id_pelaporan'] ?>">
                <button>Detail</button>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>