@extends('layouts.app')

@section('content')
    {{-- <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                @include('layouts.navbars.guest.navbar')
            </div>
        </div>
    </div> --}}
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Log Masuk</h4>
                                    <p class="mb-0">Masukkan alamat emel dan kata laluan anda untuk log masuk</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="flex flex-col mb-3">
                                            <input 
                                                type="email" 
                                                name="email" 
                                                class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                                value="{{ old('email') }}" 
                                                placeholder="Alamat Emel" 
                                                aria-label="Email" 
                                                required 
                                                autocomplete="email" 
                                                autofocus>
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input 
                                                type="password" 
                                                name="password" 
                                                class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                                aria-label="Password"
                                                required 
                                                placeholder="Kata Laluan"
                                                autocomplete="current-password">
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Lupa kata laluan anda? Tetapkan semula kata laluan anda
                                        <a href="{{ route('password.request') }}" class="text-primary text-gradient font-weight-bold">disini</a>
                                    </p>
                                </div>
                                @endif
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Tiada akaun? <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Daftar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('{{ asset("argon/img/pkt.jpg") }}');
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Setiap hari merupakan peluang untuk kita perbaiki diri untuk menjadi lebih baik"</h4>
                                <p class="text-white position-relative">- Anonymous -</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
