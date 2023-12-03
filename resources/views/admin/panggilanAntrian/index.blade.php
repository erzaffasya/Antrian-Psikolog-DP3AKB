<x-app-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            @include('admin.partials.navbar')

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row gy-4 mb-4">
                            <!-- Queue Cards -->
                            @foreach ($AntrianByDokter as $dokterId => $queues)
                            <div class="col-xl-3 col-md-3 col-sm-6">
                                <div class="card h-100 shadow">
                                    <div class="card-header bg-primary text-white">
                                        @php
                                        // Note: Ensure that dokter_id is correctly used here, without adding 1
                                        $doctor = \App\Models\Dokter::find($dokterId);
                                        @endphp
                                        <p class="fs-5 text-white">Dr. {{ $doctor->users->name ?? 'Doctor not found' }}</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <h6>Antrian Sekarang</h6>
                                            @if(isset($queues['current']) && $queues['current']->status === "P")
                                            <p class="fs-3 fw-bold text-primary">{{ $queues['current']->urut }}</p>
                                            @endif
                                        </div>
                                        <div class="text-center mb-3">
                                            <h6>Antrian Selanjutnya</h6>
                                            @if(isset($queues['next']))
                                            <p class="fs-3 fw-bold text-success">{{ $queues['next'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--/ Queue Cards -->
                        </div>
                    </div>
                    <!--/ Content -->




                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>
        </div>
    </div>

    <script>
        // Reload the page every X milliseconds (e.g., 30000 ms = 30 seconds)
        setTimeout(function() {
            window.location.reload(1);
        }, 10000);
    </script>

</x-app-layout>