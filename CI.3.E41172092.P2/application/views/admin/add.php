      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah Barang</li>
        </ol>

        <!-- Form Tambah Barang -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-database"></i>
            Tambah Barang
            <div class="card-body">
              <form action="<?php echo base_url(). 'admin/tables/tambah_aksi'; ?>" method="post">
                <div class="form-group">
                  <label for="kdbarang">Kode Barang :</label>
                  <input type="text" class="form-control" id="kdbarang" placeholder="Kode Barang" name="kdbarang">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Barang :</label>
                  <input type="nama" class="form-control" id="nama" placeholder="Nama Barang" name="nama">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi :</label>
                  <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Barang" name="deskripsi">
                </div>
                <div class="form-group">
                  <label for="stokbarang">Stok Barang :</label>
                  <input type="number" class="form-control" id="stokbarang" placeholder="Stok Barang" name="stokbarang">
                </div>
                <div class="form-group">
                  <label for="hargabarang">Harga Barang :</label>
                  <input type="number" class="form-control" id="hargabarang" placeholder="Harga Barang" name="hargabarang">
                </div>
                <div style="float: right;">
                  <button type="reset" class="btn btn-md btn-danger btn-sm">Reset</button>
                  <button type="submit" value="Tambah" class="btn btn-success btn-sm">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
