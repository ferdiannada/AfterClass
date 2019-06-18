  <!--=====  End of header container  ======-->

  <!--=============================================
	=            breadcrumb area         =
	=============================================-->

    <div class="breadcrumb-area pt-15 pb-15 mb-0">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<!--=======  breadcrumb container  =======-->

  				<div class="breadcrumb-container">
  					<nav>
  						<ul>
  							<li class="parent-page"><a href="index.html">Home</a></li>
  							<li>Contact Us</li>
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
	=            Contact page content         =
	=============================================-->

  <div class="page-content mb-5">

  	<div class="container">
  		<div class="row">
  			<div class="col-lg-5 offset-lg-1 col-md-12 mb-sm-45 order-1 order-lg-2 mb-md-45">
  				<!--=======  contact page side content  =======-->

  				<div class="contact-page-side-content">
  					<h3 class="contact-page-title">Contact Us</h3>
  					<p class="contact-page-message mb-30">SIRANTANG merupakan toko online yang menjual aneka kerajinan yang terbuat dari bambu seperti kursi, tirai, gazebo, lampion, lampu, souvenir pernikahan dan lain-lain yang terbuat dari bambu. Pembeli juga dapat merequest barang sesuai dengan permintaan pembeli.</p>
  					<!--=======  single contact block  =======-->

  					<div class="single-contact-block">
  						<h4><i class="fa fa-fax"></i> Address</h4>
  						<p>Jl. Sukowono RT.09/RW02 Sukosari Taman Bondowoso</p>
  					</div>

  					<!--=======  End of single contact block  =======-->

  					<!--=======  single contact block  =======-->

  					<div class="single-contact-block">
  						<h4><i class="fa fa-phone"></i> Phone</h4>
  						<p>085204978519</p>
  					</div>

  					<!--=======  End of single contact block  =======-->

  					<!--=======  single contact block  =======-->

  					<div class="single-contact-block">
  						<h4><i class="fa fa-envelope-o"></i> Email</h4>
  						<p>yourmail@domain.com</p>
  						<p>support@hastech.company</p>
  					</div>

  					<!--=======  End of single contact block  =======-->
  				</div>

  				<!--=======  End of contact page side content  =======-->

  			</div>
  			<div class="col-lg-6 col-md-12 order-2 order-lg-1">
  				<!--=======  contact form content  =======-->

  				<div class="contact-form-content">
  					<h3 class="contact-page-title">Tell Us Your Message</h3>

  					<div class="contact-form">
  						<form id="contact-form" action="<?= base_url('Contact/tambah_pesanan'); ?>" method="post">
  							<div class="form-group">
  								<label>Your Name <span class="required">*</span></label>
  								<input type="text" name="name" id="name" required>
  							</div>
  							<div class="form-group">
  								<label>Your Email <span class="required">*</span></label>
  								<input type="email" name="email" id="email" required>
  							</div>
  							<div class="form-group">
  								<label>Subject</label>
  								<input type="text" name="subject" id="Subject">
  							</div>
  							<div class="form-group">
  								<label>Your Message</label>
  								<textarea name="pesan" id="pesan"></textarea>
  							</div>
  							<div class="form-group mb-0">
  								<button type="submit" value="submit" id="submit" class="fl-btn" name="submit">send</button>
  							</div>
  						</form>
  					</div>
  					<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
  				</div>

  				<!--=======  End of contact form content =======-->
  			</div>
  		</div>
  	</div>
  </div>

  <!--=====  End of Contact page content  ======-->
