<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="container-fluid my-5 d-flex">
                    <!-- Row for Queue Cards -->
                    <div class="row col-8">
                        <!-- Check if there is a current patient with 'P' status -->
                        <!-- Check if there is a current patient -->
                        @if(isset($AntrianForDokter['current']))
                        <div class="col-md-6">
                            <!-- Current Queue Card -->
                            <div class="card">
                                <div class="card-body bg-success text-white">
                                    <h5 class="card-title text-white text-center display-6">Antrian Saat Ini</h5>
                                    <!-- Show current queue number -->
                                    <p class="fw-bold text-white my-2 text-center display-1">{{ $AntrianForDokter['current']->urut }}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <!-- Display 'no current queue' message -->
                        <div class="col-md-6">
                            <!-- Current Queue Card -->
                            <div class="card">
                                <div class="card-body bg-success text-white">
                                    <h5 class="card-title text-white text-center display-6">Antrian Saat Ini</h5>
                                    <p class="fw-bold text-white my-2 text-center display-1">Tidak Ada Antrian</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Check if there is a next patient -->
                        @if(isset($AntrianForDokter['next']))
                        <div class="col-md-6">
                            <!-- Next Queue Card -->
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <h5 class="card-title text-white text-center display-6">Antrian Selanjutnya</h5>
                                    <!-- Show next queue number -->
                                    <p class="fw-bold text-white my-2 text-center display-1">{{ $AntrianForDokter['next'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <!-- Row for Action Buttons -->
                    @if (isset($AntrianForDokter['current']) != null)
                    <div class="row col-4">
                        <div class="col d-grid gap-2" style="margin-left: 10%;"> <!-- Use d-grid for full-width buttons -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="">Riwayat Tindakan</h5>
                                    <textarea class="form-control h-px-100" id="keterangan" name="keterangan" placeholder="Masukan Riwayat Tindakan..."></textarea>
                                    <!-- <input type="text" class="form-control" placeholder="Masukan Riwayat Tindakan" name="riwayat-tindakan" height="90"></input> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="">Riwayat Tindakan</h5>
                                    <textarea class="form-control h-px-100" id="keluhan" name="keluhan" placeholder="Masukan Riwayat Tindakan..."></textarea>
                                    <!-- <input type="text" class="form-control" placeholder="Masukan Riwayat Tindakan" name="riwayat-tindakan" height="90"></input> -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="">Riwayat Tindakan</h5>
                                    <textarea class="form-control h-px-100" id="tindakan" name="tindakan" placeholder="Masukan Riwayat Tindakan..."></textarea>
                                    <!-- <input type="text" class="form-control" placeholder="Masukan Riwayat Tindakan" name="riwayat-tindakan" height="90"></input> -->
                                </div>
                            </div>

                            <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#profilePasienModal">
                                <i class="fa fa-user me-2"></i>
                                Profil Pasien
                            </button>

                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#nextQueueModal">
                                <i class="fa fa-play me-2"></i>
                                Simpan & Panggil Antrian Selanjutnya
                            </button>


                        </div>

                        <!-- Autosize -->

                        <!-- <div class="card">
                                <h5 class="card-header">Autosize</h5>
                                <div class="card-body">
                                    <input type="text" class="form-control"></input>
                                </div>
                            </div>
                         -->
                        <!-- /Autosize -->
                    </div>
                    @endif

                </div>
            </div>
        </div>
        <!-- /Striped Rows -->
    </div>


    <!-- Modal Antrian Selanjutnya -->
    <div class="modal fade" id="nextQueueModal" tabindex="-1" aria-labelledby="nextQueueModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Panggil Antrian Selanjutnya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Konfirmasi untuk memanggil antrian selanjutnya.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="nextQueueModal">Panggil</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Antrian Selanjutnya -->

    <!-- Modal Profile User -->
    @if (isset($User))
    <div class="modal fade" id="profilePasienModal" tabindex="-1" aria-labelledby="profilePasienModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profilePasienModalLabel">Profile Pasien {{ $User->name }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <!-- <button type="button" class="btn btn-warning">Panggil</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- End Modal Profile User -->

    <!-- Modal Antrian Selesai -->
    <div class="modal fade" id="antrianSelesaiModal" tabindex="-1" aria-labelledby="antrianSelesaiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="antrianSelesaiModalLabel">Antrian Selesai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Konfirmasi untuk menyelesaikan antrian.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-success">Selesai</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Antrian Selesai -->

    <script>
        document.getElementById('nextQueueModal').addEventListener('click', function() {
            var keterangan = document.getElementById('keterangan').value;
            var keluhan = document.getElementById('keluhan').value;
            var tindakan = document.getElementById('tindakan').value;
            // Make an AJAX request to the route that handles the status update
            fetch('/update-status', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        keterangan: keterangan,
                        keluhan: keluhan,
                        tindakan: tindakan,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response, you can update the view if needed


                    // Close the confirmation modal
                    $('#nextQueueModal').modal('hide');
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>

</x-app-layout>