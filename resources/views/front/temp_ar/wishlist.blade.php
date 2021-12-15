
@extends('front.temp_ar.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
        <div class="page-container ptb-20">
            <div class="container">
                <section class="wishlist-area ptb-30">
                    <div class="container">
                        <div class="wishlist-wrapper">
                            <h3 class="h-title mb-40 t-uppercase">المفضلة</h3>
                            <table id="cart_list" class="wishlist">
                                <tbody>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_11.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_12.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_13.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_14.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_15.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td class="col-sm-8 col-md-9">
                                            <div class="media-right is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_16.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h5 class="title mb-5 t-uppercase"><a href="#">قلم ستايلش, للشاشات التى تعمل باللمس</a></h5>
                                                <div class="rating mb-10">
                                                    <span class="rating-stars rate-allow" data-rating="2">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                    <span class="rating-reviews">
                                            ( <span class="rating-count">100</span> تقييم )
                                                    </span>
                                                </div>
                                                <h4 class="price color-green"><span class="price-sale">$380.00</span>$340.00</h4>
                                                <button class="btn btn-rounded btn-sm mt-15 is-hidden-sm-up">أضف إلى السلة</button>
                                            </div>
                                        </td>
                                        <td class="col-sm-3 col-md-2 is-hidden-xs-down">
                                            <button class="btn btn-rounded btn-sm">أضف إلى السلة</button>
                                        </td>
                                        <td class="col-sm-1">
                                            <button type="button" class="close pr-xs-0 pl-sm-10" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 