<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:12:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Ubuddy</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo-small.webp') }}" type="image/webp">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
</head>

<body>



    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ asset('assets/img/login.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome to Ubuddy</h1>
                            <h2>Admin Sign in</h2>
                            @if ($errors->has('role'))
                            <div class="alert alert-danger">
                                {{ $errors->first('role') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('admin.post') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Username <span class="login-danger">*</span></label>
                                    <input id="email" class="form-control block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" class="form-control">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="forgotpass">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                            <input id="remember_me" name="remember" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                   

                                   {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif --}}

                                </div>
                                <div class="d-flex justify-content-end text-center">
                                    <x-primary-button class="w-100  d-flex justify-content-center bg-info">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>

                            <!-- <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or"></span>
                            </div> -->

                            <div class="copyright social-login mt-4">
                                <p> © Copyright - UBUDDY 2025
                                    <br> All rights reserved.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/index_script.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:12:04 GMT -->

</html>