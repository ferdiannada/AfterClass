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
                                <li>My Account</li>
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
    =            My Account page content         =
    =============================================-->

    <div class="page-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                <a href="#account-details" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                                <a href="#edit-account" data-toggle="tab"><i class="fa fa-user"></i> Edit Account Details</a>

                                <a href="#edit-password" data-toggle="tab"><i class="fa fa-key "></i> Edit Password</a>

                                <a href="<?= base_url(); ?>account/logout"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <?= $this->session->flashdata('message'); ?>

                                        <div class="welcome mb-20">
                                            <p>Hello, <strong><?= $customers['name']; ?></strong></p>
                                        </div>

                                        <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Pending</td>
                                                    <td>$45</td>
                                                    <td><a href="cart.html" class="btn">View</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-details" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <address>
                                            <p><strong><?= $customers['name'] ?></strong><br/><strong><?= $customers['email'] ?></strong></p>
                                            <p><?= $customers['address'] ?><br>
                                                <?= $customers['city'] ?>, <?= $customers['province'] ?>, <?= $customers['country'] ?>, <?= $customers['zipcode'] ?></p>
                                            <p>Phone Number: <?= $customers['phonenumber'] ?></p>
                                        </address>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="edit-account" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Edit Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="<?= base_url(); ?>account/editDetails" method="post" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-12 mb-30">
                                                        <input id="name" name="name" type="text" value="<?= $customers['name'] ?>" placeholder="Full Name">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="email" name="email" type="email" value="<?= $customers['email'] ?>" readonly>
                                                    </div>

                                                    <div class="col-lg-12 col-12 mb-30">
                                                        <input id="address" name="address" type="text" value="<?= $customers['address'] ?>" placeholder="Address">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="city" name="city" type="text" value="<?= $customers['city'] ?>" placeholder="City">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="province" name="province" type="text" value="<?= $customers['province'] ?>" placeholder="State">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="country" name="country" type="text" value="<?= $customers['country'] ?>" placeholder="Country">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="zipcode" name="zipcode" type="text" value="<?= $customers['zipcode'] ?>" placeholder="Zip Code">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="phonenumber" name="phonenumber" type="text" value="<?= $customers['phonenumber'] ?>" placeholder="Phone Number">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn" type="submit">Save Changes</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="edit-password" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Change Password</h3>

                                        <div class="account-details-form">
                                            <form action="<?= base_url(); ?>account/changePassword" method="post" accept-charset="utf-8">
                                                <div class="row">

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" placeholder="Old Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="New Password" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn" type="submit">Save Changes</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of My Account page content  ======-->