<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-left">
                        <h5 class="card-title mb-0">Master Riwayat Tindakan</h5>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Warga</th>
                            <th>Tanggal</th>
                            <th>Psikolog</th>
                            <th>Keterangan</th>
                            <th>Keluhan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($RiwayatTindakan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->dokter->name }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>{{ $item->tindakan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Striped Rows -->
</x-app-layout>