@extends('admin.layouts.base')

@section('title')
    {!! "Place A Trade" !!}
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#placeTrade" role="tab">Place Trade</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#myTrades" role="tab">My Trades</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="placeTrade" role="tabpanel">
                                    <div class="card-header">
                                        <h2 clas="card-title">Place Trade</h2>

                                        <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                            <span>
                                                <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                                </svg>
                                            </span>

                                            <strong class="ml-1">Note that the minimum amount to fund account with is $300. Contact support@forexhub.com for a more detailed overview. Your account will be credited once payment is confirmed</strong>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h2 class="p-2 text-white card-title bg-primary">Place a trade</h2>

                                        <form action="{{ route('place-trade', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                              <label for="username">Username</label>
                                              <input type="text"
                                                class="form-control" name="username" id="username" value="{{ $user->username }}" readonly>
                                            </div>

                                            <div class="form-group">
                                              <label for="amount">Trade Amount({{ $symbol }}) : <span class="text-muted">minimum of {{ $symbol }}10</span> </label>
                                              <input type="number"
                                                class="form-control" name="trade_amount" id="amount" placeholder="Enter Amount">
                                            </div>

                                            <input type="hidden" name="trade_id" value="{{ Str::uuid() }}" >

                                            <div class="form-group">
                                              <label for="asset-name">Asset Name: <small> Click <a class="btn btn-danger btn-sm" target="_blank" href="https://www.tradingview.com/markets/">Here</a> to see ALL</small> </label>
                                              <input type="text"
                                                class="form-control" name="trade_asset_name" id="asset-name" placeholder="Enter Asset Name">
                                            </div>

                                            <div class="form-group">
                                              <label for="asset-category">Select Asset Category</label>
                                              <select class="form-control" name="trade_asset_category" id="asset-actegory">
                                                <option value="all">All</option>
                                                <option value="stock">Stock</option>
                                                <option value="future">Future</option>
                                                <option value="forex">Forex</option>
                                                <option value="cfd">CFD</option>
                                                <option value="cryptocurrency">Cryptocurrency</option>
                                                <option value="index">Index</option>
                                                <option value="economy">Economy</option>
                                                <option value="others">Others</option>
                                              </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                        </form>

                                    </div>
                                </div>

                                <div class="tab-pane" id="myTrades" role="tabpanel">
                                    <div class="card-body">
                                        <h2 clas="card-title text-white bg-primary p-2">My Recent Trades</h2>

                                        <div class="justify-between alert alert-info d-flex" role="alert">
                                            <span>
                                                <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                                </svg>
                                            </span>

                                            <strong class="ml-1">Note that the minimum amount to fund account with is $300. Contact support@forexhub.com for a more detailed overview. Your account will be credited once payment is confirmed</strong>
                                        </div>

                                         <table class="table table-striped table-bordered" style="width:100%" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Trade Amount($)</th>
                                                    <th>Trade Asset</th>
                                                    <th>Trade Category</th>
                                                    <th>Trade Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($user->trades as $trade)
                                                    <tr>
                                                        <td scope="row">{{ $trade->amount }}</td>
                                                        <td>{{ $trade->asset }}</td>
                                                        <td>{{ $trade->asset_category }}</td>
                                                        <td>{{ date('jS M, Y', strtotime($trade->created_at)) }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">You have not placed any trades yet</td>
                                                    </tr>
                                                @endforelse
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
@endsection

@push('scripts')
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
@endpush
