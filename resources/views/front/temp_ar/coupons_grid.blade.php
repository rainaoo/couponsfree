@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <!-- Coupons Area -->
                <section class="section coupons-area coupons-area-grid">
                    <!-- Page Control -->
                    <header class="page-control panel ptb-15 prl-20 pos-r mb-30">
                        <!-- List Control View -->
                        <ul class="list-control-view list-inline">
                            <li><a href="{{route('coupons_list-ar')}}"><i class="fa fa-bars"></i></a></li>
                            <li><a href="{{route('coupons_grid-ar')}}"><i class="fa fa-th"></i></a></li>
                        </ul>
                        <!-- End List Control View -->
                        <div class="left-10 pos-tb-center">
                            <select class="form-control input-sm">
                                <option>ترتيب حسب</option>
                                <option>أحدث العناصر</option>
                                <option>أفضل البائعين</option>
                                <option>أفضل تصنيف</option>
                                <option>السعر من الارخص للاعلى</option>
                                <option>السعر: من الأعلى إلى الأقل</option>
                            </select>
                        </div>
                    </header>
                    <!-- End Page Control -->
                    <div class="row row-masnory row-tb-20">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="ribbon-wrapper is-hidden-xs-down">
                                    <div class="ribbon">مميز</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_01.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>125</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 01/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_01">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_02.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-map-marker ml-5"></i>كاليفورنايا</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>13</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">15% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عدسة تصوير لجميع الجوالات - مايكرو</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 05/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_02">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_03.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>425</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">20% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عروض الاجهزة المنزلية الصغيرة في ايدي هوم</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 15/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_03">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_04.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>230</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">30% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">اقوى عروض هوم برونز للاثاث المنزلي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 02/03/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_04">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="ribbon-wrapper is-hidden-xs-down">
                                    <div class="ribbon">مميز</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_05.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>86</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">سامسونج جير اس3 فرونتير ساعة ذكية</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 20/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_05">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_06.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>24</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">25% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">سماعة بلوتوث فويس من انجو , ذهبي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 14/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_06">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="ribbon-wrapper is-hidden-xs-down">
                                    <div class="ribbon">مميز</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_07.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>125</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 01/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_07">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_07">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_08.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-map-marker ml-5"></i>كاليفورنايا</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>13</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">15% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عدسة تصوير لجميع الجوالات - مايكرو</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 05/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_08">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_08">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_09.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>425</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">20% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عروض الاجهزة المنزلية الصغيرة في ايدي هوم</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 15/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_09">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_09">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_10.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>230</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">30% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">اقوى عروض هوم برونز للاثاث المنزلي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 02/03/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_10">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_10">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="ribbon-wrapper is-hidden-xs-down">
                                    <div class="ribbon">مميز</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_11.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>86</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">سامسونج جير اس3 فرونتير ساعة ذكية</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 20/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_11">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_11">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_12.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>24</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">25% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">سماعة بلوتوث فويس من انجو , ذهبي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 14/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_12">عرض الكوبون</button>
                                                <div class="coupon-hide">X455-17GT-OL58</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_12">
                                <div class="modal-dialog">
                                    <div class="modal-content panel">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
                                                    <h3 class="mb-20">Save 30% off New Domains Names</h3>
                                                    <p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <a href="#" class="btn btn-link">Visit Our Store</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                    <a href="#" target="_blank" class="coupon-code">X455-17GT-OL58</a>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="like-report mb-10">
                                                        <span>Share this coupon :</span>
                                                        <ul class="list-inline social-icons social-icons--colored mt-10">
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li class="social-icons__item">
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                            <h4 class="mb-15">Subscribe to Mail</h4>
                                            <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Pagination -->
                    <div class="page-pagination text-center mt-30 p-10 panel">
                        <nav>
                            <!-- Page Pagination -->
                            <ul class="page-pagination">
                                <li><a class="page-numbers previous" href="#">السابق</a></li>
                                <li><a href="#" class="page-numbers">1</a></li>
                                <li><span class="page-numbers current">2</span></li>
                                <li><a href="#" class="page-numbers">3</a></li>
                                <li><a href="#" class="page-numbers">4</a></li>
                                <li><span class="page-numbers dots">...</span></li>
                                <li><a href="#" class="page-numbers">20</a></li>
                                <li><a href="#" class="page-numbers next">التالي</a>
                                </li>
                            </ul>
                            <!-- End Page Pagination -->
                        </nav>
                    </div>
                    <!-- End Page Pagination -->
                </section>
                <!-- End Coupons Area -->
            </div>
        </div>
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 