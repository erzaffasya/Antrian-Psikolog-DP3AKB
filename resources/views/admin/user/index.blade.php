<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-left">
                        <h5 class="card-title mb-0">Master User</h5>
                    </div>
                    {{-- <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">
                            <a href="{{ route('user.create') }}" class="btn btn-primary">
                                <span><i class="mdi mdi-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah
                                        Data</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>HP</th>
                            <th>Pekerjaan</th>
                            <th>Agama</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->hp }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            {{-- <a class="dropdown-item" href="{{ route('dokter.edit', $item->id) }}"><i
                                                    class="mdi mdi-pencil-outline me-1"></i> Edit</a> --}}
                                            <form method="POST" action="{{ route('user.destroy', $item->id) }}">
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
