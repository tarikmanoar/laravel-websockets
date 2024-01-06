@extends('auth.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8">
            <div class="card">
                <div class="card-body p-4">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h3 class="auth-title">@lang('Recover your password')</h3>
                    <p>@lang('Fill in your e-mail address below and we will send you an email with further
                        instructions.')</p>
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
                            <a href="{{route('login')}}">@lang('Return back to login')</a>
                        </div>
                        <div class="form-group">
                            <a href="{{route('register')}}">@lang('Don’t have an
                                account?')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
