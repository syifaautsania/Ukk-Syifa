<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .navbar {
        display: flex;
        justify-content: flex-end; /* ini yang bikin ke kiri */
    }

    .navbar a {
        text-decoration: none;
        color: white;
        background-color: rgb(181, 41, 25);
        padding: 6px 12px;
        border-radius: 6px;
    }

    .navbar a:hover {
        background-color: rgb(113, 18, 8);
    }
</style>
<body>
    <div class="navbar">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>