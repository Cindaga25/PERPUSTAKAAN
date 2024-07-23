<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $insert = mysqli_query($koneksi, "INSERT INTO registrasi (username, email, password) VALUES 
    ('$username','$email','$password')");
    header("location:registrasi.php?notif=tambah-success");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $edit = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE id='$id' ");
    $rowEdit = mysqli_fetch_assoc($edit);
}

if (isset($_POST["edit"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $id = $_GET['edit'];

    $update = mysqli_query($koneksi, "UPDATE registrasi SET username ='$username', email='$email', password='$password' WHERE id='$id'");
    header("location:registrasi.php?notif=update-berhasil");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        h1 {
            background-color: #2979ff;
            height: 70px;
            margin-top: 0%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-bottom: 4px solid rgba(255, 255, 255, .3);
            text-shadow: 2px 2px 2px black;


        }

        * {
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            height: 100vh;
            background: url('gambar/pengadaan-buku-perpustakaan.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px 30px;
            width: 350px;


            background-color: rgba(0, 0, 0, .7);
            box-shadow: 0 0 10px rgba(255, 255, 255, .3);
        }

        .container h2 {
            text-align: center;
            color: #fafafa;
            text-shadow: 2px 2px 2px black;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
        }

        .container label {
            text-align: left;
            color: #90caf9;
            text-shadow: 2px 2px 2px black;

        }

        .container form input {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
        }

        .container form button {
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color: #2979ff;
            font-size: 18px;
            color: #fafafa;
            text-shadow: 2px 2px 2px black;
        }

        .container form button:hover {
            background: linear-gradient(to bottom, hsl(156, 85%, 27%), hsl(142, 81%, 12%));

        }
    </style>


    <h1>WEBSITE SISTEM INFORMASI</h1>

    <form action="" method="post">
        <!-- <div class="container"> -->
        <h2>Form Registrasi</h2>
        <div class="mb-1">
            <label for="">Username:</label><br>
            <input value="<?php echo isset($_GET['edit']) ? $rowEdit['username'] : '' ?>" type="text" class="form-control" name="username" required><br><br>
        </div>

        <div class="mb-1">
            <label for="">Email:</label><br>
            <input value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>" type="email" class="form-control" name="email" required><br><br>
        </div>

        <div class="mb-1">
            <label for="">Password:</label><br>
            <input value="" type="password" class="form-control" name="password" required><br><br>
        </div>

        <div class="mb-1">
            <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan" class="btn btn-primary">
            <a href="registrasi.php">Kembali</a>
        </div>
        <!-- </div> -->
    </form>

</body>

</html>