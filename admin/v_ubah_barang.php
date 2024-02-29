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
  <title>Ubah Barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Ubah Barang</h1>
  <?php
  //ambil koneksi 
  include "../config.php";

  //ambil id_barang dari url 
  $id_barang = $_GET['id_barang'];

  //cari id_login di tb_login
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
  //ambil datanya 
  $barang = mysqli_fetch_assoc($sql);
  ?>
  <form action="m_ubah_barang.php" method="post">
    <input type="hidden" name="id_barang" id="" value="<?= $barang['id_barang'] ?>">
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <table class="table table-striped">
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="nama_barang" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="stok_barang" class="form-control" aria-describedby="basic-addon2"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <div class="input-group mb-3">
        <td><input type="text" name="harga_barang" class="form-control" aria-describedby="basic-addon2"></td>
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