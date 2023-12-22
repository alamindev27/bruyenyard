@extends('admin.layouts.app_admin')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Dashboard</h2>
        </header>
        <!-- start: page -->
        <div class="row mb-3">
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Active Users</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $activeUserCount }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Deactive Users</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $deactiveUserCount }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Team Member</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $totalTeamMember }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Partner</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $totalPartner }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Coin Buy Request</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $buyCoinRequest }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Coin Sell Request</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $sellCoinRequest }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Buy Coin</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $totalBuyCoin }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Sell Coin</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $totalSellCoin }}</strong>
                                        {{-- <span class="text-primary">(14 unread)</span> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    {{-- <a class="text-muted text-uppercase" href="#">(view all)</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>





            {{-- <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-secondary">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Profit</h4>
                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="#">(withdraw)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-primary mb-3">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Support Questions</h4>
                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                        <span class="text-primary">(14 unread)</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="#">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 col-xl-3">
                <section class="card card-featured-left card-featured-secondary">
                    <div class="card-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">Total Profit</h4>
                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="#">(withdraw)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> --}}
        </div>

    </section>
@endsection

