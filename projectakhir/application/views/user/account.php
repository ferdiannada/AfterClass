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
    							<li>Login - Register</li>
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
    				<form action="<?= base_url('account/login') ?>" method="post">

    					<div class="login-form">
    						<h4 class="login-title">Login</h4>

    						<div class="row">
    							<div class="col-md-12 col-12 mb-20">
    								<label>Email Address*</label>
    								<input class="mb-0" type="email" name="email" placeholder="Email Address">
    							</div>
    							<div class="col-12 mb-20">
    								<label>Password</label>
    								<input class="mb-0" type="password" name="password" placeholder="Password">
    							</div>
    							<div class="col-md-8">

    								<div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
    									<input type="checkbox" id="remember_me">
    									<label for="remember_me">Remember me</label>
    								</div>

    							</div>

    							<div class="col-md-4 mt-10 mb-20 text-left text-md-right">
    								<a href="#"> Forgotten pasward?</a>
    							</div>

    							<div class="col-md-12">
    								<button name="login" type="submit" class="register-button mt-0">Login</button>
    							</div>

    						</div>
    					</div>

    				</form>
    			</div>
    			<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
    				<form role="form" action="<?= base_url(); ?>account" method="post">

    					<div class="login-form">
    						<h4 class="login-title">Register</h4>
    						<?= $this->session->flashdata('message'); ?>

    						<div class="row">
    							<div class="col-md-12 col-12 mb-20">
    								<label>Name</label>
    								<input class="mb-0" type="text" name="name" placeholder="Your Name" value="<?= set_value('name'); ?>">
    								<?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
    							</div>
    							<div class="col-md-12 mb-20">
    								<label>Email Address</label>
    								<input class="mb-0" type="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
    								<?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
    							</div>
    							<div class="col-md-6 mb-20">
    								<label>Password</label>
    								<input class="mb-0" type="password" name="password1" placeholder="Password">
    								<?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
    							</div>
    							<div class="col-md-6 mb-20">
    								<label>Confirm Password</label>
    								<input class="mb-0" type="password" name="password2" placeholder="Confirm Password">
    								<?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
    							</div>
    							<div class="col-md-12 mb-20">
    								<label>Address</label>
    								<input class="mb-0" type="text" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
    								<?= form_error('address', '<small class="text-danger pl-2">', '</small>'); ?>
    							</div>

    							<div class="col-md-12 col-12 mb-20 collapse" id="registerform">
    								<div class="row">
    									<div class="col-md-6 mb-20">
    										<label>City</label>
    										<input class="mb-0" type="text" name="city" placeholder="City" value="<?= set_value('city'); ?>">
    										<?= form_error('city', '<small class="text-danger pl-2">', '</small>'); ?>
    									</div>
    									<div class="col-md-6 mb-20">
    										<label>State</label>
    										<input class="mb-0" type="text" name="province" placeholder="State" value="<?= set_value('province'); ?>">
    										<?= form_error('province', '<small class="text-danger pl-2">', '</small>'); ?>
    									</div>
    									<div class="col-md-6 mb-20">
    										<label>Country</label>
    										<input class="mb-0" type="text" name="country" value="Indonesia" readonly>
    									</div>
    									<div class="col-md-6 mb-20">
    										<label>Zip Code</label>
    										<input class="mb-0" type="text" name="zipcode" placeholder="Zip Code" value="<?= set_value('zipcode'); ?>">
    										<?= form_error('zipcode', '<small class="text-danger pl-2">', '</small>'); ?>
    									</div>
    									<div class="col-md-6 mb-20">
    										<label>Phone Number</label>
    										<input class="mb-0" type="text" name="phonenumber" placeholder="Phone Number" value="<?= set_value('phonenumber'); ?>">
    										<?= form_error('phonenumber', '<small class="text-danger pl-2">', '</small>'); ?>
    									</div>
    									<div class="col-md-12 mb-20">
    										<button type="submit" name="register" class="register-button mt-0">Register</button>
    									</div>
    								</div>
    								<input class="mb-0" type="text" name="date_created" value="<?= date('Y-m-d H:i:s'); ?>" hidden>

    							</div>

    							<a id="seemore" data-toggle='collapse' href='#registerform' style="margin-left: 15px">See more...</a>

    						</div>
    					</div>

    				</form>
    			</div>
    		</div>
    	</div>
    </div>

    <!--=====  End of Login Register page content  ======-->