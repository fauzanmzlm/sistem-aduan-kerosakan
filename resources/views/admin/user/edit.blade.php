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
                            <form method="POST" action="{{ route('admin.roles.update', $role->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('admin.role.fields', [
                                    'action' => 'edit'
                                ])
                                @include('components.update-button')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
