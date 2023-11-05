<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Ambil Antrian
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4 col-6">
                    <div class="card-body">
                        <form method="post" action="{{ route('antrian.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"
                                    for="basic-icon-default-fullname">Psikolog</label>
                                <div class="col-sm-7">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <select class="form-select" name="dokter_id" id="exampleFormControlSelect1"
                                            aria-label="Default select example" required>
                                            @foreach ($Dokter as $item)
                                                <option value="">Pilih Psikolog</option>
                                                <option value="{{ $item->id }}">{{ $item->users->name }} - {{ $item->spesialis->spesialis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <label class="col-sm-3 col-form-label"
                                    for="basic-icon-default-fullname">Online/Offline</label>
                                <div class="col-sm-7">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <select class="form-select" name="isOnline" id="exampleFormControlSelect1"
                                            aria-label="Default select example" required>
                                            <option value="0">Offline</option>
                                            <option value="1">Online</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-end">
                                <div class="col-sm-10">
                                    <a href="{{ route('dashboard') }}" class="btn btn-cancel">Kembali</a>
                                    <button class="btn btn-cancel">Ambil
                                        Antrian</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
