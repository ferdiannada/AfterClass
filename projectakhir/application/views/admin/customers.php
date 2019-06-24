<!-- BEGIN BASE-->
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
				<h2 class="text-primary">Data Produk</h2>
			</div>
			<div class="section-body">

				<!-- BEGIN DATATABLE 1 -->

				<div class="row">
					<div class="card">
						<div class="card-body">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table id="datatable1" class="table table-striped table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Address</th>
										<th>Phone Number</th>
										<th>Status</th>
										<th>Menu</th>
									</tr>
								</thead>
								<tbody>
									<?php
								        $i=1;
								        foreach ($customers as $c) {
							        ?>
									<tr>
										<td>
											<?= $i++ ?>
										</td>
										<td hidden>
											<?= $c['customer_id'] ?>
										</td>
										<td>
											<?= $c['name'] ?>
										</td>
										<td>
											<?= $c['email'] ?>
										</td>
										<td>
											<?= $c['address'] ?>
										</td>
										<td>
											<?= $c['phonenumber'] ?>
										</td>
										<td>
											<?php if ($c['status'] == 1) {
													echo 'Active';
												} else {
													echo 'Not Active';
												}
											?>
										</td>
										<td>
											<a href="<?= base_url(); ?>administrator/customers/detail/<?= $c['customer_id'] ?>" class="modal-effect btn btn-outline-primary btn-icon rounded-circle" data-toggle="modal" data-effect="effect-fall" title="Detail Customers">
												<div><i class="fa fa-info"></i></div>
											</a>
											<a href="<?= base_url(); ?>administrator/customers/hapus/<?= $c['customer_id'] ?>" class="btn btn-outline-danger btn-icon rounded-circle tombol-hapus" title="Delete Customer">
												<div><i class="fa fa-close"></i></div>
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<!--end .table-responsive -->
					</div>
					<!--end .col -->

					</div>

				</div>
				</div>
				<!--end .row -->
				<!-- END DATATABLE 1 -->

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
						<li><a href="#" class="active"><span class="title">Customers</span></a></li>

						<li><a href="<?= base_url(); ?>administrator/produk"><span class="title">Product</span></a></li>

						<li><a href="<?= base_url(); ?>administrator/jenis"><span class="title">Category</span></a></li>

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
