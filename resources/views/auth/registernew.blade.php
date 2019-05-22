<!DOCTYPE html>
<html lang="en">
    @include('templates.includes.head')
    <body class='bg-light'>

        <div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-7 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                <div class="p-4 text-center bg-dark-active text-white">
                                    <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                        <i class="icon-Paper-Plane"></i> </a>
                                    <h5 class='text-center h5 pt-10 mb-0 text-white'>Account Registration</h5>
                                </div>

                                <div class="row no-margin bg-light">

                                    <div class="col-lg-6 bg-white pl-3 pr-3 pt-30 pb-30">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="input-icon-group">
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-user"></i>
                                                    <input id="us1" placeholder="Username" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="input-icon-group">
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-envelope"></i>
                                                    <input id="email" placeholder="Email" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="input-icon-group">
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-lock"></i>
                                                    <input id="pass" placeholder="Password" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="input-icon-group">
                                                <div class='input-icon-append'>
                                                    <i class="fa fa-lock"></i>
                                                    <input id="cn-pass" placeholder="Confirm Password" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <!-- TODO: make a terms and conditions / privacy policy 
                                            <div class="form-group  pb-2">
                                                            
                                                <span class="label-helper  fs12 text-muted">
                                                    By Creating an Account you Agree to our
                                                    <a href="#" class="b-b pb-1 text-primary">Terms and Conditions</a> and our <a href="#" class="b-b pb-1 text-primary">Privacy Policy</a>.
                                                </span>
                                            </div>
                                            -->
                                            
                                            
                                            <button type="submit" class="btn btn-primary btn-block ml-auto btn-rounded btn-lg">Create account</button>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 pl-3 pr-3 pt-40 pb-40">
                                        <div class="p-3">
                                            <div class="text-center">
                                                Already have an account? <a href='page-sign-in.html' class='text-primary ml-2 b-b d-inline-block pb-1'>Sign In Here</a>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li class="text-center pb-30 pt-20">
                                                    <div class="title-sep sep-light">
                                                        <span>Or</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="btn btn-lg btn-social btn-border-o btn-icon btn-block  si-colored-facebook mr-2 mb-2">
                                                        <i class="fab fa-facebook-f"></i> Sign Up with Facebook
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="btn btn-lg btn-social btn-border-o btn-icon btn-block  si-colored-twitter mr-2 mb-2">
                                                        <i class="fab fa-twitter"></i> Sign Up with Google+
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="btn btn-lg btn-social btn-border-o btn-icon btn-block  si-colored-g-plus mr-2 mb-2">
                                                        <i class="fab fa-google-plus-g"></i> Sign Up with Google+
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- main end-->
                <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 mr-auto ml-auto justify-content-center">
                            <div class="text-muted">© Copyright 2014-2018. Assan</div>
                        </div>
                    </div>
                </footer><!-- footer end-->
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        @include('templates.includes.js')
    </body>
</html>