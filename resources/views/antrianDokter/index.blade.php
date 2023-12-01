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
                    <div class="row col-4">
                        <div class="col d-grid gap-2" style="margin-left: 10%;"> <!-- Use d-grid for full-width buttons -->

                            <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#panggilUlangModal">
                            <i class="fa fa-redo me-2"></i> <!-- Replace with the icon you want -->
                            Panggil Ulang Antrian
                            </button>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#nextQueueModal" >
                                <i class="fa fa-play me-2"></i>
                                Panggil Antrian Selanjutnya
                            </button>

                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#antrianSelesaiModal">
                            <i class="fa fa-check me-2"></i> <!-- Replace with the icon you want -->
                            Selesai
                            </button>
                        </div>
                    </div>
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
        <button type="button" class="btn btn-primary"  id="nextQueueModal">Panggil</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Antrian Selanjutnya -->

<!-- Modal Panggil Ulang Selanjutnya -->
<div class="modal fade" id="panggilUlangModal" tabindex="-1" aria-labelledby="panggilUlangModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="panggilUlangModalLabel">Panggil Ulang Antrian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Konfirmasi untuk panggil ulang antrian.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-warning">Panggil</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Panggil Ulang Selanjutnya -->

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
    document.getElementById('nextQueueModal').addEventListener('click', function () {
        // Make an AJAX request to the route that handles the status update
        fetch('/update-status', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({}),
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response, you can update the view if needed
            console.log(data);

            // Close the confirmation modal
            $('#nextQueueModal').modal('hide');
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

</x-app-layout>


