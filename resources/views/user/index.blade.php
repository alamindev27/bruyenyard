@extends('layouts.app')
@section('head')
        <title>Mining</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('assets/frontend/user/css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/user/style-4.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            .u-page {
                padding: 0 !important;
            }

            body {
                background: #311768 !important;
            }
            .total-income-box .logo-b1 {
                background-image: url("{{ asset('assets/default/3D View.png') }}");
                opacity: .6;
            }
            .total-income-box .logo-b2[data-v-0f3ab560] {
                background-image: url("{{ asset('assets/default/3D View.png') }}");
                opacity: .6;
                transform: rotate(280deg);
            }
        </style>
@endsection
@section('content')
@php
    $totalStakedAmount = auth()->user()->mining_amount + auth()->user()->mining_bonus_amount;
@endphp
<br><br><br><br>
        <div class="container mt-3">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-itmes-center w-100">
                        <div class="text-center py-3 w-75 mr-1" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%); color:#fff; border-radius:40px;">
                            <p class="my-0 text-white">BRU COIN {{ $totalStakedAmount }} = Acet
                                ${{ ($totalStakedAmount) * 0.02 }}</p>
                        </div>
                        <button class="btn btn-info border-0" data-toggle="modal" data-target="#exampleModalCenter" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%); border-radius:40px;">Connect Wallet</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="u-page" style="z-index: -9999">
                        <div data-v-0f3ab560="" class="up-box">
                            @if (auth()->user()->free == 'free')
                                <button onclick="return window.location.href='{{ route('user.freeMining.start') }}'" class="btn" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%); color:#fff;border-radius:40px;">Free Mining</button>
                            @endif
                            @if (!empty(auth()->user()->count) && auth()->user()->count < Carbon\Carbon::now())
                                        <a href="{{ route('user.mining.claim') }}" class="btn text-white" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">Claim</a>
                                    @endif
                            <div data-v-0f3ab560="" class="up mx-auto" style="z-index: -9">
                                <div data-v-0f3ab560="" class="up-up-box align-items-center">
                                    <div data-v-0f3ab560="" class="time d-flex justify-content-center align-items-center" style="text-align: center;">
                                        <div data-v-0f3ab560="" style="margin-right: 4px;">
                                            <div data-v-0f3ab560="" class="up-time-icon"></div>
                                        </div>
                                        <div data-v-0f3ab560="" class="">
                                            <div data-v-9803901c="" data-v-0f3ab560="" class="u-count-down">
                                                <div data-v-0f3ab560="" class="timeN">
                                                    <div data-v-0f3ab560="" class="timeN__item" id="the-final-countdown">
                                                        <span id="hours" class="mx-auto" style="font-size: 16px; text-align: center;">00</span><span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-0f3ab560="" class="flex-sub"></div>
                                    </div>

                                    <div data-v-0f3ab56 class="stake-title m-light flex align-center mt-2">
                                        <div data-v-0f3ab56 class="flex-sub"></div>
                                        <div data-v-0f3ab560="" class="text-white" style="margin-right: 4px; font-size: 13px;">BRU COIN MINING </div>
                                        <div data-v-0f3ab560="" class="flex-sub"></div>
                                    </div>
                                    {{-- <div data-v-0f3ab560="" class="stake-price m-light m-regular">0</div> --}}
                                    <div data-v-0f3ab560="" class="apr m-light flex align-center mt-2">
                                        <div data-v-0f3ab560="" class="flex-sub"></div>
                                        <div data-v-0f3ab560="" style="margin-right: 4px;">APR + 40%</div>
                                        <div data-v-0f3ab560="" class="flex-sub"></div>
                                    </div>



                                </div>
                            </div>
                            <div data-v-0f3ab560="" class="loader mx-auto"  style="z-index: -99">
                                <span data-v-0f3ab560=""></span>
                                <span data-v-0f3ab560=""></span>
                                <span data-v-0f3ab560=""></span>
                                <span data-v-0f3ab560=""></span>
                            </div>
                        </div>
                    </div>
                    <br><br><br>

                    <div class="card" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <div class="d-block">
                                        <div class="p-3 border mb-3" style="border-radius: 20px; !important; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;">
                                            <h5 class="text-white">BRU COIN</h5>
                                            <p class="text-white">{{ auth()->user()->mining_amount }}</p>
                                        </div>
                                    </div>
                                    <div class="d-block">
                                        <button class="btn btn-default border px-3 mb-3" style="background:#fff; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;">UN-STAKE</button>
                                    </div>
                                    <div class="d-block">
                                        <button onclick="return window.location.href='{{ route('user.cryptopayment.index') }}'" class="btn btn-default border px-5" style="background:#fff; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;">BUY</button>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="d-block">
                                        <div class="p-3 border mb-3"
                                            style="border-radius: 20px !important; background:#fff; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;">
                                            <h5 class="text-white">BRU COIN</h5>
                                            <p class="text-white">{{ auth()->user()->mining_bonus_amount }}</p>
                                        </div>
                                    </div>
                                    <div class="d-block">
                                        <button class="btn btn-default border px-3 mb-3"
                                            style="background:#fff; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;" onclick="return window.location.href='{{ route('user.mining.restaking') }}'">RE-STAKING</button>
                                    </div>
                                    <div class="d-block">
                                        <button onclick="return window.location.href='{{ route('user.coin.sell') }}'" class="btn btn-default border px-5"
                                            style="background:#fff; background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);color:#fff;">SELL</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <div data-v-0f3ab560="" class="total-income-box" style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);">
                        <div data-v-0f3ab560="" class="logo-b1"></div>
                        <div data-v-0f3ab560="" class="logo-b2"></div>
                        <div data-v-0f3ab560="" class="income-box-sell" style="background: #383CDE">
                            <div data-v-0f3ab560="" class="title m-light text-white">Total Staked</div>
                            <div data-v-0f3ab560="" class="price  m-light">{{ $totalStakedAmount }} $BRU COIN</div>
                            <div data-v-0f3ab560="" class="price-sub margin-bottom m-light text-white">Your Stake Cap<font data-v-0f3ab560="" style="font-weight: bold; padding: 0px 4px;">
                                    @php
                                        $perDollarCoin = setting()->coin_buy_rate;
                                        $convertUSD = (1 / $perDollarCoin);
                                        $usd = ($totalStakedAmount * $convertUSD);
                                    @endphp
                                    ${{ $usd }}
                                </font>
                            </div>
                        </div>
                        <div data-v-0f3ab560="" class="padding">
                            <div data-v-0f3ab560="" class="margin-lr-sm">
                                <div data-v-0f3ab560="" class="d-flex justify-content-around text-center text-white py-2">
                                    <div data-v-0f3ab560="" class="flex-sub padding-right">
                                        <div data-v-0f3ab560="" class="title m-light">Daily Rewards</div>
                                        <div data-v-0f3ab560="" class="price m-light ">{{ $dailyReward }}</div>
                                    </div>
                                    <div data-v-0f3ab560="" class="flex-sub padding-left">
                                        <div data-v-0f3ab560="" class="title m-light">Total Rewards</div>
                                        <div data-v-0f3ab560="" class="price m-light ">{{ $totalReward }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div data-v-0f3ab560="" class="invite-box py-2"
                        style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%);">
                        <div data-v-0f3ab560="" class="title1 m-light padding-top">INVITES &amp; EARN</div>
                        <div data-v-0f3ab560="" class="title2 m-light">Affilieate commission</div>

                        <div data-v-0f3ab560="" class="title m-light">Your affilieate link</div>
                        <div data-v-0f3ab560="">
                            <div data-v-0f3ab560=""
                                class="invite-url-box d-flex justify-content-between align-items-center">
                                <div data-v-0f3ab560="" class="flex-sub url m-light pl-2">
                                    <div class="p-1">
                                        <span id="myText">{{ route('register').'?invite='.auth()->user()->profile_id }}</span>
                                    </div>
                                </div>
                                <div data-v-0f3ab560="" onclick="copyContent();" class="copy m-light btn">Copy</div>
                            </div>
                        </div>
                        <div data-v-0f3ab560="" class="m-light padding-bottom text-white d-flex justify-content-center " style="font-size: 13px;">
                            Commission:
                            <div data-v-0f3ab560="" style="margin: 0px 4px; color: rgb(255, 255, 255);">
                                <span>{{ auth()->user()->first_gen_commission_amount + auth()->user()->second_gen_commission_amount + auth()->user()->third_gen_commission_amount }}</span>
                            </div>
                            $BRU COIN
                        </div>
                    </div>
                    <br><br>
                    <div data-v-0f3ab560="" class="team-box">
                        <div data-v-0f3ab560="" class="d-flex justify-content-around align-items-center  box-top m-light">
                            <div data-v-0f3ab560="" class="flex-sub text-center text-nowrap">Invites</div>
                            <div data-v-0f3ab560="" class="flex-sub text-center text-nowrap">Buy Presale</div>
                            <div data-v-0f3ab560="" class="flex-sub text-center text-nowrap">Commission</div>
                        </div>
                        <div data-v-0f3ab560="" class="d-flex justify-content-around align-items-center item text-white">
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->first_gen_toaal_invite }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->first_gen_buy_presale }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->first_gen_commission_amount }}</div>
                            </div>
                        </div>
                        <div data-v-0f3ab560="" class="d-flex justify-content-around align-items-center item text-white">
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->second_gen_toaal_invite }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->second_gen_buy_presale }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->second_gen_commission_amount }}</div>
                            </div>
                        </div>
                        <div data-v-0f3ab560="" class="d-flex justify-content-around align-items-center item text-white">
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->third_gen_toaal_invite }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->third_gen_buy_presale }}</div>
                            </div>
                            <div data-v-0f3ab560="" class="flex-sub text-nowrap">
                                <div data-v-0f3ab560="" style="font-size: 13px;" class="text-nowrap">{{ auth()->user()->third_gen_commission_amount }}</div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content" style="border-radius: 15px; background:radial-gradient(circle at 77%, #1A767E, #0F212F 65%, #0F212F 100%)">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <h5>Connect Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="bg-dark p-2 d-flex justify-content-between align-items-center mb-2 rounded">
                            <p class="text-white">Metamask</p>
                            <img src="{{ asset('assets/default/modal-1.svg') }}" alt="">
                        </div>
                        <div class="bg-dark p-2 d-flex justify-content-between align-items-center mb-2 rounded">
                            <p class="text-white">Crypto.com Defi Wallet</p>
                            <img src="{{ asset('assets/default/modal-2.png') }}" alt="" width="30">
                        </div>
                        <div class="bg-dark p-2 d-flex justify-content-between align-items-center mb-2 rounded">
                            <p class="text-white">Trust Wallet</p>
                            <img src="{{ asset('assets/default/trust-wallet-token.png') }}" alt="" width="30">
                        </div>
                    </div>
                </div>
            </div>
        </div>






@endsection
@section('scripts')


    <script src="{{ asset('assets/user/frontend/js/chunk-vendors.beca5ad6.js"></scrip') }}"></script>
    <script src="{{ asset('assets/user/frontend/js/index.3d88cc56.js"></scrip') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js">
    </script>
    <script>
        let text = document.getElementById('myText').innerHTML;
        const copyContent = async () => {
          try {
            await navigator.clipboard.writeText(text);
            alert('Content copied to clipboard');
          } catch (err) {
            console.error('Failed to copy: ', err);
          }
        }
        var d = new Date("{{ auth()->user()->count }}").toLocaleString([], { timeZone: "Asia/Dhaka" });



        // let options = {
        //     timeZone: 'Asia/Dhaka',
        //     year: 'numeric',
        //     month: 'numeric',
        //     day: 'numeric',
        //     hour: 'numeric',
        //     minute: 'numeric',
        //     second: 'numeric',
        // },
        // myDate = new Intl.DateTimeFormat([], options);
        // setInterval(() => {
        //     console.log(myDate.format(new Date()));
        // }, 1000);







      </script>



@if (auth()->user()->count)

    <script type="text/javascript">


            setInterval(function time() {
                // Replace 'end_date' with the actual attribute from your user model
                var endDateString = "{{ auth()->user()->count }}";
                var endDate = new Date(endDateString);

                var now = new Date();
                var timeDifference = endDate - now;

                var hours = Math.floor(timeDifference / (1000 * 60 * 60));
                var min = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                var sec = Math.floor((timeDifference % (1000 * 60)) / 1000);

                if ((min + '').length == 1) {
                    min = '0' + min;
                }

                if ((sec + '').length == 1) {
                    sec = '0' + sec;
                }

                jQuery('#hours').html(hours + ':' + min + ':' + sec);
            }, 1000);




    </script>

@endif



@endsection
