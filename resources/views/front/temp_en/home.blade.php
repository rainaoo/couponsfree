
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
									<li><a href="#"><i class="fa fa-cutlery"></i>Food &amp; Drink<span>40</span></a>
									</li>
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
						<div class="col-xs-12 col-md-8 col-lg-9">
							<div class="header-deals-slider flexslider" id="header-deals-slider">
								<ul class="slides">
									<li>
										<div class="deal-single panel item">
											<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"
											        data-bg-img="{{asset('front/assets/images/deals/deal_01.jpg')}}">
												<div class="label-discount top-10 right-10">-50%</div>
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
												<div class="deal-about p-20 pos-a bottom-0 left-0">
													<div class="rating mb-10">
														<span class="rating-stars" data-rating="5">
															<i class="fa fa-star-o star-active"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</span>
														<span class="rating-reviews color-light">
															( <span class="rating-count">241</span> Reviews )
														</span>
													</div>
													<h3 class="deal-title mb-10 ">
														<a href="deal_single.html" class="color-light color-h-lighter">The Crash Bad Instant Folding Twin Bed</a>
													</h3>
												</div>
											</figure>
										</div>
									</li>
									<li>
										<div class="deal-single panel item">
											<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
											    data-bg-img="{{asset('front/assets/images/deals/deal_01.jpg')}}">
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
												<div class="deal-about p-20 pos-a bottom-0 left-0">
													<div class="rating mb-10">
														<span class="rating-stars" data-rating="5">
															<i class="fa fa-star-o star-active"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</span>
														<span class="rating-reviews color-light">
														( <span class="rating-count">132</span> Reviews )
														</span>
													</div>
													<h3 class="deal-title mb-10 ">
														<a href="deal_single.html" class="color-light color-h-lighter">Western Digital USB 3.0 Hard Drives</a>
													</h3>
												</div>
											</figure>
										</div>
									</li>
									<li>
										<div class="deal-single panel item">
											<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"  
											        data-bg-img="{{asset('front/assets/images/deals/deal_03.jpg')}}">
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
												<div class="deal-about p-20 pos-a bottom-0 left-0">
													<div class="rating mb-10">
														<span class="rating-stars" data-rating="5">
															<i class="fa fa-star-o star-active"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</span>
														<span class="rating-reviews color-light">
														( <span class="rating-count">160</span> Reviews )
														</span>
													</div>
													<h3 class="deal-title mb-10 ">
														<a href="deal_single.html" class="color-light color-h-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
													</h3>
												</div>
											</figure>
										</div>
									</li>
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
										<img class="pr-10" src="{{asset('front/assets/images/icons/tablet.png')}}" alt="">
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
										<img class="pr-10" src="{{asset('front/assets/images/icons/online-shop-6.png')}}" alt="">
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
										<img class="pr-10" src="{{asset('front/assets/images/icons/money.png')}}" alt="">
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

				<section class="section latest-deals-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title ">Latest Deals</h3>
						<span class="btns collapsed" data-toggle="collapse" data-target="#demo"></span>
					  
					</header>

					<div class="row row-masnory row-tb-20">
					
						<div class="col-sm-6 col-lg-4">
							<div class="deal-single panel">
								<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"
								           data-bg-img="{{asset('front/assets/images/deals/deal_04.jpg')}}">
									<div class="label-discount left-20 top-15">-15%</div>
									<ul class="deal-actions top-15 right-20">
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
									<div class="time-left bottom-15 right-20 font-md-14">
										<span>
											<i class="ico fa fa-clock-o mr-10"></i>
											<span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
										</span>
									</div>
									<div class="deal-store-logo">
										<img src="{{asset('front/assets/images/brands/brand_04.jpg')}}" alt="">
									</div>
								</figure>
								<div class="bg-white pt-20 pl-20 pr-15">
									<div class="pr-md-10">
										<div class="rating mb-10">
											<span class="rating-stars rate-allow" data-rating="2">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<span class="rating-reviews">
												( <span class="rating-count">100</span> rates )
											</span>
										</div>
										<h3 class="deal-title mb-10">
											<a href="deal_single.html">Timberland Men's Thorton Waterproof Boots</a>
										</h3>
										<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
										</ul>
										<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
									</div>
									<div class="deal-price pos-r mb-15">
										<h3 class="price ptb-5 text-right"><span class="price-sale">$380.00</span>$340.00</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="deal-single panel">
								<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
								        data-bg-img="{{asset('front/assets/images/deals/deal_05.jpg')}}">
									<div class="label-discount left-20 top-15">-60%</div>
									<ul class="deal-actions top-15 right-20">
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
									<div class="time-left bottom-15 right-20 font-md-14">
										<span>
											<i class="ico fa fa-clock-o mr-10"></i>
											<span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
										</span>
									</div>
									<div class="deal-store-logo">
										<img src="{{asset('front/assets/images/brands/brand_05.jpg')}}" alt="">
									</div>
								</figure>
								<div class="bg-white pt-20 pl-20 pr-15">
									<div class="pr-md-10">
										<div class="rating mb-10">
											<span class="rating-stars rate-allow" data-rating="3">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<span class="rating-reviews">
							                    ( <span class="rating-count">32</span> rates )
											</span>
										</div>
										<h3 class="deal-title mb-10">
											<a href="deal_single.html">New and Refurbished Lenovo Laptops</a>
										</h3>
										<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>65 Bought</li>
										</ul>
										<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
									</div>
									<div class="deal-price pos-r mb-15">
										<h3 class="price ptb-5 text-right"><span class="price-sale">$700.00</span>$576.00</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="deal-single panel">
								<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
								        data-bg-img="{{asset('front/assets/images/deals/deal_06.jpg')}}">
									<div class="label-discount left-20 top-15">-60%</div>
									<ul class="deal-actions top-15 right-20">
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
									<div class="time-left bottom-15 right-20 font-md-14">
										<span>
											<i class="ico fa fa-clock-o mr-10"></i>
											<span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
										</span>
									</div>
									<div class="deal-store-logo">
										<img src="{{asset('front/assets/images/brands/brand_06.jpg')}}" alt="">
									</div>
								</figure>
								<div class="bg-white pt-20 pl-20 pr-15">
									<div class="pr-md-10">
										<div class="rating mb-10">
											<span class="rating-stars rate-allow" data-rating="5">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<span class="rating-reviews">
						                  	( <span class="rating-count">29</span> rates )
											</span>
										</div>
										<h3 class="deal-title mb-10">
											<a href="deal_single.html">Buying a TV Is Easy When You Know These Terms</a>
										</h3>
										<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
										</ul>
										<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
									</div>
									<div class="deal-price pos-r mb-15">
										<h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$250.00</h3>
									</div>
								</div>
							</div>
						</div>
						<div id="demo" class="collapse">
							<div class="col-sm-6 col-lg-4">
								<div class="deal-single panel">
									<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
									        data-bg-img="{{asset('front/assets/images/deals/deal_04.jpg')}}">
										<div class="label-discount left-20 top-15">-15%</div>
										<ul class="deal-actions top-15 right-20">
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
										<div class="time-left bottom-15 right-20 font-md-14">
											<span>
												<i class="ico fa fa-clock-o mr-10"></i>
												<span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
											</span>
										</div>
										<div class="deal-store-logo">
											<img src="{{asset('front/assets/images/brands/brand_04.jpg')}}" alt="">
										</div>
									</figure>
									<div class="bg-white pt-20 pl-20 pr-15">
										<div class="pr-md-10">
											<div class="rating mb-10">
												<span class="rating-stars rate-allow" data-rating="2">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="rating-reviews">
													( <span class="rating-count">100</span> rates )
												</span>
											</div>
											<h3 class="deal-title mb-10">
												<a href="deal_single.html">Timberland Men's Thorton Waterproof Boots</a>
											</h3>
											<ul class="deal-meta list-inline mb-10 color-mid">
												<li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
												<li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
											</ul>
											<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
										</div>
										<div class="deal-price pos-r mb-15">
											<h3 class="price ptb-5 text-right"><span class="price-sale">$380.00</span>$340.00</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="deal-single panel">
									<figure class="deal-thumbnail embed-responsive embed-responsive-16by9"
									       data-bg-img="{{asset('front/assets/images/deals/deal_05.jpg')}}">
										<div class="label-discount left-20 top-15">-60%</div>
										<ul class="deal-actions top-15 right-20">
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
										<div class="time-left bottom-15 right-20 font-md-14">
											<span>
												<i class="ico fa fa-clock-o mr-10"></i>
												<span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
											</span>
										</div>
										<div class="deal-store-logo">
											<img src="{{asset('front/assets/images/brands/brand_05.jpg')}}" alt="">
										</div>
									</figure>
									<div class="bg-white pt-20 pl-20 pr-15">
										<div class="pr-md-10">
											<div class="rating mb-10">
												<span class="rating-stars rate-allow" data-rating="3">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="rating-reviews">
													( <span class="rating-count">32</span> rates )
												</span>
											</div>
											<h3 class="deal-title mb-10">
												<a href="deal_single.html">New and Refurbished Lenovo Laptops</a>
											</h3>
											<ul class="deal-meta list-inline mb-10 color-mid">
												<li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
												<li><i class="ico fa fa-shopping-basket mr-10"></i>65 Bought</li>
											</ul>
											<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
										</div>
										<div class="deal-price pos-r mb-15">
											<h3 class="price ptb-5 text-right"><span class="price-sale">$700.00</span>$576.00</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="deal-single panel">
									<figure class="deal-thumbnail embed-responsive embed-responsive-16by9" 
									        data-bg-img="{{asset('front/assets/images/deals/deal_06.jpg')}}">
										<div class="label-discount left-20 top-15">-60%</div>
										<ul class="deal-actions top-15 right-20">
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
										<div class="time-left bottom-15 right-20 font-md-14">
											<span>
												<i class="ico fa fa-clock-o mr-10"></i>
												<span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
											</span>
										</div>
										<div class="deal-store-logo">
											<img src="{{asset('front/assets/images/brands/brand_06.jpg')}}" alt="">
										</div>
									</figure>
									<div class="bg-white pt-20 pl-20 pr-15">
										<div class="pr-md-10">
											<div class="rating mb-10">
												<span class="rating-stars rate-allow" data-rating="5">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="rating-reviews">
												  ( <span class="rating-count">29</span> rates )
												</span>
											</div>
											<h3 class="deal-title mb-10">
												<a href="deal_single.html">Buying a TV Is Easy When You Know These Terms</a>
											</h3>
											<ul class="deal-meta list-inline mb-10 color-mid">
												<li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
												<li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
											</ul>
											<p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
										</div>
										<div class="deal-price pos-r mb-15">
											<h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$250.00</h3>
										</div>
									</div>
								</div>
							</div>
						  </div>
					</div>
				</section>

				<section class="section latest-coupons-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">Latest Deals</h3>
						<a class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
					</header>

					<div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="ribbon-wrapper is-hidden-xs-down">
									<div class="ribbon">Featured</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_01.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">10% off select XPS & Alienware laptops</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_02.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">15% off 2 select Amazon Fire cases</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">Show Code</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_03.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">Flat 40% off hotel bookings in 10 cities</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">See Sale</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_04.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">There is no place like home 25% off</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">Print Code</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="ribbon-wrapper is-hidden-xs-down">
									<div class="ribbon">Featured</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_05.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">10% off $399+ refurbished laptops</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">Show Code</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
						<div class="coupon-item">
							<div class="coupon-single panel t-center">
								<div class="row">
									<div class="col-xs-12">
										<div class="text-center p-20">
											<img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_06.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->

									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
												<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
											<h5 class="deal-title mb-10">
							<a href="#">There is no place like home 25% off</a>
						</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">Show Coupon</button>
												<div class="coupon-hide">X455-17GT-OL58</div>
											</div>
										</div>
									</div>
									<!-- end col -->
								</div>
								<!-- end row -->
							</div>
						</div>
					</div>
				</section>
				<section class="section stores-area stores-area-v1 ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">Popular Stores</h3>
						<a href="stores_01.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
					</header>
					<div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_01.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Amazon</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_02.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Ashford</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_03.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">DELL</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_04.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Card Cash</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_05.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Finish Line</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_06.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">JC Penny</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_07.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Callaway Golf</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('front/assets/images/brands/brand_08.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Car Toys</h6>
							</a>
						</div>
					</div>
				</section>


				<section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
					<header class=" pos-r  line">
						<h3 class="section-title font-18">Latest News</h3>
						<a href="blog_classic_right_sidebar.html" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">Visit Blog</a>
					</header>

					<div class="row row-tb-20">

						<!-- Blog Post -->
						<div class="blog-post col-xs-12 col-sm-6 col-md-4">
							<article class="entry panel">
								<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/blog/post_01.jpg')}}">
									<div class="entry-date">
										<h4>13</h4>
										<h6>JUN</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
						<a href="blog_single_standard.html">Restaurant Employer Read Clients Orders On His iPad</a>
					</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> By : John Doe</li>
												<li><i class="icon fa fa-comments"></i>14 Comments </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
									</div>
									<footer class="entry-footer text-right">
										<a href="blog_single_standard.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
									</footer>
								</div>
							</article>
						</div>
						<!-- End Blog Post -->

						<!-- Blog Post -->
						<div class="blog-post col-xs-12 col-sm-6 col-md-4">
							<article class="entry panel">
								<figure class="entry-media embed-responsive embed-responsive-16by9">
									<iframe src="https://player.vimeo.com/video/28786762?portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									<div class="entry-date">
										<h4>13</h4>
										<h6>JUN</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
											<a href="blog_single_vimeo.html">Amazing Classic Interior Design With Perfect Lighting</a>
										</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> By : John Doe</li>
												<li><i class="icon fa fa-comments"></i> 14 Comments </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
									</div>
									<footer class="entry-footer text-right">
										<a href="blog_single_vimeo.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
									</footer>
								</div>
							</article>
						</div>
						<!-- End Blog Post -->

						<!-- Blog Post -->
						<div class="blog-post col-xs-12 col-sm-6 col-md-4">
							<article class="entry panel">
								<figure class="entry-media embed-responsive embed-responsive-16by9">
									<iframe src="https://www.youtube.com/embed/mcixldqDIEQ?v=mcixldqDIEQ" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									<div class="entry-date">
										<h4>13</h4>
										<h6>JUN</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
						<a href="blog_single_youtube.html">English Breakfast Tea With Tasty Donut Desserts</a>
					</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> By : John Doe</li>
												<li><i class="icon fa fa-comments"></i> 14 Comments </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
									</div>
									<footer class="entry-footer text-right">
										<a href="blog_single_youtube.html" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
									</footer>
								</div>
							</article>
						</div>
						<!-- End Blog Post -->

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
 