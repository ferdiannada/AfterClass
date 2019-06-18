
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/furnilife/furnilife/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2019 06:30:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Furnilife - Furniture eCommerce Bootstrap4 Template</title>
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
								<a href="#" id="changeAccount"><span id="accountMenuName">My Account <i class="fa fa-angle-down"></i></span></a>
								<div class="language-currency-list hidden" id="accountList">
									<ul>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="login-register.html">Login</a></li>
									</ul>
								</div>
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
							<a href="index.html">
								<img src="assets/images/logo.png" class="img-fluid" alt="">
							</a>
						</div>
						
						<!--=======  End of logo  =======-->
					</div>
					<div class=" col-20 col-lg-10 col-md-20 col-sm-20 order-3 order-lg-2">
						<!--=======  cart icon  =======-->
						
						<div class="minicart-section">
							<a href="#" id="cart-icon">
								<span class="image"><i class="icon ion-md-cart"></i></span>
								<h5>$215.00 <i class="fa fa-angle-down"></i></h5>
								<p>3 items</p>
							</a>
	
							<!-- cart floating box -->
							<div class="cart-floating-box hidden" id="cart-floating-box">
								<div class="cart-items">
									<div class="cart-float-single-item d-flex">
										<span class="remove-item" id="remove-item"><a href="#"><i class="icon ion-md-close"></i></a></span>
										<div class="cart-float-single-item-image">
											<a href="single-product.html"><img src="assets/images/products/product01.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="cart-float-single-item-desc">
											<p class="product-title"> <a href="single-product.html">Duis pulvinar obortis eleifend </a></p>
											<p class="quantity"> Qty: 1</p>
											<p class="price">$20.50</p>
										</div>
									</div>
									<div class="cart-float-single-item d-flex">
										<span class="remove-item"><a href="#"><i class="icon ion-md-close"></i></a></span>
										<div class="cart-float-single-item-image">
											<a href="single-product.html"><img src="assets/images/products/product02.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="cart-float-single-item-desc">
											<p class="product-title"> <a href="single-product.html">Fusce ultricies dolor vitae</a></p>
											<p class="quantity"> Qty: 1</p>
											<p class="price">$20.50</p>
										</div>
									</div>
								</div>
								<div class="cart-calculation">
									<div class="calculation-details">
										<p class="total">Subtotal <span>$22</span></p>
									</div>
									<div class="floating-cart-btn text-center">
										<a class="fl-btn pull-left" href="cart.html">View Cart</a>
										<a class="fl-btn pull-right" href="checkout.html">Checkout</a>
									</div>
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