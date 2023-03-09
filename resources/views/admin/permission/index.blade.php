@extends('layouts.app')

@section('title')
    {{ $pageTitle ?? '' }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $pageTitle ?? '' }}</h4>
                    <p class="card-description">{{ $pageDescription ?? '' }}</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table data-url="{{ route('admin.permissions.index') }}" id="permission-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="30">No.</th>
                                            <th>Permission Name</th>
                                            <th>Guard Name</th>
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

@push('additional_js')
    @include('admin.permission.js.index')
@endpush