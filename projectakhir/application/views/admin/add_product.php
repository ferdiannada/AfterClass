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
                <h2 class="text-primary">Produk Baru</h2>
            </div>
            <div class="section-body">

                <!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" role="form" action="<?= base_url('administrator/produk/tambah'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="id" class="col-sm-2 control-label">ID Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" name="id" placeholder="ID Produk" value="<?= $kode; ?>" readonly>
                                    <?= form_error('id','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="nama_barang" class="col-sm-2 control-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Produk" value="<?= set_value('nama_barang') ?>">
                                    <?= form_error('nama_barang','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="id_jenis" class="col-sm-2 control-label">Jenis Produk</label>
                                <div class="col-sm-10">
                                    <select id="jenis" name="jenis" class="form-control">
                                        <option value="">-- PILIH KATEGORI --</option>
                                        <?php foreach ($jenis as $j): ?>
                                          <option value="<?= $j['jenis']; ?>"><?= $j['jenis']; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                    <?= form_error('id_jenis','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="file-field">
                                        <div class="btn ink-reaction btn-default-dark btn-sm float-left">
                                            <input type="file" name="gambar" id="gambar">
                                            <?= form_error('gambar','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="textarea13" class="col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder=""><?= set_value('deskripsi') ?></textarea>
                                    <?= form_error('deskripsi','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="harga" class="col-sm-2 control-label">Harga Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?= set_value('harga') ?>">
                                    <?= form_error('harga','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                                </div>
                            </div>

                            <div class="form-layout-footer" style="float: right;">
                                <button type="submit" class="btn btn-primary bd-0">Tambah Data</button>
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
                                    <a href="dashboard.html">
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
