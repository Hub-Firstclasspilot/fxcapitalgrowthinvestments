@extends('admin.layouts.base')

@section('title')
    {!! "Make Withdawal" !!}
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
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#withdrawal" role="tab">Request Withdrawals</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#history" role="tab">Withdrawal History</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="withdrawal" role="tabpanel">
                                    <div class="card-body">
                                        <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                            <h2 class="alert-title">Request Withdrawal</h2>

                                            <span>
                                                <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                                </svg>
                                            </span>

                                            <strong class="ml-1">Note that the minimum amount to withdraw from your account is {{ $symbol }}1000. Contact support@fxcapitalgrowthinvestments.com for a more detailed overview. Ensure to provide your Withdrawal Code when contacting support. If you encounter any issue while withdrawing from your account, please contact support@fxcapitalgrowthinvestments.com for assistance.</strong>
                                        </div>

                                        <form action="{{ route('withdraw', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                              <label for="username">Username</label>
                                              <input type="text"
                                                class="form-control" name="username" id="username" value="{{ $user->username }}" readonly>
                                            </div>

                                            <div class="form-group">
                                              <label for="amount">Withdrawal Amount</label>
                                              <input type="number"
                                                class="form-control" name="amount" id="amount" aria-describedby="helpId" placeholder="" min="1000">
                                              <small id="helpId" class="form-text text-muted">Enter amount equal to or greater than $1000</small>
                                            </div>

                                            <div class="form-group">
                                              <label for="fund-code">Fund Code</label>
                                              <input type="text"
                                                class="form-control" name="fund_code" id="fund-code" value="{{ uniqid() }}" readonly>
                                            </div>

                                            <div class="form-group">
                                              <label for="type">Withdrawal Type</label>
                                              <select class="form-control" name="method" id="type">
                                                <option value="Bank transfer">Bank Transfer</option>
                                                <option value="Bitcoin">Bitcoin</option>
                                                <option value="Others">Others</option>
                                              </select>
                                            </div>

                                            <div class="form-group">
                                              <label for="description">Description</label>
                                              <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description (optional)"></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane" id="history" role="tabpanel">
                                    <div class="card-header">
                                        <h2 class="card-title">
                                            Withdrawal History
                                        </h2>

                                        <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                            <span>
                                                <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                                </svg>
                                            </span>

                                            <strong class="ml-1">The table Below shows all withdrawal requests. The Actions are given as pending for requests that are still being processed, approved for requests that have been completed and cancelled for failed withdrawals. Bank withdrawals can take up to 5 business days.</strong>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                         <table class="table" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($user->withdrawals as $withdrawal)
                                                <tr>
                                                    <td scope="row">{{ $withdrawal->amount }}</td>
                                                    <td>{{ date('jS M, Y', strtotime($withdrawal->created_at)) }}</td>
                                                    <td>{{ $withdrawal->method }}</td>
                                                    <td>{{ $withdrawal->description }}</td>
                                                    <td>{{ $withdrawal->status }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">You have made no withdrawal requests yet</td>
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


                <!-- ============================================================== -->
                <!-- End PAge Content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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
