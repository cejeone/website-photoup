@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Galeri
@endsection

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Galeri</h5>

                            <a type="button" class="btn btn-primary" href="{{ route('galeri.create') }}">
                                Tambah
                            </a>


                            <!--table-->
                            <div class="box-body table-responsive mt-5">
                                <table class="table table-hover scroll-horizontal-vertical w-100 table-stiped table-bordered"
                                    id="crudTable">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Tag</th>
                                            <th>Nama</th>
                                            <th>Judul</th>
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
    {{-- datatable --}}
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
                    sortable: false,
                },
                {
                    data: 'tag',
                    name: 'tag'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'judul',
                    name: 'judul'
                },
                {
                    data: 'foto',
                    name: 'foto'
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
