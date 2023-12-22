@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Setting</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="author_name">Author Name</label>
                                        <input type="text" class="form-control" id="author_name" placeholder="Enter author name" name="author_name" value="{{ old('author_name') ? old('author_name') : setting()->author_name }}">
                                        @error('author_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="site_name">Site Name</label>
                                        <input type="text" class="form-control" id="site_name" placeholder="Enter site name" name="site_name" value="{{ old('site_name') ? old('site_name') : setting()->site_name }}">
                                        @error('site_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-md-10">
                                        <label for="site_logo">Site Logo</label>
                                        <input type="file" class="form-control" id="site_logo" name="site_logo">
                                        @error('site_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset(setting()->site_logo) }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-md-10">
                                        <label for="site_favicon">Favicon</label>
                                        <input type="file" class="form-control" id="site_favicon" name="site_favicon">
                                        @error('site_favicon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset(setting()->site_favicon) }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="wallet_address">Wallet Address</label>
                                        <input type="text" class="form-control" id="wallet_address" placeholder="Enter site name" name="wallet_address" value="{{ old('wallet_address') ? old('wallet_address') : setting()->wallet_address }}">
                                        @error('wallet_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="wallet_pk">Wallet Persoanl Key</label>
                                        <input type="text" class="form-control" id="wallet_pk" placeholder="Enter site name" name="wallet_pk" value="{{ old('wallet_pk') ? old('wallet_pk') : setting()->wallet_pk }}">
                                        @error('wallet_pk')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
