<?php
include "koneksi.php";

//tampilkan semua data dari table user urutkan berdasarkan dari yg terbesar ke terkecil 
$userdata = mysqli_query($koneksi, "SELECT * FROM perpustakaan ORDER BY id DESC"); // 
// $row = mysqli_fetch_assoc($userdata); // $row paten 

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $delete = mysqli_query($koneksi, "DELETE FROM perpustakaan WHERE id='$id'");
    header("location:User.php?notif=hapus-berhasil");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="icon" type="image/x-icom" href="..//php/logo-ppkpi500.png">
    <script src="../pakdhavi/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;

    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }
</style>

<body>


    <div class="contrainer">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="table-reponsive">
                    <div align="right" class="mb-3">
                        <a href="Tambah-user.php" class="btn btn-primary">Tambah User</a>

                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            while ($row = mysqli_fetch_assoc($userdata)) :
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row["nama_lengkap"] ?> </td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["Judul_buku"] ?></td>
                                    <td><?php echo $row["Tanggal_peminjaman"] ?></td>
                                    <td><?php echo $row["Tanggal_pengembalian"] ?></td>

                                    <td><a href="Tambah-User.php?edit=<?php echo $row['id'] ?>" class="btn btn-sm btn-success">Edit </a>-
                                        <a onclick="return confirm('apakah anda yakin akan menghapus data ini?')" href="User.php?delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div align="center">
        <a href="tampilan depan.php" class="btn btn-primary">Kembali ke halaman</a>
    </div>

</body>

</html>