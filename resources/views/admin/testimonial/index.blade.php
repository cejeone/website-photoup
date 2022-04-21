@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Testimonial
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Testimonial</h5>
                            <a type="button" class="btn btn-primary" href="{{ route('testimonial.create') }}">
                                Tambah
                            </a>
                            <div class="box-body table-responsive mt-5">
                                <table class="table table-hover scroll-horizontal-vertical w-100 table-stiped table-bordered"
                                    id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kata-kata</th>
                                            <th>Status</th>
                                            <th>Foto</th>
                                            <th><i class="fa fa-cog"></i></th>
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
                    data: 'nama_anggota',
                    name: 'nama_anggota'
                },
                {
                    data: 'kata_kata',
                    name: 'kata_kata'
                },
                {
                    data: 'status_anggota',
                    name: 'status_anggota'
                },
                {
                    data: 'foto_anggota',
                    name: 'foto_anggota'
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
