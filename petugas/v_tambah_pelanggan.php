<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan Baru</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Tambah Pelanggan Baru</h1>
  <form action="m_tambah_pelanggan.php" method="post">
  <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
    <table class="table table-striped table-hover">
      <tr>
        <td>Id Pelanggan</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="id_pelanggan" id="" value="<?= date('mis'); ?>" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="nama_pelanggan" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="alamat_pelanggan" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="telepon_pelanggan" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
      </tr>
    </table>
  </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>