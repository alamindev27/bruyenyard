@extends('admin.layouts.app_admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Feature Ariea</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th class="text-nowrap">#</th>
                                <th class="text-nowrap">Icon</th>
                                <th class="text-nowrap">Heading</th>
                                <th class="text-nowrap">Text</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key => $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">
                                        <img src="{{ asset($data->icon) }}" alt="" style="width:80px">
                                    </td>
                                    <td class="align-middle">{{ $data->heading }}</td>
                                    <td class="align-middle">{{ $data->text }}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.feature.edit', $data->id) }}" class="btn btn-info btn-sm d-inline">Edit</a>
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

@section('scripts1')

@endsection

@section('scripts2')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
    new DataTable('#datatable-tabletools', {
            fixedHeader: true,
            responsive: true,
            // bPaginate: false
            'iDisplayLength': 100
        });
</script>

@endsection

