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

    								<form method="post" action="<?= base_url();?>cart/add" method="post" accept-charset="utf-8">
    									<!--=======  grid view product  =======-->

    									<!--=======  single product  =======-->

    									<input type="" name="id" value="<?= $b->id ?>" disabled hidden>
    									<div class="fl-product shop-grid-view-product">
    										<div class="image">
    											<a href="<?= base_url(); ?>product/product_view/<?= $b->id ?>">
    												<img src="<?= base_url('upload/product/'.$b->gambar); ?>" class="img-fluid" alt="">
    												<img src="<?= base_url('upload/product/'.$b->gambar); ?>" class="img-fluid" alt="">
    											</a>
    											<!-- wishlist icon -->
    											<span class="wishlist-icon">
    												<a href="#"><i class="icon ion-md-heart-empty"></i></a>
    											</span>
    										</div>
    										<div class="content">
    											<h2 class="product-title"> <a href="<?= base_url(); ?>product/product_view/<?= $b->id ?>"><?= $b->nama_barang  ?></a></h2>
    											<p class="product-price">
    												<span class="main-price">Rp. <?= number_format($b->harga) ?></span>
    											</p>

    											<div class="hover-icons">
    												<ul>
    													<li>
    														<input type="hidden" name="id" value="<?php echo $b->id; ?>" />
						    								<input type="hidden" name="nama_barang" value="<?php echo $b->nama_barang; ?>" />
						    								<input type="hidden" name="harga" value="<?php echo $b->harga; ?>" />
						    								<input type="hidden" name="gambar" value="<?php echo $b->gambar; ?>" />
						    								<input type="hidden" name="qty" value="1" />
    														<button type="submit" class="btn btn-lg" title="Add to Cart" style="border-radius: 100%;"><i class="icon ion-md-cart"></i></button></li>
    													<li><button type="button" class="btn btn-lg" style="border-radius: 100%;" data-toggle="modal" data-target="#quick-view-modal-container<?=$b->id;?>" title="Quick View"><i class="icon ion-md-open"></i></button></li>
    												</ul>
    											</div>
    										</div>
    									</div>


    									<!--=======  End of single product  =======-->

    									<!--=======  End of grid view product  =======-->
    								</form>

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

	<!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<?php foreach ($barang as $b) { ?>
		<div class="modal fade quick-view-modal-container" id="quick-view-modal-container<?=$b->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
								<!-- single product tabstyle one image gallery -->
								<div class="product-image-slider fl-product-image-slider fl3-product-image-slider quickview-product-image-slider">
									<!--product large image start -->
									<div class="tab-content product-large-image-list fl-product-large-image-list fl3-product-large-image-list quickview-product-large-image-list" id="myTabContent2">
										<div class="tab-pane fade show active" id="single-slide-1-q" role="tabpanel" aria-labelledby="single-slide-tab-1-q">
											<!--Single Product Image Start-->
											<div class="single-product-img img-full">
												<img src="<?= base_url('upload/product/'.$b->gambar); ?>" class="img-fluid" alt="">
											</div>
											<!--Single Product Image End-->
										</div>
									</div>
									<!--product large image End-->
									
									<!--product small image slider Start-->
									<div class="product-small-image-list fl-product-small-image-list fl3-product-small-image-list quickview-product-small-image-list"> 
										<div class="nav small-image-slider fl3-small-image-slider" role="tablist">
											<div class="single-small-image img-full">
												<a data-toggle="tab" id="single-slide-tab-1-q" href="#single-slide-1-q"><img src="<?= base_url('upload/product/'.$b->gambar); ?>"
													class="img-fluid" alt=""></a>
												</div>
											</div>
										</div>
										<!--product small image slider End-->
									</div>
									<!-- end of single product tabstyle one image gallery -->
								</div>
								<div class="col-lg-7 col-md-6 col-xs-12">
									<!-- product quick view description -->
									<div class="product-feature-details">
										<h2 class="product-title mb-15"><?= $b->nama_barang ?></h2>

										<h2 class="product-price mb-15">  
											<span class="discounted-price">Rp. <?= number_format($b->harga) ?></span>
										</h2>

										<p class="product-description mb-20"><?= $b->deskripsi ?></p>
										

										<div class="cart-buttons mb-20">
											<div class="pro-qty mr-10">
												<input type="text" value="1">
											</div>
											<div class="add-to-cart-btn">
												<a href="#" class="fl-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
											</div>
										</div>

										
										<div class="social-share-buttons">
											<h3>share this product</h3>
											<ul>
												<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- end of product quick view description -->
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		<?php } ?>
	<!--=====  End of Quick view modal  ======-->