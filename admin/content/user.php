<?php
$query = mysqli_query($config, "SELECT * FROM users ORDER BY id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDelete = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
    header("location:user.php?hapus=berhasil");
}
?>

<div class="table-responsive">
                                    <div align="right" class="mb-3">
                                        <a href="?page=tambah-user" class="btn btn-primary">Tambah User</a>
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
                                            <?php foreach ($row as $key => $data): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $data['name'] ?></td>
                                                    <td><?= $data['email'] ?></td>
                                                    <td>
                                                        <a href="tambah-user.php?edit=" class="btn btn-success">Edit</a>
                                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                            href="user.php?delete=" class="btn btn-warning">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>