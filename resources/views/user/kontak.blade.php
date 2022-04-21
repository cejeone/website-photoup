@extends('layouts.user')

@section('title')
    PHOTO UP | {{ trans('user/title.title.k') }}
@endsection

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        <section class="breadcrumb-header" data-aos="fade-up">
            <div class="container breadcrumb-nav">
                <h1>{{ trans('user/kontak.bc.h1') }}</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('user/kontak.bc.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('user/kontak.bc.active') }}</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!--end breadcrumb-->

        <!--peta-->
        <section class="peta" data-aos="fade-up">
            <div class="container">
                <div class="embed-responsive embed-responsive-21by9 embed">
                    <iframe class="embed-responsive-item embed-peta"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.43020350749!2d106.83030571468649!3d-6.338283695413136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc81e2878c1%3A0x273da725ef199289!2sUKM%20PHOTO%20UP%20KMUP!5e0!3m2!1sid!2sid!4v1645056784670!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
        <!--end peta-->

        <!--col-->
        <section class="kontak" data-aos="fade-up">
            <div class="container">
                <div class="kontak-kami">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="item-kontak" data-aos="fade-up" data-aos-delay="100">
                                <i class='bx bxs-envelope-open icon'></i>
                                <h5>{{ trans('user/kontak.box.h5e') }}</h5>
                                <p><a href="mailto:photoup1994@gmail.com?subject=Pesan%20untuk%20photo%20up"
                                        target="_blank">photoup1994@gmail.com</a></p>
                            </div>
                        </div>

                        @php $incrementkontak = 0 @endphp
                        @foreach ($item as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="item-kontak" data-aos="fade-up" data-aos-delay="250">
                                    <i class='bx bxs-phone icon'></i>
                                    <h5>{{ trans('user/kontak.box.h5t') }}</h5>
                                    <ul class="item">
                                        <li>
                                            <a href="https://wa.me/{{ $item->konfirmasi_telepon1 }}"
                                                target="_blank">{{ $item->telepon1 }}
                                                ({{ $item->humas1 }})
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/{{ $item->konfirmasi_telepon2 }}"
                                                target="_blank">{{ $item->telepon2 }}
                                                ({{ $item->humas2 }})</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="item-kontak" data-aos="fade-up" data-aos-delay="350">
                                <i class='bx bxs-map-pin icon'></i>
                                <h5>{{ trans('user/kontak.box.h5s') }}</h5>
                                <p>{{ trans('user/kontak.box.sekre') }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end col-->



        <!--kontak-->
        <!-- <section class="bantuan">
                                                                           <div class="container">
                                                                                <div class="row">
                                                                                     <div class="col-lg-6 text-center">
                                                                                          <p>Apakah ada pertanyaan?</p>
                                                                                     </div>
                                                                                     <div class="col-lg-6">
                                                                                          <div class="text-center">
                                                                                               <a href="#" class="btn btn-custom" data-aos="fade-in">Kontak</a>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </section> -->
        <!--kontak-->
    </div>

    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class='ini bx bxs-chevron-up'></i>
        </a>
    </div>
@endsection
