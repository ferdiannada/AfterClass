      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Table Barang</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Barang
            <a href="add" type="button" class="btn btn-xs btn-primary btn-sm" style="float: right;">Tambah Barang</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($barang as $b) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $b->kdbarang; ?></td>
                    <td><?php echo $b->nama; ?></td>
                    <td><?php echo $b->deskripsi; ?></td>
                    <td><?php echo $b->stokbarang; ?></td>
                    <td><?php echo $b->hargabarang; ?></td>
                    <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editBarang<?php echo $b->kdbarang; ?>">Edit</button> 
                    <a class="btn btn-xs btn-danger btn-sm" data-toggle="modal" data-target="#hapusBarang<?php echo $b->kdbarang; ?>">Hapus</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- Modal Edit Barang-->
                  <?php foreach ($barang as $b) { ?>
        <div id="editBarang<?php echo $b->kdbarang; ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/tables/edit'?>">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="kdbarang">Kode Barang :</label>
                    <input type="text" class="form-control" id="kdbarang" value="<?php echo $b->kdbarang; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang :</label>
                    <input type="text" class="form-control" id="nama" value="<?php echo $b->nama; ?>">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi :</label>
                    <input type="text" class="form-control" id="deskripsi" value="<?php echo $b->deskripsi; ?>">
                  </div>
                  <div class="form-group">
                    <label for="stokbarang">Stok Barang :</label>
                    <input type="number" class="form-control" id="stokbarang" value="<?php echo $b->stokbarang; ?>">
                  </div>
                  <div class="form-group">
                    <label for="hargabarang">Harga Barang :</label>
                    <input type="number" class="form-control" id="hargabarang" value="<?php echo $b->hargabarang; ?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Simpan</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </form>

          </div>
        </div>
                  <?php } ?>


        <!-- Modal Hapus Data -->
                  <?php foreach ($barang as $b) { ?>
        <div class="modal fade" id="hapusBarang<?php echo $b->kdbarang; ?>" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
                  
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Hapus Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/tables/hapus'?>">
                <div class="modal-body">
                  <p>Anda yakin mau menghapus <b><?php echo $b->kdbarang;?> - <?php echo $b->nama;?></b></p>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="kdbarang" value="<?php echo $b->kdbarang;?>">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
                  <?php } ?>

<!--         <p class="small text-center text-muted my-5">
  <em>More table examples coming soon...</em>
</p>
 -->
      </div>
      <!-- /.container-fluid -->
