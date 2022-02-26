<section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
    <div class="container">
        <div class="row row-tb-20">
            <div class="col-sm-12 col-md-6">
                <div class="row row-tb-20">
                    <div class="footer-col col-sm-6">
                        <div class="footer-about">
                            <img class="mb-40" src="{{asset('public/front/assets/images/logoco_dark.png')}}" width="250" alt="">
                            <p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolores quidem mollitia id ipsa nisi necessitatibus iure repudiandae aperiam, odit ipsam dolor fugiat corporis nesciunt illo nemo minus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="row row-tb-20">
                    <div class="footer-col col-sm-6">
                        <div class="footer-links">
                            <h2 class="color-lighter">Quick Links</h2>
                            <ul>
                                <li><a href="{{route('deals_grid')}}">Latest Deals</a>
                                </li>
                                <li><a href="{{route('coupons_grid')}}">Newest Coupons</a>
                                </li>
                                <li><a href="{{route('blogs')}}">Blogs</a>
                                </li>
                                <li><a href="{{route('contact')}}">Contact Us</a>
                                </li>
                                <li><a href="{{route('faq')}}">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <div class="footer-top-instagram instagram-widget">
                    <h2>Instagram Widget</h2>
                    <div class="row row-tb-5 row-rl-5">


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_01.jpg')}}" alt="">
                        </div>


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_02.jpg')}}" alt="">
                        </div>


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_03.jpg')}}" alt="">
                        </div>


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_04.jpg')}}" alt="">
                        </div>


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_05.jpg')}}" alt="">
                        </div>


                        <div class="instagram-widget__item col-xs-4">
                            <img src="{{asset('public/front/assets/images/instagram/instagram_06.jpg')}}" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
            
        
</section>
<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
<footer id="mainFooter" class="main-footer">
    <div class="container">
        <div class="row">
            <p>Copyright &copy; <?php date('y');?> . All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

<!-- icons for mobile style ---------------------->
    <div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center hidden-md-up text-center" style="">
        <div class="stickymenu-item"><a href="{{route('home')}}"><i class="fa fa-home"></i><span>Home</span></a></div>
        <div class="stickymenu-item"><a href="#" class="js-btn-search"><i class="fa fa-search"></i><span>Search</span></a></div>
        <div class="stickymenu-item"><div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"><div class="blockcart cart-preview active" data-refresh-url="//demo.bestprestashoptheme.com/savemart/ar/module/ps_shoppingcart/ajax">
                                <div class="header-cart">
                                    <div class="cart-left">
                                        <div class="shopping-cart"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="cart-products-count">0</div>
                                    </div>
                                    <div class="cart-right d-flex flex-column align-self-end ml-13">
                                        <span class="title-cart">cart</span>
                                        <span class="cart-item"> items</span>
                                    </div>
                                </div>
                                <div class="cart_block ">
                                    <div class="cart-block-content">
                                        <div class="no-items">
                                            No products in the cart
                                        </div>
                                    </div>
                                </div>
                            </div></div></div>
        <div class="stickymenu-item"><a href="{{route('wishlist')}}"><i class="fa fa-heart"></i><span>Wishlist</span></a></div>
        <div class="stickymenu-item"><a href="{{route('sing-in')}}" class="nov-toggle-page" data-target="#mobile-pageaccount"><i class="fa fa-user"></i><span>Account</span></a></div>
    </div>
<!--------- end icons for mobil style ---------------------->


</div>
<!-- ––––––––––––––––––––––––––––––––––––––––– -->
<!-- END WRAPPER                               -->
<!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
