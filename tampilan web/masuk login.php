<?php
//untuk simpan
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    //memasukan ke dalam tabel user (field yang akan di masukan)
    //values (inputan masing-masing kolom)

    $insert = mysqli_query($koneksi, "INSERT INTO login (username, password) VALUES 
    ('$username','$password')");

    if (!$insert) {
        // header("location:?pg=tambah-user&pesan=tambah-gagal");

    } else {
        header("location:tambah-masuk login.php&pesan=tambah-berhasil");
    }
}



if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $edit = mysqli_query($koneksi, "SELECT * FROM login WHERE id = '$id' ");
    $rowEdit = mysqli_fetch_assoc($edit);
}
//untuk edit 
if (isset($_POST["edit"])) {
    //htmlspecialchars untuk mencegah parameter kita ke
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    //variabel id untuk edit
    $id = $_GET['edit'];

    $update = mysqli_query($koneksi, "UPDATE login SET nama_lengkap='$nama_lengkap', email='$email', password='$password', id_level='$id_level' WHERE id='$id' ");
    header("location:tambah-masuk login.php&update=berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        background: url('../gambar/pengadaan-buku-perpustakaan.jpg') no-repeat center center fixed;
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

<body>
    <h1>WEBSITE SISTEM INFORMASI</h1>


    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="">Username</label><br>
                <input value="<?php echo isset($_GET['edit']) ? $rowEdit['username'] : '' ?>" type="text" class="form-control" placeholder="Masukan username anda Anda" name="username">
            </div>

            <div class="mb-3">
                <label>Password</label><br>
                <input value="" type="password" class="form-control" placeholder="Masukan Password Anda" name="password">
            </div>
            <br>


            <!-- <div class="mb-3">
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM login");
                ?> -->
            <!-- 

                <select class="form-control" name="id_level" id="id_level">
                    <option value="">--pilih level--</option>
                    <?php
                    //while harus pake titik : tidak boleh pake titik ;
                    while ($row = mysqli_fetch_assoc($dataUser)) :
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_level'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div> -->

            <!-- untuk button -->
            <div class=" mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan"> <!--echo isset(GET), BUTTON MEMILIKI 2 KONDISI YAKNI EDIT DAN SIMPAN -->
            </div>
        </form>
    </div>



</body>

</html>