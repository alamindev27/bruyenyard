@extends('layouts.app')
@section('head')
@endsection
@section('content')

<section class="crypten-trade-area pt-190">
    <section class="faq-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span>Knowledgebase</span>
                        <h3 class="title">Frequently Asked Questions</h3>
                    </div>
                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="pills-a" role="tabpanel"
                            aria-labelledby="pills-a-tab">
                            <div class="faq-accordion">
                                <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                    @foreach ($faqs as $faq)
                                    {{-- {{ $loop->index == 0 ? 'active' : '' }} --}}
                                        <div class="accrodion  animated wow fadeInRight"
                                            data-wow-duration="1500ms" data-wow-delay="0ms">
                                            <div class="accrodion-inner">
                                                <div class="accrodion-title">
                                                    <h4>{{ $faq->question }}</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>{{ $faq->answer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banefits-color-2">
            <img src="{{ asset('assets') }}/frontend/images/shape/color-bg-4.png" alt="">
        </div>
    </section>
</section>



@endsection
@section('scripts')
@endsection
