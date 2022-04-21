@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Galeri | Tambah foto
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('galeri.index') }}">Galeri</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Galeri</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah data foto galeri</h5>
                            <div class="col-12">
                                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="nama" id="nama" placeholder="Nama"
                                            required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" value="{{ old('nama') }}">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="judul" id="judul"
                                            placeholder="Judul" value="{{ old('judul') }}">
                                        <label for="judul">Judul</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="foto">Foto</label>
                                        <input class="form-control" type="file" name="foto" id="foto" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="pilih-tag-foto">Pilih tag foto</label>
                                        <select class="form-select" aria-label="pilih-tag-foto" name="tag" id="tag"
                                            required>
                                            <option disabled>- Pilih tag foto -</option>
                                            <option value="karya" {{ $item->tag == 'karya' ? 'selected' : '' }}>Karya
                                            </option>
                                            <option value="kerjasama" {{ $item->tag == 'kerjasama' ? 'selected' : '' }}>
                                                Kerjasama</option>
                                            <option value="acara" {{ $item->tag == 'acara' ? 'selected' : '' }}>Acara
                                            </option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-secondary"
                                            href="{{ route('galeri.index') }}">Batal</a>
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
