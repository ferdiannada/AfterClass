    <!--=====  End of header container  ======-->

    <!--=============================================
	=            breadcrumb area         =
	=============================================-->

    <div class="breadcrumb-area pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb container  =======-->

                    <div class="breadcrumb-container">
                        <nav>
                            <ul>
                                <li class="parent-page"><a>Home</a></li>
                                <li>Forgot Password</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->

    <!--=============================================
    =            Login Register page content         =
    =============================================-->

    <div class="page-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Login Form s-->
                    <form action="" method="post">

                        <div class="login-form">
                            <h4 class="login-title">Change your password for</h4>
                            <h5 class="mb-30"><?= $this->session->userdata('reset_email'); ?></h5>
                            <?= $this->session->flashdata('message'); ?>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>New Password</label>
                                    <input class="mb-0" type="password" name="newpassword1" id="newpassword1" placeholder="Password">
                                    <?= form_error('newpassword1', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Confirm New Password*</label>
                                    <input class="mb-0" type="password" name="newpassword2" id="newpassword2" placeholder="Password">
                                    <?= form_error('newpassword2', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>

                                <div class="col-md-12">
                                    <button name="change" type="submit" class="register-button mt-0">Change</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Login Register page content  ======-->