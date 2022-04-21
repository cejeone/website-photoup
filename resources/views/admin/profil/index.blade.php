@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Profil
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Profil</h5>
                            <div class="box-body table-responsive mt-5">
                                <table class="table table-hover scroll-horizontal-vertical w-100 table-stiped table-bordered"
                                    id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Ketum</th>
                                            <th>Periode</th>
                                            <th>Sambutan</th>
                                            <th>Foto ketum</th>
                                            <th>Struktural</th>
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
                    data: 'nama_ketum',
                    name: 'nama_ketum'
                },
                {
                    data: 'periode_ketum',
                    name: 'periode_ketum'
                },
                {
                    data: 'sambutan',
                    name: 'sambutan'
                },
                {
                    data: 'foto_ketum',
                    name: 'foto_ketum'
                },
                {
                    data: 'foto_struktural',
                    name: 'foto_struktural'
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
