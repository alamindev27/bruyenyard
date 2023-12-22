@extends('layouts.app')
@section('head')
<link rel='stylesheet' href="{{ asset('assets/frontend/css/pixel.css') }}">
<style>
    .menu-card:hover{
        border: 3px solid rgba(41, 255, 255, 0.992);
        box-shadow: rgba(41, 255, 255, 0.992) 0px 0px 25px;
        overflow: hidden;
    }
</style>
@endsection
@section('content')
<br><br><br><br><br>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
                    <div class="card-body">
                        <div class="wallet_message">
                            <p>Notice: Our Platform Exclusively Supports the <a href="https://www.binance.org/en/smartChain" target="_blank">Binance Smart Chain (BSC)</a> Network. (USDT)</p>
                            <p>For optimal performance and security, please ensure all transactions and interactions are conducted on the BSC network.</p>
                            <p>If you have any inquiries or require assistance, kindly reach out to our support team.</p>
                        </div>
                        <hr>
                        <form action="{{ route('user.cryptopayment.withdraw') }}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf

                            <h4 class="text-white">Available Coin: {{ auth()->user()->mining_bonus_amount }} =
                                    @php
                                        $totalStakedAmount = auth()->user()->mining_bonus_amount;
                                        $perDollarCoin = setting()->coin_buy_rate;
                                        $convertUSD = (1 / $perDollarCoin);
                                        $usd = ($totalStakedAmount * $convertUSD);
                                    @endphp
                                ${{ $usd }}
                            </h4>
                            <div class="row">
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="col-12 mt-3">
                                    <div class="form-group mb-2">
                                        <label for="address" class="text-white">Address</label>
                                        <input type="text" value="{{ old('address') }}" id="address" placeholder="Enter address" class="form-control" name="address">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group mb-2">
                                        <label for="amount" class="text-white">Amount</label>
                                        <input type="number" id="amount"  class="form-control" name="amount" placeholder="Enter Amount" value="{{ old('amount') }}">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('balanceError'))
                                            <span class="text-danger">{{ session('balanceError') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="form-group mb-2 text-center">
                                        <button type="submit" class="main-btn-2 main-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection
@section('scripts')



<script>
    function setUsdt(tl){
        var coin = $(tl).val();
        var rate = {{ setting()->coin_buy_rate }};
        var price = (coin / 500) * rate;
        $('#pay').val(price);
    }
  </script>
@endsection
