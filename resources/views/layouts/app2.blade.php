<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argon/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('argon/img/favicon.png') }}">
    <title>@yield('title')</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('argon/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.1/sweetalert2.css" integrity="sha512-0BcnfLcXBm81KVM/wzoS7yZRVflcQC3rj/Wqgi4cHSGktXTMcXrP6kquf1I14JFUj2LiFCfpZCSf/+478ifefA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toastr - CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('argon/assets/css/argon-dashboard.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
    
    @stack('style')
    
    <style>
        /* table.dataTable td {
            font-size: 14px;
        } */

        .dataTables_info {
            font-size: 0.75rem;
            color: #344767;
        }

        /* .table thead th {
            padding: 2% 3%;
        }

        .table tbody td {
            padding: 2% 3%;
        } */
        div.dt-buttons {
            float: right;
            margin-left:10px;
        }

        .border-custom-1 {
            border: 1px solid lightgray;
        }

        .custom-ellipsis-1 {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        label.error {
            color: red;
        }

        input.error {
            border-color: red;
            background: rgba(166, 66, 66, 0.69);
        }

        /* input.error {
            background-image: url('http://dummyimage.com/15x15/00ff11/fff.png&text=+');
            background-position: middle right;
            background-size: 15px 15px;
            background-repeat: no-repeat;
        } */
    </style>
</head>

<body class="{{ $class ?? '' }}">

    <div id="baseAjaxModal"></div>
    
    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(), ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
            @include('layouts.navbars.auth.sidenav')
            <main class="main-content border-radius-lg">
                @yield('content')
            </main>
            @include('components.fixed-plugin')
        @endif
    @endauth

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- Core JS Files -->
    <script src="{{ asset('argon/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>
    <!-- Scrollbar -->
    <script src="{{ asset('argon/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('argon/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('argon/assets/js/argon-dashboard.js') }}"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>
    <!-- Sweet Alert 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.1/sweetalert2.all.min.js" integrity="sha512-xLNVEmNEzNF+o0AuIls+RHT0MYZK05j7WZxtiWVzVNJdY+LXcGJDGuGI9ibXx3Aqc6/cCESkC7r0Pl3sVE5J7Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- JQuery Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    
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

        const processDeletion = (elem, successCallback, failCallback) => {
            Swal.fire({
                title: 'Sila tunggu sebentar...',
                onOpen: function() {
                    Swal.showLoading();
                    confirmDelete(elem).then((choice) => {
                        if (choice.value) {
                            deleteItem(elem, successCallback, failCallback)
                        } else {
                            Swal.fire(
                                'Batal',
                                'Proses dibatalkan',
                                'info'
                            )
                        }
                    })
                }
            })
        }

        const deleteItem = (elem, successCallback = () => {}, failCallback = () => {}) => {
            $.ajax({
                url: elem.dataset.action,
                type: 'DELETE',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: true,
                        }).then(() => {
                            $(elem).closest('div .datatable').KTDatatable().reload()
                            successCallback()
                        });
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

        const confirmDelete = (elem) => {
            return Swal.fire({
                title: 'Adakah anda pasti?',
                text: 'Data akan dihapuskan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#fc0330',
                cancelButtonColor: '#999',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            }).then(() => deleteItem(elem))
        }
    </script>
</body>

</html>
