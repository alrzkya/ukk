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
  <title>DAFTAR BARANG</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  
  <h1>Daftar Barang</h1>
  <a href="v_tambah_barang.php" class="btn btn-secondary">Tambah Barang</a>
  <br>
  <br>
  <div class="container">
  <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-striped">
    <tr>
      <td>Id Barang</td>
      <td>Nama Barang</td>
      <td>Stok</td>
      <td>Harga</td>
      <td colspan="2">Aksi</td>
    </tr>
    <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_barang
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_barang ORDER BY id_barang DESC');
    foreach ($sql as $barang) {
    ?>
      <tr>
        <td><?= $barang['id_barang'] ?> </td>
        <td><?= $barang['nama_barang'] ?></td>
        <td><?= $barang['stok_barang'] ?></td>
        <td><?= $barang['harga_barang'] ?></td>
        <td><a href="v_ubah_barang.php?id_barang=<?= $barang['id_barang'] ?>" class="btn btn-primary">Ubah</a></td>
        <td><a href="m_hapus_barang.php?id_barang=<?= $barang['id_barang'] ?>" class="btn btn-secondary" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
      </tr>
    <?php } ?>
  </table>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>