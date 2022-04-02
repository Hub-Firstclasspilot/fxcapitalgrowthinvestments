@extends('layouts.auth')

@push('stylesheets')
    <!-- filepond -->
    <link rel="stylesheet" href="{{ asset('vendor/filepond/filepond.css') }}">
@endpush

@section('content')
<div class="card">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="card-body">
                <img src="{{ asset('images/logos/logo.png') }}" alt="" class="mb-4 img-fluid" width="80">
                <h4 class="mb-3 f-w-400">Sign up for a new account</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="mb-2 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control @error('username')
                    is-invalid
                    @enderror" placeholder="Username" name="username" required/>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control @error('firstname')
                    is-invalid
                    @enderror" placeholder="First Name" name="firstname" required/>

                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control @error('lastname')
                    is-invalid
                    @enderror" placeholder="Last Name" name="lastname" required/>

                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-mail"></i></span>
                    </div>
                    <input type="email" class="form-control @error('email')
                    is-invalid
                    @enderror" placeholder="Email address" name="email" required/>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-phone"></i></span>
                    </div>
                    <input type="text" class="form-control @error('phone')
                    is-invalid
                    @enderror" placeholder="phone" name="phone" required/>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                    </div>
                    <input type="password" class="form-control @error('password')
                    is-invalid
                    @enderror" placeholder="Password" name="password" required/>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required/>
                </div>
                <div class="mb-3 form-group">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control @error('country')
                    is-invalid
                    @enderror">
                        <option>Select Country</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                        @endforeach
                    </select>

                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mx-auto mb-4 row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="accounttype">Account Type<span style="color: red;">*</span></label>
                            <select class="form-control @error('account_type')
                            is-invalid
                            @enderror" name="account_type" id="accounttype">
                              <option value="">Account Type</option>
                              <option value="Basic">Basic 1000 - 5000</option>
                              <option value="Standard">Standard 10,000 - 50,000</option>
                              <option value="Premium">Premium 25,000 - 35,000</option>
                            </select>

                            @error('account_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="accountcurrency">Account Currency<span style="color: red;">*</span></label>
                            <select class="form-control @error('account_currency')
                            is-invalid
                            @enderror" name="account_currency" id="accountcurrency">
                              <option value="">Select Account Currency</option>
                              <option value="USD">$ USD</option>
                              <option value="EUR">€ EUR</option>
                              <option value="GBP">£ GBP</option>
                              <option value="Bitcoin">₿ Bitcoin</option>
                            </select>

                            @error('account_currency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                    </div>
                </div>
                <div class="mx-auto mb-4 row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label for="id">Upload a valid photo ID</label>
                          <input type="file" name="avatar" id="id" required>
                        </div>
                    </div>
                    
                      @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-2 text-left form-group">
                    <div class="checkbox checkbox-primary d-inline">
                        <input type="checkbox" name="promotion" id="sms_market" value="true" checked>
                        <label for="checkbox-fill-2" class="cr">I would like to receive pormotional emails about products, services and special offers.</label>
                    </div>
                </div>
                <div class="mt-2 text-left form-group">
                    <div class="checkbox checkbox-primary d-inline">
                        <input type="checkbox" name="sms_market" id="sms_market" value="true" checked>
                        <label for="checkbox-fill-2" class="cr"> I would like to receive market news by sms</label>
                    </div>
                </div>
                <div class="mt-2 text-left form-group">
                    <div class="checkbox checkbox-primary d-inline">
                        <input type="checkbox" name="t_and_c" id="t_and_c"  value="true" checked>
                        <label for="checkbox-fill-2" class="cr">I have read and again to Terms and Condition and Privacy Policy</label>
                    </div>
                </div>
                <button class="mb-4 btn btn-primary" type="submit" name="snbtn">Sign up</button>
                <p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Log in</a></p>
                </form>

            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="{{ asset('auth/images/auth-bg.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- filepond -->
    <script src="{{ asset('vendor/filepond/filepond.js') }}"></script>
    <script>
        // Get a reference to the file input element
       const inputElement = document.querySelector('input[type="file"]');
   
       // Create a FilePond instance
       const pond = FilePond.create(inputElement);
       FilePond.setOptions({
           server: {
               url: '/upload',
               headers: {
                   'X-CSRF-TOKEN' : "{{ csrf_token() }}"
               }
           }
       });
       </script>
@endpush