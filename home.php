<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body{
            background-color: rgb(167, 106, 212);
            color: beige;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        button{
            width: 160px;
            height: 45px;
            border-radius: 20px;
            border: none;
            font-size: 15px;
            cursor: pointer;
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



        .home{
        background-color: rgba(86, 35, 125, 0.61); 
        padding: 45px;             /* LEBIH PANJANG */
        border-radius: 30px;
        width: 380px;
        min-height: 200px;         /* TINGGI FORM */
        backdrop-filter: blur(6px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

        .login{
            background-color: paleturquoise;
        }

        .menu{
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="logo-area">
    <img src="logomd.png" class="logo">
    <span class="logo-text">SMKS TI MUHAMMADIYAH CIKAMPEK</span>
</div>


    <div class="home">



        <h1>Selamat Datang di Form Pengaduan MUTU</h1>

        <div class="menu">
            <button class="login" onclick="location.href='index.html'">
                Login
            </button>
        </div>
    </div>
</body>
</html>
