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
                            <h3 class="mb-20 h-title">معلومات الفواتير</h3>
                            <form class="mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الاسم الاول</label>
                                            <input type="text" class="form-control" placeholder="أدخل اسمك الأول">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الاسم الثاني</label>
                                            <input type="text" class="form-control" placeholder="أدخل اسمك الثاني">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الدولة</label>
                                            <select class="form-control">
                                                <option>اختر بلدك</option>
                                                <option>إنكلترا</option>
                                                <option>ألمانيا</option>
                                                <option>فرنسا</option>
                                                <option>إسبانيا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>المدينة</label>
                                            <select class="form-control">
                                                <option>اختر مدينتك</option>
                                                <option>القاهرة</option>
                                                <option>نيويورك</option>
                                                <option>باريس</option>
                                                <option>نيروبي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رقم الهاتف</label>
                                            <input type="text" class="form-control" placeholder="XXX - XXXX - XXX">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الرمز البريدي</label>
                                            <input type="text" class="form-control" placeholder="أدخل الرمز البريدي">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>العنوان الأول</label>
                                    <input type="text" class="form-control" placeholder="أدخل عنوانك">
                                </div>
                                <div class="form-group">
                                    <label>العنوان الثاني <span class="color-mid">(اختياري)</span></label>
                                    <input type="text" class="form-control" placeholder="أدخل عنوانك">
                                </div>
                            </form>
                            <a href="checkout_payment.html" class="btn btn-lg btn-rounded ml-10">استمر</a>
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
 