<?php
use App\Models\Banner;
//use App\Models\Category;
use App\Models\Deal;
use App\Models\Store;
use App\Models\Coupon;
?>

@extends('front.temp_ar.layout.site')
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
									<li><a href="#"><i class="fa fa-cutlery"></i>{{$category['name_ar']}}<span>40</span></a>
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
										<img class="pl-10" src="{{asset('public/front/assets/images/icons/tablet.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">عروض وكوبونات</h5>
										<p class="color-mid">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item panel prl-15 ptb-20">
								<div class="row row-rl-5 row-xs-cell">
									<div class="col-xs-4 valign-middle">
										<img class="pl-10" src="{{asset('public/front/assets/images/icons/online-shop-6.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">البحث عن أفضل عروض</h5>
										<p class="color-mid">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item panel prl-15 ptb-20">
								<div class="row row-rl-5 row-xs-cell">
									<div class="col-xs-4 valign-middle">
										<img class="pl-10" src="{{asset('public/front/assets/images/icons/money.png')}}" alt="">
									</div>
									<div class="col-xs-8">
										<h5 class="mb-10 pt-5">توفير المال</h5>
										<p class="color-mid">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="section latest-deals-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">أحدث العروض</h3>
						<span class="btns collapsed" data-toggle="collapse" data-target="#demo"></span>
					</header>
					<?php
					 $getDeals=Deal::getDeals();
					// echo "<pre>";print_r($getDeals);die;
						//$store=Deal::store();
						$Deals=Deal::with(['store'=>function($query){
								$query->select('id','name','image');
							}])->orderBy('id','Desc')->where('status',1)->limit(3)->get();
							//echo "<pre>";print_r($deals);die;
							//$indexdeal=Deal::indexdeal();
					?>
				
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
											<a href="{{ url('deal_single',$deal->id)}}">{{$deal['title_ar']}} </a>
										</h3>
										<!--<ul class="deal-meta list-inline mb-10 color-mid">
											<li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
											<li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
										</ul>-->
										<p class="text-muted mb-20">{{$deal['description_ar']}} </p>
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
				<section class="section latest-coupons-area ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">أحدث الكوبونات</h3>
					</header>
					<div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
						<div class="coupon-item">
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
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>125 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
											<h5 class="deal-title mb-10">
												<a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a>
											</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 01/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">عرض الكوبون</button>
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
											<img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_02.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->
									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-muted"><i class="ico fa fa-map-marker ml-5"></i>كاليفورنايا</li>
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>13 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">15% خصم</h4>
											<h5 class="deal-title mb-10">
							<a href="#">عدسة تصوير لجميع الجوالات - مايكرو</a>
						  </h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 05/02/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">عرض الكوبون</button>
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
											<img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_03.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->
									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>425 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">20% خصم</h4>
											<h5 class="deal-title mb-10">
							<a href="#">عروض الاجهزة المنزلية الصغيرة في ايدي هوم</a>
					     	</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 15/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">عرض الكوبون</button>
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
											<img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_04.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->
									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>230 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">30% خصم</h4>
											<h5 class="deal-title mb-10">
							<a href="#">اقوى عروض هوم برونز للاثاث المنزلي</a>
						  </h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 02/03/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">عرض الكوبون</button>
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
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>86 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
											<h5 class="deal-title mb-10">
							<a href="#">سامسونج جير اس3 فرونتير ساعة ذكية</a>
					      	</h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 20/02/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_05">عرض الكوبون</button>
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
											<img class="store-logo" src="{{asset('public/front/assets/images/coupons/coupon_06.jpg')}}" alt="">
										</div>
										<!-- end media -->
									</div>
									<!-- end col -->
									<div class="col-xs-12">
										<div class="panel-body">
											<ul class="deal-meta list-inline mb-10">
												<li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
												<li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>24 مباع</li>
											</ul>
											<h4 class="color-green mb-10 t-uppercase">25% خصم</h4>
											<h5 class="deal-title mb-10">
							<a href="#">سماعة بلوتوث فويس من انجو , ذهبي</a>
						   </h5>
											<p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 14/01/2018</p>
											<div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
												<button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_06">عرض الكوبون</button>
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
						<h3 class="section-title font-18">متاجر شعبية</h3>
					</header>
					<div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Amazon</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Ashford</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">DELL</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_04.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Card Cash</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_05.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Finish Line</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_06.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">JC Penny</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_07.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Callaway Golf</h6>
							</a>
						</div>
						<div class="store-item t-center">
							<a href="store_single_01.html" class="panel is-block">
								<div class="embed-responsive embed-responsive-4by3">
									<div class="store-logo">
										<img src="{{asset('public/front/assets/images/brands/brand_08.jpg')}}" alt="">
									</div>
								</div>
								<h6 class="store-name ptb-10">Car Toys</h6>
							</a>
						</div>
					</div>
				</section>
				<section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
					<header class=" pos-r line">
						<h3 class="section-title font-18">أحدث الأخبار</h3>
					</header>
					<div class="row row-tb-20">
						<!-- Blog Post -->
						<div class="blog-post col-xs-12 col-sm-6 col-md-4">
							<article class="entry panel">
								<figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_01.jpg')}}">
									<div class="entry-date">
										<h4>13</h4>
										<h6>يناير</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
											<a href="blog_single_standard.html">بطارية احتياطية للهواتف الذكية من انكر بقدرة 5200 ملي امبير، اسود</a>
										</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> من طرف : احمد ابو زيد</li>
												<li><i class="icon fa fa-comments"></i>14 تعليق </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة ...</p>
									</div>
									<footer class="entry-footer text-left">
										<a href="blog_single_standard.html" class="more-link btn btn-link">متابعة القراءة <i class="icon fa fa-long-arrow-left"></i></a>
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
										<h6>يناير</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
											<a href="blog_single_vimeo.html">حقيبة واسيدو كومباكت سيستم للكاميرات من كيس لوجيك</a>
										</h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> من طرف : احمد ابو زيد</li>
												<li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة ...</p>
									</div>
									<footer class="entry-footer text-left">
										<a href="blog_single_youtube.html" class="more-link btn btn-link">متابعة القراءة <i class="icon fa fa-long-arrow-left"></i></a>
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
										<h6>يناير</h6>
									</div>
								</figure>
								<div class="entry-wrapper pt-20 pb-10 prl-20">
									<header class="entry-header">
										<h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
						<a href="blog_single_youtube.html">شاحن سيارة أنكر بور درايف 2 متوافق مع آيفون , آيباد</a>
					            </h4>
										<div class="entry-meta mb-10">
											<ul class="tag-info list-inline">
												<li><i class="icon fa fa-user"></i> من طرف : احمد ابو زيد</li>
												<li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
											</ul>
										</div>
									</header>
									<div class="entry-content">
										<p class="entry-summary">ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة ...</p>
									</div>
									<footer class="entry-footer text-left">
										<a href="blog_single_youtube.html" class="more-link btn btn-link">متابعة القراءة <i class="icon fa fa-long-arrow-left"></i></a>
									</footer>
								</div>
							</article>
						</div>
						<!-- End Blog Post -->
					</div>
				</section>
				<section class="section subscribe-area ptb-40 t-center">
					<div class="newsletter-form">
						<h4 class="mb-20"><i class="fa fa-envelope-o color-green ml-10"></i>اشترك في قائمة بريدنا الالكتروني حتى يصلك كل جديد</h4>
						<p class="mb-20 color-mid">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.</p>
						<div class="input-group mb-10">
							<input type="text" class="form-control bg-white" placeholder="البريد الالكتروني"> <span class="input-group-btn">
								<button class="btn" type="button">الاشتراك</button>
								</span>
						</div>
						<p class="color-muted"><small>نحن لن نشارك بريدك الالكتروني مع طرف ثالث.</small> </p>
					</div>
				</section>
			</div>
		</div>
	</main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection