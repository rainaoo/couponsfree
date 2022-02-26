<?php
use App\Models\Banner;
//use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;

	//use App\Models\Coupon;
    $getCoupons=Coupon::getCoupons();
    // echo "<pre>";print_r($getCategories);die;
        $coupons=Coupon::with(['store'=>function($query){
            $query->select('id','name','image','description');
        }])->orderBy('id','Desc')->where('status',1)->limit(5)->get();
?>


@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-md-8">
                        <section class="section coupons-area coupons-area-list">
                            <!-- Page Control -->
                            <header class="page-control panel ptb-15 prl-20 pos-r mb-30">
                                <!-- List Control View -->
                                <ul class="list-control-view list-inline">
                                    <li><a href="{{route('coupons_list')}}"><i class="fa fa-bars"></i></a>
                                    </li>
                                    <li><a href="{{route('coupons_grid')}}"><i class="fa fa-th"></i></a>
                                    </li>
                                </ul>
                                <!-- End List Control View -->
                                <div class="right-10 pos-tb-center">
                                    <select class="form-control input-sm">
                                        <option>SORT BY</option>
                                        <option>Newest items</option>
                                        <option>Best sellers</option>
                                        <option>Best rated</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </header>
                            <!-- End Page Control -->

                            <div class="row row-masnory row-tb-20">
                                @foreach($coupons as $key => $coupon)
                                    <div class="col-xs-12">
                                        <div class="coupon-single panel t-center t-sm-left">
                                           
                                            <div class="row row-sm-cell row-tb-0 row-rl-0">
                                                <div class="col-sm-5">
                                                    <figure class="p-15">
                                                        <img class="store-logo" src="{{asset('public/backend/dist/img/coupon_images/'.$coupon['main_image'])}}" alt="">
                                                    </figure>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-sm-7">
                                                    <div class="panel-body">
                                                      
                                                        <h5 class="deal-title mb-10">
                                                        <a href="#">{{$coupon['title']}}</a>
                                                    </h5>
                                                        <p class="mb-15 color-muted font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{$coupon['expires']}}</p>
                                                        <div class="showcode">
                                                            <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon">Show Code</button>
                                                            <div class="coupon-hide">{{$coupon['coupon_code']}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_0">
                                            <div class="modal-dialog">
                                                <div class="modal-content panel">
                                                    <div class="modal-body">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
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
                                                                <input type="text" class="form-control bg-white" placeholder="Your Email Address" required="required">
                                                                <span class="input-group-btn">
                                                            <button class="btn" type="submit">Sign Up</button>
                                                            </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Page Pagination -->
                            <div class="page-pagination text-center mt-30 p-10 panel">
                                <nav>
                                    <!-- Page Pagination -->
                                    <ul class="page-pagination">
                                        <li><a class="page-numbers previous" href="#">Previous</a>
                                        </li>
                                        <li><a href="#" class="page-numbers">1</a>
                                        </li>
                                        <li><span class="page-numbers current">2</span>
                                        </li>
                                        <li><a href="#" class="page-numbers">3</a>
                                        </li>
                                        <li><a href="#" class="page-numbers">4</a>
                                        </li>
                                        <li><span class="page-numbers dots">...</span>
                                        </li>
                                        <li><a href="#" class="page-numbers">20</a>
                                        </li>
                                        <li><a href="#" class="page-numbers next">Next</a>
                                        </li>
                                    </ul>
                                    <!-- End Page Pagination -->
                                </nav>
                            </div>
                            <!-- End Page Pagination -->
                        
                        </section>
                    </div>
                    <div class="page-sidebar col-md-4 col-xs-12">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Latest Deals Widegt -->
                                    <div class="widget latest-deals-widget panel prl-20">
                                        <div class="widget-body ptb-20">
                                            <div class="owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_02.jpg')}}">
                                                        <div class="label-discount top-10 right-10">-30%</div>
                                                        <ul class="deal-actions top-10 left-10">
                                                            <li class="like-deal">
                                                                <span>
                                                            <i class="fa fa-heart"></i>
                                                            </span>
                                                            </li>
                                                            <li class="share-btn">
                                                                <div class="share-tooltip fade">
                                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                </div>
                                                                <span><i class="fa fa-share-alt"></i></span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                            <i class="fa fa-camera"></i>
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="4">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            </span>
                                                                <span class="rating-reviews color-lighter">
                                                            (<span class="rating-count">160</span> Reviews)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                                                            <a href="deal_single.html" class="color-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                                                        </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_03.jpg')}}">
                                                        <div class="label-discount top-10 right-10">-15%</div>
                                                        <ul class="deal-actions top-10 left-10">
                                                            <li class="like-deal">
                                                                <span>
                                                            <i class="fa fa-heart"></i>
                                                            </span>
                                                            </li>
                                                            <li class="share-btn">
                                                                <div class="share-tooltip fade">
                                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                </div>
                                                                <span><i class="fa fa-share-alt"></i></span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                            <i class="fa fa-camera"></i>
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="2">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            </span>
                                                                <span class="rating-reviews color-lighter">
                                                            (<span class="rating-count">100</span> Reviews)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                                                            <a href="deal_single.html" class="color-lighter">Timberland Men's Thorton Waterproof Boots</a>
                                                        </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_04.jpg')}}">
                                                        <div class="label-discount top-10 right-10">-60%</div>
                                                        <ul class="deal-actions top-10 left-10">
                                                            <li class="like-deal">
                                                                <span>
                                                            <i class="fa fa-heart"></i>
                                                            </span>
                                                            </li>
                                                            <li class="share-btn">
                                                                <div class="share-tooltip fade">
                                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                </div>
                                                                <span><i class="fa fa-share-alt"></i></span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                            <i class="fa fa-camera"></i>
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            </span>
                                                                <span class="rating-reviews color-lighter">
                                                            (<span class="rating-count">32</span> Reviews)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                                                            <a href="deal_single.html" class="color-lighter">New and Refurbished Lenovo Laptops</a>
                                                        </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_05.jpg')}}">
                                                        <div class="label-discount top-10 right-10">-60%</div>
                                                        <ul class="deal-actions top-10 left-10">
                                                            <li class="like-deal">
                                                                <span>
                                                            <i class="fa fa-heart"></i>
                                                            </span>
                                                            </li>
                                                            <li class="share-btn">
                                                                <div class="share-tooltip fade">
                                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                                </div>
                                                                <span><i class="fa fa-share-alt"></i></span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                            <i class="fa fa-camera"></i>
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="deal-about p-10 pos-a bottom-0 left-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="5">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            </span>
                                                                <span class="rating-reviews color-lighter">
                                                            (<span class="rating-count">29</span> Reviews)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                                                            <a href="deal_single.html" class="color-lighter">Buying a TV Is Easy When You Know These Terms</a>
                                                        </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Latest Deals Widegt -->
                                </div>
                            
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Instagram</h3>
                                        <div class="widget-body ptb-30">
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
                                    <!-- End Instagram Widget -->
                                </div>
                                
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Got any questions?</h3>
                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>
                                            <a href="contact_us_01.html" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                        </div>
                                    </div>
                                    <!-- End Contact Us Widget -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                    
                </div>
                      
                <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon">
                    <div class="modal-dialog">
                        <div class="modal-content panel">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <a   name="m-id" id="m-id" style="color:blue!important"></a>
                                <div class="row row-v-10">
                                    <div class="col-md-10 col-md-offset-1">
                                        <img id="store" src="{{asset('public/backend/dist/img/store_images/'.$coupon->store['image'])}}" alt="">
                                        <h3 class="mb-20" id="m-title">{{$coupon['title']}}</h3>
                                        <p class="color-mid">{{$coupon['description']}}</p>
                                    </div>
                                    
                                    <div class="col-md-10 col-md-offset-1 copy-div " id="copy-div">
                                        <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                        <input type="text" id="copy-text" class="coupon-code" value="{{$coupon['coupon_code']}}">
                                        <button id="btncopy">
                                        <i id="fa" class="fa fa-clone"></i>
                                        </button>
                                        </div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <a href="#" class="btn btn-link">Visit Our Store</a>
                                        </div>
                                        <style>
                                            .copy-div button{
                                                padding:10px;
                                                background:#5784f5;
                                                color:#fff;
                                                font-size:18px;
                                                border:none;
                                                outline:none;
                                                border-radius:10px;
                                                cursor:pointer;
                                            }
                                            
                                            .copy-div button:active{
                                                background: #809ce2;
                                            }
                                            .copy-div button:before{
                                            content:"copied";
                                            position: absolute;
                                            top:-15px;
                                            right:-12px;
                                            background: #5c81dc;
                                            padding:8px 10px;
                                            border-radius:20px;
                                            font-size:15px;
                                            display:none;
                                            
                                            }
                                            .copy-div button:after{
                                            content:"";
                                            position: absolute;
                                            top:20px;
                                            right:25px;
                                            width:10px;
                                            height:10px;
                                            background: #5c81dc;
                                            transform: rotate(45deg);
                                            display:none;
                                            
                                            }
                                            .copy-div .active{
                                                <--background: rgb(194, 14, 14);-->
                                            }
                                            .copy-div .active~button:before,
                                            .copy-div .active~button:after{
                                                display:block;
                                            }

                                        </style>
                                        <script type="text/javascript">
                                                const copydiv=document.getElementById("copy-div");
                                                const copytext=document.getElementById("copy-text");
                                                const btncopy=document.getElementById("btncopy");
                                                const facopy=document.getElementById("fa");
                                                
                                                btncopy.onclick=function(){
                                                    copytext.select();
                                                    document.execCommand("Copy");
                                                    copytext.classList.add("active");
                                                    //window.getSelection().removeAllRanges();
                                                    setTimeout(function(){
                                                        copytext.classList.remove("active");
                                                    },2500);

                                                    }
                                                    $(document).ready(function(){

                                                        $(document).on("click",".show-code",function(){
                                                        var couponId = $(this).data('id');
                                                        $(".modal-body #m-id").val( couponId );

                                                        var couponTitle = $(this).data('title');
                                                        $(".modal-body #m-title").val( couponTitle );
                                                        // As pointed out in comments, 
                                                        // it is unnecessary to have to manually call the modal.
                                                        // $('#addBookDialog').modal('show');
                                                        });
                                                    });

                                                    
                                            
                                        </script>
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
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection