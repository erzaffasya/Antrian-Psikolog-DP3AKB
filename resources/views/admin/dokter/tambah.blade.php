<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Tambah Data Psikolog
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('dokter.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Kode</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-message-outline"></i>
                                        </span>
                                        <input id="basic-icon-default-message" class="form-control"
                                            name="kode" placeholder="Masukan Kode"
                                            aria-label="Masukan Kode"
                                            aria-describedby="basic-icon-default-message2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Psikolog</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <select class="form-select" name="users_id" id="exampleFormControlSelect1"
                                            aria-label="Default select example" required>
                                            @foreach ($User as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Batas Maksimal</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-message-outline"></i>
                                        </span>
                                        <input id="basic-icon-default-message" class="form-control"
                                            name="batas_maksimal" placeholder="Masukan Batas Maksimal"
                                            aria-label="Masukan Batas Maksimal"
                                            aria-describedby="basic-icon-default-message2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                    for="basic-icon-default-fullname">Layanan</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <select class="form-select" name="spesialis_id" id="exampleFormControlSelect1"
                                            aria-label="Default select example">
                                            @foreach ($Spesialis as $item)
                                                <option value="{{ $item->id }}">{{ $item->spesialis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Jam Mulai</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-message-outline"></i>
                                        </span>
                                        <input id="basic-icon-default-message" type="time" class="form-control"
                                            name="jam_mulai" placeholder="Masukan Deskripsi"
                                            aria-label="Masukan Deskripsi"
                                            aria-describedby="basic-icon-default-message2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Jam Selesai</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-message-outline"></i>
                                        </span>
                                        <input id="basic-icon-default-message" type="time" class="form-control"
                                            name="jam_selesai" placeholder="Masukan Deskripsi"
                                            aria-label="Masukan Deskripsi"
                                            aria-describedby="basic-icon-default-message2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Apakah Hari Ini
                                    Libur?</label>
                                <div class="col-sm-10">
                                    <div class="form-check mt-3">
                                        <input name="isLibur" class="form-check-input" type="radio" value="1"
                                            id="defaultRadio1">
                                        <label class="form-check-label" for="defaultRadio1"> Libur </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="isLibur" class="form-check-input" type="radio" value="0"
                                            id="defaultRadio2" checked="">
                                        <label class="form-check-label" for="defaultRadio2"> Tidak Libur </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a href="{{ route('dokter.index') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
