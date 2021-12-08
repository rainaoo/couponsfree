
@extends('front.temp_en.layout.site')
@section('content')

	 <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
	 <main id="mainContent" class="main-content">
		<div class="page-container ptb-10">
			<div class="container">
                <section class="sign-area panel p-40">
                    <h3 class="sign-title">Sign Up <small>Or <a href="signin.html" class="color-green">Sign In</a></small></h3>
                    <div class="row row-rl-0">
                        <div class="col-sm-6 col-md-7 col-left">
                            <form class="p-40" action="#" method="post">
                                <div class="form-group">
                                    <label class="sr-only">Full Name</label>
                                    <input type="text" class="form-control input-lg" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="password" class="form-control input-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control input-lg" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Confirm Password</label>
                                    <input type="password" class="form-control input-lg" placeholder="Confirm Password">
                                </div>
                                <div class="custom-checkbox mb-20">
                                    <input type="checkbox" id="agree_terms">
                                    <label class="color-mid" for="agree_terms">I agree to the <a href="terms_conditions.html" class="color-green">Terms of Use</a> and <a href="terms_conditions.html" class="color-green">Privacy Statement</a>.</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg">Sign Up</button>
                            </form>
                            <span class="or">Or</span>
                        </div>
                        <div class="col-sm-6 col-md-5 col-right">
                            <div class="social-login p-40">
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-facebook"><i class="fa fa-facebook-square"></i>Sign Up with Facebook</button>
                                </div>
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i>Sign Up with Twitter</button>
                                </div>
                                <div class="mb-20">
                                    <button class="btn btn-lg btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i>Sign Up with Google</button>
                                </div>
                                <div class="custom-checkbox mb-20">
                                    <input type="checkbox" id="remember_social" checked>
                                    <label class="color-mid" for="remember_social">Keep me signed in on this computer.</label>
                                </div>
                                <div class="text-center color-mid">
                                    Already have an Account ? <a href="signin.html" class="color-green">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


    </main>

	<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->

	<!-- Footer -->


@endsection
 