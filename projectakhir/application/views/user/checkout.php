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
                                <li>Checkout</li>
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
	=            Checkout page content         =
	=============================================-->

    <div class="page-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="<?= base_url() ?>order/proccessorder" method="post">
                        <div class="row row-40">

                            <div class="col-lg-5 mb-20">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">

                                    <div class="row">

                                        <div class="col-md-12 col-12 mb-20">
                                            <h4 class="checkout-title">Address</h4>

                                            <div class="checkout-cart-total">

                                                <h4>Delivery <span>Address</span></h4>

                                                <ul>
                                                    <li>Adress <span><?= $customers['address'] ?></span></li>
                                                    <li>City <span><?= $customers['city'] ?></span></li>
                                                    <li>Province<span><?= $customers['province'] ?></span></li>
                                                </ul>

                                                <p>Country<span><?= $customers['country'] ?></span></p>
                                                <p>Zipcode <span><?= $customers['zipcode'] ?></span></p>

                                                <h4>Phone Number <span><?= $customers['phonenumber'] ?></span></h4>

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12 mb-20">
                                            <h4 class="checkout-title">Payment Method</h4>

                                            <div class="checkout-payment-method">
                                            <h5>A/N : Rizmawan Widi Wiranata</h5>
                                                <select name="payment" id="payment">
                                                    <option value="351-02020202">BRI - <b>351-02020202</b></option>
                                                    <option value="777-991828192912">Mandiri - <b>777-991828192912</b></option>
                                                    <option value="800-9819126215">BNI - <b>800-9819126215</b></option>
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-7">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total Price</span> <span class="mr-4">Price</span> </h4>
                                            <ul>
                                                <?php
                                                if ($keranjang = $this->cart->contents()) {
                                                    // Create form and send all values in "shopping/update_cart" function.
                                                    $grand_total = 0;
                                                    $i = 1;
                                                }
                                                foreach ($keranjang as $ker) {
                                                    $grand_total = $grand_total + $ker['subtotal'];

                                                    ?>

                                                    <li><?= $ker['name'] ?> X <?= $ker['qty'] ?> <span class="ml-3"><?= "Rp" . number_format($ker['qty'] * $ker['price']) ?></span> <span class="mr-4"><?= "Rp" . number_format($ker['price']) ?></span> </li>
                                                <?php } ?>
                                            </ul>

                                            <p>Sub Total <span><?= "Rp " . number_format($grand_total) ?></span></p>
                                            <p>Shipping Fee <span>$00.00</span></p>

                                            <h4>Grand Total <span>$104.00</span></h4>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <input class="mb-0" type="text" name="date_ordered" value="<?= date('Y-m-d H:i:s'); ?>" hidden>
                        <button type="submit" name="order" class="place-order">Place order</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Checkout page content  ======-->