@extends('layouts.app')

@section('content')

<body class="sign-in" oncontextmenu="return false;">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div >
                                    <img src="{{ url('design/style') }}/images/logo2.jpeg"  width="300" height="80"alt="" class="ml-4">
                                    <br>
                                    <br>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="p-5">
                                    <p>Techvisor, is a professional consulting web application specially in IT fields
                                        as it provides a rich community of professionals that can solve users’ problems
                                        or consulting them in many different IT fields</p>
                                        </div>
                                <!--cm-logo end-->
                                <img src="{{ url('design/style') }}/images/cm-main-img.png" alt="">
                            </div>
                            <!--cmp-info end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <div class="login-sec">

                                    <div class="card-header sign_in_sec current" id="tab-1">
                                        <h3>{{ __('Login') }}</h3>
                                    </div>
                                    <div class="main-section">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group row mr-5">
                                                    <label for="email"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mr-5">
                                                    <label for="password"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-8">
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row mr-5">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="remember" id="remember">
                                                                {{ old('remember') ? 'checked' : '' }}

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mr-5">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary"
                                                            style="color: #ffffff; font-size: 16px; background-color: #e44d3a; padding: 10px 27px; border: 0;font-weight: 500;">
                                                            {{ __('Login') }}
                                                        </button>
                                                        <br>
                                                        <br>

                                                        @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                                        style="color: #ffffff; font-size: 16px; background-color: #e44d3a; padding: 7px 20px; border: 0;font-weight: 500;">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>












    </div>





    </div>
    <!--signin-pop end-->
    </div>
    <!--signin-popup end-->



    @endsection
