@extends('layouts.user')

@section('title')
    PHOTO UP | {{ trans('user/title.title.a') }}
@endsection

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        <section class="breadcrumb-header">
            <div class="container breadcrumb-nav">
                <h1>{{ trans('user/acara.bc.h1') }}</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('user/acara.bc.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('user/acara.bc.active') }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--end breadcrumb-->

        <!--acara-->
        <section class="acara">
            <div class="container">
                @php $incrementAcaras = 0 @endphp
                @forelse ($item as $item)
                    <div class="judul-acara " data-aos="fade-up">
                        <h1> {{ $item->judul_acara }}</h1>
                    </div>
                    <div class="title-acara d-flex align-items-center justify-content-center" data-aos="fade-up">

                        <img src="{{ Storage::url($item->poster) }}" alt="segera datang" width="100%" height="100%">

                    </div>
                    <div class="deskripsi" data-aos="fade-up">
                        {!! $item->deskripsi_acara !!}
                    </div>

                @empty
                    <div class="title-acara d-flex align-items-center justify-content-center">
                        <img src="{{ url('frontend/assets/img/segera.svg') }}" alt="segera datang" width="100%"
                            height="100%">
                    </div>
                @endforelse

            </div>
        </section>
        <!--end acara-->




    </div>

    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection
