<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipe Data</title>
</head>

<body>
  <?php

  $mobil = array('mitsubishi', 'ferrari', 'toyota');
  ?>
</body>
<table border="1">
  <thead>
    <tr>
      <th>Nama Mobil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $mobil[0] ?></td>
    </tr>
    <tr>
      <td><?= $mobil[1] ?></td>
    </tr>
    <tr>
      <td><?= $mobil[2] ?></td>
    </tr>
  </tbody>
</table>

</html>