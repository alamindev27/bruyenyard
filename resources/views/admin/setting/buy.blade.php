@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Coin Price</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.coinbuy.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="coin_buy_rate">Buy Price (<span class="text-danger">$1 = {{ setting()->coin_buy_rate }} COIN</span>)</label>
                                        <input type="text" class="form-control" id="coin_buy_rate" placeholder="Enter buy price" name="coin_buy_rate" value="{{ old('coin_buy_rate') ?? setting()->coin_buy_rate }}">
                                        @error('coin_buy_rate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Save & Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
