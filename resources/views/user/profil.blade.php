@extends('layouts.user')

@section('title')
    PHOTO UP | {{ trans('user/title.title.p') }}
@endsection

@section('content')
    <div class="page-content">
        <!-- profil -->
        <section class="profil" id="profi">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h1 class="judul" data-aos="fade-right" data-aos-delay="100"
                            data-aos-anchor-placement="top">
                            {{ trans('user/profil.profil.h1') }}<br>{{ trans('user/profil.profil.h1br') }}</h1>
                    </div>
                </div>
                <div class="row gambar-content">
                    <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-end align-items-end"
                        data-aos="fade-right">
                        <img class="gambar" width="100%" height="100%"
                            src="{{ asset('frontend/assets/img/profil.svg') }}" alt="profil" />
                    </div>
                    <div class="desc col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center">
                        <p class="desc-p" data-aos="fade-left" data-aos-anchor-placement="bottom">
                            {{ trans('user/profil.profil.p') }} <br><br>
                            {{ trans('user/profil.profil.pbr') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--end profil-->

        <!--bagian-->
        <section class="bagian" data-aos="fade-up">
            <div class="container">
                <h5>{{ trans('user/profil.bagian.bagian') }}</h5>
                <div class="row bagian text-center">
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <img class="part" src="{{ asset('frontend/assets/img/logo-up.svg') }}" alt="img">
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <img class="part" src="{{ asset('frontend/assets/img/logo-senat.svg') }}" alt="img">
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="300">
                        <img class="part" src="{{ asset('frontend/assets/img/logo-panorama.svg') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--end bagian-->

        <!--video-->
        <section class="video" data-aos="fade-up">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="btn-play" data-aos="fade-up">
                    <button class="play-btn"
                        href="https://www.youtube.com/watch?v=NHU4ZJ_jWD0&t=145s?rel=0&ytp-pause-overlay=0"><i
                            class='bx bx-play'></i></button>
                </div>
        </section>
        <!--end video-->

        <!--ketum-->
        @php $incrementprofils = 0 @endphp
        @foreach ($item as $item)
            <section class="ketum" data-aos="fade-up">
                <div class="container">
                    <div class="item-box">
                        <i class='bx bxs-quote-right testi-quote'></i>
                        <p>{{ $item->sambutan }}</p>
                        <div class="row">
                            <div class="col-sm-2 user-foto">
                                <img src="{{ Storage::url($item->foto_ketum) }}" alt="foto">
                            </div>
                            <div class="col-sm-8 kata">
                                <h5>{{ $item->nama_ketum }}</h5>
                                @if (app()->getLocale() == 'ID')
                                    <span>{{ trans('user/profil.ketum.h2') }} {{ $item->periode_ketum }}</span>
                                @else
                                    <span>{{ trans('user/profil.ketum.h2') }} {{ $item->periode_ketum }}
                                        {{ trans('user/profil.ketum.h2p') }}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--end ketum-->

            <!-- struktural-->
            <section class="struktural" data-aos="fade-up">
                <div class="container text-center">
                    <h1 data-aos="fade-up">{{ trans('user/profil.struktural.h1') }}</h1>
                    @if (app()->getLocale() == 'ID')
                        <h2 class="mb-5" data-aos="fade-up">{{ trans('user/profil.struktural.h2') }}
                            {{ $item->periode_ketum }}
                        </h2>
                    @else
                        <h2 class="mb-5" data-aos="fade-up">{{ trans('user/profil.struktural.h2') }}
                            {{ $item->periode_ketum }}
                            {{ trans('user/profil.struktural.h2p') }}</h2>
                    @endif
                    <img src="{{ Storage::url($item->foto_struktural) }}" alt="struktural" style="border-radius: 30px"
                        data-aos="fade-up" data-aos-delay="200">
                </div>
            </section>
            <!--end struktural-->
        @endforeach

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
                <div class="sub-kegiatan">
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

    </div>
    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection

@push('addon-script')
    {{-- <script>
        $(document).ready(function() {
            autoPlayYouTubeModal();
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('.play-btn').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false

            });
        });
    </script>
@endpush
