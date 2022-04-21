@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Acara | Tambah Data Acara
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('acara.index') }}">Acara</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Acara</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah data acara</h5>
                            <div class="col-12 m-3">
                            </div>
                            <div class="col-12">
                                <form action="{{ route('acara.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="judul_acara" id="judul_acara"
                                            placeholder="Nama" required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="judul_acara">Nama</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi_acara" id="editor" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus autofocus></textarea>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="poster">Poster</label>
                                        <input class="form-control" type="file" name="poster" id="poster" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('acara.index') }}" type="button" class="btn btn-secondary">Batal</a>
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
@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
