@extends('layouts.user')

@section('title')
    PHOTO UP
@endsection

@section('content')
    <!-- hero header -->
    <section class="header-hero">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12">
                    <div class="logopu" data-aos="fade-right" data-aos-delay="80" data-aos-duration="400">
                        <img src="{{ url('frontend/assets/img/logopu.svg') }}" alt="logo photo up" data-tilt>
                    </div>
                    <div class="hai" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">
                        <h1><span>👋</span>{{ trans('user/beranda.header.h1') }}</h1>
                        <h2>{{ trans('user/beranda.header.h2') }}</h2>
                        <h3>{{ trans('user/beranda.header.h3') }}</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="sub-hero" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="hero-box" data-aos="fade-up" data-aos-delay="500">
                            <p> {{ trans('user/beranda.header.box') }}<br>
                                {{ trans('user/beranda.header.box1') }}</p>

                            <div class="text-center">
                                <a href="#profil" class="btn btn-custom btn-mulai" data-aos="fade-in"><i
                                        class='bx bx-chevron-right mulai'></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end hero header -->

    <div class="page-content">

        <!-- profil-->
        <section class="profil" id="profil">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h1 class="judul" data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top"
                            data-aos-duration="500">
                            {{ trans('user/profil.profil.h1') }}<br>{{ trans('user/profil.profil.h1br') }}</h1>
                    </div>
                </div>
                <div class="row gambar-content">
                    <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" data-aos="fade-up">
                        <img class="gambar" width="100%" height="100%"
                            src="{{ asset('frontend/assets/img/profil.svg') }}" alt="profil" />
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <p class="mt-5 mb-2" data-aos="fade-up" data-aos-delay="100"
                            data-aos-anchor-placement="bottom">
                            {{ trans('user/profil.profil.p') }}</p>

                        <div class="text-center">
                            <a href="{{ route('profil') }}" class="btn btn-custom btn-more"
                                data-aos="fade-in">{{ trans('user/profil.profil.btn') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Profil-->

        <!-- kegiatan-->
        <section class="kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h1 class="judul" data-aos="fade-up" data-aos-delay="200" data-aos-anchor-placement="top">
                            {{ trans('user/profil.kegiatan.h1') }}</h1>
                    </div>
                </div>
                <div class="row gambar-content mb-5">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <p class="my-5" data-aos="fade-up" data-aos-delay="250"
                            data-aos-anchor-placement="bottom">{{ trans('user/profil.kegiatan.p') }}</p>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex justify-content-start align-items-start" data-aos="fade-up"
                        data-aos-delay="100">
                        <img class="gambar" width="100%" height="100%"
                            src="{{ asset('frontend/assets/img/kegiatan.svg') }}" alt="kegiatan" />
                    </div>
                </div>
            </div>

            <!-- sub kegiatan-->
            <div class="container">
                <div class="sub-kegiatan" data-aos="fade-up">
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-chalkboard icon'></i>
                            <h5>{{ trans('user/profil.subkeg.diklat') }}</h5>
                        </div>
                    </div>
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-book-open icon'></i>
                            <h5>{{ trans('user/profil.subkeg.kelas') }}</h5>
                        </div>
                    </div>
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-landscape icon'></i>
                            <h5>{{ trans('user/profil.subkeg.hunting') }}</h5>
                        </div>
                    </div>
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-image icon'></i>
                            <h5>{{ trans('user/profil.subkeg.pajang') }}</h5>
                        </div>
                    </div>
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-images icon'></i>
                            <h5>{{ trans('user/profil.subkeg.pameran') }}</h5>
                        </div>
                    </div>
                    <div class="sub-kegiatan-item">
                        <div class="item-box">
                            <i class='bx bx-trip icon'></i>
                            <h5>{{ trans('user/profil.subkeg.vaca') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end sub kegiatan-->
        <!-- end kegiatan-->

        <!--testimonial-->
        <section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <span>{{ trans('user/beranda.testi.h') }}</span>
                            <h1>{{ trans('user/beranda.testi.h1') }}</h1>
                        </div>
                    </div>
                    <div class="testimonials">
                        @php $incrementtestimonial = 0 @endphp
                        @forelse ($testi as $testi)
                            <div class="testimonial-item">
                                {{-- <i class='bx bxs-quote-right testi-quote'></i> --}}
                                <p>{{ $testi->kata_kata }}</p>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="{{ Storage::url($testi->foto_anggota) }}" alt="foto">
                                    </div>
                                    <div class="col-sm-5">
                                        <h5>{{ $testi->nama_anggota }}</h5>
                                        <span>{{ $testi->status_anggota }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!--end testimonial-->

        <!--gallery-->
        <section class="gallery">
            <div class="container">
                <div class="judul-gallery">
                    <h1>{{ trans('user/beranda.port.h1') }}</h1>
                </div>
                <div class="port portfolio-masonry mt-4">
                    <div class="portfolioContainer row photo">
                        @php $incrementGaleris = 0 @endphp
                        @forelse ($item as $items)
                            <div class="col-lg-4 p-4 {{ $items->tag }}">
                                <div class="item-box">
                                    <a class="mfp-image" href="{{ Storage::url($items->foto) }}"
                                        title="{{ $items->judul }}">
                                        <img class="item-container img-fluid" src="{{ Storage::url($items->foto) }}"
                                            alt="{{ $items->judul }}" />
                                        <div class="item-mask">
                                            <div class="item-caption">
                                                <p class="text-dark mb-0">{{ $items->tag }}</p>
                                                <h6 class="text-dark mt-1 text-uppercase">{{ $items->nama }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="btn-gallery">
                        <a href="{{ route('view_galeri') }}"
                            class="btn btn-custom btn-more">{{ trans('user/beranda.port.btn') }}</a>
                    </div>

                </div>
        </section>
        <!--end gallery-->

    </div>

    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection
