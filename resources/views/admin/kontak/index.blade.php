@extends('layouts.admin')

@section('title')
    PHOTO UP | Dashboard Kontak
@endsection


@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Kontak</h5>
                            <div class="box-body table-responsive mt-5">
                                <table class="table table-hover scroll-horizontal-vertical w-100 table-stiped table-bordered"
                                    id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Humas 1</th>
                                            <th>Telepon Humas 1</th>
                                            <th>Nama Humas 2</th>
                                            <th>Telepon Humas 2</th>
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
                    data: 'humas1',
                    name: 'humas1'
                },
                {
                    data: 'telepon1',
                    name: 'telepon1'
                },
                {
                    data: 'humas2',
                    name: 'humas2'
                },
                {
                    data: 'telepon2',
                    name: 'telepon2'
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
