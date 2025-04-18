<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{ asset('assets/img/login.png') }}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1 class="mb-3">School Admin Login</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label>Username <span class="login-danger">*</span></label>
                                    <input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input id="password" class="form-control pass-input"  type="password"
                                        name="password"
                                        required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                   
                                   
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                   

                                   <x-primary-button class="btn btn-primary btn-block text-capitalize">
                                       {{ __('login') }}
                                   </x-primary-button>
                               </div>
                               <!-- <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div> -->

                                <!-- Remember Me -->
                                <div class="forgotpass mt-2">
                                    <!-- @if (Route::has('password.request'))
                                    <a class=" text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif -->
                                    @if (Route::has('school.forgot-password'))
                                    <a class=" text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('school.forgot-password') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                    
                                </div>

                               
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or"></span>
                            </div>

                            <div class="copyright social-login">
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
</x-guest-layout>