@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Conter</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('counter.update', $counter->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            @method('PATCH')
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') ?? $counter->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="circle_amount">Circle Amount</label>
                                        <input type="text" class="form-control" id="circle_amount" placeholder="Enter circle_amount" name="circle_amount" value="{{ old('circle_amount') ?? $counter->circle_amount }}">
                                        @error('circle_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="bonus_amount">Bonus Amount</label>
                                        <input type="text" class="form-control" id="bonus_amount" placeholder="Enter bonus_amount" name="bonus_amount" value="{{ old('bonus_amount') ?? $counter->bonus_amount }}">
                                        @error('bonus_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" placeholder="Enter start_date" name="start_date" value="{{ old('start_date') ?? $counter->start_date }}">
                                        @error('start_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control" id="end_date" placeholder="Enter end_date" name="end_date" value="{{ old('end_date') ?? $counter->end_date }}">
                                        @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Save & Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
