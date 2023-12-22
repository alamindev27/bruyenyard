@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Conter</h2>
        </header>
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.counter.takeSalecountUpdate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        @php
                                            $totalTime = Carbon\Carbon::parse(setting()->take_sale_count)->diffForHumans(Carbon\Carbon::now());
                                            $arr = explode(' ', $totalTime);
                                            $count = reset($arr);
                                        @endphp
                                        <label for="day">Days (<span class="text-success">{{ $totalTime }} Finished</span>)</label>
                                        <input type="text" class="form-control" id="day" placeholder="Enter day" name="day" value="{{ $count }}">
                                        @error('day')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option {{ setting()->take_sale_count_status == 'on' ? 'selected' : '' }} value="on">On</option>
                                            <option {{ setting()->take_sale_count_status == 'off' ? 'selected' : '' }} value="off">Off</option>
                                        </select>
                                        @error('status')
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
