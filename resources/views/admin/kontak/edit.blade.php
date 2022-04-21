@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Profil | Edit Data Kontak
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('kontak.index') }}">Kontak</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Kontak</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-3 mb-3">
                                <h5 class="card-title">Edit Data Kontak</h5>
                                <div class="col-12">

                                    <form action="{{ route('kontak.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="humas1" id="humas1"
                                                placeholder="Nama Humas 1" value="{{ $item->humas1 }}" required autofocus>
                                            <label for="humas1">Nama Humas 1</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="telepon1" id="telepon1"
                                                placeholder="Telepon Humas 1" value="{{ $item->telepon1 }}" required
                                                autofocus>
                                            <label for="telepon1">Telepon Humas 1</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="konfirmasi_telepon1"
                                                id="konfirmasi_telepon1" placeholder="Konfirmasi Telepon Humas 1"
                                                value="{{ $item->konfirmasi_telepon1 }}" required autofocus>
                                            <label for="konfirmasi_telepon1">Konfirmasi Telepon Humas 1</label>
                                        </div>

                                        <div class="form-floating mt-5">
                                            <input type="text" class=" form-control" name="humas2" id="humas2"
                                                placeholder="Nama Humas 2" value="{{ $item->humas2 }}" required autofocus>
                                            <label for="humas2">Nama Humas 2</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="telepon1" id="telepon2"
                                                placeholder="Telepon Humas 2" value="{{ $item->telepon2 }}" required
                                                autofocus>
                                            <label for="telepon1">Telepon Humas 2</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class=" form-control" name="konfirmasi_telepon2"
                                                id="konfirmasi_telepon2" placeholder="Konfirmasi Telepon Humas 2"
                                                value="{{ $item->konfirmasi_telepon2 }}" required autofocus>
                                            <label for="konfirmasi_telepon2">Konfirmasi Telepon Humas 2</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ route('kontak.index') }}" type="button"
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
    </div>
@endsection
