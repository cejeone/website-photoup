@extends('layouts.user')

@section('title')
    PHOTO UP | Testimonial
@endsection

@section('content')
    <div class="page-content">

        <!--breadcrumb-->
        <section class="breadcrumb-header">
            <div class="container breadcrumb-nav">
                <h1>Kata Anggota</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!--end breadcrumb-->

        <!-- testimonial -->

        <section class="testimonial-page" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    @php $incrementtestimonial = 0 @endphp
                    @forelse ($item as $item)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="item-box">
                                <i class='bx bxs-quote-right testi-quote'></i>
                                <p>{{ $item->kata_kata }}</p>
                                <div class="row">
                                    <div class="col-sm-2 user-foto">
                                        <img src="{{ Storage::url($item->foto_anggota) }}" alt="foto">
                                    </div>
                                    <div class="col-sm-8 kata">
                                        <h5>{{ $item->nama_anggota }}</h5>
                                        <span>{{ $item->status_anggota }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </section>


        <!-- end testimonial -->









    </div>

    <div class="btn-scroll">
        <a href="#" class="scroll-top">
            <i class="ini fas fa-chevron-up"></i>
        </a>
    </div>
@endsection
