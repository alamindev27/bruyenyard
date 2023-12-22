@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Profile</h2>
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
                        {{-- <div id="overview" class="tab-pane active">

                            <div class="p-3">

                                <h4 class="mb-3 font-weight-semibold text-dark">Update Status</h4>

                                <section class="simple-compose-box mb-3">
                                    <form method="get" action="/">
                                        <textarea name="message-text" data-plugin-textarea-autosize="" placeholder="What's on your mind?" rows="1" style="overflow: hidden; overflow-wrap: break-word; height: 37px;"></textarea>
                                    </form>
                                    <div class="compose-box-footer">
                                        <ul class="compose-toolbar">
                                            <li>
                                                <a href="#"><i class="fas fa-camera"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                            </li>
                                        </ul>
                                        <ul class="compose-btn">
                                            <li>
                                                <a href="#" class="btn btn-primary btn-xs">Post</a>
                                            </li>
                                        </ul>
                                    </div>
                                </section>

                                <h4 class="mb-3 pt-4 font-weight-semibold text-dark">Timeline</h4>

                                <div class="timeline timeline-simple mt-3 mb-3">
                                    <div class="tm-body">
                                        <div class="tm-title">
                                            <h5 class="m-0 pt-2 pb-2 text-dark font-weight-semibold text-uppercase">November 2021</h5>
                                        </div>
                                        <ol class="tm-items">
                                            <li>
                                                <div class="tm-box">
                                                    <p class="text-muted mb-0">7 months ago.</p>
                                                    <p>
                                                        It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tm-box">
                                                    <p class="text-muted mb-0">7 months ago.</p>
                                                    <p>
                                                        What is your biggest developer pain point?
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tm-box">
                                                    <p class="text-muted mb-0">7 months ago.</p>
                                                    <p>
                                                        Checkout! How cool is that!
                                                    </p>
                                                    <div class="thumbnail-gallery">
                                                        <a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options="{ &quot;type&quot;:&quot;image&quot; }">
                                                            <img class="img-fluid" width="215" src="img/projects/project-4.jpg">
                                                            <span class="zoom">
                                                                <i class="bx bx-search"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4 class="mb-3 font-weight-semibold text-dark">Personal Information</h4>
                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row row mb-4">
                                    <div class="form-group col">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                        @error('avatar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <h4 class="mb-3 font-weight-semibold text-dark">Change Password</h4>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">New Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6 border-top-0 pt-0">
                                        <label for="inputPassword5">Re New Password</label>
                                        <input type="password" class="form-control" id="inputPassword5" placeholder="Password">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-end mt-3">
                                        <button class="btn btn-primary modal-confirm">Save</button>
                                    </div>
                                </div> --}}

                                <button class="btn btn-success" type="submit">Save & Update</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
