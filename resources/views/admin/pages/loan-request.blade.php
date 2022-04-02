@extends('admin.layouts.base')

@section('title')
    {!! "Request A Loan" !!}
@endsection

@section('body')
            <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Hello, {{ $user->username }}</h4>
                    </div>
                    <div class="text-right col-md-7 align-self-center">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Withdawals</li>
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
                @php
                    switch ($user->account->account_currency) {
                        case 'GBP':
                            $symbol = '£';
                            break;

                        case 'EUR':
                            $symbol = '€';
                            break;

                        case 'Bitcoin':
                            $symbol = '₿';
                            break;

                        default:
                            $symbol = '$';
                            break;
                    }

                    $deposits = [];
                    /*
                    if ($user->deposits->toArray()) {
                        foreach ($user->desposits->toArray() as $deposit) {
                        $deposits += $deposit->amount;
                    }
                    }
                    if ($user->withdrawals->toArray()) {
                        $withdrawals = count($user->withdawals->toArray());
                    } */
                @endphp
                @include('admin.partials.widgets')
                
                <div class="mt-5 row">
                    <!-- Column -->
                    <div class="mx-auto col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="text-white card-header bg-primary">
                                <h2 class="card-title">Personal info about yourself</h2>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('request-loan', $user->id) }}" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="name">Fullname</label>
                                    <input type="text"
                                    class="form-control" name="fullname" id="name" value="{{ $user->firstname." ".$user->lastname }}" readonly>
                                </div>

                                <input type="hidden" value="{{ uniqid() }}" name="request_code">

                                <div class="form-group">
                                    <label for="duration">Duration of loan (in months)</label>
                                    <input type="number"
                                    class="form-control" name="loan_duration" id="duration" placeholder="Time period for the loan (eg. 2 months)">
                                </div>

                                <div class="form-group">
                                    <label for="amount">Loan Amount ({{ $symbol }})</label>
                                    <input type="number"
                                    class="form-control" name="loan_amount" id="amount" placeholder="Amount">
                                </div>

                                <div class="form-group">
                                    <label for="reason">Reason for the loan</label>
                                    <textarea class="form-control" name="loan_reason" id="reason" rows="3" placeholder="Why do you want the loan?"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                <!-- Column -->
                </div>

            </div>
            </div>

@endsection
