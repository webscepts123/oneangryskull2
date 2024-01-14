<?php
/**
 * Template Name: Checkout Page
 * Description: A Page Template with a darker design.
 */

get_header();
?>

<!-- ========================  Main header ======================== -->

<section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Checkout</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="checkout-1.html">Cart items</a></li>
                        <li><a class="active" href="checkout-2.html">Delivery</a></li>
                        <li><a href="checkout-3.html">Payment</a></li>
                        <li><a href="checkout-4.html">Receipt</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ========================  Step wrapper ======================== -->

        <div class="step-wrapper">
            <div class="container">

                <div class="stepper">
                    <ul class="row">
                        <li class="col-md-3 active">
                            <span data-text="Cart items"></span>
                        </li>
                        <li class="col-md-3 active">
                            <span data-text="Delivery"></span>
                        </li>
                        <li class="col-md-3 ">
                            <span data-text="Payment"></span>
                        </li>
                        <li class="col-md-3">
                            <span data-text="Receipt"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ========================  Checkout ======================== -->

        <section class="checkout">
            <div class="container">

                <header class="hidden">
                    <h3 class="h3 title">Checkout - Step 2</h3>
                </header>

                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="checkout-1.html" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="checkout-3.html" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                        </div>
                    </div>
                </div>

                <!-- ========================  Delivery ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">
                        <div class="row">

                            <!-- === left content === -->

                            <div class="col-md-6">

                                <!-- === login-wrapper === -->

                                <div class="login-wrapper">

                                    <div class="white-block">

                                        <!--signin-->

                                        <div class="login-block login-block-signin">

                                            <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                            <hr />

                                            [woocommerce_login_form]
                                        </div> <!--/signin-->
                                        <!--signup-->

                                        <div class="login-block login-block-signup">

                                            <div class="h4">Register now <a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a></div>

                                            <hr />

                                            [woocommerce_register_form]
                                        </div> <!--/signup-->
                                    </div>
                                </div> <!--/login-wrapper-->
                            </div> <!--/col-md-6-->
                            <!-- === right content === -->

                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Choose delivery</div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId1" name="deliveryOption">
                                        <label for="deliveryId1">Delivery 1-3 Days - <strong>$50,00</strong></label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId2" name="deliveryOption">
                                        <label for="deliveryId2">Fast delivery - <strong>$199,00</strong></label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId3" name="deliveryOption">
                                        <label for="deliveryId3">Pick up in the store - <strong>Free</strong></label>
                                    </span>

                                    <hr />

                                    <div class="clearfix">
                                        <p>A frequently overlooked, powerful fulfillment option is offering local pick-up. If you have a physical location and can allow your customers to forgo paying shipping costs altogether, you should!</p>                            <p><strong>Benefits:</strong></p>
                                        <ul>
                                            <li>Avoid both shipping and packaging costs</li>
                                            <li>Develop a face-to-face relationship with your customers</li>
                                            <li>Potential for additional purchases while customers are at your store</li>
                                        </ul>
                                        <p><strong>Challenges:</strong></p>
                                        <ul>
                                            <li>Limited business hours can sometimes make it difficult to coordinate pickup</li>
                                            <li>Shoppers who cross state lines or ZIP codes may not know the sales tax rates in your area</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper">
                    <!--cart header -->

                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Product</span>
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                        <div>
                            <span>Quantity</span>
                        </div>
                        <div class="text-right">
                            <span>Price</span>
                        </div>
                    </div>

                    <!--cart items-->

                    <div class="clearfix">
                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-7.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h4"><a href="product.html">Coffee machine</a></div>
                                <div>Electronics</div>
                            </div>
                            <div class="quantity">
                                <strong>2</strong>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 150,00</span>
                                <span class="discount">$ 190,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-8.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h4"><a href="product.html">Iron set</a></div>
                                <div>Home accessories</div>
                            </div>
                            <div class="quantity">
                                <strong>2</strong>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 390,00</span>
                                <span class="discount">$ 490,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-10.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h4"><a href="product.html">Wireless Headphones</a></div>
                                <div>Green corner</div>
                            </div>
                            <div class="quantity">
                                <strong>1</strong>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 180,00</span>
                                <span class="discount">$ 200,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-12.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h4"><a href="product.html">E-shaver 500</a></div>
                                <div>Electronics</div>
                            </div>
                            <div class="quantity">
                                <strong>1</strong>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 199,00</span>
                                <span class="discount">$ 149,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Shipping</strong>
                            </div>
                            <div>
                                <span>$ 30,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>VAT</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Promo code included!</strong>
                            </div>
                            <div>
                                <div class="h2 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="checkout-1.html" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="checkout-3.html" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                        </div>
                    </div>
                </div>


            </div> <!--/container-->

        </section>

       
<?php get_footer(); ?>