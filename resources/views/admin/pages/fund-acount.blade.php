@extends('admin.layouts.base')

@section('title')
{!! "Fund Account" !!}
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/media/css/dataTables.bootstrap4.css') }}">
@endpush

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
                                <li class="breadcrumb-item active">Fund Account</li>
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
                @include('admin.partials.widgets')
                <div class="mt-5 row">
                <!-- Column -->
                <div class="mx-auto col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#bankTransfer" role="tab">Bank Transfer</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bitcoin" role="tab">Bitcoin</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#card" role="tab">Credit Card</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#others" role="tab">Others</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#history" role="tab">Fund History</a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="bankTransfer" role="tabpanel">
                                <div class="card-body">
                                    <h2 clas="card-title">Bank Transfer</h2>

                                    <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                        <span>
                                            <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                            </svg>
                                        </span>

                                        <strong class="ml-1">Note that the minimum amount to fund account with is $300. Contact support@fxcapitalgrowthinvestments.com for a more detailed overview. Your account will be credited once payment is confirmed</strong>
                                    </div>

                                    <form action="{{ route('bank-transfer', $user->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="bt-username">Firstname</label>
                                            <input type="text"
                                            class="form-control" name="username" id="bt-username" aria-describedby="helpId" readonly value="{{ $user->username }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number"
                                            class="form-control" name="amount" id="amount" min="300">
                                        </div>

                                        <div class="form-group">
                                            <label for="bt-fund-code">Fund Code</label>
                                            <input type="text"
                                            class="form-control" name="fund_code" id="bt-fund-code" readonly value="{{ uniqid() }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="bt-description">Description</label>
                                            <textarea class="form-control" name="description" id="bt-description" rows="3" placeholder="Enter description (optional)"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
                                    </form>

                                </div>
                            </div>

                            <div class="tab-pane" id="bitcoin" role="tabpanel">
                                <div class="card-body">
                                    <h2 clas="card-title">Bitcoin</h2>

                                    <div class="justify-between alert alert-info d-flex" role="alert">
                                        <span>
                                            <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                            </svg>
                                        </span>

                                        <strong class="ml-1">Note that the minimum amount to fund account with is $1000. Contact support@fxcapitalgrowthinvestments.com for a more detailed overview. Your account will be credited once payment is confirmed</strong>
                                    </div>

                                    <ul class="text-info">
                                        <li>Copy the wallet address provided below.</li>
                                        <li>Make payment from your Bitcoin wallet. (Send the equivalent bitcoin amount of the amount you wish to invest).</li>
                                        <li>Provide your transaction hash ID. This can be gotten from your wallet after payment.</li>
                                        <li>Click on Submit.</li>
                                    </ul>

                                    <p class="mt-3">
                                        You account will be credited once your payment is confirmed.<br>
                                        NOTE: if you are having trouble findine your Transaction Hash ID, use the last 10 digits of your wallet address as the Transaction Hash ID.<br>
                                        If you encounter problems whilr funding your account, contact <a class="nav-link" href="mailto:support@fxcapitalgrowthinvestments.com">support@fxcapitalgrowthinvestments.com</a>
                                    </p>

                                    <hr>

                                    <form method="POST" action="{{ route('pay-bitcoin', $user->id) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="btc-username">Username</label>
                                            <input type="text"
                                            class="form-control" name="username" id="btc-username" value="{{ $user->username }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="btc-amount">Amount</label>
                                            <input type="number"
                                            class="form-control" name="amount" id="btc-amount" aria-describedby="helpId" min="1000">
                                            <small id="helpId" class="form-text text-muted">Enter amount greater than 1000</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="btc-bitcoin">Send Payment to: Bitcoin Payment</label>

                                            <div id="bitcoin">
                                            <p id="walletAddress" class="text-info">
                                                bc1qhedhmymps9k22jsmslzyjrjtyh3x4jpscne6sp
                                            </p>
                                            </div>

                                            <button onclick="copyText()" type="button" class="btn btn-info btn-sm">
                                                Copy Address
                                            </button>

                                            <script>
                                                let body = document.getElementsByTagName('body')[0];
                                                let address = document.getElementById('walletAddress').innerText;

                                                function copyText()
                                                {
                                                    let tempInput = document.createElement('INPUT');
                                                    body.appendChild(tempInput);
                                                    tempInput.setAttribute('value', address)
                                                    tempInput.select();
                                                    tempInput.setSelectionRange(0, 99999);
                                                    document.execCommand('copy');
                                                    body.removeChild(tempInput);
                                                    alert('Address copied!');
                                                }
                                            </script>

                                        </div>

                                        <div class="form-group">
                                            <label for="btc-wallet-address">Senders Wallet Address</label>
                                            <input type="text"
                                            class="form-control" name="wallet_address" id="btc-wallet-address" placeholder="Enter you wallet address">
                                        </div>

                                        <div class="form-group">
                                            <label for="btc-hash-id">Transaction Hash ID:</label>
                                            <input type="text"
                                            class="form-control" name="hash_id" id="btc-hash-id" aria-describedby="helpId" placeholder="Enter HASH ID">
                                            <small id="helpId" class="form-text text-muted">This is gotten from your wallet after successful transaction</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="btc-description">Description</label>
                                            <textarea class="form-control" name="description" id="btc-description" rows="3" placeholder="Enter description (optional)"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-sm">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane" id="card" role="tabpanel">
                                <div class="card-body">
                                    <h2 clas="card-title">Credit Cards</h2>

                                    <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                        <span>
                                            <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                            </svg>
                                        </span>

                                        <strong class="ml-1">Note that the minimum amount to fund account with is $1000. Contact support@forexhub.com for a more detailed overview. Your account will be credited once payment is confirmed</strong>
                                    </div>

                                    <form action="{{ route('card-payment', $user->id) }}" method="POST" class="card-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="cdusername">Username</label>
                                            <input type="text"
                                            class="form-control" name="username" id="cdusername" value="{{ $user->username }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="cdamount">Amount</label>
                                            <input type="number"
                                            class="form-control" min="300" name="amount" id="cdamount" aria-describedby="helpId">
                                            <small id="helpId" class="form-text text-muted">Amount must be greater than $1000</small>
                                        </div>

                                         <div class="row">
                                            <div class="card-wrapper"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="card-name">Card Holder Name</label>
                                                    <input type="text"
                                                    class="form-control" name="card_holder_name" id="card-name">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group" id="card-number-field">
                                                    <label for="card-number">Card Number</label>
                                                    <input type="text"
                                                    class="form-control" name="number" id="card-number">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="card-expiry">Card Expiry Date</label>
                                                    <input type="text"
                                                    class="form-control" name="expiry" id="card-expiry">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="card-cvc">CVC</label>
                                                    <input type="text"
                                                    class="form-control" name="cvc" id="card-cvc" max="3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="card-pin">Card Pin</label>
                                        <input type="password"
                                            class="form-control" name="card_pin" id="card-pin" max="4">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description (optional)"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="history" role="tabpanel">
                                <div class="card-body">
                                    <h2 clas="card-title">Fund History</h2>

                                    <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                        <span>
                                            <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                            </svg>
                                        </span>

                                        <strong class="ml-1">The table below contains a list of all Fund Transfers Requests</strong>
                                    </div>

                                     <table class="table table-striped table-bordered" style="width:100%" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Fund Amount($)</th>
                                                <th>Fund Code</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$500</td>
                                                <td>5907</td>
                                                <td>13th Jan 2021</td>
                                                <td>Transfer</td>
                                                <td>
                                                    <span class="text-white badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>$600</td>
                                                <td>4657</td>
                                                <td>22nd Jan 2021</td>
                                                <td>Transfer</td>
                                                <td>
                                                    <span class="text-white badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            </div>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('assets/js/card.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>
    <script>
        // $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
        });
    </script>
    <script>
       var card = new Card({
            // a selector or DOM element for the form where users will
            // be entering their information
            form: '.card-form', // *required*
            // a selector or DOM element for the container
            // where you want the card to appear
            container: '.card-wrapper', // *required*

            formSelectors: {
                numberInput: 'input[name="number"]', // optional — default input[name="number"]
                expiryInput: 'input[name="expiry"]', // optional — default input[name="expiry"]
                cvcInput: 'input[name="cvc"]', // optional — default input[name="cvc"]
                nameInput: 'input[name="card_holder_name"]' // optional - defaults input[name="name"]
            },

            width: 200, // optional — default 350px
            formatting: true, // optional - default true

            // Strings for translation - optional
            messages: {
                validDate: 'valid\ndate', // optional - default 'valid\nthru'
                monthYear: 'mm/yyyy', // optional - default 'month/year'
            },

            // Default placeholders for rendered fields - optional
            placeholders: {
                number: '•••• •••• •••• ••••',
                name: 'Full Name',
                expiry: '••/••',
                cvc: '•••'
            },

            masks: {
                cardNumber: '-' // optional - mask card number
            },

            // if true, will log helpful messages for setting up Card
            debug: false // optional - default false
        });
    </script>
@endpush
