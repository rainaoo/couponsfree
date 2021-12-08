
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
		<div class="page-container ptb-10">
			<div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      
        <section id="main">
      
          
            <h1 class="page-title text-center">Search results</h1>
          
      
          <section id="products">
            
              <section id="content" class="page-content page-not-found row align-items-center justify-content-center">
          <div class="content-404 col-lg-6 col-sm-6 text-center">
      
              <p class="h4">Sorry for the inconvenience.</p>
              <div class="info"><p>Search again what you are looking for.</p></div>
              <a class="btn btn-primary mb-35 mt-15" href="{{route('home')}}"><i class="fa"></i><span>Back to homepage</span></a>
      
              
                      <!-- Block search module TOP -->
      <div id="search_widget" class="search-widget d-flex align-items-center flex-row-reverse" data-search-controller-url="//demo.bestprestashoptheme.com/savemart/en/search">
          <div class="toggle-search"><i class="search"></i></div>
          <div id="_desktop_search">
              <form method="get" action="{{route('search')}}">
                  <input type="hidden" name="controller" value="search">
                  <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                  <input type="text" name="s" value="" placeholder="Enter Your Keyword" class="ui-autocomplete-input" autocomplete="off">
                  <button type="submit">
                      Search
                      <i class="fa fa-search"></i>
                  </button>
              </form>
          </div>
      </div>
      
      
              
      
              
          </div>
          
      </section>
      
                </section>
      
        </section>
      
                    </div>
                </div>
            </div>


    </main>

	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 