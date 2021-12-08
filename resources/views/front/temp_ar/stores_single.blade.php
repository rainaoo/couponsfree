
@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container store-page ptb-60">
            <div class="container">
                <section class="store-header-area panel t-xs-center t-sm-right">
                    <div class="row row-rl-10">
                        <div class="col-sm-3 col-md-2 t-center">
                            <figure class="pt-20 pr-10">
                                <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="col-sm-5 col-md-6">
                            <div class="store-about ptb-30">
                                <h3 class="mb-10">متجر الأمازون</h3>
                                <div class="rating mb-10">
                                    <span class="rating-stars rate-allow" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o star-active"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                                    <span class="rating-reviews">
                            ( <span class="rating-count">205</span> تقييم )
                                    </span>
                                </div>
                                <p class="mb-15">كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف.</p>
                                <p class="mb-20">ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                                <button class="btn btn-info">متابعة</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="store-splitter-right">
                                <div class="right-splitter-header prl-10 ptb-20 bg-lighter">
                                    <div class="row">
                                        <div class="col-xs-6 t-center">
                                            <h2>282</h2>
                                            <p>صفقة</p>
                                        </div>
                                        <div class="col-xs-6 t-center">
                                            <h2>122</h2>
                                            <p>كويوون</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-splitter-body prl-20 ptb-20">
                                    <div class="row row-rl-10 row-tb-10">
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('front/assets/images/products/thumb_01.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('front/assets/images/products/thumb_02.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('front/assets/images/products/thumb_03.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 col-sm-4 col-xs-6">
                                            <img src="{{asset('front/assets/images/products/thumb_04.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section deals-area ptb-30">
                    <header class="line pos-r">
                        <h3 class="section-title font-18">عروض المتجر</h3>
                    </header>
                    <div class="row row-masnory row-tb-20">
                        <div class="col-sm-6 col-lg-4">
                            <div class="deal-single panel">
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_01.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_01.jpg')}}" alt="">
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
                                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
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
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_02.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_02.jpg')}}" alt="">
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
                                <a href="#">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
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
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_03.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_03.jpg')}}" alt="">
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
                                <a href="#">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
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
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_04.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_04.jpg')}}" alt="">
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
                                <a href="#">مكبر الشاشة الجوال ثلاثي الأبعاد مع سماعة</a>
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
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_05.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_05.jpg')}}" alt="">
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
                                <a href="#">حامل الجوال الذكي 360 متعدد الاستخدام للمكتب والسيارة</a>
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
                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('front/assets/images/deals/deal_06.jpg')}}">
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
                                        <img src="{{asset('front/assets/images/brands/brand_06.jpg')}}" alt="">
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
                                <a href="#">شاحن أنكر السريع للسيارة يشحن أربعة اضعاف أسرع</a>
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
                </section>
                <section class="section coupons-area coupons-area-grid">
                    <header class="line pos-r">
                        <h3 class="section-title font-18">كوبونات المتجر</h3>
                    </header>
                    <div class="row row-masnory row-tb-20">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
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
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>125 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 01/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_01">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                        <button class="btn" type="button">حساب جديد</button>
                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
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
                                                <li class="color-muted"><i class="ico fa fa-map-marker ml-5"></i>كاليفورنايا</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>13 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">15% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عدسة تصوير لجميع الجوالات - مايكرو</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 05/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_02">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">حساب جديد</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
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
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>425 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">20% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عروض الاجهزة المنزلية الصغيرة في ايدي هوم</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 15/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_03">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
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
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>230 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">30% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">اقوى عروض هوم برونز للاثاث المنزلي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 02/03/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_04">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_07.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>125 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">10% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 01/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_07">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_08.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-map-marker ml-5"></i>كاليفورنايا</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>13 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">15% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عدسة تصوير لجميع الجوالات - مايكرو</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 05/02/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_08">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_09.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-muted"><i class="ico fa fa-tag ml-5"></i>كوبون</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>425 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">20% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">عروض الاجهزة المنزلية الصغيرة في ايدي هوم</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 15/01/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_09">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="coupon-single panel t-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center p-20">
                                            <img class="store-logo" src="{{asset('front/assets/images/coupons/coupon_10.jpg')}}" alt="">
                                        </div>
                                        <!-- end media -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-xs-12">
                                        <div class="panel-body">
                                            <ul class="deal-meta list-inline mb-10">
                                                <li class="color-green"><i class="ico lnr lnr-smile ml-5"></i>موثوق</li>
                                                <li class="color-muted"><i class="ico lnr lnr-users ml-5"></i>230 Used</li>
                                            </ul>
                                            <h4 class="color-green mb-10 t-uppercase">30% خصم</h4>
                                            <h5 class="deal-title mb-10">
                                    <a href="#">اقوى عروض هوم برونز للاثاث المنزلي</a>
                                </h5>
                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock ml-10"></i>ينتهي في 02/03/2018</p>
                                            <div class="showcode">
                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_10">عرض الكوبون</button>
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="row row-v-10">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="{{asset('front/assets/images/brands/store_logo.jpg')}}" alt="">
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
                                                    <input type="text" class="form-control bg-white" placeholder="Your Email Address">
                                                    <span class="input-group-btn">
                <button class="btn" type="button">حساب جديد</button>
            </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 