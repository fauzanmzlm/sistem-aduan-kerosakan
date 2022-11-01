@extends('layouts.app', ['class' => 'g-sidenav-show'])

@section('title')
    {{ $title ?? '' }}
@endsection

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => $title ?? ''])
    <style type="text/css">
        #div_signcontract {
            width: 99%;
        }
    </style>
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>{{ $title ?? '' }}</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="{{ route('complainant.complaints.store') }}">
                        @csrf
                        @include('complaints.complainant.form.1.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('complaints.complainant.form.1.js.create')
@endpush
