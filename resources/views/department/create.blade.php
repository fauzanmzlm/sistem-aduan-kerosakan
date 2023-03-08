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
                            <form method="POST" action="{{ route('departments.store') }}">
                                @csrf
                                @include('department.fields', [
                                    'action' => 'create'
                                ])
                                <button type="submit" class="btn btn-success btn-sm">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

