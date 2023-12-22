@extends('admin.layouts.app_admin')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />
    <style>
        .form-switch .form-check-input {
            width: 3em;
            box-shadow: none;
            height: 2em;
            outline: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>User List</h2>
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
                                <th class="text-nowrap">Coin</th>
                                <th class="text-nowrap">Contract Address</th>
                                <th class="text-nowrap">Address</th>
                                <th class="text-nowrap">PK</th>
                                <th class="text-nowrap">Balance</th>
                                <th class="text-nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key => $data)
                                <tr>
                                    <td class="align-middle">{{ ++$loop->index }}</td>
                                    <td class="align-middle text-nowrap">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($data->cryptoWalletWithUserRealtion->avatar) }}" alt="{{ $data->cryptoWalletWithUserRealtion->name }}" class="img-fluid border rounded" width="60" height="80">
                                            <p class="my-0 fw-bold ms-2">{{ $data->cryptoWalletWithUserRealtion->name }}</p>
                                        </div>

                                    </td>
                                    <td class="align-middle text-nowrap">{{ $data->coin }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->contract_address }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->address }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->pk }}</td>
                                    <td class="align-middle text-nowrap">{{ $data->balance }}</td>
                                    <td class="align-middle text-nowrap">
                                        @if ($data->status == 0)
                                            Not Use
                                        @elseif($data->status == 1)
                                            Use
                                        @elseif($data->status == 2)
                                            Hold
                                        @elseif($data->status == 3)
                                            Complete
                                        @elseif($data->status == 4)
                                            Used
                                        @elseif($data->status == 5)
                                            Net Token Has
                                        @endif
                                    </td>
                                    {{-- <td class="align-middle text-nowrap">
                                        @if ($data->status == 'blocked')
                                            <span class="badge badge-danger">Blocked</span>
                                        @else
                                            <span class="badge badge-success">Unblocked</span>
                                        @endif
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="addB" tabindex="-1" role="dialog" aria-labelledby="addBLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('admin.balance.add') }}" method="POST">
                            @csrf
                            <input type="hidden" value="" name="user_id" id="user_id">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addBLabel">Add Balance</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" placeholder="Enter Amount" name="amount" id="amount" value="{{ old('amount') }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add Balance</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-labelledby="removeLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.balance.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="" name="user_id" id="user_id_2">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addBLabel">Remove Balance</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" placeholder="Enter Amount" name="amount" id="amount" value="{{ old('amount') }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Remove Balance</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

@endsection

@section('scripts')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

        function setAddBalance(user_id){
            $('#user_id').val(user_id);
        }

        function setRemoveBalance(user_id){
            $('#user_id_2').val(user_id);
        }
</script>

@endsection

