<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container">
    <h1>Ubah Pengguna</h1>
    <?php
    include "../config.php";
    $id_login = $_GET['id_login'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
    $pengguna = mysqli_fetch_assoc($sql);
    ?>
    <form action="m_ubah_pengguna.php" method="post">
        <input type="hidden" name="id_login" id="" value="<?= $pengguna
        ['id_login'] ?>">
        <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <table class="table table-striped">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <div class="input-group mb-3">
                <td><input type="text" name="nama_pengguna" id="" value="<?=
                $pengguna['nama'] ?>" class="form-control" aria-describedby="basic-addon2"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <div class="input-group mb-3">
                <td><input type="text" name="username_pengguna" id="" value="<?=
                $pengguna['username'] ?>" class="form-control" aria-describedby="basic-addon2"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <div class="input-group mb-3">
                <td><input type="text" name="password_pengguna" id="" value="<?=
                $pengguna['password'] ?>" class="form-control" aria-describedby="basic-addon2"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status" id="" class="form-select" aria-label="Disabled select example">
                    <?php
                    if ($pengguna['status'] == "Administrator"){
                        echo "<option value='Administrator' selected 
                        >Administrator</option>";
                    } else {
                        echo "<option value='Administrator' >Administrator</option>";
                    }

                    if ($pengguna['status'] == "Petugas"){
                        echo "<option value='Petugas' selected >Petugas</option>";
                    } else {
                        echo "<option value='Petugas' >Petugas</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan" class="btn btn-secondary"></td>
            </tr>
        </table>
        </div>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>