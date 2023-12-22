@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Scurity</h2>
        </header>
        <!-- start: page -->
        <div class="row">
            <div class="col-lg-3  mb-4 mb-xl-0">

                <section class="card">
                    <div class="card-body">
                        <div class="thumb-info mb-3">
                            <img src="{{ asset(auth()->user()->avatar) }}" class="rounded img-fluid w-100" alt="{{ auth()->user()->name }}">
                            <div class="thumb-info-title">
                                <span class="thumb-info-inner">{{ auth()->user()->name }}</span>
                                <span class="thumb-info-type">CEO</span>
                            </div>
                        </div>

                        <div class="widget-toggle-expand mb-3">
                            <div class="widget-content-expanded">
                                <ul class="simple-todo-list mt-3">
                                    <li class="completed">Name : {{ auth()->user()->name }}</li>
                                    <li class="completed">Email : {{ auth()->user()->email }}</li>
                                    @if (auth()->user()->phone)
                                        <li class="completed">Phone : {{ auth()->user()->phone }}</li>
                                    @endif
                                    <li class="completed">Joined : {{ auth()->user()->created_at }}</li>
                                </ul>
                            </div>
                        </div>
                        {{-- <hr class="dotted short">
                        <h5 class="mb-2 mt-3">About</h5>
                        <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vulputate quam. Interdum et malesuada</p> --}}
                    </div>
                </section>

            </div>
            <div class="col-lg-9 ">

                <div class="tabs">
                    <ul class="nav nav-tabs tabs-primary">
                        @include('admin.partials.admin-profile-menu')
                    </ul>
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.security.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4 class="mb-3 font-weight-semibold text-dark">Security Update</h4>
                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" class="form-control" id="current_password" placeholder="Enter currnent password" name="current_password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('notMatch'))
                                            <span class="text-danger">{{ session('notMatch') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="password">New Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter new password" name="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="password_confirmation">Re-type Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" placeholder="Enter re-type password" name="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit">Save & Update</button>

                            </form>

                            <hr>


                            <form class="p-3" action="{{ route('admin.email.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4 class="mb-3 font-weight-semibold text-dark">Change Email</h4>
                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (session('notMatch'))
                                            <span class="text-danger">{{ session('notMatch') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit">Save & Update</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
