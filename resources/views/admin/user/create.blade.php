@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Profil | Tambah Data Pengguna
@endsection

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <nav class="m-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('profil.index') }}">Pengguna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Pengguna</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Pengguna</h5>
                            <div class="col-12 m-3">
                            </div>
                            <div class="col-12">
                                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="name" id="name" placeholder="Nama"
                                            autocomplete="name" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="name">Nama</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="text" class=" form-control" name="email" id="email"
                                            placeholder="Email" required=""
                                            oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="password" class=" form-control" name="password" id="password"
                                            placeholder="Kata sandi" autocomplete="new-password" minlength="6"
                                            maxlength="12" required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="password">Kata Sandi</label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="password" class=" form-control" id="password_confirmation"
                                            placeholder="Konfirmasi Kata sandi" name="password_confirmation"
                                            autocomplete="new-password" required data-match="#password" minlength="6"
                                            maxlength="12" required="" oninvalid="this.setCustomValidity('Wajib diisi')"
                                            oninput="setCustomValidity('')" autofocus>
                                        <label for="password">Konfirmasi Kata Sandi</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="roles">Pilih Role</label>
                                        <select class="form-select" aria-label="roles" name="roles" id="roles" required
                                            autofocus>
                                            <option disabled>- Pilih Role -</option>
                                            <option value="user" {{ $item->roles == 'user' ? 'selected' : '' }}>User
                                            </option>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('user.index') }}" type="button" class="btn btn-secondary">Batal</a>
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
