  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html">.<span>WebFramework</span></a></h2>
        <h2 class="signin-title-primary">Login</h2>
        <h3 class="signin-title-secondary">Admin</h3>
        
        <?= $this->session->flashdata('message');?>

        <form class="user" method="post" action="<?= base_url('admin/auth')?>">
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
              <?= form_error('username','<div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div><!-- form-group -->
            <div class="form-group mg-b-30">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <?= form_error('password',' <div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div><!-- form-group -->
            <button class="btn btn-primary btn-block btn-signin" type="submit">Login</button>
        </form>

        <p class="mg-t-40 mg-b-0">Don't have an account? <a href="<?= site_url('admin/auth/register')?>">Sign Up</a></p>

      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->