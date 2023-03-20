@extends('layouts.app')

@section('title')
    {{ $pageTitle ?? '' }}
@endsection

@push('plugin_css')
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('yoraui/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $pageTitle ?? '' }}</h4>
                    <p class="card-description">{{ $pageDescription ?? '' }}</p>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                                @csrf
                                @include('admin.user.fields', [
                                    'action' => 'create',
                                ])
                                @include('components.button'[
                                    'create' => true,
                                ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin_js')
    <script src="{{ asset('yoraui/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('yoraui/vendors/select2/select2.min.js') }}"></script>
@endpush
