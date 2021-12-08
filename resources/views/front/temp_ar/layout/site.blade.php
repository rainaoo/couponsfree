 
   <!DOCTYPE html>
   <!--[if lt IE 9 ]> <html lang="ar" dir="rtl" class="no-js ie-old"> <![endif]-->
   <!--[if IE 9 ]> <html lang="ar" dir="rtl" class="no-js ie9"> <![endif]-->
   <!--[if IE 10 ]> <html lang="ar" dir="rtl" class="no-js ie10"> <![endif]-->
   <!--[if (gt IE 10)|!(IE)]><!-->
   <html lang="en" dir="rtl" class="no-js">
   <!--<![endif]-->
   
   <head>
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- META TAGS                                 -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <meta charset="utf-8">
       <!-- Always force latest IE rendering engine -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- Mobile specific meta -->
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- PAGE TITLE                                -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <title>FRIDAY | Coupons, Deals, Discounts and Promo codes Template</title>
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- SEO METAS                                 -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <meta name="description" content="brief description here">
       <meta name="keywords" content="insert, keywords, here">
       <meta name="robots" content="index, follow">
       <meta name="author" content="CODASTROID">
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- PAGE FAVICON                              -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <link rel="apple-touch-icon" href="{{asset('front/assets/images/favicon/apple-touch-icon.png')}}">
       <link rel="icon" href="{{asset('front/assets/images/favicon/favicon.ico')}}">
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- GOOGLE FONTS                              -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=El+Messiri:700" rel="stylesheet">
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- Include CSS Filess                        -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <link href="{{asset('front/assets/css/theme-d20b1924.css')}}" rel="stylesheet">
       <!-- Bootstrap -->
       <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet">
       <link href="{{asset('front/assets/css/bootstrap-rtl.css')}}" rel="stylesheet">
       <!-- Font Awesome -->
       <link href="{{asset('front/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
       <!-- Linearicons -->
       <link href="{{asset('front/assets/vendors/linearicons/css/linearicons.css')}}" rel="stylesheet">
       <!-- Owl Carousel -->
       <link href="{{asset('front/assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
       <link href="{{asset('front/assets/vendors/owl-carousel/owl.theme.min.css')}}" rel="stylesheet">
       <!-- Flex Slider -->
       <link href="{{asset('front/assets/vendors/flexslider/flexslider.css')}}" rel="stylesheet">
       <!-- Template Stylesheet -->
       <link href="{{asset('front/assets/css/base-ar.css')}}" rel="stylesheet">
       <link href="{{asset('front/assets/css/style-ar.css')}}" rel="stylesheet">
   </head>
   
   <body id="body" class="wide-layout ">
       <!--[if lt IE 9]>
           <p class="browserupgrade alert-error">
               You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
           </p>
       <![endif]-->
       <noscript>
           <div class="noscript alert-error">
               For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">instructions how to enable JavaScript in your web browser</a>.
           </div>
       </noscript>
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <!-- PRELOADER                                 -->
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
       <div id="preloader" class="preloader">
           <div class="loader-cube">
               <div class="loader-cube__item1 loader-cube__item"></div>
               <div class="loader-cube__item2 loader-cube__item"></div>
               <div class="loader-cube__item4 loader-cube__item"></div>
               <div class="loader-cube__item3 loader-cube__item"></div>
           </div>
       </div>
       <!-- ––––––––––––––––––––––––––––––––––––––––– -->
   
   <div class="super_container">
        @include("front.temp_ar.layout.header")

        @yield("content")
        
        @include("front.temp_ar.layout.footer")
    </div>    

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Placed at the end of the document so the pages load faster -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{asset('front/assets/js/jquery-1.12.3.min.js')}}"></script>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->
    <!-- Modernizer JS -->
    <script src="{{asset('front/assets/vendors/modernizr/modernizr-2.6.2.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('front/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="{{asset('front/assets/vendors/flexslider/jquery.flexslider-min.js')}}"></script>
    <!-- Coutdown -->
    <script type="text/javascript" src="{{asset('front/assets/vendors/countdown/jquery.countdown.js')}}"></script>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{asset('front/assets/js/main-ar.js')}}"></script>
    <script>
        $(document).ready(function(){

            $(".verticalmenu-main").click(function(){
            $(".toggle-nav").toggleClass("act");
            $(".nav-coupon-category").toggle();
            $(".verticalmenu-content ").toggleClass("active");
           
          });
          $(".more").click(function(){
            $(".toggleable").toggle();
            $(".toggle-nav").removeClass("act");
            $(".nav-coupon-category").toggle();
            $(".verticalmenu-content ").removeClass("active");
            $(".verticalmenu .menu>li.more").css('display','none');
          });

          if ($("#mainHeader").offset().top > 216) {
                $("#header-sticky").addClass("sticky-menu-active");
                } else {
                $("#header-sticky").removeClass("sticky-menu-active");
                }
        });
    </script>   
</body>

</html>
