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
                            <form method="POST" action="{{ route('departments.update', $department->id) }}">
                                @csrf
                                @method('PUT')
                                @include('department.fields', [
                                    'action' => 'edit'
                                ])
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('additional_js')
    @include('department.js.edit')
@endpush