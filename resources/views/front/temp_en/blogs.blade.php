<?php
use App\Models\Blog;
use App\Models\Category;

$blogs=Blog::with(['category'=>function($query){
            $query->select('id','name');
        }])->orderBy('id','Desc')->where('status',1)->get();
		//echo "<pre>";print_r($blogs);die;					
			
?>

@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">

        <div class="page-container ptb-60">
            <div class="container">
                <div class="page-content">

                    <!-- Blog Area -->
                    <div class="blog-area blog-grid blog-3-col">

                        <div class="row row-tb-20">
                            @foreach ($blogs as $key => $blog)
                            <!-- Blog Post -->
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/backend/dist/img/blog_images/'.$blog['main_image'])}}">
                                       <!-- <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>-->
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                    <a href="{{route('blog_single')}}">{{$blog['title']}}/</a>
                                   </h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                    <li><i class="icon fa fa-comments"></i>14 Comments </li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">Vivamus sem massa, cursus at mollis eu, euismod id risus. Vestibulum nunc ante, sagittis ut nisl at, porta porttitor justo. Nam imperdiet im...</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="{{url('blog_single',$blog['id'])}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->
                            @endforeach

                        </div>

                        <!-- Blog Pagination -->
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
 