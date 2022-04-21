@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard
@endsection

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Galeri</h5>
                            <h1>{{ $foto_galeri }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Testimonial</h5>
                            <h1>{{ $testimonial }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dashboard</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
