@extends('admin.layouts.base')

@section('title')
{!! "Trade History" !!}
@endsection

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/meedia/css/dataTables.bootstrap4.css') }}">
@endpush

@section('body')
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Trade History</h4>
                </div>
                <div class="text-right col-md-7 align-self-center">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Trade History</li>
                        </ol>
                    </div>
                </div>
            </div>

            @include('admin.partials.widgets')

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trade History</h4>

                     <div class="mb-2 text-white card-header bg-primary">
                            <h2 class="card-title">Trade History</h2>

                            <div class="justify-between alert alert-info d-flex align-center" role="alert">
                                <span>
                                    <svg aria-hidden="true" focusable="false" width="30" height="30" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                                    </svg>
                                </span>

                                <strong class="ml-1">The table Below shows a list all active tradings on the account. Please note that all tradings are not visible here, the table contains randomly selected trades and should not be used to measure profit.</strong>
                            </div>
                        </div>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
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
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                    select: true,
                    searchable: true,
                    paginate: true,
                });
        });
    </script>
@endpush
