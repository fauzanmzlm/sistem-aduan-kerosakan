@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5 border">
                                <div class="brand-logo">
                                    <img src="{{ asset('yoraui/images/logo.svg') }}" alt="logo">
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                <form class="pt-3" role="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Emel" aria-label="Email" required
                                            autocomplete="email" autofocus>
                                        @error('email')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            aria-label="Password" required placeholder="Kata Laluan"
                                            autocomplete="current-password">
                                        @error('password')
                                            <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="mt-3">
                                        <button type="submit"
                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOG
                                            MASUK</button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                Kekalkan Saya Log Masuk
                                            </label>
                                        </div>
                                        <a href="#" class="auth-link text-black">Lupa kata laluan?</a>
                                    </div>
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                            <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                                        </button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Tidak mempunyai akaun? <a href="register.html" class="text-primary">Buat</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
