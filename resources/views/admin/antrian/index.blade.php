<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-left">
                        <h5 class="card-title mb-0">Master Antrian</h5>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($Antrian as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>
                                    @php
                                        $nextDoctor = \App\Models\User::find($item->dokter_id + 1);
                                    @endphp
                                    {{ $nextDoctor->name ?? 'Doctor not found' }}
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            {{-- <a class="dropdown-item" href="{{ route('dokter.edit', $item->id) }}"><i
                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a> --}}
                                            <form method="POST" action="{{ route('antrian.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="dropdown-item">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                                </button>
                                            </form>
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
    <!--/ Striped Rows -->
</x-app-layout>
