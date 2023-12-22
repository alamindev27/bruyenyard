@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Presale Raise</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('presale-raise.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="token_allocation">Token Allocation	<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="token_allocation" placeholder="Enter token allocation" name="token_allocation" value="{{ old('token_allocation') }}">
                                        @error('token_allocation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="allocation_percentage">Allocation % <span class="text-danger">*</span></label>
                                        <input type="number" step="0.001" min="0.001" class="form-control" id="allocation_percentage" placeholder="Enter allocation percentage" name="allocation_percentage" value="{{ old('allocation_percentage') }}">
                                        @error('allocation_percentage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="allocation_amount">Allocation Amount % <span class="text-danger">*</span></label>
                                        <input type="number" step="0.001" min="0.001" class="form-control" id="allocation_amount" placeholder="Enter allocation amount" name="allocation_amount" value="{{ old('allocation_amount') }}">
                                        @error('allocation_amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="token">Token </label>
                                        <input type="number" step="0.001" min="0.001" class="form-control" id="token" placeholder="Enter allocation amount" name="token" value="{{ old('token') }}">
                                        @error('token')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="discount_price">Discount Price</label>
                                        <input type="number" step="0.001" min="0.001" class="form-control" id="discount_price" placeholder="Enter discount amount" name="discount_price" value="{{ old('discount_price') }}">
                                        @error('discount_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="USD_value">USD Value</label>
                                        <input type="number" step="0.001" min="0.001" class="form-control" id="USD_value" placeholder="Enter USD value" name="USD_value" value="{{ old('USD_value') }}">
                                        @error('USD_value')
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
