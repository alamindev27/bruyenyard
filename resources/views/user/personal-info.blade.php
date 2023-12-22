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
                        <form action="{{ route('user.personalInfo.update') }}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') ?? auth()->user()->name }}" placeholder="Enter name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') ?? auth()->user()->email }}" placeholder="Enter email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') ?? auth()->user()->phone }}" placeholder="Enter phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" name="avatar" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])" class="form-control" value="{{ old('avatar') ?? auth()->user()->avatar }}" placeholder="Enter avatar">
                                        @error('avatar')
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
