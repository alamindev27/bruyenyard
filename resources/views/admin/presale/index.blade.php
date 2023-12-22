@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Blockchain</h2>
        </header>
        <!-- start: page -->
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="tabs">
                    <div class="tab-content">
                        <div id="edit" class="tab-pane active">
                            <form class="p-3" action="{{ route('admin.presale.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" id="heading" placeholder="Enter heading" name="heading" value="{{ old('heading') ?? $presale->heading }}">
                                        @error('heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="text">Text</label>
                                        <input type="text" class="form-control" id="text" placeholder="Enter text" name="text" value="{{ old('text') ?? $presale->text }}">
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
                                        <img src="{{ asset($presale->image) }}" alt="" class="border" width="100">
                                    </div>
                                </div>




                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="pre_sale">Pre Sale</label>
                                        <input type="text" class="form-control" id="pre_sale" placeholder="Enter pre_sale" name="pre_sale" value="{{ old('pre_sale') ?? $presale->pre_sale }}">
                                        @error('pre_sale')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="bounties">Bounties</label>
                                        <input type="text" class="form-control" id="bounties" placeholder="Enter bounties" name="bounties" value="{{ old('bounties') ?? $presale->bounties }}">
                                        @error('bounties')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="liquidity_pool">Liquidity Pool</label>
                                        <input type="text" class="form-control" id="liquidity_pool" placeholder="Enter liquidity_pool" name="liquidity_pool" value="{{ old('liquidity_pool') ?? $presale->liquidity_pool }}">
                                        @error('liquidity_pool')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="team">Team</label>
                                        <input type="text" class="form-control" id="team" placeholder="Enter team" name="team" value="{{ old('team') ?? $presale->team }}">
                                        @error('team')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="advisors">Advisors</label>
                                        <input type="text" class="form-control" id="advisors" placeholder="Enter advisors" name="advisors" value="{{ old('advisors') ?? $presale->advisors }}">
                                        @error('advisors')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="marketing_and_bd">Marketing & BD</label>
                                        <input type="text" class="form-control" id="marketing_and_bd" placeholder="Enter marketing_and_bd" name="marketing_and_bd" value="{{ old('marketing_and_bd') ?? $presale->marketing_and_bd }}">
                                        @error('marketing_and_bd')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <label for="pre_seed">Pre-Seed</label>
                                        <input type="text" class="form-control" id="pre_seed" placeholder="Enter pre_seed" name="pre_seed" value="{{ old('pre_seed') ?? $presale->pre_seed }}">
                                        @error('pre_seed')
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
