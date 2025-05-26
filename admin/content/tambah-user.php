<?php
if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($config, "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
    if ($query) {
        header("location:user.php?tambah=berhasil");
    }

}

$header = isset($_GET['edit']) ? "Edit" : "Tambah";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id_user'");
    if ($queryUpdate) {
        header("location:user.php?ubah=berhasil");
    }

}

?>



<form action="" method="post">
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="name" class="form-label">Nama *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Masukkan Nama Anda" required
                                                value="<?= isset($_GET['edit']) ? $rowEdit['name'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="email" class="form-label">Email *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Ex:admin@gmail.com" required
                                                value="<?= isset($_GET['edit']) ? $rowEdit['email'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="password" class="form-label">Password *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Masukkan Password Anda" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary"
                                                name="<?= isset($_GET['edit']) ? 'edit' : 'simpan' ?>">Simpan</button>
                                        </div>
                                    </div>
                                </form>