@extends('layouts.app')

@section('title')
    {{ $title ?? '' }}
@endsection

@section('content')
    <form action="{{ route('complaints.store') }}" id="form">
        @csrf
        @include('complaints.complainant.form.government-movable-assets-damage-report.fields')
    </form>
@endsection

@push('scripts')
    @include('complaints.complainant.form.government-movable-assets-damage-report.js.create')
@endpush
