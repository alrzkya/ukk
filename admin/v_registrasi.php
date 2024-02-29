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
  <title>Registrasi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <h1>Daftar Pengguna</h1>
  <a href="v_tambah_pengguna_baru.php" class="btn btn-secondary">Tambah Pengguna</a>
  <br><br>
  <div class="container">
  <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-striped">
    <tr>
      <td>Id Login</td>
      <td>Nama</td>
      <td>Username</td>
      <td>Password</td>
      <td>Status</td>
      <td>Aksi</td>
    </tr>
    <?php
    include "../config.php";
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login ORDER BY
    id_login DESC');
    foreach ($sql as $pengguna) {
    ?>
      <tr>
        <td><?= $pengguna['id_login'] ?> </td>
        <td><?= $pengguna['nama'] ?> </td>
        <td><?= $pengguna['username'] ?> </td>
        <td><?= $pengguna['password'] ?> </td>
        <td><?= $pengguna['status'] ?> </td>
        <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna
        ['id_login'] ?>" class="btn btn-primary">Ubah</a></td>
      </tr>
    <?php } ?>
  </table>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>