@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add New Roadmap Data</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('roadmap-data.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="text">Text</label>
                                        <input type="text" class="form-control" id="text" placeholder="Enter text" name="text" value="{{ old('text') }}">
                                        @error('text')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
