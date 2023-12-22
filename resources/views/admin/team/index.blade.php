@extends('admin.layouts.app_admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Team List</h2>
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
                                <th class="text-nowrap">Designation</th>
                                <th class="text-nowrap">Social Activity</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $key => $team)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>

                                    <td class="align-middle">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($team->image) }}" alt="{{ $team->name }}" class="img-fluid rounded-circle border me-3" width="50" height="50">
                                            <div>
                                                <span class="fw-bold d-block fw-bold">{{ $team->name }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle">{{ $team->designation }}</td>
                                    <td class="align-middle">
                                        <div class="d-inline">
                                            @if ($team->fb)
                                                <a href="{{ $team->fb }}" style="font-size: 30px">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            @endif
                                            @if ($team->li)
                                                <a href="{{ $team->li }}" style="font-size: 30px">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            @endif
                                            @if ($team->ins)
                                                <a href="{{ $team->ins }}" style="font-size: 30px">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            @endif
                                            @if ($team->wa)
                                                <a href="https://wa.me/+88{{ $team->wa }}" style="font-size: 30px">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            @endif
                                            @if ($team->git)
                                                <a href="{{ $team->git }}" style="font-size: 30px">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('team.destroy', $team->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('team.edit', $team->id) }}" class="btn btn-info btn-sm d-inline">Edit</a>
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

