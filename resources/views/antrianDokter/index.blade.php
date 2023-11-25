<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Striped Rows -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="container-fluid my-5 d-flex">
                    <!-- Row for Queue Cards -->
                    <div class="row col-8">
                        <div class="col-md-6">
                            <!-- Queue Waiting Card -->
                            <div class="card">
                                <div class="card-body bg-primary text-white">
                                    <h5 class="card-title text-white text-center display-4">Menunggu</h5>
                                    <p class="card-text display-2 text-center py-4">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Current Queue Card -->
                            <div class="card ">
                                <div class="card-body bg-success text-white">
                                    <h5 class="card-title text-white text-center display-4">Antrian Saat Ini</h5>
                                    <p class="card-text display-2 text-center py-4">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row for Action Buttons -->
                    <div class="row col-4">
                        <div class="col d-grid gap-2" style="margin-left: 10%;"> <!-- Use d-grid for full-width buttons -->
                            <button type="button" class="btn btn-primary mb-2">
                            <i class="fa fa-play me-2"></i> <!-- Replace with the icon you want -->
                            Panggil Antrian Selanjutnya
                            </button>
                            <button type="button" class="btn btn-warning mb-2">
                            <i class="fa fa-redo me-2"></i> <!-- Replace with the icon you want -->
                            Panggil Ulang Antrian
                            </button>
                            <button type="button" class="btn btn-danger mb-2">
                            <i class="fa fa-exclamation-circle me-2"></i> <!-- Replace with the icon you want -->
                            Panggil Antrian Tertentu
                            </button>
                            <button type="button" class="btn btn-success">
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
</x-app-layout>
