@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Ecosystem </h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('ecosystem-data.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" id="heading" placeholder="Enter heading" name="heading" value="{{ old('heading') ?? $data->heading }}">
                                        @error('heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="text">Text</label>
                                        <textarea name="text" id="text" class="form-control" rows="5" placeholder="Enter text">{{ old('text') ?? $data->text }}</textarea>
                                        @error('text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col-10">
                                        <label for="text">Text</label>
                                        <input type="file" class="form-control" name="logo">
                                        @error('text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-2">
                                        <img src="{{ asset($data->logo) }}" alt="">
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit">Save & Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
