<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(167, 106, 212);
        margin: 0;
        padding: 0;
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

    .form-pengaduan {
        width: 400px;
        margin: 120px auto;
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input, select, textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 6px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    textarea {
        resize: none;
        height: 80px;
    }

    button {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        border: none;
        background-color: rgb(86, 35, 125);
        color: white;
        border-radius: 6px;
        cursor: pointer;
        font-size: 14px;
    }

    button:hover {
        background-color: rgb(120, 70, 160);
    }
</style>
<body>

<div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>

    <form action="pengaduan-siswa.php" method="post">
        <div class="form-pengaduan">
            <label>Kategori</label>
            <?php
            include 'koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
            ?>
            <select name="id_kategori">
                <?php while($data = mysqli_fetch_assoc($query)) { ?>
                    <option value="<?= $data['id_kategori'] ?>"><?= $data['ket_kategori'] ?></option>
                <?php } ?>
            </select><br>
            
            <label>Tanggal</label>
            <input type="date" name="tanggal" required><br>

            <label>Lokasi</label><br>
            <input type="text" name="lokasi"><br>
            <label>Keterangan</label><br>
            <textarea name="keterangan"></textarea><br>

            <button type="submit">Kirim</button>
            
        </div>
    </form>
</body>
</html>