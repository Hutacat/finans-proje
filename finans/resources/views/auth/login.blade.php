
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type=image/png" sizes="16x16" href="{{asset('assets/demo/favicon.png')}}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Giriş</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600|Roboto:400" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page">
<div id="wrapper" class="wrapper">
    <div class="row container-min-full-height">
        <div class="col-lg-8 p-3 login-left">
            <div class="w-50">
                <h2 class="mb-4 text-center">Welcome back!</h2>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Şifre')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('beni hatırla') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Şifrenizi mi unuttunuz?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Giriş yap') }}
                        </x-button>
                    </div>
                </form>
                <!-- /form -->

            </div>
            <!-- /.w-75 -->
        </div>
        <div class="col-lg-4 login-right d-lg-flex d-none pos-fixed pos-right text-inverse container-min-full-height" style="background-image: url({{asset('assets/demo/login-page-bg.jpg')}})">
            <div class="login-content px-3 w-75 text-center">
                <h2 class="mb-4 text-center fw-300">New here?</h2>
                <p class="heading-font-family fw-300 letter-spacing-minus">Sign up and discover the many great features that our app provides</p><a class="btn btn-rounded btn-md btn-outline-inverse text-uppercase fw-600 ripple pd-lr-60 mr-t-200">Sign Up</a>
                <ul class="list-inline mt-4 heading-font-family text-uppercase fs-13 mr-t-20">
                    <li class="list-inline-item"><a href="#">Home</a>
                    </li>
                    <li class="list-inline-item"><a href="#">About</a>
                    </li>
                    <li class="list-inline-item"><a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item"><a href="#">Careers</a>
                    </li>
                </ul>
            </div>
            <!-- /.login-content -->
        </div>
        <!-- /.login-right -->
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->
<!-- Scripts -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/material-design.js')}}"></script>
</body>

</html>
