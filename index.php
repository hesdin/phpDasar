<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <!-- BELAJAR VARIABEL -->
  <?php
  $nama_depan = 'Rizal'; //Ini adalah variable nama tipe data => STRING
  $nama_belakang = 'Abadi';
  $nilai = 8.8; //Ini adalah variable nilai tipe data => FLOAT & DOUBLE

  // Ada dua cara memanggil variable atau memunculkan
  // ECHO DAN PRINT
  // Untuk cel detail var_dump


  ?>

  <p>Nama : <?= $nama_depan . ' ' . $nama_belakang  ?></p>
  <p>Nilai : <?= $nilai ?></p>

</body>

</html>