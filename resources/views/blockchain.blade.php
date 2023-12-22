@extends('layouts.app')
@section('head')
@endsection
@section('content')
    <section class="crypten-trade-area pt-190">
        <div class="item-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="crypten-trade-thumb">
                            <img src="{{ asset($blockchain->image) }}" alt="" style="border-radius: 30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            {{-- <span>what is crypten</span> --}}
                            <h3 class="title">{{ $blockchain->heading }}</h3>
                            <p class="text-white">{{ $blockchain->text }}</p>
                            <a class="main-btn-2 main-btn mt-3 mt-lg-4" target="_balnk" href="{{ $blockchain->file }}">Learn More</a>
                            <a class="main-btn mt-3 mt-lg-4" href="{{ route('user.cryptopayment.index') }}"> buy Coin</a>
                        </div>
                    </div>
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
