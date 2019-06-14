	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="headerbar-right">
		<ul class="header-nav header-nav-options">
			<li>
				<!-- Search form -->
				<form class="navbar-search" role="search">
					<div class="form-group">
						<input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
					</div>
					<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
				</form>
			</li>

		</ul><!--end .header-nav-options -->
		<ul class="header-nav header-nav-profile">
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
					<img src="<?= base_url(); ?>assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" />
					<span class="profile-info">
						<?= $user_session['nama']; ?>
						<small>Administrator</small>
					</span>
				</a>
				<ul class="dropdown-menu animation-dock">
					<li class="dropdown-header">Config</li>
					<li><a href="../pages/profile.html">My profile</a></li>
					<li class="divider"></li>
					<li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
				</ul><!--end .dropdown-menu -->
			</li><!--end .dropdown -->
		</ul><!--end .header-nav-profile -->
	</div><!--end #header-navbar-collapse -->
</div>
			</header>
	<!-- END HEADER-->

	<!-- BEGIN BASE-->
	<div id="base">
		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
			 		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->

		<!-- BEGIN CONTENT-->
		<div id="content">

	<section>
		<div class="section-body">
			<div class="row">

				<!-- BEGIN ALERT - PESAN MASUK -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-info no-margin">
								<h1 class="pull-right text-info"><i class="md md-notifications"></i></h1>
								<strong class="text-xl">54 sec.</strong><br/>
								<span class="opacity-50">Pesanan Baru</span>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - PESAN MASUK -->

				<!-- BEGIN ALERT - JUMLAH BARANG -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-warning no-margin">
								<h1 class="pull-right text-warning"><i class="md md-list"></i></h1>
								<strong class="text-xl">54 sec.</strong><br/>
								<span class="opacity-50">Jenis Barang</span>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - JUMLAH BARANG -->

				<!-- BEGIN ALERT - JUMLAH BARANG -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-success no-margin">
								<h1 class="pull-right text-success"><i class="md md-storage"></i></h1>
								<strong class="text-xl">54 sec.</strong><br/>
								<span class="opacity-50">Jumlah Barang</span>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - JUMLAH BARANG -->

			</div><!--end .row -->
			<div class="row">

			</div><!--end .row -->
			<div class="row">

			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>

		</div><!--end #content-->
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
		<a href="dashboard.html" class="active">
			<div class="gui-icon"><i class="md md-home"></i></div>
			<span class="title">Dashboard</span>
		</a>
	</li><!--end /menu-li -->
	<!-- END DASHBOARD -->

	<!-- BEGIN TABLES -->
	<li class="gui-folder">
		<a>
			<div class="gui-icon"><i class="fa fa-table"></i></div>
			<span class="title">Data</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="../tables/static.html" ><span class="title">User</span></a></li>

			<li><a href="<?= base_url(); ?>administrator/produk" ><span class="title">Produk</span></a></li>

			<li><a href="<?= base_url(); ?>administrator/jenis" ><span class="title">Jenis Barang</span></a></li>

		</ul><!--end /submenu -->
	</li><!--end /menu-li -->
	<!-- END TABLES -->

	<!-- BEGIN PAGES -->
	<li class="gui-folder">
		<a>
			<div class="gui-icon"><i class="md md-computer"></i></div>
			<span class="title">Transaksi</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="../pages/invoice.html" ><span class="title">Belum Bayar</span></a></li>

			<li><a href="../pages/calendar.html" ><span class="title">Proses Pembuatan</span></a></li>

			<li><a href="../pages/pricing.html" ><span class="title">Proses Pengiriman</span></a></li>
		</ul><!--end /submenu -->
	</li><!--end /menu-li -->
	<!-- END FORMS -->

	<!-- BEGIN CHARTS -->
	<li>
		<a href="../charts/charts.html" >
			<div class="gui-icon"><i class="md md-assessment"></i></div>
			<span class="title">Charts</span>
		</a>
	</li><!--end /menu-li -->
	<!-- END CHARTS -->

</ul><!--end .main-menu -->
				<!-- END MAIN MENU -->