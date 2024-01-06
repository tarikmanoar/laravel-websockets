@extends('auth.auth')
@section('content')
<!-- authfy-login start -->
<div class="authfy-login">
    <!-- panel-login start -->
    <div class="authfy-panel panel-login text-center active">
        <div class="authfy-heading">
            <h3 class="auth-title">@lang('Login to your account</h3>
            <p>Don’t have an account?') <a {{-- class="lnk-toggler" data-panel=".panel-signup" --}}
                    href="{{route('register')}}">@lang('Sign Up Free!')</a></p>
        </div>

        <div class="row  justify-content-center">
            <div class="col-lg-12 col-sm-12">
                <form name="loginForm" class="loginForm" action="{{ route('login') }}" autocomplete="off" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="text" class="form-control email" name="email"
                            value="{{ old('username') ?: old('email') }}" autofocus
                            placeholder="@lang('Email address')">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <div class="pwdMask">
                            <input type="password" class="form-control password @error('password') is-invalid @enderror"
                                name="password" placeholder="@lang('Password')">
                            <span class="focus-input"></span>
                            <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                    </div>
                    <div class="row remember-row">
                        <div class="col-lg-6 col-sm-6">
                            <label class="checkbox text-left">
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember"><span
                                    class="label-text">@lang('Remember me')</span>
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="col-lg-6 col-sm-6">
                            <p class="forgotPwd">
                                <a class="lnk-toggler" data-panel=".panel-forgot"
                                    href="{{ route('password.request') }}">@lang('Forgot
                                    password?')</a>
                            </p>
                        </div>
                        @endif
                    </div> <!-- ./remember-row -->
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">@lang('Login with
                            email')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="authfy-panel panel-forgot">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="authfy-heading">
                    <h3 class="auth-title">@lang('Recover your password')</h3>
                    <p>@lang('Fill in your e-mail address below and we will send you an email with further
                        instructions.')</p>
                </div>
                <form name="forgetForm" class="forgetForm" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" placeholder="Email address">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">@lang('Recover your
                            password')</button>
                    </div>

                    <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-login" href="{{route('login')}}">@lang('Already have
                            an
                            account?')</a>
                    </div>
                    <div class="form-group">
                        <a {{-- class="lnk-toggler" data-panel=".panel-signup" --}}
                            href="{{route('register')}}">@lang('Don’t have an
                            account?')</a>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- ./panel-forgot -->
</div> <!-- ./authfy-login -->
@endsection
