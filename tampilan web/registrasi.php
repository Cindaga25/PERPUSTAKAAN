<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM registrasi ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM registrasi WHERE id ='$id' ");
    header("location:registrasi.php?notif=tambah-success");
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
                        <a href="tambah-registrasi.php" class="btn btn-primary">Tambah Akun</a>

                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>username</th>
                                <th>email</th>
                                <th>password</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            while ($row = mysqli_fetch_assoc($query)) : ?>
                                <tr>
                                    <td><?php echo $no++ ?> </td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td><a href="tambah-registrasi.php?edit=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Edit</a>-
                                        <a onclick="return confirm('apakah anda yakin akan mengapus data ini?')" href="registrasi.php?delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-success">Delete</a>
                                    </td>

                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</body>

</html>