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
                            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-success btn-sm">Create User</a>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table data-url="{{ route('admin.users.index') }}" id="user-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            {{-- <th>#</th> --}}
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email Address</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
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
    @include('admin.user.js.index')
@endpush