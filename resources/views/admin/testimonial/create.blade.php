@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Testimonial | Tambah Data Testimonial
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('testimonial.index') }}">Testimonial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Testimonial</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Testimonial</h5>
                            <div class="col-12 m-3">
                            </div>
                            <div class="col-12">
                                <form action="{{ route('testimonial.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="nama_anggota" id="nama-anggota"
                                            placeholder="Nama" required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="nama-anggota">Nama</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="status_anggota" id="status-anggota"
                                            placeholder="Status" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="status-anggota">Status</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <textarea type="text" class=" form-control" name="kata_kata" id="kata-kata"
                                            placeholder="Kata-kata" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus></textarea>
                                        <label for="kata-kata">kata-kata</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="foto-anggota">Foto</label>
                                        <input class="form-control" type="file" name="foto_anggota" id="foto-anggota"
                                            required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
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
