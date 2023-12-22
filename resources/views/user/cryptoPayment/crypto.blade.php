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
                    <div class="card-body text-center">
                        <h2 class="text-white">PRE-SEED PRE-SALE IS LIVE</h2>

                        <div class="w-100 w-lg-50 mx-auto">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-start align-items-center text-white">
                                    <img src="{{ asset('assets/default/icon-1.png') }}" alt="" class="img-fluid" width="30">
                                    <span class="ml-2">$1 USDT</span>
                                </div>
                                <div class="middle text-white">
                                    <i class="fas fa-angle-double-right"></i>
                                </div>
                                <div class="d-flex justify-content-start align-items-center text-white">
                                    <img src="{{ asset('assets/default/icon-2.png') }}" alt="" class="img-fluid" width="30">
                                    <span class="ml-2">400 BRU COIN</span>
                                </div>
                            </div>
                        </div>


                        <p class="text-white">Purchase Limi : $10 ~  Max $10000</p>
                        <h5 class="text-white"><b>How to buy BRU COIN pre-sale?</b> </h5>
                        <p class="text-white mb-1">Step 1 : Select coin> Copy the wallet address below and paywith any exchange or wallet.</p>
                        <p class="text-white mb-1">Step 2 : Click below (Check Transaction) button and submit your Transaction Hash.</p>
                        <p class="text-white mb-1">Step 3 : Make confirm and wait for few seconds.</p>

                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" style="background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
                    <div class="card-body">

                        <div class="wallet_message">
                            <p>Notice: Our Platform Exclusively Supports the <a href="https://www.binance.org/en/smartChain" target="_blank">Binance Smart Chain (BSC)</a> Network.</p>
                            <p>For optimal performance and security, please ensure all transactions and interactions are conducted on the BSC network.</p>
                            <p>If you have any inquiries or require assistance, kindly reach out to our support team.</p>
                        </div>

                        <div class="wallet_verify">
                            <button type="button" class="verify_deposit">
                                   Already I Deposit. Verify My Deposit Transaction
                            </button>
                        </div>
                        <div class="wallet_divided">- OR -</div>
                        <div class="form-group mb-2">
                            <label for="coin" class="text-white">Choose Your Payment Coin <span class="text-danger">*</span></label>
                            <select name="coin" id="coin" class="form-control">
                                <option value="">Select Payment Coin</option>
                                <option value="USDT">USDT</option>
                                <option value="BNB">BNB</option>
                            </select>
                        </div>
                        <div class="wallet"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
     </div>

    <div class="crypto_modal modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Transaction Checking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="cryptoForm">
                    <div class="modal-body">
                        @csrf
                        <p class="error_message text-danger"></p>
                        <div class="form-group">
                            <label for="transaction_hash">Recevier Address (it isn't your wallet address)</label>
                            <input type="text" name="pay_address" id="pay_address" data-required='true' class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="transaction_hash">Transaction Hash</label>
                            <input type="text" name="transaction_hash" id="transaction_hash" data-required='true' class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="makeConfirm" class="btn btn-primary">Make Confirm</button>
                    </div>
                </form>
                <div class="cryptoModalAction">
                    <div class="modal-body">
                        <p class="cryptoModalActionText"><p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')

<script>

    $(document).ready( function(){
        $("#coin").on("change", function(){
            let coin = $(this).val();
            $('.wallet').empty();
            $.ajax({
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "coin":coin
                },
                url:'{{ route('user.cryptopayment.createwallet') }}',
                success: function (data){
                    $('.wallet').html(data);
                }
            });
        });

        $('.btn-close').on('click', function (event) {
            $(".crypto_modal").modal('hide');
        })
    });

    $(".verify_deposit").on("click", function(){
        $(".crypto_modal").modal('toggle');
        $('#cryptoForm').show();
        $(".cryptoModalAction").hide();
    })

    function check_trx(){
        let address = $('.crypto_address').text();
        $('#pay_address').val(address);
        $(".crypto_modal").modal('toggle');
        $('#cryptoForm').show();
        $(".cryptoModalAction").hide();
    }

    $(document).ready(function () {
        $('#makeConfirm').on("click",function () {
           // e.preventDefault(); // Prevent the form from submitting in the traditional way

            $("#cryptoForm .error_message").text("");

            // Validate form fields
            var valid = true;

            // Check each required input field
            $("#cryptoForm [data-required='true']").each(function () {
                var input = $(this);
                if (input.val().trim() === "") {
                    valid = false;
                    $("#cryptoForm .error_message").text("Please fill in all required fields.");
                    return false; // Stop iterating if one field is empty
                }
            });

            if (!valid) {
                return;
            }

            var formData = $("#cryptoForm").serialize();
            // // Make Ajax request
            $.ajax({
                type: 'POST',
                url: "{{ route('user.cryptopayment.payment') }}",
                data: formData,
                beforeSend: function () {
                    $('#cryptoForm').hide();
                    $(".cryptoModalAction .cryptoModalActionText").text("Transaction Checking. Please Wait... Don't reload Page.");
                    $(".cryptoModalAction").show();
                },
                success: function (data) {
                    ('#cryptoForm').hide();
                    $(".cryptoModalAction .cryptoModalActionText").text("Transaction Checking. Please Wait... Don't reload Page.");
                    $(".cryptoModalAction").show();
                },
                error: function (error) {
                    $(".cryptoModalAction .cryptoModalActionText").text("");
                    $(".cryptoModalAction").hide();
                    $("#cryptoForm .error_message").text(error.responseJSON.message);
                    $('#cryptoForm').show();
                },
                complete: function () {
                    $('#loadingSpinner').hide();
                }
            });
        });
    });

</script>
@endsection
