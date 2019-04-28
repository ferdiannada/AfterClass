
<div class="content">

    <div class="row">
      <div class="col-md-7">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
        <div class="container-fluid">

        <?= $this->session->userdata('message'); ?>
        <a href="" class="btn btn-primary btn-round" data-toggle="modal" data-target="#addNewMenu">
          <i class="material-icons">add</i> Add New Menu
        </a>
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Daftar Barang</h4>
            <p class="card-category"> Di bawah merupakan <b>Data Barang</b></p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-warning">
                  <th>ID</th>
                  <th>Menu</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($menu as $m): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $m['menu']; ?></td>
                      <td class="td-actions">
                        <a href="" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <a rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm tombol-hapus">
                        <i class="material-icons">close</i>
                      </a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="<?= base_url('menu'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label class="bmd-label-floating" for="nama_barang">Menu Name</label>
              <input type="text" name="menu" class="form-control" id="nama_barang">
            </div>
        </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
