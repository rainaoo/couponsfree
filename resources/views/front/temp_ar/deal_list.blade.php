@extends('front.temp_ar.layout.site')
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
                                    <li><a href="{{route('deal_list-ar')}}"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="{{route('deals_grid-ar')}}"><i class="fa fa-th"></i></a></li>
                                </ul>
                                <!-- End List Control View -->
                                <div class="left-10 pos-tb-center">
                                    <select class="form-control input-sm">
                                        <option>ترتيب حسب</option>
                                        <option>أحدث العناصر</option>
                                        <option>أفضل البائعين</option>
                                        <option>أفضل تصنيف</option>
                                        <option>السعر من الارخص للاعلى</option>
                                        <option>السعر: من الأعلى إلى الأقل</option>
                                    </select>
                                </div>
                            </header>
                            <!-- End Page Control -->
                            <div class="row row-tb-20">
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_01.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-50%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="5">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">241</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>الولايات المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>120 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$150.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_02.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-30%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="3">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">132</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>المملكة المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>42 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$150.00</span>$100.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_03.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-30%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="4">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">160</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>أستراليا</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>75 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$150.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_04.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-15%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_04.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="2">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">100</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>كندا</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>10 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$380.00</span>$340.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_05.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-60%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_05.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="3">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">32</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>الولايات المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>65 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$700.00</span>$576.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_06.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-60%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_06.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="5">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">29</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>المملكة المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>134 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$250.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_07.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-50%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="5">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">241</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>الولايات المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>120 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$150.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_08.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-30%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="3">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">132</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>المملكة المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>42 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$150.00</span>$100.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_09.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-30%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="4">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">160</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>أستراليا</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>75 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$150.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_10.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-15%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_04.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="2">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">100</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>كندا</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>10 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$380.00</span>$340.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_11.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-60%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_05.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="3">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">32</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>الولايات المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>65 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$700.00</span>$576.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('public/front/assets/images/deals/deal_12.jpg')}}">
                                                    <div class="label-discount right-20 top-15">-60%</div>
                                                    <ul class="deal-actions top-15 left-20">
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
                                                    <div class="time-right bottom-15 left-20 font-md-14 is-hidden-md-up is-hidden-md-down">
                                                        <span>
                                                <i class="ico fa fa-clock-o ml-10"></i>
                                                <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                                        </span>
                                                    </div>
                                                    <div class="deal-store-logo">
                                                        <img src="{{asset('public/front/assets/images/brands/brand_06.jpg')}}" alt="">
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="bg-white pt-20 pr-20 pl-15">
                                                    <div class="pl-md-10">
                                                        <div class="rating mb-10">
                                                            <span class="rating-stars rate-allow" data-rating="5">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                                            <span class="rating-reviews">
                                                    ( <span class="rating-count">29</span> تقييم )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                <a href="deal_single.html">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
                                            </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-map-marker ml-10"></i>المملكة المتحدة</li>
                                                            <li><i class="ico fa fa-shopping-basket ml-10"></i>134 شراء</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-left"><span class="price-sale">$300.00</span>$250.00</h3>
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
                                        <li><a class="page-numbers previous" href="#">السابق</a></li>
                                        <li><a href="#" class="page-numbers">1</a></li>
                                        <li><span class="page-numbers current">2</span></li>
                                        <li><a href="#" class="page-numbers">3</a></li>
                                        <li><a href="#" class="page-numbers">4</a></li>
                                        <li><span class="page-numbers dots">...</span></li>
                                        <li><a href="#" class="page-numbers">20</a></li>
                                        <li><a href="#" class="page-numbers next">التالي</a>
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
                                                        <div class="label-discount top-10 left-10">-30%</div>
                                                        <ul class="deal-actions top-10 right-10">
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
                                                        <div class="deal-about p-10 pos-a bottom-0 right-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                                <span class="rating-reviews color-lighter">
                            (<span class="rating-count">160</span> تقييم)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                        <a href="deal_single.html" class="color-lighter">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
                    </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_03.jpg')}}">
                                                        <div class="label-discount top-10 left-10">-15%</div>
                                                        <ul class="deal-actions top-10 right-10">
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
                                                        <div class="deal-about p-10 pos-a bottom-0 right-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="2">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                                <span class="rating-reviews color-lighter">
                            (<span class="rating-count">100</span> تقييم)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                        <a href="deal_single.html" class="color-lighter">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
                    </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_04.jpg')}}">
                                                        <div class="label-discount top-10 left-10">-60%</div>
                                                        <ul class="deal-actions top-10 right-10">
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
                                                        <div class="deal-about p-10 pos-a bottom-0 right-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                                <span class="rating-reviews color-lighter">
                            (<span class="rating-count">32</span> تقييم)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                        <a href="deal_single.html" class="color-lighter">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
                    </h5>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="latest-deals__item item">
                                                    <figure class="deal-thumbnail embed-responsive embed-responsive-4by3" data-bg-img="{{asset('public/front/assets/images/deals/deal_05.jpg')}}">
                                                        <div class="label-discount top-10 left-10">-60%</div>
                                                        <ul class="deal-actions top-10 right-10">
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
                                                        <div class="deal-about p-10 pos-a bottom-0 right-0">
                                                            <div class="rating mb-10">
                                                                <span class="rating-stars rate-allow" data-rating="5">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                                                <span class="rating-reviews color-lighter">
                            (<span class="rating-count">29</span> تقييم)
                                                                </span>
                                                            </div>
                                                            <h5 class="deal-title mb-10">
                        <a href="deal_single.html" class="color-lighter">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
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
                                        <h3 class="widget-title h-title">أفضل العروض تقييما</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/deals/thumb_01.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-5">
                <a href="#">حامل الجوال الذكي 360 متعدد</a>
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
                <a href="#">حامل الجوال الذكي 360 متعدد</a>
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
                <a href="#">حامل الجوال الذكي 360 متعدد</a>
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
                <a href="#">حامل الجوال الذكي 360 متعدد</a>
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
                                        <h3 class="widget-title h-title">الاشتراك في البريد</h3>
                                        <div class="widget-content ptb-30">
                                            <p class="color-mid mb-20">احصل على النشرة اليومية للبريد الإلكتروني مع الخدمات الخاصة، والتحديثات، عروض وأكثر!</p>
                                            <form method="post" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">الاشتراك</button>
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
                                        <h3 class="widget-title h-title">المتاجر الشائعة</h3>
                                        <div class="widget-body ptb-30">
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">Amazon</a>
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
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">Ashford</a>
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
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                            <div class="trend-store-item media">
                                                <div class="post-thumb media-right">
                                                    <a href="#">
                                                        <img class="media-object pl-10" width="90" src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">DELL</a>
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
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Trending Stores -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">تابعنا في انستقرام</h3>
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
                                        <h3 class="widget-title h-title">تابعنا في تويتر</h3>
                                        <div class="widget-body ptb-20">
                                            <ul class="twitter-list">
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
                                                    </p>
                                                </li>
                                                <li class="twitter-list__item">
                                                    <p>
                                                        <i class="twitter-icon fa fa-twitter"></i>
                                                        <a href="#"> تويتر :</a>
                                                        <span class="tweet-text">بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد.</span>
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
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_01.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
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
                                                    <p class="color-mid">هناك حقيقة مثبتة منذ زمن طويل وهي...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_02.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
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
                                                    <p class="color-mid">هناك حقيقة مثبتة منذ زمن طويل وهي...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_03.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
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
                                                    <p class="color-mid">خلافاَ للإعتقاد السائد فإن لوريم...</p>
                                                </div>
                                            </div>
                                            <!-- End Review -->
                                            <!-- Review -->
                                            <div class="review media">
                                                <div class="media-right pl-10">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="{{asset('public/front/assets/images/avatars/avatar_04.jpg')}}" alt="Thumb" width="80">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-5">
                <a href="#">احمد ابو زيد</a>
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
                                                    <p class="color-mid">وخلال تتبعه لهذه الكلمة في الأدب ...</p>
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
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 