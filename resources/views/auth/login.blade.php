<!DOCTYPE html>
<html lang="en">
    
    @include('templates.includes.head')
    
    <body>

        <div class="page-wrapper" id="page-wrapper">
            
            <main class="content">
                <div class="container flex d-flex">
                    <div class='row flex align-items-center'>
                        <div class='col-lg-4 mt-60 mb-60 col-md-6 col-sm-12 ml-auto mr-auto'>
                            <div class="bg-white shadow-sm overflow-hidden rounded">
                                
                                <div class="p-4 text-center bg-dark-active text-white">
                                    <a href="index.html" class="avatar avatar60 ml-auto mr-auto bg-gradient-primary text-white rounded-circle">  
                                        <i class="icon-Paper-Plane"></i> </a>
                                    <h5 class='text-center h5 pt-10 mb-0 text-white'>Welcome back, Please login!</h5>
                                </div>
                                
                                <div class="p-3 pt-30 pb-30">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-------- Email -------->
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for='email'>E-Mail Address</label>
                                            </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-user"></i>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif                                                
                                            </div>
                                        </div>
                                        <!-------- Password -------->
                                        <div class="input-icon-group">
                                            <div class="d-flex flex flex-row">
                                                <label class="flex d-flex mr-auto" for='pass'>Password</label>
                                                <div class="flex d-flex ml-auto justify-content-end">
                                                    <a href="{{ route('password.request') }}" class="text-primary fs12">Forgot</a>
                                                </div>
                                            </div>
                                            <div class='input-icon-append'>
                                                <i class="fa fa-lock"></i>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-------- Remember Me -------->
                                        <div class="customUi-checkbox  pb-2">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                                <span class="label-checkbox"></span>
                                                <span class="label-helper">Remember Me</span>
                                            </label>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-gradient-primary btn-block btn-lg">Sign In</button>
                                        
                                        <div class="pt-20 text-center">
                                            First time? <a href="{{ route('register') }}" class="text-primary ml-2 b-b d-inline-block pb-1">Register Here</a>
                                        </div>
                                        
                                    </form>
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
                
            </main>
        </div>
        
        @include('templates.includes.js')
    </body>
</html>