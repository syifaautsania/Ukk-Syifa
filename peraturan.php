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
.peraturan-box{
    background-color: rgba(86, 35, 125, 0.75);
    padding: 25px;
    border-radius: 20px;
    width: 700px;
    margin: 20px auto;
    color: cornsilk;
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    font-family: Arial, sans-serif;
}

.peraturan-box h2{
    text-align: center;
    margin-bottom: 15px;
}

.peraturan-box ul{
    padding-left: 20px;
}

.peraturan-box li{
    margin-bottom: 8px;
}

.sanksi{
    margin-top: 20px;
    background-color: rgba(255,255,255,0.15);
    padding: 15px;
    border-radius: 12px;
}

.logo-area{
            position: fixed;
            top: 15px;
            left: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo{
            width: 60px;
        }

        .logo-text{
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
</style>

<body>
    <div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>
    <div class="peraturan-box">
     <h2>Peraturan Pengisian Pengaduan Siswa</h2>

        <ul>
        <li>Siswa wajib mengisi laporan dengan jujur dan sesuai kejadian sebenarnya.</li>
        <li>Dilarang membuat laporan palsu atau mengada-ada.</li>
        <li>Gunakan bahasa yang sopan dan tidak mengandung kata kasar.</li>
        <li>Pengaduan harus berkaitan dengan lingkungan sekolah.</li>
        <li>Dilarang mengirim laporan yang tidak jelas atau bercanda.</li>
        <li>Siswa bertanggung jawab atas isi laporan yang dikirimkan.</li>
        </ul>

        <div class="sanksi">
        <b>Sanksi Pelanggaran:</b>
        <ul>
        <li>Laporan yang tidak sesuai aturan akan dihapus oleh admin.</li>
        <li>Siswa yang membuat laporan palsu akan mendapat teguran.</li>
        <li>Pelanggaran berulang dapat dikenakan sanksi sesuai tata tertib sekolah.</li>
        </ul>
    </div>

    </div>
</body>
</html>