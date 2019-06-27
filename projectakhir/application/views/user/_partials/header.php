
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/furnilife/furnilife/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 06:30:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.ico">

	<!-- CSS
		============================================ -->
		<!-- Bootstrap CSS -->
		<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- FontAwesome CSS -->
		<link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">

		<!-- Ionicons CSS -->
		<link href="<?= base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet">

		<!-- Plugins CSS -->
		<link href="<?= base_url(); ?>assets/css/plugins.css" rel="stylesheet">

		<!-- Helper CSS -->
		<link href="<?= base_url(); ?>assets/css/helper.css" rel="stylesheet">

		<!-- Main CSS -->
		<link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">

		<!-- Modernizer JS -->
		<script src="<?= base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

	</head>

	<body>



	<!--=============================================
	=            header container         =
	=============================================-->

	<div class="header-container header-sticky">

		<!--=============================================
		=            header top         =
		=============================================-->

		<div class="header-top pt-15 pb-15">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="header-top-text text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
							<p><i class="icon ion-md-alarm"></i> Ordered before 17:30, shipped today - <span class="support-no">Support: (012) 800 456 789</span></p>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<!--=======  header top dropdowns  =======-->

						<div class="header-top-dropdown d-flex justify-content-center justify-content-lg-end">

							<!--=======  single dropdown  =======-->


							<div class="single-dropdown">
								<a href="#" id="changeAccount"><span id="accountMenuName">
									<?php 

									if ($this->session->userdata('email')) {
										echo "<span style='font-size: 13px; margin-right: 8px;'>$customers[name]</span>" ;
										echo "<i class='fa fa-angle-down'></i></span></a>";
										echo "<div class='language-currency-list hidden' id='accountList'>";
										echo "<ul>";
										echo "<li><a href='cart'>Cart</a></li>";
										echo "<li><a href='my-account.html'>My Account</a></li>";
										echo "<li><a href='account/logout'>Logout</a></li>";
										echo "</ul>";
										echo "</div>";
									}else{
										echo "<a href='account' >Login/Register</a>";
									}

									?>
								</div>
								<!--=======  End of single dropdown  =======-->
							</div>
							<!--=======  End of header top dropdowns  =======-->
						</div>
					</div>
				</div>
			</div>

			<!--=====  End of header top  ======-->

		<!--=============================================
		=            navigation menu top            =
		=============================================-->


		<div class="navigation-menu-top pt-35 pb-35 pt-md-15 pb-md-15 pt-sm-15 pb-sm-15">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-2 col-md-6 col-sm-6 order-1 order-lg-1">
						<!--=======  logo  =======-->

						<div class="logo">
							<a href="#">
								<img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid" alt="">
							</a>
						</div>

						<!--=======  End of logo  =======-->
					</div>
					<div class=" col-20 col-lg-10 col-md-20 col-sm-20 order-3 order-lg-2">
						<!--=======  cart icon  =======-->

						<div class="minicart-section">
							<a href="#" id="cart-icon">
								<span class="image"><i class="icon ion-md-cart"></i></span>
							</a>

							
							<!-- cart floating box -->
							<div class="cart-floating-box hidden" id="cart-floating-box">
								<div class="cart-items"><?php
    							if ($cart = $this->cart->contents())
    							{
    								?>	
									<?php
										// Create form and send all values in "shopping/update_cart" function.
    									$grand_total = 0;
    									$i = 1;

    									foreach ($cart as $item):
    										$grand_total = $grand_total + $item['subtotal'];
    										?>
										<div class="cart-float-single-item d-flex">
											<div class="cart-float-single-item-image">
												<a><img src="<?= base_url() . 'upload/product/'.$item['gambar']; ?>" class="img-fluid" alt="Product"></a>
											</div>
											<div class="cart-float-single-item-desc">
												<p class="product-title"><h5><?php echo $item['name']; ?></h5></p>
												<p class="quantity"><h5><?php echo $item['qty']; ?></h5></p>
												<p class="price">Rp. <?php echo number_format($item['price']); ?></p>
											</div>
											</div>
											<?php endforeach; ?>
								</div>
								<div class="cart-calculation">
									<div class="calculation-details">
										<p class="total">Subtotal <span>Rp. <?php echo number_format($grand_total); ?></span></p>
									</div>
									<div class="floating-cart-btn text-center">
										<a class="fl-btn pull-right" href="<?= base_url();?>cart">View Cart</a>
									</div><?php
    						}
    						else
    						{
    							echo "<h5>Your cart is empty</h3>";	
    						}	
    						?>
								</div>
							</div>
							<!-- end of cart floating box -->

						</div>

						<!--=======  End of cart icon  =======-->
					</div>
				</div>
			</div>
		</div>

		<!--=======  End of navigation menu top  =======-->
