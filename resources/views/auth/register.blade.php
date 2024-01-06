@extends('auth.auth')
@section('content')
<div class="authfy-reg">
    <!-- panel-signup start -->
    <div class="authfy-panel panel-signup text-center active">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="authfy-heading">
                    <h3 class="auth-title">@lang('Sign up for free!')</h3>
                </div>
                <form name="signupForm" class="signupForm" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="text" class="form-control" name="name" placeholder="@lang('Full name')"
                            value="{{old('name')}}">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <input type="text" class="form-control" name="username" placeholder="@lang('Username')"
                            value="{{old('username')}}">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}"
                            placeholder="@lang('Email address')">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <div class="pwdMask">
                            <input type="password" class="form-control" name="password" placeholder="@lang('Password')">
                            <span class="focus-input"></span>
                            <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                    </div>
                    <div class="form-group wrap-input">
                        <div class="">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="@lang('Confirm Password')">
                            <span class="focus-input"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="term-policy text-muted small">@lang('I agree to the') <a href="/pp">@lang('privacy
                                policy')</a> @lang('and') <a href="/tos">@lang('terms of service')</a>.</p>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">@lang('Sign up with
                            email')</button>
                    </div>
                </form>
                <a {{-- class="lnk-toggler" data-panel=".panel-login" --}} href="{{route('login')}}">@lang('Already have
                    an account?')</a>
            </div>
        </div>
    </div> <!-- ./panel-signup -->
</div> <!-- ./authfy-login -->
@endsection
