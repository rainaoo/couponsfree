@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <!-- Contact Us Area -->
                <section class="contact-area contact-area-v1 panel">
                    <div class="row row-tb-20">
                        <div class="col-xs-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&z=4&output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="ptb-30 prl-30">
                        <div class="row row-tb-20">
                            <div class="col-xs-12 col-md-6">
                                <div class="contact-area-col contact-info">
                                    <div class="contact-info">
                                        <h3 class="t-uppercase h-title mb-20">معلومات الاتصال</h3>
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>
                                        <ul class="contact-list mb-40">
                                            <li>
                                                <span class="icon lnr lnr-map-marker"></span>
                                                <h5>العنوان</h5>
                                                <p class="color-mid">404 ديسين ستريت، ملبورن، أوستراليا</p>
                                            </li>
                                            <li>
                                                <span class="icon lnr lnr-envelope"></span>
                                                <h5>البريد الإلكتروني</h5>
                                                <p class="color-mid">Email@address.com</p>
                                            </li>
                                            <li>
                                                <span class="icon lnr lnr-phone-handset"></span>
                                                <h5>الهاتف</h5>
                                                <p class="color-mid">(+212) 584-241-654</p>
                                            </li>
                                        </ul>
                                        <ul class="social-icons social-icons--colored list-inline">
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="contact-area-col contact-form">
                                    <h3 class="t-uppercase h-title mb-20">ابقى على تواصل</h3>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label>الاسم</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>الموقع الالكتروني</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>الرسالة</label>
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>
                                        <button class="btn">ارسل الرسالة</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Us Area -->
            </div>
        </div>
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 