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
        <div class="page-container ptb-10">
            <div class="container">
                <section class="section deals-area ptb-30">

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
                    <div class="row row-masnory row-tb-20">

                        @foreach($Deals as $key => $deal)
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
										<!--<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
										</ul>-->
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
        </div>


    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 