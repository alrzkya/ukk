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
  <title>Petugas</title>
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Dasboard</h1>
  <div class="text-center">
  <img src="../img/dasboard.png" class="rounded" alt="...">
</div>
<center>
<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
<div class="card">
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Pengguna</p>
          <footer class="blockquote-footer"><?= $_SESSION['nama']; ?></footer>
        </blockquote>
      </div>
    </div>
    </div>
    </center>
  </div> 
</body>

</html>