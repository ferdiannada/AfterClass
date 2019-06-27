  <!--=====  End of header container  ======-->

  <!--=============================================
    =            single product content         =
    =============================================-->

    <div class="single-product-content-area mb-50" style="margin-top: 10px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">

    				<form method="post" action="<?php echo base_url();?>cart/add" method="post" accept-charset="utf-8">
    					<!-- single product tabstyle one image gallery -->
    					<div class="product-image-slider fl-product-image-slider fl3-product-image-slider">
    						<!--product large image start -->
    						<div class="tab-content product-large-image-list fl-product-large-image-list fl3-product-large-image-list" id="myTabContent">
    							<div class="tab-pane fade show active" id="single-slide-1" role="tabpanel" aria-labelledby="single-slide-tab-1">
    								<!--Single Product Image Start-->
    								<div class="single-product-img img-full">
    									<img src="<?= base_url('upload/product/'.$detail['gambar']); ?>" class="img-fluid" alt="">
    									<a href="<?= base_url('upload/product/'.$detail['gambar']); ?>" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
    								</div>
    								<!--Single Product Image End-->
    							</div>
    						</div>
    						<!--product large image End-->

    						<!--product small image slider Start-->
    						<div class="product-small-image-list fl-product-small-image-list fl3-product-small-image-list">
    							<div class="nav small-image-slider fl3-small-image-slider" role="tablist">
    								<div class="single-small-image img-full">
    									<a data-toggle="tab" id="single-slide-tab-1" href="#single-slide-1"><img src="<?= base_url('upload/product/'.$detail['gambar']); ?>" class="img-fluid" alt=""></a>
    								</div>
    							</div>
    						</div>
    						<!--product small image slider End-->
    					</div>
    					<!-- end of single product tabstyle one image gallery -->
    				</div>
    				<div class="col-lg-7 col-md-6 col-xs-12">
    					<!-- product view description -->
    					<div class="product-feature-details">
    						<h2 class="product-title mb-15"><?= $detail['nama_barang'] ?></h2>

    						<h2 class="product-price mb-0">
    							<span class="discounted-price"> Rp. <?= number_format($detail['harga'],0,",",".") ?></span>
    						</h2>

    						<p class="product-description mb-20"><?= $detail['deskripsi'] ?></p>

    						<div class="cart-buttons mb-20">
    							<div class="add-to-cart-btn d-block">
    								<input type="hidden" name="id" value="<?php echo $detail['id']; ?>" />
    								<input type="hidden" name="nama_barang" value="<?php echo $detail['nama_barang']; ?>" />
    								<input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" />
    								<input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
    								<input type="hidden" name="qty" value="1" />
    								<button class="btn btn-lg fl-btn" type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
    							</div>
    						</div>

    						<div class="category-list-container mb-20">
    							<span>Categories: </span>
    							<ul>
    								<li><a href="<?= base_url('product/jenis/'.$detail['jenis']); ?>"><?= $detail['jenis']; ?></a></li>
    							</ul>
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
    			</form>
    		</div>
    	</div>
    </div>

    <!--=====  End of single product content  ======-->

    <!--=======  product description review   =======-->

    <div class="product-description-review-area mb-50">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<!--=======  product description review container  =======-->

    				<div class="tab-slider-wrapper product-description-review-container">
    					<nav>
    						<div class="nav nav-tabs" id="nav-tab" role="tablist">
    							<a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#product-description" role="tab" aria-selected="true">Description</a>
    						</div>
    					</nav>
    					<div class="tab-content" id="nav-tabContent">
    						<div class="tab-pane fade show active" id="product-description" role="tabpanel" aria-labelledby="description-tab">
    							<!--=======  product description  =======-->

    							<div class="product-description">
    								<p><?= $detail['deskripsi'] ?></p>
    							</div>

    							<!--=======  End of product description  =======-->
    						</div>

    						<!--=======  End of product description review container  =======-->
    					</div>
    				</div>
    			</div>
    		</div>

  <!--=======  End of product description review   =======-->