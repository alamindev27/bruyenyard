@extends('layouts.app')
@section('head')
@endsection
@section('content')

<section class="crypten-trade-area">
    <div class="item-1 item-2 mt-180">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="crypten-trade-content">
                        <h3 class="title">{{ $about->heading }}</h3>
                        <p>{{$about->text}}</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="crypten-trade-thumb">
                        <img src="{{ asset($about->image) }}" alt="{{ $about->heading }}" style="border-radius: 30px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="crypten-color">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-2.png" alt="">
        </div>
    </div>
</section>



@endsection
@section('scripts')
@endsection
