<h6>Maklumat Pengadu</h6>
<div class="row">
    <div class="form-group col-md-6">
        <label>Nama</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label>Tarikh Aduan</label>
        <input type="text" name="complaint_date" id="complaint_date" class="form-control" placeholder="">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label>Jabatan</label>
        <input type="text" name="department" id="department" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label>Lokasi</label>
        <input type="text" name="location" id="location" class="form-control" placeholder="">
    </div>
</div>
<div class="form-group col-12">
    <label>Tandatangan</label>
    <div>
        <div id="complainant_signature_area">
            <canvas id="complainant_canvas">Canvas is not supported</canvas>
            <div class="mb-2">
                <small class="form-text">(Pegawai yang melapor kerosakan hendaklah manandatangani ruangan yang disediakan)</small>
            </div>
            <div>
                <button class="btn btn-primary" id="btnSubmitComplainantSignature">
                    Submit Sign
                </button>
                <button class="btn btn-danger" id="btnClearComplainantSignature">
                    Clear Sign
                </button>
            </div>
            <input type="hidden" name="complainant_signature" id="complainant_signature">
        </div>
    </div>
</div>
<h6>Butiran Kerosakan Peralatan</h6>
<div class="form-group">
    <textarea type="text" name="name" id="name" class="form-control" rows="5" cols="5"></textarea>
</div>
<h6>Tindakan Pegawai Aset Jabatan/Unit/Penolong Jurutera</h6>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Jenis Aset</label>
        <input type="text" name="department" id="department" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="">Keterangan Aset</label>
        <input type="text" name="location" id="location" class="form-control" placeholder="">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">No. Siri Pendaftaran</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="">Kos Penyelenggaraan Terdahulu (Jika Ada)</label>
        <input type="text" name="complaint_date" id="complaint_date" class="form-control" placeholder="">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Pengguna Terakhir</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="">Tarikh Kerosakan</label>
        <input type="text" name="complaint_date" id="complaint_date" class="form-control" placeholder="">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">Perihal Kerosakan</label>
        <input type="text" name="department" id="department" class="form-control" placeholder="">
    </div>
</div>
<style>
    .table-bordered-custom {
        border-collapse: collapse;
    }

    .table-bordered-custom th {
        border: 1px solid lightgray;
    }

    .table-bordered-custom th:last-child, .table-bordered-custom th:first-child {
        border: 1px solid lightgray;
    }

    .table-bordered-custom > :not(:last-child) > :last-child > * {
        border-bottom-color: lightgray;
    }

    .table-bordered-custom > tbody > tr {
        border: 1px solid lightgray;
    }

    .table-bordered-custom > tbody > tr > td {
        border: 1px solid lightgray;
    }

    .table-bordered-custom > tbody > tr > td:first-of-type {
        border: 1px solid lightgray;
    }

    .table-bordered-custom > tbody > tr > td:last-of-type {
        border: 1px solid lightgray;
    }
</style>
<div class="row py-3">
    <div class="col">
        <div class="">
            <div class="table-responsive">
                <table class="table table-bordered-custom align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                Bil
                            </th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                Kategori Kerosakan
                            </th>
                            <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                Tandakan (√)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($damageCategories as $damageCategory)
                            <tr>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{ $damageCategory->number ?? '' }}</p>
                                </td>
                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ $damageCategory->name ?? '' }}</p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center align-middle text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="">Catatan</label>
    <textarea type="text" name="note" id="note" class="form-control" rows="5" cols="5"></textarea>
</div>
<div class="form-group">
    <label>Tandatangan</label>
    <div>
        <div id="asset_officer_signature_area">
            <canvas id="asset_officer_canvas">Canvas is not supported</canvas>
            <div class="mb-2">
                <small class="form-text">(Pegawai Aset Jabatan/Penolong Jurutera Jabatan hendaklah menandatangani ruangan yang disediakan)</small>
            </div>
            <div>
                <button class="btn btn-primary" id="btnSubmitAssetOfficerSignature">
                    Submit Sign
                </button>
                <button class="btn btn-danger" id="btnClearAssetOfficerSignature">
                    Clear Sign
                </button>
            </div>
            <input type="hidden" name="asset_officer_signature" id="asset_officer_signature">
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label>Nama</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label>Tarikh</label>
        <input type="text" name="complaint_date" id="complaint_date" class="form-control" placeholder="">
    </div>
</div>