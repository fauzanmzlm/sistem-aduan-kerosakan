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
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-success btn-sm">Create Role</a>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table data-url="{{ route('admin.roles.index') }}" id="role-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Role Name</th>
                                            <th>Guard Name</th>
                                            <th>Permissions</th>
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
    @include('admin.role.js.index')
@endpush