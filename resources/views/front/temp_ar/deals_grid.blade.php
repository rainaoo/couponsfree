@extends('front.temp_ar.layout.site')
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
                    <div class="row row-masnory row-tb-20">
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_01.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_02.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_03.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_04.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_04.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_05.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_05.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_06.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_06.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_07.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2019/09/01 01:30:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_01.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_08.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_02.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_09.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2020/10/10 12:25:10"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_03.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_10.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2018/01/02 10:35:23"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_04.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_11.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2021/12/03 03:15:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_05.jpg')}}" alt="">
                                    </div>
                                </figure>
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
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/deals/deal_12.jpg')}}">
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
                                    <div class="time-right bottom-15 left-20 font-md-14">
                                        <span>
                                <i class="ico fa fa-clock-o ml-10"></i>
                                <span class="t-uppercase" data-countdown="2019/10/10 12:00:00"></span>
                                        </span>
                                    </div>
                                    <div class="deal-store-logo">
                                        <img src="{{asset('public/front/assets/images/brands/brand_06.jpg')}}" alt="">
                                    </div>
                                </figure>
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
        </div>
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 