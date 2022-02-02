<?php
use App\Models\Banner;
//use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;
?>


@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
		<div class="page-container ptb-10">
			<div class="container">
				<div class="section deals-header-area ptb-30">
					<div class="row row-tb-20">
						<div class="col-xs-12 col-md-4 col-lg-3 ">
							<aside class="hidden-md-up">
								<ul class="nav-coupon-category panel">
									<?php
									use App\Models\Category;
									$getCategories=Category::getCategories();
								   // echo "<pre>";print_r($getCategories);die;
									 ?>
									 @foreach($getCategories as $key => $category)
									<li><a href="#"><i class="fa fa-cutlery"></i>{{$category['name']}}<span>40</span></a>
									</li>
									@endforeach
									<li><a href="#"><i class="fa fa-calendar"></i>Events<span>42</span></a>
									</li>
									<li><a href="#"><i class="fa fa-female"></i>Beauty<span>48</span></a>
									</li>
									<li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>33</span></a>
									</li>
									<li><a href="#"><i class="fa fa-image"></i>Furniture<span>50</span></a>
									</li>
									<li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>33</span></a>
									</li>
									<li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>37</span></a>
									</li>
									<li><a href="#"><i class="fa fa-home"></i>Home &amp; Graden<span>30</span></a>
									</li>
									<li><a href="#"><i class="fa fa-plane"></i>Travel<span>48</span></a>
									</li>
									<li class="all-cat">
										<a class="font-14" href="#">All Categories</a>
									</li>
								</ul>
							</aside>
						</div>
						<?php
						   //use App\Models\Banner;
						   $getBanners=Banner::getBanners();
						  // echo "<pre>";print_r($getBanners);die;
							?>
						<div class="col-xs-12 col-md-8 col-lg-9">
							<div class="header-deals-slider flexslider" id="header-deals-slider">
								<ul class="slides">
									@foreach($getBanners as $key => $banner)
									<li>
										<div class="deal-single panel item">
											<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"
											        data-bg-img="{{asset('public/backend/dist/img/banner_images/'.$banner['image'])}}">
												<div class="label-discount top-10 right-10">{{$banner['discount']}}</div>
											
												<div class="deal-about p-20 pos-a bottom-0 left-0">
													
													<h3 class="deal-title mb-10 ">
														<a href="" class="color-light color-h-lighter">{{$banner['title']}}</a>
													</h3>
												</div>
											</figure>
										</div>
									</li>
									
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section explain-process-area ptb-30">
					<div class="row row-rl-10">
						<div class="col-md-4">
							<div class="item panel prl-15 ptb-20">
								<div class="row row-rl-5 row-xs-cell">
									<div class="col-xs-4 valign-middle">
										<img class="pr-10" src="{{asset('public/front/assets/images/icons/tablet.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">Deals & Coupons</h5>
										<p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item panel prl-15 ptb-20">
								<div class="row row-rl-5 row-xs-cell">
									<div class="col-xs-4 valign-middle">
										<img class="pr-10" src="{{asset('public/front/assets/images/icons/online-shop-6.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">Find Best Offers</h5>
										<p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item panel prl-15 ptb-20">
								<div class="row row-rl-5 row-xs-cell">
									<div class="col-xs-4 valign-middle">
										<img class="pr-10" src="{{asset('public/front/assets/images/icons/money.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">Save Money</h5>
										<p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                       <!-- section for deals -->
				<section class="section latest-deals-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title ">Latest Deals</h3>
					  
					</header>
					<?php
					 $getDeals=Deal::getDeals();
					// echo "<pre>";print_r($getDeals);die;
						//$store=Deal::store();
						$deals=Deal::with(['store'=>function($query){
								$query->select('id','name','image');
							}])->orderBy('id','Desc')->where('status',1)->limit(3)->get();
							//echo "<pre>";print_r($deals);die;
							//$indexdeal=Deal::indexdeal();
					?>
				
					<div class="row row-masnory row-tb-20">
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
                       <!-- section for coupons -->
				<section class="section latest-coupons-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">Latest Coupons</h3>
						<a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
					</header>

					<div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
						<?php
						//use App\Models\Coupon;
						$getCoupons=Coupon::getCoupons();
						// echo "<pre>";print_r($getCategories);die;
					   ?>
					   @foreach($getCoupons as $key => $coupon)
						<div class="coupon-item">
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
												<button class="show-code btn btn-sm btn-block coupon" id="btncoupon" data-toggle="modal"
												 data-id="{{$coupon['id']}}" data-id="{{asset('public/backend/dist/img/coupon_images/'.$coupon['main_image'])}}"
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
											<img id="store" src="{{asset('public/front/assets/images/brands/store_logo.jpg')}}" alt="">
											<h3 class="mb-20" id="m-title"></h3>
											<p class="color-mid">Not applicable to ICANN fees, taxes, transfers,or gift cards. Cannot be used in conjunction with any other offer, sale, discount or promotion. After the initial purchase term.</p>
										</div>
										
										<div class="col-md-10 col-md-offset-1 copy-div " id="copy-div">
											<h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
											<input type="text" id="copy-text" class="coupon-code" value="X455-17GT-OL58">
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

													};
													
													var btncoupon=document.getElementById("btncoupon");
													var id=document.getElementById('id');
													var m_id=document.getElementById('m-id');
													var title=document.getElementById('title');
													var m_title=document.getElementById('m-title');
                                                    
													btncoupon.onclick=function(){
														console.log('true');
													     console.log(id);
														console.log(m_id);
														 console.log(id.text);
														//console.log(title);
														//console.log(m_title);
														//console.log(title.text);

														
													     m_id.text=id.text;
														m_title.text=title.text;
														//var id=$('#id').val().trim();
														//var m_id=$('#m-id').html(id);
														//console.log(m_id);
														//console.log(m_title.text);
													};
													/*$('#coupon').on('show.bs.modal', function (event) {
														console.log('true');
														//var button = $(event.relatedTarget) // Button that triggered the modal
														//var recipient = button.data('whatever') // Extract info from data-* attributes
														// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
														// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
														//var modal = $(this)
														//modal.find('.modal-title').text('New message to ' + recipient)
														//modal.find('.modal-body input').val(recipient)
														});*/
									

												/* $(#coupon).on('show.bs.model',function(event){
														 console.log('true');

														 var button=$(event.relatedTarget);
														 var id=button.data('id');
														 var stotre=button.data('store');

														 var model=$(this)
														 model.find('.model-body #id').val(id);
														 model.find('.model-body #store').val(id);

													 }); */

													
											
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
				</section>

				  <!-- section for stores --->
				<section class="section stores-area stores-area-v1 ptb-30">
					<?php
						  // use App\Models\Store;
						   $getStores=Store::getstores();
						  // echo "<pre>";print_r($getStores);die;
							?>
					<header class=" pos-r line">
						<h3 class="section-title font-18">Popular Stores</h3>
						<a href="{{route('stores_search')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
					</header>
					<div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
						@foreach($getStores as $key => $store)
						<div class="store-item t-center">
							<a href="{{ url('stores_single',$store['id'])}}" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/backend/dist/img/store_images/'.$store['image'])}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">{{$store['name']}}</h6>
							</a>
						</div>
					@endforeach
					</div>
				</section>

                      <!-- section post ---->
				<section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
					<header class=" pos-r  line">
						<h3 class="section-title font-18">Latest News</h3>
						<a href="blog_classic_right_sidebar.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">Visit Blog</a>
					</header>

					<div class="row row-tb-20">
						<?php
							use App\Models\Blog;
							$getBlog=Blog::getBlog();
							$newPosts=Blog::newPosts();
						// echo "<pre>";print_r($getCategories);die;
					    ?>
					     @foreach($newPosts as $key => $blog)
						<!-- Blog Post -->
						<div class="blog-post col-xs-12 col-sm-6 col-md-4">
							<article class="entry panel">
								<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/backend/dist/img/blog_images/'.$blog['main_image'])}}">
									<div class="entry-date">
										<h4>13</h4>
										<h6>JUN</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
											<a href="blog_single_standard.html">{{$blog['title']}}</a>
										</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> By : John Doe</li>
												<li><i class="icon fa fa-comments"></i>14 Comments </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">{{$blog['description']}}</p>
									</div>
									<footer class="entry-footer text-right">
										<a href="{{route('blog_single')}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
									</footer>
								</div>
							</article>
						</div>
						<!-- End Blog Post -->
                        @endforeach
					

					</div>
				</section>


				<section class="section subscribe-area ptb-40 t-center">
					<div class="newsletter-form">
						<h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
						<p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
						<form method="post" action="#">
							<div class="input-group mb-10">
								<input type="email" class="form-control bg-white" placeholder="Email Address" required="required">
								<span class="input-group-btn">
									<button class="btn" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
					</div>
				</section>
			</div>
		</div>


	 </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 