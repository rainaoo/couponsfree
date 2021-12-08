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
                            <h3 class="mb-20 h-title">معلومات الدفع</h3>
                            <form class="mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>الاسم على البطاقة</label>
                                            <input type="text" class="form-control" placeholder="أدخل  الاسم على البطاقة">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رقم بطاقة الائتمان</label>
                                            <input type="text" class="form-control" placeholder="أدخل رقم بطاقة الائتمان">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>نوع البطاقة</label>
                                            <select class="form-control">
                                                <option>Select Card Type</option>
                                                <option>VISA</option>
                                                <option>MASTER CARD</option>
                                                <option>DISCOVER</option>
                                                <option>AMERICAN EXPRESS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>تاريخ إنتهاء الصلاحية</label>
                                            <input type="text" class="form-control" placeholder="MM/YY">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>رقم الكود الموجود على بطاقات الاتمان</label>
                                            <input type="text" class="form-control" placeholder="3 أرقام فقط">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="btn btn-lg btn-rounded ml-10">استمر</a>
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
 