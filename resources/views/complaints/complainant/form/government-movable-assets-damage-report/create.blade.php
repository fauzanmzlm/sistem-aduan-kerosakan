@extends('layouts.app')

@section('title')
    {{ $title ?? '' }}
@endsection

@section('content')
    @php
        $status = 0;
    @endphp
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BORANG LAPORAN ASET ALIH KERAJAAN</h4>
                    <p class="card-description">
                        Sila isi semua ruang yang bertanda <i>asterisk</i> (*) untuk melengkapkan borang. Kegagalan berbuat demikian boleh mengakibatkan ralat atau kelewatan dalam memproses permintaan anda. Terima kasih atas kerjasama anda.
                    </p>
                    <form action="{{ route('gov-mov-assets-damage-rpt.store') }}" id="form" method="POST">
                        @csrf
                        @include('complaints.complainant.form.government-movable-assets-damage-report.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('complaints.complainant.form.government-movable-assets-damage-report.js.create')
@endpush
