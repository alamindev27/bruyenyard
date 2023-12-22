@extends('layouts.app')
@section('head')
<link rel='stylesheet' href="{{ asset('assets/frontend/css/pixel.css') }}">
@endsection
@section('content')
<section class="crypten-trade-area">
    <div class="item-1 item-2 mt-180">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="crypten-trade-content">
                        <h3 class="title">{{ $roadmap->heading }}</h3>
                        <p>{{$roadmap->text}}</p>

                        <a class="main-btn-2 main-btn mt-3 mt-lg-4" target="_balnk" href="{{ $roadmap->file }}">Learn More</a>
                        <a class="main-btn mt-3 mt-lg-4" href="{{ route('user.cryptopayment.index') }}"> buy Coin</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="crypten-trade-thumb">
                        <img src="{{ asset($roadmap->image) }}" alt="{{ $roadmap->heading }}" style="border-radius: 30px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="crypten-color">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-2.png" alt="">
        </div>
    </div>
</section>



    <div class="section section-md py-5">
        <div class="container">
           <div class="row mt-4">
              <div class="col-md-10 mx-auto">
                 <!-- Timeline -->
                 <div class="timeline timeline-one">

                    @foreach ($datas as $data)
                        <!-- Timeline Item 1 -->
                        <div class="timeline-item">
                            <h5 class="my-3 text-white">{{ $data->name }}</h5>
                            <p class="text-white"><i class="fa fa-check"></i> {{ $data->text }}</p>
                        </div>



                        <!-- Timeline Item 2 -->
                        {{-- <div class="timeline-item">
                            <h5 class="my-3 text-white">{{ $data->name }}</h5>
                            <p class="text-white"><i class="fa fa-check"></i> {{ $data->text }}</p>
                        </div> --}}
                    @endforeach
                 </div>
                 <!--End of Timeline-->
              </div>
           </div>

        </div>
     </div>
@endsection
@section('scripts')
@endsection
