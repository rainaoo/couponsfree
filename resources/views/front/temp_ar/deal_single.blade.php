@extends('front.temp_ar.layout.site')
@section('content')
<?php
use App\Models\Banner;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;
					 $getDeals=Deal::getDeals();
					 // echo "<pre>";print_r($getDeals);die;
						//$store=Deal::store();
						$deals=Deal::with(['store'=>function($query){
								$query->select('id','name','image');
							}])->get();
							//echo "<pre>";print_r($deals);die;
							//$indexdeal=Deal::indexdeal();
                            //$dealdata=Deal::find($id);
					?>
	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-7 col-md-8">
                        <div class="row row-tb-20">
                            <div class="col-xs-12">
                                <div class="deal-deatails panel">
                                    <div class="deal-slider">
                                        <div id="product_slider" class="flexslider">
                                            <ul class="slides">
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_01.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_02.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_03.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_04.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_05.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/product_06.jpg')}}">
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="product_slider_nav" class="flexslider flexslider-nav">
                                            <ul class="slides">
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_01.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_02.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_03.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_04.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_05.jpg')}}">
                                                </li>
                                                <li>
                                                    <img alt="" src="{{asset('public/front/assets/images/products/thumb_06.jpg')}}">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="deal-body p-20">
                                        <h3 class="mb-10"> 
                                            {{$deal['title_ar']}}
                                       
                                        <h2 class="price mb-15">$ {{$deal['price_new']}}</h2>
                                        <p class="mb-15"> {{$deal['description_ar']}}</p>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget about-seller-widget panel ptb-30 prl-20">
                                        <h3 class="widget-title h-title">حول البائع</h3>
                                        <div class="widget-body t-center">
                                            <figure class="mt-20 pb-10">
                                                <img src="{{asset('public/backend/dist/img/store_images/'.$deal->store['image'])}}" alt="">
                                            </figure>
                                            <div class="store-about mb-20">
                                                <h3 class="mb-10">{{$deal->store['name']}}</h3>
                                               
                                                <p class="mb-15">{{$deal->store['description_ar']}}</p>
                                                <button class="btn btn-info" href="#">متابعة</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                            
                               
                                <div class="col-xs-12">
                                    <!-- Contact Us Widget -->
                                    <div class="widget contact-us-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">هل لديك سؤال ؟</h3>
                                        <div class="widget-body ptb-30">
                                            <p class="mb-20 color-mid">إذا كنت تواجه أي أسئلة، لا تتردد في طرحها.</p>
                                            <a href="contact_us_01.html" class="btn btn-block"><i class="ml-10 font-15 fa fa-envelope-o"></i>تواصل مع فريق الدعم</a>
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
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 