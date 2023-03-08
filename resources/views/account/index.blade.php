@extends('layouts.app')

@section('title')
    {{ $title ?? '' }}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/jquery-bar-rating/css-stars.css') }}">
@endpush

@section('content')
    {{-- <div class="dashboard-header d-flex flex-column grid-margin">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Data</span></li>
                </ol>
            </nav>
        </div>
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
                <h4 class="mb-0 font-weight-bold">Account</h4>
            </div>
            <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0">
                <button class="btn btn-primary btn-sm  d-none d-md-block">Export Account Information</button>
            </div>
        </div>
        
    </div> --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Account</li>
        </ol>
      </nav>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{ asset('yoraui/images/samples/30x30/avatar-2.png') }}" alt="profile"
                                    class="img-lg rounded-circle mb-3" />
                                <div class="mb-3">
                                    <h3>fauzanmzlm.</h3>
                                </div>
                                <p class="w-75 mx-auto mb-3">Bureau Oberhaeuser is a design bureau focused on Information-
                                    and Interface Design. </p>
                            </div>
                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Status
                                    </span>
                                    <span class="float-right text-muted">
                                        Active
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Phone
                                    </span>
                                    <span class="float-right text-muted">
                                        006 3435 22
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Mail
                                    </span>
                                    <span class="float-right text-muted">
                                        Jacod@testmail.com
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Facebook
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">David Grey</a>
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Twitter
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">@davidgrey</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                        <div class="card border-bottom">
                            <div class="card-header" role="tab" id="heading-10">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapse-10" aria-expanded="true"
                                        aria-controls="collapse-10">
                                        Account Information
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-10" class="collapse show" role="tabpanel" aria-labelledby="heading-10"
                                data-parent="#accordion-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <style>
                                                .info-detail>div>label {
                                                    font-weight: bold;
                                                }

                                                .info-detail>div>div>label {
                                                    font-weight: bold;
                                                }
                                            </style>
                                            <div class="info-detail my-3">
                                                <div class="form-group">
                                                    <label for="">USERNAME</label>
                                                    <p>fauzanmzlm</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">FULL NAME</label>
                                                    <p>MUHAMMAD FAUZAN BIN MAZLAM</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">EMAIL ADDRESS</label>
                                                    <p>fauzanmazlam@gmail.com</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">DEPARTMENT</label>
                                                    <p>JABATAN TEKNOLOGI MAKLUMAT DAN KOMUNIKASI</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">DATE OF BIRTH</label>
                                                    <p>10 JULY 2022</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">GENDER</label>
                                                    <p>MALE</p>
                                                </div>
                                                <div class="pt-2">
                                                    <button class="btn btn-primary">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-bottom">
                            <div class="card-header" role="tab" id="heading-11">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-11"
                                        aria-expanded="false" aria-controls="collapse-11">
                                        Notification Settings
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                                data-parent="#accordion-4">
                                <div class="card-body">
                                    <p>If while signing in to your account you see an error message, you can do the
                                        following</p>
                                    <ol class="pl-3 mt-3">
                                        <li>Check your network connection and try again</li>
                                        <li>Make sure your account credentials are correct while signing in</li>
                                        <li>Check whether your account is accessible in your region</li>
                                    </ol>
                                    <p class="text-success">
                                        <i class="mdi mdi-alert-octagon mr-2"></i>If the problem persists, you can
                                        contact our support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-bottom">
                            <div class="card-header" role="tab" id="heading-12">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-12"
                                        aria-expanded="false" aria-controls="collapse-12">
                                        Change Password
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-12" class="collapse" role="tabpanel" aria-labelledby="heading-12"
                                data-parent="#accordion-4">
                                <div class="card-body">
                                    <p>If while signing in to your account you see an error message, you can do the
                                        following</p>
                                    <ol class="pl-3 mt-3">
                                        <li>Check your network connection and try again</li>
                                        <li>Make sure your account credentials are correct while signing in</li>
                                        <li>Check whether your account is accessible in your region</li>
                                    </ol>
                                    <p class="text-success">
                                        <i class="mdi mdi-alert-octagon mr-2"></i>If the problem persists, you can
                                        contact our support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-13">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-13"
                                        aria-expanded="false" aria-controls="collapse-13">
                                        Activity Logs
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-13" class="collapse" role="tabpanel" aria-labelledby="heading-13"
                                data-parent="#accordion-4">
                                <div class="card-body">
                                    <p class="mb-0">You can add money to the wallet for any future transaction from
                                        your bank account using net-banking, or credit/debit card transaction. The money
                                        in the wallet can be used for an easier and faster transaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('yoraui/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('yoraui/js/profile-demo.js') }}"></script>
@endpush
