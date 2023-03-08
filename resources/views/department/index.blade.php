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
                        <div class="col-12 pb-2">
                            <a href="{{ route('departments.create') }}" class="btn btn-outline-success btn-sm">Create Department</a>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table data-url="{{ route('departments.index') }}" id="department-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Short Name</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                            <th>Actions</th>
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
    @include('department.js.index')
@endpush