@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit About</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" id="heading" placeholder="Enter heading" name="heading" value="{{ old('heading') ?? $about->heading }}">
                                        @error('heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="text">Text</label>
                                        <input type="text" class="form-control" id="text" placeholder="Enter text" name="text" value="{{ old('text') ?? $about->text }}">
                                        @error('text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>






                                <div class="row mb-4">
                                    <div class="form-group col-md-10">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <img src="{{ asset($about->image) }}" alt="" class="border" width="100">
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
