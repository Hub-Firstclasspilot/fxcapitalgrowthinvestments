@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" style="position: relative;">
                    @csrf
                <a href="{{ route('index') }}"><img src="{{ asset('images/logos/logo.png') }}" width="80" alt="" class="img-fluid mb-4"></a>
                <div style="position: absolute; top: 23px; right:2px; display: flex; justify-content: space-between; width:20%;">
                    <img src="{{ asset('images/logos/bitcoin-single.png') }}" style="width: 45%; height: 55%; margin-top:6%;">
                    <img src="{{ asset('images/logos/ethereum.png') }}" style="width: 35%; height: 40%;">
                </div>

                <h4 class="mb-3 f-w-400">Login into your account</h4>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-mail"></i></span>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email"value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-left mt-2">
                    <div class="checkbox checkbox-primary d-inline">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="checkbox-fill-a1" class="cr"> Remember me</label>
                    </div>
                </div>
                <button class="btn btn-primary mb-4" name="loginbtn">Login</button>
                <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
                <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
                </form>
                
                <div style="width: 90%; margin: 5% auto;">
                    <img src="{{ asset('images/logos/pay-strip.jpeg') }}" style="width:80%;">
                </div>

            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="{{ asset('auth/images/auth-bg.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
