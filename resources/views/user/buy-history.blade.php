@extends('layouts.app')
@section('head')
<link rel='stylesheet' href="{{ asset('assets/frontend/css/pixel.css') }}">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
<style>
    .menu-card:hover{
        border: 3px solid rgba(41, 255, 255, 0.992);
        box-shadow: rgba(41, 255, 255, 0.992) 0px 0px 25px;
        overflow: hidden;
    }
</style>
@endsection
@section('content')
<br><br><br> <br> <br>

     <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped mb-0 text-white" id="datatable-tabletools">
                    <thead>
                        <tr>
                            <th class="text-nowrap">#</th>
                            <th class="text-nowrap">Date</th>
                            <th class="text-nowrap">Amount</th>
                            <th class="text-nowrap">Pay</th>
                            <th class="text-nowrap">Transaction ID</th>
                            <th class="text-nowrap">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $data)
                            <tr class="text-white">
                                <td class="align-middle text-nowrap">{{ ++$loop->index }}</td>
                                <td class="align-middle text-nowrap">{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                                <td class="align-middle text-nowrap"><b>{{ $data->amount }}</b> BRU COIN</td>
                                <td class="align-middle text-nowrap">${{ $data->pay }}</td>
                                <td class="align-middle text-nowrap">{{ $data->transaction_id }}</td>
                                <td class="align-middle text-nowrap text-capitalize">{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     </div>
@endsection
@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
    new DataTable('#datatable-tabletools', {
            fixedHeader: true,
            responsive: true,
            bPaginate: false
        });
</script> --}}
@endsection
