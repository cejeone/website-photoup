@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Profil | Tambah Data Profil
@endsection

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('profil.index') }}">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Profil</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Profil</h5>
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
                                <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="nama_ketum" id="nama-ketum"
                                            placeholder="Nama" required autofocus>
                                        <label for="nama-ketum">Nama</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="periode_ketum" id="periode-ketum"
                                            placeholder="Periode" required autofocus>
                                        <label for="periode-ketum">Periode</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <textarea type="text" class=" form-control" name="sambutan" id="sambutan"
                                            placeholder="Sambutan" required autofocus></textarea>
                                        <label for="sambutan-ketum">Sambutan</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="foto-ketum">Foto ketua
                                            Umum</label>
                                        <input class="form-control" type="file" name="foto_ketum" id="foto-ketum" required
                                            autofocus>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="foto-struktural">Foto
                                            Struktural</label>
                                        <input class="form-control" type="file" name="foto_struktural"
                                            id="foto-struktural" required autofocus>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('profil.index') }}" type="button" class="btn btn-secondary">Batal</a>
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
