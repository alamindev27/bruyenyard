@extends('layouts.app')
@section('head')
<link rel='stylesheet' href="{{ asset('assets/frontend/css/pixel.css') }}">
<style>
    .menu-card:hover{
        border: 3px solid rgba(41, 255, 255, 0.992);
        box-shadow: rgba(41, 255, 255, 0.992) 0px 0px 25px;
        overflow: hidden;
    }
</style>
@endsection
@section('content')
<br><br><br>
    <div class="section section-md py-5">
        <div  style="background: linear-gradient(0deg, rgba(165,11,250,1) 0%, rgba(46,65,219,1) 100%)">
            <div class="container">
                <div class="col-12">
                    <div class="text-center p-4 p-md-5">
                        <img src="{{ asset(auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}" style="width: 80px; height:80px;" class="rounded-circle border p-1">
                        <h3 class="text-white mt-2">{{ auth()->user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <br>

     <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-white mb-4">Invite History</h3>
                <div class="table-responsive">
                    <table class="table text-white">
                        <thead>
                          <tr>
                            <th scope="col" class="text-nowrap">#</th>
                            <th scope="col" class="text-nowrap">Date</th>
                            <th scope="col" class="text-nowrap">User</th>
                            <th scope="col" class="text-nowrap">Email</th>
                            <th scope="col" class="text-nowrap">Phone</th>
                            <th scope="col" class="text-nowrap">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($referUsers as $history)
                                <tr>
                                    <th scope="row" class="text-nowrap align-middle">{{ ++$loop->index }}</th>
                                    <td class="text-nowrap align-middle">{{ Carbon\Carbon::parse($history->referUserWtihUserRelation->created_at)->format('d-m-Y') }}</td>
                                    <td class="text-nowrap align-middle">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img src="{{ asset($history->referUserWtihUserRelation->avatar) }}" alt="{{ $history->referUserWtihUserRelation->name }}" width="60" height="60" class="rounded p-1 rounded-circle border">
                                            <div class="ml-2">
                                                <span class="font-weight-bold d-block">{{ $history->referUserWtihUserRelation->name }}</span>
                                                <span class="d-block">ID: {{ $history->referUserWtihUserRelation->profile_id }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-nowrap align-middle">{{ $history->referUserWtihUserRelation->email }}</td>
                                    <td class="text-nowrap align-middle">{{ $history->referUserWtihUserRelation->phone }}</td>
                                    <td class="text-nowrap align-middle text-capitalize">{{ $history->referUserWtihUserRelation->status }}</td>
                                </tr>
                            @empty
                                <tr><td class="text-center" colspan="50"><h5>No Data Available</h5></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
@endsection
@section('scripts')
@endsection
