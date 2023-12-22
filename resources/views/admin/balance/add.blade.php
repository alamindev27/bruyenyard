@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Balance</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="designation">Designation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="{{ old('designation') }}">
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="image">Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="facebook_link">Facebook Link</label>
                                        <input type="text" class="form-control" id="facebook_link" placeholder="Enter facebook_link" name="facebook_link" value="{{ old('facebook_link') }}">
                                        @error('facebook_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="linkedin_link">Linkedin Link</label>
                                        <input type="text" class="form-control" id="linkedin_link" placeholder="Enter linkedin link" name="linkedin_link" value="{{ old('linkedin_link') }}">
                                        @error('linkedin_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="instagram_link">Instagram Link</label>
                                        <input type="text" class="form-control" id="instagram_link" placeholder="Enter instagram link" name="instagram_link" value="{{ old('instagram_link') }}">
                                        @error('instagram_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="whatsapp_number">Whatsapp Number</label>
                                        <input type="number" class="form-control" id="whatsapp_number" placeholder="Enter whatsapp number" name="whatsapp_number" value="{{ old('whatsapp_number') }}">
                                        @error('whatsapp_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="github_link">GitHub Link</label>
                                        <input type="text" class="form-control" id="github_link" placeholder="Enter github link" name="github_link" value="{{ old('github_link') }}">
                                        @error('github_link')
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
