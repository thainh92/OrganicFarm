@extends('layouts.master')
@section('title', 'Register')
@section('content')
<!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Register</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- End Page Banner -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Start Register Area -->
        <section class="register-area ptb-100">
            <div class="container">
                <div class="register-form">
                    <h2>{{ __('Register') }}</h2>

                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Username') }}
                            </label>
                            
                            <input id="name" type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            <!-- @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input username.
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}
                            </label>

                            <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input valid email.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Address') }}
                            </label>
                            
                            <input id="address" type="text" class="form-control" placeholder="Address" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input address.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Phone') }}
                            </label>
                            
                            <input id="phone" type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please input phone.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">
                                {{ __('Password') }}
                                <!-- <span id="password-feedback" style="font-size: 12px; float: right;"></span> -->
                            </label>

                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                            <!-- <i class="bi bi-eye-slash" id="togglePassword" style="
                              /*margin-top: -55px;*/
                              position: relative;
                              z-index: 1;"></i> -->

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- <div class="valid-feedback" id="password-valid">
                                Looks good!</span>
                            </div>
                            <div class="invalid-feedback">
                                <span id="#password-invalid">Please input password.</span>
                            </div> -->
                            <span id="password-feedback" style="font-size: 80%;"></span>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">
                                {{ __('Confirm Password') }}
                                
                            </label>
                            
                            <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please confirm password.
                            </div> -->
                            <span id="password-confirm-feedback" style="font-size: 80%;"></span>
                        </div>

                        <!-- <p class="description">The password must be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p> -->

                            <p class="description">By clicking Register, you read and agree with our <a href="#" style="text-decoration: underline;">Terms and Conditions</a> and <a href="#" style="text-decoration: underline;">Privacy Statement</a></p>

                        <button id="submit-button-register" type="submit" class="default-btn" style="margin-top: 5px">{{ __('Register') }}</button>

                        
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-8 col-sm-8 lost-your-password">
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="lost-your-password" style="float: right; font-size: 90%; margin-top: 15px">{{ __('Already has an account?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<!-- End Register Area -->
@endsection
@section('script-tag')
    <script>
        // const togglePassword = document.querySelector("#togglePassword");
        // const password = document.querySelector("#password");

        // togglePassword.addEventListener("click", function () {
        //     // toggle the type attribute
        //     const type = password.getAttribute("type") === "password" ? "text" : "password";
        //     password.setAttribute("type", type);
            
        //     // toggle the icon
        //     this.classList.toggle("bi-eye");
        // });

        // // prevent form submit
        // const form = document.querySelector("form");
        // form.addEventListener('submit', function (e) {
        //     e.preventDefault();
        // });

        $('#password, #password-confirm').on('keyup', function () {
            if ($('#password').val().length < 8 && $('#password-confirm').val().length < 8) {
                $('#password-feedback').html('Password must be at least eight characters long.').css({'color': '#dc3545'});
                $('#submit-button-register').prop('disabled', true);
                $('#submit-button-register').css('cursor', 'default');
                $('#password').css({'borderColor': '#dc3545'});
            } else {
                $('#password-feedback').html('Valid password').css('color', 'green');
                $('#submit-button-register').prop('disabled', false);
                $('#submit-button-register').css('cursor', 'pointer');
                $('#password').css({'borderColor': '#28a745'});

                if ($('#password').val() == $('#password-confirm').val()) {
                    $('#password-confirm-feedback').html('Password matched').css('color', 'green');
                    $('#submit-button-register').prop('disabled', false);
                    $('#password-confirm').css({'borderColor': '#28a745'});
                  } else {
                    $('#password-confirm-feedback').html('Password unmatched').css('color', '#dc3545');
                    $('#submit-button-register').prop('disabled', true);
                    $('#submit-button-register').css('cursor', 'default');
                    $('#password-confirm').css({'borderColor': '#dc3545'});
                  }
            }       
        });

        $(document).ready(function() {
            $("#register-form").validate({
                rules: {
                    name : {
                        required: true,
                        minlength: 3
                        },
                    
                    email: {
                        required: true,
                        email: true
                        }
                    // weight: {
                    //     required: {
                    //         depends: function(elem) {
                    //         return $("#age").val() > 50
                    //         }
                    //     },
                    //     number: true,
                    //     min: 0
                    // }
                }
            });
            // prevent form submit
            const form = document.querySelector("form");
            form.addEventListener('submit', function (e) {
                e.preventDefault();
            });
        });

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
