@extends('layouts.app')

@section('title', $title ?? '')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => $title ?? ''])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="example" class="table table-striped align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            var table = $('#example').on( 'init.dt', function () {
                $('.custom-select, .dataTables_filter label input').removeClass('form-control-sm');
            }).DataTable({
                "dom": `
                    <'row'<'col-md-6'l><'col-md-6'Bf>>
                    <'row'<'col-md-12't>>
                    <"row"<"col-sm-6"i><"col-sm-6"p>>
                `,
                // "dom":`
                //     <"row"<"col-sm-6"B><"col-sm-3"><"col-sm-3"l>>tr<"bottom"<"row"<"col-sm-6"i><"col-sm-6"p>>><"clear">',
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                language: {
                    paginate: {
                    first:    '«',
                    previous: '‹',
                    next:     '›',
                    last:     '»'
                },
                aria: {
                    paginate: {
                        first:    'First',
                        previous: 'Previous',
                        next:     'Next',
                        last:     'Last'
                    }
                }
                },
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                pagingType: "full_numbers",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        className: 'text-center',
                        render: function (data, type, row) {
                            return `<p class="text-xs mb-0">${data}</p>`;
                        }
                    },
                    {
                        data: 'name', 
                        name: 'name',
                        className: '',
                        render: function (data, type, row) {
                            return `<p class="text-xs  mb-0">${data}</p>`;
                        }
                    },
                    {
                        data: 'email', 
                        name: 'email',
                        render: function (data, type, row) {
                            return `<p class="text-xs mb-0">${data}</p>`;
                        }
                    },
                    {
                        data: 'action', 
                        name: 'action',
                        orderable: false, 
                        searchable: false,
                        className: 'align-middle text-end',
                        render: function (data, type, row) {
                            return `
                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                <a href="javascript:;" class="text-sm font-weight-bold mb-0 cursor-pointer btn btn-primary" title="Kemaskini">
                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                </a>
                                &nbsp;
                                <a href="javascript:;" class="text-sm font-weight-bold mb-0 cursor-pointer btn btn-primary" title="Hapus">
                                    <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                </a>
                            </div>`;
                        }
                    },
                ]
            });
        })
    </script>
@endpush
