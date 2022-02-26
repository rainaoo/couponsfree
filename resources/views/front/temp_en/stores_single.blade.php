<?php
use App\Models\Banner;
//use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;

    $deals=Deal::with(['store'=>function($query){
								$query->select('id','name','image');
							}])->orderBy('id','Desc')->where('store_id',$store->id)->where('status',1)->get();
							//echo "<pre>";print_r($deals);die;
							
    $coupons=Coupon::with(['store'=>function($query){
								$query->select('id','name','image');
							}])->orderBy('id','Desc')->where('store_id',$store->id)->where('status',1)->get();
?>
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container store-page ptb-60">
            <div class="container">
                <section class="store-header-area panel t-xs-center t-sm-left">
                    <div class="row row-rl-10">
                        <div class="col-sm-3 col-md-2 t-center">
                            <figure class="pt-20 pl-10">
                                <img src="{{asset('public/backend/dist/img/store_images/'.$store['image'])}}" alt="">
                            </figure>
                        </div>
                        <div class="col-sm-5 col-md-6">
                            <div class="store-about ptb-30">
                                <h3 class="mb-10">{{$store['name']}}</h3>
                                <p class="mb-15">{{$store['description']}}</p>
                               
                                <button class="btn btn-info">FOLLOW</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="store-splitter-left">
                                <div class="left-splitter-header prl-10 ptb-20 bg-lighter">
                                    <div class="row">
                                        <div class="col-xs-6 t-center">
                                            <h2>{{$deals->count();}}</h2>
                                            <p>Deals</p>
                                        </div>
                                        <div class="col-xs-6 t-center">
                                            <h2>{{$coupons->count();}}</h2>
                                            <p>Coupons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-splitter-body prl-20 ptb-20">
                                    <div class="row row-rl-10 row-tb-10">
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('public/front/assets/images/products/thumb_01.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('public/front/assets/images/products/thumb_02.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('public/front/assets/images/products/thumb_03.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('public/front/assets/images/products/thumb_04.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section deals-area ptb-30">
                    <header class="line pos-r ">
                        <h3 class="section-title font-18">Store Deals</h3>
                        <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>
                    <div class="row row-masnory row-tb-20">
                        <?php
					  
						
					?>
                    	@foreach($deals as $key => $deal)
						<div class="col-sm-6 col-lg-4">
							<div class="deal-single panel">
								<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"
								           data-bg-img="{{asset('public/backend/dist/img/deal_images/'.$deal['main_image'])}}">
									<div class="label-discount right-20 top-15">{{$deal['discount']}} %</div>
									
									<div class="time-left bottom-15 right-20 font-md-14">
										<span>
											<i class="ico fa fa-clock-o mr-10"></i>
											<span class="t-uppercase" >{{$deal['expires']}}</span>
										</span>
									</div>
									<div class="deal-store-logo">
										
										<img src="{{asset('public/backend/dist/img/store_images/'.$deal->store['image'])}}" width="60px" height="60px"alt="">
									</div>
								</figure>
								<div class="bg-white pt-20 pl-20 pr-15">
									<div class="pr-md-10">
										
										<h3 class="deal-title mb-10">
											<a href="{{ url('deal_single',$deal->id)}}">{{$deal['title']}} </a>
										</h3>
										<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
										</ul>
										<p class="text-muted mb-20">{{$deal['description']}} </p>
									</div>
									<div class="deal-price pos-r mb-15">
										<h3 class="price ptb-5 text-right"><span class="price-sale">$ {{$deal['price_old']}}</span>$ {{$deal['price_new']}}</h3>
									</div>
								</div>
							</div>
						</div>
                      @endforeach
                    </div>

                </section>

                <section class="section coupons-area coupons-area-grid">
                    <header class="line pos-r">
                        <h3 class="section-title font-18">Store Coupons</h3>
                        <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                    </header>
                    <div class="row row-masnory row-tb-20">
                        @foreach($coupons as $key => $coupon)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('public/backend/dist/img/coupon_images/'.$coupon['main_image'])}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                          
                                            <h4 class="color-green mb-10 t-uppercase">{{$coupon['discount']}} OFF</h4>
                                            <h5 class="deal-title mb-10">
                                                <a href="#">{{$coupon['title']}}</a>
                                            </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{$coupon['expire']}}</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon">Get Coupon Code</button>
                                                <div class="coupon-hide">{{$coupon['coupon_code']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
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
                        @endforeach
                    </div>
                   
                </section>


            </div>
        </div>
        <!-- End Page Container -->


    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 