<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Barang</title>
  </head>
  <body>
    <?php echo form_open('barang/simpanData'); ?>
    <table>
      <tr>
        <td><label for="nama_barang">Nama Barang :</label></td>
        <td><input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang"></td>
      </tr>
      <tr>
        <td><label for="stok">Stok :</label></td>
        <td><input type="text" name="stok" id="stok" placeholder="Stok"></td>
      </tr>
      <tr>
        <td><label for="harga_barang">Harga Barang :</label></td>
        <td><input type="text" name="harga_barang" id="harga_barang" placeholder="Harga"></td>
      </tr>
      <tr>
        <td><button type="submit" name="simpan">Simpan</button></td>
        <td><?= anchor('barang', 'Kembali'); ?></td>

      </tr>
    </table>
    <?php echo form_close(); ?>
  </body>
</html>
