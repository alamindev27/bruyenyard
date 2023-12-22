@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Partner</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" id="link" placeholder="Enter link" name="link" value="{{ old('link') ?? $partner->link }}">
                                        @error('link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col-md-10">
                                        <label for="logo">Logo</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img src="{{ asset($partner->logo) }}" alt="" class="img-fluid border">
                                        </div>
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
