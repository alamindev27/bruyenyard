@extends('admin.layouts.app_admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
    <title>Counter List</title>
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Counter List</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th class="text-nowrap">#</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Circle Amount</th>
                                <th class="text-nowrap">Bonus Amount</th>
                                <th class="text-nowrap">Start Date</th>
                                <th class="text-nowrap">End Date</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($counters as $key => $counter)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>

                                    <td class="align-middle"><b>{{ $counter->name }}</b></td>

                                    <td class="align-middle">{{ $counter->circle_amount }}%</td>
                                    <td class="align-middle">{{ $counter->bonus_amount }}% Bonus</td>
                                    <td class="align-middle">{{ Carbon\Carbon::parse($counter->start_date)->format('d M Y') }}</td>
                                    <td class="align-middle">{{ Carbon\Carbon::parse($counter->end_date)->format('d M Y') }}</td>
                                    <td class="align-middle">
                                        <form action="{{ route('counter.destroy', $counter->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('counter.edit', $counter->id) }}" class="btn btn-info btn-sm d-inline">Edit</a>
                                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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

