<x-guest-layout>
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
                            <h4 class="text-center"><i class="fa fa-lock fa-2x"></i></h4>
                            <h1 class="text-center">Reset Password</h1>
                            <p class="account-subtitle text-center">Let Us Help You</p>

                            <form id="resetForm" method="POST" action="">
                                @csrf

                                <!-- Step 1: Mobile Number -->
                                <div id="step1" class="step">
                                    <div class="form-group">
                                        <label>Enter your registered Mobile No. <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" name="mobile" pattern="\d{10}" maxlength="10" minlength="10" required oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                        <span class="profile-views"><i class="fas fa-mobile"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" onclick="validateStep(1)">Next</button>
                                    </div>
                                </div>

                                <!-- Step 2: MPIN -->
                                <div id="step2" class="step d-none">
                                    <div class="form-group">
                                        <label>Enter your MPIN <span class="login-danger">*</span></label>
                                        <input class="form-control" type="password" name="mpin" pattern="\d{4}" maxlength="4" minlength="4" required oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                        <span class="profile-views"><i class="fas fa-key"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <p style="font-size:10px;">If you forgot your MPIN, please contact our customer service.</p>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" onclick="validateStep(2)">Next</button>
                                    </div>
                                </div>

                                <!-- Step 3: OTP -->
                                <div id="step3" class="step d-none">
                                    <div class="form-group">
                                        <label>Enter OTP <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" name="otp" pattern="\d{4}" maxlength="4" minlength="4" required oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                        <span class="profile-views"><i class="fas fa-shield-alt"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" onclick="validateStep(3)">Next</button>
                                    </div>
                                </div>

                                <!-- Step 4: Set New Password -->
                                <div id="step4" class="step d-none">
                                    <div class="form-group">
                                        <label>New Password <span class="login-danger">*</span></label>
                                        <input class="form-control" type="password" name="password" minlength="6" required>
                                        <span class="profile-views"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password <span class="login-danger">*</span></label>
                                        <input class="form-control" type="password" name="password_confirmation" minlength="6" required>
                                        <span class="profile-views"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block">Reset My Password</button>
                                    </div>
                                </div>


                                <div class="form-group mb-0">
                                    <a class="btn primary-reset btn-block" href="{{ route('school.auth.login') }}">Back to Login</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step Switching & Validation Script -->
    <script>
        function validateStep(step) {
            const currentStep = document.getElementById('step' + step);
            const input = currentStep.querySelectorAll('input');
            let valid = true;

            input.forEach(field => {
                if (!field.checkValidity()) {
                    field.reportValidity();
                    valid = false;
                }
            });

            if (valid) {
                nextStep(step + 1);
            }
        }

        function nextStep(step) {
            document.querySelectorAll('.step').forEach(s => s.classList.add('d-none'));
            document.getElementById('step' + step).classList.remove('d-none');
        }
    </script>


    <style>
        .d-none {
            display: none;
        }
    </style>
</x-guest-layout>