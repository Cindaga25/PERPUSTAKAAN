<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Akses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        background: url('../gambar/pengadaan-buku-perpustakaan.jpg') no-repeat center center fixed;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-size: cover;
    }

    .container {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #f7f0f0;
    }

    .links {
        margin-top: 20px;
    }

    .links a {
        display: inline-block;
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        padding: 10px 20px;
        margin: 5px;
        border: 1px solid #007bff;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .links a:hover {
        background-color: #007bff;
        color: #fff;
    }

    header {
        position: fixed;
        top: 0;
        width: 100%;
        padding: 10px;
        background-color: #2979ff;
        z-index: 1000;
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
        text-shadow: 2px 2px 2px black;
        border-bottom: 4px solid rgba(255, 255, 255, 0.3);
    }

    h1 {
        margin: 0;
        float: left;
        /* Menempatkan h1 di sebelah kiri */
        text-shadow: 2px 2px 2px black;
    }

    nav {
        float: right;

        /* Menempatkan nav di sebelah kanan */

    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-left: 1280px;

    }

    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }
</style>

<body>

    <header>
        <h1>PERPUSTAKAAN</h1>
        <nav>
            <ul>
                <li><a href="tampilan depan.php">Home</a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <h2>Selamat datang!</h2>
        <div class="links">
            <a href="masuk login.php">Admin</a>
            <a href="masuk login.php">User</a>
            <a href="masuk login.php">Siswa</a>
        </div>
    </div>
</body>

</html>