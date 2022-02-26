<?php
use App\Models\Blog;
use App\Models\Category;

$blogs=Blog::with(['category'=>function($query){
            $query->select('id','name');
        }])->orderBy('id','Desc')->where('id',$blog->id)->where('status',1)->get();
		//echo "<pre>";print_r($blogs);die;					

$posts=Blog::with(['category'=>function($query){
            $query->select('id','name');
        }])->orderBy('id','Desc')->where('category_id',$blog->category_id)->where('status',1)->get();
		//echo "<pre>";print_r($posts);die;					
?>

@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
     <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-7 col-md-8">

                        <!-- Blog Area -->
                        <div class="blog-area blog-single-post">
                            <div class="row row-tb-20">

                                <!-- Blog Post -->
                                <div class="blog-post col-xs-12">
                                    <article class="entry panel">
                                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('public/backend/dist/img/blog_images/'.$blog['main_image'])}}">
                                           <!-- <div class="entry-date">
                                                <h4>13</h4>
                                                <h6>JUN</h6>
                                            </div>-->
                                        </figure>
                                        <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                            <header class="entry-header">
                                                <h4 class="entry-title mb-10 mb-md-15">{{$blog['title']}}</h4>
                                      								
                                                <div class="entry-meta mb-10">
                                                    <ul class="tag-info list-inline">
                                                        <li><i class="icon fa fa-user"></i> By : John Doe</li>
                                                        <li><i class="icon fa fa-comments"></i> 14 Comments </li>
                                                    </ul>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p class="mb-20">{{$blog['description']}}</p>
                                               
                                               
                                                <div class="gallery mb-20">
                                                    <div class="row row-rl-10">
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('public/front/assets/images/blog/post_01.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('public/front/assets/images/blog/post_02.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="{{asset('public/front/assets/images/blog/post_03.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                            </div>
                                            <!-- .entry-wrapper -->
                                            
                                        </div>
                                    </article>
                                   
                                </div>
                                <!-- End Blog Post -->


                                <!-- Related Posts -->
                                <div class="col-xs-12">

                                    <div class="related-posts panel pt-20 pb-30 prl-20">

                                        <h3 class="related-posts-title h-title mb-30">Related Posts</h3>

                                        <div class="row">
                                            @foreach($posts as $key => $post)
                                            <div class="col-sm-4">
                                                <a href="#">
                                                    <figure class="mb-10">
                                                        <img src="{{asset('public/backend/dist/img/blog_images/'.$post['main_image'])}}" alt="">
                                                    </figure>
                                                    <p class="font-14">{{$post['title']}}</p>
                                                </a>
                                            </div>
                                           
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- End Related Posts -->

                             
                            </div>
                        </div>
                        <!-- End Blog Area -->

                    </div>
                    <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">

                        <!-- Blog Sidebar -->
                        <aside class="sidebar blog-sidebar">
                            <div class="row row-tb-10">
                                
                                <div class="col-xs-12">
                                    <!-- Recent Posts -->
                                    <div class="widget recent-posts panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Recent Posts</h3>
                                        <div class="widget-body ptb-30">

                                            <div class="recent-post media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/blog/thumb_1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                                                        <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                    </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                        <li><i class="ico fa fa-calendar mr-5"></i>22 Mar 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/blog/thumb_2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                                                        <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                    </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                        <li><i class="ico fa fa-calendar mr-5"></i>16 Mar 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/blog/thumb_3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                                                        <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                    </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                        <li><i class="ico fa fa-calendar mr-5"></i>18 Mar 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/blog/thumb_4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                                                        <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                    </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                        <li><i class="ico fa fa-calendar mr-5"></i>26 Mar 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="recent-post media">
                                                <div class="post-thumb media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('public/front/assets/images/blog/thumb_5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="font-15 mb-10">
                                                        <a href="#">Lorem ipsum dolor sit amet consetetur</a>
                                                    </h5>
                                                    <ul class="post-meta list-inline">
                                                        <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                        <li><i class="ico fa fa-calendar mr-5"></i>28 Mar 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Recent Posts -->
                                </div>
                                <div class="col-xs-12">
                                    <!-- Categories Widget -->
                                    <div class="widget categories-widget panel pt-20 prl-20">
                                        <div class="widget-header">
                                            <h3 class="widget-title h-title">Blog Categories</h3>
                                        </div>
                                        <div class="widget-body ptb-20">
                                            <ul>
                                                <li>
                                                    <a href="#">Best Deals <span>1420</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Shopping <span>780</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Sport <span>670</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Travel <span>520</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">Coupon Code <span>350</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Categories Widget -->
                                </div>
                               
                               
                                <div class="col-xs-12">
                                    <!-- Instagram Widget -->
                                    <div class="widget instagram-widget panel pt-20 prl-20">
                                        <h3 class="widget-title h-title">Instagram</h3>
                                        <div class="widget-body ptb-30">

                                            <div class="row row-tb-5 row-rl-5">


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_01.jpg')}}" alt="">
                                                </div>


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_02.jpg')}}" alt="">
                                                </div>


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_03.jpg')}}" alt="">
                                                </div>


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_04.jpg')}}" alt="">
                                                </div>


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_05.jpg')}}" alt="">
                                                </div>


                                                <div class="instagram-widget__item col-xs-4">
                                                    <img src="{{asset('public/front/assets/images/instagram/instagram_06.jpg')}}" alt="">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Instagram Widget -->
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
 