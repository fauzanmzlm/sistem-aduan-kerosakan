@extends('layouts.app')

@section('title', $title ?? '')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => $title ?? ''])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Lapor Aduan</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <h6>Senarai Borang Aduan</h6>
                    <ol>
                        <li>
                            <a target="_blank" href="{{ route('complainant.complaints.create') }}?form=1">
                                BORANG LAPORAN KEROSAKAN ASET ALIH KERAJAAN
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ route('complainant.complaints.create') }}?form=2">
                                BORANG LAPORAN KEROSAKAN INFRASTRUKTUR (BLKI)
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Senarai Aduan</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="example" class="table table-striped align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('complaints.complainant.js.index')
