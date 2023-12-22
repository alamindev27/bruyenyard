@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Social Media</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.socialMedia.update') }}" method="POST" enctype="multipart/form-data">
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
                                <button class="btn btn-success" type="submit">Save & Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
