
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
		<div class="page-container ptb-60">
			<div class="container">
				<div class="row row-rl-10 row-tb-20">
					<div class="page-content col-xs-12 col-md-8">


						<section class="section coupons-area coupons-area-grid">

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
							<!-- Row -->
							<div class="row row-masnory row-tb-20">
								<div class="col-sm-6">
									<div class="coupon-single panel t-center">
										<div class="ribbon-wrapper is-hidden-xs-down">
											<div class="ribbon">Featured</div>
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">10% off select XPS & Alienware laptops</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">Get Coupon Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">15% off 2 select Amazon Fire cases</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">Show Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">Flat 40% off hotel bookings in 10 cities</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">See Sale</button>
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
								<div class="col-sm-6">
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">There is no place like home 25% off</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">Print Code</button>
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
								<div class="col-sm-6">
									<div class="coupon-single panel t-center">
										<div class="ribbon-wrapper is-hidden-xs-down">
											<div class="ribbon">Featured</div>
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
														<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">10% off $399+ refurbished laptops</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">Show Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">There is no place like home 25% off</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">Show Coupon</button>
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
								<div class="col-sm-6">
									<div class="coupon-single panel t-center">
										<div class="ribbon-wrapper is-hidden-xs-down">
											<div class="ribbon">Featured</div>
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>125 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">10% off select XPS & Alienware laptops</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 01/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_07">Get Coupon Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-muted"><i class="ico fa fa-map-marker mr-5"></i>California</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>13 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">15% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">15% off 2 select Amazon Fire cases</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 05/02/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_08">Show Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>425 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">20% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">Flat 40% off hotel bookings in 10 cities</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 15/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_09">See Sale</button>
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
								<div class="col-sm-6">
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>230 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">30% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">There is no place like home 25% off</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_10">Print Code</button>
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
								<div class="col-sm-6">
									<div class="coupon-single panel t-center">
										<div class="ribbon-wrapper is-hidden-xs-down">
											<div class="ribbon">Featured</div>
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
														<li class="color-muted"><i class="ico fa fa-tag mr-5"></i>Coupon</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>86 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">10% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">10% off $399+ refurbished laptops</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 20/02/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_11">Show Code</button>
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
								<div class="col-sm-6">
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
														<li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
														<li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>24 Used</li>
													</ul>
													<h4 class="color-green mb-10 t-uppercase">25% OFF</h4>
													<h5 class="deal-title mb-10">
											<a href="#">There is no place like home 25% off</a>
										</h5>
													<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 14/01/2018</p>
													<div class="showcode">
														<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_12">Show Coupon</button>
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
							</div>
							<!-- End Row -->

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

					<!-- Page Sidebar -->
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
													<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_02.jpg">
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
													<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_03.jpg">
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
													<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_04.jpg">
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
													<figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="assets/images/deals/deal_05.jpg">
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
									<!-- Best Rated Deals -->
									<div class="widget best-rated-deals panel pt-20 prl-20">
										<h3 class="widget-title h-title">Best Rated Deals</h3>
										<div class="widget-body ptb-30">


											<div class="media">
												<div class="media-left">
													<a href="#">
														<img class="media-object" src="{{asset('public/front/assets/images/deals/thumb_01.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h6 class="mb-5">
				<a href="#">Aenean ut orci vel massa</a>
			</h6>
													<div class="mb-5">
														<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
														</span>
													</div>
													<h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
												</div>
											</div>


											<div class="media">
												<div class="media-left">
													<a href="#">
														<img class="media-object" src="{{asset('public/front/assets/images/deals/thumb_02.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h6 class="mb-5">
				<a href="#">Aenean ut orci vel massa</a>
			</h6>
													<div class="mb-5">
														<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
														</span>
													</div>
													<h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
												</div>
											</div>


											<div class="media">
												<div class="media-left">
													<a href="#">
														<img class="media-object" src="{{asset('public/front/assets/images/deals/thumb_03.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h6 class="mb-5">
				<a href="#">Aenean ut orci vel massa</a>
			</h6>
													<div class="mb-5">
														<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
														</span>
													</div>
													<h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
												</div>
											</div>


											<div class="media">
												<div class="media-left">
													<a href="#">
														<img class="media-object" src="{{asset('public/front/assets/images/deals/thumb_04.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h6 class="mb-5">
				<a href="#">Aenean ut orci vel massa</a>
			</h6>
													<div class="mb-5">
														<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
														</span>
													</div>
													<h4 class="price font-16">$60.00 <span class="price-sale color-muted">$200.00</span></h4>
												</div>
											</div>


										</div>
									</div>
									<!-- Best Rated Deals -->
								</div>
								<div class="col-xs-12">
									<!-- Subscribe Widget -->
									<div class="widget subscribe-widget panel pt-20 prl-20">
										<h3 class="widget-title h-title">Subscribe to mail</h3>
										<div class="widget-content ptb-30">

											<p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
											<form method="post" action="#">
												<div class="input-group">
													<input type="email" class="form-control" placeholder="Your Email Address" required="required">
													<span class="input-group-btn">
				<button class="btn" type="submit">Sign Up</button>
			</span>
												</div>
											</form>

										</div>
									</div>
									<!-- End Subscribe Widget -->
								</div>
								<div class="col-xs-12">
									<!-- Trending Stores -->
									<div class="widget trend-store-widget panel pt-20 prl-20">
										<h3 class="widget-title h-title">Trending Stores</h3>
										<div class="widget-body ptb-30">


											<div class="trend-store-item media">
												<div class="post-thumb media-left">
													<a href="#">
														<img class="media-object pr-10" width="90" src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="store_single_01.html">Amazon</a>
				<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
												</div>
											</div>


											<div class="trend-store-item media">
												<div class="post-thumb media-left">
													<a href="#">
														<img class="media-object pr-10" width="90" src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="store_single_01.html">Ashford</a>
				<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
												</div>
											</div>


											<div class="trend-store-item media">
												<div class="post-thumb media-left">
													<a href="#">
														<img class="media-object pr-10" width="90" src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="store_single_01.html">DELL</a>
				<span class="rating">
					<span class="rating-stars" data-rating="4">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
												</div>
											</div>


										</div>
									</div>
									<!-- End Trending Stores -->
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

									<!-- Instagram Widget -->
									<div class="widget subscribe-widget panel pt-20 prl-20">
										<h3 class="widget-title h-title">Latest tweets</h3>
										<div class="widget-body ptb-20">

											<ul class="twitter-list">
												<li class="twitter-list__item">
													<p>
														<i class="twitter-icon fa fa-twitter"></i>
														<a href="#">@masum_rana :</a>
														<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
													</p>
												</li>
												<li class="twitter-list__item">
													<p>
														<i class="twitter-icon fa fa-twitter"></i>
														<a href="#">@masum_rana :</a>
														<span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
													</p>
												</li>
												<li class="twitter-list__item">
													<p>
														<i class="twitter-icon fa fa-twitter"></i>
														<a href="#">@masum_rana :</a>
														<span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
													</p>
												</li>
												<li class="twitter-list__item">
													<p>
														<i class="twitter-icon fa fa-twitter"></i>
														<a href="#">@masum_rana :</a>
														<span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
													</p>
												</li>
											</ul>

										</div>
									</div>
									<!-- End Instagram Widget -->
								</div>
								<div class="col-xs-12">
									<!-- Latest Reviews -->
									<div class="widget posted-reviews-widget panel pt-20 prl-20">
										<h3 class="widget-title h-title">Recent Reviews</h3>
										<div class="widget-body ptb-30">
											<!-- Review -->
											<div class="review media">
												<div class="media-left pr-10">
													<a href="#">
														<img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_01.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="#">John Doe</a>
				<span class="rating">
					<span class="rating-stars" data-rating="3">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
												</div>
											</div>
											<!-- End Review -->
											<!-- Review -->
											<div class="review media">
												<div class="media-left pr-10">
													<a href="#">
														<img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_02.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="#">John Doe</a>
				<span class="rating">
					<span class="rating-stars" data-rating="3">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Nullam porttitor porta augue vel iaculis. Pellentesque a pre...</p>
												</div>
											</div>
											<!-- End Review -->
											<!-- Review -->
											<div class="review media">
												<div class="media-left pr-10">
													<a href="#">
														<img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_03.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="#">John Doe</a>
				<span class="rating">
					<span class="rating-stars" data-rating="3">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Ut consequat eget nulla eu ultrices. Curabitur ac pellentesq...</p>
												</div>
											</div>
											<!-- End Review -->
											<!-- Review -->
											<div class="review media">
												<div class="media-left pr-10">
													<a href="#">
														<img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_04.jpg')}}" alt="Thumb" width="80">
													</a>
												</div>
												<div class="media-body">
													<h5 class="mb-5">
				<a href="#">John Doe</a>
				<span class="rating">
					<span class="rating-stars" data-rating="3">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</span>
				</span>
			</h5>
													<p class="color-mid">Duis eu lectus dictum, placerat quam sed, ornare urna....</p>
												</div>
											</div>
											<!-- End Review -->
										</div>
									</div>
									<!-- End Latest Reviews -->
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
					<!-- End Page Sidebar -->
				</div>
			</div>
		</div>


	</main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 