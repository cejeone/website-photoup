@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Profil | Edit Data Profil
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('profil.index') }}">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3 mb-3">
                                <div class="col-12">
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
                                <h5 class="card-title">Edit Data Profil</h5>
                                <div class="col-12">

                                    <form action="{{ route('profil.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="nama_ketum" id="nama-ketum"
                                                placeholder="Nama" value="{{ $item->nama_ketum }}" required autofocus>
                                            <label for="nama-ketum">Nama</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="periode_ketum"
                                                id="periode-ketum" placeholder="Periode"
                                                value="{{ $item->periode_ketum }}" required autofocus>
                                            <label for="periode-ketum">Periode</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <textarea type="text" class=" form-control" name="sambutan" id="sambutan"
                                                placeholder="Sambutan" required autofocus>{!! $item->sambutan !!}</textarea>
                                            <label for="sambutan-ketum">Sambutan</label>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="foto-ketum">Foto ketua
                                                Umum</label>
                                            <input class="form-control" type="file" name="foto_ketum" id="foto-ketum"
                                                value="{{ $item->foto_ketum }}">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="foto-struktural">Foto
                                                Struktural</label>
                                            <input class="form-control" type="file" name="foto_struktural"
                                                id="foto-struktural" value="{{ $item->foto_struktural }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('profil.index') }}" type="button"
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
