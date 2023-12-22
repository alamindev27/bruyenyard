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
<br><br><br>
    <div class="section section-md py-5">
        <div  style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
            <div class="container">
                <div class="col-12">
                    <div class="text-center p-4 p-md-5">
                        <img src="{{ asset(auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}" style="width: 80px; height:80px;" class="rounded-circle border p-1">
                        <h3 class="text-white mt-2">{{ auth()->user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <br>

     <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.personal.info') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Personal Information</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.password.change') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Change Password</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.miningHistory') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Mining History</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.miningReward') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Reward History</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.inviteHistory') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Invite History</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.coin.buy.history') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Buy History</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-3">
                <a href="{{ route('user.coin.sell.history') }}" class="w-100">
                    <div class="card menu-card">
                        <div class="card-body">
                            <h6 class="my-0">Sell History</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
     </div>
@endsection
@section('scripts')
@endsection
