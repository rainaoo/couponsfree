@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <div class="page-content">
                    <!-- Blog Area -->
                    <div class="blog-area blog-grid blog-3-col">
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
                                    <a href="{{route('blog_single-ar')}}">بطارية احتياطية للهواتف الذكية من انكر بقدرة 5200 ملي امبير، اسود</a>
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
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&z=4&output=embed"></iframe>
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>يناير</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                    <a href="blog_single_map.html">سماعات سامسونج ليفل يو اللاسلكية - ازرق ياقوتي</a>
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
                                            <a href="blog_single_map.html" class="more-link btn btn-link">متابعة القراءة <i class="icon fa fa-long-arrow-left"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>يناير</h6>
                                        </div>
                                        <div class="owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">
                                            <figure class="post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_02.jpg')}}"></figure>
                                            <figure class="post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_03.jpg')}}"></figure>
                                            <figure class="post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_04.jpg')}}"></figure>
                                            <figure class="post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_05.jpg')}}"></figure>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                    <a href="blog_single_gallery.html">شاومي مي 4K اندرويد تي في بوكس - اسود</a>
                                </h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By احمد ابو زيد</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة ...</p>
                                        </div>
                                        <footer class="entry-footer text-left">
                                            <a href="blog_single_gallery.html" class="more-link btn btn-link">متابعة القراءة <i class="icon fa fa-long-arrow-left"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_03.jpg')}}">
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
                                                    <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
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
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_04.jpg')}}">
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
                                                    <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
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
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_05.jpg')}}">
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
                                                    <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
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
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/front/assets/images/blog/post_06.jpg')}}">
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
                                                    <li><i class="icon fa fa-comments"></i> 14 تعليقات </li>
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
                        </div>
                        <!-- Blog Pagination -->
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
                        <!-- End Blog Pagination -->
                    </div>
                    <!-- End Blog Area -->
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 