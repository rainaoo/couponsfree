
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
		<div class="page-container ptb-10">
			<div class="container">
                <div class="cart-area ptb-60">
                    <div class="container">
                        <div class="cart-wrapper">
                            <h3 class="h-title mb-30 t-uppercase">My Cart</h3>
                            <table id="cart_list" class="cart-list mb-30">
                                <thead class="panel t-uppercase">
                                    <tr>
                                        <th>Product name</th>
                                        <th>Unit price</th>
                                        <th>Quantity</th>
                                        <th>Sub total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="panel alert">
                                        <td>
                                            <div class="media-left is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_01.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h6 class="title mb-15 t-uppercase"><a href="#">Diamond engagement ring</a></h6>
                                                <div class="type font-12"><span class="t-uppercase">Type : </span>Women's Cloths</div>
                                            </div>
                                        </td>
                                        <td>$235</td>
                                        <td>
                                            <input class="quantity-label" type="number" value="02">
                                        </td>
                                        <td>
                                            <div class="sub-total">$470</div>
                                        </td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td>
                                            <div class="media-left is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_02.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h6 class="title mb-15 t-uppercase"><a href="#">Diamond engagement ring</a></h6>
                                                <div class="type font-12"><span class="t-uppercase">Type : </span>Women's Cloths</div>
                                            </div>
                                        </td>
                                        <td>$235</td>
                                        <td>
                                            <input class="quantity-label" type="number" value="02">
                                        </td>
                                        <td>
                                            <div class="sub-total">$470</div>
                                        </td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td>
                                            <div class="media-left is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_03.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h6 class="title mb-15 t-uppercase"><a href="#">Diamond engagement ring</a></h6>
                                                <div class="type font-12"><span class="t-uppercase">Type : </span>Women's Cloths</div>
                                            </div>
                                        </td>
                                        <td>$235</td>
                                        <td>
                                            <input class="quantity-label" type="number" value="02">
                                        </td>
                                        <td>
                                            <div class="sub-total">$470</div>
                                        </td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="panel alert">
                                        <td>
                                            <div class="media-left is-hidden-sm-down">
                                                <figure class="product-thumb">
                                                    <img src="{{asset('public/front/assets/images/cart/product_04.jpg')}}" alt="product">
                                                </figure>
                                            </div>
                                            <div class="media-body valign-middle">
                                                <h6 class="title mb-15 t-uppercase"><a href="#">Diamond engagement ring</a></h6>
                                                <div class="type font-12"><span class="t-uppercase">Type : </span>Women's Cloths</div>
                                            </div>
                                        </td>
                                        <td>$235</td>
                                        <td>
                                            <input class="quantity-label" type="number" value="02">
                                        </td>
                                        <td>
                                            <div class="sub-total">$470</div>
                                        </td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-price">
                                <h5 class="t-uppercase mb-20">Cart total</h5>
                                <ul class="panel mb-20">
                                    <li>
                                        <div class="item-name">
                                            Subtotal
                                        </div>
                                        <div class="price">
                                            $68.50
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-name">
                                            Shipping
                                        </div>
                                        <div class="price">
                                            $68.50
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-name">
                                            <strong class="t-uppercase">Order total</strong>
                                        </div>
                                        <div class="price">
                                            <span>$150.50</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="t-right">
                                    <a href="checkout_method.html" class="btn btn-rounded btn-lg">CHECKOUT</a>
                                </div>
                            </div>
                     </div>
                 </div>
            </div>
         </div>
    </main>

	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 