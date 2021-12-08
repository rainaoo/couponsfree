
@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <div class="page-container ptb-60">
            <div class="container">
                <section class="sign-area panel p-40">
                    <h3 class="sign-title">تسجيل الدخول <small>أو <a href="{{route('sing-up-ar')}}" class="color-green">حساب جديد</a></small></h3>
                    <div class="row row-rl-0">
                        <div class="col-sm-6 col-md-7 col-right">
                            <form class="p-40" action="" method="post">
                                <div class="form-group">
                                    <label class="sr-only">البريد الإلكتروني</label>
                                    <input type="text" class="form-control input-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">كلمة المرور</label>
                                    <input type="password" class="form-control input-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <a href="#" class="forgot-pass-link color-green">نسيت كلمة المرور؟</a>
                                </div>
                                <div class="custom-checkbox mb-20">
                                    <input type="checkbox" id="remember_account" checked>
                                    <label class="color-mid" for="remember_account">احتفظ بتسجيل دخولي على هذا الحاسوب.</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg">تسجيل الدخول</button>
                            </form>
                            <span class="or">أو</span>
                        </div>
                        <div class="col-sm-6 col-md-5 col-left">
                            <div class="social-login p-40">
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-facebook"><i class="fa fa-facebook-square"></i>تسجيل الدخول بالفيسبوك</button>
                                </div>
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>تسجيل الدخول بتويتر</button>
                                </div>
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i>تسجيل الدخول بغوغل</button>
                                </div>
                                <div class="custom-checkbox mb-20">
                                    <input type="checkbox" id="remember_social" checked>
                                    <label class="color-mid" for="remember_social">احتفظ بتسجيل دخولي على هذا الحاسوب.</label>
                                </div>
                                <div class="text-center color-mid">
                                    احتاج الى حساب ؟ <a href="signup.html" class="color-green">إصنع حساب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 