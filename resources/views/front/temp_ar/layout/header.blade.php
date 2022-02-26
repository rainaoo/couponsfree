<?php
use App\Models\Category;
use App\Models\Store;
  ?>


<!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
 
 <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
 <header id="mainHeader" class="main-header">
    <!-- Top Bar -->
    <div class="top-bar bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 is-hidden-sm-down">
                    <ul class="nav-top nav-top-left list-inline t-right">
                        <li><a href="{{route('guide-ar')}}"><i class="fa fa-question-circle"></i>دليل التخفيضات</a>
                        </li>
                        <li><a href="{{route('faq-ar')}}"><i class="fa fa-support"></i>مساعدة العملاء</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul class="nav-top nav-top-right list-inline t-xs-center t-md-left">
                        <li>
                            <a href="{{route('home-ar')}}"><i class="fa fa-flag-fra"></i>العربية<i class="fa fa-caret-down"></i></a>
                            <ul>
                                <li><a href="{{route('home')}}"><i class="fa fa-flag-usa"></i>الإنجليزية</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>
                            <ul>
                                <li><a href="#">USD - الدولار الأمريكي</a>
                                </li>
                                <li><a href="#">EUR - اليورو</a>
                                </li>
                                <li><a href="#">CNY - الين الصيني</a>
                                </li>
                                <li><a href="#">RUB - الروبل الروسي</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('sing-in-ar')}}"><i class="fa fa-lock"></i>تسجيل الدخول</a>
                        </li>
                        <li><a href="{{route('sing-up-ar')}}"><i class="fa fa-user"></i>حساب جديد</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->
    <!-- Header Header -->
    <div class="header-header bg-white">
        <div class="container">
            <div class="row row-rl-0 row-tb-20 row-md-cell">
                <div class="brand col-md-3 t-xs-center t-md-right valign-middle ml-auto mr-auto">
                    <a href="#" class="logo">
						<img src="{{asset('public/front/assets/images/logoco_light.png')}}" alt="" width="250">
                    </a>
                </div>
                <div class="header-search col-md-9">
                    <div class="row row-tb-10 ">
                        <div class="advencesearch_header">
                            <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                            <div id="_desktop_search" class="contentsticky_search">
                            <!-- block seach mobile -->
                                <!-- Block search module TOP -->
                                <div id="desktop_search_content"
                                    data-id_lang="1" 
                                    data-ajaxsearch="1" 
                                    data-novadvancedsearch_type="top"
                                    data-instantsearch=""
                                    data-search_ssl=""
                                    data-link_search_ssl="{{route('search-ar')}}"
                                    data-action="{{route('result-ar')}}">
                                    <form method="get" action="{{route('result')}}" id="searchbox" class="form-novadvancedsearch">
                                        <input type="hidden" name="fc" value="module">
                                        <input type="hidden" name="module" value="novadvancedsearch">
                                        <input type="hidden" name="controller" value="result">
                                        <input type="hidden" name="orderby" value="position" />
                                        <input type="hidden" name="orderway" value="desc" />
                                        <input type="hidden" name="id_category" class="id_category" value="0" />
                                        <div class="input-group">
                                            <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="بحث"/>
                                            <div class="input-group-btn nov_category_tree hidden-sm-down">
                                                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                                الاقسام 
                                                </button>
                                                 <!--start category search ------------>
												 <ul class="dropdown-menu list-unstyled">
													<li class="dropdown-item " data-value="0"><span>جميع الاقسام</span></li>
													
														 <ul class="list-unstyled pl-5">
															<?php	
															//use App\Models\Category;
															$getCategories=Category::getCategories();
															// echo "<pre>";print_r($getCategories);die;
															?>
																@foreach($getCategories as $key => $category)
															<li class="dropdown-item" data-value="3" >
																<span>{{$category['name_ar']}}</span>
															</li>
															@endforeach
														 </ul>
												</ul>
                                                 <!--endcategory search ------------>
                                            </div>
                                            <span class="input-group-btn">
                                                <button class="btn btn-secondary" type="submit" name="submit_search"><i class="material-icons">بحث</i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!----- /end Block search module TOP ---------->
            
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Header -->
    	<!-- Header Menu 3 -->
			<div id="header"  class="header-3 sticky-menu">
				<!--start header for mobile style -------->
				<div class="header-mobile hidden-md-up">
					<!--- style menu in mobil -------->
					<div class="hidden-md-up text-xs-center mobile d-flex align-items-center justify-content-end">
						<div id="_mobile_mainmenu" class="item-mobile-top">
							<div class="nav-header">
								<span class="nav-toggle" data-toggle=".header-navbar">
									<i></i>
									<i></i>
									<i></i>
								</span>
							</div>
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div id="megamenu" class="nov-megamenu clearfix nav-collapse header-navbar" >
									<ul class="menu level1 nav-menu">
										<li class="item active" >
											<span class=""></span><a href="{{route('home-ar')}}" title="Home">الرئيسية</a>
										</li>
										<li class="item  has-sub dropdown-mega-menu" >
											<a href="{{route('deals_grid-ar')}}" title="Deals">الصفقات</a>
											
										</li>
										<li class="item has-sub dropdown-mega-menu" >
											<a href="{{route('coupons_grid-ar')}}" title="Coupons">الكوبونات </a>
												
										 </li>
										<li class="item  has-sub dropdown-mega-menu" >
											<a href="{{route('stores_search-ar')}}">المتاجر <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
												<div class="dropdown-menu mega-menu"style="" >
																<ul>
																	<li><a href="{{route('stores_search-ar')}}">البحضش عن متاجر</a>
																	</li>
																	<li><a href="{{route('stores_categores-ar')}}">اقسام المناجر</a>
																	</li>
																	
																</ul>
												</div>				
										</li>
										<li class="item  has-sub">
											<a href="{{route('contact-ar')}}">اتصل بنا<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
										</li>
										<li class="item  has-sub">
											<a href="{{route('blogs-ar')}}">المقالات<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
											<div class="dropdown-menu"style="width:270px" >
											</div>	
										</li>
									</ul>
							    </div>
						</div>
					</div>

				</div>
               <!--end header for mobile style -------->
			
			   <!--start header for full screen style -------->
				<div class="header-bottom hidden-sm-down">
					<div class="container">
					   <div class="row d-flex align-items-center">
						 <!------------start category ------------------------------>
							<div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
								<div class="toggle-nav d-flex align-items-center justify-content-start allcategory ">
									<span class="btnov-lines"></span>
									<span><a> التسوق عبر الاقسام</a></span>
								</div>
								<!-------- ---------- sidebar menue of category --------------------->
								<div class="verticalmenu-content has-showmore" >
									<div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
										<div class="box-content block_content">
											<div id="verticalmenu" class="verticalmenu" role="navigation">
												<ul class="menu level1  categorys">
											<?php	
												//use App\Models\Category;
												$getCategories=Category::getCategories();
											    // echo "<pre>";print_r($getCategories);die;
												?>
									                @foreach($getCategories as $key => $category)
													<li class="item  parent">
														<a href="#" title="Food &amp; Drink">
															<i class="fa fa-cutlery" style=""></i>{{$category['name_ar']}} <span class="">40</span></a>
															<div class="dropdown-menu" style="width:222px">
																<ul>
																	<li class="item ">
																	<a href="#" title="Macbook Pro">Macbook Pro</a></li>
																	<li class="item  parent">
																		<a href="#" title="Laptop Thinkpad">Laptop Thinkpad</a>
																		<span class="show-sub fa-active-sub"></span>
																			<div class="dropdown-menu">
																				<ul>
																					<li class="item ">
																						<a href="#" title="Aliquam lobortis">Aliquam lobortis</a></li>
																					<li class="item ">
																						<a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a></li>
																				</ul>
																			</div>
																		</li>
																	<li class="item "><a href="#" title="EliteBook">EliteBook</a></li>
																	<li class="item "><a href="#" title="Lenovo Yoga">Lenovo Yoga</a></li>
							
																</ul>
															</div>
													</li>
													 @endforeach
												<!--	<li class="item  parent group">
														<a href="#" title="Events">
															<i class="fa fa-calendar" style=""></i>Events <span class="">44</span></a>
															<div class="dropdown-menu" style="width: 922px; top: -73px;">
																<ul>
																	<li class="item group-list-category">
																		<div class="menu-content">
																			<div class="row">
																				<div class="col-lg-3 col-12">
																					<p class="title-category">Houseware</p>
																					<ul>
																						<li><a href="#">Fridge</a></li>
																						<li><a href="#">Air conditioning</a></li>
																						<li><a href="#">Electric Fan</a></li>
																					</ul>
																				</div>
																				<div class="col-lg-3 col-12">
																					<p class="title-category">Kitchen equipment</p>
																					<ul>
																						<li><a href="#">Cooker</a></li>
																						<li><a href="#">Microwave</a></li>
																						<li><a href="#">Dishwasher</a></li>
																						
																					</ul>
																				</div>
																			</div>
																	</div>
																	</li>
															</ul>
															</div>
													</li>
													<li class="item  parent group">
														<a href="#" title="Beauty">
															<i class="fa fa-female" style=""></i>Beauty <span class="">44</span></a>
															<div class="dropdown-menu" style="width: 922px; top: -143px;">
																<ul>
																	<li class="item group-list-category-1">
																		<div class="menu-content">
																			<div class="row">
																				<div class="col-lg-3 col-12">
																				<p class="title-category">Speaker</p>
																				<ul>
																					<li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
																					<li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
																					<li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
																					<li class="item "><a href="#" title="Sarotech Products">Sarotech Products</a></li>
																				</ul>
																				</div>
																				<div class="col-lg-3 col-12">
																				<p class="title-category">HeadPhone</p>
																				<ul>
																					<li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
																					<li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
																					<li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
																				</ul>
																				</div>
																				<div class="col-lg-3 col-12">
																				<p class="title-category">HeadPhone</p>
																				<ul>
																					<li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
																					<li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
																					<li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
																				</ul>
																				</div>
																			</div>
																		</div>
																	</li>
															</ul>
														</div>
													</li>
													<li class="item  parent group"><a href="#" title="Fitness">
													<i class="fa fa-bolt" style=""></i>Fitness<span class="">44</span></a> 
													<div class="dropdown-menu" style="width: 922px; top: -215px;">
														<ul>
															<li class="item group-list-category-2">
																<div class="menu-content">
																	<div class="row">
																		<div class="col-lg-3 col-12">
																			<p class="title-category">IPhone</p>
																			<ul>
																				<li class="item "><a href="#" title="iPhone X">iPhone X</a></li>
																				<li class="item  parent"><a href="#" title="iPhone 7 / 7 Plus">iPhone 7 / 7 Plus</a></li>
																				<li class="item "><a href="#" title="iPhone 6s / 6s Plus">iPhone 6s / 6s Plus</a></li>
																				<li class="item "><a href="#" title="Accesories">Accesories</a></li>
																			</ul>
																			<p class="title-category mt-23">TABLET</p>
																			<ul>
																				<li class="item "><a href="#" title="iPad">iPad</a></li>
																				<li class="item  parent"><a href="#" title="Samsung">Samsung</a></li>
																				<li class="item "><a href="#" title="Lenovo">Lenovo</a></li>
																				<li class="item "><a href="#" title="Huawei">Huawei</a></li>
																				<li class="item "><a href="#" title="Asus">Asus</a></li>
																			</ul>
																		</div>
																		<div class="col-lg-3 col-12">
																		<p class="title-category">Android phone</p>
																		<ul>
																			<li class="item "><a href="#" title="SamSung Galaxy">SamSung Galaxy</a></li>
																			<li class="item  parent"><a href="#" title="Samsung ">Samsung </a></li>
																		</ul>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													</li>
													<li class="item "><a href="#" title="Furniture">
														<i class="fa fa-image" style=""></i>Furniture<span>33</span> </a>
														</li>
													<li class="item "><a href="#" title="Smart Watches ">
															<i class="fa fa-umbrella" style=""></i>Fashion</a>
													</li>

													<li class="item  toggleable" style="display: none;"><a href="#" title="Shopping">
														<i class="fa fa-shopping-cart" style=""></i>Shopping<span>37</span></a>
														<span class="menu-sub-title">Lorem ipsum dolor sit amet quam</span>
													</li>
														
													<li class="item  toggleable" style="display: none;"><a href="#" title="Monitor &amp; Television">
														<i class="fa fa-home" style=""></i>Home &amp; Graden<span>30</span></a>
														<span class="menu-sub-title">Sony BRAVIA, SamSung, TV 4K ...</span>
													</li>

															
													<li class="item  toggleable" style="display: none;"><a href="#" title="Monitor &amp; Television">
														<i class="fa fa-plane" style=""></i>Travel<span>48</span></a>
														<span class="menu-sub-title">Sony BRAVIA, SamSung, TV 4K ...</span>
													</li>
													<li class="more extra">Show More
													</li>0-->
												</ul>
											</div>
									   </div>
							        </div>
							    </div>
						   </div>
							<!--- end  category ---------------------->
							<!--------------------------------------------------------------------------------------------->
							<!--------------------- start menue ----------------------------->
							<div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">
								<div class="header-menu-search d-flex justify-content-between w-100 align-items-center">
									<div id="_desktop_top_menu">
										<nav id="nov-megamenu" class="clearfix">
											<div class="nav-header">
												<span class="nav-toggle" data-toggle=".header-navbar">
													<i></i>
													<i></i>
													<i></i>
												</span>
											</div>
												<!-- Brand and toggle get grouped for better mobile display -->
												<div id="megamenu" class="nov-megamenu clearfix nav-collapse header-navbar" >
													<ul class="menu level1">
														<li class="item active" >
															<span class=""></span><a href="{{route('home-ar')}}" title="Home">الرئيسية</a>
														</li>
														<li class="item  has-sub" >
															<a href="{{route('deals_grid-ar')}}" title="Deals">الصفقات <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
															
														</li>
														<li class="item menu-page group" >
															<a href="{{route('coupons_grid-ar')}}" title="Coupons">الكوبونات <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
															
														</li>
														<li class="item  has-sub " >
															<a href="{{route('stores_search-ar')}}">المتاجر <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
															    <div class="dropdown-menu"style="width:270px" >
																				<ul>
																					<li><a href="{{route('stores_search-ar')}}">البحث عن المتاجر</a>
																					</li>
																					<li><a href="{{route('stores_categores-ar')}}">اقسام المتاجر</a>
																					</li>
																					
																				</ul>
																</div>				
														</li>
														<li class="item  has-sub">
															<a href="{{route('contact-ar')}}">اتصل بنا</a>
														</li>
														<li class="item  has-sub">
															<a href="{{route('blogs-ar')}}">المقالات</a>
															
												        </li>
														
												    </ul>
											</div>
										</nav>
								</div>
								</div>
							</div>
					    </div>
					</div>
				</div>
               <!--start header for full screen style -------->
					
				<!-- End Header Menu -->

			</div>
    <!-- End Header Menu -->
</header>
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->