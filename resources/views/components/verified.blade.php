@if (auth()->user()->email_verified_at)
    <div class="alert alert-success" role="alert">
      Your account has been verified and you can start trading!
    </div>       
@else
    <div class="alert alert-danger" role="alert">
      Your account has not been verified! 
    </div>
@endif