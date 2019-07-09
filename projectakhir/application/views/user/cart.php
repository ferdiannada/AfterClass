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
								<li>Cart</li>
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
    =            Cart page content         =
    =============================================-->


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="<?php echo base_url() ?>cart/edit_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
						<!--=======  cart table  =======-->

						<div class="cart-table table-responsive mb-40">
							<table class="table">
								<thead>
									<tr>
										<th class="pro-thumbnail">No</th>
										<th class="pro-thumbnail">Image</th>
										<th class="pro-title">Product</th>
										<th class="pro-price">Price</th>
										<th class="pro-quantity">Quantity</th>
										<th class="pro-subtotal">Total</th>
										<th class="pro-remove">Remove</th>
									</tr>
								</thead>
								<?php
								if ($cart = $this->cart->contents()) {
									?>
									<tbody>
										<?php
										// Create form and send all values in "shopping/update_cart" function.
										$grand_total = 0;
										$i = 1;

										foreach ($cart as $item) :
											$grand_total = $grand_total + $item['subtotal'];
											?>
											<input type="hidden" name="cart[<?= $item['id']; ?>][id]" value="<?= $item['id']; ?>" />
											<input type="hidden" name="cart[<?= $item['id']; ?>][rowid]" value="<?= $item['rowid']; ?>" />
											<input type="hidden" name="cart[<?= $item['id']; ?>][nama_barang]" value="<?= $item['name']; ?>" />
											<input type="hidden" name="cart[<?= $item['id']; ?>][harga]" value="<?= $item['price']; ?>" />
											<input type="hidden" name="cart[<?= $item['id']; ?>][gambar]" value="<?= $item['gambar']; ?>" />
											<input type="hidden" name="cart[<?= $item['id']; ?>][qty]" value="<?= $item['qty']; ?>" />
											<tr>
												<td><?php echo $i++; ?></td>
												<td class="pro-thumbnail"><img src="<?= base_url() . 'upload/product/' . $item['gambar']; ?>" class="img-fluid" alt="Product"></td>
												<td class="pro-title"><?= $item['name']; ?></td>
												<td class="pro-price"><?php echo number_format($item['price']); ?></td>
												<td class="pro-quantity">
													<div class="pro-qty"><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id']; ?>][qty]" value="<?php echo $item['qty']; ?>" /></div>
												</td>
												<td class="pro-subtotal"><?php echo number_format($item['subtotal']) ?></td>
												<td class="pro-remove"><a href="<?= base_url() ?>cart/delete/<?= $item['rowid']; ?>"><i class="fa fa-trash-o"></i></a></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>

							<div class="row">

								<div class="col-lg-6 col-12">
									<!--=======  Calculate Shipping  =======-->

									<div class="calculate-shipping" hidden>
										<h4>Calculate Shipping</h4>
										<form action="#">
											<div class="row">
												<div class="col-md-6 col-12 mb-25">
													<select class="nice-select">
														<option>Bangladesh</option>
														<option>China</option>
														<option>country</option>
														<option>India</option>
														<option>Japan</option>
													</select>
												</div>
												<div class="col-md-6 col-12 mb-25">
													<select class="nice-select">
														<option>Dhaka</option>
														<option>Barisal</option>
														<option>Khulna</option>
														<option>Comilla</option>
														<option>Chittagong</option>
													</select>
												</div>
												<div class="col-md-6 col-12 mb-25">
													<input type="text" placeholder="Postcode / Zip">
												</div>
												<div class="col-md-6 col-12 mb-25">
													<input type="submit" value="Estimate">
												</div>
											</div>
										</form>
									</div>

									<!--=======  End of Calculate Shipping  =======-->
									<!--=======  Calculate Shipping  =======-->

									<div class="calculate-shipping">
										<h4>Calculate Shipping</h4>
										<form action="#">
											<div class="row">
												<div class="col-md-6 col-12 mb-25">
													<select class="nice-select">
														<option>Bangladesh</option>
														<option>China</option>
														<option>country</option>
														<option>India</option>
														<option>Japan</option>
													</select>
												</div>
												<div class="col-md-6 col-12 mb-25">
													<select class="nice-select">
														<option>Dhaka</option>
														<option>Barisal</option>
														<option>Khulna</option>
														<option>Comilla</option>
														<option>Chittagong</option>
													</select>
												</div>
												<div class="col-md-6 col-12 mb-25">
													<input type="text" placeholder="Postcode / Zip">
												</div>
												<div class="col-md-6 col-12 mb-25">
													<input type="submit" value="Estimate">
												</div>
											</div>
										</form>
									</div>

									<!--=======  End of Calculate Shipping  =======-->

									<!--=======  Discount Coupon  =======-->

									<div class="discount-coupon">
										<h4>Discount Coupon Code</h4>
										<form action="#">
											<div class="row">
												<div class="col-md-6 col-12 mb-25">
													<input type="text" placeholder="Coupon Code">
												</div>
												<div class="col-md-6 col-12 mb-25">
													<input type="submit" value="Apply Code">
												</div>
											</div>
										</form>
									</div>

									<!--=======  End of Discount Coupon  =======-->

								</div>


								<div class="col-lg-6 col-12 d-flex">
									<!--=======  Cart summery  =======-->

									<div class="cart-summary">
										<div class="cart-summary-wrap">
											<h4>Cart Summary</h4>
											<p>Sub Total <span><?php echo "Rp".number_format($grand_total); ?></span></p>
											<p>Shipping Cost <span>0</span></p>
											<h2>Grand Total <span><?php echo "Rp".number_format($grand_total); ?></span></h2>
										</div>
										<div class="cart-summary-button">
										<?php
											if($this->session->userdata('email') == null)
											{
										?>
											<form method="post" action="<?= base_url() ?>account">
											<button type="submit" name="cekout" class="checkout-btn">Checkout</button>
											</form>
											<?php }else{ ?>
												<form method="post" action="<?= base_url() ?>order">
												<button type="submit" name="cekout" class="checkout-btn">Checkout</button>
												</form>
											<?php } ?>
											<button class="update-btn mr-4" type="submit">Update Cart</button>
										</div>
									</div>

									<!--=======  End of cart table  =======-->
								<?php
								} else {
									echo "<h3>Your cart is empty</h3>";
								}
								?>

								<!--=======  End of Cart summery  =======-->

							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of Cart page content  ======-->