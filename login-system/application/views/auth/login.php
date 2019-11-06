    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="<?= base_url('auth'); ?>">
              <div class="card-header card-header-primary text-center py-4">
                <h4 class="card-title">Login</h4>

              </div>
                <?= $this->session->flashdata('message'); ?>
              <div class="card-body mt-4">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input class="form-control" name="email" placeholder="Email" type="text" value="<?= set_value('email'); ?>">
                </div>
                <?= form_error('email', '<small class="text-danger pl-5">', '</small>'); ?>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password..." name="password">
                </div>
                <?= form_error('password', '<small class="text-danger pl-5">', '</small>'); ?>

                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary">Login<div class="ripple-container"></div></button>
                </div>
                <div class="text-center mt-1">
                  <a class="text-primary" href="<?= base_url('auth/registration'); ?>">
                    Create an account
                  </a><br>
                  <a class="text-info" href="#">
                      forgot password?
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
