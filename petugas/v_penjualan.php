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
  <title>Penjualan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Daftar Pelanggan</h1>
  <a href="v_tambah_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a>
  <br>
  <br>
  <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-striped table-hover">
    <tr class="table-primary">
      <td>ID Pelanggan</td>
      <td>Nama</td>
      <td>Alamat</td>
      <td>Telepon</td>
      <td colspan="2">Aksi</td>
    </tr>
    <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_pelanggan
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC');
    foreach ($sql as $pelanggan) {
    ?>
      <tr>
        <td><?= $pelanggan['id_pelanggan'] ?> </td>
        <td><?= $pelanggan['nama_pelanggan'] ?></td>
        <td><?= $pelanggan['alamat_pelanggan'] ?></td>
        <td><?= $pelanggan['telepon_pelanggan'] ?></td>
        <td><a href="m_hapus_pelanggan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-primary">Hapus</a></td>
        <td><a href="v_detail_penjualan.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-secondary">Beli</a></td>
      </tr>
    <?php } ?>
  </table>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>