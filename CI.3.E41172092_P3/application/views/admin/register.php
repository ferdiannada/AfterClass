  <body>

    <div class="signin-wrapper">

      <div class="signin-box">

        <h2 class="slim-logo"><a href="index.html">.<span>WebFramework</span></a></h2>
        <h2 class="signin-title-primary">Auth</h2>
        <h3 class="signin-title-secondary">Admin - Register</h3>
        
        <form class="user" method="post" action="<?= base_url('admin/auth/register'); ?>">    
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                <?= form_error('username','<div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div><!-- form-group -->

            <div class="form-group mg-b">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1',' <div class="bg-info text-dark"><small>','</small></div>'); ?>
            </div>

            <div class="form-group mg-b-30">
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-signin">Register</button>
        </form>

        <p class="mg-t-40 mg-b-0">Already have an account? <a href="<?= site_url('admin/auth')?>">Sign In</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->