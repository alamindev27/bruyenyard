@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add New FAQ</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="question">Question</label>
                                        <input type="text" class="form-control" id="question" placeholder="Enter Question" name="question" value="{{ old('question') }}">
                                        @error('question')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="answer">Answer</label>
                                        <input type="text" class="form-control" id="answer" placeholder="Enter Answer" name="answer" value="{{ old('answer') }}">
                                        @error('answer')
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
