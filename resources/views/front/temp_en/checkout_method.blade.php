@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-8 col-md-9">

                        <!-- Checkout Area -->
                        <section class="section checkout-area panel prl-30 pt-20 pb-40">
                            <h2 class="h3 mb-20 h-title">Checkout method</h2>
                            <p class="mb-20">Dont have an account ? Pick one of the options below.</p>
                            <div class="custom-radio mb-10">
                                <input type="radio" name="checkout_method" id="sign_in">
                                <label class="color-mid" for="sign_in">Sign In</label>
                            </div>
                            <div class="custom-radio mb-10">
                                <input type="radio" name="checkout_method" id="sign_up">
                                <label class="color-mid" for="sign_up">Create a New Account</label>
                            </div>
                            <div class="custom-radio mb-20">
                                <input type="radio" name="checkout_method" id="as_guest">
                                <label class="color-mid" for="as_guest">Checkout as Guest</label>
                            </div>
                            <p class="mb-20">Register with us for a fast and easy checkout and easy access to your order history and status</p>
                            <a href="checkout_billing.html" class="btn btn-lg btn-rounded mr-10">Continue</a>
                            <a href="cart.html" class="btn btn-lg btn-warning btn-rounded">Cancel Order</a>
                        </section>
                        <!-- End Checkout Area -->

                    </div>
                    <div class="page-sidebar col-xs-12 col-sm-4 col-md-3">

                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget checkout-widget panel p-20">
                                        <div class="widget-body">
                                            <table class="table mb-15">
                                                <tbody>
                                                    <tr>
                                                        <td class="color-mid">Total products</td>
                                                        <td>$150.16</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-mid">Shipping</td>
                                                        <td>$60.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-mid">Total tax</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr class="font-15">
                                                        <td class="color-mid">Total</td>
                                                        <td class="color-green">$220.16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="{{route('cart')}}" class="btn btn-info btn-block btn-sm">Edit Cart</a>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 