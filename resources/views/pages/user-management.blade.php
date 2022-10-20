@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'User Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    {{-- <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Create Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Admin</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <button type="button" class="btn bg-gradient-info mr-3">Edit</button>
                                            <button type="button" class="btn bg-gradient-info">Delete</button>\
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-2.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Creator</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0">Edit</p>
                                            <p class="text-sm font-weight-bold mb-0 ps-2">Delete</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-3.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Member</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0 cursor-pointer">Edit</p>
                                            <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">Delete</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    <div class="table-responsive p-0">
                        {{-- <table id="example" class="table table-striped table-bordered"> --}}
                        <table id="example" class="table table-striped align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
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
                                <a href="javascript:;" class="text-sm font-weight-bold mb-0 cursor-pointer btn bg-gradient-primary" title="Kemaskini">
                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                </a>
                                &nbsp;
                                <a href="javascript:;" class="text-sm font-weight-bold mb-0 cursor-pointer btn bg-gradient-primary" title="Padam">
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
