@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="card-body">
                @if (session('sent'))
                    <div class="alert alert-success mb-3" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                <a href="{{ route('index') }}"><img src="{{ asset('images/logos/logo.png') }}" width="80" alt="" class="img-fluid mb-4"></a>

                <h4 class="mb-3 f-w-400">{{ __('Verify Your Email Address') }}</h4>
                <h4 class="mb-3 f-w-400">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                </h4>
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                </form>

            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="{{ asset('auth/images/auth-bg.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection