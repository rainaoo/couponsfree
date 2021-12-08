@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-8 col-md-9">
                        <!-- Checkout Area -->
                        <section class="section checkout-area panel prl-30 pt-20 pb-40">
                            <h3 class="mb-20 h-title">أسلوب المراجعة</h3>
                            <p class="mb-20">ليس لديك حساب؟ اختر أحد الخيارات أدناه.</p>
                            <div class="custom-radio mb-10">
                                <input type="radio" name="checkout_method" id="sign_in">
                                <label class="color-mid" for="sign_in">تسجيل الدخول</label>
                            </div>
                            <div class="custom-radio mb-10">
                                <input type="radio" name="checkout_method" id="sign_up">
                                <label class="color-mid" for="sign_up">انشاء حساب جديد</label>
                            </div>
                            <div class="custom-radio mb-20">
                                <input type="radio" name="checkout_method" id="as_guest">
                                <label class="color-mid" for="as_guest">الخروج كضيف</label>
                            </div>
                            <p class="mb-20">سجل معنا لسرعة وسهولة الخروج وسهولة الوصول إلى تاريخ طلبك والحالة.</p>
                            <a href="checkout_billing.html" class="btn btn-lg btn-rounded ml-10">استمر</a>
                            <a href="cart.html" class="btn btn-lg btn-warning btn-rounded">الغاء الطلب</a>
                        </section>
                        <!-- End Checkout Area -->
                    </div>
                    <div class="page-sidebar col-xs-12 col-sm-4 col-md-3">
                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget checkout-widget panel p-20">
                                        <div class="widget-body">
                                            <table class="table mb-15">
                                                <tbody>
                                                    <tr>
                                                        <td class="color-mid">إجمالي المنتجات</td>
                                                        <td>$150.16</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-mid">الشحن</td>
                                                        <td>$60.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-mid">مجموع الضريبة</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr class="font-15">
                                                        <td class="color-mid">المجموع</td>
                                                        <td class="color-green">$220.16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="cart.html" class="btn btn-info btn-block btn-sm">تعديل سلة المشتريات</a>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                            </div>
                        </aside>
                        <!-- End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 