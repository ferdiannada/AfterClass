
<div class="content">

    <div class="row">
      <div class="col-md-12">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
          </div>
        <?php endif; ?>
        <div class="container-fluid">

        <?= $this->session->userdata('message'); ?>
        <a href="" class="btn btn-primary btn-round" data-toggle="modal" data-target="#addNewSubMenu">
          <i class="material-icons">add</i> Add New Submenu
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
                  <th>Sub Menu</th>
                  <th>Menu</th>
                  <th>Url</th>
                  <th>Icon</th>
                  <th>Controller Active</th>
                  <th>Active</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php $i = 1; ?>

                  <!-- Menampilkan data sub menu
                      yang sudah di olah datanya di Modal
                      dan di panggil di controller
                  -->

                  <?php foreach ($subMenu as $sm): ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $sm['title']; ?></td>
                      <td><?= $sm['menu']; ?></td>
                      <td><?= $sm['url']; ?></td>
                      <td><?= $sm['icon']; ?></td>
                      <td><?= $sm['controller_active']; ?>emmet</td>
                      <td><?= $sm['is_active']; ?></td>
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
<div class="modal fade" id="addNewSubMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="<?= base_url('menu/submenu'); ?>" method="post">
        <div class="modal-body">
          <!-- form sub menu -->
            <div class="form-group">
              <label class="bmd-label-floating" for="title">Sub Menu</label>
              <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="form-group">
              <select class="form-control" name="menu_id" id="menu_id">
                <option value="">Select Menu</option>
                <?php foreach ($menu as $m): ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label class="bmd-label-floating" for="url">Url</label>
              <input type="text" name="url" class="form-control" id="url">
            </div>

            <div class="form-group">
              <label class="bmd-label-floating" for="icon">Icon</label>
              <input type="text" name="icon" class="form-control" id="icon">
            </div>

            <div class="form-group">
              <label class="bmd-label-floating" for="controller_active">Controller Activer</label>
              <input type="text" name="controller_active" class="form-control" id="controller_active">
            </div>

            <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="1" checked>
                  Active ?
                  <span class="form-check-sign">
                      <span class="check"></span>
                  </span>
              </label>
            </div>

          <!-- End form sub menu -->
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
