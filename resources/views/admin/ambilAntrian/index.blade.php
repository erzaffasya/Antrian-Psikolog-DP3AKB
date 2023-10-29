<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Pilih Psikolog
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- <form method="post" action="{{ route('dokter.store') }}" enctype="multipart/form-data"> -->
                            <!-- @csrf -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Psikolog</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <select class="form-select" name="users_id" id="exampleFormControlSelect1"
                                            aria-label="Default select example" required>
                                            @foreach ($Dokter as $item)
                                                <option value="{{ $item->id }}">{{ $item->users->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                 <a href="{{ route('ambil-antrian.create') }}" class="btn btn-cancel">Ambil Antrian</a>
                                 <a href="{{ route('antrian.index') }}" class="btn btn-cancel">Kembali</a>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
