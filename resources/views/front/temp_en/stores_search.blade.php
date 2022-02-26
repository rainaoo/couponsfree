<?php
use App\Models\Store;


$stors=Store::orderBy('id','Desc')->where('status',1)->get();
		//echo "<pre>";print_r($blogs);die;					
			
?>
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <section class="stores-area stores-area-v1">
                    <h3 class="mb-40 t-uppercase">View deals by stores</h3>
                    <div class="row row-rl-15 row-tb-15 t-center">
                        @foreach ($stors as $key => $store)
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <a href="{{url('stores_single',$store['id'])}}" class="panel is-block">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <div class="store-logo">
                                        <img src="{{asset('public/backend/dist/img/store_images/'.$store['image'])}}" alt="">
                                    </div>
                                </div>
                                <h6 class="store-name ptb-10">{{$store['name']}}</h6>
                            </a>
                        </div>
                       @endforeach
                    </div>
                    <div class="page-pagination text-center mt-30 p-10 panel">
                        <nav>
                            <!-- Page Pagination -->
                            <ul class="page-pagination">
                                <li><a class="page-numbers previous" href="#">Previous</a>
                                </li>
                                <li><a href="#" class="page-numbers">1</a>
                                </li>
                                <li><span class="page-numbers current">2</span>
                                </li>
                                <li><a href="#" class="page-numbers">3</a>
                                </li>
                                <li><a href="#" class="page-numbers">4</a>
                                </li>
                                <li><span class="page-numbers dots">...</span>
                                </li>
                                <li><a href="#" class="page-numbers">20</a>
                                </li>
                                <li><a href="#" class="page-numbers next">Next</a>
                                </li>
                            </ul>
                            <!-- End Page Pagination -->
                        </nav>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 