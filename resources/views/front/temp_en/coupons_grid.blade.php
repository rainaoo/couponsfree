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

                <!-- Coupons Area -->
                <div class="section coupons-area coupons-area-grid">

                    <!-- Page Control -->
                    <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                        <!-- List Control View -->
                        <ul class="list-control-view list-inline">
                            <li><a href="{{route('coupons_list')}}"><i class="fa fa-bars"></i></a>
                            </li>
                            <li><a href="{{route('coupons_grid')}}""><i class="fa fa-th"></i></a>
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
                    
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="coupon-single panel t-center">
                                    <!--<div class="ribbon-wrapper is-hidden-xs-down">
                                        <div class="ribbon">Featured</div>
                                    </div>-->
                                    <a  class="id" name="id" id="id" style="color:blue!important">{{$coupon['id']}}</a>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                                <img class="store-logo" id="image" src="{{asset('public/backend/dist/img/coupon_images/'.$coupon['main_image'])}}" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <!--<ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
                                                </ul>-->
                                                <h4 class="color-green mb-10 t-uppercase" id="dicount">{{$coupon['coupon_discount']}}%  OFF</h4>
                                                <h5 class="deal-title mb-10">
                                                    <a href="#" id="title">{{$coupon['title']}}</a>
                                                </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{$coupon['expires']}}</p>
                                                <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                    <button class="show-code btn btn-sm btn-block" id="btncoupon" data-toggle="modal"
                                                    data-id="{{$coupon->store['id']}}"  data-title="{{$coupon->store['title']}}" data-image="{{asset('public/backend/dist/img/store_images/'.$coupon->store['image'])}}"
                                                    data-target="#coupon">Get Coupon Code</button>
                                                    <div class="coupon-hide">{{$coupon['coupon_code']}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        
                        @endforeach
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
                
                <!-- End Coupons Area -->
              
            </div>
        </div>
    </div>

    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 