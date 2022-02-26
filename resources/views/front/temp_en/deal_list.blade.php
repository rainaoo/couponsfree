<?php
use App\Models\Banner;
//use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;
				
    $Deals=Deal::with(['store'=>function($query){
            $query->select('id','name','image');
        }])->orderBy('id','Desc')->where('status',1)->limit(3)->get();
        //echo "<pre>";print_r($deals);die;
        //$indexdeal=Deal::indexdeal();
?>

@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-md-8">


                        <section class="section deals-area">

                            <!-- Page Control -->
                            <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                                <!-- List Control View -->
                                <ul class="list-control-view list-inline">
                                    <li><a href="{{route('deal_list')}}"><i class="fa fa-bars"></i></a>
                                    </li>
                                    <li><a href="{{route('deals_grid')}}"><i class="fa fa-th"></i></a>
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
                            <div class="row row-tb-20">
                                @foreach($Deals as $key => $deal)
                                    <div class="col-xs-12">
                                        <div class="deal-single panel">
                                            <div class="row row-rl-0 row-sm-cell">
                                                <div class="col-sm-5">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell"
                                                         data-bg-img="{{asset('public/backend/dist/img/deal_images/'.$deal['main_image'])}}">
                                                        <div class="label-discount left-20 top-15">{{$deal['discount']}} %</div>
                                                      
                                                        <div class="time-left bottom-15 right-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                            <span>
                                                                <i class="ico fa fa-clock-o mr-10"></i>
                                                                <span class="t-uppercase" >{{$deal['expires']}}</span>
                                                            </span>
                                                        </div>
                                                        <div class="deal-store-logo">
                                                            <img src="{{asset('public/backend/dist/img/store_images/'.$deal->store['image'])}}" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="bg-white pt-20 pl-20 pr-15">
                                                        <div class="pr-md-10">
                                                           
                                                            <h3 class="deal-title mb-10">
                                                                <a href="{{ url('deal_single',$deal->id)}}">{{$deal['title']}} </a>
                                                            </h3>
                                                          
                                                            <p class="text-muted mb-20">{{$deal['description']}} </p>
                                                        </div>
                                                        <div class="deal-price pos-r mb-15">
                                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$ {{$deal['price_old']}}</span>$ {{$deal['price_new']}}</h3>
                                                        </div>
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
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img={{asset('public/front/assets/images/deals/deal_02.jpg')}}>
                                                        <div class="label-discount top-10 right-10">-30%</div>
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
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img={{asset('public/front/assets/images/deals/deal_03.jpg')}}>
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
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img={{asset('public/front/assets/images/deals/deal_04.jpg')}}>
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
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img={{asset('public/front/assets/images/deals/deal_05.jpg')}}>
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
            </div>
        </div>


    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 