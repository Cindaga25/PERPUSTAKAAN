<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $Judul_buku = $_POST['Judul_buku'];
    $Tanggal_peminjaman = $_POST['Tanggal_peminjaman'];
    $Tanggal_pengembalian = $_POST['Tanggal_pengembalian'];

    $insert = mysqli_query($koneksi, "INSERT INTO perpustakaan (nama_lengkap, email, Judul_buku, Tanggal_peminjaman, Tanggal_pengembalian) VALUES 
    ('$nama_lengkap','$email','$Judul_buku','$Tanggal_peminjaman', '$Tanggal_pengembalian')");
    if ($insert) {
        header("location:User.php?notif=tambah-success");
    } else {
        echo "gagal";
    }
}
//jika parameter bernama edit ada,ambil nilai parameter edit

if (isset($_GET["edit"])) {
    $id = $_GET["edit"];

    //tampilkan sebuah data tabel user dimana id bernilai dari nilai parameter
    $edit = mysqli_query($koneksi, "SELECT * FROM perpustakaan WHERE id='$id' ");
    $rowEdit = mysqli_fetch_assoc($edit);
}

if (isset($_POST['edit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $Judul_buku = $_POST['Judul_buku'];
    $Tanggal_peminjaman = $_POST['Tanggal_peminjaman'];
    $Tanggal_pengembalian = $_POST['Tanggal_pengembalian'];
    $id = $_GET['edit'];

    $update = mysqli_query($koneksi, "UPDATE perpustakaan SET 
    nama_lengkap='$nama_lengkap', email='$email', Judul_buku='$Judul_buku', Tanggal_peminjaman='$Tanggal_peminjaman', Tanggal_pengembalian='$Tanggal_pengembalian' WHERE id='$id' ");
    header("location:User.php?notif=update-berhasil");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h3 {
            margin-top: 50px;
            position: absolute;
            left: 35%;
            padding: 20px 30px;
            width: 1500px;
        }

        .contrainer {
            margin-top: 50px;
            position: absolute;
            left: 35%;
            padding: 20px 30px;
            width: 1500px;
        }

        .form-group {
            margin-bottom: 20px;

        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="datetime-local"] {
            width: 30%;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            padding: 5px 15px;
            font-size: 16px;
        }

        h3 {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="contrainer">
        <div class="row">
            <div class="col-10">
                <?php if (isset($_GET["edit"])) : ?>
                    <h3>Edit</h3>
                    <form action="" method="post">
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input value="<?php echo $rowEdit['nama_lengkap'] ?>" type="text" class="form-control" name="nama_lengkap" placeholder="Masukan nama lengkap" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Email</label>
                            <input value="<?php echo $rowEdit['email'] ?>" type="email" class="form-control" name="email" placeholder="Masukan email anda" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Judul buku</label>
                            <input value="<?php echo $rowEdit['Judul_buku'] ?>" type="text" class="form-control" name="Judul_buku" placeholder="Masukan nama yang buku kamu ingin pinjam" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Tanggal Peminjaman</label>
                            <input value="<?php echo $rowEdit['Tanggal_peminjaman'] ?>" type="datetime-local" class="form-control" name="Tanggal_peminjaman" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Tanggal Pengembalian</label>
                            <input value="<?php echo $rowEdit['Tanggal_pengembalian'] ?>" type="datetime-local" class="form-control" name="Tanggal_pengembalian" required>
                        </div>
                        <div class="form-group mb-1">
                            <input type="submit" class="btn btn-primary" name="edit" value="simpan">
                        </div>

                    </form>
                <?php else : ?>
                    <h3>Tambah</h3>
                    <form action="" method="post">
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan nama lengkap" required>
                        </div>

                        <div class="form-group mb-1">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email anda" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Judul buku</label>
                            <input type="text" class="form-control" name="Judul_buku" placeholder="Masukan nama buku kamu ingin pinjam" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Tanggal Peminjaman</label>
                            <input type="datetime-local" class="form-control" name="Tanggal_peminjaman" required>
                        </div>
                        <div class="form-group mb-1">
                            <label for="" class="form-label">Tanggal Pengembalian</label>
                            <input type="datetime-local" class="form-control" name="Tanggal_pengembalian" required>
                        </div>
                        <div class="form-group mb-1">
                            <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        </div>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>

</html>