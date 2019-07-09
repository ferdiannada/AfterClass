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
                    <form action="<?= base_url('account/forgotpassword') ?>" method="post">

                        <div class="login-form">
                            <h4 class="login-title">Forgot Password</h4>
                            <?= $this->session->flashdata('message'); ?>

                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address">
                                </div>

                                <div class="col-md-4 mt-10 mb-20">
                                    <a href="<?= base_url(); ?>account"> Back to login</a>
                                </div>

                                <div class="col-md-12">
                                    <button name="forgot" type="submit" class="register-button mt-0">Reset</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Login Register page content  ======-->