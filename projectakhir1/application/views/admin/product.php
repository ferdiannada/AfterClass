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
					<div class="col-md-8">
						<a href="<?= base_url(); ?>administrator/produk/tambah" class="btn ink-reaction btn-raised btn-primary" style="margin-bottom: 10px;"><i class="fa fa-plus"></i> Tambah Produk</a>
					</div>
					<!--end .col -->
				</div>
				<!--end .row -->

				<div class="row">
					<div class="card">
						<div class="card-body">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table id="datatable1" class="table table-striped table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Jenis</th>
										<th>Nama Produk</th>
										<th>Harga</th>
										<th>Menu</th>
									</tr>
								</thead>
								<tbody>
									<?php
                  $i=1;
                  foreach ($barang as $b) {
                  ?>
									<tr>
										<td>
											<?= $i++ ?>
										</td>
										<td>
											<?= $b->id ?>
										</td>
										<td>
											<?= $b->jenis ?>
										</td>
										<td>
											<?= $b->nama_barang ?>
										</td>
										<td>
											Rp<?=  number_format($b->harga) ?>
										</td>
										<td>
											<a href="<?= base_url(); ?>administrator/produk/detail/<?= $b->id ?>" class="modal-effect btn btn-outline-primary btn-icon rounded-circle" data-toggle="modal" data-effect="effect-fall" title="Info Produk">
												<div><i class="fa fa-info"></i></div>
											</a>
											<a href="<?= base_url(); ?>administrator/produk/edit/<?= $b->id ?>" class="btn btn-outline-warning btn-icon rounded-circle" title="Edit Produk">
												<div><i class="fa fa-pencil"></i></div>
											</a>
											<a href="<?= base_url(); ?>administrator/produk/hapus/<?= $b->id ?>" class="btn btn-outline-danger btn-icon rounded-circle tombol-hapus" title="Hapus Produk">
												<div><i class="fa fa-close"></i></div>
											</a>
										</td>
									</tr>
									<?php
                                                                                  } ?>
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
						<li><a href="../tables/static.html"><span class="title">User</span></a></li>

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
						<span class="title">Transaksi</span>
					</a>
					<!--start submenu -->
					<ul>
						<li><a href="../pages/invoice.html"><span class="title">Belum Bayar</span></a></li>

						<li><a href="../pages/calendar.html"><span class="title">Proses Pembuatan</span></a></li>

						<li><a href="../pages/pricing.html"><span class="title">Proses Pengiriman</span></a></li>
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
