<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Barang</title>
  </head>
  <body>

      <h1><?php echo $judul; ?></h1>
      <hr>
      <?= anchor('barang/formInput', 'Tambah Data'); ?>
        <table border="1" width="40%">
          <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Menu</th>
          </tr>
          <!-- Menampilkan data dari DB -->
          <?php foreach ($barang as $b): ?>
            <tr>
                <td><?= $b->id_barang; ?></td>
                <td><?= $b->nama_barang; ?></td>
                <td><?= $b->stok; ?></td>
                <td><?= $b->harga; ?></td>
                <td><?= anchor("barang/formEdit", "Edit"); ?></td>
            </tr>
          <?php endforeach; ?>
        </table>

  </body>
</html>
