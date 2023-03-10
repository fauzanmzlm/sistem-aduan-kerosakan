<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - SAK</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('yoraui/css/horizontal-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('yoraui/images/favicon.png') }}" />

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/jquery-toast-plugin/jquery.toast.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css"> --}}
    <!-- End plugin css for this page -->




    @stack('css')

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <style>
        .custom-datatable-show-entries {
            width: 50px;
        }

        .swal-footer {
            text-align: right;
        }
    </style>
</head>

<body>
    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(),
                ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            <!-- container-scroller -->
            <div class="container-scroller">
                <!-- partial:partials/_horizontal-navbar.html -->
                <div class="horizontal-menu">
                    <!-- top navbar -->
                    @include('layouts.navbar.auth.top')
                    <!-- end top navbar -->
                    <!-- bottom navbar -->
                    @include('layouts.navbar.auth.bottom')
                    <!-- end bottom navbar -->
                </div>

                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <div class="main-panel">
                        <div class="content-wrapper">
                            @yield('content')
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        @include('layouts.footers.auth.footer')

                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- end container-scroller -->

            {{-- <div class="modal demo-modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0">Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        @endif
    @endauth

    <!-- base:js -->
    <script src="{{ asset('yoraui/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('yoraui/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('yoraui/js/jquery.flot.dashes.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('yoraui/js/off-canvas.js') }}"></script>
    <script src="{{ asset('yoraui/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('yoraui/js/template.js') }}"></script>
    <script src="{{ asset('yoraui/js/settings.js') }}"></script>
    <script src="{{ asset('yoraui/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('yoraui/js/dashboard.js') }}"></script>
    <script src="{{ asset('yoraui/js/todolist.js') }}"></script>
    <script src="{{ asset('yoraui/js/formpickers.js') }}"></script>
    <script src="{{ asset('yoraui/js/data-table.js') }}"></script>
    <script src="{{ asset('yoraui/js/jquery-toast.js') }}"></script>
    {{-- <script src="{{ asset('yoraui/vendors/sweetalert/sweetalert.min.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.js"></script> --}}

    @stack('custom_js')
    <!-- End custom js for this page-->

    <script src="{{ asset('yoraui/js/tooltips.js') }}"></script>
    <script src="{{ asset('yoraui/js/popover.js') }}"></script>

    @stack('scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const getModalContent = (elem) => {
            $.get(elem.dataset.action, function(response) {
                $("#baseAjaxModal").html(response);
                $(baseAjaxModalContent).modal("show");
            });
        }

        const processCreation = (elem, datatable, data) => {
            Swal.fire({
                title: 'Sila tunggu sebentar...',
                onOpen: function() {
                    Swal.showLoading();
                    $.ajax({
                        url: elem.dataset.action,
                        data: data,
                        type: 'POST',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: true,
                                }).then(() => {
                                    $(baseAjaxModalContent).modal("hide");
                                    datatable.KTDatatable().reload();
                                });
                            }
                        },
                        fail: (response) => {
                            Swal.fire(
                                'Opps!',
                                'An error occurred, we are sorry for inconvenience.',
                                'danger'
                            )
                        }
                    })
                }
            })
        }

        const processCreationWithImage = (elem, datatable, data) => {
            Swal.fire({
                title: 'Data is being processed. Please wait...',
                onOpen: function() {
                    Swal.showLoading();
                    $.ajax({
                        url: elem.dataset.action,
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'POST',
                        success: function(response) {
                            if (response.success) {
                                $(baseAjaxModalContent).modal("hide");
                                datatable.KTDatatable().reload();
                            }

                            callback(response, false);
                        },
                        fail: (response) => {
                            callback(response, false);
                        }
                    })
                }
            })
        }

        const confirmCreate = async (elem) => {
            return await Swal.fire({
                title: 'Adakah anda pasti?',
                text: 'Data akan disimpan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#038cfc',
                cancelButtonColor: '#999',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            })
        }

        const processUpdation = (elem, datatable, data) => {
            Swal.fire({
                title: 'Sila tunggu sebentar...',
                onOpen: function() {
                    Swal.showLoading();
                    $.ajax({
                        url: elem.dataset.action,
                        data: data,
                        type: 'PUT',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: true,
                                }).then(() => {
                                    $(baseAjaxModalContent).modal("hide");
                                    datatable.KTDatatable().reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: response.message,
                                    showConfirmButton: true,
                                })
                            }
                        },
                        fail: (response) => {
                            Swal.fire(
                                'Opps!',
                                'An error occurred, we are sorry for inconvenience.',
                                'danger'
                            )
                            failCallback()
                        }
                    })
                }
            })
        }

        const confirmUpdate = (elem) => {
            return Swal.fire({
                title: 'Adakah anda pasti?',
                text: 'Data akan dikemaskini!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#fc0330',
                cancelButtonColor: '#999',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            })
        }

        // const processDeletion = (elem, successCallback, failCallback) => {
        //     Swal.fire({
        //         title: 'Sila tunggu sebentar...',
        //         onOpen: function() {
        //             Swal.showLoading();
        //             confirmDelete(elem).then((choice) => {
        //                 if (choice.value) {
        //                     deleteItem(elem, successCallback, failCallback)
        //                 } else {
        //                     Swal.fire(
        //                         'Batal',
        //                         'Proses dibatalkan',
        //                         'info'
        //                     )
        //                 }
        //             })
        //         }
        //     })
        // }

        // const deleteItem = (elem, successCallback = () => {}, failCallback = () => {}) => {
        //     $.ajax({
        //         url: elem.dataset.action,
        //         type: 'DELETE',
        //         success: function(response) {
        //             if (response.success) {
        //                 Swal.fire({
        //                     icon: 'success',
        //                     title: response.message,
        //                     showConfirmButton: true,
        //                 }).then(() => {
        //                     $(elem).closest('div .datatable').KTDatatable().reload()
        //                     successCallback()
        //                 });
        //             }
        //         },
        //         fail: (response) => {
        //             Swal.fire(
        //                 'Opps!',
        //                 'An error occurred, we are sorry for inconvenience.',
        //                 'danger'
        //             )
        //             failCallback()
        //         }
        //     })
        // }

        // const confirmDelete = (elem) => {
        //     return Swal.fire({
        //         title: 'Adakah anda pasti?',
        //         text: 'Data akan dihapuskan!',
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#fc0330',
        //         cancelButtonColor: '#999',
        //         confirmButtonText: 'Yes',
        //         cancelButtonText: 'No',
        //         reverseButtons: true
        //     }).then(() => deleteItem(elem))
        // }



        // Jang Custom Script

        // Function to delete data from the database
        function deleteData(elem) {
            if (confirm('Are you sure you want to delete this item?')) {
                $.ajax({
                    url: elem.dataset.url,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        showSuccessToast(data.message, data.success);
                        // Reload the datatable to show the updated data
                        $(elem.closest('table')).DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        showDangerToast(data.message, data.success);
                    }
                });
            }
        }

        // alert
        @if (session('status') === 'success')
            showSuccessToast("{{ session('message') }}");
        @endif
        @if (session('status') === 'info')
            showInfoToast("{{ session('message') }}");
        @endif
        @if (session('status') === 'warning')
            showWarningToast("{{ session('message') }}");
        @endif
        @if (session('status') === 'error')
            showDangerToast("{{ session('message') }}");
        @endif


        $(document).ready(function() {
            // Bind click event to all reset buttons
            $('button[type="reset"]').click(function() {
                var form = $(this).closest('form');
                form.find(':input').val('');
                form.find(':checkbox').prop('checked', false);
            });
        });
    </script>

    @stack('additional_js')

</body>

</html>
