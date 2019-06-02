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
  							<li class="parent-page"><a href="index.html">Home</a></li>
  							<li>Shop</li>
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
    =            shop page content         =
    =============================================-->

  <div class="shop-page-content mb-50">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-3 order-2 order-lg-1">
  				<!--=======  page sidebar   =======-->

  				<div class="page-sidebar">
  					<!--=======  single sidebar block  =======-->

  					<div class="single-sidebar">
  						<h3 class="sidebar-title">CATEGORIES</h3>

  						<div class="category">
  							<ul>
  								<?php foreach ($jenis as $j): ?>
  								<li><a href="<?= base_url('product/jenis/'.$j['jenis']); ?>"><?= $j['jenis']; ?></a></li>
  								<?php endforeach; ?>
  							</ul>
  						</div>
  					</div>

  					<!--=======  End of single sidebar block  =======-->


  				</div>

  				<!--=======  End of page sidebar   =======-->
  			</div>
  			<div class="col-lg-9 order-1 order-lg-2">

  				<!--=======  Shop header  =======-->

  				<div class="shop-header mb-30">
  					<div class="row">
  						<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
  							<!--=======  view mode  =======-->

  							<div class="view-mode-icons mb-xs-10">
  								<a class="active" href="#" data-target="grid"><i class="icon ion-md-apps"></i></a>
  							</div>

  							<!--=======  End of view mode  =======-->

  						</div>
  						<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
  							<!--=======  Sort by dropdown  =======-->

  							<div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
  								<p class="mr-10 mb-0">Sort By: </p>
  								<select name="sort-by" id="sort-by" class="nice-select">
  									<option value="0">Sort By Popularity</option>
  									<option value="0">Sort By Average Rating</option>
  									<option value="0">Sort By Newness</option>
  									<option value="0">Sort By Price: Low to High</option>
  									<option value="0">Sort By Price: High to Low</option>
  								</select>
  							</div>

  							<!--=======  End of Sort by dropdown  =======-->

  							<p class="result-show-message">Showing 1–12 of 41 results</p>
  						</div>
  					</div>
  				</div>

  				<!--=======  End of Shop header  =======-->

  				<!--=======  shop product display area  =======-->
  				<?php foreach (array_chunk($barang, 4) as $produk) { ?>
  				<div class="shop-product-wrap grid row mb-30 no-gutters">

  					<?php foreach ($produk as $b) { ?>
  					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  						<!--=======  grid view product  =======-->

  						<!--=======  single product  =======-->

  						<input type="" name="id" value="<?= $b->id ?>" disabled hidden>
  						<div class="fl-product shop-grid-view-product">
  							<div class="image">
  								<a href="<?= base_url(); ?>product_view/<?= $b->id ?>">
  									<img src="<?= base_url('upload/product/'.$b->gambar); ?>" class="img-fluid" alt="">
  									<img src="<?= base_url('upload/product/'.$b->gambar); ?>" class="img-fluid" alt="">
  								</a>
  								<!-- wishlist icon -->
  								<span class="wishlist-icon">
  									<a href="#"><i class="icon ion-md-heart-empty"></i></a>
  								</span>
  							</div>
  							<div class="content">
  								<h2 class="product-title"> <a href="single-product.html"><?= $b->nama_barang  ?></a></h2>
  								<p class="product-price">
  									<span class="main-price">Rp. <?= number_format($b->harga) ?></span>
  								</p>

  								<div class="hover-icons">
  									<ul>
  										<li><a href="#" data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
  										<li><a href="#" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
  									</ul>
  								</div>
  							</div>
  						</div>


  						<!--=======  End of single product  =======-->

  						<!--=======  End of grid view product  =======-->

  					</div>
  					<?php } ?>

  				</div>
  				<?php } ?>


  				<!--=======  End of shop product display area  =======-->

  				<!--=======  pagination area  =======-->

  				<div class="pagination-area mb-md-50 mb-sm-50">
  					<ul>
  						<li><a class="active" href="#">1</a></li>
  						<li><a href="#">2</a></li>
  						<li><a href="#">3</a></li>
  						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
  					</ul>
  				</div>

  				<!--=======  End of pagination area  =======-->
  			</div>
  		</div>
  	</div>
  </div>

  <!--=====  End of shop page content  ======-->
