@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <a href="{{ route('index') }}"><img src="{{ asset('images/logos/logo.png') }}" width="80" alt="" class="img-fluid mb-4"></a>
                        <h4>{{ __('Reset Password') }}</h4>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="{{ asset('auth/images/auth-bg.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection

