@extends('admin.layouts.app_admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>All Partner</h2>
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
                                <th class="text-nowrap">Link</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $key => $partner)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle">
                                        <a href="{{ $partner->link }}">
                                            <img src="{{ asset($partner->logo) }}" alt="">
                                        </a>
                                    </td>

                                    <td class="align-middle"><a href="{{ $partner->link }}">{{ $partner->link }}</a></td>
                                    <td class="align-middle">
                                        <form action="{{ route('partner.destroy', $partner->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('partner.edit', $partner->id) }}" class="btn btn-info btn-sm d-inline">Edit</a>
                                            <button onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
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

