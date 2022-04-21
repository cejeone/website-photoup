@extends('layouts.user')

@section('title')
    PHOTO UP | {{ trans('user/title.title.g') }}
@endsection

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        <section class="breadcrumb-header" data-aos="fade-up">
            <div class="container breadcrumb-nav">
                <h1>{{ trans('user/galeri.bc.h1') }}</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('user/galeri.bc.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('user/galeri.bc.active') }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--end breadcrumb-->

        <!--gallery-->
        <section class="gallery" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <ul class="col container-filter portfolioFilte list-unstyled mb-0" id="filter">
                                <li class="categories active" data-filter="*"><a>{{ trans('user/galeri.list.l1') }}</a>
                                </li>
                                <li class="categories" data-filter=".karya"><a>{{ trans('user/galeri.list.l2') }}</a>
                                </li>
                                <li class="categories" data-filter=".kerjasama">
                                    <a>{{ trans('user/galeri.list.l3') }}</a>
                                </li>
                                <li class="categories" data-filter=".acara"><a>{{ trans('user/galeri.list.l4') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="port portfolio-masonry mt-4">
                    <div class="portfolioContainer row photo">
                        @php $incrementGaleris = 0 @endphp
                        @forelse ($item as $item)
                            <div class="col-lg-3 p-2 {{ $item->tag }}">
                                <div class="item-box" data-aos="fade-up"
                                    data-aos-delay="{{ $incrementGaleris += 20 }}">
                                    <a class="mfp-image" href="{{ Storage::url($item->foto) }}"
                                        title="{{ $item->judul }}">
                                        <img class="item-container img-fluid" src="{{ Storage::url($item->foto) }}"
                                            alt="{{ $item->judul }}" />
                                        <div class="item-mask">
                                            <div class="item-caption">
                                                <p class="text-dark mb-0">{{ $item->tag }}</p>
                                                <h6 class="text-dark mt-1 text-uppercase">{{ $item->nama }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection
