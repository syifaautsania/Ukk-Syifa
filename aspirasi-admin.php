<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Aspirasi</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body{
    background-color: rgb(167, 106, 212);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
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


/* container utama */
.aspirasi{
    background-color: rgba(86, 35, 125, 0.61);
    padding: 30px;
    border-radius: 20px;
    width: 300px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
}

/* button umum */
button{
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 12px;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

/* tombol input aspirasi */
button.input{
    background: #6a5acd;
    color: white;
}

button.input:hover{
    background: #5a4bcf;
}

/* tombol data aspirasi */
button.data{
    background: #7b68ee;
    color: white;
}

button.data:hover{
    background: #6957db;
}

/* tombol ganti password */
button.password{
    background: #ffffff;
    color: #6a5acd;
    border: 2px solid #6a5acd;
}

button.password:hover{
    background: #6a5acd;
    color: white;
}

</style>
<body>

    <div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>

    <div class="aspirasi">
        <button class="data" onclick="location.href='admin.php'">Data Aspirasi</button>
        <button class="" onclick="location.href='datasiswa.php'">Data Siswa</button>
        <button class="kategori" onclick="location.href='tambah-kategori.php'">Tambah Kategori</button>

    </div>
</body>
</html>