@extends('admin.layouts.app_admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Pending Sell List</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th class="text-nowrap">#</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Amount</th>
                                <th class="text-nowrap">USDT Amount</th>
                                <th class="text-nowrap">Currency</th>
                                <th class="text-nowrap">Wallet Address</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key => $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>

                                    <td class="align-middle">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($data->sellCoinWithUserRelation->avatar) }}" alt="{{ $data->sellCoinWithUserRelation->name }}" class="img-fluid rounded-circle border me-3" width="50" height="50">
                                            <div>
                                                <span class="fw-bold d-block fw-bold">
                                                    <span class="d-block">{{ $data->sellCoinWithUserRelation->name }}</span>
                                                    <span class="d-block">ID: {{ $data->sellCoinWithUserRelation->profile_id }}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $data->amount }}</td>
                                    <td class="align-middle">${{ $data->usd_amount }}</td>
                                    <td class="align-middle">{{ $data->withdraw_coin_name }}</td>
                                    <td class="align-middle">{{ $data->wallet_address }}</td>
                                    <td class="align-middle">Pending</td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.coinSell.status.update.approved', $data->id) }}" class="btn btn-sm btn-success">Approved</a>
                                        <a href="{{ route('admin.coinSell.status.update.rejected', $data->id) }}" class="btn btn-sm btn-danger">Rejected</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
    new DataTable('#datatable-tabletools', {
            fixedHeader: true,
            responsive: true,
            // bPaginate: false
        });
</script>

@endsection

