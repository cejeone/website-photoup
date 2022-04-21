@extends('layouts.user')

@section('title')
    PHOTO UP | {{ trans('user/title.title.faq') }}
@endsection

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        <section class="breadcrumb-header">
            <div class="container breadcrumb-nav">
                <h1>{{ trans('user/faq.bc.h1') }}</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('user/faq.bc.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('user/faq.bc.active') }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--end breadcrumb-->

        <!--faq-->
        <section class="faq" id="faq" data-aos="fade-up">
            <div class="container">
                <div class="item-faq">
                    <div class="accordion accordion-flush" id="accordionFlush">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{ trans('user/faq.faq.p1') }}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">{{ trans('user/faq.faq.j1') }} </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    {{ trans('user/faq.faq.p2') }}
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">{{ trans('user/faq.faq.j2') }} </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    {{ trans('user/faq.faq.p3') }}
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
                                <div class="accordion-body">{{ trans('user/faq.faq.j3a') }}
                                    <br>
                                    {{ trans('user/faq.faq.j3b') }}<br>
                                    {{ trans('user/faq.faq.j3c') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end faq-->






    </div>

    <div class="btn-scroll ">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection
