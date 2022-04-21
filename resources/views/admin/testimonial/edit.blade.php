@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Testimonial | Edit Data Testimonial
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Testimonial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Testimonial</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Testimonial</h5>
                            <div class="col-12 m-3">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <form action="{{ route('testimonial.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="nama_anggota" id="nama-anggota"
                                            placeholder="Nama" value="{{ $item->nama_anggota }}" required autofocus>
                                        <label for="nama-anggota">Nama</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="status_anggota" id="status-anggota"
                                            placeholder="Status" value="{{ $item->status_anggota }}" required autofocus>
                                        <label for="status-anggota">Status</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <textarea type="text" class=" form-control" name="kata_kata" id="kata-kata"
                                            placeholder="Kata-kata" required autofocus>{!! $item->kata_kata !!}</textarea>
                                        <label for="kata-kata">kata-kata</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="foto-anggota">Foto</label>
                                        <input class="form-control" type="file" name="foto_anggota" id="foto-anggota"
                                            value="{{ $item->foto_anggota }}">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('testimonial.index') }}" type="button"
                                    class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
