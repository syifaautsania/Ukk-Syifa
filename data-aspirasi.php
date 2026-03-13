<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(167, 106, 212);
        margin: 0;
        padding: 30px;
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

    h2 {
        text-align: center;
        color: white;
        margin-top: 80px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background-color: rgb(86, 35, 125);
        color: white;
        padding: 10px;
        text-align: center;
    }

    td {
        padding: 8px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
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

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Id Kategori</th>
        <th>Nama Kategori</th>
        <th>Tanggal</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
        <th>Feedback</th>
    </tr>
    <?php include 'koneksi.php'; $no =1;
    $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori");

    while($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['id_kategori'] ?></td>
        <td><?= $data['ket_kategori'] ?></td>
        <td><?= $data['tanggal'] ?></td>
        <td><?= $data['lokasi'] ?></td>
        <td><?= $data['keterangan'] ?></td>
        <!-- <td><?= $data['status'] ?></td> -->
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

        <td><?= $data['feedback'] ?></td>

      
        
    </tr>
    <?php } ?>
</table>