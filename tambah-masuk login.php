<?php
$query = mysqli_query($koneksi, "SELECT login.*,level.* FROM login JOIN level ON login.id_level=level_id.id ORDER BY login.id DESC");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id' ");
    header("location:?pg=user&hapus=berhasil");
}
?>

<div class="mb-3" align="right">
    <a href="?pg=tambah-user" class="btn btn-primary">Tambah Pengguna</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- untuk memanggil sebuah data di data base(mysql) -->
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['Username'] ?></td>
                <td><?php echo $row['Password'] ?></td>
                <td><a href="tambah-masuk login.php" class="btn btn-sm btn-success">Edit</a>-
                    <a onclick="return confirm('apakah anda yakin akan mengapus data ini?')" href="tambah-masuk login.php&delete=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>