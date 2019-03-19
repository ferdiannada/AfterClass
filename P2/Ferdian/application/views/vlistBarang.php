<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Barang</title>
  </head>
  <body>

      <h1 style="color: "><?php echo $judul; ?></h1>
    <ul>
      <?php foreach ($barang as $b): ?>
        <li><?php echo $b; ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
