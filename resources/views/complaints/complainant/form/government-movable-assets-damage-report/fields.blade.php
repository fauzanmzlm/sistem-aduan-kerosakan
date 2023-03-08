<div class="pt-4 border-top">
    <div class="mt-1">
        <div class="accordion" id="accordion" role="tablist">
            <div class="card border-bottom">
                <div class="card-header" role="tab" id="heading-1">
                    <h6 class="mb-0">
                        <a data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Maklumat Pengadu
                        </a>
                    </h6>
                </div>
                <div id="collapse-1" class="collapse show" role="tabpanel" aria-labelledby="heading-1"
                    data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder=""
                                    value="{{ auth()->user()->name ?? 'Unknown Name' }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Jabatan</label>
                                <input type="text" name="department" id="department" class="form-control"
                                    value="" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="location">Lokasi</label>
                                <input type="text" name="location" id="location" class="form-control"
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="complaint_date">Tarikh Aduan</label>
                                {{-- <input type="text" name="complaint_date" id="complaint_date" class="form-control" placeholder=""> --}}
                                <div id="datepicker-popup" class="input-group date datepicker">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon input-group-append border-left">
                                        <span class="mdi mdi-calendar input-group-text"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complainant_signature">Tandatangan</label>
                            <div class="mb-3">
                                <small class="form-text">(Pegawai yang melapor kerosakan hendaklah manandatangani
                                    ruangan yang
                                    disediakan)</small>
                            </div>
                            <div id="complainant_signature_area">
                                <canvas id="complainant_canvas" class="mb-2">Canvas is not supported</canvas>
                                <div class="pb-1"><button class="btn btn-primary"
                                        id="btnSubmitComplainantSignature">Sahkan
                                        Tandatangan</button></div>
                                <div><button class="btn btn-danger" id="btnClearComplainantSignature"
                                        style="width: 173.05px;">Hapus
                                        Tandatangan</button></div>
                                <input type="hidden" name="complainant_signature" id="complainant_signature">
                            </div>
                        </div>
                        <h6 class="mt-3">Butiran Kerosakan Peralatan</h6>
                        <div class="form-group">
                            <textarea name="equipment_damage_details" id="equipment_damage_details" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-bottom">
                <div class="card-header" role="tab" id="heading-2">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-2" aria-expanded="false"
                            aria-controls="collapse-2">
                            Tindakan Pegawai Aset Jabatan/Unit/Penolong Jurutera
                        </a>
                    </h6>
                </div>
                <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2"
                    data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="jenis-aset">Jenis Aset</label>
                                <input type="text" name="department" id="jenis-aset" class="form-control"
                                    placeholder="Masukkan jenis aset">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="keterangan-aset">Keterangan Aset</label>
                                <input type="text" name="location" id="keterangan-aset" class="form-control"
                                    placeholder="Masukkan keterangan aset">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="no-siri-pendaftaran">No. Siri Pendaftaran</label>
                                <input type="text" name="name" id="no-siri-pendaftaran" class="form-control"
                                    placeholder="Masukkan no. siri pendaftaran">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kos-penyelenggaraan">Kos Penyelenggaraan Terdahulu (Jika Ada)</label>
                                <input type="text" name="complaint_date" id="kos-penyelenggaraan"
                                    class="form-control" placeholder="Masukkan kos penyelenggaraan terdahulu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="pengguna-terakhir">Pengguna Terakhir</label>
                                <input type="text" name="name" id="pengguna-terakhir" class="form-control"
                                    placeholder="Masukkan pengguna terakhir">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tarikh-kerosakan">Tarikh Kerosakan</label>
                                <input type="text" name="complaint_date" id="tarikh-kerosakan"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="perihal-kerosakan">Perihal Kerosakan</label>
                                <input type="text" name="department" id="perihal-kerosakan" class="form-control"
                                    placeholder="Masukkan perihal kerosakan">
                            </div>
                        </div>
                        <style>
                            .table-damage-category>thead>tr>th {
                                text-align: center;
                                text-transform: uppercase;
                            }
                        </style>
                        <div class="row py-3">
                            <div class="col">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-damage-category">
                                            <thead>
                                                <tr>
                                                    <th>Bil</th>
                                                    <th>Kategori Kerosakan</th>
                                                    <th>Tandakan (√)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($damageCategories as $damageCategory)
                                                    <tr>
                                                        <td class="align-middle text-center">
                                                            <p class="mb-0">{{ $damageCategory->number ?? '' }}</p>
                                                        </td>
                                                        <td class="align-middle">
                                                            <p class="mb-0">{{ $damageCategory->name ?? '' }}</p>
                                                        </td>
                                                        <td class="">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center ">
                                                                <div
                                                                    class="form-check form-check-flat form-check-primary">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox"
                                                                            class="form-check-input">
                                                                    </label>
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
                                        <small class="form-text">(Pegawai Aset Jabatan/Penolong Jurutera Jabatan
                                            hendaklah menandatangani
                                            ruangan yang disediakan)</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" id="btnSubmitAssetOfficerSignature">
                                            Submit Sign
                                        </button>
                                        <button class="btn btn-danger" id="btnClearAssetOfficerSignature">
                                            Clear Sign
                                        </button>
                                    </div>
                                    <input type="hidden" name="asset_officer_signature"
                                        id="asset_officer_signature">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tarikh</label>
                                <input type="text" name="complaint_date" id="complaint_date" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center mt-3">
        <button type="submit" class="btn btn-primary">
            Hantar
        </button>
    </div>

</div>
