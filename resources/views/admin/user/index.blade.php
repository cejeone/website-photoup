@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Pengguna
@endsection

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Pengguna</h5>

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
                                <div class="col-12">
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible my-3"><i
                                                class="fa fa-check-circle"></i>
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <a type="button" class="btn btn-primary" href="{{ route('user.create') }}">
                                Tambah
                            </a>
                            <div class="box-body table-responsive mt-5">
                                <table
                                    class="table table-hover scroll-horizontal-vertical w-100 table-stiped table-bordered"
                                    id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th width="15%"><i class="fa fa-cog"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            ordering: true,
            searchable: true,
            serverSide: true,
            order: [
                [1, 'asc']
            ],
            ajax: {
                url: '{!! url()->current() !!}',
            },

            columns: [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    sortable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'roles',
                    name: 'roles'
                },
                {
                    data: 'aksi',
                    name: 'aksi',

                    orderable: false,
                    searchable: false,
                    sortable: false
                },
            ]
        });
    </script>
@endpush
