<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Barang</title>
  </head>
  <body>

      <h1><?php echo $judul; ?></h1>
      <hr>
      <?php

       ?>
        <table border="1">
          <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
          </tr>
          <!-- Menampilkan data dari DB -->
          <?php foreach ($barang as $b): ?>
            <tr>
                <td><?= $b->id_barang; ?></td>
                <td><?= $b->nama_barang; ?></td>
                <td><?= $b->stok; ?></td>
                <td><?= $b->harga; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>

  </body>
</html>
