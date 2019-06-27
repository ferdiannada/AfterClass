<div id="base">
	<!-- BEGIN OFFCANVAS LEFT -->
	<div class="offcanvas">
	</div>
	<!--end .offcanvas-->
	<!-- END OFFCANVAS LEFT -->

	<!-- BEGIN CONTENT-->
	<div id="content">
		<section class="style-default-bright">
			<div class="section-header">
				<h2 class="text-primary">Customers <?= $customers['name'] ?></h2>
			</div>
			<div class="section-body">

				<!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
				<div class="card">
					<div class="card-body">
						<form class="form-horizontal" role="form" action="" method="post">
							<div class="col-lg">
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="name" class="col-sm-2 control-label">Customer Name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" value="<?= $customers['name'] ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="email" name="email" value="<?= $customers['email']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="address" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="address" name="address" value="<?= $customers['address']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="city" class="col-sm-2 control-label">City</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="city" name="city" value="<?= $customers['city']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="province" class="col-sm-2 control-label">Province</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="province" name="province" value="<?= $customers['province']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="country" class="col-sm-2 control-label">Country</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="country" name="country" value="<?= $customers['country']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="zipcode" class="col-sm-2 control-label">Zip Code</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="zipcode" name="zipcode" value="<?= $customers['zipcode']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="phonenumber" class="col-sm-2 control-label">Phone Number</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?= $customers['phonenumber']; ?>" readonly>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 20px;">
									<label for="status" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="status" name="status" 
										value="<?php if ($customers['status'] == 1) {
											echo 'Active';
											} else {
												echo 'Not Active';
											}
											?>" readonly>
										</div>
									</div>
									<div class="form-group" style="margin-bottom: 20px;">
										<label for="date_created" class="col-sm-2 control-label">Register Date</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="date_created" name="date_created" value="<?= $customers['date_created']; ?>" readonly>
										</div>
									</div>

									<div class="form-layout-footer" style="float: right;">
										<a href="javascript:window.history.back()" class="btn btn-secondary bd-0">Cancel</a>
									</form>
								</div>
								<!--end .card-body -->
							</div>
							<!--end .card -->

							<hr class="ruler-xxl" />

						</div>
						<!--end .section-body -->
					</section>
				</div>
				<!--end #content-->
				<!-- END CONTENT -->
				<!-- BEGIN MENUBAR-->
				<div id="menubar" class="menubar-inverse ">
					<div class="menubar-fixed-panel">
						<div>
							<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</div>
						<div class="expanded">
							<a href="dashboard.html">
								<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
							</a>
						</div>
					</div>
					<div class="menubar-scroll-panel">
						<!-- BEGIN MAIN MENU -->

						<ul id="main-menu" class="gui-controls">
							<!-- BEGIN DASHBOARD -->
							<li>
								<a href="<?= base_url();?>administrator/dashboard">
									<div class="gui-icon"><i class="md md-home"></i></div>
									<span class="title">Dashboard</span>
								</a>
							</li>
							<!--end /menu-li -->
							<!-- END DASHBOARD -->

							<!-- BEGIN TABLES -->
							<li class="gui-folder">
								<a class="active">
									<div class="gui-icon"><i class="fa fa-table"></i></div>
									<span class="title">Data</span>
								</a>
								<!--start submenu -->
								<ul>
									<li><a href="<?= base_url(); ?>administrator/customers"><span class="title">Customers</span></a></li>

									<li><a href="#" class="active"><span class="title">Barang</span></a></li>

									<li><a href="<?= base_url(); ?>administrator/jenis"><span class="title">Jenis Barang</span></a></li>

								</ul>
								<!--end /submenu -->
							</li>
							<!--end /menu-li -->
							<!-- END TABLES -->

							<!-- BEGIN PAGES -->
							<li class="gui-folder">
								<a>
									<div class="gui-icon"><i class="md md-computer"></i></div>
									<span class="title">Orders</span>
								</a>
								<!--start submenu -->
								<ul>
									<li><a href="<?= base_url(); ?>administrator/orders/notpaid"><span class="title">Not Paid</span></a></li>

									<li><a href="<?= base_url(); ?>administrator/orders/manufacture"><span class="title">Manufacture</span></a></li>

									<li><a href="<?= base_url(); ?>administrator/orders/delivery"><span class="title">Delivery</span></a></li>
								</ul>
								<!--end /submenu -->
							</li>
							<!--end /menu-li -->
							<!-- END FORMS -->

							<!-- BEGIN CHARTS -->
							<li>
								<a href="../charts/charts.html">
									<div class="gui-icon"><i class="md md-assessment"></i></div>
									<span class="title">Charts</span>
								</a>
							</li>
							<!--end /menu-li -->
							<!-- END CHARTS -->

						</ul>
						<!--end .main-menu -->
                        <!-- END MAIN MENU -->