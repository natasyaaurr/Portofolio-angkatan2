<?php 
include 'config/koneksi.php';

//munculkan atau pilih semua data dari table user dan urutkan dari yang terbesar sampai yang terkecil

$query = mysqli_query($config, "SELECT * FROM users ORDER BY id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDelete = mysqli_query($config,"DELETE FROM users WHERE id='$id'");
    header("location:user.php?hapus=berhasil");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <?php include 'inc/header.php';?>
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                Data User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div align="right" class="mb-3">
                                        <a href="tambah-user.php" class="btn btn-primary">Tambah User</a>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $data) :?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $data['name']?></td>
                                                <td><?=$data['email']?></td>
                                                <td>
                                                    <a href="tambah-user.php?edit=<?php echo $data['id']?>" class="btn btn-success">Edit</a>
                                                    <a onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                        href="user.php?delete=<?php echo $data['id']?>" class="btn btn-warning btn-sm">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>