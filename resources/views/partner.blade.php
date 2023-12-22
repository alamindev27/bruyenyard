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
                            <img src="{{ asset($data->image) }}" alt="" style="border-radius: 30px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crypten-trade-content">
                            <h3 class="title">{{ $data->heading }}</h3>
                            <p>{{ $data->text }}</p>
                        </div>
                        <a class="main-btn-2 main-btn mt-3 mt-lg-4" target="_balnk" href="{{ $data->file }}">Learn More</a>
                        <a class="main-btn mt-3 mt-lg-4" href="{{ route('user.cryptopayment.index') }}"> buy Coin</a>
                    </div>
                </div>
            </div>
            <div class="crypten-color">
                <img src="{{ asset('assets') }}/frontend/images/shape/color-bg.png" alt="">
            </div>
        </div>
    </section>


    <section class="brand-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>Our Partners</span>
                        <h3 class="title">Meet Our Partners</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($partners as $partner)
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="brand-item mt-30">
                            <a href="{{ $partner->link }}"><img src="{{ asset($partner->logo) }}" alt="brand"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
        </div>
    </section>
@endsection
@section('scripts')
@endsection
