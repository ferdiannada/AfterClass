
  <div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="<?= base_url('assets/img/faces/') . $user['image']; ?>" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Admin</h6>
              <h4 class="card-title"><?= $user['name']; ?></h4>
              <p class="card-description">
              Member since : <?= date('d F Y', $user['date_create']); ?>
              </p>

            <a class="btn btn-primary btn-round" href="#">Edit</a>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email (disabled)</label>
                    <input type="text" value="<?= $user['email']; ?>" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name (disabled)</label>
                    <input type="text" value="<?= $user['name']; ?>" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Phone (disabled)</label>
                    <input type="text" value="082230270872" class="form-control" disabled>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right" disabled>Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
