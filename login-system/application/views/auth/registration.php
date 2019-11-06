<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
      <div class="card card-login">

          <div class="card-header card-header-primary text-center py-4">
            <h4 class="card-title">Registration</h4>

          </div>
          <form method="post" action="<?= base_url('auth/registration'); ?>">
          <div class="card-body">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">face</i>
                </span>
              </div>
              <input class="form-control" name="name" placeholder="Full Name" type="text" value="<?= set_value('name'); ?>">
            </div>
                <?= form_error('name', '<small class="text-danger pl-5">', '</small>'); ?>

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
              <input type="password" class="form-control" placeholder="Password..." name="password1" >
            </div>
            <?= form_error('password1', '<small class="text-danger pl-5">', '</small>'); ?>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="material-icons">lock_outline</i>
                </span>
              </div>
              <input class="form-control" type="password" name="password2" placeholder="Retype password">
            </div>
          </div>

          <div class="text-center mt-5">
            <button type="submit" class="btn btn-primary">Login<div class="ripple-container"></div></button>
          </div>
          <div class="text-center py-3">
            <a class="text-primary" href="<?= base_url('auth'); ?>">
              Have an account?
            </a><br>
          </div>
          </form>

      </div>
    </div>
  </div>
</div>
