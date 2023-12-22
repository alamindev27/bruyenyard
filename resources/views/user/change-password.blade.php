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
                        <img src="{{ asset(auth()->user()->avatar) }}" id="image_id" alt="{{ auth()->user()->name }}" style="width: 80px; height:80px;" class="rounded-circle border p-1">
                        <h3 class="text-white mt-2">{{ auth()->user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <br>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.password.update') }}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-2">
                                        <label for="current_password">Current Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="current_password" value="" placeholder="Enter current password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-2">
                                        <label for="password">New Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" value="" placeholder="Enter password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-2">
                                        <label for="password_confirmation">Re-type Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Re-type password">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-2 text-center">
                                        <button class="main-btn-2 main-btn">Update</button>
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
@endsection
