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
                        <h2 class="text-center">PHASET PRE-SALE IS LIVE</h2>
                        <hr>
                        <form action="{{ route('user.coin.buy') }}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label for="wallet" class="text-white">Select Netwark <span class="text-danger">*</span></label>
                                        <select name="wallet" id="wallet" class="form-control" onchange="setWalletAddres(this)">
                                            <option value="">Seelct Wallet</option>
                                            @foreach ($datas as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('wallet')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-group mb-2">
                                        <label for="myInput" class="text-white">Address</label>
                                        <div class="d-flex">
                                            <input type="text" readonly value="Select Netwark" id="myInput" class="form-control" name="address">
                                            <button type="button" role="button" class="btn btn-success text-nowrap ml-2 btn-sm" onclick="myFunction()">Copy Address</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <div class="form-group mb-2">
                                        <label for="amount" class="text-white">Amount (<span class="text-danger">500 COIN = ${{ setting()->coin_buy_rate }}</span>)</label>
                                        <input type="number" id="amount" onchange="setUsdt(this)" onclick="setUsdt(this)" onkeypress="setUsdt(this)" onkeydown="setUsdt(this)" class="form-control" name="amount" placeholder="Enter Amount" value="{{ old('amount') }}">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <div class="form-group mb-2">
                                        <label for="pay" class="text-white">You Pay in USDT</label>
                                        <input type="text" readonly id="pay" class="form-control" name="pay" placeholder="You pay" value="{{ old('pay') }}">
                                        @error('pay')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group mb-2">
                                        <label for="transaction_id" class="text-white">Transaction ID</label>
                                        <input type="text" id="transaction_id" class="form-control" name="transaction_id" placeholder="Enter transaction id" value="{{ old('transaction_id') }}">
                                        @error('transaction_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
    function setWalletAddres(el){
        var wid = $(el).val();
        if (wid == '') {
            $('#myInput').val('Select Netwark');
        }else{
            $.ajax({
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "netwark_id":wid
                },
                url:'{{ route('user.netwark.getWalletAddress') }}',
                success: function (data){
                    $('#myInput').val(data);
                }
            });
        }
    }
</script>

<script>
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}

    function setUsdt(tl){
        var coin = $(tl).val();
        var rate = {{ setting()->coin_buy_rate }};
        var price = (coin / 500) * rate;
        $('#pay').val(price);
    }
  </script>
@endsection
