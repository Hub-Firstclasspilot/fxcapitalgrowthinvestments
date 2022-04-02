@extends('admin.layouts.base')

@section('title')
    {!! "User Profile" !!}
@endsection

@section('body')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">User Profile</h4>
                    </div>
                    <div class="text-right col-md-7 align-self-center">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            @if($user->avatar)
                            <div class="user-bg" style="margin: 3% auto;"> <img width="100%" alt="user" src="{{ asset($user->avatar) }}"> </div>
                            @endif
                            <div class="card-body">
                                <!-- .row -->
                                <div class="text-center row m-t-10">
                                    <div class="col-md-12">
                                        <strong>Username</strong>
                                        <p>{{ $user->username }}</p>
                                    </div>
                                </div>
                                <hr>
                                <!-- /.row -->
                                <!-- .row -->
                                <div class="text-center row m-t-10">
                                    <div class="col-md-12"><strong>Email ID</strong>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="text-center row m-t-10">
                                    <div class="col-md-12"><strong>Phone</strong>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="text-center row m-t-10">
                                    <div class="col-md-6 border-right"><strong>Account Type</strong>
                                        <p>{{ $user->account_type }}</p>
                                    </div>
                                    @php
                                        switch ($user->account_currency) {
                                            case 'EUR':
                                                $symbol = "€";
                                                break;

                                            case 'GBP':
                                                $symbol = "£";
                                                break;

                                            case 'Bitcoin':
                                                $symbol = "₿";
                                                break;

                                            default:
                                                $symbol = "$";
                                                break;
                                        }
                                    @endphp
                                    <div class="col-md-6"><strong>Account Currency</strong>
                                        <p>{{ $symbol }} {{ $user->account_currency }}</p>
                                    </div>
                                </div>
                                <hr>
                                <br/>
                                {{-- <div class="row m-t-15">
                                    <div class="text-center col-md-4 col-sm-4">
                                        <p class="text-purple"><i class="ti-facebook"></i></p>
                                        <h1>258</h1> </div>
                                    <div class="text-center col-md-4 col-sm-4">
                                        <p class="text-blue"><i class="ti-twitter"></i></p>
                                        <h1>125</h1> </div>
                                    <div class="text-center col-md-4 col-sm-4">
                                        <p class="text-danger"><i class="ti-google"></i></p>
                                        <h1>140</h1> </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->firstname. " ".$user->lastname }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->phone }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-right"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->email }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Account Balance</strong>
                                        <br>
                                        <p class="text-muted">{{ $symbol }} {{ $user->account->balance }}</p>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="card-title p-b-10 border-bottom">Update Password</h4>
                                <form class="mt-3" method="POST" action="{{ route('update-password') }}">
                                    @csrf

                                    <div class="mb-2 form-group">
                                      <label for="old_password">Old Password</label>
                                      <input type="password" name="old_password" id="old_password" class="form-control @error('old_password')
                                       is-invalid
                                      @enderror" placeholder="Old Password">

                                      @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>

                                    <div class="mb-2 form-group">
                                      <label for="password">New Password</label>
                                      <input type="password" name="password" id="password" class="form-control @error('password')
                                       is-invalid
                                      @enderror" placeholder="New Password">

                                      @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>

                                    <div class="mb-2 form-group">
                                      <label for="confirm_password">Confirm Password</label>
                                      <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Confirm Password">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Column -->
        </div>
@endsection
