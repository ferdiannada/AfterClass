<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Barang</title>
  </head>
  <body>
    <h1><?= $judul ?> :</h1>
    <ul>
      <?php foreach ($barang as $b): ?>
        <li><?php echo "$b->kdbarang"; ?></li>
        <li><?php echo "$b->nama"; ?></li>
        <li><?php echo "$b->deskripsi"; ?></li>
        <li><?php echo "$b->stokbarang"; ?></li>
        <li><?php echo "$b->hargabarang"; ?></li>
      <?php endforeach; ?>

    </ul>
  </body>
</html>
