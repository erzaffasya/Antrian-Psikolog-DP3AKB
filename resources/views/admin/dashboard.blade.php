<x-app-layout>
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Gamification Card -->
            <div class="col-md-12 col-lg-12">
                <div class="card h-100">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="card-body">
                                <h4 class="card-title pb-xl-2">Selamat Datang {{ Auth::user()->name }}!🎉</h4>
                                <p class="card-text">Selamat datang di PUSPAGA, silahkan ambil antrian untuk mendapatkan pelayanan</p>
                                <a href="{{ route('ambil-antrian.index') }}" class="btn btn-primary">Ambil Antrian</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                <img src="{{ asset('tadmin/assets/img/illustrations/illustration-john-light.png') }}" height="180" alt="View Profile" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Gamification Card -->
    </div>
    <!--/ Content -->

</x-app-layout>