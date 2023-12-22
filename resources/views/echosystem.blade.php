@extends('layouts.app')
@section('head')
@endsection
@section('content')
    {{-- <section class="crypten-trade-area pt-190">
        <div class="item-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="crypten-trade-content">
                            <h3 class="title">{{ $ecosystem->heading }}</h3>
                            <p>{{ $ecosystem->text }}</p>


                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="crypten-trade-thumb">
                            <img src="{{ asset($ecosystem->image) }}" alt="{{ $ecosystem->heading }}" style="border-radius: 30px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{ asset('assets') }}/frontend/images/shape/color-bg.png" alt="">
            </div>
        </div>
    </section> --}}


    <section class="crypten-trade-area">
        <div class="item-1 item-2 mt-180">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="crypten-trade-content">
                            <h3 class="title">{{ $ecosystem->heading }}</h3>
                            <p>{{$ecosystem->text}}</p>


                            <a class="main-btn-2 main-btn mt-3 " target="_balnk" href="{{ $ecosystem->file }}">Learn More</a>
                            <a class="main-btn mt-3 -lg-4" href="{{ route('user.cryptopayment.index') }}"> buy Coin</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="crypten-trade-thumb">
                            <img src="{{ asset($ecosystem->image) }}" alt="{{ $ecosystem->heading }}" style="border-radius: 30px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-2.png" alt="">
            </div>
        </div>
    </section>















    <section class="crypten-trade-area pt-190">
        <div class="item-1">
            <div class="container">
                <div class="row">
                    @foreach ($datas as $data)
                        <div class="col-lg-6 mt-4">
                            <div class="border px-3 py-4 text-center" style="background-color: #E5E6E1; border-radius:15px">
                                <img src="{{ asset($data->logo) }}" alt="{{ $data->heading }}">
                                <h3 class="text-uppercase">{{ $data->heading }}</h3>
                                <p>{{ $data->text }}</p>
                            </div>
                        </div>
                    @endforeach



                    {{-- <div class="col-lg-6 mt-4">
                        <div class="border px-3 py-4 text-center" style="background-color: #E5E6E1; border-radius:15px">
                            <img src="{{ asset('assets/default/ecosystem-1.png') }}" alt="">
                            <h3 class="text-uppercase">hybrid compute</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minus veritatis saepe sunt cumque. Illo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="border px-3 py-4 text-center" style="background-color: #E5E6E1; border-radius:15px">
                            <img src="{{ asset('assets/default/ecosystem-1.png') }}" alt="">
                            <h3 class="text-uppercase">hybrid compute</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minus veritatis saepe sunt cumque. Illo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="border px-3 py-4 text-center" style="background-color: #E5E6E1; border-radius:15px">
                            <img src="{{ asset('assets/default/ecosystem-1.png') }}" alt="">
                            <h3 class="text-uppercase">hybrid compute</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minus veritatis saepe sunt cumque. Illo.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{ asset('assets') }}/frontend/images/shape/color-bg.png" alt="">
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
